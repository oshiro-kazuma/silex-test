<?php

$app = require __DIR__.'/bootstrap.php';

$app->get('/', function() use ($app){
    $app['db.dumb']->insert(array('a' => rand(), 'b' => rand()));
    
    // $app['db.dumb'] を使う意味はある??
    // $app['db']を素直に使ったほうが小回りが聞く気がする…
    // daoを意識して作っているのかしら？
    // daoもDIに含めるイケメンコーディングってこと？
    $data = $app['db.dumb']->findAll();
    
    return $app['twig']->render('index.html.twig', array('data' => $data));
});

return $app;