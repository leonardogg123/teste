<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <style>
        body{
            border-radius: 10px;
            padding: 10px 80px;
            background-color: #335757; 
            
        }
        form{
            margin: 9px 0px;
            padding: 60px;
            width: 50%;
            margin-left: 50%;
            background-color: #C6E3BB;
            border-radius: 10px;
            box-sizing: border-box;
            transform: translateX(-50%);
            margin-bottom: 85px;
        }
         label{
            display: flex;
            margin-top:5px
            
         }
         input[type=text]{
            width:100%;
            padding: 12px 20px;
            margin: 8px 0;
            display:inline-block;
            border: 1px solid #ccc;
            border-radius:4px;
            box-sizing:border-box;
            
         }
         input[type=Email],
         input[type=date],
         input[type=number]{
            width:100%;
            padding: 12px 20px;
            margin: 8px 0;
            display:inline-block;
            border: 1px solid #ccc;
            border-radius:4px;
            box-sizing:border-box;
         }
         input[type=submit]{
            background-color:#4caf50;
            color:white;
            padding:12px 20px;
            border:none;
            border-radius:4px;
            cursor:pointer;
            float:right;
         }
         input[type=submit]:hover{
            background-color:#45a049;
         }
         table{
            border-collapse:collapse;
            width:100%;
            font-family:Arial;
            font-size:14px;
            color: #333;
         }
         th, td{
            text-align:left;
            padding:8px;
            border: 1px solid #ddd;
            
         }
        th{
           background-color:#f2f2f2;
           font-weight:bold; 
        }
        a{
        display: inline-block;
        padding: 10px 10px;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        background-color: #4caf50;
        margin-left: 15px;
        }


        a.delete{
            background-color: #dc3545;
        }
        a.delete:hover{
            background-color:#c82333;
        }
        h1{
            font-family: "Inria Serif", serif;
            text-align: center;
            color: floralwhite;
            font-size: 50px;
        }
        h2{
            z-index: 1;
            top: 108px;
            left: 293px;
            position: absolute;
            width: 230px;
            text-align: center;
            font-family: "Inria Serif", serif;
            background: #A1F0F0;
            color: white;
            padding: 5px 10px 5px 10px;
            border-radius: 15px;
            cursor: pointer;
        }

    </style>
</head>

<body>
    
<h1>ITINERÁRIO</h1>
    <h2> Informações Básicas</h2>

<?php

if(isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id'])){
    $id = $_GET['id'];
    $result =$crud->readOne($id);

    if(!$result){
        echo "Registro não encontrado.";
        exit();
    }

    $destino_de_viagem = $result['destino_de_viagem'];
    $data_de_partida= $result['data_de_partida'];
    $data_de_retorno= $result['data_de_retorno'];
    $numero_de_viajantes= $result['numero_de_viajantes'];
    $documentos_da_viagem= $result['documentos_da_viagem'];
    $transporte = $result['transporte'];
    $telefone_de_emergencias= $result['telefone_de_emergencias'];
    $notas_adicionais= $result['notas_adicionais'];
  
?>
    <form action="?action=update" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="destino_de_viagem">destino de viagem</label>
         <input type="text" name="destino_de_viagem" value="<?php echo $destino_de_viagem ?>">

         <label for="data_de_partida">data de partida</label>
         <input type="date" name="data_de_partida" value="<?php echo $data_de_partida ?>">
 
         <label for="data_de_retorno">data de retorno</label>
         <input type="date" name="data_de_retorno" value="<?php echo $data_de_retorno ?>">

         <label for="numero_de_viajantes">numero de viajantes</label>
         <input type="text" name="numero_de_viajantes" value="<?php echo $numero_de_viajantes ?>">
    
         <label for="transporte">transporte</label>
         <input type="text" name="transporte" value="<?php echo $transporte?>">

         <label for="telefone_de_emergencias">telefone de emergencias</label>
         <input type="text" name="telefone_de_emergencias" value="<?php echo $telefone_de_emergencias?>">

         <label for="notas_adicionais">notas adicionais</label>
         <input type="text" name="notas_adicionais" value="<?php echo $notas_adicionais?>">

         <label for="documentos_da_viagem">documentos da viagem</label>
         <input type="text" name="documentos_da_viagem" value="<?php echo $documentos_da_viagem?>">

         <input type="submit" value = "Atualizar" name="enviar" onclick="return confirm('certeza que deseja atualizar?')">
</form>

        <?php
    }else{


    ?>
<form action="?action=create" method="POST">

 <label for="">Destino de viagem</label>
 <input type="text" name="destino_de_viagem" id="destino_da_viagem" required>

 <label for="">Data de partida</label>
 <input type="date" name="data_de_partida" id="data_de_partida" required>

 <label for="">Data de retorno</label>
 <input type="date" name="data_de_retorno" id="data_de_retorno" required>

 <label for="">Numero de viajantes</label>
 <input type="number" name="numero_de_viajantes" id="numero_de_viajantes" required>

 <label for="">Documentos da viagem</label>
 <input type="text" name="documentos_da_viagem" id="documentos_de_viagens" required>  

 <label for="">Transporte</label>
 <input type="text" name="transporte" id="transporte" required>

 <label for="">Telefone de emergencias</label>
 <input type="text" name="telefone_de_emergencias" id="telefone_de_emergencias" required>

 <label for="">Notas adicionais</label>
 <input type="text" name="notas_adicionais" id="notas_adicionais" required>


  <input type="submit" value="Salvar Itinerário" name="enviar"  onclick= "return confirm('certeza que deseja salvar?')"></input>
  <a href="perfil.php">Ir para o Perfil</a>
  <a href="../public/index.php">Página inicial</a>

</form>

<?php
}

?>

</body>
</html>