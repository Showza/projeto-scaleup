<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <img src="<?php echo base_url('assets/frontend/img/slider/slider1.jpg') ?>" style="width:100%">
    <font face="monospace"><div class="text">União, Sinergia e Paixão.</div></font>
    <font face="monospace"><div class="subtext">Conheça nossa equipe.</div></font>
  </div>

  <div class="mySlides">
    <img src="<?php echo base_url('assets/frontend/img/slider/slider2.jpg') ?>" style="width:100%">
    <font face="monospace"><div class="text">Digite algo aqui!</div></font>
    <font face="monospace"><div class="subtext">Mais um texto!</div></font>
  </div>

  <div class="mySlides">
    <img src="<?php echo base_url('assets/frontend/img/slider/slider3.jpg') ?>" style="width:100%">
    <font face="monospace"><div class="text">Escreva algo!</div></font>
    <font face="monospace"><div class="subtext">Esvreva mais alguma coisa.</div></font>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)" style="font-size:300%;">&#10094;</a>
  <a class="next" onclick="plusSlides(1)" style="font-size:300%;">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> -->

<!-- Coluna Quem Somos -->
<div class="container-fluid" style="background-color:#2E2E2E; height:250px;">
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
<div class="container">
    <font face="monospace">
        <h1 style="font-size:300%;"><b>Nossos Serviços</b></h1> <!--Esta um pouco desalinhado -->
    </font>
</div>
<br>
<div class="container-fluid">
    <div class="row">
    <!-- Coluna da Esquerda -->
        <div class="col-sm-4">
            <img style="opacity:0.5; filter:alpha(opacity=50);" src="<?php echo base_url('assets/frontend/img/servico/servico1.jpg') ?>" alt="servico1" width="490px" height="380px">
            <div class="text" style="height: 50%">
                <p style="height: 30%">
                    <h1><i class="fas fa-flask fa-2x" style="color:#f2f2f2"></i></h1>
                    <font face="monospace" color="#f2f2f2">
                        <h1 style="font-size:100%"><b>Serviço 1</b></h1>
                    </font>
                    <p>
                        <font face="monospace" color="#f2f2f2">
                            <h4>Nesta sessão será descrito o serviço realizado</h4>
                        </font>
                    </p>
                </p>
            </div>
        </div>
    <!-- Coluna do Meio -->
        <div class="col-sm-4">
            <img style="opacity:0.5; filter:alpha(opacity=50);" src="<?php echo base_url('assets/frontend/img/servico/servico2.jpg') ?>" alt="servico2" width="490px" height="380px">
            <div class="text" style="height: 50%">
                <p style="height: 30%">
                    <h1><i class="fas fa-flask fa-2x" style="color:#f2f2f2"></i></h1>
                    <font face="monospace" color="#f2f2f2">
                        <h1 style="font-size:100%"><b>Serviço 2</b></h1>
                    </font>
                </p>
                <p>
                    <font face="monospace" color="#f2f2f2">
                        <h4>Nesta sessão será descrito o serviço realizado</h4>
                    </font>
                </p>
            </div>
        </div>
    <!-- Coluna da Direita -->
        <div class="col-sm-4">
            <img style="opacity:0.5; filter:alpha(opacity=50);" src="<?php echo base_url('assets/frontend/img/servico/servico3.jpg') ?>" alt="servico3" width="490px" height="380px">
            <div class="text" style="height: 50%">
                <p style="height: 30%">
                    <h1><i class="fas fa-flask fa-2x" style="color:#f2f2f2"></i></h1>
                    <font face="monospace" color="#f2f2f2">
                        <h1 style="font-size:100%"><b>Serviço 3</b></h1>
                    </font>
                </p>
                <p>
                    <font face="monospace" color="#f2f2f2">
                        <h4>Nesta sessão será descrito o serviço realizado</h4>
                    </font>
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Botão de Orçamento -->
<form method="get" action="#" style="text-align:center; font-size:200%;">
    <!-- Falta estilizar o botão -->
    <button type="submit">
        <font face="monospace">Solicite um Orçamento</font>
    </button>
</form>
<br>
<!-- Equipe -->
<div class="container">
    <font face="monospace">
        <h1 style="font-size:300%;"><b>Equipe</b></h1> <!--Esta um pouco desalinhado -->
    </font>
</div>
<br><br><br><br><br>
<!-- As fotos estão desalinhadas com o texto e estão sem a borda -->
<div class="container">
    <div class="row">
    <!-- Coluna da Esquerda -->
    <div class="col-sm-4" style="text-align:center;">
        <div class="hex" style="background-image: url(assets/frontend/img/pessoal/pessoal1.jpg);">
        	<a href="#"></a>
        	<div class="corner-1"></div>
        	<div class="corner-2"></div>
        </div>
        <p style="height: 300px">
            <font face="monospace">
                <h1 style="font-size:250%">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
<!-- Coluna do Meio -->
    <div class="col-sm-4" style="text-align:center;">
        <div class="hex" style="background-image: url(assets/frontend/img/pessoal/pessoal2.jpg);">
        	<a href="#"></a>
        	<div class="corner-1"></div>
        	<div class="corner-2"></div>
        </div>
        <p style="height: 300px">
            <font face="monospace">
                <h1 style="font-size:250%">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
<!-- Coluna da Direita -->
    <div class="col-sm-4" style="text-align:center;">
        <div class="hex" style="background-image: url(assets/frontend/img/pessoal/pessoal3.jpg);">
        	<a href="#"></a>
        	<div class="corner-1"></div>
        	<div class="corner-2"></div>
        </div>
        <p style="height: 300px">
            <font face="monospace">
                <h1 style="font-size:250%">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
</div>
<br><br><br><br><br>
<div class="container">
    <div class="row">
    <!-- Coluna da Esquerda -->
    <div class="col-sm-4" style="text-align:center;">
        <div class="hex" style="background-image: url(assets/frontend/img/pessoal/pessoal4.jpg);">
        	<a href="#"></a>
        	<div class="corner-1"></div>
        	<div class="corner-2"></div>
        </div>
        <p style="height: 300px">
            <font face="monospace">
                <h1 style="font-size:250%">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
<!-- Coluna do Meio -->
    <div class="col-sm-4" style="text-align:center;">
        <div class="hex" style="background-image: url(assets/frontend/img/pessoal/pessoal5.jpg);">
        	<a href="#"></a>
        	<div class="corner-1"></div>
        	<div class="corner-2"></div>
        </div>
        <p style="height: 300px">
            <font face="monospace">
                <h1 style="font-size:250%">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
<!-- Coluna da Direita -->
    <div class="col-sm-4" style="text-align:center;">
        <div class="hex" style="background-image: url(assets/frontend/img/pessoal/pessoal6.jpg);">
        	<a href="#"></a>
        	<div class="corner-1"></div>
        	<div class="corner-2"></div>
        </div>
        <p style="height: 300px">
            <font face="monospace">
                <h1 style="font-size:250%">Nome e sobrenome</h1>
            </font>
        </p>
        <p>
            <font face="monospace" color="#9aff01">
                <h4 style="font-size:150%"><b>Cargo ou função</b></h4>
            </font>
        </p>
    </div>
</div>
<br><br><br><br><br>
