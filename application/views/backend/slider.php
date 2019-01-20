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
                   <?php echo 'Alterar '.$subtitulo.' existente' ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                img {
                                    width: 200px;
                                }
                            </style>
                            <?php
                                $this->table->set_heading("Imagem", "Título", "Subtítulo", "Link", "Alterar");
                                foreach($slider as $slide){
                                    $fotoslide = img("assets/frontend/img/slider/".$slide->id.".jpg");
                                    $alterar = anchor(base_url('admin/slider/alterar/'.md5($slide->id)), '<i class="fa fa-refresh fa-fw"></i>Alterar');
                                    $this->table->add_row($fotoslide, $slide->titulo, $slide->subtitulo, $slide->link, $alterar);
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
