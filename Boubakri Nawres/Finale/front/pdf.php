<?php
require('fpdf/fpdf.php');
include "../../core/produitC.php";
//if (isset($_GET['pdf'])) {
$produitC=new ProduitC();
$listeproduit=$produitC->afficherProduits();

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',30);
$pdf->Cell(60	,5,'',0,0);
$pdf->Cell(100	,5,'Point SPORT',0,0);

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

$pdf->Cell(50	,5,'RF',1,0);
$pdf->Cell(50	,5,'NOM',1,0);

$pdf->Cell(50	,5,'CATEGORIE',1,0);
$pdf->Cell(30	,5,'PRIX',1,1);//end of line
$total=0;
foreach ($listeproduit as $row) {
	
	$RF=$row['ref_prod'];
	$NOM=$row['nom_prod'];
	$PRIX=$row['prix_prod'];
	$CATEGORIE=$row['cat'];

	$pdf->Cell(50 ,5,$RF,1,0);
	$pdf->Cell(50 ,5,$NOM ,1,0);
	
	$pdf->Cell(50 ,5,$CATEGORIE ,1,0);
	$pdf->Cell(30 ,5,$PRIX ,1,1,'R');
}


$pdf->Output();
	//}	

?>