<?php
session_start();

$_SESSION['name'] = 'Kakashi';

if (isset($_SESSION['name'])) {
  echo 'Name: ' . $_SESSION['name'];
} else {
  echo 'name is not set';
}
