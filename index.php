<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizera</title>
    <link rel="icon" type="image/x-icon" href="imagens/logo1.png" />
    <style>
        @font-face {
            font-family: 'Knewave';
            src: url('fontes/knewave.ttf') format(trutype);
            font-weight: normal;
                font-style: normal;}
        }

    </style>
    <style type="text/css">
      .LmodalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(255, 99, 71, 0);
    z-index: 99999;
    opacity: 0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
  }
  .LmodalDialog:target {
    opacity: 1;
    pointer-events: auto;
  }
  .LmodalDialog > div {
    width: 500px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 20px 20px;
    border-radius: 10px;
    background: #fff;
    background: (131,111,255);
    box-shadow: 1px 1px 5px #000;
  }
  .LmodalDialog:hover{
      backdrop-filter: blur(10px);
  }
  #entrar{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
    background-color: rgb(218, 113, 52);
    box-shadow:1px 1px 3px rgb(17, 17, 17); ;
    border-radius: 0.5em;
    width: 80px;
    height:50px ;
    margin-top:-300px;
    font-size:15pt;
    color: white;
    border: none;
    text-shadow:2px 2px 2px rgba(43, 42, 42, 0.5); 
    cursor: pointer;
    margin-top:5px;}
    #entrar:hover{
        background-color: rgb(99, 97, 96);
        color:white;
    }
  .closeL {
    background: gray;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
  }
    .closeL:hover {
      background:red;
  }
  .closeL{
      color: #fff;;;
  }
  #imgposicon {
    position:absolute;
    right:80px;
    height: 75px;
    width: 75px;
    top:5px;
    }
       
    label {
      display: block;
  }
  
  input[type='submit'],
  label {
      margin-top: 1rem;
  }
  
  .btn:link,
  .btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 10px 30px;
    display: inline-block;
    border-radius: 150px;
    transition: all .2s;
    position: absolute;
    margin-left: 1160px;
    margin-top:-340px;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
    background-color:rgb(251, 225, 161);
    color:snow;
    text-shadow: 2px 2px 2px rgb(0, 0, 0, 0.5);
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
    
}

.btn-white::after {
    background-color: rgb(255, 234, 132);
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

.btn-animated {
    animation: moveInBottom 5s ease-out;
    animation-fill-mode: backwards;
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
</style>
</head>
<body>

<input id="btn-estudos" type="checkbox">
<label for="btn-estudos">
<div id="botao1">
    <h1>ESTUDOS</h1>
</div>
</label>
<ul class="menu-materias">
    <p>Qual matéria você vai estudar hoje?
    <li><a  href="questoes_estudos.php?$materia=biologia">Biologia </a></li>
            <li><a href="questoes_estudos.php?$materia=fisica">Física </a></li>
            <li><a href="questoes_estudos.php?$materia=geografia" >Geografia </a></li>
            <li><a href="questoes_estudos.php?$materia=historia">História </a></li>
            <li><a href="questoes_estudos.php?$materia=matematica">Matemática </a></li>
            <li><a href="questoes_estudos.php?$materia=portugues">Português </a></li>
            <li><a href="questoes_estudos.php?$materia=quimica">Química </a></li>
    </ul></p>
         <div  id="botao2">
                   <a id="diversao" href="questoes_diversao.html"><h1> DIVERSÃO</h1></a>
        </div>
      <div id="telacss"></div>

<link rel="stylesheet" type="text/css" href="style.css">

<a href="#openModal" title="Premium"> <IMG SRC="qualidade-premium.png" width="50px" height="80px" id="imgpos"> </a>

<div id="openModal" class="modalDialog">
<div>
<a  color="gray"href="#close" title="Fechar" class="close">X</a>


<center><h2>Premium!</h2>
  <p text-align="justify">Venha ser premium!!<br>
          Se você se tornar premium terá inúmeros benefícios eles são:<br>
    ° Receba em primeira mão as perguntas e respostas de vestibulares recentes;<br>
    ° Receba todas as novidades de atualizações de perguntas no seu email;<br>
    ° Não seja interrompido por anuncios;<br>
    ° Ter suporte ao cliente;<br>
    Fala sério incrivel né?!</p>
    <form action="premium.html" method="POST" onsubmit="return conexao.php(); return false;">
   <button id="cadastrar" action="premium.html">Cadastrar</button>
    </form>
    </center>
    </div>
    </div>

</div>
<div class="text-box">
    <a href="#openModalL" class="btn btn-white btn-				 animate" ><strong>Login</strong></a>
</div>
  <div id="openModalL" class="LmodalDialog">
    <div>
    <form action = "login.php" method="POST">
      <a href="#closeL" title="Fechar" class="closeL">X</a>
      <center><h3>Login</h3>
      <div> 
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
</div>

<div>
    <label for="SenhaP">Senha:</label>
    <input type="password" id="SenhaP" name="SenhaP" required>
</div>

<input type="submit" value="Logar">
</form>
  </div>
</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>

  </ul>
</div>
    </body>
    </html>
    
 