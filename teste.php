<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="res/css/stylesheet.css">
    <title>Colégio Exato</title>
</head>
<body>
    <header>
        <h1>Sistema OGS <br><small>Aniversariantes</small></h1>
        </header>



    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="box box1">
                        <h2>Parabéns enviado</h2> <h4></h4>
                    


<?php
error_reporting(0);
$r = 0;
while ( $_POST['desname'.$r])
{
    if($_POST['desname'.$r] == true)
        {
           include_once "res/fpdf/fpdf.php";
           // echo utf8_encode($nome) . "<br>";
           echo $_POST['desname'.$r] . ' - ' . $_POST['desmail'.$r] . "<br>";
          
           $desname =  $_POST['desname'.$r];
           $desemail = $_POST['desmail'.$r];
           $serie  = $_POST['serie'.$r];
           $classe = $_POST['classe'.$r];
// Integral
// Jardim
// Pre

            if($serie == 'PRE' && $classe == 'A')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/PREA.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }
            if($serie == 'PRE' && $classe == 'B')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/PREB.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }
                

// Fund I
            if($serie == 1 && $classe == 'B')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/1B.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }
            if($serie == 2 && $classe == 'A')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/2A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }    
            if($serie == 2 && $classe == 'B')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/2A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }     
            if($serie == 3 && $classe == 'A')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/3A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }

            if($serie == 4 && $classe == 'A')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/4A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }

            if($serie == 4 && $classe == 'B')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/4B.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }

            if($serie == 5 && $classe == 'A')
                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/5A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }

          

// Fund II
            if($serie == 6 && $classe == 'A')

                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/6A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }
            if($serie == 7 && $classe == 'B')

                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/7B.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }
            if($serie == 9 && $classe == 'A')

                {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/9A.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }

// Médio
            if($serie == 1 && $classe == 'BEM')

               {
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image('foto_turmas/1BEM.jpg', 0, 0, -210);
                    $pdf->SetFont('Arial','B',16);
                    $pdf->SetTextColor(255,255,255);
                    $pdf->Text(35,25, utf8_decode($desname) );
                    $pdf->Output( $desname . '.pdf','F');
                }
            if($serie == 3 && $classe == 'AEM')

                {
                     $pdf = new FPDF();
                     $pdf->AddPage();
                     $pdf->Image('foto_turmas/3AEM.jpg', 0, 0, -210);
                     $pdf->SetFont('Arial','B',16);
                     $pdf->SetTextColor(255,255,255);
                     $pdf->Text(35,25, utf8_decode($desname) );
                     $pdf->Output( $desname . '.pdf','F');
                 }



                include "smtp.php"; 
        }$r++;    
    }

?>

</div>                           
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </section>


<footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="footer1">
                        © OGS - Desenvolvimentos
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>