<?php

//Inicializando com indices numéricos
$alunos = [
    'Luis',
    'Vitor',
    'Maria'
];

//Utilizando chave para referenciar um valor
$alunos2 = [
    'nome' => 'Leonardo Pavan',
    'email' => 'leonardo@gmail.com',
    'turma' => 'Técnico em Informática'
];

//echo "Alunos: $alunos[0]";

//echo count($alunos);

//for ($i=0; $i < count($alunos); $i++) { 
//    echo "Aluno: $alunos[$i]<br>";
//}

//foreach ($alunos as $aluno) {
//    echo "Aluno $key: $aluno<br>";
//}

//echo $alunos2['nome'];

// foreach ($alunos as $aluno) {
//     echo "Aluno: $aluno<br>";
// }

// foreach ($alunos2 as $key => $aluno) {
//     echo ucfirst($key) . ": " . $aluno . "<br>";
// }

extract($alunos2);
echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Turma: $turma<br>";