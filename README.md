# hu
Group Member: 
Chenhai Hu
Wanying Li
Danfeng Wang
Zhouwu Zihuang
Website link:https://elearningsystem.herokuapp.com/

Thchnology usage: PHP5, MySQL, Codeigniter, Heroku, Git, Javascript, Jquery, Ajax, HTML5, CSS3, Bootstrap, PayPall

隐藏入口文件，需要在根目录创建.htaccess文件，内容：
<IfModule mod_rewrite.c>

 RewriteEngine on
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteCond %{REQUEST_FILENAME} !-d

 <IfModule mod_php5.c>
     RewriteRule ^(.*)$ index.php/$1 [L]
 </IfModule>

 <IfModule !mod_php5.c>
     RewriteRule ^(.*)$ index.php?/$1 [L]
 </IfModule>
 
</IfModule>
