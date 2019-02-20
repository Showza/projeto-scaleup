</div>
<!-- /.row -->
<br>
<section class="footer" style="background-color:#2E2E2E; display: inline-block; width: 100%" id="contato">
    <br><br><br>
    <div class="container-fluid">
        <font face="monospace" color="#9aff01">
            <span style="font-size:250%; margin: auto 2%"><b>Fale Conosco</b></span>
        </font>
        <font face="monospace" color="#f2f2f2">
            <a href="https://www.facebook.com/ScaleUpJr/" target="_blank" style="font-size:150%; margin: auto 2%; text-decoration:none; color: inherit;">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/scaleupjr/" target="_blank" style="font-size:150%; margin: auto 2%; text-decoration:none; color: inherit;">
                <i class="fab fa-instagram"></i>
            </a>
            <span style="font-size:150%; margin: auto 2%"><b>Fale Conosco: (31) 9 9196-6156</b></span>
            <span style="font-size:150%; margin: auto 2%"><b>E-mail: contato@scaleup.com.br</b></span>
        </font>
    </div>
    <br>
    <div class="container-fluid">
        <form class="form-horizontal" action="/action_page.php">
            <!-- Campo Nome -->
            <div class="form-group col-sm-5" style="margin: 50px 0 50px 1%">
                <input type="text" class="form-control" id="usr" placeholder="Nome completo" name="usr"
                style="background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; height: 70px; border-radius: 0">
            </div>
            <!-- Campo Email -->
            <div class="form-group col-sm-6" style="margin: 50px 0 50px 6.3%">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                style="background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; height: 70px; border-radius: 0">
            </div>
            <!-- Campo Assunto -->
            <div class="form-group" style="margin: 50px 2%">
                    <input type="text" class="form-control" id="assunto" placeholder="Assunto" name="assunto"
                    style="background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; height: 70px; border-radius: 0">
            </div>
            <!-- Comentário -->
            <div class="form-group" style="margin: 50px 2%">
                <textarea class="form-control" rows="10" id="comment" placeholder="Mensagem"
                style="background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; border-radius: 0"></textarea>
            </div>

            <!-- Botão Enviar -->
            <br>
            <div class="form-group" style="margin: auto 2%;">
                <button  id="buttonEnviar" type="submit" class="btn btn-default"
                style="background-color:#9aff01; border-color:#9aff01; height:60px; width:200px">
                <font face="monospace" style="font-size:150%">Enviar</font>
                </button>
                <br><br><br><br>
            </div>
        </form>
    </div>
</section>
<!-- Footer -->
<footer>
    <div class="row" style="position: absolute; width:100%; margin: -2em 0 1em 0;">
        <div class="col-lg-12">
            <center>
                <font face="Consolas">
                <p>Desenvolvido por Voluta Soluções Digitais</p>
                <p>Copyright &reg;</p>
                </font>
            </center>
            <hr>
            <a href="<?php echo base_url('admin') ?>" style="font-size:100%; margin: auto 2%; text-decoration:none; color: inherit;">
                <span><i class="fas fa-tools"><font face="Consolas"> Área Administrativa</font></i></span>
            </a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</footer>
</div>
<!-- /.container -->
