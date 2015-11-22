<?php
include 'conexao.php';

$busca = $_POST['palavra'];// palavra que o usuario digitou

$busca_query = mysql_query("SELECT * FROM certificados WHERE nome LIKE '%$busca%'")or die('FLAG 1');//faz a busca com as palavras enviadas

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

// quando existir algo em '$busca_query' ele realizará o script abaixo.
while ($dados = mysql_fetch_array($busca_query)) { 
    echo "Nome: $dados[nome]<br />";
    echo "Certificado(s): <a href='$dados[url]'; target='_blank'>CLICK AQUI!</a><br />";
    echo "<hr>";
}
?>