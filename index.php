<?php
function form($arg)
{
    if (ceil($arg) < 1000) {
        return $arg.' '. "₽";
    }
    else {
    $arg = number_format($arg,0,'0',' ');
    return $arg.' '. "₽";
    }
  };
require_once 'helpers.php';
$categories = [ "Доски и лыжи", "Крепления", 'Ботинки', "Одежда","Инструменты", "Разное"];
$ads = [
  [
     'name' => '2014 Rossignol District Snowboard',
     'category' => 'Доски и лыжи',
     'price' => '10999',
     'URL' => 'img/lot-1.jpg'
  ],
  ['name' => 'DC Ply Mens 2016/2017 Snowboard',
  'category' => 'Доски и лыжи',
  'price' => '159999',
  'URL' => 'img/lot-2.jpg'
  ],
  ['name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
  'category' => 'Крепления',
  'price' => '8000',
  'URL' => 'img/lot-3.jpg'
  ],
  ['name' => 'Ботинки для сноуборда DC Mutiny Charocal',
  'category' => 'Ботинки',
  'price' => '10999',
  'URL' => 'img/lot-4.jpg'
  ],
  ['name' => 'Куртка для сноуборда DC Mutiny Charocal',
  'category' => 'Одежда',
  'price' => '7500',
  'URL' => 'img/lot-5.jpg'
  ],
  ['name' => 'Маска Oakley Canopy',
  'category' => 'Разное',
  'price' => '5400',
  'URL' => 'img/lot-6.jpg'
]];
$page_content = include_template('main.php', ['ads' => $ads, 'categories' => $categories]);
$layout_content = include_template('layout.php',[
  'categories' => $categories,
  'content' => $page_content,
  'title' => 'YetiCave'
]);
print($layout_content);
?>
