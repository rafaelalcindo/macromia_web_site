<?php

	function PedidosComprado($nome, $email, $telefone, $celular, $codigo,$data, $hora, $servico, $vagas, $numero, $cep, $endereco, $val_min, $val_max, $estado, $cidade, $id_foto, $id_lista, $pg,$credi_val, $complementar){

		$hora = substr($hora,0,5);


    echo "
      <div class='clearfix colelem' id='u364001' style='margin-top: 3%; margin-bottom: 1%;'><!-- group -->
      <input type='hidden' value=".$codigo." id='id_evento'/>
      <input type='hidden' value=".$pg." />
       <div class='rounded-corners grpelem' id='u14530'><!-- simple frame --></div>
       <div class='rounded-corners grpelem' id='u14675'><!-- simple frame --></div>
       <div class='grpelem' id='u14729'><!-- simple frame --></div>
       <div class='clearfix grpelem' id='u363181'><!-- column -->
        <div class='clearfix colelem' id='pu14684-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U14684-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14684-4' data-muse-uid='U14684' data-muse-type='txt_frame' data-content-guid='u14684-4_content'><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14663-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14663-4' data-muse-uid='U14663' data-muse-type='txt_frame' data-content-guid='u14663-4_content'><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14693-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14693-4' data-muse-uid='U14693' data-muse-type='txt_frame' data-content-guid='u14693-4_content'><!-- content -->
          <p>HORÁRIO DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='pu14687-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U14687-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14687-4' data-muse-uid='U14687' data-muse-type='txt_frame' data-content-guid='u14687-4_content'><!-- content -->
          <p>".$data."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14666-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14666-4' data-muse-uid='U14666' data-muse-type='txt_frame' data-content-guid='u14666-4_content'><!-- content -->
          <p>R$ ".$val_min." a R$ ".$val_max."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14690-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14690-4' data-muse-uid='U14690' data-muse-type='txt_frame' data-content-guid='u14690-4_content'><!-- content -->
          <p>".$hora."</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='u14639'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U14642-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14642-4' data-muse-uid='U14642' data-muse-type='txt_frame' data-content-guid='u14642-4_content'><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14648-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14648-4' data-muse-uid='U14648' data-muse-type='txt_frame' data-content-guid='u14648-4_content'><!-- content -->
          <p>OBSERVAÇÃO DO EVENTO</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14732-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14732-4' data-muse-uid='U14732' data-muse-type='txt_frame' data-content-guid='u14732-4_content'><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='rounded-corners clearfix colelem' id='u14401'><!-- group -->
         <div class='clearfix grpelem' id='pu14383-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U14383-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14383-4' data-muse-uid='U14383' data-muse-type='txt_frame' data-content-guid='u14383-4_content'><!-- content -->
           <p><span id='u365456'>NOME:</span>   " .utf8_encode($nome)."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14386-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14386-5' data-muse-uid='U14386' data-muse-type='txt_frame' data-content-guid='u14386-5_content'><!-- content -->
           <p><span id='u14386'>TELEFONE:</span> ".$telefone."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14389-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14389-5' data-muse-uid='U14389' data-muse-type='txt_frame' data-content-guid='u14389-5_content'><!-- content -->
           <p><span id='u14389'>CELULAR:</span> ".$celular."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14392-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14392-5' data-muse-uid='U14392' data-muse-type='txt_frame' data-content-guid='u14392-5_content'><!-- content -->
           <p><span id='u14392'>EMAIL:</span> ".$email."</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix grpelem' id='pu14413-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U14413-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14413-4' data-muse-uid='U14413' data-muse-type='txt_frame' data-content-guid='u14413-4_content'><!-- content -->
           <p>".$complementar."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U15438-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u15438-5' data-muse-uid='U15438' data-muse-type='txt_frame' data-content-guid='u15438-5_content'><!-- content -->
           <p><span id='u15438'>ENDEREÇO:</span> ".$endereco.", ".$numero."</p>
          </div>
          <!-- /m_editable -->
          <div class='clearfix colelem shared_content' id='pu364015-5' data-content-guid='pu364015-5_content'><!-- group -->
           <!-- m_editable region-id='editable-static-tag-U364015-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u364015-5' style='width: 85px;' data-muse-uid='U364015' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u364015'>ESTADO:</span> ".utf8_encode($estado)."</p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U364676-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u364676-5' data-muse-uid='U364676' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u364676'>CIDADE:</span>".utf8_encode($cidade)."</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class='clearfix grpelem shared_content' id='u362909' data-content-guid='u362909_content'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U14472-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u14472-4' data-muse-uid='U14472' data-muse-type='txt_frame'><!-- content -->
           <p>".$vagas."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14779-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u14779-4' data-muse-uid='U14779' data-muse-type='txt_frame'><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14404-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           
              <div class='rounded-corners clearfix colelem' id='u14404-4' data-muse-uid='U14404' data-muse-type='txt_frame'><!-- content -->
               <p>CONTATO ADQUIRIDO!</p>
              </div>
         
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14478-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u14478-5' data-muse-uid='U14478' data-muse-type='txt_frame'><!-- content -->
           <p id='u14478-3'><span id='u14478'>VALOR DO CONTATO:</span><span id='u14478-2'> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class='grpelem' id='u14484'><!-- simple frame --></div>
       <div class='grpelem' id='u14487'><!-- simple frame --></div>
      </div>";
		

	}






















	function MostrarPedidos($estado, $cidade, $id_foto,$data,$codigo,$hora,$val_min, $val_max,$creditos,$credi_foto,$vagas,$pg,$complementar){

		$hora = substr($hora,0,5);

    echo "
      <div class='clearfix colelem' id='u364001' style='margin-top: 3%; margin-bottom: 1%;'><!-- group -->
      <input type='hidden' value=".$codigo." id='id_evento'/>
      <input type='hidden' value=".$pg." />
       <div class='rounded-corners grpelem' id='u14530'><!-- simple frame --></div>
       <div class='rounded-corners grpelem' id='u14675'><!-- simple frame --></div>
       <div class='grpelem' id='u14729'><!-- simple frame --></div>
       <div class='clearfix grpelem' id='u363181'><!-- column -->
        <div class='clearfix colelem' id='pu14684-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U14684-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14684-4' data-muse-uid='U14684' data-muse-type='txt_frame' data-content-guid='u14684-4_content'><!-- content -->
          <p>DATA DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14663-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14663-4' data-muse-uid='U14663' data-muse-type='txt_frame' data-content-guid='u14663-4_content'><!-- content -->
          <p>ORÇAMENTO:</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14693-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14693-4' data-muse-uid='U14693' data-muse-type='txt_frame' data-content-guid='u14693-4_content'><!-- content -->
          <p>HORÁRIO DO EVENTO:</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='pu14687-4'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U14687-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14687-4' data-muse-uid='U14687' data-muse-type='txt_frame' data-content-guid='u14687-4_content'><!-- content -->
          <p>".$data."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14666-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14666-4' data-muse-uid='U14666' data-muse-type='txt_frame' data-content-guid='u14666-4_content'><!-- content -->
          <p>R$ ".$val_min." a R$ ".$val_max."</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14690-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14690-4' data-muse-uid='U14690' data-muse-type='txt_frame' data-content-guid='u14690-4_content'><!-- content -->
          <p>".$hora."</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='clearfix colelem' id='u14639'><!-- group -->
         <!-- m_editable region-id='editable-static-tag-U14642-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14642-4' data-muse-uid='U14642' data-muse-type='txt_frame' data-content-guid='u14642-4_content'><!-- content -->
          <p>DADOS PESSOAIS</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14648-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14648-4' data-muse-uid='U14648' data-muse-type='txt_frame' data-content-guid='u14648-4_content'><!-- content -->
          <p>OBSERVAÇÃO DO EVENTO</p>
         </div>
         <!-- /m_editable -->
         <!-- m_editable region-id='editable-static-tag-U14732-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
         <div class='clearfix grpelem shared_content' id='u14732-4' data-muse-uid='U14732' data-muse-type='txt_frame' data-content-guid='u14732-4_content'><!-- content -->
          <p>OFERTA</p>
         </div>
         <!-- /m_editable -->
        </div>
        <div class='rounded-corners clearfix colelem' id='u14401'><!-- group -->
         <div class='clearfix grpelem' id='pu14383-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U14383-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14383-4' data-muse-uid='U14383' data-muse-type='txt_frame' data-content-guid='u14383-4_content'><!-- content -->
           <p><span id='u365456'>NOME:</span>  XXXXX XXXXXXX XXXXX XX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14386-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14386-5' data-muse-uid='U14386' data-muse-type='txt_frame' data-content-guid='u14386-5_content'><!-- content -->
           <p><span id='u14386'>TELEFONE:</span> 11 XXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14389-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14389-5' data-muse-uid='U14389' data-muse-type='txt_frame' data-content-guid='u14389-5_content'><!-- content -->
           <p><span id='u14389'>CELULAR:</span> 11 XXXXX-XXXX</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14392-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14392-5' data-muse-uid='U14392' data-muse-type='txt_frame' data-content-guid='u14392-5_content'><!-- content -->
           <p><span id='u14392'>EMAIL:</span> XXXXX@XXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
         </div>
         <div class='clearfix grpelem' id='pu14413-4'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U14413-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u14413-4' data-muse-uid='U14413' data-muse-type='txt_frame' data-content-guid='u14413-4_content'><!-- content -->
           <p>".$complementar."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U15438-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem shared_content' id='u15438-5' data-muse-uid='U15438' data-muse-type='txt_frame' data-content-guid='u15438-5_content'><!-- content -->
           <p><span id='u15438'>ENDEREÇO:</span> RUA XXXXXXXXXXXXXXXX</p>
          </div>
          <!-- /m_editable -->
          <div class='clearfix colelem shared_content' id='pu364015-5' data-content-guid='pu364015-5_content'><!-- group -->
           <!-- m_editable region-id='editable-static-tag-U364015-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u364015-5' style='width: 85px;' data-muse-uid='U364015' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u364015'>ESTADO:</span> ".utf8_encode($estado)."  </p>
           </div>
           <!-- /m_editable -->
           <!-- m_editable region-id='editable-static-tag-U364676-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
           <div class='clearfix grpelem' id='u364676-5' data-muse-uid='U364676' data-muse-type='txt_frame'><!-- content -->
            <p><span id='u364676'>CIDADE:</span>".utf8_encode($cidade)."</p>
           </div>
           <!-- /m_editable -->
          </div>
         </div>
         <div class='clearfix grpelem shared_content' id='u362909' data-content-guid='u362909_content'><!-- column -->
          <!-- m_editable region-id='editable-static-tag-U14472-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u14472-4' data-muse-uid='U14472' data-muse-type='txt_frame'><!-- content -->
           <p>".$vagas."</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14779-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u14779-4' data-muse-uid='U14779' data-muse-type='txt_frame'><!-- content -->
           <p>VAGAS RESTANTES</p>
          </div>
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14404-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->";

          if($vagas > 0){
            echo "<div class='rounded-corners clearfix colelem' id='u14404-4' data-muse-uid='U14404' style='cursor: pointer;' onclick='comprar_listagem(".$codigo.", ".$creditos.", ".$vagas.", ".$pg.")' data-muse-type='txt_frame'><!-- content -->
                 <p>COMPRAR CONTATO</p>
                </div>";
          }else{
            echo "
              <div class='rounded-corners clearfix colelem' id='u14404-4' data-muse-uid='U14404' data-muse-type='txt_frame'><!-- content -->
               <p>VAGAS ESGOTADAS!</p>
              </div>";
          }
          

          echo "
          <!-- /m_editable -->
          <!-- m_editable region-id='editable-static-tag-U14478-BP_infinity' template='filtro2.html' data-type='html' data-ice-options='disableImageResize,link' -->
          <div class='clearfix colelem' id='u14478-5' data-muse-uid='U14478' data-muse-type='txt_frame'><!-- content -->
           <p id='u14478-3'><span id='u14478'>VALOR DO CONTATO:</span><span id='u14478-2'> GRÁTIS</span></p>
          </div>
          <!-- /m_editable -->
         </div>
        </div>
       </div>
       <div class='grpelem' id='u14484'><!-- simple frame --></div>
       <div class='grpelem' id='u14487'><!-- simple frame --></div>
      </div>  ";
		

	}