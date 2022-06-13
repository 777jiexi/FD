<?php
header('Content-Type: text/plain;charset=utf-8');
if(strstr($_SERVER['QUERY_STRING'],"type=") && strstr($_SERVER['QUERY_STRING'],"url=")){
    $result = file_get_contents("http://42.157.128.25:25500/getruleset?".$_SERVER['QUERY_STRING']);
    echo($result);exit;
}else{
    echo("请输入参数");exit;
}
