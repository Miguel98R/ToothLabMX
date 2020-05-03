<?php 
    include("conexion.php");
    include 'impresion.php';
    
    if(isset($_GET['buscador'])){
       
        $indice=$_GET['buscador'];
        $cabeza="SELECT id,dentista,paciente,producto,cantidad,fecha1,fecha2,comentario,status FROM cabeza_orden WHERE id='$indice'; ";

   }
   
    $result = $conn->query($cabeza) or die (mysqli_error($conn));
    $datos=$result->fetch_assoc();

  

    $folio=$datos['id'];
    $dentista=$datos['dentista'];
    $paciente=$datos['paciente'];
    $producto=$datos['producto'];
    $cantidad=$datos['cantidad'];
    $fecha1=$datos['fecha1'];
    $fecha2=$datos['fecha2'];
    $comentario=$datos['comentario'];
    $status=$datos['status'];

    if($status==1){
    $status="Orden Entrante";

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

        
	$pdf = new PDF('P','mm',array(160,216));
	$pdf->AliasNbPages();
    $pdf->AddPage();
    
    $pdf->Rect(5, 4, 150, 208, 'D');
    $pdf->SetFillColor($r,$g,$b);
    $pdf->SetDrawColor($r,$g,$b);
    $pdf->SetLineWidth(0.5);
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);

	$pdf->Cell(70,6,'Status:',0,0,'C');
    $pdf->Cell(70,6,'Folio:',0,1,'C');
   
    
    $pdf->SetTextColor(0,0,0);
     $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,6,utf8_decode($status),0,0,'C');
    $pdf->Cell(70,6,utf8_decode($folio),0,1,'C');
    
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(70,6,'Entrada:',0,0,'C');
    $pdf->Cell(70,6,'Salida:',0,1,'C');

    $pdf->SetTextColor(0,0,0);
     $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,6,utf8_decode($fecha1),0,0,'C');
    $pdf->Cell(70,6,utf8_decode($fecha2),0,1,'C');

    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(70,6,'Dentista:',0,0,'C');
    $pdf->Cell(70,6,'Paciente:',0,1,'C');

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,6,utf8_decode($dentista),0,0,'C');
    $pdf->Cell(70,6,utf8_decode($paciente),0,1,'C');
    
    $pdf->Ln(10);
    
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(140,6,'Producto:',0,1,'C');

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(140,6,utf8_decode( $producto ." "."X". $cantidad ." "."pz" ),0,'C',0,0);
     $consultarNuevos = "SELECT producto,cantidad FROM nuevos_productos WHERE id_cabeza='$folio';";
           $resultNuevos = $conn->query($consultarNuevos) or die (mysqli_error($conn));
           if($resultNuevos==true){
            while($datosNuevos=$resultNuevos->fetch_assoc()){
            
            
           
             $pdf->MultiCell(140,6,utf8_decode( $datosNuevos['producto'] ." "."X". $datosNuevos['cantidad'] ." "."pz" ),0,'C',0,0);
            

            } 
         } 
    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);
    $pdf->Cell(140,6,'Color:',0,1,'C');

     $pdf->SetTextColor(0,0,0);
     $pdf->SetFont('Arial','B',12);

    $consulta ="SELECT color FROM color_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    
                    $pdf->MultiCell(140,6,utf8_decode($datos['color']),0,'C',0,0);
                    }
    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',14);
        $pdf->SetTextColor($r,$g,$b);
        $pdf->Cell(140,6,'Nomenclatura:',0,1,'C');

        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial','B',12);

         $consulta ="SELECT nomenclatura FROM nomenclatura_orden WHERE id_cabeza='$folio' ;";
                    $result=mysqli_query($conn,$consulta);
                    while($datos=$result->fetch_assoc()){
                    $pdf->MultiCell(140,6,utf8_decode($datos['nomenclatura']),0,'C',0,0);
                    }
    $pdf->Ln(5);
    $pdf->SetFont('Arial','B',14);
    $pdf->SetTextColor($r,$g,$b);;
    $pdf->Cell(140,6,'Comentarios:',0,1,'L');

    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(140,6,utf8_decode($comentario),0,0,'C');
                    
    



$pdf->Output();




    ?>