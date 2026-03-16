<?php
// Configurações
$diretorioUpload = __DIR__ . '/uploads/';
$tamanhoMaximo = 5 * 1024 * 1024; // 5MB

// Criar diretório se não existir
if (!is_dir($diretorioUpload)) {
    mkdir($diretorioUpload, 0755, true);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_FILES['arquivo'])) {
        echo "Nenhum arquivo enviado.";
        exit;
    }

    $arquivo = $_FILES['arquivo'];

    // Verifica erros
    if ($arquivo['error'] !== UPLOAD_ERR_OK) {
        echo "Erro no upload.";
        exit;
    }

    // Verifica tamanho
    if ($arquivo['size'] > $tamanhoMaximo) {
        echo "Arquivo maior que o permitido (5MB).";
        exit;
    }

    // Verifica extensão
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    if ($extensao !== 'pdf') {
        echo "Apenas arquivos PDF são permitidos.";
        exit;
    }

    // Verifica MIME type real
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $arquivo['tmp_name']);
    finfo_close($finfo);

    if ($mime !== 'application/pdf') {
        echo "Arquivo inválido.";
        exit;
    }

    // Nome único
  // Nome original sem extensão
$nomeOriginal = pathinfo($arquivo['name'], PATHINFO_FILENAME);

// Limpa o nome (remove acentos, espaços e caracteres especiais)
$nomeOriginal = preg_replace('/[^a-zA-Z0-9_-]/', '_', $nomeOriginal);

// Nome final: unico + nome original
$nomeSeguro = uniqid('pdf_', true) . '_' . $nomeOriginal . '.pdf';


    // Move o arquivo
    if (move_uploaded_file($arquivo['tmp_name'], $diretorioUpload . $nomeSeguro)) {
        echo "Upload realizado com sucesso!<br>";
        echo "Arquivo salvo como: " . $nomeSeguro;
    } else {
        echo "Falha ao salvar o arquivo.";
    }
}
?>
