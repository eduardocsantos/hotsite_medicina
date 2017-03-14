<?php 

header("Content-type: text/html;charset=utf-8859");
 
 ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
<title> | Ficha de inscrição | </title>


	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    	<link href="bootstrap/css/estilo_formulario.css" rel="stylesheet">





      <script src="validacao/jquery-1.6.4.js"></script>
         <script src="validacao/jquery.maskedinput-1.3.js"></script>
         <script src="validacao/validate_func.js"></script>
         <script src="validacao/valida_cpf.js"></script>
         
         
                  <script src="validacao/validate.js"></script>
			  <script src="validacao/validaoutros.js"></script>








      <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
      





<script type="text/javascript">
	
$(document).ready(function(){

	
	 $("#rg").mask("99.999.999-9",{placeholder:" "});
	$("#fixo_fone").mask("(99)9999-9999");
	$("#cel_fone").mask("(99)9999-9999");
	$("#cep").mask('99999-999');
	
	$("#formacao_ano").mask('99/99/9999');

	
	
});



</script>




</head>

<body>



	<!-- PRINCIPAL | BEGIN -->
	<div class="container">





 	
                        
		 <div class="page-header" align="center">  
      		<h4> FICHA DE INSCRIÇÃO NO PROGRAMA XXXXXXXXX<br /> </h3>  <a href="#" 
 class="btn"> Portal da UNIVERSIDADE XXXXX</a> </small></h4>
 
 
 
 
 
 

				
				<div  class="container">
                    
                    
                    	<br />
                    	<div align="center">
						<img  src="_img/universidade_logo.jpg" class="img-responsive"></img>
                       </div>
                        
                     
                        
                      
                  
                    
                    
				</div>
					
			
			
				




 
 
 
 
 
 
 
 
 
		</div>
                    
                    
                    
                    
                 
                        
                        
                   <!-- DIV FORM | BEGIN -->     
      <div class="well-large" id="div_formulario">
                        
               
               			
                        
                        
                        <div class="wall">
                        
							
                            
                            
                            
					<form class="form-inline" action="envio/sendform.php" method="post" id="validaoutros">
                                
 <!-- FORMULARIO ================================================ -->                 
                         
<div id="tabs">


  
  
  
  <div id="tabs-1">
  
	<blockquote align="left">
		<p>  <b>1/10</b> - DADOS PESSOAIS </p>

		
	</blockquote>
    
    <input type="hidden" name="codigo" />
    
    
    <span>
    Nome:
    <input type="text" class="input-xlarge" name="nome" id="nome" placeholder="NOME"  />
    </span>

    <br />  <br />

	<span>
    RG: 
    <input type="text" class="input-medium"  name="rg" id="rg" placeholder="RG"   />
    </span>
    
    
    <span>
     <abbr title="Exemplo: SSP/MT">ORGÃO EXPEDIDOR </abbr>

    <input type="text" class="input-mini"  name="orgao_exp" id="orgao_exp" />
       </span>  

 
 
  	<span>
    CPF  
    <input type="text" class="input-medium"  name="cpf"  id="cpf"  onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);"  maxlength="14"  />
    </span>  

 
  </div>
  
  <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
  
  
   
  <div id="tabs-2">

 <br /> <br />
 
 
	<blockquote align="left">
		<p> <b>2/10</b> - ENDEREÇO </p>	
	</blockquote>
  
  
  	 <span>
    RUA
    <input type="text" class="input-xlarge" name="rua" id="rua"  placeholder="RUA"  />
    </span>
    
    
     <span>
    NÚMERO
    <input type="text" class="input-mini" name="numero" placeholder="NÚMERO"  />
    </span>
  
  
   	<span>
    APTO
    <input type="text" class="input-mini" name="apto" placeholder="APTO"  />
    </span>


	<span>
    BAIRRO
    <input type="text" class="input-small" name="bairro"  id="bairro" placeholder="BAIRRO"  />
    </span>
    
    <br />  <br />
    
    <span>
    CIDADE
    <input type="text" class="input-medium" name="cidade" id="cidade" placeholder="CIDADE"  />
    </span>
     
     
     
     
     <span>
     <abbr title="UF: Unidade da Federação/ Estado">UF</abbr>
	<select name="UF" class="input-mini" id="UF" size="1" >
 <option  name="UF" value="" checked="checked">UF</option>
				
					<option name="UF" value="AC">AC</option>

					<option name="UF" value="AL">AL</option>

					<option name="UF" value="AM">AM</option>

					<option name="UF" value="AP">AP</option>

					<option name="UF" value="BA">BA</option>

					<option name="UF" value="CE">CE</option>

					<option name="UF" value="DF">DF</option>

					<option name="UF" value="ES">ES</option>

					<option name="UF" value="GO">GO</option>

					<option name="UF" value="MA">MA</option>

					<option name="UF" value="MG">MG</option>

					<option name="UF" value="MS">MS</option>

					<option name="UF" value="MT">MT</option>

					<option name="UF" value="PA">PA</option>

					<option name="UF" value="PB">PB</option>

					<option name="UF" value="PE">PE</option>

					<option name="UF" value="PI">PI</option>

					<option name="UF" value="PR">PR</option>

					<option name="UF" value="RJ">RJ</option>

					<option name="UF" value="RN">RN</option>

					<option name="UF" value="RO">RO</option>

					<option name="UF" value="RR">RR</option>

					<option name="UF" value="RS">RS</option>

					<option name="UF" value="SC">SC</option>

					<option name="UF" value="SE">SE</option>

					<option name="UF" value="SP">SP</option>

					<option name="UF" value="TO">TO</option>
</select>		
</span>	
     
     
    <span>
    CEP
    <input type="text" class="input-small" name="cep" id="cep" placeholder="CEP"  />
    </span>
     
     <br /><br />
     
     
     <span>
    E-MAIL
    <input type="email" class="input-medium" name="email" id="email" placeholder="E-MAIL"  />
    </span>
    
      <span>
	TEL.RESIDENCIAL
    <input type="text" class="input-medium" name="fixo_fone" id="fixo_fone" placeholder="TELEFONE FIXO"  />
    </span>
    
    
      <span>
	TEL.CELULAR
    <input type="text" class="input-medium" name="cel_fone" id="cel_fone"  placeholder="TELEFONE CELULAR"  />
    </span>
     
  </div>
  
  
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

  
  
  <div id="tabs-3">
  
  <br /> <br />
 
	<blockquote align="left">
		<p>  <b>3/10</b> - ATUAÇÃO NO ENSINO </p>
	</blockquote>




   <table class="table table-striped">
   
   
  <tr>
  
  
     
       <td> 
       PRECEPTOR  <input type="radio"  name="atuacao_ensino"   value="PRECEPTOR"  />
      </td>
   
    
    
  </tr>
  
  
  
  
  
    <tr>
 
    
     	<td>  
     PROFESSOR  <input type="radio"  name="atuacao_ensino"    value="PROFESSOR"   /> 
       </td>
   
 
   </tr>
  
  
  
  
  
     <tr>
 
     
    	 <td> 
      SUPERVISOR PMMB  <input type="radio"  name="atuacao_ensino"    value="SUPERVISOR PMMB"   /> 
     	 </td>
   	
    
  	 </tr>
  
  
  
  
  
  
  
      <tr>
   		
           
    	 <td> 
     SUPERVISOR PROVAB  <input type="radio"  name="atuacao_ensino"    value="SUPERVISOR PROVAB"   /> 
      
     	 </td>
   	
        
 	 </tr>
  
  
  
  
  
  
  
      <tr>
 
   		
     <td> TUTOR 
      <span style="color:#F00;"> 
      <input type="radio"  name="atuacao_ensino"   value="TUTOR"   /> 
      </span>
     </td>
   		
    
 	  </tr>
  
  
  
  </table>
  
  
  </div>
  
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
    
    
    
   <div id="tabs-4">
  
 <br /><br />
	<blockquote align="left">
		<p> <b>4/10</b> - VINCULO EMPREGATÍCIO </p>
	</blockquote>
    
    
    <table class="table table-striped">
  <tr>
    <td> INSTITUIÇÃO DE ENSINO
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  </td>
   
     <td> 
        
       
     <b> NÃO 
      <span style="color:#F00;"> 
     <input type="radio"  name="vempre_inst" id="vempre_inst" value="NAO"  required /> 
      </span>
     </b> 
     
     </td>
     
     
     
     
     
     
     <td> 
      
     <b> SIM 
        <span style="color:#F00;"> 
      <input type="radio"  name="vempre_inst" id="vempre_inst" value="SIM" required  /> 
      
      	</span>
        
      </b> 
     
     </td>
     
     
  </tr>

	</table> 
      
      
      <span>
	NOME DA INSTITUIÇÃO DE ENSINO
    <input type="text" class="input-xlarge" name="vempre_nome_inst" id="vempre_nome_inst" placeholder="
    NOME DA INSTITUICAO DE ENSINO"  />
    </span>
    
    <span>
    TIPO
    <select name="vempre_tipo" class="form-control" id="vempre_tipo" size="1" >
    	 <option  name="vempre_tipo" value="" checked="checked">TIPO</option>
				
					<option name="vempre_tipo" value="MUNICIPAL">MUNICIPAL</option>
					<option name="vempre_tipo" value="ESTADUAL">ESTADUAL</option>
					<option name="vempre_tipo" value="FEDERAL">FEDERAL</option>
					<option name="vempre_tipo" value="PRIVADA">PRIVADA</option>
    </select>
	</span>
  
  
  	<br /><br />
     
      <span>
	NOME DA UNIDADE DE `SAÙDE ONDE ATUA
    <input type="text" class="input-xlarge" name="vempre_unidade_atua" id="vempre_unidade_atua" placeholder="
    NOME DA UNIDADE DE `SAÙDE"  />
    </span>
  

  </div>
  
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


  
     <div id="tabs-5">

  	 <br /><br />
	<blockquote align="left">
		<p> <b>5/10</b> - FORMAÇÃO </p>
	</blockquote>
  
  	<span>
  	NOME DA INSTITUIÇÃO
    <input type="text" class="input-xxlarge" name="formacao_instituicao" id="formacao_instituicao" placeholder="
    NOME DA INSTITUICAO"  />
    </span>
  
   <br /><br />
   
   
   	<span>
  	ANO DE GRADUAÇÃO
    <input type="text" class="input-small" name="formacao_ano" id="formacao_ano" placeholder="ANO"  />
    </span>
  
  
 	 <span>
  	INSTITUIÇÃO FORMADORA
    <input type="text" class="input-xlarge" name="formacao_formadora" id="formacao_formadora"  placeholder="INSTITUIÇÃO FORMADAORA"  />
    </span>
  	
    
    
     <span>
    MODALIDADE
    <select name="formacao_modalidade" class="input-large" id="formacao_modalidade" size="1" >
    	 <option  name="formacao_modalidade" value="" checked="checked"> MODALIDADE </option>
					<option name="formacao_modalidade" value="ESPECIALIZAÇÃO">ESPECIALIZAÇÃO</option>
					<option name="formacao_modalidade" value="MESTRADO">MESTRADO</option>
					<option name="formacao_modalidade" value="DOUTORADO">DOUTORADO</option>
    </select>
	</span>
    
    
    <br /> <br />
    
 	 <span>
  	Em que área ?
    <input type="text" class="input-xxlarge" name="formacao_area" id="formacao_area"  placeholder="AREA DE ATUAÇÃO"  />
    </span
    
    
  	></div>
  
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


  
   <div id="tabs-6">
   
     <br/><br />
   
   <blockquote align="left">
		<p> <b>6/10</b> - RESIDÊNCIA MÉDICA </p>
	</blockquote>
    
    <table class="table table-striped">
  <tr>
    <td>Médico ou Docente de Medicina Preceptor de PRM 
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med1" id="res_med1" value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med1" id="res_med1" value="SIM"  /> </b></td>
  </tr>
  
  
   <tr>
    <td>Coordenador de PRM</td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med2" id="res_med2"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med2" id="res_med2" value="SIM"  /> </b></td>
  </tr>
  
  
   <tr>
    <td>Coordenador da COREME</td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med3" id="res_med3"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med3" id="res_med3" value="SIM"  /> </b></td>
  </tr>
  
  
  <tr>
    <td>Presidente da CEREM	</td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med4" id="res_med4"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med4"id="res_med4"  value="SIM"  /> </b></td>
  </tr>
  
  
   <tr>
    <td>Preceptoria em PRM já em Curso</td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med5" id="res_med5"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med5" id="res_med5"  value="SIM"  /> </b></td>
  </tr>
  
  
  <tr>
    <td>Preceptoria em instituição com mais de 1(hum) PRM</td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med6" id="res_med5"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med6"id="res_med6"  value="SIM"  /> </b></td>
  </tr>
  
   <tr>
    <td>Preceptoria em PRM em instituição com PRMS	</td>
   
     <td> <b> NÃO  <input type="radio"  name="res_med7" id="res_med7"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="res_med7" id="res_med7" value="SIM"  /> </b></td>
  </tr>
  
  
  
  </table>
   
   
   </div>
  
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->


  
  <div id="tabs-7">
   
     <br/><br />
   
   <blockquote align="left">
		<p> <b>7/10</b> - GRADUAÇÃO EM MEDICINA </p>
	</blockquote>
    
    
<table class="table table-striped">
  <tr>
    <td>Profissional de Saúde ou Docente Preceptor de Internato (5º e 6º ano)</td>
     <td> <b> NÃO  <input type="radio"  name="gra_med1" id="gra_med1"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="gra_med1" id="gra_med1" value="SIM"  /> </b></td>
  </tr>
  
  
   <tr>
    <td>Profissional de Saúde ou Docente Preceptor de Graduação (1º ao 4º ano)</td>
     <td> <b> NÃO  <input type="radio"  name="gra_med2" id="gra_med2"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="gra_med2" id="gra_med2" value="SIM"  /> </b></td>
  </tr>
  
</table>
    
    </div>
  
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

  
  
   <div id="tabs-8">
   
     <br/><br />
   
   <blockquote align="left">
		<p> <b>8/10</b> - POLITICAS PÚBLICAS </p>
	</blockquote>
  
  <table class="table table-striped">
  <tr>
    <td>Supervisor do PROVAB</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub1" id="poli_pub1"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub1" id="poli_pub1" value="SIM"  /> </b></td>
  </tr>
  
  
   <tr>
    <td>Coordenador do PROVAB</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub2" id="poli_pub2"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub2" id="poli_pub2" value="SIM"  /> </b></td>
  </tr>
  
  
    <tr>
    <td>Participação atual no PET SAUDE</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub3" id="poli_pub3"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub3" id="poli_pub3" value="SIM"  /> </b></td>
  </tr>
  
  
    <tr>
    <td>Participação atual no PRO SAUDE</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub4" id="poli_pub4"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub4" id="poli_pub4"  value="SIM"  /> </b></td>
  </tr>
  
  
    <tr>
    <td>Participação atual no PRO INTERNATO</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub5" id="poli_pub5"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub5" id="poli_pub5"  value="SIM"  /> </b></td>
  </tr>
  
     <tr>
    <td>Tutor do PROGRAMA MAIS MÉDICOS</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub6" id="poli_pub6" value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub6" id="poli_pub6" value="SIM"  /> </b></td>
  </tr>
  
  
      <tr>
    <td>Supervisor do PROGRAMA MAIS MÉDICOS</td>
     <td> <b> NÃO <input type="radio"  name="poli_pub7" id="poli_pub7"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub7" id="poli_pub7" value="SIM"  /> </b></td>
  </tr>
  
  
     <tr>
    <td>Preceptoria em PRM vinculado ao PRÓ-RESIDÊNCIA</td>
     <td> <b> NÃO  <input type="radio"  name="poli_pub8" id="poli_pub8"  value="NAO"  /> </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub8" id="poli_pub8" value="SIM"  /> </b></td>
  </tr>
  
  
      <tr>
    <td>Profissional de Saúde ou Docente em Curso de Medicina no PROGRAMA<br />DE EXPANSÃO DAS ESCOLAS MÉDICAS</td>
     <td> <b> NÃO <input type="radio"  name="poli_pub9" id="poli_pub9"  value="NAO"  />  </b></td>
     <td> <b> SIM  <input type="radio"  name="poli_pub9"  id="poli_pub9" value="SIM"  />  </b></td>
  </tr>
  
  
</table>
  
  
  </div>
  
    <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

  
    <div id="tabs-9">
   
     <br/><br />
   
   <blockquote align="left">
		<p> <b>9/10</b> - VINCULOS INSTITUCIONAIS </p>
	</blockquote>
  
   
  <table class="table table-striped">
  <tr>
    <td>Vínculo profissional estável em Instituição Pública de Ensino ou Serviço<br /> onde exerce  atualmente a preceptoria</td>
     <td> <b> NÃO <input type="radio"  name="vinculo_inst1" id="vinculo_inst1"  value="NAO"  /> </b></td>
     <td> <b> SIM <input type="radio"  name="vinculo_inst1" id="vinculo_inst1"  value="SIM"  /> </b></td>
  </tr>
  
  
   <tr>
    <td>Carga horária semanal dedicada à preceptoria (0,25 por cada 10h<br /> com máximo = 1,0)</td>
     <td> <b> NÃO  <input type="radio"  name="vinculo_inst2" id="vinculo_inst2"  value="NAO"  />  </b></td>
     <td> <b> SIM  <input type="radio"  name="vinculo_inst2" id="vinculo_inst2"  value="SIM"  />  </b></td>
  </tr>
  
  
  
   <tr>
    <td>Tempo de experiência (anos) em preceptoria (0,1 ponto por cada <br />2 anos, com máximo = 1,0)</td>
     <td> <b> NÃO  <input type="radio"  name="vinculo_inst3" id="vinculo_inst3"  value="NAO"  /> </b></td>
     <td> <b> SIM <input type="radio"  name="vinculo_inst3" id="vinculo_inst3"  value="SIM"  />  </b></td>
  </tr>
  
  
     <tr>
    <td>Tempo de Experiência (anos) em Gestão de Ensino em Residência<br /> e ou Graduação (0,1 ponto por cada ano, com máximo = 1,0)</td>
     <td> <b> NÃO  <input type="radio"  name="vinculo_inst4" id="vinculo_inst4"  value="NAO"  />  </b></td>
     <td> <b> SIM  <input type="radio"  name="vinculo_inst4" id="vinculo_inst4"  value="SIM"  />  </b></td>
  </tr>
  
  
  
  </table>
  
  </div>
  
  
   <!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

 
    <div id="tabs-10">
   
     <br/><br />
   
   <blockquote align="left">
		<p> <b>10/10</b> - ENVIAR FORMULÁRIO </p>
	</blockquote>
    
    
    
    		<input type="submit" class="btn btn-primary" name="enviar" id="enviar" value="   ENVIAR   "   />

    
    
    </div>
 
 
 
  
  
  
</div>
 
 <!-- FORMULARIO ================================================ -->   
 
 
 
			             
           					</form>
                        
                        
                        </div>
               
               
               			
               	<!-- DIV FORM | END -->
 				 </div>
                 
                 
	<!-- PRINCIPAL | END -->
	</div>
    


</body>
</html>