<?php
include_once('../database/conect.php');

$db = new Database();

class Crud{
    private $conn;
    private $table_name = "formitinerario";

    public function __construct($db){
        $this->conn = $db;
    }
    //cria a tabela com as informações necessárias. 
    public function create($postValues){
        $destino_de_viagem = $postValues['destino_de_viagem'];
        $data_de_partida= $postValues['data_de_partida'];
        $data_de_retorno= $postValues['data_de_retorno'];
        $numero_de_viajantes= $postValues['numero_de_viajantes'];
        $documentos_da_viagem= $postValues['documentos_da_viagem'];
        $transporte = $postValues['transporte'];
        $telefone_de_emergencias= $postValues['telefone_de_emergencias'];
        $notas_adicionais= $postValues['notas_adicionais'];
        
       
// $query vai inserir os valores informados pelo usuário na tabela.
        $query = "INSERT INTO ". $this->table_name . " (destino_de_viagem, data_de_partida, data_de_retorno, numero_de_viajantes, documentos_da_viagem, transporte, telefone_de_emergencias, notas_adicionais) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$destino_de_viagem);
        $stmt->bindParam(2,$data_de_partida);
        $stmt->bindParam(3,$data_de_retorno);
        $stmt->bindParam(4,$numero_de_viajantes);
        $stmt->bindParam(5,$documentos_da_viagem);
        $stmt->bindParam(6,$transporte);
        $stmt->bindParam(7,$telefone_de_emergencias);
        $stmt->bindParam(8,$notas_adicionais);
       
       
//
        $rows = $this->read();
        if($stmt->execute()){
            print "<script>alert('Itinerario salvo com sucesso!')</script>";
            print "<script> location.href='?action=read'; </script>";
            return true;
        }else{
            return false;
        }
    }

    public function read(){
        $query = "SELECT * FROM ". $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
// atualiza as informações já inseridas na tabela caso for necessário.
    public function update($postValues){
        
        $id = $postValues['id'];
        $destino_de_viagem = $postValues['destino_de_viagem'];
        $data_de_partida= $postValues['data_de_partida'];
        $data_de_retorno= $postValues['data_de_retorno'];
        $numero_de_viajantes= $postValues['numero_de_viajantes'];
        $documentos_da_viagem= $postValues['documentos_da_viagem'];
        $transporte = $postValues['transporte'];
        $telefone_de_emergencias= $postValues['telefone_de_emergencias'];
        $notas_adicionais= $postValues['notas_adicionais'];

        
//Compara a informação anterior coma a atualizada para ver se elas são iguais ou não.
        if(empty($id) || empty($destino_de_viagem) || empty($data_de_partida) || empty($data_de_retorno) ||  empty($numero_de_viajantes) || empty($documentos_da_viagem) || empty($transporte) ||  empty($telefone_de_emergencias) || empty($notas_adicionais)){
            return false;
        }
        
        $query = "UPDATE ". $this->table_name . " SET destino_de_viagem= ?, data_de_partida= ?, data_de_retorno= ?,numero_de_viajantes= ?, documentos_da_viagem = ?, transporte= ?, telefone_de_emergencias= ?, notas_adicionais= ? WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$destino_de_viagem);
        $stmt->bindParam(2,$data_de_partida);
        $stmt->bindParam(3,$data_de_retorno);
        $stmt->bindParam(4,$numero_de_viajantes);
        $stmt->bindParam(5,$documentos_da_viagem);
        $stmt->bindParam(6,$transporte);
        $stmt->bindParam(7,$telefone_de_emergencias);
        $stmt->bindParam(8,$notas_adicionais);
        $stmt->bindParam(9,$id);
       
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
        public function readOne($id){
            $query = "SELECT * FROM ". $this->table_name . " WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }

//Apaga os registros da tabela que forem selecionados.
public function delete ($id){
    $query = "DELETE FROM ". $this->table_name . " WHERE id = ?";
    $stmt= $this->conn->prepare($query);
    $stmt->bindParam(1,$id);
    if($stmt->execute()){
        return true;
    }else{
        return false;
    }

}


}


?>