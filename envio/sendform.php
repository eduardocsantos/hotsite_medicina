

<?php


// Abre a conexão
require  "../conexao_sql/conexao.php";




$codigo = $_POST["codigo"];


$nome = $_POST["nome"];
$rg = $_POST["rg"];
$orgao_exp = $_POST["orgao_exp"];
$cpf = $_POST["cpf"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$apto = $_POST["apto"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$UF = $_POST["UF"];
$cep = $_POST["cep"];
$email = $_POST["email"];
$fixo_fone = $_POST["fixo_fone"];
$cel_fone = $_POST["cel_fone"];
$atuacao_ensino = $_POST["atuacao_ensino"];
$vempre_inst = $_POST["vempre_inst"];
$vempre_nome_inst = $_POST["vempre_nome_inst"];
$vempre_tipo = $_POST["vempre_tipo"];
$vempre_unidade_atua = $_POST["vempre_unidade_atua"];
$formacao_instituicao = $_POST["formacao_instituicao"];
$formacao_ano = $_POST["formacao_ano"];
$formacao_formadora = $_POST["formacao_formadora"];
$formacao_modalidade = $_POST["formacao_modalidade"];
$formacao_area = $_POST["formacao_area"];
$res_med1 = $_POST["res_med1"];
$res_med2 = $_POST["res_med2"];
$res_med3 = $_POST["res_med3"];
$res_med4 = $_POST["res_med4"];
$res_med5 = $_POST["res_med5"];
$res_med6 = $_POST["res_med6"];
$res_med7 = $_POST["res_med7"];
$gra_med1 = $_POST["gra_med1"];
$gra_med2 = $_POST["gra_med2"];
$poli_pub1 = $_POST["poli_pub1"];
$poli_pub2 = $_POST["poli_pub2"];
$poli_pub3 = $_POST["poli_pub3"];
$poli_pub4 = $_POST["poli_pub4"];
$poli_pub5 = $_POST["poli_pub5"];
$poli_pub6 = $_POST["poli_pub6"];
$poli_pub7 = $_POST["poli_pub7"];
$poli_pub8 = $_POST["poli_pub8"];
$poli_pub9 = $_POST["poli_pub9"];
$vinculo_inst1 = $_POST["vinculo_inst1"];
$vinculo_inst2 = $_POST["vinculo_inst2"];
$vinculo_inst3 = $_POST["vinculo_inst3"];
$vinculo_inst4 = $_POST["vinculo_inst4"];





if(isset($_POST['codigo']) != ''){


	


$sql = mysql_query("INSERT INTO tb_abem2015 (codigo, nome, rg, orgao_exp, 
cpf, rua, numero, apto, bairro, cidade, UF, cep, email, fixo_fone, 
cel_fone, atuacao_ensino, vempre_inst, vempre_nome_inst, vempre_tipo, vempre_unidade_atua,
formacao_instituicao, formacao_ano, formacao_formadora, formacao_modalidade, formacao_area, 
res_med1, res_med2, res_med3, res_med4, res_med5, res_med6, res_med7, gra_med1, gra_med2,
poli_pub1, poli_pub2, poli_pub3, poli_pub4, poli_pub5, poli_pub6, poli_pub7, poli_pub8,
poli_pub9, vinculo_inst1, vinculo_inst2, vinculo_inst3, vinculo_inst4) 


VALUES ('$codigo', '$nome', '$rg', '$orgao_exp', '$cpf', '$rua', '$numero', '$apto', 
'$bairro', '$cidade', '$UF', '$cep', '$email', '$fixo_fone', '$cel_fone', '$atuacao_ensino', 
'$vempre_inst',  '$vempre_nome_inst', '$vempre_tipo', '$vempre_unidade_atua', '$formacao_instituicao',
'$formacao_ano', '$formacao_formadora', '$formacao_modalidade', '$formacao_area', '$res_med1', '$res_med2',
'$res_med3', '$res_med4', '$res_med5', '$res_med6', '$res_med7', '$gra_med1', '$gra_med2', '$poli_pub1',
'$poli_pub2', '$poli_pub3', '$poli_pub4', '$poli_pub5', '$poli_pub6', '$poli_pub7',  '$poli_pub8',
'$poli_pub9', 'vinculo_inst1', '$vinculo_inst2', '$vinculo_inst3', '$vinculo_inst4')")or die(mysql_error());



	echo "<script>alert('Enviado com sucesso! ');window.location='../ficha_inscricao.php';</script>";


	mysql_close($con);


} else {
	echo "<script>alert('Erro ao cadastrar !');window.location='../ficha_inscricao.php';</script>";
	mysql_close($con);
}



?>



