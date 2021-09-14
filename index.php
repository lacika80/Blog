<?php

use app\lib\router;
use app\lib\request;
use app\lib\response;

router::get('/', function () {
    echo 'Hello World';
});

router::get('/post/([0-9]*)', function (Request $req, Response $res) {
    $res->toJSON([
        'post' =>  ['id' => $req->params[0]],
        'status' => 'ok'
    ]);
});