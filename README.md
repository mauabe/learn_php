#Learn PHP

This repository has basic instructions to setup and start a Docker running an Apache2 server to exdcute PHP on `http://localhost:8000`

Basic commands to start a Docker service:

Turn on the Docker on Docker Desktop.

`make build` - build Docker image.  
`make up` - service might already be up.  
`make enter` - enter Docker.  
`make down` - stop docker.  
`make clean` - stop and remove all Docker containers.  

For example, to run `var_dump.php` file, type `http://localhost:8000/var_dump.php` onto the browser.