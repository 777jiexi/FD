<?php
header('Content-Type: text/plain;charset=utf-8');
if(strstr($_SERVER['QUERY_STRING'],"target=") && strstr($_SERVER['QUERY_STRING'],"url=")){
    echo(file_get_contents("http://42.157.128.25:25500/sub?".$_SERVER['QUERY_STRING']));exit;
}else{
    echo("请输入参数");exit;
}
