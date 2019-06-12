<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/texts/([a-zA-Z0-9-_]+).*#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/texts/detail.php',
    'SORT' => 90,
  ),
  7 => 
  array (
    'CONDITION' => '#^/catalog/([\\w-_]+)/([\\w-_]+)/.*#',
    'RULE' => 'SECTION_CODE=$1&CODE=$2',
    'ID' => '',
    'PATH' => '/catalog/detail.php',
    'SORT' => 200,
  ),
  5 => 
  array (
    'CONDITION' => '#^/catalog/([\\w-_]+)/.*#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/index.php',
    'SORT' => 300,
  ),
  9 => 
  array (
    'CONDITION' => '#^/ads_block/([a-zA-Z0-9-_]+).*#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/ads_block/detail.php',
    'SORT' => 500,
  ),
  15 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 700,
  ),
  16 => 
  array (
    'CONDITION' => '#^/reviews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/reviews/index.php',
    'SORT' => 800,
  ),
);
