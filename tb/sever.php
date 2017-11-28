<?php
$api = 'http://api.weibo.com/2/short_url/shorten.json'; // json
// $api = 'http://api.t.sina.com.cn/short_url/shorten.xml'; // xml

$source = '2849184197';     //iPad新浪客户端App Key：2849184197
$url_long = 'http://'.dirname($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']).'/item.php?item_id='.$_GET['item_id'];  //根据服务器路径改写前半段

$request_url = sprintf($api.'?source=%s&url_long=%s', $source, $url_long);
$data = file_get_contents($request_url);
echo $data;
?>

