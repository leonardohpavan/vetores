<?php

//Definição de variavéis
$nome = filter_input(INPUT_POST,"nome",FILTER_DEFAULT);
$email = filter_input(INPUT_POST,"email",FILTER_DEFAULT); 
$periodo = filter_input(INPUT_POST,"periodo",FILTER_DEFAULT);

//Recorta as informações e envia para o formulário
if (trim($nome) === "" || $nome === null ||
    trim($email) === "" || $email === null ||
    trim($periodo) === "" || $periodo === null){
    header("Location: respform.php");
    exit;
} 

//Converte php para html
$nomeSeguro = htmlspecialchars($nome,ENT_QUOTES, "UTF-8");
$emailSeguro = htmlspecialchars($email,ENT_QUOTES, "UTF-8");
$periodoSeguro = htmlspecialchars($periodo,ENT_QUOTES, "UTF-8");

//mostra as informações
echo "<span><strong>Nome: </strong>" . $nomeSeguro . "</span><br>";
echo "<span><strong>Email: </strong>" . $emailSeguro . "</span><br>";
echo "<span><strong>Periodo(s): </strong>" . $periodoSeguro . "</span><br>";

//Pega as informações do curso, mas precisa do filtro de array por ser checkbox
if (isset($_POST["cursos"])) {
$cursos = implode (', ', array_filter($_POST["cursos"]));

echo "<span><strong>Curso(s): </strong>" . $cursos . "</span><br>";
};
