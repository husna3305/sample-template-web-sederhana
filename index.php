<?php
require_once('header.php');
require_once('navigation.php');

$page = "home.php";
if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'mahasiswa':
      $page = 'mahasiswa.php';
      break;
    default:
      $page = "home.php";
      break;
  }
}
require_once("pages/$page");
require_once('footer.php');


