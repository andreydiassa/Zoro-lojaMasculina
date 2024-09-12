<?php

session_start();

if(!isset($_SESSION['nome'])){
  header('Location: tela-de-login.html?erro=true');
  exit();
}