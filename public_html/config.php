<?php 

$page = str_replace('/', '', $_SERVER['REQUEST_URI']);

if(empty($page)){
	$page = 'default';
}

$pages = array();

$pages['default']['huayra'] = false;
$pages['default']['koha'] = false;
$pages['default']['t1'] = 'Instala GNU/Linux';
$pages['default']['d1'] = 'Te ayudamos paso a paso para que puedas instalarlo sin ninguna complicación.';
$pages['default']['i1'] = 'default1.jpg';

$pages['default']['t2'] = 'Rompemos el Mito';
$pages['default']['d2'] = 'Instalar tus programas favoritos nunca fue tan Facil gracias al Software Center';
$pages['default']['i2'] = 'default2.jpg';

$pages['default']['color'] = '#f27d00';


$pages['dev']['huayra'] = false;
$pages['dev']['koha'] = false;
$pages['dev']['t1'] = 'Empieza a escribir Codigo';
$pages['dev']['d1'] = 'GNU/Linux te brinda todas las herramientas que necesitas para empezar a escribir codigo sin dolores de cabezas.';
$pages['dev']['i1'] = 'dev1.jpg';
$pages['dev']['t2'] = 'Apt-get install *-dev';
$pages['dev']['d2'] = 'Por que el Software libre te permite leer todo el codigo del Sistema Operativo que estas usando y modificarlo a tu gusto. Como asi tambien descargarte todo tipo de librerias para implementarlas en tus Proyectos';
$pages['dev']['i2'] = 'dev2.jpg';
$pages['dev']['color'] = '#111';

$pages['pymes']['huayra'] = false;
$pages['pymes']['koha'] = false;
$pages['pymes']['t1'] = 'Ahorra dinero en Licencias';
$pages['pymes']['d1'] = 'Gnu/Linux esta basado en las licencias GPL el cual te permite el libre uso de las herramientas sin costo de licenciamiento.';
$pages['pymes']['i1'] = 'pymes1.jpg';
$pages['pymes']['t2'] = 'Seguridad para tu Infraestructura Tecnologica';
$pages['pymes']['d2'] = 'Mas del 80% de las grandes empresas usan Gnu/Linux para sus servidores.';
$pages['pymes']['i2'] = 'pymes2.jpg';
$pages['pymes']['color'] = '#095d26';

$pages['huayra']['huayra'] = true;
$pages['huayra']['koha'] = false;
$pages['huayra']['t1'] = 'Huayra GNU/Linux, el sistema operativo libre de  Conectar Igualdad';
$pages['huayra']['d1'] = '';
$pages['huayra']['i1'] = 'huayra1.jpg';
$pages['huayra']['t2'] = '25 mil programas gratuitos y libres';
$pages['huayra']['d2'] = 'Y miles de contenidos de Educ.ar, Canal Encuentro, Conectar Igualdad, Paka-Paka y Conectate.';
$pages['huayra']['i2'] = 'huayra2.jpg';
$pages['huayra']['color'] = '#83abcd';

$pages['gamer']['huayra'] = false;
$pages['gamer']['koha'] = false;
$pages['gamer']['t1'] = 'Mas Rendimiento y Muchos mas FPS';
$pages['gamer']['d1'] = 'Obtén mas rendimiento en tu PC con GNU/Linux. Customiza tu Sistema Operativo para sacarle el maximo';
$pages['gamer']['i1'] = 'gamer1.jpg';
$pages['gamer']['t2'] = 'Steam for Linux';
$pages['gamer']['d2'] = 'Con mas de 40 Millones de Usuarios, Steam es la tienda de Juegos mas grande del mundo. Ahora disponible para Linux.';
$pages['gamer']['i2'] = 'gamer2.jpg';
$pages['gamer']['color'] = '#111';

$pages['libre']['huayra'] = false;
$pages['libre']['hkoha'] = false;
$pages['libre']['t1'] = 'Software Libre';
$pages['libre']['d1'] = 'Poner patentes a licencias sobre el software es como poner patentes sobre las recetas culinarias. Nadie podría comer a menos que pagara por la licencia de la receta';
$pages['libre']['i1'] = 'libre1.jpg';
$pages['libre']['t2'] = 'Cultura libre';
$pages['libre']['d2'] = 'Una Cultura libre no es una cultura sin propiedad, no es una cultura en la que no se paga a los artistas. Una cultura sin propiedad, o en la que no se paga a los artistas, es la anarquía, no la libertad.';
$pages['libre']['i2'] = 'libre2.png';
$pages['libre']['color'] = '#703b1a';


$pages['koha']['huayra'] = false;
$pages['koha']['koha'] = true;
$pages['koha']['t1'] = 'Koha';
$pages['koha']['d1'] = 'Koha es un sistema integrado de gestión de bibliotecas, único por ser el primero de código fuente abierto.';
$pages['koha']['i1'] = 'koha1.jpg';
$pages['koha']['t2'] = 'Koha + Ubuntu';
$pages['koha']['d2'] = 'Ven al KohaFest y te enseñaremos a administrar tu biblioteca con Software Libre';
$pages['koha']['i2'] = 'koha2.jpg';
$pages['koha']['color'] = '#459de6';



if(!isset($pages[$page])){
	$page = 'default';
}


$db_host = 'localhost';
$db_user = 'flisol_dev';
$db_pass = 'flisol_dev';
$db_db = 'flisol_dev';

$evento = 'Flisol';
$año = '2013';
$sede = 'Córdoba';
$descripción_corta = '';

$descripción_larga = '<p>El Festival Latinoamericano de Instalación de Software Libre (FLISoL) es el evento de difusión de Software Libre más grande en Latinoamérica. Se realiza desde el año 2005 y desde el 2008 se adoptó su realización el 4to Sábado de abril de cada año.</p>
                      <p>Su principal objetivo es promover el uso del software libre, dando a conocer al público en general su filosofía, alcances, avances y desarrollo.</p>
                      <p>A tal fin, las diversas comunidades locales de software libre (en cada país/ciudad/localidad), organizan simultáneamente eventos en los que se instala, de manera gratuita y totalmente legal, software libre en las computadoras que llevan los asistentes. Además, en forma paralela, se ofrecen charlas, ponencias y talleres, sobre temáticas locales, nacionales y latinoamericanas en torno al Software Libre, en toda su gama de expresiones: artística, académica, empresarial y social.</p>';

$descripción_huayra = '<p><a target="_blank" href="http://huayra.conectarigualdad.gob.ar/huayra">Huayra</a> es el sistema operativo del Plan Conectar Igualdad. Es Software Libre y está pensado y desarrollado en Argentina para el uso de la comunidad educativa. Huayra toma su nombre del vocablo quechua que significa viento: viento de cambios, vientos de libertad, vientos de soberanía tecnológica.</p>
<p>En el Flisol 2013, te vamos a enseñar cómo instalar Huayra en tu netbook.</p>';

$descripción_koha = '<p>Este es un festival que organizamos desde hace 5 años en concordancia con el FLISoL latinoamericano.</p>
<p>En esta ocasión serás acompañado para que instales en tu computadora un Sistema Operativo Libre (Ubuntu) y un sistema integrado de gestión bibliotecaria también libre: Koha. Una vez instalado te ayudaremos a configurarlo para que puedas utilizarlo ya.</p>
<p>Será una magnífica oportunidad para que te acerques y conozcas las posibilidades que te puede brindar el Software Libre a vos, a tu biblioteca y a tus lectores.</p>';

$fecha = 'El 27 de Abril a las 9:30hs';
$lugar = 'En Aula D3 - Batería de Aulas Comunes "D" - Valparaíso s/n - Ciudad Universitaria';

if($pages[$page]['huayra']){

	$consideraciones = '- Respaldar toda la información importante, no nos haremos responsables por perdidas de información.<br>
- Llegar en el horario de acreditación.';

} else {

	$consideraciones = '- Respaldar toda la información importante, no nos haremos responsables por perdidas de información.<br>
- Dejar la noche anterior defragmentando el disco duro de la PC (En Windows: Programas -> Accesorios -> Herramientas -> Desfragmentador de Disco).<br>
- Traer los CDs de instalación de la pc (en particular si es un notebook o una pc de marca).';

}



$requisitos = '- Microprocesador de 1 Ghz <br>
- 512 Mb de memoria RAM <br>
- Disco rígido de 10 Gb';

$contacto_tel = '+54-351-318-7514';
$contacto_email = 'info@flisolcba.com.ar';

$facebook_appid = '523065027737443';

$contacto_gplus = '#';
$contacto_facebook = '#';
$contacto_twitter = '#';

$registro_costo_cd = '$10';
$registro_fin = 'Tu registro ha sido completado con exito. Te mantendremos al tanto via E-Mail.';
$registro_fin2 = 'Ayudanos a difundir el Evento, Compartelo en tus redes sociales.';

// https://code.google.com/apis/console
$google_maps_api_key = 'AIzaSyD7DYcvnHJDv-nq845f6L31DjNOitm5qw4';

$google_maps_zoom = '18';

//ROADMAP displays the normal, default 2D tiles of Google Maps.
//SATELLITE displays photographic tiles.
//HYBRID displays a mix of photographic tiles and a tile layer for prominent features (roads, city names).
//TERRAIN displays physical relief tiles for displaying elevation and water features (mountains, rivers, etc.).
$google_maps_type = 'HYBRID';

//http://itouchmap.com/latlong.html
$lat = '-31.437863';
$lng = '-64.186463';

//Sponsors
$sposors = array();
$sposors[] = array(
	'nombre' => 'Mozilla',
	'img' => '/img/sponsors/mozilla.png',
	'link' => 'http://www.mozilla.org/', 
);
$sposors[] = array(
	'nombre' => 'Taringa!',
	'img' => '/img/sponsors/taringa.jpg',
	'link' => 'http://www.taringa.net/', 
);
$sposors[] = array(
	'nombre' => 'UNC',
	'img' => '/img/sponsors/unc.jpg',
	'link' => 'http://www.unc.edu.ar/', 
);
$sposors[] = array(
	'nombre' => 'Pixel in Cloud',
	'img' => '/img/sponsors/pixel.png',
	'link' => 'http://pixelincloud.com/', 
);



//Cronograma

$cronograma = array();

if($pages[$page]['huayra']){

	$cronograma['aula1'] = array(
		'titulo' => 'Aula Huayra',
		'horarios' => array(
			'0930' => 'Acreditación',
			'1000' => 'Instalación Huayra (Turno Mañana)',
			'1050' => 'Guía de uso de Huayra',
			'1130' => 'Preguntas',
			'1230' => 'Break',
			'1430' => 'Acreditación',
			'1500' => 'Instalación Huayra (Turno Tarde)',
			'1550' => 'Guía de uso de Huayra',
			'1630' => 'Preguntas'
	));

}
else {

	$cronograma['aula2'] = array(
	'titulo' => 'Aula Flisol',
	'horarios' => array(
		'0930' => 'Acreditación',
		'1000' => 'Install Fest (Turno Mañana)',
		'1050' => 'Guía de uso',
		'1130' => 'Preguntas',
		'1230' => 'Break',
		'1430' => 'Acreditación',
		'1500' => 'Install Fest (Turno Tarde)',
		'1550' => 'Guía de uso',
		'1630' => 'Preguntas'
	));


}

function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}



?> 