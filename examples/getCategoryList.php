<?php

require('../vendor/autoload.php');

//测试demo
$c = new \I25ma\JdUnion\Client;
$c->appKey = "your appKey";
$c->appSecret = "your appSecret";
// $c->accessToken = "1f1d3048-220a-484d-ad93-f3808d9aacc1";
$req = new \I25ma\JdUnion\request\UnionOpenCategoryGoodsGetRequest();
$req->setReq(["parentId" => 0, 'grade' => 0]);
$resp = $c->execute($req);
var_dump(json_decode(json_encode($resp)));