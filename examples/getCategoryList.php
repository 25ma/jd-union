<?php

// require('../src/Client.php');
require('../vendor/autoload.php');

//测试demo
$c = new \I25ma\JdUnion\Client;
$c->appKey = "991f86fe9af848b49f431cede6ee4fda";
$c->appSecret = "91263ddc5fbb49e4a15b2ee3566afcdb";
// $c->accessToken = "1f1d3048-220a-484d-ad93-f3808d9aacc1";
// $c->serverUrl = "http://gw.api.360buy.net/routerjson";
$req = new \I25ma\JdUnion\request\UnionOpenCategoryGoodsGetRequest();
$req->setReq(["parentId" => 0, 'grade' => 0]);
$resp = $c->execute($req);
var_dump(json_decode(json_encode($resp)));