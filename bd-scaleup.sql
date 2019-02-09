-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Fev-2019 às 18:57
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
(5, 'testando', 'alo', 1),
(6, 'membro', 'função', 1),
(7, 'teste crud', 'alo', NULL),
(8, 'alguem', 'teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `subtitulo` varchar(150) NOT NULL,
  `conteudo` longtext NOT NULL,
  `autor` varchar(200) NOT NULL,
  `data` datetime NOT NULL,
  `imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id`, `titulo`, `subtitulo`, `conteudo`, `autor`, `data`, `imagem`) VALUES
(1, 'Nunc magna mauris, aliquam id dapibus et, egestas finibus lorem', 'Duis finibus, felis semper suscipit convallis, orci ante eleifend lectus, ac pharetra ipsum risus in elit. Vestibulum enim turpis, suscipit eget lacus', 'Sed velit ex, sodales nec aliquet sed, imperdiet ac justo. Vestibulum gravida lacus eu turpis interdum cursus. Morbi ultricies libero sed nibh pulvinar elementum. Fusce vestibulum, orci quis laoreet lobortis, enim lorem sollicitudin augue, eu imperdiet eros neque id leo. In id enim ornare, bibendum tortor vitae, pellentesque nibh. Donec odio neque, sodales eu nibh eget, posuere pharetra erat. Sed luctus felis ac risus gravida, ac condimentum diam commodo. Maecenas sit amet lectus vitae magna gravida dictum. Cras iaculis in augue eget sagittis. Maecenas gravida felis sed est bibendum, nec ultricies nunc porttitor.\r\nCurabitur pretium justo dui, non porta ante ultrices at. Duis finibus, felis semper suscipit convallis, orci ante eleifend lectus, ac pharetra ipsum risus in elit. Vestibulum enim turpis, suscipit eget lacus vitae, posuere posuere ante. Nunc nec ligula facilisis, eleifend ipsum non, pulvinar nulla. Pellentesque pharetra at nulla eget elementum. Pellentesque vel tristique diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'bacon', '2019-02-06 00:00:00', 1),
(2, 'Ut consectetur lacus augue, tincidunt finibus nulla convallis eget', 'Your not gonna be picking a fight, Dad, dad dad daddy-o. You\'re coming to a rescue, right? Okay, let\'s go', 'That\'s right, he\'s gonna be mayor. Whoa, they really cleaned this place up, looks brand new. My insurance, it\'s your car, your insurance should pay for it. Hey, I wanna know who\'s gonna pay for this? I spilled beer all over it when that car smashed into me. Who\'s gonna pay my cleaning bill? Yes, yes, I\'m George, George McFly, and I\'m your density. I mean, I\'m your destiny. It\'s uh, the other end of town, a block past Maple.', 'gabriel', '2017-03-11 16:14:36', 0),
(3, 'Curabitur eu mauris id neque ultricies feugiat a ut mi', 'Duis finibus, felis semper suscipit convallis, orci ante eleifend lectus, ac pharetra ipsum risus in elit. Vestibulum enim turpis, suscipit eget lacus', 'Nunc magna mauris, aliquam id dapibus et, egestas finibus lorem. Mauris at condimentum dolor. Curabitur eu mauris id neque ultricies feugiat a ut mi. Ut posuere faucibus nisl, sed sagittis tellus laoreet quis. Pellentesque molestie euismod tempus. Aliquam mattis, velit eget consequat maximus, mauris lectus scelerisque diam, eget volutpat ligula est fermentum odio. Vestibulum nisi libero, malesuada ut congue vel, efficitur sit amet mi. Cras pellentesque egestas volutpat. Aliquam venenatis ullamcorper felis nec cursus. Praesent lacinia laoreet ante, et hendrerit nisi. In hac habitasse platea dictumst.\r\n\r\nUt consectetur lacus augue, tincidunt finibus nulla convallis eget. Donec rutrum aliquam quam at ultricies. Maecenas at dignissim ex, nec semper urna. Nunc id lacus vel nisl mollis auctor. Etiam vulputate gravida porttitor. Quisque at lobortis quam, id pulvinar nunc. Cras finibus, nisl eget pulvinar egestas, neque nibh sollicitudin velit, eget efficitur neque urna non justo. Sed vehicula non velit sed viverra. Vestibulum lacinia neque et mattis dictum. Sed rhoncus dapibus nisl id fringilla. Duis quis sagittis augue. Morbi accumsan tellus ipsum, et vulputate lectus sagittis quis. Mauris eu sem justo.\r\n\r\nPhasellus quis vehicula tortor. Vestibulum sed purus et mauris tempor posuere. Vivamus vel commodo ipsum. Donec a tristique tellus. In lobortis, tortor et rhoncus rhoncus, metus libero mollis sem, id tincidunt ipsum tortor ut eros. Nullam faucibus, turpis ut egestas interdum, mi risus eleifend dui, a mollis magna enim vel odio. In lobortis, erat et luctus lobortis, nulla neque imperdiet tellus, nec varius nisi lacus id dolor. Suspendisse tempus dictum dolor ac vestibulum. Fusce tincidunt eu ipsum varius ultricies. Donec commodo bibendum consequat. Suspendisse potenti. Nam in ultricies risus.', 'alguem', '2019-02-03 00:00:00', 1),
(4, 'Vestibulum sed purus et mauris tempor posuere', 'Donec odio neque, sodales eu nibh eget, posuere pharetra erat. Sed luctus felis ac risus gravida, ac condimentum diam commodo.', 'That\'s right, he\'s gonna be mayor. Whoa, they really cleaned this place up, looks brand new. My insurance, it\'s your car, your insurance should pay for it. Hey, I wanna know who\'s gonna pay for this? I spilled beer all over it when that car smashed into me. Who\'s gonna pay my cleaning bill? Yes, yes, I\'m George, George McFly, and I\'m your density. I mean, I\'m your destiny. It\'s uh, the other end of town, a block past Maple.', 'teste', '2019-02-21 00:00:00', 1),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Your not gonna be picking a fight, Dad, dad dad daddy-o. You\'re coming to a rescue, right? Okay, let\'s go', 'Nunc magna mauris, aliquam id dapibus et, egestas finibus lorem. Mauris at condimentum dolor. Curabitur eu mauris id neque ultricies feugiat a ut mi. Ut posuere faucibus nisl, sed sagittis tellus laoreet quis. Pellentesque molestie euismod tempus. Aliquam mattis, velit eget consequat maximus, mauris lectus scelerisque diam, eget volutpat ligula est fermentum odio. Vestibulum nisi libero, malesuada ut congue vel, efficitur sit amet mi. Cras pellentesque egestas volutpat. Aliquam venenatis ullamcorper felis nec cursus. Praesent lacinia laoreet ante, et hendrerit nisi. In hac habitasse platea dictumst.</p>\r\n\r\nUt consectetur lacus augue, tincidunt finibus nulla convallis eget. Donec rutrum aliquam quam at ultricies. Maecenas at dignissim ex, nec semper urna. Nunc id lacus vel nisl mollis auctor. Etiam vulputate gravida porttitor. Quisque at lobortis quam, id pulvinar nunc. Cras finibus, nisl eget pulvinar egestas, neque nibh sollicitudin velit, eget efficitur neque urna non justo. Sed vehicula non velit sed viverra. Vestibulum lacinia neque et mattis dictum. Sed rhoncus dapibus nisl id fringilla. Duis quis sagittis augue. Morbi accumsan tellus ipsum, et vulputate lectus sagittis quis. Mauris eu sem justo.\r\n\r\nPhasellus quis vehicula tortor. Vestibulum sed purus et mauris tempor posuere. Vivamus vel commodo ipsum. Donec a tristique tellus. In lobortis, tortor et rhoncus rhoncus, metus libero mollis sem, id tincidunt ipsum tortor ut eros. Nullam faucibus, turpis ut egestas interdum, mi risus eleifend dui, a mollis magna enim vel odio. In lobortis, erat et luctus lobortis, nulla neque imperdiet tellus, nec varius nisi lacus id dolor. Suspendisse tempus dictum dolor ac vestibulum. Fusce tincidunt eu ipsum varius ultricies. Donec commodo bibendum consequat. Suspendisse potenti. Nam in ultricies risus.', 'testando', '2017-03-08 16:14:36', 0);

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
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
