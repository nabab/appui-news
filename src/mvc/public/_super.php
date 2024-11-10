<?php
/** @var bbn\Mvc\Controller $ctrl */
if ( !\defined('APPUI_NEWS_ROOT') ){
  define('APPUI_NEWS_ROOT', $ctrl->pluginUrl('appui-news').'/');
}
$ctrl->data['root'] = $ctrl->pluginUrl('appui-news').'/';
