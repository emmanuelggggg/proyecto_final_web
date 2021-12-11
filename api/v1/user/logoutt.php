<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controller/User.php");
  $user = new User(false);
  $response = $user->logout();
  $user->response($response);