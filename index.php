<?php
function my_autoload($className)
{
    $file = __DIR__."\\src\\".$className.".php";
    include($file);
}
spl_autoload_register("my_autoload");

/*use League\Pipeline\Pipeline;
use League\Pipeline\StageInterface;

class TimesTwoStage implements StageInterface
{
    public function __invoke($payload)
    {
        // TODO: Implement __invoke() method.
        return $payload * 2;
    }
}

class AddOneStage implements StageInterface
{
    public function __invoke($payload)
    {
        // TODO: Implement __invoke() method.
        return $payload + 1;
    }
}

$pipeline = (new Pipeline())
    //->pipe(new TimesTwoStage())
    ->pipe(new AddOneStage());

var_dump($pipeline->process(10));*/

use Design\Repository\Storage\MemoryStorage;
use Design\Repository\Storage\MysqlStorage;
use Design\Repository\Storage\RedisStorage;
use Design\Repository\PostRepository;
use Design\Repository\Post;

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