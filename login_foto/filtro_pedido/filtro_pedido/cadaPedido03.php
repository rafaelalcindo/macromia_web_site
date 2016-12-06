<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $hora, $servico, $vagas, $numero, $cep, $endereco, $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		$hora = substr($hora,0,5);

     echo "
      <div class='clearfix colelem' id='u366292' style='margin-top: 6%; margin-bottom: 5%;'><!-- group -->
          <input type='hidden' value=".$codigo." id='id_evento'/>
          <input type='hidden' value=".$pg." />
          <div class='clearfix grpelem' id='u366297'><!-- column -->
           <div class='rounded-corners clearfix colelem' id='u366311'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366316-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366316-4' data-muse-uid='U366316' data-muse-type='txt_frame'><!-- content -->
             <p>DATA DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366324-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366324-4' data-muse-uid='U366324' data-muse-type='txt_frame'><!-- content -->
             <p>".$data."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366314'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366303-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366303-4' data-muse-uid='U366303' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366320-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366320-4' data-muse-uid='U366320' data-muse-type='txt_frame'><!-- content -->
             <p>R$ ".$val_min." a R$ ".$val_max." </p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366313'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366325-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366325-4' data-muse-uid='U366325' data-muse-type='txt_frame'><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366301-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366301-4' data-muse-uid='U366301' data-muse-type='txt_frame'><!-- content -->
             <p>".$hora."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u366319'><!-- column -->
            <div class='clearfix colelem' id='u366322'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366321-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366321-4' data-muse-uid='U366321' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366312-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366312-4' data-muse-uid='U366312' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u365456'>NOME:</span> ".utf8_encode($nome)."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366317-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366317-5' data-muse-uid='U366317' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366317'>TELEFONE:</span> ".$telefone."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366315-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366315-5' data-muse-uid='U366315' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366315'>CELULAR:</span> ".$celular."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366304-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366304-5' data-muse-uid='U366304' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366304'>EMAIL:</span> ".$email."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u366305'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366299-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366299-4' data-muse-uid='U366299' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÃO DO EVENTO</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366300-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366300-4' data-muse-uid='U366300' data-muse-type='txt_frame'><!-- content -->
             <p>".$complementar."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366326-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366326-5' data-muse-uid='U366326' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366326'>ENDEREÇO:</span> ".$endereco.", ".$numero."</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu366302-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366302-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366302-5'  style='width: 85px;' data-muse-uid='U366302' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366302'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366298-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366298-5' data-muse-uid='U366298' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366298'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366318'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366323-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366323-4' data-muse-uid='U366323' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366306'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U366307-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366307-4' data-muse-uid='U366307' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366310-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366310-4' data-muse-uid='U366310' data-muse-type='txt_frame'><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366308-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->

            
            
              <div class='rounded-corners clearfix colelem' id='u366308-4' data-muse-uid='U366308' data-muse-type='txt_frame'><!-- content -->
              <p>CONTATO ADQUIRIDO</p>
             </div>
             
             

             
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366309-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366309-5' data-muse-uid='U366309' data-muse-type='txt_frame'><!-- content -->
              <p id='u366309-3'><span id='u366309'>VALOR DO CONTATO:</span><span id='u366309-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>";

}











function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$hora,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar){

		$hora = substr($hora,0,5);

    echo "
      <div class='clearfix colelem' id='u366292' style='margin-top: 3%; margin-bottom: 1%;'><!-- group -->
          <input type='hidden' value=".$codigo." id='id_evento'/>
          <input type='hidden' value=".$pg." />
          <div class='clearfix grpelem' id='u366297'><!-- column -->
           <div class='rounded-corners clearfix colelem' id='u366311'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366316-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366316-4' data-muse-uid='U366316' data-muse-type='txt_frame'><!-- content -->
             <p>DATA DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366324-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366324-4' data-muse-uid='U366324' data-muse-type='txt_frame'><!-- content -->
             <p>".$data."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366314'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366303-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366303-4' data-muse-uid='U366303' data-muse-type='txt_frame'><!-- content -->
             <p>ORÇAMENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366320-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366320-4' data-muse-uid='U366320' data-muse-type='txt_frame'><!-- content -->
             <p>R$ ".$val_min." a R$ ".$val_max." </p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='clearfix colelem' id='u366313'><!-- column -->
            <!-- m_editable region-id='editable-static-tag-U366325-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366325-4' data-muse-uid='U366325' data-muse-type='txt_frame'><!-- content -->
             <p>HORÁRIO DO EVENTO:</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366301-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366301-4' data-muse-uid='U366301' data-muse-type='txt_frame'><!-- content -->
             <p>".$hora."</p>
            </div>
            <!-- /m_editable -->
           </div>
           <div class='rounded-corners clearfix colelem' id='u366319'><!-- column -->
            <div class='clearfix colelem' id='u366322'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366321-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366321-4' data-muse-uid='U366321' data-muse-type='txt_frame'><!-- content -->
              <p>DADOS PESSOAIS</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366312-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366312-4' data-muse-uid='U366312' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u365456'>NOME:</span>  XXXXXXX XXXXXX XXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366317-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366317-5' data-muse-uid='U366317' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366317'>TELEFONE:</span> (XX)XXXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366315-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366315-5' data-muse-uid='U366315' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366315'>CELULAR:</span> (XX)XXXXXXXXXX</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366304-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366304-5' data-muse-uid='U366304' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366304'>EMAIL:</span> XXXXXXXXXX@XXXXX.XXXX</p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='u366305'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366299-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366299-4' data-muse-uid='U366299' data-muse-type='txt_frame'><!-- content -->
              <p>OBSERVAÇÃO DO EVENTO</p>
             </div>
             <!-- /m_editable -->
            </div>
            <!-- m_editable region-id='editable-static-tag-U366300-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366300-4' data-muse-uid='U366300' data-muse-type='txt_frame'><!-- content -->
             <p>".$complementar."</p>
            </div>
            <!-- /m_editable -->
            <!-- m_editable region-id='editable-static-tag-U366326-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
            <div class='clearfix colelem' id='u366326-5' data-muse-uid='U366326' data-muse-type='txt_frame'><!-- content -->
             <p><span id='u366326'>ENDEREÇO:</span> XXXXXXXXXXXXXXXXXXX  NUMERO: XXXXXXXX </p>
            </div>
            <!-- /m_editable -->
            <div class='clearfix colelem' id='pu366302-5'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366302-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366302-5' data-muse-uid='U366302' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366302'>ESTADO:</span> ".utf8_encode($estado)."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366298-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366298-5' data-muse-uid='U366298' data-muse-type='txt_frame'><!-- content -->
              <p><span id='u366298'>CIDADE:</span> ".utf8_encode($cidade)."</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366318'><!-- group -->
             <!-- m_editable region-id='editable-static-tag-U366323-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix grpelem' id='u366323-4' data-muse-uid='U366323' data-muse-type='txt_frame'><!-- content -->
              <p>OFERTA</p>
             </div>
             <!-- /m_editable -->
            </div>
            <div class='clearfix colelem' id='u366306'><!-- column -->
             <!-- m_editable region-id='editable-static-tag-U366307-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366307-4' data-muse-uid='U366307' data-muse-type='txt_frame'><!-- content -->
              <p>".$vagas."</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366310-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366310-4' data-muse-uid='U366310' data-muse-type='txt_frame'><!-- content -->
              <p>VAGAS RESTANTES</p>
             </div>
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366308-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->";

             if($vagas > 0){
              echo "<div class='rounded-corners clearfix colelem' id='u366308-4' data-muse-uid='U366308' style='cursor: pointer;' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' data-muse-type='txt_frame'><!-- content -->
                    <p>COMPRAR CONTATO</p>
                   </div>";
             }else{
              echo "<div class='rounded-corners clearfix colelem' id='u366308-4' data-muse-uid='U366308' data-muse-type='txt_frame'><!-- content -->
                    <p>VAGAS ESGOTADAS!</p>
                   </div>";
             }
             

             echo "
             <!-- /m_editable -->
             <!-- m_editable region-id='editable-static-tag-U366309-BP_768' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
             <div class='clearfix colelem' id='u366309-5' data-muse-uid='U366309' data-muse-type='txt_frame'><!-- content -->
              <p id='u366309-3'><span id='u366309'>VALOR DO CONTATO:</span><span id='u366309-2'> GRÁTIS</span></p>
             </div>
             <!-- /m_editable -->
            </div>
           </div>
          </div>
         </div>";



	}