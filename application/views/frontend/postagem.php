<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #9aff01; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<!-- Page Content -->
<div style="width:100%; margin-bottom: -1.5em; border: outset; background-color: #ffffff; background-image: url('https://www.transparenttextures.com/patterns/gplay.png');">
<div class="container-fluid" style="width: 50%;">
    <!-- Blog Post -->
    <font face="monospace" style="text-align:center;">
    <?php
        foreach($postagem as $destaque){
    ?>
    <h2>
        <b style="color: #9aff01;"><?php echo $destaque->titulo ?></b>
    </h2>
    <p class="lead">
        por <font style="color: #9aff01;"><?php echo $destaque->autor ?></font>
    </p>
    <p><span><i class="far fa-clock"></i></span> <?php echo postadoem($destaque->data) ?></p>
    <br>
    </font>
    <?php
    if($destaque->imagem != null){
        $fotopub= base_url("assets/frontend/img/publicacao/".$destaque->imagem);
    ?>
    <img class="img-responsive" src="<?php echo $fotopub ?>" alt="" style="object-fit: cover;">
    <br>
    <?php
    }
    ?>
    <font face="monospace" style="text-align:center;">
    <p><?php echo $destaque->subtitulo ?></p>
    <br>
    <p style="text-align: justify;"><?php echo $destaque->conteudo ?></p>
    <br>
    </font>
    <?php
    }
    ?>
</div>
</div>
