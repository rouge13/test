# symfony_lemp_docker_starter


A simple way to create a Symfony application using Docker.

The stack contain :

 - Nginx

 - PHP-fpm

 - mysql

 - adminer

# usage

Take a look at the __apps__ folder :
 - copy paste your current application in there or init a new project with __symfony new APP_NAME__
 - update de __.env__ file and repalce the : APP_NAME part with the name of your app...
 - build...
 - __docker-compose up -d__ 
 - check at http://localhost:90, your app should be running :-)
 
You can change the 90 port in the __.env__ file



