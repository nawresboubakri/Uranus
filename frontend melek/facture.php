<?php
require('fpdf/fpdf.php');
include "table_panier.php"; 
//if (isset($_GET['pdf'])) {


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->Image('images/icons/logo-01.png',10,10,'L');
$pdf->SetFont('Arial','B',30);
$pdf->Cell(60	,5,'',0,0);
$pdf->Cell(	40,50,' LA FACTURE  ',2,2);
	


//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,20,'',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'Petite Ariane ',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Grande Tunis',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$date= date('Y-m-d');
$pdf->Cell(5	,5,$date,0,1);//end of line

$pdf->Cell(130	,5,'Phone        28 111 800',0,0);
$pdf->Cell(130	,5,'Fax         71 455 395 ',0,0);


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,30,'',0,1);//end of line


//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(	60,7,'ref_prod',1,0);
$pdf->Cell(60,7,'nom_prod',1,0);

$pdf->Cell(60,7,'prix_prod',1,1);
//end of line
$total=0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
						             {
	
	$RF=$values["item_ref_prod"]; ;
	$NOM=$values["item_nom_prod"];
	$PRIX=$values["item_prix_prod"];
	

	$pdf->Cell(60 ,7,$RF,1,0);
	$pdf->Cell(60 ,7,$NOM ,1,0);
	$pdf->Cell(60 ,7,$PRIX ,1,1,'R');
	$total=$total+$PRIX;
}
$pdf->SetFont('Arial','B',12);
$pdf->Cell(	60,10,'prix_total',1,0);
$pdf->Cell(60 ,10,$total,1,0);


$pdf->Output();
	//}	

?>