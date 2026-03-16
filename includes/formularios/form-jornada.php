<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/temaescuro.css">
  <link rel="stylesheet" href="/public/css/formulario.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="icon" href="../public/src/icons/1.jpg" type="image">
  <title>Krona |Formulário de Jornada</title>
</head>
<body>
  <div class="area-upload">
    <form action="upload_pdf.php" method="POST" enctype="multipart/form-data">
      <input class="ipt" type="file" name="arquivo" accept="application/pdf" required>
      <button class="btn btn-outline-success" type="submit">Enviar Documentos</button>
    </form>
  </div>
  <div class="formulario-padrao">
    <h2>Cliente de jornada...</h2>
    <form class="row g-3">
  <div class="col-md-5">
    <label class="form-label">Cliente | Operação</label>
    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" maxlength="50" placeholder="Nome completo" autocomplete="off">
  </div>
  <div class="col-md-3">
    <label  class="form-label">Contato</label>
    <input type="text" class="form-control" id="responsavel" name="responsavel" maxlength="50" placeholder="Responsável pelo jornada" autocomplete="off">
  </div>
  <div class="col-md-4">
    <label class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" maxlength="50"  placeholder="informe um e-mail válido" autocomplete="off">
  </div>
  <div class="col-md-3">
    <label  class="form-label">Telefone</label>
    <input type="telefone" class="form-control" id="telefone" placeholder="DDD+Número" name="telefone" maxlength="11" autocomplete="off">
  </div>
  <div class="col-md-3">
    <label  class="form-label">Tecnologia Utilizada</label>
    <select id="tecnologia" name="tecnologia" class="form-select">
      <option selected>Selecione a tecnologia...</option>
      <option value="Autotrac">Autotrac</option>
      <option value="Omnilink">Ominilink</option>
      <option value="Onix">Ônix</option>
      <option value="Positron">Pósitron</option>
      <option value="Sascar">Sascar</option>
      <option value="Sighra">Sighra</option>
      <option value="VDO">VDO Tacógrafo Digital</option>
    </select>
  </div>
  <div class="col-md-3">
    <label  class="form-label">Tipo de Contrato</label>
    <select id="contrato" name="contrato" class="form-select">
      <option selected>Tipo de contrato...</option>
      <option value="Piloto">Contrato Piloto</option>
      <option value="Assinado">Contrato Assinado</option>
    </select>
  </div>
  <div class="col-md-3">
    <label class="form-label">Inicio dos testes</label>
    <input type="date" class="form-control" id="inicio_piloto" name="inicio_piloto">
  </div>
  <div class="col-md-4">
    <label  class="form-label">Situação</label>
    <select id="situacao" name="situacao" class="form-select">
      <option selected>Situação do cliente...</option>
      <option value="Em processo">Teste em Processo</option>
      <option value="Finalizado">Teste Finalizado</option>
    </select>
  </div>
  <div class="col-md-4">
    <label class="form-label">Fim dos testes</label>
    <input type="date" class="form-control" id="fim_piloto" name="fim_piloto">
  </div>
  <div class="col-md-3">
    <label  class="form-label">Valor da Licença em R$</label>
    <input type="text" class="form-control" id="valor_licenca" autocomplete="off">
  </div>
  <div class="col-md-1">
    <label  class="form-label">Qtdes</label>
    <input type="number" class="form-control" id="quantidade_licencas" autocomplete="off">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Carta de convenção coletiva recebida? 
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">💾 Salvar</button>
  </div>
</form>
  </div>

 <script src="../public/js/tema.js"></script>
</body>
</html>