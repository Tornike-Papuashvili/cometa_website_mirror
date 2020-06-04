# COMETA WEBSITE

Cometa Website promotes only the cometa software and links to AMVARA website.

## Getting started
Change to Amvara projects folder

```
cd /home/amvara/projects
```

clone via git + change to the new directory

```
git clone ssh://git@git.amvara.de:2223/amvararuben/cometa_website.cd cometa_website
```

Start the docker container
```
sudo docker-compose up
```

This will start the docker and make the website available at http://127.0.0.1:8010/

For details see: https://redmine.amvara.de/projects/cometa/wiki/CometaWebSite