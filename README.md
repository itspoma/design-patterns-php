$ boot2docker version
Boot2Docker-cli version: v1.3.1
Git commit: 57ccdb8

$ docker --version
Docker version 1.3.1, build 4e9bbfa

$ boot2docker init
$ boot2docker up
$ boot2docker ssh
boot2docker$ cd /Users/poma/Dev/design-patterns-php/

sh run/build.sh
sh run/run.sh
sh run/ssh.sh
sh run/stop.sh
sh run/destroy.sh

docker port design-patterns-php7-instance

docker inspect design-patterns-php7-instance

docker logs design-patterns-php7-instance
-- http://<docker host>:4243/containers/<container name>/logs?stdout=1&stderr=1