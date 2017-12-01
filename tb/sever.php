<?php
$api = 'http://api.weibo.com/2/short_url/shorten.json'; // json
// $api = 'http://api.t.sina.com.cn/short_url/shorten.xml'; // xml

$source = '2849184197';     //iPad新浪客户端App Key：2849184197
//服务器网页版
//$url_long = 'http://'.dirname($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']).'/item.php?item_id='.$_GET['item_id'];  //根据服务器路径改写前半段

//百度翻译版
$url_long = 'http://fanyi.baidu.com/?aldtype=16047#cht/zh/%EF%BF%A5'.$_GET['item_id'].'%EF%BF%A5%E7%82%B9%E5%87%BB%E5%8F%B3%E4%B8%8B%E8%A7%92%E5%A4%8D%E5%88%B6%E6%B7%98%E5%8F%A3%E4%BB%A4%E2%86%98';

$request_url = sprintf($api.'?source=%s&url_long=%s', $source, $url_long);
$data = file_get_contents($request_url);
echo $data;
?>

