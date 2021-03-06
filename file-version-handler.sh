#!/bin/bash
# This script runs in deploy of website to ensure that cacheing on files works well.
# It replaces the tag @@last_modified_date@@ with last modified date of file, minutes and seconds
#
# Changelog:
# 2021-11-29 TOR Second version
# 2021-11-29 RRO First version

#
# Varablies
#

# The HTML files to look at
htmlFiles=($(ls -la code/*.html | awk '{print $9}'));

# Number of files to look at
number_of_files_to_look_at=${#htmlFiles[@]};

#
# Functions
#

# Loops over all html files in directory projects/cometa_website/code/ in attempt to find tag @@last_modified_date@@ and replace it with files last modification
function  set_css_js_extension_version() {
    # looping over HTML files
    for (( i=0; i<$number_of_files_to_look_at; i++ ));
	do
		echo "";
		echo "";

		# Extract last modified date from file
		last_modified_date_of_file=$(date -r ${htmlFiles[$i]} +%s);

		# Inform about which file is currently inspected
		echo "Inspecting file ${htmlFiles[$i]} - last modified date of file: $last_modified_date_of_file";

		# Inform about tag replacment attempt
		echo "Attempting to replace tag @@last_modified_date@@ in ${htmlFiles[$i]}";

		# Attempt tag replacment. /w of sed redirects modification logs into a file named changelog.txt which is then used to detect if file has been modified
		sed -i "s/@@last_modified_date@@/$last_modified_date_of_file/w changelog.txt" ${htmlFiles[$i]};

		# Check if file has been modified by sed
		if [ -s changelog.txt ]; then
			#inform user about successful tag replacment
			echo "Tag has been found in ${htmlFiles[$i]}, proceeding to replacment";
		else
			#inform user that tag has not been found in file
			echo "Tag has not been found in ${htmlFiles[$i]}"
		fi

		rm changelog.txt;
	done
}

function help() {
	echo ".... "
}

set_css_js_extension_version;

#
# Commandline parameters
#

