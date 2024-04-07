### Muilti-Container app with PHP-FPM - MYSQL - NGINX

```bash
# Docker version info
docker --version
# Detailed information about Docker Daemon (containers, images, daemon status etc.)
docker info
# List of Installed Images
docker image ls
# Create a container from an image
docker exec [options] CONTAINER COMMAND
# List of running containers
docker ps
# List of all containers
docker ps -a
# Start a container with name
docker run --name 'container_name' 'image_name'
# Runs container and sets the shell environment
docker run -it 'image_name' 'shell_location'
# Remove dangling (<none>) images
docker image prune --filter="dangling=true"
# Run a container in background
docker run -d -p 8080:80 'image_name'
# Removes all instances of specified image then creates a new one
docker run -it --rm [IMAGE] [SHELL]
# Removes everything from cache
docker system prune
```
