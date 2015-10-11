<html>
    <body>
        <?php


        $name             = $_POST["name"];
        $address          = $_POST["address"];    
        $lat              = $_POST["lat"];
        $lng              = $_POST["lng"];
        $type             = $_POST["type"];
        $erro             = 0;

        if(empty($name) OR strstr ($name, ' ') == FALSE)
        {
          echo "Favor digitar o nome do lugar.<br>";
          $erro=1;
        }
        if(empty($address))
        {
          echo "Favor digitar o endereco do lugar.<br>";
          $erro=1;
        }
        if(empty($lat))
        {
          echo "Favor digitar a latitude do lugar.<br>";
          $erro=1;
        }
        if(empty($lng))
        {
          echo "Favor digitar a longitude do lugar.<br>";
          $erro=1;
        }
        if(empty($type))
        {
          echo "Favor digitar o tipo de lugar.<br>";
          $erro=1;
        }
        if($erro==0)
        {
            echo"Todos os dados foram digitados corretamente";
            include "insere.inc";
        }

        ?>
    </body>
</html>