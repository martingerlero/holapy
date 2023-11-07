<?php
function reporte_ventas_semanal()
{
    $fecha_limite=time()-604800;
    $titulo= "Ventas de la semana";
    reporte_ventas($fecha_limite, $titulo);
}

function reporte_ventas_diarias()
{
    $fecha_limite=time()-86400;
    $titulo= "Ventas diarias";
    reporte_ventas($fecha_limite, $titulo);
}

function reporte_ventas_mensual()
{
    $fecha_limite=time()-2629743;
    $titulo= "Ventas del mes";
    reporte_ventas($fecha_limite, $titulo);
}
function reporte_ventas($fecha_limite, $titulo)
{
    require 'static/fpdf/fpdf.php';
    class PDF extends FPDF
    {
        // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('img/logo_farmasalud.png',13,13,15);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Título
        ;
        $tit=$titulo;
        $this->Cell(192,20,"Reporte de Ventas",1,0,'C');
        // Salto de línea
        $this->Ln(20);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Hoja'.$this->PageNo().'/{nb}',0,0,'C');
    }
    }

    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);
    
    include_once 'modelo/venta_model.php';
    //Obtenemos las ultimas ventas
    $ventas=vm_obtener_ultimas_ventas($fecha_limite);
    $pdf->Ln(6);
    $pdf->Cell(42,10,$titulo,0,1);
    $pdf->Cell(42,10,"Fecha",1,0);
    $pdf->Cell(60,10,"Sucursal",1,0);
    $pdf->Cell(60,10,"Cliente",1,0);
    $pdf->Cell(30,10,"Monto",1,1);
    for($i=0;$i<count($ventas);$i++){
        $fecha_venta = date('d/m/Y H:s', $ventas[$i]->getFecha());
        $suc_venta = $ventas[$i]->getNombreSucursal();
        $cliente_venta = $ventas[$i]->getNombreApellidoCliente();
        $monto_venta = $ventas[$i]->getMontoVenta();
        $pdf->Cell(42,10,$fecha_venta,1,0);
        $pdf->Cell(60,10,$suc_venta,1,0);
        $pdf->Cell(60,10,$cliente_venta,1,0);
        $pdf->Cell(30,10,"$".$monto_venta,1,1);
        //$pdf->Cell(0,10,$fecha_venta." ".$suc_venta." ".$cliente_venta." ".$monto_venta,0,1);
        
    }
    $pdf->Output();
}

?>