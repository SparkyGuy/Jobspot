SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50),
  `sobrenome` varchar(50),
  `email` varchar(64) NOT NULL,
  `senha` varchar(64)NOT NULL,
  `profissao` varchar(30),
  `nome-trabalho` varchar(64),
  `foto-perfil` varchar(500),
  `descricao` varchar(500),
  `whatsapp` varchar(150),
  `instagram` varchar(150),
  `image1` varchar(300),      
  `image2` varchar(300),    
  `image3` varchar(300),    
  `image4` varchar(300)
);

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `senha`, `profissao`, `nome-trabalho`, `foto-perfil`, `descricao`,`whatsapp`,`instagram`, 
`image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Carlos', 'Silva', 'carlos.silva@example.com', 'senha123xyz', 'Mecânico', 'Oficina do Carlos', 'https://media.discordapp.net/attachments/1154149439812939940/1177707167428657232/transferir_8.jpg?ex=65737c45&is=65610745&hm=6790440f2869d76be9796ca0db6ce6abdd2ec6047679d2ea7c0ac600b0c71133&=&format=webp&width=418&height=418'),
(2, 'Juliana', 'Martins', 'juliana.martins@example.com', 'senha456abc', 'Babá', 'Chaves Express', 'https://media.discordapp.net/attachments/1154149439812939940/1177707265978015744/transferir_3.jpg?ex=65737c5c&is=6561075c&hm=69603151b9760dd7b048657e4b1db7d835055ccdebd3e1b74c7b8aa1bdefcf77&=&format=webp&width=418&height=418'),
(3, 'Renato', 'Oliveira', 'renato.oliveira@example.com', 'senha789rty', 'Entregador', 'Entrega Rápida', 'https://media.discordapp.net/attachments/1154149439812939940/1177705954503041024/vintepila-4-6-418x405.webp?ex=65737b24&is=65610624&hm=7bf6cfddd2bf234b83a577d00b4cd671bba673aa9878a0c846c21a358abd31d7&=&format=webp'),
(4, 'Amanda', 'Costa', 'amanda.costa@example.com', 'senhaabcmnh', 'Faxineiro', 'Limpeza Total', 'https://media.discordapp.net/attachments/1154149439812939940/1177707168380764251/transferir_10.jpg?ex=65737c45&is=65610745&hm=7646707afa6f146b706b0d966c84ebf386daacff2f1a0fb414906ca3185f95d2&=&format=webp&width=418&height=418'),
(5, 'Gabriel', 'Ferreira', 'gabriel.ferreira@example.com', 'senhaoiuyt', 'Entregador', 'Cuidados Dedicados', 'https://media.discordapp.net/attachments/1154149439812939940/1177707265554382950/transferir_2.jpg?ex=65737c5c&is=6561075c&hm=b08c83201cf0e1af917664590a294bea2b24d2ee45d05879798590547aeb0c79&=&format=webp&width=418&height=418'),
(6, 'Fernanda', 'Lima', 'fernanda.lima@example.com', 'senhaqwert', 'Personal', 'Treino Personalizado', 'https://media.discordapp.net/attachments/1154149439812939940/1177707167881633913/transferir_9.jpg?ex=65737c45&is=65610745&hm=452c235a587c0c3f78c7dedecca5eaeb3dbb81a2b3ad88ac36d2f723d018570f&=&format=webp&width=418&height=418'),
(7, 'Rodrigo', 'Construções', 'ricardo.gomes@example.com', 'senha123qaz', 'Pedreiro', 'Construção Ágil', 'https://media.discordapp.net/attachments/1154149439812939940/1178025924059467887/WhatsApp_Image_2023-11-25_at_13.44.40.jpeg?ex=6574a522&is=65623022&hm=51eadf9c9b81b1915cddb1f0acee1998b6fb62841ab0dafa170ac3be3187e8eb&=&format=webp','🏠 Precisando construir ou reformar, Rodrigo Construção!<br>🤝 Chama quem entende do assunto<br>📲 16 - 99978 - 4087<br>📍 São Joaquim da Barra - SP'),
(8, 'Luana', 'Sousa', 'luana.sousa@example.com', 'senha456abc', 'Jardineiro', 'Jardins da Luana', ''),
(9, 'Felipe', 'Pereira', 'felipe.pereira@example.com', 'senha789rty', 'Porteiro', 'Segurança Residencial', ''),
(10, 'Camila', 'Costa', 'camila.costa@example.com', 'senhaabcxyz', 'Barbeiro', 'Estilo Moderno', ''),
(11, 'Diego', 'Oliveira', 'diego.oliveira@example.com', 'senha123qaz', 'Esteticista', 'Beleza Pura', ''),
(12, 'Vanessa', 'Martins', 'vanessa.martins@example.com', 'senha456abc', 'Pintor', 'Arte nas Paredes', ''),
(13, 'Hugo', 'Sousa', 'hugo.sousa@example.com', 'senha789rty', 'Mecânico', 'Auto Hugo', ''),
(14, 'Aline', 'Ferreira', 'aline.ferreira@example.com', 'senhaoiuyt', 'Chaveiro', 'Chave Mestra', ''),
(15, 'João', 'Lima', 'joao.lima@example.com', 'senhaqwert', 'Entregador', 'Entregas Expressas', ''),
(16, 'Mariana', 'Silva', 'mariana.silva@example.com', 'senha123qaz', 'Faxineiro', 'Limpeza VIP', ''),
(17, 'Lucas', 'Martins', 'lucas.martins@example.com', 'senha456abc', 'Babá', 'Cuidados Especiais', ''),
(18, 'Patrícia', 'Oliveira', 'patricia.oliveira@example.com', 'senha789rty', 'Personal', 'Treino Intenso', ''),
(19, 'LHP', 'Construção', 'eduardo.sousa@example.com', 'senhaabcxyz', 'Pedreiro', 'Construção Segura', 'https://media.discordapp.net/attachments/1154149439812939940/1177707168795983902/transferir_4.jpg?ex=65737c45&is=65610745&hm=f8c84a31ffac8c0a98580bc9d066e0deb585c438964dcfdfb922f1fc6439e2db&=&format=webp&width=418&height=418'),
(20, 'Larissa', 'Ferreira', 'larissa.ferreira@example.com', 'senha123qaz', 'Jardineiro', 'Jardins da Larissa', ''),
(21, 'Leonardo', 'Ferreira', 'leonardo.ferreira@example.com', 'senhaqwert', 'Barbeiro', 'Estilo Único', ''),
(22, 'Roberto', 'Santos', 'roberto.santos@example.com', 'senha123xyz', 'Esteticista', 'Estética Moderna', ''),
(23, 'Juliana', 'Lopes', 'juliana.lopes@example.com', 'senha456abc', 'Pintor', 'Arte nas Paredes', ''),
(24, 'Ricardo', 'Oliveira', 'ricardo.oliveira@example.com', 'senha789rty', 'Mecânico', 'Ricardo Auto Center', ''),
(25, 'Isabela', 'Silva', 'isabela.silva@example.com', 'senhaabcmnh', 'Chaveiro', 'Chave Mestra', ''),
(26, 'Rodrigo', 'Martins', 'rodrigo.martins@example.com', 'senhaoiuyt', 'Entregador', 'Expresso Rápido', ''),
(27, 'Ana', 'Pereira', 'ana.pereira@example.com', 'senhadfrty', 'Faxineiro', 'Limpeza Total', ''),
(28, 'João', 'Gomes', 'joao.gomes@example.com', 'senhamnbvty', 'Babá', 'Cuidando com Carinho', ''),
(29, 'Amanda', 'Almeida', 'amanda.almeida@example.com', 'senhaqwert', 'Personal', 'Treino Personalizado', ''),
(30, 'Luciano', 'Rocha', 'luciano.rocha@example.com', 'senhaeqwrty', 'Pedreiro', 'Construção Luciano', 'https://media.discordapp.net/attachments/1154149439812939940/1177710795950411897/transferir_14.jpg?ex=65737fa6&is=65610aa6&hm=f7aa46a21076843ae60c202d22bfb8dc2af2d618705351021ffd93ada67be0c8&=&format=webp&width=418&height=418'),
(31, 'Tatiane', 'Lima', 'tatiane.lima@example.com', 'senhamnvcxz', 'Jardineiro', 'Jardins da Tatiane', ''),
(32, 'Fábio', 'Ferreira', 'fabio.ferreira@example.com', 'senha123qaz', 'Porteiro', 'Segurança Residencial', ''),
(33, 'Vanessa', 'Mendes', 'vanessa.mendes@example.com', 'senha456qwe', 'Barbeiro', 'Cortes da Vanessa', ''),
(34, 'Eduardo', 'Sousa', 'eduardo.sousa@example.com', 'senha789rty', 'Esteticista', 'Beleza e Bem-Estar', ''),
(35, 'Patrícia', 'Oliveira', 'patricia.oliveira@example.com', 'senhaabcxyz', 'Pintor', 'Arte nas Cores', ''),
(36, 'Hugo', 'Costa', 'hugo.costa@example.com', 'senha123abc', 'Mecânico', 'Hugo Mecânica Rápida', ''),
(37, 'Mariana', 'Silveira', 'mariana.silveira@example.com', 'senha456qaz', 'Chaveiro', 'Chaves Especiais', ''),
(38, 'Leonardo', 'Martins', 'leonardo.martins@example.com', 'senha789abc', 'Entregador', 'Entrega Ágil', ''),
(39, 'Carla', 'Lima', 'carla.lima@example.com', 'senhaabcrty', 'Faxineiro', 'Limpeza Profunda', ''),
(40, 'Gustavo', 'Gomes', 'gustavo.gomes@example.com', 'senharmnhg', 'Babá', 'Cuidados Exclusivos', ''),
(41, 'Aline', 'Oliveira', 'aline.oliveira@example.com', 'senhaoiuyt', 'Personal', 'Treino Intenso', ''),
(42, 'Rafael', 'Pereira', 'rafael.pereira@example.com', 'senhadfrty', 'Pedreiro', 'Construções Duradouras', 'https://media.discordapp.net/attachments/1154149439812939940/1177711209206788156/transferir_16.jpg?ex=65738009&is=65610b09&hm=ab2259cdb07365ce0cf38223720903c4b78d6d0c6e2472d71ac4b04f9f048e54&=&format=webp&width=418&height=418'),
(43, 'Isabela', 'Alves', 'isabela.alves@example.com', 'senhaeqwrty', 'Jardineiro', 'Jardins da Isabela', ''),
(44, 'Roberto', 'Lima', 'roberto.lima@example.com', 'senhamnbvcx', 'Porteiro', 'Segurança Condominial', ''),
(45, 'Fernanda', 'Ferreira', 'fernanda.ferreira@example.com', 'senhaqwert', 'Barbeiro', 'Estilo Único', ''),
(46, 'Vinícius', 'Santos', 'vinicius.santos@example.com', 'senha123xyz', 'Esteticista', 'Beleza em Foco', ''),
(47, 'Juliana', 'Martins', 'juliana.martins@example.com', 'senha456abc', 'Pintor', 'Arte Moderna', ''),
(48, 'Ricardo', 'Oliveira', 'ricardo.oliveira@example.com', 'senha789rty', 'Mecânico', 'Ricardo Auto Center', ''),
(49, 'Isabela', 'Silva', 'isabela.silva@example.com', 'senhaabcmnh', 'Chaveiro', 'Chave Mestra', ''),
(50, 'Rodrigo', 'Martins', 'rodrigo.martins@example.com', 'senhaoiuyt', 'Entregador', 'Expresso Rápido', ''),
(51, 'Ana', 'Pereira', 'ana.pereira@example.com', 'senhadfrty', 'Faxineiro', 'Limpeza Total', ''),
(52, 'João', 'Gomes', 'joao.gomes@example.com', 'senhamnbvty', 'Babá', 'Cuidando com Carinho', ''),
(53, 'Amanda', 'Almeida', 'amanda.almeida@example.com', 'senhaqwert', 'Personal', 'Treino Personalizado', ''),
(54, 'Luciano', 'Rocha', 'luciano.rocha@example.com', 'senhaeqwrty', 'Pedreiro', 'Construção Luciano', 'https://media.discordapp.net/attachments/1154149439812939940/1177711983546597436/Captura_de_tela_2023-11-24_174534.png?ex=657380c1&is=65610bc1&hm=489e4887e7acfc0b7956248b8d04f75f5e7cd5209e15c4c90b4842e16c84508d&=&format=webp&width=423&height=418'),
(55, 'Tatiane', 'Lima', 'tatiane.lima@example.com', 'senhamnvcxz', 'Jardineiro', 'Jardins da Tatiane', ''),
(56, 'Fábio', 'Ferreira', 'fabio.ferreira@example.com', 'senha123qaz', 'Porteiro', 'Segurança Residencial', ''),
(57, 'Vanessa', 'Mendes', 'vanessa.mendes@example.com', 'senha456qwe', 'Barbeiro', 'Cortes da Vanessa', ''),
(58, 'Eduardo', 'Sousa', 'eduardo.sousa@example.com', 'senha789rty', 'Esteticista', 'Beleza e Bem-Estar', ''),
(82, 'Carlos', 'Silva', 'carlos.silva@example.com', 'senha123xyz', 'Mecânico', 'Oficina do Carlos', 'https://images.pexels.com/photos/449627/pexels-photo-449627.jpeg?cs=srgb&dl=wood-sea-nature-449627.jpg&fm=jpg'),
(83, 'arthur', 'arthur', 'arthur@gmail.com', 'a', '', '', ''),
(84, 'Iran', 'Luva', 'carlos.silva@example.com', 'senha123xyz', 'Pedreiro', 'Oficina do Carlos', 'https://media.discordapp.net/attachments/1154149439812939940/1177713041723359352/4fb9da3a7eedeaaa3df93e4712d5c5f5.jpg?ex=657381bd&is=65610cbd&hm=d595e5dccefd31b22aa165ee71c0df0d5356708779779fe4a53f80959f5a5c3f&=&format=webp&width=418&height=418'),
(85, 'arthur', 'roberto', 'arthur@gmail.com', 'arthur', '', '', ''),
(86, 'arthur', 'Lázaro', 'arthur@gmail.com', 'senha123', '', '', '');

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;
