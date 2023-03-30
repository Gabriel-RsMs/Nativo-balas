window.addEventListener("load", setEventos);

function setEventos() {
    let button = document.getElementById("subt");
    let button2 = document.getElementById("subt2");
    button.addEventListener("click", valida);
    button2.addEventListener("click", busca);
}

function valida(){
    let email = document.getElementById("EMAIL").value;
    let senha = document.getElementById("SENHA").value;

    let dados = new FormData();
    dados.append("EMAIL", email);
    dados.append("SENHA", senha);

    fetch("Valida_login.php", {
        method: "POST",
        body: dados
    })
    .then(function(response){
        return response.json();
    })
    .then(function(texto){
        if(texto.msg == "ok"){
            window.location.href = "../public/index.php";
        }else {
            document.getElementById("erroLogin").style = "display: block;";
        }
    })
    .catch(function(erro){
        console.error(erro);
    })
}

function busca(){
    let email = document.getElementById("EMAIL").value;
    let senha = document.getElementById("SENHA").value;
    let cpf = document.getElementById("CPF").value;
    let cep = document.getElementById("CEP").value;
    let tel = document.getElementById("TEL").value;
    let rua = document.getElementById("RUA").value;
    let numero = document.getElementById("NUMERO").value;
    let bairro = document.getElementById("BAIRRO").value;
    let cidade = document.getElementById("CIDADE").value;
    let estado = document.getElementById("ESTADO").value;

    let dados = new FormData();
    dados.append("EMAIL", email);
    dados.append("SENHA", senha);
    dados.append("CPF", cpf);
    dados.append("CEP", cep);
    dados.append("TEL", tel);
    dados.append("RUA", rua);
    dados.append("NUMERO", numero);
    dados.append("BAIRRO", bairro);
    dados.append("CIDADE", cidade);
    dados.append("ESTADO", estado);

    fetch("AddUserForm.php", {
        method: "POST",
        body: dados
    })
    .then(function(response){
        return response.json();
    })
    .then(function(res){
        if(res.status == true){
            document.getElementById("status").innerHTML = res.msg;
            window.location.href = "LoginForm.php";
        }else{
            document.getElementById("status").innerHTML = res.msg;
        }
    })
    .catch(function(erro){
        console.error(erro);
    })
}