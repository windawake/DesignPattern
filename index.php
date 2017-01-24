<?php
function my_autoload($className)
{
    $file = __DIR__."\\src\\".$className.".php";
    include($file);
}
spl_autoload_register("my_autoload");

use Repository\Storage\MysqlStorage;
use Repository\Storage\RedisStorage;
use Repository\PostRepository;
use Repository\Post;

$db = new MysqlStorage();
$redis = new RedisStorage();
$repositoryDb = new PostRepository($db);
$repositoryRedis = new PostRepository($redis);

$post = new Post();
$post->setId(1);
$post->setTitle('china history');
$post->setText('long long ago');
$post->setAuthor('archaeologist');
$post->setCreated('2016');
$repositoryDb->save($post);

$post = new Post();
$post->setId(2);
$post->setTitle('shenzhen');
$post->setText('big city');
$post->setAuthor('china');
$post->setCreated('2017');
$repositoryDb->save($post);

$data = $repositoryRedis->getById(1);
if(empty($data)){
    $data = $repositoryDb->getById(1);
    $repositoryRedis->save($data);
}

$redisData = $repositoryRedis->getById(1);
var_dump($repositoryRedis,$redisData);