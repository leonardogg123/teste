<?php
session_start();

require_once('../action/Crud.php');
require_once('../database/conect.php');

$database = new Database ();
$db = $database->getConnection();
$crud =new Crud ($db);


if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'create':
            $crud->create($_POST);
            $rows = $crud->read();
            break;

        case 'read';
            $rows = $crud->read();
            break;

        case 'update':
                if(isset($_POST['id'])){
                    $crud->update($_POST);

                }
                $rows = $crud->read();
                break; 

      //case delete
        case 'delete';
        $crud->delete($_GET['id']);
        $rows = $crud->read();
        break;

        default:
            $rows = $crud->read();
            break;
    }
}else{
    $rows = $crud->read();
}

if (isset($_GET['profile'])) {
  $profile = $_GET['profile'];
  $rows = $crud->readByProfile($profile);
} else {
  $rows = $crud->read();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <meta name="title" content="Fly - Luxury Jet Flights">
  <meta name="description" content="This is a private flight html template made by codewithsadee">
  <link rel="stylesheet" href="../public/css/aviao.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body id="top">
<div class="table-container">

  <main>
    <article>
      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <p class="hero-subtitle"></p>
          <table>
    <tr>
        <th>Destino de Viagem</th>
        <th>Data de Partida</th>
        <th>Data de Retorno</th>
        <th>Número de Viajantes</th>
        <th>Documentos da Viagem</th>
        <th>Transporte</th>
        <th>Telefone de Emergência</th>
        <th>Notas Adicionais</th>
    </tr>
    <?php
    if ($rows->rowCount() == 0) {
        echo "<tr>";
        echo "<td colspan='10'>Nenhum dado foi encontrado</td>";
        echo "<tr/>";
    } else {
      $cont = 0;
        while (($row = $rows->fetch(PDO::FETCH_ASSOC)) && ($cont<$_SESSION['qnt'])) {
          
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['destino_de_viagem'] . "</td>";
            echo "<td>" . $row['data_de_partida'] . "</td>";
            echo "<td>" . $row['data_de_retorno'] . "</td>";
            echo "<td>" . $row['numero_de_viajantes'] . "</td>";
            echo "<td>" . $row['documentos_da_viagem'] . "</td>";
            echo "<td>" . $row['transporte'] . "</td>";
            echo "<td>" . $row['telefone_de_emergencias'] . "</td>";
            echo "<td>" . $row['notas_adicionais'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='10'>";
            echo"<div class='btn-wrapper'>";
            echo "<a href='../view/itinerario.php?action=update&id=" . $row['id'] . "' class='btn btn-primary'>Editar</a>";
            echo "<a href='?action=delete&id=" . $row['id'] . "' class='btn btn-secondary onclick='return confirm(\"Tem certeza que deseja deletar esse registro?\")'>Deletar</a>";
            echo "</div>";
            echo "</td>";
            echo "</tr>";
            $cont +=1;
        }
    }
    
    ?>
                  <h1>ITINERÁRIO</h1><br>
      </table>

          <h1 class="h1 hero-title"></h1>
          <img src="../public/img/hero-banner.png" width="1000" height="400" alt="aviao" class="abs-img">
      </section>

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
  </a>

  <script src="../public/js/aviao.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </article>
  </main>
</body>
</div>
</html>