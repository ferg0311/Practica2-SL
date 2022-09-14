<?php
   
   include "fpdf/fpdf.php";


   $pdf = new FPDF();
   //pagina 1
   $pdf ->AddPage("PORTRAIT", "A3"); 

   //encabezado y pie de pagina
   class pdf extends FPDF
   { 
    public function header()
    { 
     $this->SetFont("Arial", "B", 12);
     $this->Write(5, "Maria Fernanda Garcia Vega");
 
    }

    public function footer()
    { 
        $this->SetY(-15);
        $this->SetX(-15);
        $this->SetFont("Arial", "B", 12);
        $this->Write(5, $this->PageNo());
 
    }

   }

   $pdf = new pdf();
   $pdf ->AddPage("PORTRAIT", "A3");

   //titulo 
   $pdf ->SetFont("HELVETICA", "B", "20");

   $pdf->SetY(10);
   $pdf->Cell(0, 12, " Segunda Practica Evaluada",0,0,"C");
 
   //texto 
   $pdf ->SetFont("Arial", "I", "12");

   $pdf->SetY(20);
   $pdf->Cell(10, 10, " Con diez cañones por banda,",0);

   $pdf->SetY(25);
   $pdf->Cell(10, 10, " viento en popa a toda vela,",0);

   $pdf->SetY(30);
   $pdf->Cell(10, 10, "no corta el mar, sino vuela",0);

   $pdf->SetY(35);
   $pdf->Cell(10, 10, " un velero bergantín;",0);

   $pdf->SetY(40);
   $pdf->Cell(10, 10, "bajel pirata que llaman, ",0);

   $pdf->SetY(45);
   $pdf->Cell(10, 10, "por su bravura, el Temido,",0);

   $pdf->SetY(50);
   $pdf->Cell(10, 10, "en todo mar conocido",0);

   $pdf->SetY(55);
   $pdf->Cell(10, 10, "del uno al otro confín.",0);




  //pagina 2
   $pdf->AddPage("LANSCAPE", "LEGAL"); 
   $pdf->Image("img/foto1.jpg",10,80,50,0, "jpg"); //imagen
   
   //texto 
   $pdf ->SetFont("TIMES", "", "11");

   $pdf->SetY(20);
   $pdf->Cell(10, 10, "“¡Alimenten y propaguen el fuego de Cristo que tienen en ustedes! Lo
   dijo el Papa Francisco esta mañana al recibir en audiencia en el Vaticano
   a los jóvenes participantes en el XI Forum Internacional de Jóvenes, que
   tuvo lugar en Ciampino, a pocos kilómetros de Roma en la Casa “El
   Carmelo”. Tres días de encuentro organizados por el Dicasterio para los
   Laicos, la Familia y la Vida con el objetivo de promover la
   implementación del Sínodo 2018 centrado en el tema: Los jóvenes, la fe
   y el discernimiento vocacional.”",0);
   
   //tabla 
   $pdf->SetFont("Arial", "B", "12");
   //encabezado
   $pdf->Cell(25, 5, "Autor", 1, 0, "C", false);
   $pdf->Cell(50, 5, "Libro", 1, 0, "C" ,false);
   $pdf->Cell(100, 5, "Año", 1, 0, "C",false);

   //columnas 
   $pdf->SetFont("Arial", "", "12");
   $pdf->Cell(25, 5, "Miguel de Cervantes", 1, 0, "C", false);
   $pdf->Cell(50, 5, "Quijote de la Mancha", 1, 0, "C" ,false);
   $pdf->Cell(100, 5, "1605", 1, 0, "C",false);

   $pdf->SetFont("Arial", "", "12");
   $pdf->Cell(25, 5, "Milan Kundera", 1, 0, "C", false);
   $pdf->Cell(50, 5, "Insoportable levedad del ser", 1, 0, "C" ,false);
   $pdf->Cell(100, 5, "1984", 1, 0, "C",false);

   $pdf->SetFont("Arial", "", "12");
   $pdf->Cell(25, 5, "Juan Pablo II", 1, 0, "C", false);
   $pdf->Cell(50, 5, "Salvifici Doloris", 1, 0, "C" ,false);
   $pdf->Cell(100, 5, "1984", 1, 0, "C",false);



   $pdf->Output("I", "DocPDFDWSL2022.pdf");

    

   
?>