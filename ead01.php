<!DOCTYPE HTML>
<html>
  <head>
    <meta charset= 'utf-8'>
      <title>
       EAD 01
      </title>
  </head>
    <body>
      <h1> EAD 01 </h1>
      <table border style="solid">
        <tr>
          <td>
            Nome
          </td>
          <td>
            Peso(kg)
          </td>
          <td>
            Altura
          </td>
          <td>
            IMC
          </td>
          <td>
            Data de Nascimento
          </td>
          <td>
            Idade
          </td>
          
        </tr>
        <tr>
          <td>
            John Petrucci
          </td>
          <td>
            100            
          </td>
          <td>
            2.00 
          </td>
          <td>
            <?php
              $Peso = 100;
              $Altura = 2.00;
              $Imc = $Peso / ($Altura*$Altura); 
              echo number_format ($Imc, 2,',','.' );
            ?>  
          </td>
          <td>
            01/01/1980
          </td>
          <td>
            <?php
            $datanas = "1980-01-01";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>

        <tr>
          <td>
            John Myung
          </td>
          <td>
            80
          </td>
          <td>
            1.72
          </td>
          <td>
            <?php
              $Peso = 80;
              $Altura = 1.72;
              $Imc = $Peso / ($Altura*$Altura); 
              echo number_format ($Imc, 2,',','.' );
            ?>
          </td>
          <td>
            28/02/1990
          </td>
          <td>
            <?php
            $datanas = "1990-02-28";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>
          
        <tr>
          <td>
            James Labrie
          </td>
          <td>
            54
          </td>
          <td>
            1.64
          </td>
          <td>
            <?php
              $Peso = 54;
              $Altura = 1.64;
              $Imc = $Peso / ($Altura*$Altura); 
              echo number_format ($Imc, 2,',','.' );
            ?>
          </td>
          <td>
            10/09/1985
          </td>
          <td>
            <?php
            $datanas = "1985-09-10";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>

        <tr>
          <td>
            Jordan Rudess
          </td>
          <td>
            85
          </td>
          <td>
            1.73
          </td>
          <td>
            <?php
              $Peso = 85;
              $Altura = 1.73;
              $Imc = $Peso / ($Altura*$Altura); 
              echo number_format ($Imc, 2,',','.' );
            ?>
          </td>
          <td>
            04/09/1989
          </td>
          <td>
            <?php
            $datanas = "1989-09-04";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            
            ?>
          </td>
        </tr>
        
        <tr>
          <td>
            Mike Mangini
          </td>
          <td>
            46
          </td>
          <td>
            1.55
          </td>
          <td>
            <?php
              $Peso = 46;
              $Altura = 1.55;
              $Imc = $Peso / ($Altura*$Altura); 
              echo number_format ($Imc, 2,',','.' );
            ?>
          </td>
          <td>
            31/12/1978
          </td>
          <td>
            <?php
            $datanas = "1978-12-31";
            $data = date('Y-m-d');
            $idade = $data-$datanas;
            echo "$idade";
            ?>
          </td>
        </tr>  
        
      </table>
      
    </body>
    
</html>
