<!-- /.col-lg-6 -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar Dados' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                foreach($publicacoes as $postagem){
                                echo form_open('admin/postagens/salvar_alteracoes/'.md5($postagem->id));

                             ?>
                             <div class="form-group">
                                 <label id="txt-titulo">Título</label>
                                 <input id="txt-titulo" name="txt-titulo" type="text" class="form-control" placeholder="Digite o título da postagem" value="<?php echo $postagem->titulo ?>">
                                 <br/>
                                 <label id="txt-subtitulo">Subtítulo</label>
                                 <input id="txt-subtitulo" name="txt-subtitulo" type="text" class="form-control" placeholder="Subtítulo da postagem" value="<?php echo $postagem->subtitulo ?>">
                                 <br/>
                                 <label id="txt-conteudo">Conteúdo</label>
                                 <textarea id="txt-conteudo" name="txt-conteudo" type="text" class="form-control" placeholder="Link de redirecionamento" rows="10"><?php echo $postagem->conteudo ?></textarea>
                                 <br/>
                                 <label id="txt-autor">Autor</label>
                                 <input id="txt-autor" name="txt-autor" type="text" class="form-control" placeholder="Nome do autor" value="<?php echo $postagem->autor ?>">
                                 <br/>
                                 <label id="txt-data">Data</label>
                                 <input type="datetime-local"  id="txt-data"  name="txt-data" class="form-control" value="<?php echo strftime('%Y-%m-%dT%H:%M', strtotime($postagem->data)) ?>">
                             </div>
                             <button type="submit" class="btn btn-primary">Salvar Alterações</button>
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

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar Imagem' ?>
                </div>
                <div class="panel-body">
                    <div class="row" style= "padding-bottom: 10px;">
                        <style>
                            img {
                                border: 1px solid #ddd; /* Gray border */
                                border-radius: 4px;  /* Rounded border */
                                padding: 5px; /* Some padding */
                                width: 300px; /* Set a small width */
                            }
                        </style>
                        <div class="col-lg-3 col-lg-offset-3">
                            <?php
                                if($postagem->imagem != null){
                                    echo img("assets/frontend/img/publicacao/".$postagem->imagem);
                                }
                                else {
                                    echo img("assets/frontend/img/SemFoto.png");
                                }
                                echo form_open_multipart('admin/postagens/nova_foto/'.md5($postagem->id).'/'.$postagem->imagem);
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <br/>
                                <input id="txt-imagem" name="txt-imagem" type="file" accept="application/png" placeholder="Matriz foto">
                                <br/>

                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                           <?php
                               }
                               echo form_close();
                            ?>
                       </div>

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
