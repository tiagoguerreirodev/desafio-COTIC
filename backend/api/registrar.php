<?php
require "../classes/Personagem.php";

$name = $_POST['name'];
$age = $_POST['age'];
$actor = $_POST['actor'];
$alignment = $_POST['alignment'];
$biography = $_POST['biography'];

$novo_personagem = new Personagem();

$novo_personagem->nome = $name;
$novo_personagem->idade = $age;
$novo_personagem->interprete = $actor;
$novo_personagem->alinhamento = $alignment;
$novo_personagem->biografia = $biography;

Personagem::inserir($novo_personagem);

// retornar à página do formulário.
$url = "../../pages/formulario.html";
header('Location: '. $url);
?>