# install cockpit,

* destination directory `./cockpit`
* remove `config.yaml` file
* `cp cockpi-config.php => ./cockpit/config/`

# doc
* https://github.com/raffaelj/cockpit-scripts/tree/master/custom-fields
* https://getcockpit.com/documentation/reference/fieldtypes
* https://discourse.getcockpit.com/
* https://github.com/agentejo/lime (micro web framework)

# install addons

* `git clone https://github.com/raffaelj/cockpit_ImageResize addons/ImageResize`
* `git clone https://github.com/pauloamgomes/CockpitCMS-Helpers addons/Helpers`
* https://github.com/pauloamgomes/CockpitCMS-Moderation

# install docker
* https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04

# build docker image
* `source alias.sh`
* `docker build -t self/cockpit - < Dockerfile`

# docker images

* `docker images`

# run docker

* `export APP_HOME=/home/evaleto/nodejs/evaletolab.ch/bmg-cockpit/cockpit/`
* `sudo docker run -i -t -p "8080:80" -v "${APP_HOME}:/var/www/html"  self/cockpit:latest`

# remove images

* `sudo docker rm $(sudo docker ps -a -q)`
* `sudo docker rmi $(sudo docker images -q)`

# shell 

``` bash
docker ps
docker exec -it [ID] /bin/bash
tail -f /var/log/apache2/error.log
sudo docker stop [ID]
```
