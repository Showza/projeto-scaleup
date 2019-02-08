<div id="voltarTopo">
	<a href="#" id="subir" style="text-decoration:none; color: #9aff01; z-index: 9999;"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>
<!-- Page Content -->
<div class="container-fluid">
    <!-- Blog Post -->
	<div class="txt" style="margin:3em; margin-top: 0">
	    <font face="monospace">
	        <h1 style="font-size:300%;"><b>Blog</b></h1> <!--Esta um pouco desalinhado -->
	    </font>
	</div>
    <?php
        foreach($postagem as $destaque){
    ?>
	<div class="container-fluid" style="width: 100%; min-height: 100px; background-color:#2E2E2E;">
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
	</div>
	<br>
    <?php
	}
	?>
	<font face="monospace" style="text-align:center; display: block; margin-left: auto; margin-right: auto;">
		<?php echo "<div class'paginacao'".$links_paginacao."</div>"; ?>
	</font>
</div>
