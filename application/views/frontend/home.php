<!-- Slideshow container -->
<div class="slideshow-container" id="home">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <img src="<?php echo base_url('assets/frontend/img/slider/slider1.jpg') ?>" style="width:100%">
    <font face="monospace"><div class="text">União, Sinergia e Paixão.</div></font>
    <font face="monospace"><div class="subtext"><a href="#" style="text-decoration:none; color: inherit;">Conheça nossa equipe.</a></div></font>
  </div>

  <div class="mySlides">
    <img src="<?php echo base_url('assets/frontend/img/slider/slider2.jpg') ?>" style="width:100%">
    <font face="monospace"><div class="text">Digite algo aqui!</div></font>
    <font face="monospace"><div class="subtext"><a href="#" style="text-decoration:none; color: inherit;">Mais um texto!</a></div></font>
  </div>

  <div class="mySlides">
    <img src="<?php echo base_url('assets/frontend/img/slider/slider3.jpg') ?>" style="width:100%">
    <font face="monospace"><div class="text">Escreva algo!</div></font>
    <font face="monospace"><div class="subtext"><a href="#" style="text-decoration:none; color: inherit;">Esvreva mais alguma coisa.</a></div></font>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)" style="font-size:300%; text-decoration:none; color: white;">&#10094;</a>
  <a class="next" onclick="plusSlides(1)" style="font-size:300%; text-decoration:none; color: white;">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->

<!-- Coluna Quem Somos -->
<div class="container-fluid" style="background-color:#2E2E2E; height:250px;" id="sobrenos">
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
                    <h3>A ScaleUp Jr é uma empresa composta por estudantes do curso de Química Industrial e Química Licenciatura da UFOP.</h3>
                </font>
            </p>
        </div>
    </div>
</div>
<br>

<!-- Coluna de Missão, Visão e Valores -->
<div class="container-fluid" style="background-color:#2E2E2E; height:350px;">
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
    <div class="row">
    <!-- Coluna da Esquerda -->
        <div class="col-sm-4 container" style="opacity: 0.5; filter: alpha(opacity=50);
        margin: auto 0.4%; width: 32.5%; height: 380px;
        background-image: url('assets/frontend/img/servico/servico1.jpg'); background-size: 100% 100%;">
            <div class="text" style="height: 50%; margin: auto -3%">
                <h1 style="color:#f2f2f2; font-size:200%;">&#x2B21;</h1>
                <font face="monospace" color="#f2f2f2">
                    <h1 style="font-size:100%"><b>Serviço 1</b></h1>
                </font>
                <font face="monospace" color="#f2f2f2">
                    <h4>Nesta sessão será descrito o serviço realizado</h4>
                </font>
            </div>
        </div>
    <!-- Coluna do Meio -->
        <div class="col-sm-4 container" style="opacity: 0.5; filter: alpha(opacity=50);
        margin: auto 0.4%; width: 32.5%; height: 380px;
        background-image: url('assets/frontend/img/servico/servico2.jpg'); background-size: 100% 100%;">
            <div class="text" style="height: 50%; margin: auto -3%">
                <h1 style="color:#f2f2f2; font-size:200%;">&#x2B21;</h1>
                <font face="monospace" color="#f2f2f2">
                    <h1 style="font-size:100%"><b>Serviço 2</b></h1>
                </font>
                <font face="monospace" color="#f2f2f2">
                    <h4>Nesta sessão será descrito o serviço realizado</h4>
                </font>
            </div>
        </div>
    <!-- Coluna da Direita -->
        <div class="col-sm-4 container" style="opacity: 0.5; filter: alpha(opacity=50);
        margin: auto 0.4%; width: 32.5%; height: 380px;
        background-image: url('assets/frontend/img/servico/servico3.jpg'); background-size: 100% 100%;">
            <div class="text" style="height: 50%; margin: auto -3%">
                <h1 style="color:#f2f2f2; font-size:200%;">&#x2B21;</h1>
                <font face="monospace" color="#f2f2f2">
                    <h1 style="font-size:100%"><b>Serviço 3</b></h1>
                </font>
                <font face="monospace" color="#f2f2f2">
                    <h4>Nesta sessão será descrito o serviço realizado</h4>
                </font>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Botão de Orçamento -->
<form method="get" action="#contato" style="text-align:center; font-size:200%;">
    <button type="submit" style="background-color:#d7ff9b; border-color:black; height:80px; width:450px">
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
<br><br><br><br><br>
<!-- As fotos estão desalinhadas com o texto e estão sem a borda -->
<div class="container-fluid">
    <div class="row">
    <!-- Coluna da Esquerda -->
    <div class="col-sm-4">
        <div class="hexagon" style="background-image: url(assets/frontend/img/pessoal/pessoal1.jpg);">
          <div class="hexTop"></div>
          <div class="hexBottom"></div>
        </div>
        <p>
            <font face="monospace">
                <h1 style="font-size:250%; text-align:center;">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%; text-align:center;"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
<!-- Coluna do Meio -->
    <div class="col-sm-4">
        <div class="hexagon" style="background-image: url(assets/frontend/img/pessoal/pessoal2.jpg);">
          <div class="hexTop"></div>
          <div class="hexBottom"></div>
        </div>
        <p>
            <font face="monospace">
                <h1 style="font-size:250%; text-align:center;">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%; text-align:center;"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
<!-- Coluna da Direita -->
    <div class="col-sm-4">
        <div class="hexagon" style="background-image: url(assets/frontend/img/pessoal/pessoal3.jpg);">
          <div class="hexTop"></div>
          <div class="hexBottom"></div>
        </div>
        <p>
            <font face="monospace">
                <h1 style="font-size:250%; text-align:center;">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%; text-align:center;"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
</div>
<br><br><br><br><br>
<div class="container-fluid">
    <div class="row">
        <!-- Coluna da Esquerda -->
        <div class="col-sm-4">
            <div class="hexagon" style="background-image: url(assets/frontend/img/pessoal/pessoal4.jpg);">
              <div class="hexTop"></div>
              <div class="hexBottom"></div>
            </div>
            <p>
                <font face="monospace">
                    <h1 style="font-size:250%; text-align:center;">Nome e sobrenome</h1>
                </font>
            </p>
            <p>
                <font face="monospace" color="#9aff01">
                    <h4 style="font-size:150%; text-align:center;"><b>Cargo ou função</b></h4>
                </font>
            </p>
        </div>
    <!-- Coluna do Meio -->
        <div class="col-sm-4">
            <div class="hexagon" style="background-image: url(assets/frontend/img/pessoal/pessoal5.jpg);">
              <div class="hexTop"></div>
              <div class="hexBottom"></div>
            </div>
            <p>
                <font face="monospace">
                    <h1 style="font-size:250%; text-align:center;">Nome e sobrenome</h1>
                </font>
            </p>
            <p>
                <font face="monospace" color="#9aff01">
                    <h4 style="font-size:150%; text-align:center;"><b>Cargo ou função</b></h4>
                </font>
            </p>
        </div>
    <!-- Coluna da Direita -->
        <div class="col-sm-4">
            <div class="hexagon" style="background-image: url(assets/frontend/img/pessoal/pessoal6.jpg);">
              <div class="hexTop"></div>
              <div class="hexBottom"></div>
            </div>
            <p>
                <font face="monospace">
                    <h1 style="font-size:250%; text-align:center;">Nome e sobrenome</h1>
                </font>
            </p>
            <p>
                <font face="monospace" color="#9aff01">
                    <h4 style="font-size:150%; text-align:center;"><b>Cargo ou função</b></h4>
                </font>
            </p>
        </div>
    </div>
</div>
<br><br><br>
<!-- MEJ -->
<div class="txt" style="margin-left:3em" id="mej">
        <font face="monospace">
            <h1 style="font-size:300%;"><b>Movimento Empresa Júnior - MEJ</b></h1> <!--Esta um pouco desalinhado -->
        </font>
</div>
<br>
<div class="container-fluid" style="opacity: 0.5; filter: alpha(opacity=50);
-webkit-filter: grayscale(100%); filter: grayscale(100%); width: 100%; height: 900px;
background-image: url('assets/frontend/img/mej.jpg'); background-size: 100% 100%;">
    <div class="container-fluid" style="text-align:center;  text-shadow: 3px 3px 8px #000000;">
        <br><br><br><br><br>
        <i class="fas fa-hands-helping fa-9x" style="color:#f2f2f2;"></i>
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
    </div>
</div>
