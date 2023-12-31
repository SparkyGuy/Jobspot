<?php
        include_once('../config/conexao.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = "INSERT INTO clientes (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("ssss", $nome, $sobrenome, $email, $senha);
                if ($stmt->execute()) {
         
                } else {
                    header('Location: login.php');
                }
                $stmt->close();
            } else {
                echo "Erro na preparação da declaração: " . $mysqli->error;
            }
        }
        
        $mysqli->close();
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Styles/cadastro.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
  
     <div class="container">
      <div class="componente2">
        <div class="text-container">
          <div class="home-text">
            <h1>BEM VINDO AO JOBSPOT</h1>
          </div>
          <div class="subtext"> 
            <h1>Encontrar profissionais locais nunca foi tão fácil!</h1>
          </div>
        </div>
      <div class="home-icon">
        <img src="../images/home-icon.png" alt="">
      </div>

        </div>
      <div class="componente">
          <div class="quadrado2">

              <div class="texto">
                <div class="meio">
                <form action="cadastro.php" method="POST">
              <label class="text-cadastro"> Cadastro</label>
              </div>
              <div class="input1">
                <MdOutlinePerson/>
                <input type="text" id="nome" name="nome" class="name" placeholder='Nome:' required></input>
              </div>
              <div class="input1">
                <BiPencil/>
                <input type="text" id="sobrenome" name="sobrenome" class="surname" placeholder='Sobrenome:' required></input>
              </div>
                <div class="texto">
                  <MdOutlineMail/>
                <input type="text" id="email" name="email" class="email" placeholder='E-mail:' required></input>
                </div>
                <div class="texto">
                  <BiLockAlt/>
                <input type="password" id="senha" name="senha" class="password" placeholder='Senha:' required></input>
                </div> 
              </div>
              <script>
                function redirect() {
                  window.location.href="login.php"; 
                }
              </script>
              <div class="registrar-botao2">
                              <div class="login-btn">
                                  <button href="#" onClick="window.location.href='login.php'" >Fazer Login</button>
                              </div>
                              <button type="submit" id="submit" onClick="window.location.href='login.php'" class="learn-more">
                  <span aria-hidden="true" class="circle">
                  <span class="icon arrow"></span>
                  </span>
                  <span class="button-text2">registrar</span>
                </button>
              </div>
          </div>
        </div>
      </div>
</body>
</html>

