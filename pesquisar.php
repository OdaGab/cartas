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

<?php
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];

?>

    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="box box1">
                        <h2>Aniversariantes do Dia</h2> <h4><?php echo "$dia" . '/' . "$mes";?></h4>
                        <form action="teste.php" method="post">
                            <div class="mb-3">

<?php
$row = 1;
$r = 0;
if (($handle = fopen("res/planilha/2022.csv", "r")) !== FALSE) 
{
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
    { 
        if(utf8_encode($data[1]) == $dia && $data[2] == $mes)
        {
            
           $dd     = utf8_encode($data[0]);
           $email  = utf8_encode($data[4]);
           $serie  = $data[6];
           $classe = $data[7];
           // echo  utf8_decode( $data[0] ) . " - " . $data[1] . "<br>";
            echo "<input type='text' value = '$dd' class='form-control' id='desname' name='desname$r'>";
            echo "<input type='text' value = '$email' class='form-control' id='desmail' name='desmail$r'>";

            echo "<input type='text' hidden value = '$serie' class='form-control' id='serie' name='serie$r'>";
            echo "<input type='text' hidden value = '$classe' class='form-control' id='classe' name='classe$r'>";

            $r++;
            
        }

    }
    fclose($handle);
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