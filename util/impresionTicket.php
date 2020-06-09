<?php 
    include "conexion.php";
    
    require '../fpdf/fpdf.php';
  
    include "conexion.php";

    if(isset($_GET['buscador'])){
       
        $indice=$_GET['buscador'];
        $newCabeza = "SELECT T1.id,T1.paciente,T2.nombre,T1.fechaEntrante , T1.fechaSaliente , T1.comentario,T1.status FROM orden_cabeza T1 INNER JOIN dentistas T2 ON T1.id_dentista=T2.id WHERE T1.id='$indice';";

   }else{

       $indice = "SELECT MAX(id) as id FROM orden_cabeza;";
       $result = $conn->query($indice) or die (mysqli_error($conn));
       $dato=$result->fetch_assoc();

       $id=$dato['id'];
       $newCabeza = "SELECT T1.id,T1.paciente,T2.nombre,T1.fechaEntrante , T1.fechaSaliente , T1.comentario,T1.status FROM orden_cabeza T1 INNER JOIN dentistas T2 ON T1.id_dentista=T2.id WHERE T1.id='$id';";
 
     }
   
    $result = $conn->query($newCabeza) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

  

    $folio=$datos['id'];
 
    $paciente=$datos['paciente'];
    $dentista = $datos['nombre'];
    $fecha1=date_create($datos['fechaEntrante']);
    $fecha2=date_create($datos['fechaSaliente']);
    $comentario=$datos['comentario'];
    $status=$datos['status'];

    
         

    if($status==1){
    $status="Entrante";

    }
    if($status==2){
         $status="Prueba";
    }
     if($status==3){
         $status="Regresado ";
    }
     if($status==4){
         $status="Terminado";
    }
     if($status==5){
         $status="Cambios";
    }
    if($status==6){
         $status="Cancelado";
    }
    if($status==7){
         $status="Cancelado con costos";
    }


    $color="SELECT color from dentistas WHERE nombre='$dentista';";
             $result = $conn->query($color) or die (mysqli_error($conn));
             $datos=$result->fetch_assoc();

             $ticketColor=$datos['color'];



     
$hex = $ticketColor;
list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

        
    //vertical
    $pdf = new FPDF('P','mm',array('216','356'));
    //horizontal
    //$pdf = new FPDF('P','mm',array(170,143));
	$pdf->AliasNbPages();
    $pdf->AddPage();
     
    $pdf->Image('../img/logo.jpg',111,7,22);
    $pdf->Ln(20);
    $pdf->SetFillColor($r,$g,$b);
    $pdf->SetDrawColor($r,$g,$b);
    $pdf->SetLineWidth(0.5);

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    
    $pdf->Cell(25,6,'Entrada:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(30,6,date_format($fecha1,"d/m/Y"),1,0,'L');

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(15,6,'Folio:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
  $pdf->SetFont('Arial','B',14);
    $pdf->Cell(55,6,$folio,1,1,'L');

    $pdf->Ln(4);

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
   $pdf->Cell(25,6,'Salida:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',14);
    $pdf->Cell(30,6,date_format($fecha2,"d/m/Y"),1,0,'L');

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(15,6,'Dr. :',1,0,'L');
    $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',14);
    $pdf->Cell(55,6,mb_strtoupper($dentista),1,1,'L');

    $pdf->Ln(4);

    $pdf->SetFont('Arial','B',13);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(25,6,'Status:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',13);
    $pdf->Cell(30,6,mb_strtoupper($status),1,0,'L');

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
     $pdf->Cell(15,6,'Px:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',14);
    $pdf->Cell(55,6,mb_strtoupper($paciente),1,1,'L');

      $pdf->Ln(4);

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(25,6,'Regreso:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',14);
    $pdf->Cell(30,6," ",1,0,'L');

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
     $pdf->Cell(25,6,'Entrega:',1,0,'L');
    $pdf->SetTextColor(0,0,0);
   $pdf->SetFont('Arial','B',14);
    $pdf->Cell(45,6," ",1,1,'L');
    
   
     $pdf->Ln(5);
     $pdf->Cell(130,6,utf8_decode("DESCRIPCIÓN"),0,1,'C');
      $pdf->Ln(5);

  

     $consultaProductos ="SELECT T1.cantidad,T2.producto,T1.color,T1.od FROM orden_productos_description T1 INNER JOIN productos T2 ON T1.id_producto = T2.id WHERE id_orden=$folio ;";
    $resultProducto=mysqli_query($conn,$consultaProductos);
     
    while($datos=$resultProducto->fetch_assoc()){

    $pdf->SetTextColor(0,0,0);
    
       $pdf->SetFont('Arial','B',11);
     $pdf->Multicell(130,6,"COLOR: ". mb_strtoupper($datos['color']), 1,1);
     $pdf->SetFont('Arial','B',14);
    $pdf->Cell(23,6,$datos['cantidad']." PZS",1,0,'C');
     $pdf->SetFont('Arial','B',14);
    $pdf->Cell(107,6,mb_strtoupper($datos['producto']),1,0,'C');
     
  
    
     $pdf->Ln(6);
     $pdf->Cell(25,6," ",0,0,'C');
     $pdf->SetFont('Arial','B',14);
     $pdf->SetTextColor($r,$g,$b);
     $pdf->Cell(70,6,$datos['od'],0,0,'C');
    
    $pdf->Cell(15,6," ",0,1,'C');
    $pdf->Ln(1);
   

    }
  
    
    $pdf->Ln(5);
    
    
   $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(130,6,'COMENTARIOS:',0,1,'C');
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',12);
           
   $pdf->Multicell(130,10,mb_strtoupper($comentario), 1,1);
   $pdf->Output();




    ?>