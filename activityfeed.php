<?php

$feed = array(
  array(
    'type' => 'rating',
    'userid' => 1,
    'storeid' => 1,
    'user_fullname' => 'Zoe Bogner',
    'store_name' => 'Essential Cafe',
    'icon' => 'content/users/1.png',
    'type' => 'rating',
    'quality' => '4',
    'service' => '3',
    'ambiance' => '5'
  ),
  array(
    'type' => 'achievement',
    'userid' => 2,
    'user_fullname' => 'Jemma Schilling',
    'icon' => 'content/users/2.jpg',
    'achievement_name' => 'Caffeine Frenzy',
    'achievement_description' => 'Drink more than 5 caffeinated coffees in a day.',
  ),
  array(
    'type' => 'post',
    'userid' => 3,
    'storeid' => 5,
    'user_fullname' => 'Ashley Holman',
    'store_name' => 'Delish Espresso',
    'icon' => 'content/users/3.png',
    'body' => 'Yummmm this latte is amazing.',
    'image_thumb' =>'content/attach/7e4da9b44cb.jpg',
  ),
);

print json_encode($feed);
