<?php
class Prestador {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($dados) {
        $stmt = $this->pdo->prepare("
            INSERT INTO prestadores 
            (nome, email, senha, telefone, localidade, cpf, foto_perfil, tipo_servico, categoria1, categoria2, categoria3, horario) 
            VALUES 
            (:nome, :email, :senha, :telefone, :localidade, :cpf, :foto_perfil, :tipo_servico, :categoria1, :categoria2, :categoria3, :horario)
        ");

        $stmt->execute([
            ':nome'        => $dados['nome'],
            ':email'       => $dados['email'],
            ':senha'       => password_hash($dados['senha'], PASSWORD_DEFAULT),
            ':telefone'    => $dados['telefone'],
            ':localidade'  => $dados['localidade'],
            ':cpf'         => $dados['cpf'],
            ':foto_perfil' => $dados['foto_perfil'],
            ':tipo_servico'=> $dados['tipo_servico'],
            ':categoria1'  => $dados['categoria1'],
            ':categoria2'  => $dados['categoria2'],
            ':categoria3'  => $dados['categoria3'],
            ':horario'     => $dados['horario']
        ]);
    }

    public function atualizar($dados) {
        $sql = "
            UPDATE prestadores SET 
                nome=:nome, 
                email=:email, 
                telefone=:telefone, 
                localidade=:localidade, 
                foto_perfil=:foto_perfil, 
                tipo_servico=:tipo_servico, 
                categoria1=:categoria1, 
                categoria2=:categoria2, 
                categoria3=:categoria3, 
                horario=:horario
        ";

        if (!empty($dados['senha'])) {
            $sql .= ", senha=:senha";
        }

        $sql .= " WHERE id=:id";

        $stmt = $this->pdo->prepare($sql);

        $params = [
            ':id'          => $dados['id'],
            ':nome'        => $dados['nome'],
            ':email'       => $dados['email'],
            ':telefone'    => $dados['telefone'],
            ':localidade'  => $dados['localidade'],
            ':foto_perfil' => $dados['foto_perfil'],
            ':tipo_servico'=> $dados['tipo_servico'],
            ':categoria1'  => $dados['categoria1'],
            ':categoria2'  => $dados['categoria2'],
            ':categoria3'  => $dados['categoria3'],
            ':horario'     => $dados['horario']
        ];

        if (!empty($dados['senha'])) {
            $params[':senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
        }

        $stmt->execute($params);
    }

    public function buscarPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM prestadores WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function excluir($id) {
        $stmt = $this->pdo->prepare("DELETE FROM prestadores WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>