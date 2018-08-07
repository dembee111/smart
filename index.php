<?php

require_once 'Core/Init.php';

if(Session::exists('home')){
  echo '<p>' .Session::flash('home'). '</p>';
}

$user = new User(); //current user

if($user->isLoggedIn()){
  ?>
    <p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a> !</p>
    <ul>
      <li>
        <a href="logout.php">Logout</a></li><br/>
        <li><a href="update.php">Update details</a></li><br/>
        <li><a href="changepassword.php">Change Password</a></li>
      </li>
    </ul>
  <?php
}else{
  echo '<p>You need to <a href="login.php">log in</a> or <a href="register.php"> register</a></p>';
}
 ?>
