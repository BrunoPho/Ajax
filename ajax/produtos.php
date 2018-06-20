<html>
<head>

 </head>
<body>

 <ul>

  <?php
    require_once "../app/models/ProdutoCrud.php";

      $crud = new ProdutoCrud();

      $produtos = $crud->getProdutos();

      foreach ($produtos as $produto){

            echo "<li>".utf8_encode($produto->getNome() )."</li>";
      }
    ?>

 </ul>

</body>

<!--* Created by PhpStorm.
* User: Bruno Pinheiro
* Date: 20/06/18
* Time: 14:19-->

</html>