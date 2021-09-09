<?php

require_once('model/User.php');

$user = new User(
    'gandalf',
    'legris',
    'g.legris@gmail.com',
    'shittypass'
);

var_dump($user->selecAll());

$user->create();