


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos PHP</title>
</head>
<body>
    <h1>Sintaxis</h1>

    <?php
        echo "<p>Hola Mundo</p>";

        $numero = 2;
        $otroNumero = 3;

        $suma = $numero + $otroNumero;

        echo "La suma es: ".$suma;

        $type = "password";
    ?>


    <h3><?php  echo "la suma es ".$suma  ?></h3>
    <h4><?="La suma es ".$suma; ?></h4>

    <input type="<?=$type; ?>" >

    <h2>Estructuras de Control</h2>

    <?php
            $a=0;
            $a>3 ? $a=5 : $a=6;

            echo $a;
           /* 
            if($a > 3){
                $a=5;
            }else{
                $a=6;
            }
            */
          //  try{ 
                $s='f';
                echo $s=='f'?"femenino":"masculino";
                $sexo =  $s=='f'?"femenino":"masculino";

                echo $sexo;

          //  }catch(Exception $e){
          //      echo "ERROR: " . $e->getMessage();
          //  }

          $meses = array("enero","febrero","marzo");
            echo "<br>".$meses[3]."<br>";

        array_push($meses,"abril");

        echo "<br>".$meses[3]."<br>";

        $meses[8]="agosto";

        echo "<br>".$meses[7]."<br>";

        $persona=array("nombre"=>"bruno","apellido"=>"diaz");

        echo $persona["nombre"]." ".$persona["apellido"]."<br>";


        echo count($meses)."<br>";

        foreach($persona as $indice=>$dato){
            echo $indice.": ".$dato. "<br>";
        }

        foreach($meses as $mes){
            echo $mes."<br>";
        }

        
            
    ?>

   
   <?php include_once ("Persona.php"); 
         include_once "Alumno.php";
   ?>

    <h2>Orientación a Objetos</h2>

    <?php
        $persona = new Persona();
      //  $persona->nombre = "Tony";
        $persona->setNombre("Tony");
        $persona->apellido = "Stark";

        echo $persona->imprimir();

        echo Persona::saludar();


        $alumno = new Alumno();
        $alumno->setNombre("Peter");
        $alumno->apellido = "Parker";
        $alumno->nroMatricula = 123;

        echo $alumno->imprimir();
    ?>
</body>
</html>