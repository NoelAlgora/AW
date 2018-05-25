<div id="footer_wrapper">
   <div id="social_box">
      <div id="footer_content">
         <div class="social_email_wrapper">
            <div class="icons">
               <ul class="social_list">
                  <li class="social_heading">Siguenos!</li>
                  <li class="">
                     <a href="https://twitter.com" target="_blank">
                        <div class="social_twittericon"></div>
                     </a>
                  </li>
                  <li class="">
                     <a href="https://www.facebook.com" target="_blank">
                        <div class="social_facebookicon"></div>
                     </a>
                  </li>
                  <li class="">
                     <a href="https://www.instagram.com" target="_blank">
                        <div class="social_instagramicon"></div>
                     </a>
                  </li>
                  <li class="">
                     <a href="https://plus.google.com" target="_blank">
                        <div class="social_gplusicon"></div>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="social_emailwrapper">
               <form name="newsletter_signup_post" action="">
                  <input type="hidden" id="requestingpage" name="requestingpage" value="ftr"> <input type="hidden" id="thanksmsg" name="thanksmsg" value="¡gracias por suscribirse!">
                  <label for="email">
                  Regístrese para recibir nuestras ofertas actuales
                  </label>
                  <div class="email_block">
                     <input type="text" id="email" name="email" value="su e-mail" onfocus="this.value='';document.getelementbyid('email').classname = '';" onblur="this.value=this.value==''?'su e-mail':this.value;">
                     <button type="submit" class="email_btn" name="submitform">
                     suscribirse
                     </button>
                  </div>
               </form>
            </div>
         </div>
         <div id="legal_box">
            <div id="legal_content">
               <div class="legal_list">
                  <ul>
                     <li><a href="<?= $helper->url('site','contact');?>">Política de privacidad</a></li>
                     <li><a href="<?= $helper->url('site','contact');?>">Condiciones generales</a></li>
                  </ul>
                  <ul>
                     <li>
                        <img src="img/logo.png" alt="caralcarro" width="120" >
                     </li>
                  </ul>
                  <ul>
                     <li><a href="<?= $helper->url('site','contact');?>">Sobre nosotros</a></li>
                     <li><a href="<?= $helper->url('site','contact');?>">Por qué reservar con caralcarro</a></li>
                  </ul>
               </div>
            </div>
            <!-- /legal_content -->
         </div>
         <!-- /legal_box -->
      </div>
      <!-- /footer_content -->
   </div>
   <!-- /social_box or footer_box, depending on condition -->
   <div id="cred_wrapper">
      <div id="cred_box">
         <ul class="cred_list">
            <li><a href="http://www.spain.info" title="spain info" rel="nofollow" target="_blank"><img src="img/spinfo-seal.jpg" alt="spain info" border="0"></a></li>
            <li>
               <a href="https://sealserver.trustkeeper.net" target="hatw"><img src="http://www.autoeurope.es/img/ui/trustwave-seal.png" alt="trusted commerce" width="101" height="51"></a>
            </li>
            <li>
               <span>
                  <!-- globalsign seal -->
                  <table width="125" border="0" cellspacing="0" cellpadding="0" title="click to verify: this site uses a globalsign ssl certificate to secure your personal information.">
                     <tbody>
                        <tr>
                           <td><span> <a id="aa"><img name="ss_imgtag" border="0" src=http://ssif1.globalsign.com/SiteSeal/siteSeal/siteSeal/siteSealImage.do?p1=www.autoeurope.es&p2=SZ100-40&p3=image&p4=en&p5=V0023&p6=S001&p7=http&deterDn= alt="por favor haga clic para ver el perfil." oncontextmenu="return false;" galleryimg="no" style="width:100px"></a></span>
                              <span
                                 id="ss_siteseal_fin_sz100-40_image_en_v0023_s001"></span>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </span>
            </li>
         </ul>
      </div>
   </div>
</div> 