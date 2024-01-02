-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Out-2023 às 13:42
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `texto`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/conteudo.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. &nbsp;</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cards_ultimos_livros`
--

CREATE TABLE `cards_ultimos_livros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cards_ultimos_livros`
--

INSERT INTO `cards_ultimos_livros` (`id`, `imagem`, `categoria`, `titulo`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/livro-conteudo.jpg', 'novidade', 'senhora do amor e da guerra '),
(2, 'http://localhost/sebastiao_alves/uploads/livro-conteudo3.jpg', 'Prémio 2020', 'o caracol estrábico '),
(3, 'http://localhost/sebastiao_alves/uploads/livro-conteudo4.jpg', '', 'o velho que pensava que fugia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `imagem_mob` varchar(2000) NOT NULL,
  `destaque` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `link_saber` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrossel`
--

INSERT INTO `carrossel` (`id`, `imagem`, `imagem_mob`, `destaque`, `titulo`, `descricao`, `link_saber`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/cabecalho1.jpg', 'http://localhost/sebastiao_alves/uploads/cabecalho1_mob.jpg', 'novidade', 'Senhora do amor e da guerra ', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero ullam libero iste aperiam. Dolores, ipsum. Delectus, recusandae ab excepturi unde at natus dicta aperiam id ipsam. Vel ex esse doloribus nulla possimus est ipsum odio numquam, voluptatem soluta, deserunt eligendi voluptas.</p>', 'http://localhost/sebastiao_alves/livros/1'),
(2, 'http://localhost/sebastiao_alves/uploads/cabecalho2.jpg', 'http://localhost/sebastiao_alves/uploads/cabecalho2_mob.jpg', '', 'o caracol estrábico', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero ullam libero iste aperiam. Dolores, ipsum. Delectus, recusandae ab excepturi unde at natus dicta aperiam id ipsam. Vel ex esse doloribus nulla possimus est ipsum odio numquam, voluptatem soluta, deserunt eligendi voluptas.', 'http://localhost/sebastiao_alves/livros/2'),
(3, 'http://localhost/sebastiao_alves/uploads/cabecalho3.jpg', 'http://localhost/sebastiao_alves/uploads/cabecalho3_mob.jpg', '', 'o colecionador de amnésias', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero ullam libero iste aperiam. Dolores, ipsum. Delectus, recusandae ab excepturi unde at natus dicta aperiam id ipsam. Vel ex esse doloribus nulla possimus est ipsum odio numquam, voluptatem soluta, deserunt eligendi voluptas.', 'http://localhost/sebastiao_alves/livros/3'),
(5, 'http://localhost/sebastiao_alves/uploads/cabecalho4.jpg', 'http://localhost/sebastiao_alves/uploads/cabecalho4_mob.jpg', '', 'O velho que pensava que fugia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim vero ullam libero iste aperiam. Dolores, ipsum. Delectus, recusandae ab excepturi unde at natus dicta aperiam id ipsam. Vel ex esse doloribus nulla possimus est ipsum odio numquam, voluptatem soluta, deserunt eligendi voluptas.</p>', 'http://localhost/sebastiao_alves/livros/6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `data_ult_aces` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `login`, `senha`, `data_ult_aces`) VALUES
(1, 'Sebastião Alves', 'admin', 'teste', '20:09 - 12/10/2023'),
(2, 'Codemaster', 'codemaster', '123', '01:14 - 14/10/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `horario` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `email`, `horario`) VALUES
(1, '+351 999999993', 'Lorem ipsum dolor 123 <br> 4444-444 Lorem', 'Lorem_dolor@lorem.pt', 'Segunda a Sexta das 10h00 às 18h00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `imagem_autor` varchar(2000) NOT NULL,
  `texto_ult_livros` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem_autor`, `texto_ult_livros`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magnam veritatis molestiae quas reiciendis exercitationem dolorum excepturi nemo quis eligendi, enim expedita! Laudantium sed fugiat excepturi, magni dolorem quo architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magnam veritatis molestiae quas reiciendis exercitationem dolorum excepturi nemo quis eligendi, enim expedita! Laudantium sed fugiat excepturi, magni dolorem quo architecto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magnam veritatis molestiae quas reiciendis exercitationem dolorum excepturi nemo quis eligendi, enim expedita! Laudantium sed fugiat excepturi, magni dolorem quo architecto.Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magnam veritatis molestiae quas reiciendis exercitationem dolorum excepturi nemo quis eligendi, enim expedita! Laudantium sed fugiat excepturi, magni dolorem quo architecto.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(1000) NOT NULL,
  `data` varchar(100) NOT NULL,
  `imagem` varchar(2000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `data`, `imagem`, `texto`) VALUES
(1, 'LANÇAMENTO DO LIVRO \"O velho que pensava que fugia\"', 'PUBLICADO A 6 DEZEMBRO 2017', 'http://localhost/sebastiao_alves/uploads/conteudo-imprensa2.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit.</p>'),
(2, 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', 'PUBLICADO A 17 JUNHO 2020', 'http://localhost/sebastiao_alves/uploads/conteudo-imprensa1.jpg', ''),
(9, 'REVISTA PSICOLOGIA NA ACTUALIDADE', 'PUBLICADO A 01 JANEIRO 2021', 'http://localhost/sebastiao_alves/uploads/psicologia_imprensa.jpeg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `imagem`, `texto`) VALUES
(1, 'Senhora do amor e da Guerra', 'http://localhost/sebastiao_alves/uploads/livro-conteudo.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit.</p>'),
(2, 'O caracol estrábico', 'http://localhost/sebastiao_alves/uploads/livro-conteudo3.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit</p>'),
(3, 'o colecionador de amnésias', 'http://localhost/sebastiao_alves/uploads/livro-conteudo2.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit'),
(6, 'o velho que pensava que fugia', 'http://localhost/sebastiao_alves/uploads/livro-conteudo4.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit. Laboriosam praesentium impedit cum a suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quas asperiores, voluptas repudiandae, similique quis quasi dignissimos ea quisquam reprehenderit sed. Tempora exercitationem eos nulla commodi distinctio, ex consequuntur voluptates totam illo corrupti asperiores odio dolorem vel eum accusantium culpa quas ducimus accusamus deleniti. Laboriosam praesentium impedit cum a suscipit</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes`
--

CREATE TABLE `redes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `redes`
--

INSERT INTO `redes` (`id`, `nome`, `link`) VALUES
(1, 'Facebook', 'http://www.facebook.com'),
(2, 'Instagram', 'http://www.instagram.com'),
(3, 'Linkedin', 'http://www.linkedin.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cards_ultimos_livros`
--
ALTER TABLE `cards_ultimos_livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cards_ultimos_livros`
--
ALTER TABLE `cards_ultimos_livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
