<?php
	function strCompress($str){$str=rtrim($str,"\n");$str=str_replace("\n","",$str);$str=str_replace("\t","",$str);return $str;};
	$svgLogo='data:image/svg+xml;base64,'.base64_encode(file_get_contents('img/logo.svg'));
	$mainCSS=strCompress(file_get_contents('main.css'));
	$mainJS=strCompress(file_get_contents('main.js'));
	$mainJS=str_replace("const svgLogo='';","const svgLogo='$svgLogo';",$mainJS);
?><!DOCTYPE html><html lang="fr"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,user-scalable=no"><title>WEBARCH</title><link rel="icon" href="data:;base64,iVBORw0KGgo="><style type="text/css"><?php echo $mainCSS; ?></style></head><body bgcolor="#000"><script type="text/javascript"><?php echo $mainJS; ?></script></body></html>
