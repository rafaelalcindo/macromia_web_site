<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="pt-BR">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="description" content="Cadastre-se no Macromia e Receba Gratuitamente Orçamentos de Fotografia Profissional Sem Preocupações."/>
  <meta name="keywords" content="Macromia, Fotógrafo de Casamento, Decoração de Casamento, Fotografia Profissional, Fotografia, Fotógrafo, Estúdio de Fotografia, Studio de Fotógrafia, Fotógrafo de Evento, Newborn, Bolo Fake, "/>
  <meta name="generator" content="2017.0.0.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "solicitar-fotografo.css"], "outOfDate":[]};
</script>
  
  <link rel="shortcut icon" href="images/favicon.ico?crc=4078911600"/>
  <title>Orçamento de Fotografia | Macromia</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=205954113"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-mestre-copiar.css?crc=4183908989"/>
  <link rel="stylesheet" type="text/css" href="css/solicitar-fotografo.css?crc=4046469609" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_solicitar-fotografo.css?crc=3936982066"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_a-mestre-copiar.css?crc=436196828"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_solicitar-fotografo.css?crc=156769402" id="nomq_pagesheet"/>
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

  
<?php  include('head_pages/head_soli_foto.php');   ?>

<script type="text/javascript">        


$(document).ready(function() {
    var cli_email = $('#cli_email').val();
    var cli_senha = $('#cli_senha').val();
    if ((cli_email != " " && cli_senha != " ")) {
        $('#u11522').show();
        $('#u37546-6').show();
        $('#u292004-4-bw').hide();
        $('#u292003-4').hide();
        
        /* perfil imagem topo */ 
        
       
        /* foto na parte principal */
        $('#u37553').css("background", "transparent url('<?php if($val_foto_ident == " " ){ echo 'up_cli'; }else{ echo 'up_foto'; } ?>/<?php if($cli_img != ''){ echo $cli_dir.'/'.$cli_img; }else{ echo 'user_48.png'; } ?>') no-repeat scroll center center / contain"); 


        /* nome na parte principal */
        $('#u37550-4').children().remove();
        $('#u37550-4').append('<span class="actAsPara"><?= (isset($cli_nome))? $cli_nome : " " ?> </span>'); /* movendo para o meio */
        /*$('#u37546-6').css({ 'left': '35.70%' }); */
        /* Esconde os componestes de casatro e login... */
        $('#u49617').hide(0.001);
        $('#u48758-6').hide(0.001);

        
        $('#u330134-8').children().remove('p'); 
        $('#u330134-8').append("<p>OLÁ  <?= isset($cli_nome)? $cli_nome : " " ?> | <a  id='perf_top_sair' style='text-decoration: underline; color: #009B82; cursor: pointer;'>Sair</a> </p> ");

        $('#u350754-11').children().remove(); 
        var link_foto = "<p style='color: #ffe587;'><a  id='cli_conta' href='cliente-minha-conta.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>MINHA CONTA</a>   <span>  &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp  </span>   <a  id='cli_soli' href='solicitar-fotografo.php' style='text-decoration: none; color: #ffe587; cursor: pointer;'>SOLICITAR FOTÓGRAFO</a></p>";
         $('#u350754-11').append(link_foto);




        $('#u56594-5').children().remove();
        $('#u56594-5').attr('href', 'cliente-minha-conta.php');
        $('#u56594-5').append('<p>MINHA CONTA</p>');
        
        $('#u37546-6').show();


        if (cli_email != " ") {



        }
    } else {
        $('#u11522').hide();
        $('#u292004-4-bw').show();  
        $('#u292003-4').show();
        $('#u37546-6').hide();
        
    }
    $('#perf_top_sair').click(function() {
        if (cli_email != " ") {
            $.ajax({
                type: 'POST',
                url: 'seleciona_tipo_cli.php?p=logout',
                dataType: 'text',
                success: function(res) { /*alert('Funcionou!!!'+res); */
                    location.reload();
                }
            }); /* fim do ajax cliente */
        }
    });

    $('#perf_top_sair02').click(function() {
        if (cli_email != " ") {
            $.ajax({
                type: 'POST',
                url: 'seleciona_tipo_cli.php?p=logout',
                dataType: 'text',
                success: function(res) { /*alert('Funcionou!!!'+res); */
                    location.reload();
                }
            }); /* fim do ajax cliente */
        }
    });
});

 </script>     






<script type="text/javascript">        

 jQuery(function($) {
     $("#tel").mask("(99)9999-9999");
     $("#cel").mask("(99)99999-9999");
 }); 

</script>    


 <script type="text/javascript">   
    $(document).ready(function() {
      $('#data').datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          nextText: "Próximo",
          prevText: "Anterior",
          minDate: '0d'
      });
    });
 </script>


 <script type="text/javascript">   
    $(document).ready(function() {
      $('#data02').datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          nextText: "Próximo",
          prevText: "Anterior",
          minDate: '0d'
      });
    });
 </script>

  <script type="text/javascript">   
    $(document).ready(function() {
      $('#data03').datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          nextText: "Próximo",
          prevText: "Anterior",
          minDate: '0d'
      });
    });
 </script>

  <script type="text/javascript">   
    $(document).ready(function() {
      $('#data04').datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          nextText: "Próximo",
          prevText: "Anterior",
          minDate: '0d'
      });
    });
 </script>

  <script type="text/javascript">   
    $(document).ready(function() {
      $('#data05').datepicker({
          dateFormat: 'dd/mm/yy',
          dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
          dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
          dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
          monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
          monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          nextText: "Próximo",
          prevText: "Anterior",
          minDate: '0d'
      });
    });
 </script>


 <script type="text/javascript"> 

  $(document).ready(function(e) {
    $('#hora').timepicker({
        hourText: 'Hora',
        minuteText: 'Minuto',
        amPmText: ['AM', 'PM'],
        closeButtonText: 'Fechar',
        nowButtonText: 'Agora',
        deselectButtonText: 'Limpar'
    });

    $('#hora02').timepicker({
        hourText: 'Hora',
        minuteText: 'Minuto',
        amPmText: ['AM', 'PM'],
        closeButtonText: 'Fechar',
        nowButtonText: 'Agora',
        deselectButtonText: 'Limpar'
    });

    $('#hora03').timepicker({
        hourText: 'Hora',
        minuteText: 'Minuto',
        amPmText: ['AM', 'PM'],
        closeButtonText: 'Fechar',
        nowButtonText: 'Agora',
        deselectButtonText: 'Limpar'
    });

    $('#hora04').timepicker({
        hourText: 'Hora',
        minuteText: 'Minuto',
        amPmText: ['AM', 'PM'],
        closeButtonText: 'Fechar',
        nowButtonText: 'Agora',
        deselectButtonText: 'Limpar'
    });

    $('#hora05').timepicker({
        hourText: 'Hora',
        minuteText: 'Minuto',
        amPmText: ['AM', 'PM'],
        closeButtonText: 'Fechar',
        nowButtonText: 'Agora',
        deselectButtonText: 'Limpar'
    });


});

 </script>




 <script type="text/javascript">  

$(function() {
    $('#estado').change(function() {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "servicos/lista_cidade.php?id=" + id,
            dataType: "text",
            success: function(res) {
                $('#cidade').children('.cidades').remove();
                $('#cidade').append(res);
                $('#cidade').removeAttr('disabled').focus();
            }
        });
    });

    $('#estado02').change(function() {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "servicos/lista_cidade.php?id=" + id,
            dataType: "text",
            success: function(res) {
                $('#cidade02').children('.cidades').remove();
                $('#cidade02').append(res);
                $('#cidade02').removeAttr('disabled').focus();
            }
        });
    });

    $('#estado03').change(function() {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "servicos/lista_cidade.php?id=" + id,
            dataType: "text",
            success: function(res) {
                $('#cidade03').children('.cidades').remove();
                $('#cidade03').append(res);
                $('#cidade03').removeAttr('disabled').focus();
            }
        });
    });

    $('#estado04').change(function() {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "servicos/lista_cidade.php?id=" + id,
            dataType: "text",
            success: function(res) {
                $('#cidade04').children('.cidades').remove();
                $('#cidade04').append(res);
                $('#cidade04').removeAttr('disabled').focus();
            }
        });
    });

    $('#estado05').change(function() {
        var id = $(this).val();
        $.ajax({
            type: "POST",
            url: "servicos/lista_cidade.php?id=" + id,
            dataType: "text",
            success: function(res) {
                $('#cidade05').children('.cidades').remove();
                $('#cidade05').append(res);
                $('#cidade05').removeAttr('disabled').focus();
            }
        });
    });

    
    $('#sele_servico').change(function(){
        if($('#sele_servico').val() == "Casamento"){
          
           $("#sele_orcamento option[value='1']").remove();
        }
        else if($("#sele_orcamento option[value='1']").val() != null){
          
        }else{
          
          $("#sele_orcamento option[value='0']").after("<option value='1'>R$100,00 a R$1000,00</option>");
        }
    });


    $('#frm_cad_cli').submit(function(event) {
        var cli_email = $('#cad_email_cli').val();
        var cli_senha = $('#cad_senha_cli').val();
        var cli_senhaConf = $('#cad_confsenha_cli').val();
        var cli_nome = $('#cad_nome_cli').val();
        var cli_tel = $('#tel').val();
        var cli_cel = $('#cel').val();
        if (cli_email != " " && cli_senha != " " && cli_senhaConf != " " && cli_nome != " ") {
            if (!ValidarEmail(cli_email)) {
                alert('Por-favor digite seu email corretamente');
                event.preventDefault();
            }
            if (cli_senha != cli_senhaConf) {
                alert('A senha e a confirmação de senha tem que ser iguais');
                event.preventDefault();
            }
            if (!(cli_tel != '' || cli_cel != '')) {
                alert('Por favor digite o telefone ou celular para contato');
                event.preventDefault();
            }
        } else {
            alert('Preencha os campos obrigatórios');
        }
    });

    function ValidarEmail(email) {
        var emailCheck = email;
        var ExRegEmail = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}/;
        if (!((emailCheck.match(ExRegEmail)) && (emailCheck != ""))) {
            alert('Email Inválido');
            return false;
        } else {
            return true;
        }
    }
});

</script>



<script type="text/javascript"> 

 $(function() {


    $('#frm_soli_foto').submit(function(event) {
        var cli_email     = $('#cad_email_cli').val();        
        var cli_nome      = $('#cad_nome_cli').val();
        var cli_data      = $('#data').val();
        var cli_cel       = $('#cel').val();
        var cli_servico   = $("#sele_servico").val();
        var cli_orcamento = $("#sele_orcamento").val();
        var cli_estado    = $("#estado").val();
        var cli_cidade    = $("#cidade").val();
        /*  var cli_pedido = $("input[name='Pedido[]']:checked").val(); */

        


        if(cli_email == " " || cli_email == '' || cli_email == null){
            alert('Por favor digite o seu email!');
            event.preventDefault();
        }else if(cli_servico == " "){
            alert('Por favor selecione o tipo de serviço que você gostaria de contratar!');
            event.preventDefault();
        }else if(cli_estado == ""){
            alert('Por favor selecione o seu estado!');
            event.preventDefault();
        }else if(cli_cidade == ""){
            alert('Por favor selecione a sua cidade!');
            event.preventDefault();
        }else if(cli_nome == " " || cli_nome == "" || cli_nome == null){
            alert('Por favor digite o seu nome!');
            event.preventDefault();
        }else if(cli_orcamento == 0){
            alert('Por favor selecione o seu orçamento!');
            event.preventDefault();
        }else if(cli_data == " " || cli_data == ''){
           /* alert('Por favor digite a data do evento!');
              event.preventDefault(); */
        }
        
    });


    

    function ValidaData(data) {
        var dataCheck = data;
        var RegExPatternData = /^((((0?[1-9]|[12]\d|3[01])[\.\-\/](0?[13578]|1[02])      [\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|[12]\d|30)[\.\-\/](0?[13456789]|1[012])[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|((0?[1-9]|1\d|2[0-8])[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?\d{2}))|(29[\.\-\/]0?2[\.\-\/]((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00)))|(((0[1-9]|[12]\d|3[01])(0[13578]|1[02])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|[12]\d|30)(0[13456789]|1[012])((1[6-9]|[2-9]\d)?\d{2}))|((0[1-9]|1\d|2[0-8])02((1[6-9]|[2-9]\d)?\d{2}))|(2902((1[6-9]|[2-9]\d)?(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00)|00))))$/;
        if (!((dataCheck.match(RegExPatternData)) && (dataCheck != ''))) {
            alert('Data Inválida');
            return false;
        } else {
            return true;
        }
    }

    function ValidaHora(hora) {
        horaCheck = hora;
        var RegExPatternHora = /^([0-1][0-9]|2[0-3]):[0-5][0-9]$/;
        if (!((horaCheck.match(RegExPatternHora)) && (horaCheck != ''))) {
            alert('Hora Inválida');
            return false;
        } else {
            return true;
        }
    }
});

</script>



<style type="text/css"> 

 input[type='radio'] {
     -webkit-appearance: radio;
     -webkit-border-radius: 0;
 }
 input[type='checkbox'] {
     -webkit-appearance: checkbox;
     -webkit-border-radius: 0;
 }
 .ui-state-default,
 .ui-widget-content .ui-state-default,
 .ui-widget-header .ui-state-default {
     border: 1px solid #ccc;
     color: #084E43;
     font-weight: bold;
 }
 .ui-widget-header {
     background: #009B82;
     border: 1px solid #00816C;
 }
 .ui-state-active,
 .ui-widget-content .ui-state-active,
 .ui-widget-header .ui-state-active {
     background: #009B82;
     border: 1px solid #3AEACF;
     color: #FFE587;
     font-weight: bold;
 }
 .ui-state-hover,
 .ui-widget-content .ui-state-hover,
 .ui-widget-header .ui-state-hover,
 .ui-state-focus,
 .ui-widget-content .ui-state-focus,
 .ui-widget-header .ui-state-focus {
     background: #BCFFF4;
     border: 1px solid #3284D0;
     color: #CB9F00;
     font-weight: bold;
 }
 #estado {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }

 #estado02 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade02 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade02:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }



#estado03 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade03 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade03:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }


 #estado04 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade04 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade04:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }



 #estado05 {
     /*background-color: transparent; */
     
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 100%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade05 {
     -webkit-appearance: none;
     -moz-appearance: none;
     text-indent: 1px;
     text-overflow: "";
     border: none;
     width: 90%;
     background-image: url('imagem/downArrow.png');
     background-repeat: no-repeat;
     background-position: right center;
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
 }
 #cidade05:disabled {
     background-color: #FFFFFF;
 }
 input:required {
     background-color: #FFFFFF;
 }
 input[type="email"]:invalid {
     box-shadow: none;
 }

 #sele_orcamento{
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    border: none;
    width: 90%;
    background-image: url('imagem/downArrow.png');
    background-repeat: no-repeat;
    background-position: right center;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
 }

 #sele_servico{
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    border: none;
    width: 90%;
    background-image: url('imagem/downArrow.png');
    background-repeat: no-repeat;
    background-position: right center;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
 }


</style>


 </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="1025"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox" id="page"><!-- column -->
    <div class="browser_width colelem shared_content" id="u479134-bw" data-content-guid="u479134-bw_content">
     <div id="u479134"><!-- group -->
      <div class="clearfix" id="u479134_align_to_page">
       <a class="nonblock nontext museBGSize grpelem shared_content" id="u479126" href="http://macromia.com.br/index.php" data-content-guid="u479126_content"><!-- simple frame --></a>
       <a class="nonblock nontext clearfix grpelem" id="u479109-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
       <a class="nonblock nontext clearfix grpelem" id="u479128-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
      </div>
     </div>
    </div>
    <!-- m_editable region-id="editable-static-tag-U466333-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u466333-4" data-muse-uid="U466333" data-muse-type="txt_frame" data-content-guid="u466333-4_content"><!-- content -->
     <h1>FOTOGRAFIA PROFISSIONAL</h1>
    </div>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U470490-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <div class="clearfix colelem shared_content" id="u470490-6" data-muse-uid="U470490" data-muse-type="txt_frame" data-content-guid="u470490-6_content"><!-- content -->
     <h2 id="u470490-2">Mais de 400 pessoas acessam o macromia por mês!</h2>
     <h2 id="u470490-4">Solicite um orçamento gratuito e receba até 5 propostas de fotógrafos. Aproveite!</h2>
    </div>
    <!-- /m_editable -->
    <div class="clearfix colelem shared_content" id="pu466330" data-content-guid="pu466330_content"><!-- group -->
     <div class="browser_width grpelem" id="u466330-bw">
      <div id="u466330"><!-- simple frame --></div>
     </div>
     <div class="grpelem" id="u466331"><!-- custom html -->
      <form method="POST" action="helper/path_cad_cli.php" id="frm_soli_foto" sytle="background-color: red;">
             <input type="hidden" value="<?= $val_email ?>" id="cli_email" name="cli_email_pedi"/>
     </div>
     <!-- m_editable region-id="editable-static-tag-U466332-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466332-4" data-muse-uid="U466332" data-muse-type="txt_frame"><!-- content -->
      <h2>PASSO 3 - CONTATO</h2>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466334-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466334-4" data-muse-uid="U466334" data-muse-type="txt_frame"><!-- content -->
      <p>PASSO 1 - SERVIÇO</p>
     </div>
     <!-- /m_editable -->
     <div class="rounded-corners clearfix grpelem" id="u466335"><!-- group -->
      <div class="grpelem" id="u470866"><!-- custom html -->
       <input type="text" id="tel" name="txt_tel_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466336"><!-- group -->
      <div class="grpelem" id="u470861"><!-- custom html -->
       <input type="text" id="cel" name="txt_cel_cli" style="background-color: transparent; bfont-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466337"><!-- group -->
      <div class="grpelem" id="u466348"><!-- custom html -->
       <input type="text" id="cad_nome_cli" name="txt_nome_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466338"><!-- group -->
      <div class="grpelem" id="u466349"><!-- custom html -->
       <select name="sele_servico" id= "sele_servico" style="background-color: transparent; border: none; width:100%;"  id="servico">
         <option value=" ">Selecione o serviços</option>
                            <option value="Casamento">Casamento</option>                            
                            <option value="Festa de aniversario">Festa de Aniversário</option>
                            <option value="Eventos Sociais">Eventos Sociais</option>
                            <option value="Festas Infantis">Festas Infantis</option>
                            <option disabled>-----------------</option>
                            <option value="Infantil">Infantil</option>
                            <option value="Gestante">Gestante</option>
                            <option value="Casal">Casal</option>2
                            <option value="Banda">Banda</option>
                            <option disabled>-----------------</option>
                            <option value="Institucional">Institucional</option>
                            <option value="Produtos">Produtos</option>
                            <option value="Moda">Moda</option>
                            <option value="Modelos">Modelos</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Industrial">Industrial</option>
                            <option disabled>-----------------</option>
                            <option value="Artístico">Artístico</option>
                            <option value="Nú Artístico">Nú Artístico</option>
                            <option disabled>-----------------</option>
                            <option value="Médico">Médico</option>
                            <option value="Odontológico">Odontológico</option>
                            <option disabled>-----------------</option>
                            <option value="Paisagem">Paisagem</option>
                            <option value="Vida Submarina">Vida Submarina</option>
                            <option value="Animais">Animais</option>
                            <option value="Aéreas">Aéreas</option>
                            <option disabled>-----------------</option>
                            <option value="Arquitetura">Arquitetura</option>
                            <option value="Esporte">Esporte</option>
                            <option value="Jornalístico">Jornalístico</option>
                            <option value="Documentarista">Documentarista</option>

        </select>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466339"><!-- group -->
      <div class="grpelem" id="u466350"><!-- custom html -->
       <select name="sele_orcamento" id="sele_orcamento" style="background-color: transparent; border: none; width:100%;"  id="servico">
         <option value="0">Verba disponível</option>
                            <option value="1">R$100,00 a R$1000,00</option>
                            <option value="2">R$1.000,00 a R$2.000,00</option>
                            <option value="3">R$2.000,00 a R$5.000,00</option>
                            <option value="4">R$5.000,00 a R$10.000,00</option>
                            <option value="5">Acima de R$10.000,00</option>
                            </select>
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466340"><!-- group -->
      <div class="grpelem" id="u470871"><!-- custom html -->
       <input type="email" id="cad_email_cli" name="txt_email_cli" style="background-color: transparent; font-size: 100%; border: none; width: 100%; height: 22px" maxlength="50"/> 
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U466341-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466341-4" data-muse-uid="U466341" data-muse-type="txt_frame"><!-- content -->
      <p>TELEFONE FIXO</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466342-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466342-4" data-muse-uid="U466342" data-muse-type="txt_frame"><!-- content -->
      <p>CELULAR / WHATSAPP</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466344-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466344-4" data-muse-uid="U466344" data-muse-type="txt_frame"><!-- content -->
      <p>EMAIL</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466345-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466345-4" data-muse-uid="U466345" data-muse-type="txt_frame"><!-- content -->
      <p>NOME</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466346-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466346-4" data-muse-uid="U466346" data-muse-type="txt_frame"><!-- content -->
      <p>SELECIONE O TIPO SERVIÇO</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466347-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466347-4" data-muse-uid="U466347" data-muse-type="txt_frame"><!-- content -->
      <p>DIGA QUANTO VOCÊ TEM DISPONÍVEL</p>
     </div>
     <!-- /m_editable -->
     <div class="rounded-corners clearfix grpelem" id="u466361"><!-- group -->
      <div class="grpelem" id="u466355"><!-- custom html -->
       <input type="text" id="data" name="txt_data" style="background-color: transparent; border: none; width:100%" maxlength="10" placeholder="dd/mm/aaaa"/> 
      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466366"><!-- group -->
      <div class="grpelem" id="u466362"><!-- custom html -->
       
<select id="estado" name="sele_estado" style="background-color: transparent; border: none; width:100%;"  id="estado">
           
             <option value="">Estado</option>
             <?php $sql = mysqli_query($conexao,"select * from estado");
                   header('Content-type: text/html; charset=utf-8');
                   while ($row = mysqli_fetch_array($sql)) {
                      $id   = utf8_encode($row['id']);
                      $nome = utf8_encode($row['nome']);
                      $uf   = utf8_encode($row['uf']);
                   
             ?>
             <option value="<?php echo $id; ?>"><?php echo $uf; ?></option>
             <?php } ?>
           </select>

      </div>
     </div>
     <div class="rounded-corners clearfix grpelem" id="u466358"><!-- group -->
      <div class="grpelem" id="u466356"><!-- custom html -->
       <select id="cidade" name="sele_cidade" disabled style="background-color: transparent; border: none; width:100%;">
                <option value="">Cidade</option>

              </select>
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U466364-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="rounded-corners clearfix grpelem" id="u466364-4" data-muse-uid="U466364" data-muse-type="txt_frame"><!-- content -->
      <p>CONFIRMAR PEDIDO</p>
     </div>
     <!-- /m_editable -->
     <div class="rounded-corners clearfix grpelem" id="u466367"><!-- group -->
      <div class="grpelem" id="u466369"><!-- custom html -->
       <textarea name="txt_area_local"  id="area_local" style="resize: none; width: 100%; height: 100%; background-color:transparent; border: none;" placeholder="Ponto de referência ou outra obervação."></textarea>
      </div>
     </div>
     <!-- m_editable region-id="editable-static-tag-U466363-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466363-4" data-muse-uid="U466363" data-muse-type="txt_frame"><!-- content -->
      <p>OBSERVAÇÃO DO LOCAL</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466357-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466357-4" data-muse-uid="U466357" data-muse-type="txt_frame"><!-- content -->
      <p>DATA (opcional)</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466365-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466365-4" data-muse-uid="U466365" data-muse-type="txt_frame"><!-- content -->
      <p>ESTADO</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466359-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466359-4" data-muse-uid="U466359" data-muse-type="txt_frame"><!-- content -->
      <p>CIDADE</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466368-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466368-4" data-muse-uid="U466368" data-muse-type="txt_frame"><!-- content -->
      <p>PASSO 2 - LOCAL</p>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466370-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466370-4" data-muse-uid="U466370" data-muse-type="txt_frame"><!-- content -->
      <h2>Você pode receber os orçamentos por whatsapp, telefone ou email.</h2>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466371-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466371-4" data-muse-uid="U466371" data-muse-type="txt_frame"><!-- content -->
      <h2>Escolha o serviço e diga quanto você tem disponível para pagar os fotógrafos</h2>
     </div>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U466372-BP_infinity" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <div class="clearfix grpelem" id="u466372-4" data-muse-uid="U466372" data-muse-type="txt_frame"><!-- content -->
      <h2>Quando e onde você precisará de um profissional?</h2>
     </div>
     <!-- /m_editable -->
     <div class="grpelem" id="u466360"><!-- custom html -->
      <input type="submit" value="" style="background-color: transparent; border: none; width: 100%; height: 26px; cursor: pointer;"/>

     </div>
    </div>
    <div class="verticalspacer" data-offset-top="1183" data-content-above-spacer="1182" data-content-below-spacer="170"></div>
    <div class="clearfix colelem shared_content" id="pu478673" data-content-guid="pu478673_content"><!-- group -->
     <div class="browser_width grpelem" id="u478673-bw">
      <div id="u478673"><!-- column -->
       <div class="clearfix" id="u478673_align_to_page">
        <div class="colelem shared_content" id="u479135" data-content-guid="u479135_content"><!-- custom html -->
         <input type="hidden" value="<?= (isset($_GET['errAut']))? $_GET['errAut'] : ' '; ?>" id="val_warnnig" />
  <input type="hidden" value="<?= $val_email ?>" id="cli_email" />
  <input type="hidden" value="<?= $val_senha ?>" id="cli_senha" />
  <input type="hidden" value="<?= $val_foto_email ?>" id="foto_email" />     
  <input type="hidden" value="<?= $val_foto_senha ?>" id="foto_senha" />
  <input type="hidden" value="<?= $val_foto_ident ?>" id="foto_ident" />
        </div>
        <div class="museBGSize colelem shared_content" id="u478675" data-content-guid="u478675_content"><!-- simple frame --></div>
       </div>
      </div>
     </div>
     <div class="browser_width grpelem" id="u478321-4-bw">
      <a class="nonblock nontext clearfix shared_content" id="u478321-4" href="http://mazy.com.br/" data-content-guid="u478321-4_content"><!-- content --><p>(11) 3742-0262 | © MACROMIA. DESENVOLVIDO POR AGÊNCIA MAZY</p></a>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_1024" data-min-width="769" data-max-width="1024"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <span class="browser_width colelem placeholder" data-placeholder-for="u479134-bw_content"><!-- placeholder node --></span>
    <!-- m_editable region-id="editable-static-tag-U466333-BP_1024" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u466333-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U470490-BP_1024" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u470490-6_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <span class="clearfix colelem placeholder" data-placeholder-for="pu466330_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1184" data-content-above-spacer="1183" data-content-below-spacer="171"></div>
    <span class="clearfix colelem placeholder" data-placeholder-for="pu478673_content"><!-- placeholder node --></span>
   </div>
  </div>
  <div class="breakpoint" id="bp_768" data-min-width="481" data-max-width="768"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="browser_width colelem temp_no_id" data-orig-id="u479134-bw">
     <div class="temp_no_id" data-orig-id="u479134"><!-- group -->
      <div class="clearfix temp_no_id" data-orig-id="u479134_align_to_page">
       <span class="nonblock nontext museBGSize grpelem placeholder" data-placeholder-for="u479126_content"><!-- placeholder node --></span>
       <a class="nonblock nontext clearfix grpelem" id="u479114-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
       <a class="nonblock nontext clearfix grpelem" id="u479132-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
      </div>
     </div>
    </div>
    <!-- m_editable region-id="editable-static-tag-U466333-BP_768" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u466333-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U470490-BP_768" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u470490-6_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <span class="clearfix colelem placeholder" data-placeholder-for="pu466330_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1202" data-content-above-spacer="1201" data-content-below-spacer="186"></div>
    <div class="browser_width colelem temp_no_id" data-orig-id="u478673-bw">
     <div class="temp_no_id" data-orig-id="u478673"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u478673_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u479135_content"><!-- placeholder node --></span>
       <span class="museBGSize colelem placeholder" data-placeholder-for="u478675_content"><!-- placeholder node --></span>
       <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u478321-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_480" data-min-width="321" data-max-width="480"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="browser_width colelem shared_content" id="u479136-bw" data-content-guid="u479136-bw_content">
     <div id="u479136"><!-- group -->
      <div class="clearfix" id="u479136_align_to_page">
       <span class="nonblock nontext museBGSize grpelem placeholder" data-placeholder-for="u479126_content"><!-- placeholder node --></span>
       <a class="nonblock nontext clearfix grpelem" id="u479380-4" href="http://macromia.com.br/como-funciona.php"><!-- content --><p>COMO FUNCIONA?</p></a>
       <a class="nonblock nontext clearfix grpelem" id="u479381-4" href="http://macromia.com.br/contato.php"><!-- content --><p>FALE CONOSCO</p></a>
      </div>
     </div>
    </div>
    <!-- m_editable region-id="editable-static-tag-U466333-BP_480" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u466333-4_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <!-- m_editable region-id="editable-static-tag-U470490-BP_480" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
    <span class="clearfix colelem placeholder" data-placeholder-for="u470490-6_content"><!-- placeholder node --></span>
    <!-- /m_editable -->
    <span class="clearfix colelem placeholder" data-placeholder-for="pu466330_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="1218" data-content-above-spacer="1217" data-content-below-spacer="186"></div>
    <div class="browser_width colelem temp_no_id" data-orig-id="u478673-bw">
     <div class="temp_no_id" data-orig-id="u478673"><!-- column -->
      <div class="clearfix temp_no_id" data-orig-id="u478673_align_to_page">
       <span class="colelem placeholder" data-placeholder-for="u479135_content"><!-- placeholder node --></span>
       <span class="museBGSize colelem placeholder" data-placeholder-for="u478675_content"><!-- placeholder node --></span>
       <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u478321-4_content"><!-- placeholder node --></span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="breakpoint" id="bp_320" data-max-width="320"><!-- responsive breakpoint node -->
   <div class="clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
     <span class="browser_width colelem placeholder" data-placeholder-for="u479136-bw_content"><!-- placeholder node --></span>
     <!-- m_editable region-id="editable-static-tag-U466333-BP_320" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u466333-4_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <!-- m_editable region-id="editable-static-tag-U470490-BP_320" template="solicitar-fotografo.html" data-type="html" data-ice-options="disableImageResize,link" -->
     <span class="clearfix colelem placeholder" data-placeholder-for="u470490-6_content"><!-- placeholder node --></span>
     <!-- /m_editable -->
     <span class="clearfix colelem placeholder" data-placeholder-for="pu466330_content"><!-- placeholder node --></span>
     <div class="verticalspacer" data-offset-top="1191" data-content-above-spacer="1191" data-content-below-spacer="185"></div>
     <div class="browser_width colelem temp_no_id" data-orig-id="u478673-bw">
      <div class="temp_no_id" data-orig-id="u478673"><!-- column -->
       <div class="clearfix temp_no_id" data-orig-id="u478673_align_to_page">
        <span class="colelem placeholder" data-placeholder-for="u479135_content"><!-- placeholder node --></span>
        <span class="museBGSize colelem placeholder" data-placeholder-for="u478675_content"><!-- placeholder node --></span>
        <span class="nonblock nontext clearfix colelem placeholder" data-placeholder-for="u478321-4_content"><!-- placeholder node --></span>
       </div>
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
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.watch","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.fullPage('#page');/* 100% height page */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=36584860" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>
