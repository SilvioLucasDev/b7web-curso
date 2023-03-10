<?php
require('../config.php');

/**
 * Verifica qual é o tipo do método da requisição
 */
$method = strtolower($_SERVER['REQUEST_METHOD']);

if ($method == 'get') {

    $id = filter_input(INPUT_GET, 'id');

    if ($id) {
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $array['result'] = [
                'id' => $data['id'],
                'title' => $data['title']
            ];
        } else {
            $array['error'] = "ID inexistente";
        }
    } else {
        $array['error'] = "ID não enviado";
    }
} else {
    $array['error'] = "Método não permitido";
}

require('../return.php');
