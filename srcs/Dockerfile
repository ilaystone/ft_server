FROM debian:buster

RUN apt-get update && apt-get -y upgrade && apt-get install -y nginx
RUN apt-get -y install default-mysql-server
RUN apt-get install -y php7.3 php-fpm php-cgi php-mysqli php-pear \
	php-mbstring php-gettext php-common php-phpseclib php-mysql \
	php-curl php-gd php-intl php-soap php-xml php-xmlrpc php-zip
RUN apt install wget -y && \
	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip && \
	apt install unzip -y && \
	unzip phpMyAdmin-4.9.0.1-all-languages.zip && \
	mv phpMyAdmin-4.9.0.1-all-languages /usr/share/phpmyadmin && \
	rm phpMyAdmin-4.9.0.1-all-languages.zip
RUN ln -s /usr/share/phpmyadmin/ /var/www
RUN mkdir /usr/share/phpmyadmin/tmp && chmod 777 /usr/share/phpmyadmin/tmp
COPY ./srcs/config.inc.php /usr/share/phpmyadmin/config.inc.php
ADD ./srcs/nginx.conf /etc/nginx/sites-available/default
ADD ./srcs/wordpress /var/www/wordpress
RUN service nginx restart
COPY ./srcs/conf.sql /sqlconf.txt
COPY ./srcs/phpmyadmin.sql /pmaconf.txt
RUN service mysql start && mysql -uroot mysql < "/sqlconf.txt"
RUN service mysql start && mysql -uroot phpmyadmin < "/pmaconf.txt"
COPY ./srcs/info.php /var/www/html/info.php
COPY ./srcs/start.sh /start.sh
RUN chmod 777 /start.sh

EXPOSE 80 443
ENTRYPOINT [ "./start.sh" ]
