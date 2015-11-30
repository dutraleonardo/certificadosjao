<?php
include 'conexao.php';

$busca = $_POST['nome'];// nome que o usuario digitou
$buca = strtoupper($busca);
$busca_query = mysql_query("SELECT * FROM certificacoes WHERE nome LIKE '%$busca%'")or die('Nome não encontrado! =(');//faz a busca com o nome enviado
if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}

$dados = mysql_fetch_assoc($busca_query);
$nome = $dados['nome'];
$participacao = $dados['url_participacao'];
$temalivre= $dados['url_temalivre'];
$painelclinico = $dados['url_painelclinico'];
$painelcientifico = $dados['url_painelcientifico'];
$forumclinico = $dados['url_forumclinico'];
$excecao = $dados['excessao'];

if ($busca = $nome) {
	echo "Nome: $nome <br>";
	if ($participacao != '') {
		echo "Certificado de Participacao: <a href='$participacao' target='_blank'>CLIQUE AQUI</a><br>";
		if ($temalivre != '') {
			echo "Certificado de Tema Livre: <a href='$temalivre' target='_blank'>CLIQUE AQUI</a><br>";
			if ($painelclinico != '') {
				echo "Certificado de Painel Clinico: <a href='$painelclinico' target='_blank'>CLIQUE AQUI</a><br>";
				if ($painelcientifico != '') {
					echo "Certificado de Painel Cientifico: <a href='$painelcientifico' target='_blank'>CLIQUE AQUI</a><br>";
					if ($forumclinico != '') {
						echo "Certificado de Forum Clinico: <a href='$forumclinico' target='_blank'>CLIQUE AQUI</a><br>";
						if ($excessao != '') {
							echo "Certificado Extra: <a href='$participacao' target='_blank'>CLIQUE AQUI</a><br />";
							echo "<hr>";
						}
					}
				}
			}
		}
	}
}
?>