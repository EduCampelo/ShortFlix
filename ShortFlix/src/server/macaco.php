<?php
//validando cadastro
if(isset($_POST['btn_submit'])) {
    //criação das variaveis
    $nome = $_POST['f_nome'];
    $email = $_POST['f_email'];
    $cpf = $_POST['f_cpf'];
    $tel = $_POST['f_telefone'];
    $dat_nas = $_POST['f_datanascimento'];

    //array para armazenar os erros
    $erros = [];
    
    //tratamento do campo nome
    $nome = filter_input(INPUT_POST, 'f_nome',FILTER_SANITIZE_SPECIAL_CHARS);

    //tratamento do campo email
    $email = filter_input(INPUT_POST , 'email', FILTER_SANITIZE_EMAIL);

    //tratamento do campo cpf
    $cpf = filter_input(INPUT_POST , 'f_cpf',  FILTER_SANITIZE_NUMBER_FLOAT);

    //tratamento do campo telefone
    $tel = filter_input(INPUT_POST , 'f_telefone', FILTER_SANITIZE_NUMBER_INT);

    //FILTROS pra validação
    if(!$email = filter_input(INPUT_POST , 'f_email', FILTER_VALIDATE_EMAIL)){
        $erros[] = "E-mail Invalido";
    };

    if(!$cpf = filter_input(INPUT_POST , 'f_cpf', FILTER_VALIDATE_FLOAT)){
        $erros[] = "Cpf Invalido";
    };

    if(!$tel = filter_input(INPUT_POST, 'f_telefone', FILTER_VALIDATE_INT)) {
        $erros[] = "Telefone Invalido";
    }
    
    if(!empty($erros)){
        foreach($erros as $erros){
            echo $erros;
        }
    }else{

   }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/telaCadastro.css">
    <link rel="shortcut icon" href="../img/shortflix icon.png" type="image/x-icon">
    <title>Cadastro | ShortFlix</title>
    
</head>

<body class="body">
  <div class="back">
    <video autoplay loop muted plays-inline class="back-video">
      <source src="../video/Sequencia_0312.mp4" type="video/mp4">
    </video>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

  </style>
  
  <!-- Estilo do Template -->

  <nav class="navbar navbar-expand-md navbar-dark fixed-top " >
   <a href="../html/telaInicial.html"> <img class="navbar-brand" src="../img/150 2.png" alt="MACACO"></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../html/telaInicial.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../html/telaCadastro.html" target="_self">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../html/telaSobre.html" tabindex="-1" >Sobre a Empresa</a>
        </li>
        <!--
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      -->
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

<!-- Fim do menu Inicial-->

  <div class="box_sucesso">
    <div class="sucesso">
      <h2>Cadastrado com sucesso</h2>
      <a class="btn_sucesso" href="../html/telainicial.html">Home</a>
    </div>
   </div>
<!-- FIm do Form Cadastro-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script> 

    <script src="../scripts/js/jquery-3.6.4.js"></script>
<!-- Fim do Script menu inicial-->
</body>
</html>