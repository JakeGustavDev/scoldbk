<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
    class report extends FPDF {

        var $date;

        public function __construct() {
            parent::__construct('P','mm','A4');
        }
        public function Info($date){
          $this->date = $date;
        }
        // El encabezado del PDF
        public function Header(){
        	$days=array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
            $this->Image('images/logo.png',55,10,100);
            $this->SetFont('Arial','B',13);
            $this->Ln(25); 
            $this->Cell(190,10,utf8_decode('Reporte - Fecha: '.$this->date),0,0,'C');
            $this->Ln(10); 
            $this->Cell(190,0,'',1,0,'C');
            $this->Ln(2); 
            // $this->Ln(10);
            // $this->SetFont('Arial','',8);
            // $this->Cell(190,0,'Fecha de Solicitud: '.utf8_decode($days[date('w')]).' | '.date('d-m-Y'),0,0,'C');
            // $this->Ln(6);
            // $this->Cell(190,0,'Hora de Solicitud: '.date('h:i:s a'),0,0,'C');
            // $this->Ln(6);
            // $this->Cell(190,0,utf8_decode('Cliente: '.$this->client),0,0,'C');
            // $this->Ln(6);
            // $this->Cell(190,10,utf8_decode($this->when.' | '.$this->client),0,0,'C');
            // $this->Ln(15); 
        }
       // El pie del pdf
       public function Footer(){
           // $this->SetY(-15);
           // $this->SetFont('Arial','B',8);
           // $this->Cell(130,10,'Autoriza(Nombre y Firma):',1,0,'L');
           // $this->Cell(3.5);
           // $this->Cell(135,10,'Autoriza(Nombre y Firma):',1,0,'L');
      }
    }
?>