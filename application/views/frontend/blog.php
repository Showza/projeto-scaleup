<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #9aff01; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<!-- Page Content -->
<div style="width:100%; margin-bottom: -1.5em; border-top: outset; background-color: #ffffff; background-image: url('https://www.transparenttextures.com/patterns/gplay.png');">
    <!-- Blog Post -->
	<div class="txt" style="margin:3em">
	    <font face="monospace">
	        <h1 style="font-size:300%;"><b>Blog</b></h1> <!--Esta um pouco desalinhado -->
		</font>
	</div>
    <?php
        foreach($postagem as $destaque){
    ?>
	<div class="container-fluid" style="width: 100%; min-height: 100px; background-color:#2e2e2e; background-image: url('https://www.transparenttextures.com/patterns/dark-matter.png')">
		<p style="height: 15px">
		    <h2>
				<font face="monospace" style="color: #9aff01; float:left; margin-left: 1em;">
		        <a href="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>" style="text-decoration:none; color: #9aff01;">
		        <b><?php echo $destaque->titulo ?></b>
		        </a>
				</font>
				<h4>
				<font face="monospace" style="color: #9aff01; float: right; margin-top: 5px">
				<b><?php echo formatodata($destaque->data) ?></b>
				</font>
				</h4>
		    </h2>
		</p>
		<br><br><br>
		<font face="monospace" style="color:white; text-align:center; float: left; margin-left: 2em;">
		<p><?php echo $destaque->subtitulo ?></p>
		<br>
		</font>
		<?php
		if($destaque->imagem != null){
			$fotopub= base_url("assets/frontend/img/publicacao/".$destaque->imagem);
		?>
		<center>
		<a href="<?php echo base_url('postagem/'.$destaque->id.'/'.limpar($destaque->titulo)) ?>">
			<img class="img-responsive" src="<?php echo $fotopub ?>" alt="" style="object-fit: cover; width: 70%; height: 20vw;">
		</a>
		</center>
		<?php
		}
		?>
		<br><br>
	</div>
	<br>
    <?php
	}
	?>
	<font face="monospace" style="text-align:center; display: block; margin-left: auto; margin-right: auto;">
		<?php echo "<div class'paginacao'".$links_paginacao."</div>"; ?>
	</font>
</div>
