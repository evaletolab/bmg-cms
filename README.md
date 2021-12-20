# install cockpit,

* destination directory ./cockpit
* remove config.yaml file
* cp cockpi-config.php => ./cockpit/config/


# install addons

* git clone https://github.com/raffaelj/cockpit_ImageResize.git addons/ImageResize
* git clone https://github.com/pauloamgomes/CockpitCMS-Helpers addons/Helpers

# build docker image
* source alias.sh
* docker build -t self/cockpit - < Dockerfile

# docker images

* docker images 

# run docker

* export APP_HOME=/home/evaleto/nodejs/evaletolab.ch/bmg-cockpit/cockpit/ 
* sudo docker run -i -t -p "8080:80" -v "./cockpit:/var/www/html"  self/cockpit:latest 

# remove images

* sudo docker rm $(sudo docker ps -a -q)
* sudo docker rmi $(sudo docker images -q)

# shell 

```
sudo docker ps
sudo docker exec -it [ID] /bin/bash
tail -f /var/log/apache2/error.log
sudo docker stop [ID]
```