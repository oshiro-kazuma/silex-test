<?php

$app = require __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app){
    $app['db.dumb']->insert(array('a' => rand(), 'b' => rand(), 'datetime' => time()));
    
    // $app['db.dumb'] を使う意味はある??
    // $app['db']を素直に使ったほうが小回りが聞く気がする…
    // daoを意識して作っているのかしら？
    // daoもDIに含めるイケメンコーディングってこと？
    $data = $app['db.dumb']->findAll();
	
	// なんかarray_mapが使いたかった
	$data = array_map(function ($d) {
		$d['a'] = $d['a']."aa";
		$d['datetime'] = date("Y-m-d H:i:s", $d['datetime']);
		return $d;
	}, $data);

	return $app['twig']->render('index.html.twig', array('data' => $data));
});

$app->get('/deleteAll', function() use ($app){
	$app['db.dumb']->delete(array('442634936'));

	return "aa";//$app['twig']->render('index.html.twig', array());
});

return $app;
