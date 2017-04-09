<?php

//PagesController
$router->get('', 'PagesController@home');
$router->get('home', 'PagesController@home');
$router->get('forums', 'PagesController@forums');
$router->get('play', 'PagesController@play');
$router->get('add-thread', 'PagesController@add_thread_page');
$router->get('delete-thread', 'PagesController@delete_thread_page');

$router->post('home', 'PagesController@home');
$router->post('forums', 'PagesController@forums');

//ForumsController
$router->post('add-thread', 'ForumsController@add_thread');
$router->post('delete-thread', 'ForumsController@delete_thread');

//UsersController
$router->get('about' , 'UsersController@index');

$router->post('add-user', 'UsersController@store');