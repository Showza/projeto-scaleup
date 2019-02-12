<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $subtitulo ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo $subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                echo validation_errors('<div class="alert alert-danger">','</div>');
                                echo form_open_multipart('admin/servicos/inserir');
                             ?>
                             <div class="form-group">
                                 <label id="txt-nome">Nome</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Digite o nome do serviço">
                                 <br/>
                                 <label id="txt-descricao">Descricao</label>
                                 <textarea id="txt-descricao" name="txt-descricao" type="text" class="form-control" placeholder="Descreva o serviço"></textarea>
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
        <div class="col-lg-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <?php echo 'Alterar'.' '.$subtitulo ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                img {
                                    width: 100px;
                                }
                            </style>
                            <?php
                                $this->table->set_heading("Imagem", "Nome do Serviço", "Alterar Dados", "Excluir Serviço");
                                foreach($servicos as $servico){
                                    if($servico->imagem != null){
                                        $fotoservico = img("assets/frontend/img/servico/".$servico->imagem);
                                    }
                                    else {
                                        $fotoservico = img("assets/frontend/img/semImagem.png");
                                    }
                                    $nomeservico = $servico->nome;
                                    $alterar = anchor(base_url('admin/servicos/alterar/'.md5($servico->id)),'<button type="button" class="btn btn-link"><span style="color:#337ab7"><i class="fa fa-refresh fa-fw"></i>Alterar</span></button>');
                                    $excluir = $excluir= '<button type="button" class="btn btn-link" data-toggle="modal" data-target=".excluir-modal-'.$servico->id.'"><span style="color:red"><i class="fa fa-remove fa-fw"></i> Excluir</span></button>';
                                    echo $modal= ' <div class="modal fade excluir-modal-'.$servico->id.'" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel2">Exclusão de servico</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Deseja Realmente excluir o serviço '.$servico->nome.'?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                <a type="button" class="btn btn-primary" href="'.base_url("admin/servicos/remover/".md5($servico->id).'/'.$servico->imagem).'">Excluir</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>';

                                    $this->table->add_row($fotoservico,$nomeservico,$alterar,$excluir);
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
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
