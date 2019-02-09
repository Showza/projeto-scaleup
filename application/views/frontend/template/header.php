<style>
.contact-top{
    position: absolute;
    top: 0;
    width: 100%;
    display: block;
}
</style>
<div class="contact-top">
    <div class="container-fluid" style="background-color:#2E2E2E; height:60px;">
        <br>
        <div class="col-sm-2"  style="text-align:center;">
        <font face="monospace" color="#f2f2f2">
            <a href="https://www.facebook.com/ScaleUpJr/" target="_blank" style="font-size:120%; margin: auto 2em; text-decoration:none; color: inherit;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/scaleupjr/" target="_blank" style="font-size:120%; margin: auto 2em; text-decoration:none; color: inherit;">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <div class="col-sm-10"  style="text-align:right;">
                <span style="font-size:120%; margin: auto 1% auto 2%"><b><i class="fas fa-phone"></i></i></b></span>
                <span style="font-size:120%;"><b>Fale Conosco: (31) 9 9196-6156</b></span>
                <span style="font-size:120%; margin: auto 1% auto 2%"><b><i class="far fa-envelope"></i></b></span>
                <span style="font-size:120%;"><b>E-mail: contato@scaleup.com.br</b></span>
            </font>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<style>
    ul.nav a:hover {
        color: #9aff01 !important;
        background-color: transparent !important;
    }

@media (max-width: 768px) {
    .navbar-brand {
      height: 120px;
    }

    .nav >li >a {
      padding-top: 15px;
      padding-bottom: 15px;
    }
    .navbar-toggle {
      padding: 10px;
      margin: 40px 15px 25px 0;
    }
}
</style>
<nav class="navbar navbar-light" role="navigation" style="margin-bottom:0">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
          style="background-color:#9aff01">
              <span class="sr-only">Navegação</span>
              <span class="icon-bar" style="background-color:#f2f2f2"></span>
              <span class="icon-bar" style="background-color:#f2f2f2"></span>
              <span class="icon-bar" style="background-color:#f2f2f2"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url('assets/frontend/img/logonav.png'); ?>" style="width: 200px; height: 80px; margin-left:2em">
          </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="<?php echo base_url(); ?>" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>HOME</font></b></a>
              </li>
              <li>
                  <a href="<?php echo base_url('#sobrenos'); ?>" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>SOBRE NÓS</b></font></a>
              </li>
              <li>
                  <a href="<?php echo base_url('#servicos'); ?>" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>SERVIÇOS</b></font></a>
              </li>
              <li>
                  <a href="<?php echo base_url('#equipe'); ?>" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>EQUIPE</b></font></a>
              </li>
              <li>
                  <a href="#contato" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>CONTATO</b></font></a>
              </li>
              <li>
                  <a href="<?php echo base_url('#mej'); ?>" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>MEJ</b></font></a>
              </li>
              <li>
                  <a href="<?php echo base_url('blog'); ?>" style="line-height:80px; text-decoration:none; color:#000000; font-size:25px">
                      <font face="monospace"><b>BLOG</b></font></a>
              </li>
          </ul>
      </div>
      <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
