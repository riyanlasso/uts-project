FROM openjdk:8-jdk-alpine
MAINTAINER riyanlasso<riyanlasso@gmail.com>
RUN mkdir -p /app
WORKDIR /app

COPY /home/ubuntu/uts-project /app


