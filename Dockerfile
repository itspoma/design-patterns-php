FROM centos:6
MAINTAINER itspoma <itspoma@gmail.com>

ENV container docker

RUN yum -y update && yum clean all

RUN yum -y install httpd
RUN yum -y install php
# RUN yum -y install nano mc

# yum -y install git autoconf gcc bison
# mkdir /tmp/php7 && cd /tmp/php7
# git clone https://git.php.net/repository/php-src.git
# cd php-src
# ./buildconf
# ./configure --prefix=$HOME/php7/usr --with-config-file-path=$HOME/php7/usr/etc
# make
# make install
# cd sapi/cli
# ./php -v

RUN rm -rf /etc/httpd/conf.d/*.conf
ADD ./setup/httpd/ /etc/httpd/conf.d/

RUN chkconfig httpd on
RUN service httpd restart

RUN ln -sf /dev/stdout /var/log/httpd/access.log
RUN ln -sf /dev/stderr /var/log/httpd/error.log

EXPOSE 80

# RUN /usr/sbin/httpd -D FOREGROUND
# RUN systemctl restart httpd.service

CMD ["/sbin/init"]