docker run \
    -p 80:80 \
    -v $(pwd)/src:/var/www/html:rw \
    -d -i \
    --name=design-patterns-php7-instance \
    design-patterns-php7