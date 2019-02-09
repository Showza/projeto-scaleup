<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #9aff01; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<!-- Page Content -->
<div class="container-fluid" style="width: 50%; background-image: url('assets/frontend/img/texture.jgp');">
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
    if($destaque->imagem == 1){
        $fotopub= base_url("assets/frontend/img/publicacao/".md5($destaque->id).".jpg");
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
    <hr>
    </font>
    <?php
    }
    ?>
</div>
