<?php
# Planet VaSlibre
/* -------------------------------------------------------
Script  bajo los términos y Licencia
GNU GENERAL PUBLIC LICENSE
Ver Terminos en:
http://www.gnu.org/copyleft/gpl.html
Desarrollo: Hector A. Mantellini (Xombra)

VASLIBRE
http://vaslibre.org.ve
-------------------------------------------------------- */

#Valores del sistema

# Redes sociales

   $nombre_sitio = 'Planet VaSlibre';
   $twitter  = 'vaslibre';  # cuenta twitter
   $facebook = '26465149152'; # pagina de facebook
   $youtube  = ''; # canal de youtube
   $glus     = '104909365331295810049'; #pagina de gplus

#  Cache del sitio

   $timecache    = 60; # 2 horas
   $urlcache     = 'cache/index.html';
  
	//  feeds | RSS
/*	$feeds = array (
		"Mint"              => "http://blog.linuxmint.com/?feed=rss2",
        "xombra"   		    => "http://xombra.com/backend.php"
         

	); */

	$feeds = array (
		"vaslibre"     	 	=> "http://vaslibre.org.ve/backend.php",
		"xombra"   		    => "http://xombra.com/backend.php",
		"Mint"              => "http://blog.linuxmint.com/?feed=rss2",
		"phenobarbital"     => "http://phenobarbital.wordpress.com/feed/rss/",
		"no-photo"         	=> "http://richzendy.org/feed",
		"tatica"         	=> "http://tatica.org/feed/?lang=es",
        "jeidi"             => "https://jeidienwp.wordpress.com/feed/",
		"safecreative"    	=> "http://feeds.feedburner.com/es_blog_safecreative",
		"ubuntu"         	=> "http://www.ubuntu.org.ve/rss.xml",
		"abr4xas"         	=> "http://blog.abr4xas.org/feed",
        "xanadu"         	=> "http://xanadulinux.wordpress.com/feed/",
        "sinfallas"        	=> "http://sinfallas.wordpress.com/feed/"

	); 

?>
