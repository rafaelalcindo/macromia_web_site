<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.0.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "webpro.js", "musewpdisclosure.js", "jquery.museresponsive.js", "require.js", "esqueci-minha-senha.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Esqueci minha senha</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre.css?crc=403182001"/>
  <link rel="stylesheet" type="text/css" href="css/esqueci-minha-senha.css?crc=3846811898" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_esqueci-minha-senha.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre.css?crc=4171875711"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_esqueci-minha-senha.css?crc=373583917" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/nunito:n7,n4,n3:default.js" type="text/javascript">\x3C/script>');
</script>
    <!--custom head HTML-->
  <script type="text/javascript">    window.smartlook||(function(d) {    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';    c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);    })(document);    smartlook('init', '0a2d43c71b419af12271db7fb0c0f9eceff2d612');</script><script type="text/javascript" src="_js/jquery-1.12.4.min.js"></script>         <script type="text/javascript" src="_js/maskedinput.js"></script>             <script src="_js/datapicker/jquery.ui.timepicker.js" type="text/javascript"></script>         <script type="text/javascript" src="_js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>         <script src="_js/maskedinput.js" type="text/javascript"></script>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.structure.min.css"/>         <link rel="stylesheet" href="_js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css"/>         <link rel="stylesheet" href="_js/datapicker/jquery.ui.timepicker.css"/><style type="text/css">input[type='radio'] {    -webkit-appearance: radio;    -webkit-border-radius: 0;  }  input[type='checkbox']{    -webkit-appearance: checkbox;    -webkit-border-radius: 0;  }</style>
<?php  include('head_pages/head_esqueci_conta.php'); ?>

<script type="text/javascript">
    $(document).ready(function() {

        var cli_email = $('#cli_email').val();
        var cli_senha = $('#cli_senha').val();
        var foto_email = $('#foto_email').val();
        var foto_senha = $('#foto_senha').val();
        var foto_ident = $('#foto_ident').val();
        var erroremail = "<?= $erroremail ?>";

        $('#bp_infinity').css('margin-top','-1.1%');

        $('#u407377-4').hide();

        if(erroremail == 'K126T32C'){
          $('#u407377-4').show();
        }else{
          $('#u407377-4').hide();
        }

        if ((cli_email != " " && cli_senha != " ") || (foto_email != " " && foto_senha != " " && foto_ident != " ")) {

          


            $('#u11522').show();
            $('#u292004-4-bw').hide();
            $('#u292003-4').hide(); /* perfil imagem topo */
            $('#u11521').css("background", "transparent url('<?php if($val_foto_ident == "
                " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != '' ){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>') no-repeat scroll center center / contain");
            $('#u11521').css('background-size', '100% 100%'); /* perfil sair topo */ /* boas vindas topo */


            if (foto_email != " " && cli_email == " ") { /* barra minha conta foto */

                $('#u330134-8').children().remove('p');
                $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : "
                    " ?> | <span style='color: black'>Créditos Ilimitados</span> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'> Sair</a> </p> ");


                $('#u291970-5').children().remove();
                $('#u291970-5').attr('href', 'fotografo-minha-conta.php');
                $('#u291970-5').append('<p>MINHA CONTA</p>');
                $('#u56594-5').children().remove();
                $('#u56594-5').attr('href', 'fotografo-minha-conta.php');
                $('#u56594-5').append('<p>MINHA CONTA</p>'); /* barra filtro foto */
                $('#u56593-5').children().remove();
                $('#u56593-5').attr('href', 'filtro.php');
                $('#u56593-5').append('<p>LISTA DE PEDIDOS</p>'); /*Inserindo link para as paginas */
                $('#u350754-11').children().remove();
                var link_foto = "<p style='color: #ffe587;'><a  id='foto_conta' href='fotografo-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>MINHA CONTA</a> <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span> <a  id='foto_filtro' href='filtro.php' style='text-decoration: none; color: #ffffff; cursor: pointer;'>LISTA DE PEDIDOS</a></p>";
                $('#u350754-11').append(link_foto);
            } else {
                $('#u56471-4').children().remove();
                $('#u56471-4').attr('href', 'cliente-minha-conta.php');
                $('#u56471-4').append('<p>MINHA CONTA</p>');
                $('#u56594-5').children().remove();
                $('#u56594-5').attr('href', 'cliente-minha-conta.php');
                $('#u56594-5').append('<p>MINHA CONTA</p>');
                $('#u330134-8').children().remove('p');
                $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : "
                    " ?> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'>Sair</a> </p> ");
                $('#u350754-11').children().remove();
                var link_foto = "<p style='color: #ffe587;'><a  id='cli_conta' href='cliente-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>MINHA CONTA</a>   <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span>   <a  id='cli_soli' href='solicitar-fotografo.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>SOLICITAR FOTOGRAFO</a></p>";
                $('#u350754-11').append(link_foto);
            }
        } else {
            $('#u11522').hide();
            $('#u292004-4-bw').show();
            $('#u292003-4').show();
        }
        $('#perf_top_sair').click(function() {
            if (foto_ident == " ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?p=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FF") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FJ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            }
        });
        $('#perf_top_sair02').click(function() {
            if (foto_ident == " ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?p=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FF") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            } else if (foto_ident == "FJ") {
                $.ajax({
                    type: 'POST',
                    url: 'seleciona_tipo_cli.php?f=logout',
                    dataType: 'text',
                    success: function(res) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
 </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1025"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- group -->
    <div class="clearfix grpelem" id="pu330134-8"><!-- group -->
     <div class="browser_width shared_content" id="u330134-8-bw" data-content-guid="u330134-8-bw_content">
      <div class="clearfix" id="u330134-8"><!-- content -->
       <p><span id="u330134">OLÁ NOME DO CLIENTE </span><span id="u330134-2"> </span><span id="u330134-3"><span class="actAsInlineDiv normal_text" id="u330175"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u330176"><!-- simple frame --></span></span></span><span id="u330134-4">&nbsp; </span><span id="u330134-5">Sair</span></p>
      </div>
     </div>
     <div class="browser_width shared_content" id="u350754-11-bw" data-content-guid="u350754-11-bw_content">
      <div class="clearfix" id="u350754-11"><!-- content -->
       <p><span id="u350754">OLÁ NOME FOTÓGRAFO</span><span id="u350754-2"> </span> <span id="u350754-4"><span class="actAsInlineDiv normal_text" id="u350763"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u350764"><!-- simple frame --></span></span></span><span id="u350754-5">&nbsp; Créditos: Ilimitados&nbsp; </span><span id="u350754-6"><span class="actAsInlineDiv normal_text" id="u350761"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u350762"><!-- simple frame --></span></span></span><span id="u350754-7">&nbsp; </span><span id="u350754-8">Sair</span></p>
      </div>
     </div>
     <div class="browser_width shared_content" id="u292003-4-bw" data-content-guid="u292003-4-bw_content">
      <a class="nonblock nontext clearfix" id="u292003-4" href="http://macromia.com.br/sou-fotografo.php"><!-- content --><p><span id="u292003">QUERO FOTOGRAFAR</span></p></a>
     </div>
     <div class="browser_width shared_content" id="u292004-4-bw" data-content-guid="u292004-4-bw_content">
      <a class="nonblock nontext clearfix" id="u292004-4" href="http://macromia.com.br/solicitar-fotografo.php"><!-- content --><p><span id="u292004">QUERO CONTRATAR</span></p></a>
     </div>
     <div id="u56894-wrapper">
      <div id="u56894" class="shared_content" data-content-guid="u56894_content"><!-- simple frame --></div>
     </div>
    </div>
    <div class="clearfix grpelem shared_content" id="pu35849" data-content-guid="pu35849_content"><!-- column -->
     <div class="browser_width colelem" id="u35849-bw">
      <div id="u35849"><!-- column -->
       <div class="clearfix" id="u35849_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U35851-BP_infinity" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem shared_content" id="u35851-4" data-muse-uid="U35851" data-muse-type="txt_frame" data-content-guid="u35851-4_content"><!-- content -->
         <p>ESQUECI MINHA SENHA</p>
        </div>
        <!-- /m_editable -->
        <div class="rounded-corners colelem shared_content" id="u35852" data-content-guid="u35852_content"><!-- simple frame --></div>
        <!-- m_editable region-id="editable-static-tag-U35850-BP_infinity" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem" id="u35850-4" data-muse-uid="U35850" data-muse-type="txt_frame"><!-- content -->
         <p>Insira seu email de cadastro, e em instantes você receberá um link para mudar sua senha.</p>
        </div>
        <!-- /m_editable -->
        <div class="clearfix colelem shared_content" id="u35853" data-content-guid="u35853_content"><!-- column -->
         <div class="clearfix colelem" id="u35854"><!-- column -->
          <div class="colelem shared_content" id="u35866" data-content-guid="u35866_content"><!-- custom html -->
           <? (isset($_SESSION['cli_email']))? $val_email = $_SESSION['cli_email'] : $val_email = " "; (isset($_SESSION['cli_nome']))? $val_nome = $_SESSION['cli_nome'] : $val_nome = " "; ?>
<input type="hidden" value="<?= $val_nome?>" id="ocu_cli_nome"/>
<form method="POST" action="altersenha/alter_senha.php" id="frm_esqueci_senha">
          </div>
          <div class="clearfix colelem" id="pu35855"><!-- group -->
           <div class="clearfix grpelem" id="u35855"><!-- group -->
            <div class="clearfix grpelem shared_content" id="pu35858" data-content-guid="pu35858_content"><!-- group -->
             <div class="clearfix grpelem" id="u35858"><!-- column -->
              <!-- m_editable region-id="editable-static-tag-U35859-BP_infinity" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
              <div class="clearfix colelem" id="u35859-4" data-muse-uid="U35859" data-muse-type="txt_frame"><!-- content -->
               <p>EMAIL</p>
              </div>
              <!-- /m_editable -->
              <div class="rounded-corners colelem" id="u35861"><!-- simple frame --></div>
              <!-- m_editable region-id="editable-static-tag-U407377-BP_infinity" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
              <div class="clearfix colelem" id="u407377-4" data-muse-uid="U407377" data-muse-type="txt_frame"><!-- content -->
               <p>Email não cadastrado.</p>
              </div>
              <!-- /m_editable -->
             </div>
             <div class="grpelem" id="u35863"><!-- custom html -->
              <input type="email" name="txt_email" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
             </div>
            </div>
            <!-- m_editable region-id="editable-static-tag-U35857-BP_infinity" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <div class="rounded-corners clearfix grpelem shared_content" id="u35857-4" data-muse-uid="U35857" data-muse-type="txt_frame" data-content-guid="u35857-4_content"><!-- content -->
             <p>ENVIAR</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class="rounded-corners grpelem shared_content" id="u35865" data-content-guid="u35865_content"><!-- custom html -->
            <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 27px; cursor: pointer;"  />
           </div>
          </div>
         </div>
         <div class="colelem shared_content" id="u35867" data-content-guid="u35867_content"><!-- custom html -->
          </form>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="browser_width colelem shared_content" id="u35868-bw" data-content-guid="u35868-bw_content">
      <div id="u35868"><!-- simple frame --></div>
     </div>
    </div>
    <a class="nonblock nontext shared_content" id="u2643" href="http://macromia.com.br/index.php" data-content-guid="u2643_content"><!-- simple frame --></a>
    <div id="u56895-wrapper">
     <a class="nonblock nontext shared_content" id="u56895" href="http://macromia.com.br/index.php" data-content-guid="u56895_content"><!-- simple frame --></a>
    </div>
    <div class="clip_frame grpelem shared_content" id="u35871" data-content-guid="u35871_content"><!-- svg -->
     <img class="svg temp_no_img_src" id="u35872" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="173" height="358" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=63264009" src="images/blank.gif?crc=4208392903"/>
    </div>
    <a class="nonblock nontext clearfix shared_content" id="u292007-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u292007-4_content"><!-- content --><p>COMO FUNCIONA?</p></a>
    <div class="clip_frame grpelem shared_content" id="u35869" data-content-guid="u35869_content"><!-- svg -->
     <img class="svg temp_no_img_src" id="u35870" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="155" height="247" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=444024247" src="images/blank.gif?crc=4208392903"/>
    </div>
    <a class="nonblock nontext clearfix shared_content" id="u292008-4" href="http://macromia.com.br/contato.php" data-content-guid="u292008-4_content"><!-- content --><p>FALE CONOSCO</p></a>
    <div class="verticalspacer" data-offset-top="757" data-content-above-spacer="756" data-content-below-spacer="169"></div>
    <div class="clearfix grpelem shared_content" id="pu454361" data-content-guid="pu454361_content"><!-- group -->
     <div class="browser_width grpelem" id="u454361-bw">
      <div id="u454361"><!-- column -->
       <div class="clearfix" id="u454361_align_to_page">
        <div class="colelem shared_content" id="u330085" data-content-guid="u330085_content"><!-- custom html -->
         <input type="hidden" value="<?= (isset($_GET['errAut']))? $_GET['errAut'] : ' '; ?>" id="val_warnnig" />
  <input type="hidden" value="<?= $val_email ?>" id="cli_email" />
  <input type="hidden" value="<?= $val_senha ?>" id="cli_senha" />
  <input type="hidden" value="<?= $val_foto_email ?>" id="foto_email" />     
  <input type="hidden" value="<?= $val_foto_senha ?>" id="foto_senha" />
  <input type="hidden" value="<?= $val_foto_ident ?>" id="foto_ident" />
        </div>
        <div class="colelem shared_content" id="u37776" data-content-guid="u37776_content"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u279000-4-bw">
      <a class="nonblock nontext clearfix shared_content" id="u279000-4" href="http://mazy.com.br/" data-content-guid="u279000-4_content"><!-- content --><p>(11) 3742-0262 | © MACROMIA. DESENVOLVIDO POR AGÊNCIA MAZY</p></a>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1024" data-min-width="769" data-max-width="1024"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem" id="pu2643"><!-- group -->
     <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width" id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu35849_content"><!-- placeholder node --></span>
    <span class="clip_frame grpelem placeholder" data-placeholder-for="u35871_content"><!-- placeholder node --></span>
    <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292007-4_content"><!-- placeholder node --></span>
    <span class="clip_frame grpelem placeholder" data-placeholder-for="u35869_content"><!-- placeholder node --></span>
    <span class="nonblock nontext clearfix placeholder" data-placeholder-for="u292008-4_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="757" data-content-above-spacer="756" data-content-below-spacer="170"></div>
    <span class="clearfix grpelem placeholder" data-placeholder-for="pu454361_content"><!-- placeholder node --></span>
   </div>
  </div>
  <div class="breakpoint" id="bp_768" data-min-width="481" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu2643"><!-- group -->
     <span class="nonblock nontext placeholder" data-placeholder-for="u2643_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="u56894-bw">
      <span class="placeholder" data-placeholder-for="u56894_content"><!-- placeholder node --></span>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35849"><!-- column -->
     <div class="browser_width colelem temp_no_id" data-orig-id="u35849-bw">
      <div class="temp_no_id" data-orig-id="u35849"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u35849_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U35851-BP_768" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u35851-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="rounded-corners colelem placeholder" data-placeholder-for="u35852_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U240672-BP_768" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <div class="clearfix colelem shared_content" id="u240672-4" data-muse-uid="U240672" data-muse-type="txt_frame" data-content-guid="u240672-4_content"><!-- content -->
         <p>Insira seu email de cadastro, e em instantes você receberá um link para mudar sua senha.</p>
        </div>
        <!-- /m_editable -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u35853_content"><!-- placeholder node --></span>
       </div>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u35868-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="clip_frame grpelem temp_no_id" data-orig-id="u35871"><!-- svg -->
     <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="155" height="321" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=63264009" data-orig-id="u35872" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="clip_frame grpelem temp_no_id" data-orig-id="u35869"><!-- svg -->
     <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="139" height="221" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=444024247" data-orig-id="u35870" src="images/blank.gif?crc=4208392903"/>
    </div>
    <a class="nonblock nontext clearfix" id="u330533-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
    <a class="nonblock nontext clearfix" id="u330534-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
    <div class="verticalspacer" data-offset-top="756" data-content-above-spacer="755" data-content-below-spacer="185"></div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u454361-bw">
     <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
       <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u279000-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_480" data-min-width="321" data-max-width="480"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <div class="browser_width shared_content" id="u56725-bw" data-content-guid="u56725-bw_content">
      <div id="u56725"><!-- simple frame --></div>
     </div>
     <div class="browser_width" id="accordionu56589-bw">
      <ul class="AccordionWidget clearfix" id="accordionu56589"><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem100" id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100" id="u56598-5"><!-- content --><p id="u56598-3" class="shared_content" data-content-guid="u56598-3_content"><span id="u56598">​</span><span class="actAsInlineDiv normal_text" id="u56599"><!-- content --><span class="actAsDiv excludeFromNormalFlow" id="u56600"><!-- content --></span></span></p></div><div class="AccordionPanelContent disn clearfix colelem100" id="u56591"><!-- column --><a class="nonblock nontext clearfix colelem shared_content" id="u56593-4" href="http://macromia.com.br/solicitar-fotografo.php" data-content-guid="u56593-4_content"><!-- content --><p>QUERO CONTRATAR</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u56594-5" href="http://macromia.com.br/sou-fotografo.php" data-content-guid="u56594-5_content"><!-- content --><p>&nbsp;</p><p>SOU FOTÓGRAFO</p></a><div class="colelem shared_content" id="u56592" data-content-guid="u56592_content"><!-- simple frame --></div><a class="nonblock nontext clearfix colelem shared_content" id="u56597-4" href="http://macromia.com.br/como-funciona.php" data-content-guid="u56597-4_content"><!-- content --><p>COMO FUNCIONA?</p></a><a class="nonblock nontext clearfix colelem shared_content" id="u187692-4" href="http://macromia.com.br/contato.php" data-content-guid="u187692-4_content"><!-- content --><p>FALE CONOSCO</p></a></div></li>
      </ul>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35849"><!-- group -->
     <div class="browser_width grpelem temp_no_id" data-orig-id="u35849-bw">
      <div class="temp_no_id" data-orig-id="u35849"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u35849_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U35851-BP_480" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u35851-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="rounded-corners colelem placeholder" data-placeholder-for="u35852_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U240672-BP_480" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u240672-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <div class="clearfix colelem temp_no_id" data-orig-id="u35853"><!-- column -->
         <div class="clearfix colelem temp_no_id" data-orig-id="u35854"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u35866_content"><!-- placeholder node --></span>
          <div class="clearfix colelem temp_no_id" data-orig-id="pu35855"><!-- group -->
           <div class="clearfix grpelem temp_no_id" data-orig-id="u35855"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu35858_content"><!-- placeholder node --></span>
            <!-- m_editable region-id="editable-static-tag-U35857-BP_480" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35857-4_content"><!-- placeholder node --></span>
            <!-- /m_editable -->
           </div>
           <span class="rounded-corners grpelem placeholder" data-placeholder-for="u35865_content"><!-- placeholder node --></span>
          </div>
         </div>
         <span class="colelem placeholder" data-placeholder-for="u35867_content"><!-- placeholder node --></span>
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width grpelem placeholder" data-placeholder-for="u35868-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="clip_frame grpelem temp_no_id" data-orig-id="u35871"><!-- svg -->
     <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="138" height="286" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=63264009" data-orig-id="u35872" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="clip_frame grpelem temp_no_id" data-orig-id="u35869"><!-- svg -->
     <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="124" height="197" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=444024247" data-orig-id="u35870" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="clearfix shared_content" id="u283018-4" data-content-guid="u283018-4_content"><!-- content -->
     <p>MENU</p>
    </div>
    <div class="verticalspacer" data-offset-top="710" data-content-above-spacer="709" data-content-below-spacer="185"></div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u454361-bw">
     <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
       <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u279000-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_320" data-max-width="320"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu330134-8"><!-- group -->
     <span class="browser_width placeholder" data-placeholder-for="u330134-8-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u350754-11-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292003-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u292004-4-bw_content"><!-- placeholder node --></span>
     <span class="browser_width placeholder" data-placeholder-for="u56725-bw_content"><!-- placeholder node --></span>
     <div class="browser_width temp_no_id" data-orig-id="accordionu56589-bw">
      <ul class="AccordionWidget clearfix temp_no_id" data-orig-id="accordionu56589"><!-- vertical box -->
       <li class="AccordionPanel clearfix colelem100 temp_no_id" data-orig-id="u56590"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem100 temp_no_id" data-orig-id="u56598-5"><!-- content --><span class="placeholder" data-placeholder-for="u56598-3_content"><!-- placeholder node --></span></div><div class="AccordionPanelContent disn clearfix colelem100 temp_no_id" data-orig-id="u56591"><!-- column --><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56593-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56594-5_content"><!-- placeholder node --></span><span class="colelem placeholder" data-placeholder-for="u56592_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u56597-4_content"><!-- placeholder node --></span><span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u187692-4_content"><!-- placeholder node --></span></div></li>
      </ul>
     </div>
     <span class="nonblock nontext placeholder" data-placeholder-for="u56895_content"><!-- placeholder node --></span>
    </div>
    <div class="clearfix grpelem temp_no_id" data-orig-id="pu35849"><!-- column -->
     <div class="browser_width colelem temp_no_id" data-orig-id="u35849-bw">
      <div class="temp_no_id" data-orig-id="u35849"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u35849_align_to_page">
        <!-- m_editable region-id="editable-static-tag-U35851-BP_320" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u35851-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <span class="rounded-corners colelem placeholder" data-placeholder-for="u35852_content"><!-- placeholder node --></span>
        <!-- m_editable region-id="editable-static-tag-U240672-BP_320" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
        <span class="clearfix colelem placeholder" data-placeholder-for="u240672-4_content"><!-- placeholder node --></span>
        <!-- /m_editable -->
        <div class="clearfix colelem temp_no_id" data-orig-id="u35853"><!-- column -->
         <div class="clearfix colelem temp_no_id" data-orig-id="u35854"><!-- column -->
          <span class="colelem placeholder" data-placeholder-for="u35866_content"><!-- placeholder node --></span>
          <div class="clearfix colelem temp_no_id" data-orig-id="pu35855"><!-- group -->
           <div class="clearfix grpelem temp_no_id" data-orig-id="u35855"><!-- column -->
            <span class="clearfix colelem placeholder" data-placeholder-for="pu35858_content"><!-- placeholder node --></span>
            <!-- m_editable region-id="editable-static-tag-U35857-BP_320" template="esqueci-minha-senha.html" data-type="html" data-ice-options="disableImageResize,link" -->
            <span class="rounded-corners clearfix colelem placeholder" data-placeholder-for="u35857-4_content"><!-- placeholder node --></span>
            <!-- /m_editable -->
           </div>
           <span class="rounded-corners grpelem placeholder" data-placeholder-for="u35865_content"><!-- placeholder node --></span>
          </div>
         </div>
         <span class="colelem placeholder" data-placeholder-for="u35867_content"><!-- placeholder node --></span>
        </div>
       </div>
      </div>
     </div>
     <span class="browser_width colelem placeholder" data-placeholder-for="u35868-bw_content"><!-- placeholder node --></span>
    </div>
    <div class="clip_frame grpelem temp_no_id" data-orig-id="u35871"><!-- svg -->
     <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34689-nzpa9x.svg?crc=334479141" width="116" height="239" alt="" data-mu-svgfallback="images/34689-nzpa9x_poster_.png?crc=63264009" data-orig-id="u35872" src="images/blank.gif?crc=4208392903"/>
    </div>
    <div class="clip_frame grpelem temp_no_id" data-orig-id="u35869"><!-- svg -->
     <img class="svg temp_no_id temp_no_img_src" data-orig-src="images/34688-nzpa36.svg?crc=445679695" width="103" height="165" alt="" data-mu-svgfallback="images/34688-nzpa36_poster_.png?crc=444024247" data-orig-id="u35870" src="images/blank.gif?crc=4208392903"/>
    </div>
    <span class="clearfix placeholder" data-placeholder-for="u283018-4_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="682" data-content-above-spacer="681" data-content-below-spacer="184"></div>
    <div class="browser_width grpelem temp_no_id" data-orig-id="u454361-bw">
     <div class="temp_no_id" data-orig-id="u454361"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u454361_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u330085_content"><!-- placeholder node --></span>
       <span class="colelem placeholder" data-placeholder-for="u37776_content"><!-- placeholder node --></span>
       <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u279000-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch","webpro","musewpdisclosure","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('#accordionu56589', ['#bp_480', '#bp_320'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:true,defaultIndex:-1}); });/* #accordionu56589 */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=36584860" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
