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
                                foreach($contato as $cont){
                                echo form_open('admin/contato/salvar_alteracoes/'.md5($cont->id));

                             ?>
                             <div class="form-group">
                                 <label id="txt-nome">Nome</label>
                                 <input id="txt-nome" name="txt-nome" type="text" class="form-control" placeholder="Digite o nome do membro" value="<?php echo $cont->nome ?>">
                                 <br/>
                                 <label id="txt-email">Email</label>
                                 <input id="txt-email" name="txt-email" type="text" class="form-control" placeholder="email do membro" value="<?php echo $cont->email ?>">
                                 <br/>
                             </div>
                             <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            <?php
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
