<?php
header('Content-Type: text/plain;charset=utf-8'); //设置内容长度
if(!strstr($_SERVER['QUERY_STRING'],"target=") || !strstr($_SERVER['QUERY_STRING'],"url=")){
    echo("请输入参数");exit;
}
echo(file_get_contents("http://42.157.128.25:25500/sub?".$_SERVER['QUERY_STRING']));
