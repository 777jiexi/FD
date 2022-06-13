<?php
header('Content-Type: text/plain;charset=utf-8');
if(strstr($_SERVER['QUERY_STRING'],"target=") && strstr($_SERVER['QUERY_STRING'],"url=")){
    $result = file_get_contents("http://42.157.128.25:25500/sub?".$_SERVER['QUERY_STRING']);
    $result = str_replace("wulabing_www.u3.gs","香港1");
    echo($result);exit;
}else{
    echo("请输入参数");exit;
}
