<nav class="navbar navbar-default menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 padding-off-mobile">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand scrollink" href="#home"><img src="<?= base_url(); ?>assets/images/logo.png" alt="Batalha"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="scrollink" href="#produtos">Produtos</a></li>
                        <li><a href="http://compras.landingpagemodelo.com.br/" target="_blank"><span class="dst">Compre aqui</span></a></li>
                        <li><a class="scrollink" href="#premios">Prêmios</a></li>
                        <li><a class="scrollink active" href="#receitas">Receitas</a></li>
                        <li><a class="scrollink" href="#sobre-nos">Sobre nós</a></li>
                        <!--<li><a href="<?php echo base_url(); ?>blog">Blog</a></li>-->
                        <li><a class="scrollink fale-conosco" href="#fale-conosco">Fale conosco</a></li>
                        <li class="redes"><a href="https://www.instagram.com/azeitebatalha/" target="_blank"><img class="" src="<?= base_url(); ?>assets/images/insta.png" alt="Instagram"></a></li>
                        <li class="redes"><a href="https://facebook.com/azeitebatalha" target="_blank"><img class="" src="<?= base_url(); ?>assets/images/face.png" alt="Facebook"></a></li>
                        <!--<li class="redes"><a href="" target="_blank"><img class="" src="<?= base_url(); ?>assets/images/youtube.png" alt="Youtube"></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="home" class="container-fluid padding-off home">
    <div class="galeria">
        <section class="glr-home slider">
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_01.jpg" alt="Landing Modelo">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_01.jpg" alt="Landing Modelo">
            </div>
            <div>
                <a class="scrollink" href="#receitas">
                    <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_02.jpg" alt="Landing Modelo">
                </a>
                <a class="scrollink" href="#receitas">
                    <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_02.jpg" alt="Landing Modelo">
                </a>
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_03.jpg" alt="Landing Modelo">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_03.jpg" alt="Landing Modelo">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_04.jpg" alt="Landing Modelo">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_04.jpg" alt="Landing Modelo">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_05.jpg" alt="Landing Modelo">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_05.jpg" alt="Landing Modelo">
            </div>
            <div>
                <img class="img-responsive center-block hidden-xs" src="<?= base_url(); ?>assets/images/Galeria_06.jpg" alt="Landing Modelo">
                <img class="img-responsive center-block visible-xs" src="<?= base_url(); ?>assets/images/Galeria_mobile_06.jpg" alt="Landing Modelo">
            </div>
        </section>
    </div>
</div>








<div id="fale-conosco" class="container-fluid padding-off contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center tt">
                <p>Fale com a gente e leve um dos melhores azeites do mundo para a sua mesa.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-MAIL*" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="telefone" type="text" class="telefone form-control" name="telefone" placeholder="TELEFONE" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <div class="custom_select">
                                <select id="assunto1" class="assunto1 form-control" name="assunto1" required="required">
                                    <option value="" disabled selected>ASSUNTO*</option>
                                    <option value="Dúvidas ou Sugestões">Dúvidas ou Sugestões</option>
                                    <option value="Revenda">Revenda</option>
                                    <option value="Representação Comercial">Representação Comercial</option>
                                    <option value="Outros assuntos">Outros assuntos</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="4" name="mss" required="required" placeholder="MENSAGEM"></textarea>
                        </div>
                        <div class="col-xs-9 col-sm-8 col-md-8 form-group">
                            <small>* Os campos marcados com asterisco são de preenchimento obrigatório.</small>
                        </div>
                        <div class="col-xs-3 col-sm-4 col-md-4 form-group">
                            <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Este site utiliza cookies para melhorar sua experiência de navegação, permitir um início de sessão seguro, recolher estatísticas e oferecer conteúdo adequado aos seus interesses. Ao continuar sua navegação, considera-se aceito nossos
                <a href="<?php echo base_url(); ?>politicadecookies">Termos e Condições de Uso do Site</a> e a nossa <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de Privacidade</a>.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div> -->

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>