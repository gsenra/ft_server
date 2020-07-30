# Uses Debian Buster image from Dockerhub as a base.
# Determina que a imagem a ser usada é a Debian Buster, e vem da base oficial do Dockerhub.
FROM debian:buster

# Updates Debian Buster.
# Autalizando Debian Buster.
RUN apt-get update && apt-get upgrade

# Copy source files to the root of the container.
# Copia os arquivos de configurações criados (srcs) para a pasta raiz.
COPY srcs /root/

# Server setup.
# Roda as configurações através de um script (para garantir a ordem dos fatores).
RUN bash /root/setup.sh

# Expose network ports that are going to be used.
# Abre as portas a serem usadas. Sendo a porta 80 protocolo HTTP (sem chave de sergurança), e a 443 HTTPS (com chave de segurança).
EXPOSE 80/tcp
EXPOSE 80/udp

EXPOSE 443/tcp
EXPOSE 443/udp

# Start services.
# Inicializa.
ENTRYPOINT bash /root/start.sh

# Keeps container running
# Mantem o conteiner rodando por tempo indeterminado.
CMD tail -f /dev/null
