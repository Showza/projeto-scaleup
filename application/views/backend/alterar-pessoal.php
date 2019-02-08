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
                   <?php echo 'Alterar membro' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                foreach($pessoal as $equipe){
                                    echo form_open('admin/pessoal/salvar_alteracoes/'.md5($equipe->id));
                            ?>
                                    <div class="form-group">
                                        <label id="txt-nome">Nome do Membro</label>
                                        <input type="text"  id="txt-nome"  name="txt-nome" class="form-control"
                                        placeholder="Digite o nome do membro..." value="<?php echo $equipe->nome ?>">
                                    </div>
                                    <div class="form-group">
                                        <label id="txt-subtitulo">Cargo</label>
                                        <input type="text"  id="txt-cargo"  name="txt-cargo" class="form-control"
                                        placeholder="Digite o cargo..." value="<?php echo $equipe->cargo ?>">
                                    </div>
                                    <input type= "hidden" name= "txt-id" id= "txt-id" value= "<?php echo $equipe->id ?>">
                                    <button type="submit" class="btn btn-default">Atualizar</button>
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
                   <?php echo 'Imagem de destaque do membro' ?>
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
                                if($equipe->imagem == 1){
                                    echo img("assets/frontend/img/pessoal/".md5($equipe->id).".jpg");
                                }
                                else {
                                    echo img("assets/frontend/img/semAvatar.png");
                                }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                $divopen= '<div class="form-group">';
                                $divclose= '</div>';
                                echo form_open_multipart('admin/pessoal/nova_foto');
                                echo form_hidden('id', md5($equipe->id));
                                echo $divopen;
                                $imagem= array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                                echo form_upload($imagem);
                                echo $divclose;
                                echo $divopen;
                                $botao= array('name' => 'btn_adicionar', 'id' => 'btn_adicionar', 'class' => 'btn btn_default',
                                    'value' => 'Adicionar nova Imagem');
                                echo form_submit($botao);
                                echo $divclose;
                                echo form_close();
                                }
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
