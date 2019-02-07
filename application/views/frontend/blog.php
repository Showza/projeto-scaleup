<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #9aff01; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<!-- Page Content -->
<div class="container fluid" style="width: 100%">
    <!-- Blog Post -->
    <font face="monospace" style="text-align:center;">
    <?php
        foreach($postagem as $destaque){
    ?>
    <h2>
        <a href="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>" style="text-decoration:none; color: #9aff01;">
        <b><?php echo $destaque->titulo ?></b>
        </a>
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
    <img class="img-responsive" src="<?php echo $fotopub ?>" alt="" style="object-fit: cover;
    width: 70%;
    height: 20vw;
    display: block;
    margin-left: auto;
    margin-right: auto;">
    <br>
    <?php
    }
    ?>
    <font face="monospace" style="text-align:center;">
    <p><?php echo $destaque->subtitulo ?></p>
    <br>
    </font>
    <form method="post" action="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>"
    style="text-align:center; display: flex; align-items: center; justify-content: center;">
        <button  id="buttonEnviar" type="submit" class="btn btn-default"
        style="background-color:#9aff01; border-color:#9aff01; height:50px; width:150px">
            <b style="color: #2E2E2E;">
            <font face="monospace" style="text-align:center;">Leia mais</font>
            <span class="glyphicon glyphicon-chevron-right"></span>
            </b>
        </button>
    </form>
    <font face="monospace" style="text-align:center; display: block; margin-left: auto; margin-right: auto;">
    <hr>
    <?php
    }
    echo "<div class'paginacao'".$links_paginacao."</div>";
    ?>
    </font>
</div>
