<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('admin') ?>">Painel Administrativo</a>
        </div>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url('admin/slider') ?>"><i class="fab fa-slideshare"></i> Slider</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/postagens') ?>"><i class="fa fa-edit fa-fw"></i> Postagens</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/servicos') ?>"><i class="fa fa-clipboard fa-fw"></i> Serviços</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/pessoal') ?>"><i class="fa fa-coffee fa-fw"></i> Equipe</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/contato') ?>"><i class="fa fa-at fa-fw"></i> Contato</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>"><i class="fas fa-exchange-alt"></i> Retornar ao Site</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/usuario/logout') ?>"><i class="fas fa-sign-out-alt"></i> Sair do Sistema</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
