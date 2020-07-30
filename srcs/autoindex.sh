
# Arquivo dedicado a ligar ou desligar o autoindex, que permite acesso total como adm do site ou não.

# NGINX config file location.
# Determina a qual arquivo as ações seguintes vão se referir, e sua localização. No caso arquivo quando chamar "nginx_file", estáse referindo ao arquivo "default".
nginx_file='/etc/nginx/sites-enabled/default'

# Searches file for "autoindex on".
# Usa o comando grep para encontrar as palavras chave para determinar o autoindex.
grep "autoindex on;" "$nginx_file" > /dev/null

# If it finds "autoindex on", switches it OFF.
# Quando encontrado "autoindex on", transforma no arquivo de configurações (usando comando sed) em "off".
if [ "$?" = "0" ]; then
	echo "AutoIndex está ligado. Desligando."
	sed -i 's|autoindex on|autoindex off|g' "$nginx_file"
	sed -i 's|root /var/www/localhost;|root /var/www/localhost/wordpress;|g' "$nginx_file"
	autoindex="OFF";

# Else, switches it ON.
# Quando não encontra "autoindex on", presupõe que está desligado, então liga-se. Também usando comando sed para alterar o arquivo.
else
	echo "AutoIndex is currently OFF. Turning it ON"
	sed -i 's/autoindex off/autoindex on/g' "$nginx_file"
	sed -i 's|root /var/www/localhost/wordpress;|root /var/www/localhost;|g' "$nginx_file"
	autoindex="ON";
fi

# Restarts NGINX and confirms switch.
# Reinicia NGINX para aplicar as alterações feitas acima (ligar ou desligar as autorizações de acesso).
echo "Restarting NGINX"
/etc/init.d/nginx restart
echo -e "AutoIndex is now $autoindex!"
