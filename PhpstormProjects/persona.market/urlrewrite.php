<?php
$arUrlRewrite=array (
  5 => 
  array (
    'CONDITION' => '#^/catalog/([\\w-_]+)/([\\w-_]+)/.*#',
    'RULE' => 'SECTION_CODE=$1&CODE=$2',
    'ID' => '',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/news/([a-zA-Z0-9-_]+).*#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/catalog/([\\w-_]+)/.*#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/personal/lists/#',
    'RULE' => '',
    'ID' => 'bitrix:lists',
    'PATH' => '/personal/lists/index.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^([^/]+?)\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&$2',
    'ID' => 'persona:catalog.section',
    'PATH' => '/catalog/brands/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/reviews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/reviews/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^\\??(.*)#',
    'RULE' => '&$1',
    'ID' => 'persona:catalog.element',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^#',
    'RULE' => '',
    'ID' => 'persona:news.list',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
