<?php

require_once 'Core/Init.php';

if(Session::exists('home')){
  echo '<p>' .Session::flash('home'). '</p>';
}

echo Session::get(Config::get('session/session_name'));
 ?>
