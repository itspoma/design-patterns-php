FROM centos:6
MAINTAINER itspoma <itspoma@gmail.com>

RUN yum -y update \
   && yum clean all

RUN yum -y install git make autoconf gcc bison libxml2-devel \
    && cd /opt \
    && git clone https://git.php.net/repository/php-src.git --depth=1 \
    && mv /opt/php-src /opt/php7-src \
    && cd /opt/php7-src \
    && ./buildconf --force \
    && ./configure --quiet --prefix=$HOME/php7/usr --with-config-file-path=$HOME/php7/usr/etc \
    && make --quiet \
    && make install \
    && cp /opt/php7-src/sapi/cli/php /usr/local/bin/php

CMD ["php", "-a"]