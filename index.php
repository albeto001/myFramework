<?php
try {
	//Directorio raiz
	$dir = str_replace($_SERVER['DOCUMENT_ROOT'], '',str_replace("\\", "/", __DIR__));


	//$protocol = stripos(strtoupper($_SERVER['SERVER_PROTOCOL']), "HTTPS") ? "https://" : "http://";
	$protocol = (trim($_SERVER['SERVER_PROTOCOL']) === "HTTP/2.0") ? "https://" : "http://";

	if($protocol != "https://" && strpos($protocol.$_SERVER['HTTP_HOST'], "localhost") != 7){
		header("location:https://" . $_SERVER['HTTP_HOST'] . $dir);
		exit();
	}

	// url base del sitio
	$base_url =  $protocol . $_SERVER['HTTP_HOST'] . $dir;

	// Configuracion de las rutas
	require (__DIR__ . "/rutas.php");

	// Funciones globales
	require (__DIR__ . "/app/app.php");

	$self = $_SERVER['PHP_SELF'];
	$self = str_replace("/index.php", "", $self);	
	$uri = str_replace($self, "", $_SERVER['REQUEST_URI']);
	$p = strpos($uri, "?");
	$uri = ($p >0 ) ? substr($uri,0,$p) : $uri;
	include __DIR__ . "/header.php";
	if(isset($rutas[str_replace($dir, "", urldecode($uri))]) && file_exists(__DIR__ . "/paginas" . $rutas[$uri])){
		include __DIR__ . "/paginas" . $rutas[str_replace($dir, "", urldecode($uri))];
	}
	else{
		include __DIR__ . "/paginas/404.php";
	}
	include __DIR__ . "/footer.php";
} catch (Exception $e) {
    //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
