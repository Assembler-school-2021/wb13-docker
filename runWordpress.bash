#!/bin/bash
docker volume create mysql-db-data
docker build -t enriquesanzsqy/wp . && \
docker run -p 80:80 -v mysql-db-data:/var/lib/mysql -d enriquesanzsqy/wp