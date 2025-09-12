<?php
class Servico {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($dados) {
        $sql = "INSERT INTO servicos (titulo, descricao, preco, prestador_id) 
                VALUES (:titulo, :descricao, :preco, :prestador_id)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($dados);
    }

    public function listarPorPrestador($prestador_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM servicos WHERE prestador_id = :id");
        $stmt->execute([':id' => $prestador_id]);
        return $stmt->fetchAll();
    }

    public function buscarPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM servicos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function excluir($id) {
        $stmt = $this->pdo->prepare("DELETE FROM servicos WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>
