-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Fev-2019 às 15:28
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd-scaleup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(150) NOT NULL,
  `senha` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `user`, `senha`) VALUES
(1, 'up_admin', '3cbca52e84fa32658ccefc0f5cf1aef2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoal`
--

CREATE TABLE `pessoal` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cargo` varchar(150) NOT NULL,
  `imagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoal`
--

INSERT INTO `pessoal` (`id`, `nome`, `cargo`, `imagem`) VALUES
(1, 'gabriel', 'testador de bugs', 1),
(2, 'bacon', 'mascote', 1),
(3, 'alguem', 'teste', NULL),
(4, 'fulano', 'testando', NULL),
(5, 'pessoa', 'cargo', 1),
(6, 'membro', 'função', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `conteudo` longtext NOT NULL,
  `data` datetime NOT NULL,
  `imagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `imagem`) VALUES
(1, 'teste', 'testando os serviços', 1),
(2, 'bacon teste', 'Bacon ipsum dolor amet tongue hamburger shank jowl tenderloin, ham short loin swine pork belly. Kielbasa turducken short ribs, landjaeger pancetta venison corned beef tail. Chuck corned beef prosciutto pork loin jowl, frankfurter tongue shank bresaola. Beef ribs corned beef ground round ball tip. \r\n\r\nGround round porchetta strip steak chicken bresaola. Flank pork loin boudin fatback rump ham hock. Hamburger ham pig pork chop sausage short ribs rump spare ribs ground round picanha pancetta prosciutto tail shoulder frankfurter. Ribeye bacon sausage, alcatra pastrami pancetta boudin cupim. Turducken biltong short ribs leberkas meatball, chicken brisket landjaeger pork loin jowl. Brisket filet mignon ham hock andouille, rump tail ham bacon sirloin ribeye jerky swine beef ribs t-bone flank. Shankle ham leberkas, shoulder tail hamburger doner pancetta. \r\n\r\nMeatball pork belly corned beef, cow biltong porchetta filet mignon. Shoulder turkey swine, sausage venison pork cupim landjaeger short ribs kielbasa. Beef ribs sirloin cupim, filet mignon bresaola tri-tip cow pork short loin ham turducken turkey shoulder. Pig prosciutto boudin, strip steak corned beef sausage ham meatloaf tail kevin pork loin alcatra kielbasa porchetta leberkas. Hamburger chuck spare ribs ball tip turducken turkey bresaola sausage pastrami frankfurter fatback rump corned beef. Alcatra pork pork chop short loin shankle.', 1),
(3, 'serv 3', 'Bacon ipsum', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `imagem` int(11) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `subtitulo` varchar(150) DEFAULT NULL,
  `link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `slider`
--

INSERT INTO `slider` (`id`, `imagem`, `titulo`, `subtitulo`, `link`) VALUES
(1, 1, 'União, Sinergia e Paixão.', 'Conheça nossa equipe.', '#equipe'),
(2, 1, 'teste crud', 'clique aq e veja ', 'algum link qlqr'),
(3, 1, 'titulo', 'subtitulo', '#home'),
(4, 1, 'teste de erro', 'possivel erro', '#home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pessoal`
--
ALTER TABLE `pessoal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pessoal`
--
ALTER TABLE `pessoal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
