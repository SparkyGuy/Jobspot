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
            <i class="fa-solid fa-plus" style="color: #6e4474; font-size: 20px;"></i>
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
<div class="card-container">
    <div class="product-card" id="open-modal">
        <img src="../images/rodrigo.jpg" alt="">
        <h4>Rodrigo </h4>
        <hr>
        <br>
        <h5>Pedreiro</h5>
            <h6>(16)99119-0088</h6>

        <div>
            <button id="open-modal">+</button>
        </div>
    </div>

    <div class="product-card" id="open-modal">
        <img src="../images/pedreiro.jpg" alt="">
        <h4>João Gomes</h4>
        <hr>
        <br>
        <h5>Pedreiro</h5>
            <h6>(16)99119-0088</h6>

        <div>
            <span></span>
            <button id="open-modal">+</button>
        </div>
    </div>

    <div class="product-card" id="open-modal">
        <img src="../images/pedreiro.jpg" alt="">
        <h4>João Gomes</h4>
        <hr>
        <br>
        <h5>Pedreiro</h5>
            <h6>(16)99119-0088</h6>

        <div>
            <span></span>
            <button id="open-modal" >+</button>
        </div>
    </div>

    <div class="product-card" id="open-modal">
        <img src="../images/pedreiro.jpg" alt="">
        <h4>João Gomes</h4>
        <hr>
        <br>
        <h5>Pedreiro</h5>
            <h6>(16)99119-0088</h6>

        <div>
            <span></span>
            <button id="open-modal">+</button>
        </div>    
    </div>

    <div class="product-card" id="open-modal">
        <img src="../images/pedreiro.jpg" alt="">
        <h4>João Gomes</h4>
        <hr>
        <br>
        <h5>Pedreiro</h5>
            <h6>(16)99119-0088</h6>

        <div>
            <span></span>
            <button id="open-modal">+</button>
        </div>   
    </div>

    <div class="product-card" id="open-modal">
        <img src="../images/pedreiro.jpg" alt="" >
        <h4>João Gomes</h4>
        <hr>
        <br>
        <h5>Pedreiro</h5>
            <h6>(16)99119-0088</h6>

        <div>
            <span></span>
            <button id="open-modal">+</button>
        </div>
    </div>
</div>
<script>
    const profilePicButton = document.querySelector('.profile-pic');
    const tooltip = document.getElementById('tooltip');

    profilePicButton.addEventListener('mouseover', () => {
        tooltip.style.display = 'block';
    });

    profilePicButton.addEventListener('mouseout', () => {
        tooltip.style.display = 'none';
    });

    const plusButton = document.querySelector('.plus-button');
    const tooltipPlus = document.getElementById('tooltip-plus');

    plusButton.addEventListener('mouseover', () => {
        tooltipPlus.style.display = 'block';
    });

    plusButton.addEventListener('mouseout', () => {
        tooltipPlus.style.display = 'none';
    });
</script>

<div id="fade" class="hide"></div>
    <div id="modal" class="hide">
      <div class="modal-header">
        <div class="invisivel">
            <h2>João Gomes - Pedreiro</h2>
        </div>
        <button id="close-modal">
        <i class="fa-sharp fa-regular fa-circle-xmark fa-2xl"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="cointainer">
            <div class="elemento1">
                <div class="profile-pic-modal">
                    <img src="../images/rodrigo.jpg" alt="">
                </div>
                <div class="name-profile">
                    <h4>Rodrigo Construção</h4>
                </div>
                <div class="desc">
                    <h2>
                        🏠 Precisando construir ou reformar, Rodrigo Construção!<br>
                        🤝 Chama quem entende do assunto<br>
                        📲 16 - 99978 - 4087<br>
                        📍 São Joaquim da Barra - SP    
                    </h2>
                </div>
                    <div class="links-container">
                        <h3>Contato</h3>
                        <div class="links">
                            <a href="https://api.whatsapp.com/send/?phone=5516999784087"> <i class="fa-brands fa-whatsapp fa-2xl" style="color: #6e4474;"></i> </a>
                            <a href="https://www.instagram.com/rodrigoconstrucao_/"><i class="fa-brands fa-instagram fa-2xl"style="color: #6e4474;"></i> </a>
                            <i class="fa-brands fa-linkedin-in fa-2xl" style="color: #6e4474;"></i>
                        </div>
                    </div>
            </div>
            <div class="elemento2">
            <div class="carousel">
                <button class="carousel__prev"><i class="fa-solid fa-angle-left"></i></button>
                <div class="carousel__container">
                  <div class="carousel__slide">
                    <img src="https://br-prod.asyncgw.teams.microsoft.com/v1/objects/0-brse-d1-e0901ddab8ccfc0dd8d1ead154b47259/views/imgo" alt="Imagem 1">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://br-prod.asyncgw.teams.microsoft.com/v1/objects/0-brse-d2-c46dc02c2d6890f43be254d7a7db405e/views/imgo" alt="Imagem 2">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://br-prod.asyncgw.teams.microsoft.com/v1/objects/0-brse-d4-fede72f9c28236f339d932869fbaa5ef/views/imgpsh_fullsize" alt="Imagem 3">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://br-prod.asyncgw.teams.microsoft.com/v1/objects/0-brse-d4-1fc1f2ffc22521b67d2c26a1eec9f050/views/imgo" alt="Imagem 4">
                  </div>
                  <div class="carousel__slide">
                    <img src="https://br-prod.asyncgw.teams.microsoft.com/v1/objects/0-brse-d3-a706e6f9b869b1bd7e8ec01fdc8af697/views/imgo" alt="Imagem 5">
                  </div>
                </div>
                <button class="carousel__next"><i class="fa-solid fa-angle-left"></i></button>
            </div>
            <div class="indicator-container">
            <ul class="carousel__indicators">
                    <li class="carousel__indicator active"></li>
                    <li class="carousel__indicator"></li>
                    <li class="carousel__indicator"></li>
                    <li class="carousel__indicator"></li>
                    <li class="carousel__indicator"></li>
                </ul>
            </div>
            </div>
      </div>
    </div>
