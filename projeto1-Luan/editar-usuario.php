<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();


?>
<form action="?page=editar" method="POST">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="<?php print $row->nome; ?>" required class="form-control">
  </div>
  <label>Usuário</label>
  <input type="text" name="usuario" value="<?php print $row->usuario; ?>" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="<?php print $row->email; ?>" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" required class="form-control">
  </div>
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" required class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>