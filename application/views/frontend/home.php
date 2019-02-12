<!-- Slideshow container -->
<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #9aff01; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<div class="slideshow-container" id="home">

    <style>
        .fadeslide {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3s;
            animation-name: fade;
            animation-duration: 3s;
        }
		@media (max-width: 768px) {
			.slideimg {
				width:100% !important;
				height:250px !important;
			}
		}
    </style>

  <!-- Full-width images with number and caption text -->
	<?php
	  foreach($slider as $slides){
	?>
	<div class="mySlides fadeslide">
		<img class="slideimg" src="<?php echo base_url('assets/frontend/img/slider/'.md5($slides->id).'.jpg') ?>" style="width:100%; height:850px;">
		<font face="monospace"><div class="text"><b><?php echo $slides->titulo ?></b></div></font>
		<font face="monospace"><div class="subtext">
			<a href="<?php echo limpar($slides->link) ?>" style="text-decoration:none; color: inherit;">
				<?php echo $slides->subtitulo ?>
			</a></div>
		</font>
	</div>
	<?php
	}
	?>

	<!-- The dots/circles -->
	<div class="dotposition">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>

	<!-- Next and previous buttons -->
	<a class="prev" onclick="plusSlides(-1)" style="font-size:3vw; text-decoration:none; color: white;">&#10094;</a>
	<a class="next" onclick="plusSlides(1)" style="font-size:3vw; text-decoration:none; color: white;">&#10095;</a>

</div>
<br>

<!-- Coluna Quem Somos -->
<div class="container-fluid" style="background-color:#2E2E2E; height:250px; overflow: auto;" id="sobrenos">
    <div class="row">
        <div class="col-sm-6" style="text-align:center;">
            <p style="height: 70px">
                <font face="monospace" color="#9aff01">
                    <h1 style="font-size:400%;"><b>Quem somos nós</b></h1>
                </font>
            </p>
        </div>
        <div class="col-sm-6" style="text-align:left;">
            <p style="height: 70px">
                <font face="monospace" color="#f2f2f2">
                    <h3>A ScaleUp Jr é uma empresa composta por estudantes do curso
						 de Química Industrial e Química Licenciatura da UFOP.</h3>
                </font>
            </p>
        </div>
    </div>
</div>
<br>

<!-- Coluna de Missão, Visão e Valores -->
<div class="container-fluid" style="background-color:#2E2E2E; height:350px; overflow: auto;">
    <div class="row">
        <!-- Coluna da Esquerda -->
        <div class="col-sm-4" style="text-align:center;">
            <p style="height: 50px">
                <h1><i class="fas fa-users fa-2x" style="color:#f2f2f2"></i></h1>
                <font face="monospace" color="#9aff01">
                    <h1><b>Nossa missão</b></h1>
                </font>
                <p>
                    <font face="monospace" color="#f2f2f2">
                        <h4>Transformar pessoas, provendo soluções que valorizem nossos clientes.</h4>
                    </font>
                </p>
            </p>
        </div>
        <!-- Coluna do Meio -->
        <div class="col-sm-4" style="text-align:center;">
            <p style="height: 50px">
                <h1><i class="fas fa-chart-line fa-2x" style="color:#f2f2f2"></i></h1>
                <font face="monospace" color="#9aff01">
                    <h1><b>Nossa visão</b></h1>
                </font>
            </p>
            <p>
                <font face="monospace" color="#f2f2f2">
                    <h4>Ser a empresa referência em soluções tecnológicas, na região de João Molevarde e no MEJ mineiro, com um time forte e determinado.</h4>
                </font>
            </p>
        </div>
        <!-- Coluna da Direita -->
        <div class="col-sm-4" style="text-align:center;">
            <p style="height: 50px">
                <h1><i class="far fa-gem fa-2x" style="color:#f2f2f2"></i></h1>
                <font face="monospace" color="#9aff01">
                    <h1><b>Nossos valores</b></h1>
                </font>
            </p>
            <p>
                <font face="monospace" color="#f2f2f2">
                    <h4>Transparência, sinergia, empatia, responsabilidade social, impacto e orgulo de ser visionário.</h4>
                </font>
            </p>
        </div>
      </div>
</div> <!-- Fim da Coluna de Missão, Visão e Valores -->
<br>

<!-- Coluna de Serviços -->
<div class="txt" style="margin-left:3em" id="servicos">
    <font face="monospace">
        <h1 style="font-size:300%;"><b>Nossos Serviços</b></h1> <!--Esta um pouco desalinhado -->
    </font>
</div>
<br>
<div class="container-fluid">
	<style>
		.servico-txt {
			color: #f2f2f2;
		    font-size: 50px;
		    text-shadow: 2px 2px 8px #000000;
		    padding: 8px 12px;
		    position: absolute;
		    width: 100%;
		    text-align: center;
			margin-left: -0.3em;
		}
	</style>
	<div class="row">
	<?php
	foreach($servicos as $servico){
		if($servico->imagem != null){ //se tiver imagem aplica filtro escuro
		  $exibeImg= "assets/frontend/img/servico/".$servico->imagem;
	?>
		  <div class="col-sm-3 container" style="overflow-y: auto;
          margin: auto 0.4%; min-width: 32.5%; height: 380px;
          background-image: url(<?php echo $exibeImg ?>); background-size: 100% 100%;">
              <div class="servico-txt" style=" background-color: rgba(128,128,128, 0.5); background-size: cover;
  			min-width: 32.5%; min-height: 380px;">
                  <h1 style="color:#f2f2f2; font-size:200%;">&#x2B21;</h1>
                  <font face="monospace" color="#f2f2f2">
                      <h1 style="font-size:100%"><b><?php echo $servico->nome?></b></h1>
                  </font>
                  <font face="monospace" color="#f2f2f2">
                      <h4><?php echo $servico->descricao?></h4>
                  </font>
              </div>
          </div>
		<?php
		}
		else { //filtro claro caso nao tenha imagem
		  $exibeImg= "assets/frontend/img/semImagem.png";
		?>
		  <div class="col-sm-3 container" style="overflow-y: auto;
          margin: auto 0.4%; min-width: 32.5%; height: 380px;
          background-image: url(<?php echo $exibeImg ?>); background-size: 100% 100%;">
              <div class="servico-txt" style=" background-color: rgba(255,255,255,0.3); background-size: cover;
  			min-width: 32.5%; min-height: 380px;">
                  <h1 style="color:#f2f2f2; font-size:200%;">&#x2B21;</h1>
                  <font face="monospace" color="#f2f2f2">
                      <h1 style="font-size:100%"><b><?php echo $servico->nome?></b></h1>
                  </font>
                  <font face="monospace" color="#f2f2f2">
                      <h4><?php echo $servico->descricao?></h4>
                  </font>
              </div>
          </div>
		<?php
		}
	}
	?>
    </div>
</div>
<br>
<!-- Botão de Orçamento -->
<form method="get" action="#contato" style="text-align:center; font-size:200%;">
    <button type="submit" style="background-color:#d7ff9b; border-color:black; height:80px; min-width:30%">
        <font face="monospace"><b>Solicite um Orçamento</b></font>
    </button>
</form>
<br>
<!-- Equipe -->
<div class="txt" style="margin-left:3em" id="equipe">
        <font face="monospace">
            <h1 style="font-size:300%;"><b>Equipe</b></h1> <!--Esta um pouco desalinhado -->
        </font>
</div>
<br><br><br><br><br><br><br>
<!-- As fotos estão desalinhadas com o texto e estão sem a borda -->
<div class="container-fluid">
    <div class="row">
    <!-- Coluna da Esquerda -->
		<?php
			foreach($pessoal as $equipe){
		?>
	    <div class="col-sm-4">
			<?php
				if($equipe->imagem != null){
					$mostraImg= "assets/frontend/img/pessoal/".$equipe->imagem;
				}
				else {
					$mostraImg= "assets/frontend/img/semAvatar.png";
				}
			?>
	        <div class="hexagon" style="background-image: url(<?php echo $mostraImg ?>);">
	          <div class="hexTop"></div>
	          <div class="hexBottom"></div>
	        </div>
	        <p>
	            <font face="monospace">
	                <h1 style="font-size:250%; text-align:center;"><?php echo $equipe->nome ?></h1>
	            </font>
	        </p>
	        <p>
	            <font face="monospace" color="#9aff01">
	                <h4 style="font-size:150%; text-align:center;"><b><?php echo $equipe->cargo ?></b></h4>
	            </font>
	        </p>
			<br><br><br><br><br><br>
	    </div>
		<?php
			}
		?>
    </div>
</div>
<!-- MEJ -->
<div class="container" style="margin-left: 2em;" id="mej">
        <font face="monospace">
            <h1 style="font-size:300%;"><b>Movimento Empresa Júnior - MEJ</b></h1>
        </font>
</div>
<br>
<style>
@media (max-width: 768px) {
		.mej {
			width:100% !important;
			height:450px !important;
		}
	}
</style>
<div class="container-fluid mej" style="overflow: auto; opacity: 0.5; filter: alpha(opacity=50);
-webkit-filter: grayscale(100%); filter: grayscale(100%); width: 100%;
background-image: url('assets/frontend/img/mej.jpg'); background-size: 100% 100%;">
    <div class="container-fluid" style="text-align:center;  text-shadow: 3px 3px 8px #000000;">
        <i class="fas fa-hands-helping fa-9x" style="color:#f2f2f2; margin-top: 0.5em"></i>
        <font face="monospace" color="#f2f2f2">
        <br><br>
        <h3>O MEJ tem como propósito a busca por um Brasil Empreendedor.
        Trabalhamos todos os dias para formar pessoas comprometidas e capazes de
        transformar o Brasil por meio da realização de mais e melhores projetos.
        O movimento surgiu em 1967 na França e veio para o Brasil em 1988.</h3>
        <br><br>
        <span style="font-size:350%;"><b>Um pouco sobre o MEJ</b></span>
        <span style="font-size:150%;"><b>(2016)</b></span>
        <br><br>
        <ul style="font-size:120%; text-align:left;">
            <li style="font-size:150%; margin: 30px 5%">Cerca de 15.777 universitários passaram pelo MEJ! #SomosMuitos</li>
            <li style="font-size:150%; margin: 30px 5%">65,7% das EJs eram de cluster 1 e realizaram cerca de 40% dos projetos da rede.</li>
            <li style="font-size:150%; margin: 30px 5%">As Ejs de Alto Crescimento representam 75% de todos os projetos realizados, foram 3.662 projetos!</li>
            <li style="font-size:150%; margin: 30px 5%">41,6% dos nossos projetos foram destinados para Micro e Pequenas Empresas!</li>
        </ul>
        </font>
		<br>
    </div>
</div>
