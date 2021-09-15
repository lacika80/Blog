
<?php
require __DIR__ . '/vendor/autoload.php';

use App\Lib\App;
use App\Lib\Router;
use App\Lib\Request;
use App\Lib\Response;
use App\controllers\Home;
use App\models\Posts;


Posts::load();

Router::get('/', function () {
    (new Home())->indexAction();
});

Router::get('/post', function (Request $req, Response $res) {
    $res->toJSON(Posts::all());
});

Router::get('/post2', function (Request $req, Response $res) {  
    $p = new Posts();
    $sel = $p->select() or die('error from here');
    $res->toJSON($sel);
});

Router::post('/post', function (Request $req, Response $res) {
    $post = Posts::add($req->getJSON());
    $res->status(201)->toJSON($post);
});

Router::get('/post/([0-9]*)', function (Request $req, Response $res) {
    $post = Posts::findById($req->params[0]);
    if ($post) {
        $res->toJSON($post);
    } else {
        $res->status(404)->toJSON(['error' => "Not Found"]);
    }
});

App::run();