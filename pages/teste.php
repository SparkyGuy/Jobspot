<?php
include('../config/protect.php');
include('../config/conexao.php');


if (isset($_GET['search'])) {
    $termoDePesquisa = $_GET['search'];
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'clientes';

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    $query = "SELECT * FROM clientes WHERE nome-trabalho LIKE '%$termoDePesquisa%' OR profissao LIKE '%$termoDePesquisa%'";
    $result = $conn->query($query);

    // Processar e exibir os resultados da pesquisa
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Nome: " . $row['nome'] . "</p>";
            echo "<p>Profissão: " . $row['profissao'] . "</p>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <script src="https://kit.fontawesome.com/dacd2c67db.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar Profissionais nunca foi tão Fácil!</title>
    <link rel="icon" type="image/x-icon" href="..//images/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&family=Raleway:wght@300;700&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&family=Raleway:wght@300;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&family=Raleway:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;1,100;1,200&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="../Styles/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" >
    <script src="../script/scripts.js" defer></script>
</head>
<body>
    <nav>
        <div >
            <div class="logo">
                <h1>JobSpot</h1>
            </div>
        </div>
        <div class="search-container">
		<div class="search_wrap search_wrap_1">
			<div class="search_box">
            <form action="resultados.php" method="GET">
				<input type="text" name="search" class="input" placeholder="Pesquisar por Profissão">
                <button class="btn btn_common" id="searchButton" type="submit"><i class="fas fa-search"></i></button>
				</div>
			    </div>
            </form>
		</div>
        </div>
        <div class="nav-items-container">
            <button href="#" class="plus-button">
            <div id="tooltip-plus" class="hidden">
                <span id="tooltipTextPlus">Adicionar Profissão</span>
            </div>
            <i class="fa-solid fa-plus" style="color: #6e4474; font-size: 20px;" id="open-modal"></i>
            </button>
            <button href="#" class="profile-pic">
            <div id="tooltip" class="hidden">
                <span id="tooltipText"><?php echo $_SESSION['nome']; ?></span>
            </div>
            <i class="fa-regular fa-user" style="color: #6e4474; font-size: 20px;"></i>
            </button>
        </div>
    </nav>
<div class="container">
    <div class="outdoor">
    <img src="https://media.discordapp.net/attachments/639091185423482882/1174232181149814794/zoeira_5.png?ex=6566d7f0&is=655462f0&hm=851578dde1450f095366bf45d2ae21e219c8e3f356bb103765879ba23e7a24eb&=&width=776&height=323">
</div>
<div class="icones-container">
    <div class="icones">
    <a href="resultados.php?search=mecanico">
        <i class="fi fi-rr-car-mechanic"></i>
        <label>Mecânico</label>
        </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=chaveiro">
            <i class="fi fi-rr-key"></i>
            <label>Chaveiro</label>
    </a>  
    </div>
    <div class="icones">
    <a href="resultados.php?search=entregador">
        <i class="fi fi-rs-truck-side"></i>
        <label>Entregador</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=faxineiro">
    <i class="fi fi-rr-broom"></i>
    <label>Faxineiro</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=baba">
    <i class="fi fi-rr-child-head"></i>
    <label>Babá</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=personal">
    <i class="fi fi-rr-gym"></i>
    <label>Personal</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=pedreiro">
    <i class="fi fi-rr-block-brick"></i>
    <label>Pedreiro</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=jardineiro"> 
    <i class="fi fi-rs-flower-tulip" ></i>
    <label>Jardineiro</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=porteiro">
    <i class="fi fi-rr-building"></i>
    <label>Porteiro</label>
    </a>
    </div>
<div class="icones">
<a href="resultados.php?search=barbeiro"> 
    <i class="fi fi-br-scissors"></i>
    <label>Barbeiro</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=esteticista"> 
    <i class="fi fi-rr-soap"></i>
    <label>Esteticista</label>
    </a>
    </div>
    <div class="icones">
    <a href="resultados.php?search=pintor">
    <i class="fi fi-rr-paint-roller"></i>
    <label>Pintor</label>
    </a>
    </div>
</div>
<div class="text-prof">
    <label> Profissionais </label>
</div>
<?php

    $search = "";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clientes";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM clientes ORDER BY id ASC LIMIT 6 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    ?>
        <br>
        <div class="product-card-container" data-nome="<?php echo $row["nome"]; ?>" data-profissao="<?php echo $row["profissao"]; ?>" data-telefone="<?php echo $row["telefone"]; ?>">
        <?php
        while ($row = $result->fetch_assoc()) {

        ?>

    
                <div class="product-card" id="open-modal"  data-id="<?php echo $row['id']; ?>">
                <a href="detalhes_profissional.php?id=<?php echo $row['id']; ?>">
                    <img src="<?php echo $row['foto-perfil']; ?>" alt="">
                    <h4><?php echo $row["nome"]; ?></h4>
                    <hr>
                    <br>
                    <h5><?php echo $row["profissao"]?></h5>
                    <div>
                        <button class="open-modal-button" onclick="openModal(this)">+</button>
                    </div>
                </a>
            </div>
        <?php
        }
    } else {
        ?>
         <h5 class="no-result">"Nenhum resultado encontrado para a profissão: <?php. $search;?> </h5>
        <?php
    }

    $conn->close();


?>
<div id="fade"class="hide"></div>
    <div id="modal" class="hide">
        <div class="modal-header">
            <div class="invisivel">
            </div>
            <div class="close-modal-btn">
                <button class="close-modal-button">
                    <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl"></i>
                </button>
            </div>
        </div>
        <div class="modal-body">
            <div class="text"></div>
            <div class="container-modal">
                <div id="modal-content">
                    <div class="text-modal">
                            <h1>Adicionar Profissão</h1>
                    </div>
                    <div class="modal-form">
                        <div class="form-container">
                            <form method="POST" onsubmit="sendEmail(); reset(); return false;">
                                <input type="nome-modal" class="nome-modal" id="nome" name="nome-modal" placeholder='Nome'></input>
                                <input type="text" class="modal-sobrenome" id="sobrenome" name="email" placeholder='Sobrenome'></input>
                                <input type="text" class="modal-email"  id="email"name="email" placeholder='E-mail'></input>
                                <input type="text" class="modal-profissao"id="profissao" name="email" placeholder='Profissão'></input>
                                <input type="text" class="modal-insta"id="instagram" name="instagram" placeholder='Instagram'></input>
                                <input type="tel" class="modal-whatsapp" id="whatsapp" name="whatsapp" placeholder='Whatsapp'></input>
                                <input type="text" class="modal-descricao" id="descricao"name="descricao" placeholder='Descrição' style=" width: 124vh; height: 80px;"></input>

                                <div class="img-container">   
                                    <input type="file" class="email" name="email" style="background-color:#fff; border:none;display:inline-block;"></input>
                                    <h1>Foto de perfil</h1>
                                </div>
                                <div class="img-container">   
                                    <input type="file" class="email" name="email" style=" background-color:#fff;border:none;display:inline-block;"></input>
                                    <h1>Imagens</h1>
                                </div>
                                <div class="button-submit">
                                    <button type="submit">Enviar Solicitação</button>
                                </div>
                       <!--              <input type="file" class="email" name="email" style="border:none;display:inline-block;"></input>
                                <br>
                                    <div class="img-container">    
                            <div class="text-modal-image" style="padding-right: 300px;">
                                <h1 style="display:inline-block;">Foto de Perfil</h1>
                            </div>
                            <div class="text-modal-image">
                                <h1 style="display:inline-block;" style="padding-left: 350px;">Imagens</h1>
                            </div> -->
                    <script src="https://smtpjs.com/v3/smtp.js"></script>
                    <script>
                        function sendEmail(){
                            Email.send({
    Host : "smtp.elasticemail.com",
    Username : "jobspot3ds@gmail.com",
    Password : "3425CB1D28A8C41F0C632F9D26B1B7C0F88C",
    To : document.getElementById("email").value,
    From : "jobspot3ds@gmail.com",
    Subject : "Resposta do Formulário da adição de perfil",
    Body : "Solicitação de Criação de Perfil"
            +"<br> <br> Nome: "+document.getElementById("nome").value
            +"<br> Sobrenome: "+document.getElementById("sobrenome").value
            +"<br> Email: "+document.getElementById("email").value
            +"<br> Profissão: "+document.getElementById("profissao").value
            +"<br> Instagram: "+document.getElementById("instagram").value
            +"<br> Whatsapp: "+document.getElementById("whatsapp").value
            +"<br> Descricao: "+document.getElementById("descricao").value 
            +"<br> <br> Sua Solicitação de criação de perfil profissional está sendo avaliada pela nossa equipe, retornaremos com um email assim que possivel"
}).then(
  message => alert("Seu Email foi enviado com sucesso! Verifique sua caixa de email para mais informações")
);

                        }
                        </script>
                    </form>
                        </div>

                   </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openModalButtons = document.querySelectorAll('.open-modal-button');
            const modal = document.getElementById('modal');
            const modalTitle = document.getElementById('modal-title');
            const modalContent = document.getElementById('modal-content');
            const fade = document.getElementById('fade');

            openModalButtons.forEach(button => {
                button.addEventListener('click', () => {

                    modal.classList.remove('hide');
                    fade.classList.remove('hide');
                });
            });

            const closeModalButton = document.querySelector('.close-modal-button');
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hide');
                fade.classList.add('hide');
            });
        });
    </script>
</body>

</html>