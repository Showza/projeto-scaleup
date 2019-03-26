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
            <span style="font-size:150%; margin: 1% 2% 0 2%; float: right"><b>Fale Conosco: (31) 9 9196-6156</b></span>
            <span style="font-size:150%; margin: 1% 2% 0 2%; float: right"><b>E-mail: contato@scaleup.com.br</b></span>
        </font>
    </div>
    <br>
    <div class="container-fluid">
            <style>
                .btn_up{
                    background-color:#9aff01;
                    border-color:#9aff01;
                    height:60px;
                    width:200px;
                    font-family: monospace;
                    font-size: 150%;
                    margin: -1em 2% auto 2%;
                    border-radius: 5px;
                    border: solid;
                }
            </style>
            <?php
                if ($enviado == 1){
                    echo '<div class="alert alert-success"> Email enviado! </div>';
                }
                else if ($enviado == 2){
                    echo '<div class="alert alert-warning"> Email não enviado! </div>';
                }
                echo validation_errors('<div class="alert alert-danger">', '</div>');

                $atributosForm = array('name' => 'formulario_contato', 'id'=> 'formulario_contato');
                echo form_open(base_url('contato/enviar_mensagem'), $atributosForm);

                ?>
                <div style="margin-top: -5em">
                <?php

                $atribNome= array('name'=>'txtNome','id'=>'txtNome','class'=>'form-control',
                'style'=>'background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; height: 70px; border-radius: 0; line-height: 55px; font-family: monospace; font-size:150%',
                'placeholder'=>'Nome', 'value' => set_value('txtNome'));
                echo("<div class='form-group col-sm-5' style='margin: 50px 0 50px 1%'>").
                // form_label("Nome",'txtNome').
                form_input($atribNome).
                ("</div>");

                $atribEmail= array('name'=>'txtEmail','id'=>'txtEmail','class'=>'form-control',
                'style'=>'background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; height: 70px; border-radius: 0; line-height: 55px; font-family: monospace; font-size:150%',
                'placeholder'=>'Email', 'value' => set_value('txtEmail'));
                echo("<div class='form-group col-sm-6' style='margin: 50px 0 50px 6.3%'>").
                // form_label("Email",'txtEmail').
                form_input($atribEmail).
                (" </div>");

                $atribAssunto=  array('name'=>'txtAssunto','id'=>'txtAssunto','class'=>'form-control',
                'style'=>'background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; height: 70px; border-radius: 0; line-height: 55px; font-family: monospace; font-size:150%',
                'placeholder'=>'Assunto', 'value' => set_value('txtAssunto'));
                echo("<div class='form-group' style='margin: 50px 2%'>").
                // form_label("Assunto",'txtAssunto').
                form_textarea($atribAssunto).
                (" </div>");

                $atribMsg= array('name'=>'txtMsg','rows' => '4','id'=>'txtMsg','class'=>'form-control',
                'style'=>'background-color:#2E2E2E; border-color:#9aff01; color: #f2f2f2; border-radius: 0; line-height: 55px; font-family: monospace; font-size:150%',
                'placeholder'=>'Mensagem', 'value' => set_value('txtMsg'));
                echo("<div class='form-group' style='margin: 50px 2%'>").
                // form_label("Mensagem",'txtMsg').
                form_textarea($atribMsg).
                (" </div>");


                echo form_submit('btn_enviar','Enviar', "class='btn_up'");

                echo form_close();
                ?>
                </div>
                <?php
                ?>
            <br><br><br><br>
    </div>
</section>
