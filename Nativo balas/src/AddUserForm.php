<!DOCTYPE html>
<html lang="pt=BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../logo/a1821b0d303f6f047692071f51935738.jpg">
  <title>Nativo Balas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color:black;">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <a class="navbar-brand" href="../public/index.php">Nativo Balas</a>
    </nav>
  </header>
  <br>
<div class="d-flex justify-content-center">
<div class="p-2"><h1 style="color:white">Cadastrar</h1></div>
</div>
<div class="d-flex justify-content-center">
    <form>
        <div class="p-2"><input type="text" id="EMAIL" class="form-control" name="EMAIL" placeholder="E-mail"></div>
        <div class="p-2"><input type="text" id="SENHA" class="form-control" name="SENHA" placeholder="Senha"></div>
        <div id="erroSenha" style="display: none;">
          <div class="alert alert-danger">
            A senha precisa conter mais de 4 elementos
          </div>
        </div>
        <div class="p-2"><input type="text" id="CPF" class="form-control" name="CPF" placeholder="CPF"></div>
        <div class="p-2"><input type="text" id="CEP" class="form-control" name="CEP" placeholder="CEP"></div>
        <div class="p-2"><input type="number" id="TEL" class="form-control" name="TEL" placeholder="Telefone"></div>
        <div class="p-2"><input type="text" id="RUA" class="form-control" name="RUA" placeholder="Rua"></div>
        <div class="p-2"><input type="number" id="NUMERO" class="form-control" name="NUMERO" placeholder="Numero"></div>
        <div class="p-2"><input type="text" id="BAIRRO" class="form-control" name="BAIRRO" placeholder="Bairro">  </div>
        <div class="p-2"><input type="text" id="CIDADE" class="form-control" name="CIDADE" placeholder="Cidade"></div>
        <div class="p-2"><input type="text" id="ESTADO" class="form-control" name="ESTADO" placeholder="Estado"></div>
        <div class="p-2"><button type="button" class="form-control" id="subt2" type="submit">Enviar</div>
        <div class="p-2 text-center"><a class="form-control" href="LoginForm.php">Voltar</a></div>
      </form>
    </div>
<div class="d-flex justify-content-center">
<div class="p-2" id="status"></div>
</div>
<script src="../jquery-3.6.1.min.js"></script>
<script>
  $(document).ready(function(){

    $("#SENHA").blur(function() {
      let text = $("#SENHA").val();

      if(text.length < 4){
      $("#erroSenha").css("display", "block");
      return false;
    }else{
        $("#erroSenha").style = "display: none;";
      }
      
      if(text.length >= 4){
        $("#erroSenha").css("display", "none");
      }else{
        $("#erroSenha").css("display", "block");  
      }
    });
  })
</script>
</body>
</html>