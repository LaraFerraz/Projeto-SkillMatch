<?php
class Avaliacao {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($dados) {
        $stmt = $this->pdo->prepare("
            INSERT INTO avaliacoes (id_prestador, nota) 
            VALUES (:id_prestador, :nota)
        ");
        $stmt->execute([
            ':id_prestador' => $dados['id_prestador'],
            ':nota'         => $dados['nota']
        ]);
    }

    public function listarPorPrestador($id_prestador) {
        $stmt = $this->pdo->prepare("
            SELECT * FROM avaliacoes 
            WHERE id_prestador = :id_prestador 
            ORDER BY id DESC
        ");
        $stmt->execute([':id_prestador' => $id_prestador]);
        return $stmt->fetchAll();
    }

    public function mediaPorPrestador($id_prestador) {
        $stmt = $this->pdo->prepare("
            SELECT AVG(nota) as media 
            FROM avaliacoes 
            WHERE id_prestador = :id_prestador
        ");
        $stmt->execute([':id_prestador' => $id_prestador]);
        return $stmt->fetchColumn();
    }
}
?>
