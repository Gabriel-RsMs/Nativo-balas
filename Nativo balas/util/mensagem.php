<?php
session_start();
function exibirMsg() {
  $mensagem = "";
  if(!empty($_SESSION["msg"])){
    $mensagem = $_SESSION["msg"];
  }
  if (!empty($mensagem)) :
  ?>
    <p class="alert alert-success text-center">
      <?=$mensagem?>
    </p>
    <hr>
    <br>
  <?php
  endif;
  $_SESSION["msg"] = "";
}
?>