<?php 
include("jpgraph/src/jpgraph.php");
include("jpgraph/src/jpgraph_line.php");
// $data=array(2296,1228,1620,1726,2228,2126,2222,2724,4260);
$graph=new Graph(600,300,"auto");
$graph->img->SetMargin(50,40,30,40);
$graph->img->SetAntiAliasing();
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set("$title");
//$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->SetMarginColor("lightblue");
//$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->SetPos("min");
$graph->yaxis->HideZeroLabel();
$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
$a=array("1");
$graph->xaxis->SetTickLabels($a);
//$graph->xaxis->SetFont(FF_SIMSUN);
$graph->yscale->SetGrace(20);

$p1= new LinePlot($data);
$p1->mark->SetType(MARK_FILLEDCIRCLE);
$p1->mark->SetFillColor("red");
$p1->mark->SetWidth(4);
$p1->SetColor("blue");
$p1->SetCenter();
$graph->Add($p1);
$graph->Stroke();

?>