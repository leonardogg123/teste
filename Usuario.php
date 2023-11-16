<?php
include('../database/conexao.php');

$db=new Conexao();
class Usuario{
    private $conn;
    public function __construct($db){
       $this->conn=$db; 
    }

    public function cadastrar($nome,$email,$senha,$confSenha){
            
            // Verificar se a senha tem pelo menos 8 caracteres, incluindo números e caracteres especiais
            if (strlen($senha) < 8 || !preg_match('/[0-9]/', $senha) || !preg_match('/[^a-zA-Z0-9]/', $senha)) {
                print "<script> alert('A senha deve ter pelo menos 8 caracteres, incluindo números e caracteres especiais.')</script>";
                return false;
            }

            if($senha === $confSenha){
            $emailExistente = $this->verificarEmailExistente($email);
            if($emailExistente){
                print "<script> alert('Email ja cadastrado')</script>";
                return false;
            }

            $senhaCriptografada = password_hash($senha,PASSWORD_DEFAULT);
            $sql="INSERT INTO cadastrar (nome, email, senha) VALUES (?,?,?)";

            $stmt= $this->conn->prepare($sql);
            $stmt->bindValue(1,$nome);
            $stmt->bindValue(2,$email);
            $stmt->bindValue(3,$senhaCriptografada);
            $result=$stmt->execute();
            return $result;

        }else{
            return false;

        }

    }

    private function verificarEmailExistente($email){
        $sql = "SELECT COUNT(*) FROM cadastrar WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();
    
        return $stmt->fetchColumn() > 0;
    }
    

    public function logar($email, $senha){
        $sql = "SELECT * FROM cadastrar WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email' ,$email);
        $stmt->execute();

        if($stmt->rowCount() == 1){
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($senha,$usuario['senha'])){
                return true;
            }
        }

        return false;
    }

}
?>