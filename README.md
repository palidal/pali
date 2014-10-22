pali
====
    Configurar Pali en tu máquina local
Para GNU/Linux o Microsoft Windows 
<ul>
<li>Tener instalado apache2 y php5.</li>
<li>Descargar un software que maneje GIT.</li>
<li>Obtener una copia del proyecto Pali de GitHUB (https://github.com/palidal/pali.git) y colocarlo en e lugar donde se deben de colocar los sitios web. En mi Debian Wheezy es en /var/www/. Depende de cada uno.</li>
<li>Crear un virtualHost de apache con una configuración similar a esta. (Depende del Sistema Operativo).</li>
<VirtualHost *:80>
    ServerAdmin josego@simgia.com
    DocumentRoot "/var/www/pali/fuentes"
    ServerName pali
    ErrorLog "/var/log/apache2/pali.error.log"
    CustomLog "/var/log/apache2/pali.access.log" common
</VirtualHost>
<li>Habilitar el sitio del VirtualHost. Por ejemplo en Debian Wheezy sería sudo a2ensite pali. Después reiniciar el servidor apache2.</li>
<li>Habilitar el modulo rewrite de apache2 (Después reiniciar el servidor apache).</li>
<li>Entrar al archivo host y agregar lo siguiente: 
127.0.0.1 pali</li>
<li>Luego entrar a tu navegador favorito y escribir http://pali</li>
<li>Debería de entrar al sitio y mostrar un texto.</li>
</ul>
