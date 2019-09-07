<?php #echo __FILE__;
/**
 * Created by PhpStorm.
 * User: kuper
 * Date: 28.08.2018
 * Time: 2:18
 */



function integra_menu_link__main_menu($variables) {
  $element = $variables['element'];


  if(empty($element['#below'])){
    $link= l(t($element['#title']),$element['#href'],array('attributes' => array('class' => array('nav-link'))));
    $output= '<li class="nav-item">'.$link.'</li>';
  }
  else{
    $sub_menu = drupal_render($element['#below']);
    $link= l(t($element['#title']),$element['#href'],array(
        'attributes' => array(
                            'class' => array('nav-link dropdown-toggle'),
                            'id' => array($element['#original_link']['mlid']),
                            'data-toggle' =>array('dropdown'),
                            'aria-haspopup'=>array('true'),
                            'aria-expanded'=>array('false')
                            )

          ));
    $output= '<li class="dropdown-item dropdown">'.$link.'<ul class="dropdown-menu" aria-labelledby="'.$element['#original_link']['mlid'].'">'.$sub_menu.'</ul></li>';
  }






  return $output;

}

function integra_menu_tree__main_menu($variables) {
//  return '<ul class="dropdown-menu">' . $variables['tree'] . '</ul>';
  return  $variables['tree'] ;
}

function integra_preprocess_page(&$variables, $hook) {

  // Пытаемся получить объект ноды.
  $node = menu_get_object();
//kpr($node);
  // Если его получили, и нода является типом 'news'.
  if (isset($node) && $node->type == 'news') {
    // Получаем значение поля. Мы можем напрямую дёрнуть $node->field..., но
    // куда правильнее использовать спец. функцию которая также регулирует язык.
    $field_date = field_get_items('node', $node, 'field_date');
    // Проверяем, есть ли какое-то значение в поле.
    if ($field_date) {
      // Если есть, добавляем его в нашу переменную.
      // our_variable - это название нашей переменной для page.tpl.php
      $variables['our_variable'] = $field_date[0]['value'];
    }
    else {
      // Если переменная пустая, мы в свою, новую, для page.tpl.php
      // записываем false.
      $variables['our_variable'] = false;
    }
  }
  if ((!empty($node->field_hide_sidebar)) AND ($node->field_hide_sidebar['und'][0]['value']=='1')){
    $variables['hide_sidebar'] = true;
  }
  $q=$node->field_hide_sidebar['und'][0]['value'];
//  kpr($q);
}



function integra_page_alter($page) {

$meta_description = array(
'#type' => 'html_tag',
'#tag' => 'meta',
'#attributes' => array(
'name' => 'description',
'content' => 'Пульмонологический центр ИнтеграмедСервис в Москве на м.электрозавдская. Лучшие врачи из НИИ Пульмонологии, индивидуальный подход. Сжатые сроки диагностики. Лечение легких и бронхов.'
)
);
$meta_keywords = array(
'#type' => 'html_tag',
'#tag' => 'meta',
'#attributes' => array(
'name' => 'keywords',
'content' => 'Центр пульмонологии, НИИ Пульмонологии, Поликлиника ВАО, медицинский центр, диагностический центр, Интеграмед, Интеграмедсервис, частная клиника, центр, пульмонологический центр Москва'
)
);
//kpr($page);
if (drupal_is_front_page()) {
     drupal_set_title('Пульмонологический центр в Москве - клиника лечения заболеваний легких, бронхов и верхних дыхательных путей');
drupal_add_html_head( $meta_keywords, 'meta_keywords' );
drupal_add_html_head( $meta_description, 'meta_description' );
}else{
  if (isset($page['content']['metatags'])){
    foreach ($page['content']['metatags'] as $key => $value){
      if (!array_key_exists('description',$value)){
        drupal_add_html_head( $meta_description, 'meta_description' );
      }
      if (!array_key_exists('keywords',$value)){
        drupal_add_html_head( $meta_keywords, 'meta_keywords' );
      }
    }
  }
}



}

function integra_preprocess_image_style(&$variables)  {
    // If this image is of the type 'Staff Photo' then assign additional classes to it:
    $variables['width']=NULL;
    $variables['height']=NULL;
    if ($variables['style_name'] == 'large') {
        $variables['attributes']['class'][] = 'img-fluid';
    }
    if ($variables['style_name'] == 'view-preview') {
        $variables['attributes']['class'][] = 'mr-3';
    }
  if ($variables['style_name'] == 'normal') {
    $variables['attributes']['class'][] = 'img-fluid';
  }

}

function integra_preprocess_node(&$vars) {
$node_type_suggestion_key = array_search('node__' . $vars['type'], $vars['theme_hook_suggestions']);
  if ($node_type_suggestion_key !== FALSE) {
    $node_view_mode_suggestion = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
    array_splice($vars['theme_hook_suggestions'], $node_type_suggestion_key + 1, 0, array($node_view_mode_suggestion));
  }
}


