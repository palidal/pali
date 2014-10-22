pali
====
    Configurar Pali en tu máquina local
Para GNU/Linux o Microsoft Windows 
<ul>
<li>Tener instalado apache2 y php5.</li>
<li>Descargar un software que maneje GIT.</li>
<li>Obtener una copia del proyecto <a href="https://github.com/palidal/pali.git" target = "_blank">Pali de GitHUB</a>) y colocarlo en e lugar donde se deben de colocar los sitios web. En mi Debian Wheezy es en <b>/var/www/</b>. Depende de cada uno.</li>
<li>Crear un virtualHost de apache con una configuración similar a esta. (Depende del Sistema Operativo).</li>
<code>&lt;VirtualHost *:80&gt;
    <br>ServerAdmin josego@simgia.com
    <br>DocumentRoot "/var/www/pali/fuentes"
    <br>ServerName pali
    <br>ErrorLog "/var/log/apache2/pali.error.log"
    <br>CustomLog "/var/log/apache2/pali.access.log" common
&lt;/VirtualHost&gt;
</code>
<li>Habilitar el sitio del VirtualHost. Por ejemplo en Debian Wheezy sería sudo a2ensite pali. Después reiniciar el servidor apache2.</li>
<li>Habilitar el modulo rewrite de apache2 (Después reiniciar el servidor apache).</li>
<li>Entrar al archivo host y agregar lo siguiente: 
127.0.0.1 pali</li>
<li>Luego entrar a tu navegador favorito y escribir <b>http://pali</b></li>
<li>Debería de entrar al sitio y mostrar un texto.</li>
</ul>
