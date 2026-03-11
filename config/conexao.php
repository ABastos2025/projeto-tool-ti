<?php

class Conexao {

    private $host = "localhost";
    private $dbname = "projeto-tools-ti";
    private $usuario = "root";
    private $senha = "";

    public function conectar() {
        try {
            $conexao = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8",
                $this->usuario,
                $this->senha
            );

            // Configura o modo de erro do PDO
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexao;

        } catch (PDOException $erro) {
            echo "Erro na conexão: " . $erro->getMessage();
            exit;
        }
    }
}
