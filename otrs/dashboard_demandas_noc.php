<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="refresh" content="10">
		<meta charset="utf-8">
		<title>CGTI - Coordenação Geral de Tecnologia da informação</title>
	</head>
<body >

<style>

body{
background: rgba(0, 0, 0, 0) url("../img/bg.jpg") repeat scroll 0 0 / cover ;
	color: rgba(255, 255, 255, 0.9); 
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
	border-color: transparent;
}

thead
{
	background-color: rgba(0, 0, 0, 0.2);
	border: 1 solid;
	border-color: transparent;
}

blockquote
{
	margin: 10px 10px 20px 10px;
	border-color: transparent;
}
 
 .thumbnail32
 {
	 align: middle;
	 width: 32px;
	 height: 32px; 
	 border-radius: 50%;
 }
 
 .navbar
 {
	background: rgba(26,26,26, 0.6); none repeat scroll 0 0; 
 }
.navbar-default .navbar-brand 
 {
	 color: #FFFFFF;
	 font-size: 24px;
	 font-weight:bold;
 }
.table-bordered, .table-bordered.thead
{
	border: 1 solid;
	border-color: transparent;
    margin-bottom: 0px;
	background-color: transparent;
}

.table > caption + thead > tr:first-child > td, .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > td, .table > thead:first-child > tr:first-child > th 
{
	border: 1px solid transparent;
}
.table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th 
{
	border: 1px solid transparent;
}
.table > thead > tr > th 
{
	border: 1px solid transparent;
}

.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev 
{
    left: 0%;
    margin-left: 0px;
}
.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
    margin-right: 0px;
    right: 0%;
}


/* Panel */
.panel 
{
    background-color: transparent;
	
	/*border-color: transparent;*/
	/*
	margin-bottom: 1px;
    margin-right: 1px;
	*/
	border: medium none;
}
.panel-primary > .panel-heading
{
	background-color: rgba(0, 0, 0, 0.6);
	border: 1 solid;
	border-color: transparent;
	
	font-size: 18px;
	text-weight: bold;
	
	margin-bottom: 1px;

}
.panel-body 
{
	margin: 0;
	padding: 0;
	background-color: rgba(0, 0, 0, 0.4);
	border: 1 solid;
	border-color: transparent;
	
	margin-bottom: 1px;

}
.panel-footer
{
	background-color: rgba(0, 0, 0, 0.5);
	border: 1 solid;
	border-color: transparent;
	text-align: right;
		margin-bottom: 1px;

}

.table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: rgba(0, 0, 0, 0.1);
}

</style>

<?php

	include_once("../include/oracle.php");
	date_default_timezone_set('America/Sao_Paulo');

	function getConsultaSolicitacoesTorreEFila() 
	{
		
		
return "SELECT 
    T.ID,
    T.TN,
    T.TITLE,
    T.CREATE_TIME AS CREATE_TIME,
    T.CHANGE_TIME AS CHANGE_TIME,   
    TS.NAME AS TICKET_STATUS_NAME, 
    T.CUSTOMER_USER_ID AS LOGIN_SOLICITANTE, 
    U.LOGIN AS LOGIN_EXECUTOR

FROM OTRS_MAPA.TICKET T

JOIN OTRS_MAPA.TICKET_STATE TS
ON T.TICKET_STATE_ID = TS.ID
LEFT JOIN OTRS_MAPA.QUEUE Q
ON T.QUEUE_ID = Q.ID
LEFT JOIN OTRS_MAPA.USERS U
ON T.USER_ID = U.ID

where Q.ID = 61 and (TS.name like '%Novo%' or TS.name like '%Aberto%') and

(

T.CUSTOMER_USER_ID like '%adriana.trindade%' or
T.CUSTOMER_USER_ID like '%alexandre.chaves%' or
T.CUSTOMER_USER_ID like '%allan.girao%' or
T.CUSTOMER_USER_ID like '%andre.lopes%' or
T.CUSTOMER_USER_ID like '%andre.lacerda%' or
T.CUSTOMER_USER_ID like '%augusto.perisse%' or
T.CUSTOMER_USER_ID like '%rosangela.gomes%' or
T.CUSTOMER_USER_ID like '%cesar.brito%' or
T.CUSTOMER_USER_ID like '%cristoffer.silva%' or
T.CUSTOMER_USER_ID like '%daniela.costa%' or
T.CUSTOMER_USER_ID like '%daniela.moura%' or
T.CUSTOMER_USER_ID like '%daniela.moraes%' or
T.CUSTOMER_USER_ID like '%denis.severo%' or
T.CUSTOMER_USER_ID like '%eliene.carvalho%' or
T.CUSTOMER_USER_ID like '%erico.qbrito%' or
T.CUSTOMER_USER_ID like '%fabricio.desouza%' or
T.CUSTOMER_USER_ID like '%fernando.parente%' or
T.CUSTOMER_USER_ID like '%francisco.lucas%' or
T.CUSTOMER_USER_ID like '%guilherme.borges%' or
T.CUSTOMER_USER_ID like '%helder.cruz%' or
T.CUSTOMER_USER_ID like '%henry.mross%' or
T.CUSTOMER_USER_ID like '%himalaya.campos%' or
T.CUSTOMER_USER_ID like '%jhonatan.morais%' or
T.CUSTOMER_USER_ID like '%juliana.goncalves%' or
T.CUSTOMER_USER_ID like '%leila.silva%' or
T.CUSTOMER_USER_ID like '%lellis.mesquita%' or
T.CUSTOMER_USER_ID like '%leonardo.miranda%' or
T.CUSTOMER_USER_ID like '%lucas.badinhan%' or
T.CUSTOMER_USER_ID like '%marcelo.oliveira%' or
T.CUSTOMER_USER_ID like '%marco.sucupira%' or
T.CUSTOMER_USER_ID like '%mauricio.formiga%' or
T.CUSTOMER_USER_ID like '%nivaldo.feitosa%' or
T.CUSTOMER_USER_ID like '%paula.melo%' or
T.CUSTOMER_USER_ID like '%renata.farias%' or
T.CUSTOMER_USER_ID like '%rone.silva%' or
T.CUSTOMER_USER_ID like '%sergio.santos%' or
T.CUSTOMER_USER_ID like '%sonia.regina%' or
T.CUSTOMER_USER_ID like '%thiago.siqueira%' or
T.CUSTOMER_USER_ID like '%thiago.pcosta%' or
T.CUSTOMER_USER_ID like '%thiago.lemos%' or
T.CUSTOMER_USER_ID like '%tomas.barcellos%' or
T.CUSTOMER_USER_ID like '%valeria.siqueira%' or
T.CUSTOMER_USER_ID like '%luiz.palmeira%'

)

order by 4 desc
";
	}
	$bancoOracle = new Oracle(getNomeSecaoOracleProducao());
	$bancoOracle->query("alter session set nls_date_format='yyyy-mm-dd hh24:mi:ss'");
	$consulta = getConsultaSolicitacoesTorreEFila();
	
	//echo($consulta);
	//exit(0);
	
	$solicitacoesTorreEFila = $bancoOracle->query($consulta);
?>
<form method="post" name="principal" id="principal">
	
	<table class="table table-striped table-bordered"  width="100%">
		<tr>
			<td style="text-align:center; font-weight:bold;">-#-</td>
			<td style="text-align:center; font-weight:bold;">Solicitação</td>
			<td style="text-align:center; font-weight:bold;">Título</td>
			<td style="text-align:center; font-weight:bold;">Criação</td>
			<td style="text-align:center; font-weight:bold;">Última Modificação</td>
			<td style="text-align:center; font-weight:bold;">Situação</td>
			<td style="text-align:center; font-weight:bold;">Solicitante</td>
			<td style="text-align:center; font-weight:bold;">Proprietário</td>

			<!--<td style="text-align:center; font-weight:bold;" title="UST">UST</td>-->
		</tr>

<?php	
for ($i = 0; $i < count($solicitacoesTorreEFila); $i++ )  {
		
			$ordem = $i+1;
			
			$tn = $solicitacoesTorreEFila[$i]['TN'];
			$title = $solicitacoesTorreEFila[$i]['TITLE'];
			$createTime = $solicitacoesTorreEFila[$i]['CREATE_TIME'];
			$changeTime = $solicitacoesTorreEFila[$i]['CHANGE_TIME'];
			$statusName = $solicitacoesTorreEFila[$i]['TICKET_STATUS_NAME'];			
			$loginSolicitante = $solicitacoesTorreEFila[$i]['LOGIN_SOLICITANTE'];
			$loginExecutor = $solicitacoesTorreEFila[$i]['LOGIN_EXECUTOR'];
			$dsFilho = str_replace(",","<br>",$solicitacoesTorreEFila[$i]['DS_FILHO']);

			$vlPercentualConclusaoFilho = $solicitacoesTorreEFila[$i]['VL_PECENTUAL_CONCLUSAO_FILHO'];
			$vlUst = $solicitacoesTorreEFila[$i]['VL_UST'];
			

			$corGestores = null;
			switch ($loginSolicitante)
			{
				case 'adriana.trindade':
				    $corGestores = 'color:#FF0000;font-weight: bold';
					break;
				case 'alexandre.chaves':
				    $corGestores = 'color:#FF0000;font-weight: bold';
					break;
				case 'allan.girao':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'andre.lopes':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'andre.lacerda':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'augusto.perisse':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'rosangela.gomes':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'cesar.brito':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'cristoffer.silva':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'daniela.costa':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'daniela.moura':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'daniela.moraes':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'denis.severo':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'eliene.carvalho':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'erico.qbrito':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'fabricio.desouza':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'fernando.parente':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'francisco.lucas':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'guilherme.borges':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'helder.cruz':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'henry.mross':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'himalaya.campos':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'jhonatan.morais':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'juliana.goncalves':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'leila.silva':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'lellis.mesquita':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'leonardo.miranda':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'lucas.badinhan':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'marcelo.oliveira':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'marco.sucupira':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'mauricio.formiga':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'nivaldo.feitosa':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'paula.melo':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'renata.farias':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'rone.silva':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'sergio.santos':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'sonia.regina':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'thiago.siqueira':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'thiago.pcosta':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'thiago.lemos':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'tomas.barcellos':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'valeria.siqueira':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				case 'luiz.palmeira':
				    $corGestores = 'color:#FF0000;font-weight: bold';
				    break;
				default:
				    $corGestores = '';
					break;
			}
			
?>
			<tr>
				<td style="text-align:center; line-height: 17px;<?php echo($corGestores);?>"><?php echo($ordem);?></td>
				<td style="text-align:center; line-height: 17px;<?php echo($corGestores);?>"><?php echo($tn);?></td>
				<td style="text-align:left; line-height: 17px;<?php echo($corGestores);?>"><?php echo($title);?></td>
				<td style="text-align:center; line-height: 17px;<?php echo($corGestores);?>"><?php echo date('d/m/Y H:i', strtotime($createTime));?></td>
				<td style="text-align:center; line-height: 17px;<?php echo($corGestores);?>"><?php echo date('d/m/Y H:i', strtotime($changeTime));?></td>
				<td style="text-align:center; line-height: 17px;<?php echo($corGestores);?>"><?php echo($statusName);?></td>
				<td style="text-align:left; line-height: 17px;<?php echo($corGestores);?>"><?php echo($loginSolicitante)?></td>
				<td style="text-align:left; line-height: 17px;<?php echo($corGestores);?>"><?php echo($loginExecutor)?></td>
				<td style="text-align:center; line-height: 17px;">
			<?php
				if($dsFilho!=null)
				{
			?>
				<a href="#" data-toggle="tooltip" title="<?php echo($dsFilho);?>"><i class="icon-info"></i></a>
			<?php
				}
			?>
				</td>

				<td style="text-align:center; line-height: 17px;"><?php echo($vlPercentualConclusaoFilho);?></td>
				<!--<td style="text-align:center; line-height: 17px;"><?php echo($vlUst);?></td>-->

				
			</tr>
<?php	
			}
?>
		</table>
		
		
		</body>
</html>
