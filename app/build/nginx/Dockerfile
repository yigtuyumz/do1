FROM nginx:latest

RUN apt update
RUN apt upgrade -y
RUN apt-get install vim -y

RUN rm /etc/nginx/conf.d/default.conf
COPY ./server.conf /etc/nginx/conf.d/server.conf

