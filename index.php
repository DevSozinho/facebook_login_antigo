<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login facebook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <header>
        <div class="center1">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--LOGO-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone</p>
                <input type="email" name="email" placeholder="E-mail or Cell" id="email">
                </div><!--FORM-ELEMENT-->
                <div class="form-element">
                    <p>Senha</p>
                <input type="password" placeholder="Password" name="password" id="password">
                </div><!--FORM-ELEMENT-->
                <div class="form-element">
                <input type="submit" name="enviar" value="Enviar" id="enviar">
                </div><!--FORM-ELEMENT-->
            </form><!--FORM-LOGIN-->
            <div class="clear"></div>
        </div><!--CENTER-->
    </header>

    <section class="main">
        <div class="center1">
            <div class="img-pessoas">
                <img src="img/img1.png" alt="Imagem" title="Imagem">
            </div><!--IMG-PESSOAS-->
            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
            </p>
            <p>
                <h3>É gratuito e sempre será!</h3>
                <form class="criar-conta" action="">
                    <div class="w50">
                        <input type="text" name="fnome" id="fnome" placeholder="Nome...">
                    </div><!--w50-->

                    <div class="w50">
                        <input type="text" name="fsobre" id="fsobre" placeholder="Sobre Nome...">
                    </div><!--w50-->

                    <div class="w100">
                        <input type="email" name="femail" id="femail" placeholder="Seu melhor E-mail...">
                    </div><!--w100-->

                    <div class="w100">
                        <input type="password" name="fsenha" id="fsenha" placeholder="Password...">
                    </div><!--w100-->

                    <div class="w100">

                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="" id="" class="nascimento">
                            <?php
                                for($dia_mes = 1;$dia_mes <= 31;$dia_mes++){
                            ?>
                            <option value="<?php echo $dia_mes; ?>"><?php echo $dia_mes; ?></option>
                            <?php } ?>
                        </select>
                        <select name="" id="" class="nascimento">
                            <?php 
                            $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

                            foreach($meses as $mes){

                            ?>
                            <option value="<?php echo $mes ?>"><?php echo $mes ?></option>
                            <?php } ?>
                        </select>
                        <select name="" id="" class="nascimento esp">
                        <?php
                                for($ano = 1960;$ano <= 2023;$ano++){
                            ?>
                            <option value="<?php echo $ano; ?>"><?php echo $ano; ?></option>
                            <?php } ?>
                        </select>
                        <p>Por que preciso informar minha data de nascrimento?</p>
                        <div class="clear"></div>

                        <div class="w100">
                                    <div class="input-radio">
                                    <input type="radio" name="sexo" value="msaculino" id="m">
                                    <label for="m">Masculino</label>
                                    </div><!--input-radio-->
                                    <div class="input-radio">
                                    <input type="radio" name="sexo" value="femi" id="f">
                                    <label for="f">Feminino</label>
                                    </div><!--input-radio-->
                                    <div class="clear"></div>
                        </div><!--w100-->

                    </div><!--w100-->
                    
                    <input type="submit" value="Cadastrar!" name="acao">
                    <div class="clear"></div>
                </form><!--CRIAR-CONTA-->
            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--CENTER-->
    </section><!--MAIN-->

    <section class="linguas">
        <div class="center1">
            <?php $ling = array("Português","Inglês","Espanhol","Francês","Alemão","Italiano","Japonês","Chinês","Russo","Árabe","Hindi","Coreano","Holandês","Sueco","Turco"
); 
            foreach($ling as $lingv){
?>
            <a href="#" class="sl-lin"><?php echo $lingv ?></a>
            <?php } ?>
            <i class="bi bi-plus edd"></i>
        </div><!--center-->
        <div class="center">
            <?php $palavrasFacebook = array(
    "rede social", "amigos", "compartilhar", "curtir", "publicações",
    "perfil", "notificações", "mensagens", "fotos", "vídeos",
    "postagens", "feed", "amizade", "seguidores", "página",
    "grupos", "evento", "marcar", "timeline", "comentários",
    "emojis", "reagir", "privacidade", "configurações", "perfil público",
    "bloquear"
);
            foreach($palavrasFacebook as $txt){ ?>
            <a href="#" type="teste"><?php print $txt ?></a>
        <?php } ?> 
        </div><!--center-->
    </section><!--linguas-->
    <script src="js/script.js"></script>
</body>
</html>