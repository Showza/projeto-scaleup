<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo $subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/postagens/inserir');
                             ?>
                             <div class="form-group">
                                 <label id="txt-titulo">Título</label>
                                 <input id="txt-titulo" name="txt-titulo" type="text" class="form-control" placeholder="Digite o título da postagem">
                                 <br/>
                                 <label id="txt-subtitulo">Subtítulo</label>
                                 <input id="txt-subtitulo" name="txt-subtitulo" type="text" class="form-control" placeholder="Subtítulo da postagem">
                                 <br/>
                                 <label id="txt-conteudo">Conteúdo</label>
                                 <textarea id="txt-conteudo" name="txt-conteudo" type="text" class="form-control" placeholder="Conteúdo da postagem" rows="10"></textarea>
                                 <br/>
                                 <label id="txt-autor">Autor</label>
                                 <input id="txt-autor" name="txt-autor" type="text" class="form-control" placeholder="Nome do autor">
                                 <br/>
                                 <label id="txt-data">Data</label>
                                 <input type="datetime-local"  id="txt-data"  name="txt-data" class="form-control" placeholder="Digite a data..." value="<?php echo set_value('txt-data') ?>">
                                 <br/>
                                 <label id="txt-imagem">Imagem</label>
                                 <input id="txt-imagem" name="txt-imagem" type="file" value="Procurar arquivo..." placeholder="nenhum arquivo selecionado">
                                 <?php echo form_error('txt-imagem', '<p class="frm_err">', '<p>'); ?>
                                 <br/>
                             </div>
                             <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <?php
                                echo form_close();
                             ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                img {
                                    width: 150px;
                                }
                            </style>
                            <?php
                                $this->table->set_heading("Imagem", "Título", "Data", "Alterar Dados", "Excluir");
                                foreach($publicacoes as $postagem){
                                    if($postagem->imagem != null){
                                        $fotopub = img("assets/frontend/img/publicacao/".$postagem->imagem);
                                    }
                                    else {
                                        $fotopub = img("assets/frontend/img/SemFoto.png");
                                    }
                                    $titulopub = $postagem->titulo;
                                    $data= postadoem($postagem->data);
                                    $alterar = anchor(base_url('admin/postagens/alterar/'.md5($postagem->id)),'<button type="button" class="btn btn-link"><span style="color:#337ab7"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$postagem->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$postagem->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de slide</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir a postagem '.$postagem->titulo.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/postagens/remover/".md5($postagem->id).'/'.$postagem->imagem).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($fotopub,$titulopub,$data,$alterar,$excluir);
                                }
                                $this->table->set_template(array('table_open' => '<table class="table table-striped">'));
                                echo $this->table->generate();
                                echo "<div class'paginacao' ".$links_paginacao."</div>";
                             ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
