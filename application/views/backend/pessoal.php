<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo 'Administrar '.$subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Adicionar novo membro' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">', '</div>');
                                echo form_open('admin/pessoal/inserir');
                            ?>
                            <div class="form-group">
                                <label id="txt-titulo">Nome do Membro</label>
                                <input type="text"  id="txt-nome"  name="txt-nome" class="form-control"
                                placeholder="Digite o nome do membro..." value="<?php echo set_value('txt-nome') ?>">
                            </div>
                            <div class="form-group">
                                <label id="txt-subtitulo">Cargo</label>
                                <input type="text"  id="txt-cargo"  name="txt-cargo" class="form-control"
                                placeholder="Digite o cargo..." value="<?php echo set_value('txt-cargo') ?>">
                            </div>
                            <button type="submit" class="btn btn-default">Adicionar</button>
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
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar '.$subtitulo.' existente' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                img {
                                    width: 100px;
                                    height: 100px;
                                    object-fit: cover;
                                }
                            </style>
                            <?php
                                $this->table->set_heading("Imagem", "Nome", "Cargo", "Alterar", "Excluir");
                                foreach($pessoal as $equipe){
                                    if($equipe->imagem == 1){
                                        $fotoequipe = img("assets/frontend/img/pessoal/".md5($equipe->id).".jpg");
                                    }
                                    else {
                                        $fotoequipe = img("assets/frontend/img/semAvatar.png");
                                    }
                                    $alterar = anchor(base_url('admin/pessoal/alterar/'.md5($equipe->id)), '<i class="fa fa-refresh fa-fw"></i>Alterar');
                                    $excluir = anchor(base_url('admin/pessoal/excluir/'.md5($equipe->id)), '<i class="fa fa-remove fa-fw"></i>Excluir');
                                    $this->table->add_row($fotoequipe, $equipe->nome, $equipe->cargo, $alterar, $excluir);
                                }

                                $this->table->set_template(array('table_open' => '<table class="table table-striped">'));
                                echo $this->table->generate();
                            ?>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
