CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR (100) NOT NULL
);

CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    description VARCHAR(200) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    price FLOAT(6, 2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);


INSERT INTO tb_category (name, description)
VALUES 
("Informática", "Produtos de Informática, peças e acessórios para computador, etc."),
("Escritório", "Canetas, cadernos, folhas, etc."),
("Eletrônicos", "TVs, som portátil, caixas de som, etc.");



INSERT INTO tb_product (name, description, photo, price, category_id, quantity, created_at)
VALUES
("Headset Gamer Lamia 2 Redragon", "Lunar White RGB USB Som Surround 7.1 Virtual com Suporte de Headset - Branco", "https://m.media-amazon.com/images/I/51D7NaE524L._AC_SL1500_.jpg", 329.00, 1, 5, "2022-06-17 20:20:00"),
("SSD 1TB Crucial", 'Sata 3 2.5" Bx500 CT1000BX500SSD1', "https://m.media-amazon.com/images/I/61dPLkN4poL._AC_SL1050_.jpg", 579.00, 1, 190, "2022-06-17 20:20:00"),
("Roteador Mercusys AC12G", "Wireless Gigabit Dual Band AC1200 Preto Grande", "https://m.media-amazon.com/images/I/51Gn72fJKtL._AC_SL1000_.jpg", 189.00, 1, 30, "2022-06-17 20:20:00"),
("Placa de Vídeo GALAX RTX 3070", "GeForce, 1-Click OC, 8GB GDDR6, DLSS, LHR, Ray Tracing", "https://m.media-amazon.com/images/I/71a8rTLXUkL._AC_SL1500_.jpg", 4499.00, 1, 5, "2022-06-17 20:20:00"),
("HD Externo ADATA 1TB", "Portátil HV620S, USB 3.2", "https://m.media-amazon.com/images/I/51VTTBB2MuL._AC_SL1500_.jpg", 310.00, 1, 30, "2022-06-17 20:20:00"),
("Mouse Pad HyperX Fury", "Gamer, Tamanho Extra Grande (90cm x 42cm), HX-MPFS-XL", "https://m.media-amazon.com/images/I/81pjZhGJKjL._AC_SL1500_.jpg", 179.00, 1, 100, "2022-06-17 20:20:00"),
("Cadeira Gamer XZONE", "Premium, CGR-01, Cor Verde/Preto", "https://m.media-amazon.com/images/I/811-HoAXB0L._AC_SL1500_.jpg", 899.00, 1, 10, "2022-06-17 20:20:00"),
("Teclado Mecânico Redragon Surara Pro", "RGB, Gamer, Switch Redragon Optical Blue, ABNT2 - K582RGB-PRO", "https://m.media-amazon.com/images/I/617fOo46ISL._AC_SL1200_.jpg", 359.00, 1, 20, "2022-06-17 20:20:00"),
("Mouse Razer Deathadder", "Gamer, V2 Mini Chroma", "https://m.media-amazon.com/images/I/51qyS1Et4yL._AC_SL1500_.jpg", 169.00, 1, 20, "2022-06-17 20:20:00"),
("Mouse Sem Fio Logitech G305", "Gamer, Lightspeed com 6 Botões Programáveis e Até 12.000 DPI - Branco", "https://m.media-amazon.com/images/I/51DYDLykzoL._AC_SL1500_.jpg", 239.00, 1, 25, "2022-06-17 20:20:00"),
("Caneta Marca Texto Faber-Castell", "Grifpen, MT/ESZF, 4 Cores", "https://m.media-amazon.com/images/I/51bptS-g93L._AC_SL1000_.jpg", 9.90, 2, 100, "2022-06-17 20:20:00"),
("Caneta Ponta Fina Faber-Castell", "Fine Pen PoP, SM/FPP03, cartela com 3 unidades", "https://m.media-amazon.com/images/I/61IDaPKQFhL._AC_SL1500_.jpg", 7.90, 2, 150, "2022-06-17 20:20:00"),
("Caneta Esferográfica BIC", "Cristal Dura Mais, A Clássica, Azul, Ponta Média de 1.0mm, 868795, Leve 4 Pague 3", "https://m.media-amazon.com/images/I/61u8PS1aJtL._AC_SL1300_.jpg", 4.90, 2, 230, "2022-06-17 20:20:00"),
("Clips 29mm Tilibra", "D302 Cores Sortidas 100 Unidades, 1 un", "https://m.media-amazon.com/images/I/61xdmGlZY6L._AC_SL1000_.jpg", 9.90, 2, 70, "2022-06-17 20:20:00"),
("Papel Sulfite A4 Chamex", "75g Pacote 500 Folhas", "https://m.media-amazon.com/images/I/41me+LkvMNL._AC_.jpg", 29.90, 2, 90, "2022-06-17 20:20:00"),
("Echo Dot", "4ª Geração - Smart Speaker com Alexa - Cor Preta", "https://m.media-amazon.com/images/I/714Rq4k05UL._AC_SL1000_.jpg", 299.00, 3, 15, "2022-06-17 20:20:00"),
("Fire TV Stick", "Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)", "https://m.media-amazon.com/images/I/51degAt5CFL._AC_SL1000_.jpg", 379.00, 3, 20, "2022-06-17 20:20:00"),
("Roku Express", "Streaming player Full HD. Transforma sua TV em Smart TV. Com controle remoto e cabo HDMI incluídos", "https://m.media-amazon.com/images/I/61sdIoMgu1L._AC_SL1500_.jpg", 199.00, 3, 35, "2022-06-17 20:20:00"),
('Smart TV LED 43" Full HD AOC', "ROKU TV FHD 43S5195/78G, Wi-Fi, 3 HDMI, 1 USB, Wifi, Conversor Digital", "https://m.media-amazon.com/images/I/51dtHvrTE-L._AC_SL1000_.jpg", 1699.00, 3, 10, "2022-06-17 20:20:00"),
("JBL GO 3", "Caixa de som Bluetooth 4.2W Preta JBLGO3BLK", "https://m.media-amazon.com/images/I/71G4Tikvh6L._AC_SL1500_.jpg", 219.00, 3, 50, "2022-06-17 20:20:00");