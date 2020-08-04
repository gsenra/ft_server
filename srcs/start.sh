# Arquivo dedicado a inicialização dos serviços.

#!/bin/bash

# Start php.
/etc/init.d/php7.3-fpm start

# Start MySQL.
/etc/init.d/mysql start

# Start NGINX.
/etc/init.d/nginx start

# Leaves container interactive so you can snoop around.
# Permite interações com o container.
bash
