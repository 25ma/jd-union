<?php

//测试demo
$c = new I25ma\JdUnion\Client();
$c->appKey = "991f86fe9af848b49f431cede6ee4fda";
$c->appSecret = "91263ddc5fbb49e4a15b2ee3566afcdb";
$c->accessToken = "1f1d3048-220a-484d-ad93-f3808d9aacc1";
$c->serverUrl = "http://gw.api.360buy.net/routerjson";
$req = new UnionOpenCategoryGoodsGetRequest;
$req->putOtherTextParam("cid", "1");
$req->putOtherTextParam("value_id", "1");
$req->putOtherTextParam("source", "1");
$req->putOtherTextParam("ip", "1");
$resp = $c->execute($req, $c->accessToken);
print(json_encode($resp));