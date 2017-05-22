<h1>Authors Home Page</h1>


<?php $name = Input::get('name');
echo $name;


$user = new test;

$user->speed = $name;

$user->save();

