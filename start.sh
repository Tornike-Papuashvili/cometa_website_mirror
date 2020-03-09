#!/bin/bash

echo -e "\e[37mStartup cleanup...\e[0m"
echo "" > output.log 2>&1
echo -e "\e[37mCopying files to public folder...\e[0m"
cp -a /code/dist/. /usr/share/nginx/html/ >> output.log 2>&1
echo -e "\e[32mOK\e[0m"
echo -e "\e[32mSuccessful\e[0m"
nginx -g 'daemon off;'