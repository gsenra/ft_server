# ft_server
This is a student project for 42 São Paulo. The objective is to set up a NGINX web server on a Docker container, running a Wordpress website and a SQL database managed through phpMyAdmin. All of those services must interact smoothly with each other.

Este é um projeto de estudo da 42 São Paulo. O objetivo é configurar um servidor web NGINX em um Docker container, rodando um site Wordpress e database SQL. Todos os serviços devem funcionar sem atritos.

# How to run it:
# Como rodar:

To create an image from the Dockerfile, while inside the main ft_server folder, enter **docker build -t image_name .**
Para criar uma imagem do Dockerfile, dentro da pasta ft_server, de o comando **docker build -t image_name .**

To start your container, enter **docker run --name container_name -it -p 80:80 -p 443:443 image_name**
Para startar o container, de o comando **docker run --name container_name -it -p 80:80 -p 443:443 image_name**

To turn AutoIndex on or off, while inside the container, enter **bash root/autoindex.sh**
Para ligar ou desligar o AutoIndex, de o comando **bash root/autoindex.sh** dentro do container.

To access the website, go to localhost (or 127.0.0.1) on your browser.
Para acessar o site, abra o localhost ou 127.0.0.1 no seu navegador.


# Other useful commands:
# Comandos uteis:

**docker container ps -a**
Lists all containers.
Listar containers.

**docker image**
Lists all images.
Listar imagens.

**docker rm container_name** - Removes container | Remover container.

**docker rm $(docker ps -aq)** - Removes all existing containers | Remover todos os containers existentes.

**docker rmi image_name** - Removes image | Rmover imagem.

**docker rmi $(docker images -q)** - Removes all existing images | Remover todas as imagens existentes.

**docker start/stop container_name** - Turns container on or off | Ligar ou desligar o container.

**docker attach container_name** - Enters container | Entrar no container.

While inside the container:
Dentro do Container:

**CTRL + D** - Exits and stops the container | Sair e parar.

**CTRL + P, CTRL + Q** - Exits container and keeps it running | Sair e manter rodando.
