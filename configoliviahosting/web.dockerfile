FROM nginx:alpine

ADD ./laravelVHost.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www