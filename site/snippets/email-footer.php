<!-- Footer Section: DO NOT TOUCH -->
<table class="spacer">
  <tbody>
    <tr>
      <td height="100px" style="font-size:100px;line-height:100px;">&#xA0;</td>
    </tr>
  </tbody>
</table>

<table class="container footer">
  <tr>
    <td class="left" align="left">

      <center>

        <hr>
<table class="spacer">
  <tbody>
    <tr>
      <td height="40px" style="font-size:40px;line-height:40px;">&#xA0;</td>
    </tr>
  </tbody>
</table>

<!-- Footer Social Media Icons -->
        <table class="row">
          <tr>
            <td>
            <table class="footer-icon-row">
              <tr>
                  <?php if($page->parent()->facebook()->isTrue()): ?><td class="social-media">
                      <a href="<?php echo $page->parent()->facebookUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="http://downloads.bluebeam.com/images/assets/social-icons/social-facebook.png" alt="Facebook"></a></td>
                  <?php endif ?>
                  <?php if($page->parent()->linkedin()->isTrue()): ?><td class="social-media">
                      <a href="<?php echo $page->parent()->linkedinUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="http://downloads.bluebeam.com/images/assets/social-icons/social-linkedin.png" alt="LinkedIn"></a></td>
                  <?php endif ?>
                  <?php if($page->parent()->twitter()->isTrue()): ?><td class="social-media">
                      <a href="<?php echo $page->parent()->twitterUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="http://downloads.bluebeam.com/images/assets/social-icons/social-twitter.png" alt="Twitter"></a></td>
                  <?php endif ?>
                  <?php if($page->parent()->youtube()->isTrue()): ?><td class="social-media">
                      <a href="<?php echo $page->parent()->youtubeUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="http://downloads.bluebeam.com/images/assets/social-icons/social-youtube.png" alt="YouTube"></a></td>
                  <?php endif ?>
                  <?php if($page->parent()->instagram()->isTrue()): ?><td class="social-media">
                      <a href="<?php echo $page->parent()->instagramUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="http://downloads.bluebeam.com/images/assets/social-icons/social-instagram.png" alt="Instagram"></a></td>
                  <?php endif ?>
              </tr>
            </table>
          </td>
        </tr>
      </table>


<!-- Business Information -->

        <table class="row">
          <tr>
            <td class="wrapper last">

              <table class="footer-align">
                <tr>
                  <td class="text-pad large-12 small-12 columns">

                    <?php if($page->language() == 'au'): ?>

                      <?php if($page->parent()->emailclient() == 'et'): ?>
                        <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/au/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                        <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                        We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                        <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                      <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/au/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/au/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>


                    <?php elseif($page->language() == 'de'): ?>

                      <?php if($page->parent()->emailclient() == 'et'): ?>
                        <p>Kontakt: <a href="mailto:sales@bluebeam.com" >Vertrieb</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/de/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hilfe</a></p>
                        <p>Diese E-Mail wurde versendet von: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Wir respektieren Ihr Recht auf Datenschutz&nbsp;&ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >sehen Sie sich unsere Richtlinie an</a></p>
                        <p><a href="%%ftaf_url%%" >An einen Freund weiterleiten</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Abonnements verwalten</a> | <a href="%%profile_center_url%%" alias="Update Profile" >K&uuml;ndigen</a>
                      <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alle Rechte vorbehalten.</p><a href="http://www.bluebeam.com/de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>


                    <?php elseif($page->language() == 'dk'): ?>

                      <?php if($page->parent()->emailclient() == 'et'): ?>
                        <p>Kontakt os: <a href="mailto:sales.dk@bluebeam.com" >Salg</a> | <a href="mailto:support.dk@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/dk/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hj&aelig;lp</a></p>
                        <p>Denne e-mail er sendt af: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Vi respekterer din ret til beskyttelse af personlige oplysninger - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >se vores politik</a></p>
                        <p><a href="%%ftaf_url%%" >Videresend til en ven</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Administrer abonnementer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Afmeld</a>
                      <?php endif ?>

                      <p>© Copyright 2002-2016  <a href="http://www.bluebeam.com/dk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alle rettigheder forbeholdes.</p><a href="http://www.bluebeam.com/dk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'es'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/es/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>

                    <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/es/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/es/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'fi'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Contact Us: <a href="mailto:sales.fi@bluebeam.com" >Sales</a> | <a href="mailto:support.fi@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/fi/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>

                    <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/fi/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/fi/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'fr'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/fr/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>

                    <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/fr/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/fr/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'ch'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Kontakt: <a href="mailto:sales@bluebeam.com" >Vertrieb</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/ch-de/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hilfe</a></p>
                    <p>Diese E-Mail wurde versendet von: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Wir respektieren Ihr Recht auf Datenschutz&nbsp;&ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >sehen Sie sich unsere Richtlinie an</a></p>
                    <p><a href="%%ftaf_url%%" >An einen Freund weiterleiten</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Abonnements verwalten</a> | <a href="%%profile_center_url%%" alias="Update Profile" >K&uuml;ndigen</a>

                      <?php endif ?>

                      <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/ch-de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alle Rechte vorbehalten.</p><a href="http://www.bluebeam.com/ch-de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'it'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/it/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>

                    <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/it/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/it/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'nl'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/nl/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>

                    <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/nl/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/nl/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'no'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                        <p>Kontakt oss: <a href="mailto:sales.no@bluebeam.com" >Salg</a> | <a href="mailto:support.no@bluebeam.com" >St&oslash;tte</a> | <a href="http://www.bluebeam.com/no/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hjelp</a></p>
                        <p>Denne e-postmeldingen ble sendt av %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%% i USA Vi respekterer din rett til personvern &ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >se retningslinjene v&aring;re</a></p>
                        <p><a href="%%ftaf_url%%" >Videresend til en venn</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Administrer abonnementer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Opphev abonnement</a>
                      <?php endif ?>

                    <p>© Copyright 2002&ndash;2016 <a href="http://www.bluebeam.com/no/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Med enerett.</p><a href="http://www.bluebeam.com/no/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam-programvare" ></a>

                    <?php elseif($page->language() == 'se'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                        <p>Kontakta oss: <a href="mailto:sales.se@bluebeam.com" >F&ouml;rs&auml;ljning</a> | <a href="mailto:support.se@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/se/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hj&auml;lp</a></p>
                        <p>E-postmeddelandet skickades av: %%Member_Busname%% %%Member_Addr%%<br>%%Member_City%% %%Member_State%% %%Member_PostalCode%% USA Vi respekterar din integritet - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >l&auml;s v&aring;r sekretesspolicy</a></p>
                        <p><a href="%%ftaf_url%%" >Vidarebefordra till en v&auml;n</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Hantera prenumerationer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Avanm&auml;l</a>
                      <?php endif ?>

                        <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/se/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alla r&auml;ttigheter f&ouml;rbeh&aring;lles.</p><a href="http://www.bluebeam.com/se/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'uk'): ?>
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                    <p>Contact Us: <a href="mailto:sales.uk@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/uk/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>

                    <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/uk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/uk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->parent()->emailclient() == 'cvent'): ?>
                    <p>If you no longer want to receive emails from {[P-FIRST NAME]} {[P-LAST NAME]}, please  <a href="#">{[EMAIL OPT OUT]}</a></p>
                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>


                    <?php elseif($page->language() == 'channel'): ?>
                    <p>YOUR COMPANY NAME HERE | YOUR PHONE NUMBER HERE | YOUR COMPANY ADDRESS HERE </p>
                    <p><a href="YOUR-UNSUBSCRIBE-URL-HERE">Unsubscribe</a></p>
                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>

                    <?php else: ?>
                    <!-- Insert US one -->
                      <?php if($page->parent()->emailclient() == 'et'): ?>
                        <p>Contact Us: <a href="mailto:sales@bluebeam.com">Sales</a> | <a href="mailto:support@bluebeam.com">Support</a> | <a href="http://www.bluebeam.com/us/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>">Help</a></p>
                        <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA</p>
                        <p>We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp">view our policy</a></p>
                        <p><a href="%%ftaf_url%%">Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions">Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile">Unsubscribe</a></p>
                      <?php endif ?>

                    <p>© Copyright 2002 - 2018  <a href="http://www.bluebeam.com/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>

                    <?php endif ?>

                                        </td>
                                      </tr>
                                    </table>

                                  </td>
                                </tr>
                              </table>
<!-- Spacer -->
<table class="spacer">
  <tbody>
    <tr>
      <td height="20px" style="font-size:20px;line-height:20px;">&#xA0;</td>
    </tr>
  </tbody>
</table>
<!-- End of Spacer -->

                            </center>
                          </td>
                        </tr>
                      </table>
                    </center>
                  </td>
                </tr>
              </table>
            </center>
          </td>
        </tr>
      </table>
  </body>
  <custom name="opencounter" type="tracking"></custom>
</span>
