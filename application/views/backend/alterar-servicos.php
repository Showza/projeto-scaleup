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
                                foreach($servicos as $servico){
                                echo form_open('admin/servicos/salvar_alteracoes/'.md5($servico->id));

                             ?>
                             <div class="form-group">
                                 <label id="txt-nome">Nome</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Digite o nome do serviço" value="<?php echo $servico->nome ?>">
                                 <br/>
                                 <label id="txt-descricao">Descricao</label>
                                 <textarea id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="Descreva o serviço"><?php echo $servico->descricao ?></textarea>
                                 <br/>
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
                                if($servico->imagem != null){
                                    echo img("assets/frontend/img/servico/".$servico->imagem);
                                }
                                else {
                                    echo img("assets/frontend/img/SemFoto.png");
                                }
                                echo form_open_multipart('admin/servicos/nova_foto/'.md5($servico->id).'/'.$servico->imagem);
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
