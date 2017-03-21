<!-- Footer Section: DO NOT TOUCH -->
<table class="container footer">
  <tr>
    <td class="center" align="center">

      <center>

        <table class="row">
          <tr>
            <td class="wrapper last">

              <table class="twelve columns">
                <tr>
                  <td class="text-pad center">
                    <hr>
                    <?php if($page->parent()->facebook()->isTrue()): ?>
                    <a href="<?php echo $page->parent()->facebookUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="https://downloads.bluebeam.com/images/2016/universal-assets/social-facebook-email-footer.png" alt="Facebook"></a>
                    <?php endif ?>
                    <?php if($page->parent()->linkedin()->isTrue()): ?>
                    <a href="<?php echo $page->parent()->linkedinUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="https://downloads.bluebeam.com/images/2016/universal-assets/social-linkedin-email-footer.png" alt="LinkedIn"></a>
                    <?php endif ?>
                    <?php if($page->parent()->twitter()->isTrue()): ?>
                    <a href="<?php echo $page->parent()->twitterUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="https://downloads.bluebeam.com/images/2016/universal-assets/social-twitter-email-footer.png" alt="Twitter"></a>
                    <?php endif ?>
                    <?php if($page->parent()->youtube()->isTrue()): ?>
                    <a href="<?php echo $page->parent()->youtubeUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="https://downloads.bluebeam.com/images/2016/universal-assets/social-youtube-email-footer.png" alt="YouTube"></a>
                    <?php endif ?>
                    <?php if($page->parent()->instagram()->isTrue()): ?>
                    <a href="<?php echo $page->parent()->instagramUrl() ?>" target="_blank"><img hspace="2" class="social-icons" src="https://downloads.bluebeam.com/images/2016/universal-assets/social-instagram-email-footer.png" alt="Instagram"></a>
                    <?php endif ?>
                    <br>

                    <?php if($page->language() == 'au'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/au/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/au/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/au/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'de'): ?>
                    <p>Kontakt: <a href="mailto:sales@bluebeam.com" >Vertrieb</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/de/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hilfe</a></p>
                    <p>Diese E-Mail wurde versendet von: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Wir respektieren Ihr Recht auf Datenschutz&nbsp;&ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >sehen Sie sich unsere Richtlinie an</a></p>
                    <p><a href="%%ftaf_url%%" >An einen Freund weiterleiten</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Abonnements verwalten</a> | <a href="%%profile_center_url%%" alias="Update Profile" >K&uuml;ndigen</a>  © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alle Rechte vorbehalten.</p><a href="http://www.bluebeam.com/de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'dk'): ?>
                    <p>Kontakt os: <a href="mailto:sales.dk@bluebeam.com" >Salg</a> | <a href="mailto:support.dk@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/dk/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hj&aelig;lp</a></p>
                    <p>Denne e-mail er sendt af: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Vi respekterer din ret til beskyttelse af personlige oplysninger - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >se vores politik</a></p>
                    <p><a href="%%ftaf_url%%" >Videresend til en ven</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Administrer abonnementer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Afmeld</a> © Copyright 2002-2016  <a href="http://www.bluebeam.com/dk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alle rettigheder forbeholdes.</p><a href="http://www.bluebeam.com/dk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'es'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/es/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/es/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/es/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'fi'): ?>
                    <p>Contact Us: <a href="mailto:sales.fi@bluebeam.com" >Sales</a> | <a href="mailto:support.fi@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/fi/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/fi/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/fi/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'fr'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/fr/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/fr/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/fr/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'ch'): ?>
                    <p>Kontakt: <a href="mailto:sales@bluebeam.com" >Vertrieb</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/ch-de/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hilfe</a></p>
                    <p>Diese E-Mail wurde versendet von: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Wir respektieren Ihr Recht auf Datenschutz&nbsp;&ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >sehen Sie sich unsere Richtlinie an</a></p>
                    <p><a href="%%ftaf_url%%" >An einen Freund weiterleiten</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Abonnements verwalten</a> | <a href="%%profile_center_url%%" alias="Update Profile" >K&uuml;ndigen</a>  © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/ch-de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alle Rechte vorbehalten.</p><a href="http://www.bluebeam.com/ch-de/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'it'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/it/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/it/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/it/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>
                    <?php elseif($page->language() == 'nl'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/nl/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/nl/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/nl/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'no'): ?>
                    <p>Kontakt oss: <a href="mailto:sales.no@bluebeam.com" >Salg</a> | <a href="mailto:support.no@bluebeam.com" >St&oslash;tte</a> | <a href="http://www.bluebeam.com/no/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hjelp</a></p>
                    <p>Denne e-postmeldingen ble sendt av %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%% i USA Vi respekterer din rett til personvern &ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >se retningslinjene v&aring;re</a></p>
                    <p><a href="%%ftaf_url%%" >Videresend til en venn</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Administrer abonnementer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Opphev abonnement</a> © Copyright 2002&ndash;2016 <a href="http://www.bluebeam.com/no/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Med enerett.</p><a href="http://www.bluebeam.com/no/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam-programvare" ></a>

                    <?php elseif($page->language() == 'se'): ?>
                    <p>Kontakta oss: <a href="mailto:sales.se@bluebeam.com" >F&ouml;rs&auml;ljning</a> | <a href="mailto:support.se@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/se/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Hj&auml;lp</a></p>
                    <p>E-postmeddelandet skickades av: %%Member_Busname%% %%Member_Addr%%<br>%%Member_City%% %%Member_State%% %%Member_PostalCode%% USA Vi respekterar din integritet - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >l&auml;s v&aring;r sekretesspolicy</a></p>
                    <p><a href="%%ftaf_url%%" >Vidarebefordra till en v&auml;n</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Hantera prenumerationer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Avanm&auml;l</a> © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/se/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>. Alla r&auml;ttigheter f&ouml;rbeh&aring;lles.</p><a href="http://www.bluebeam.com/se/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'uk'): ?>
                    <p>Contact Us: <a href="mailto:sales.uk@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/uk/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2017  <a href="http://www.bluebeam.com/uk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/uk/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>
                    
                    <?php elseif($page->style() == 'cvent'): ?>
                    <p>If you no longer want to receive emails from {[P-FIRST NAME]} {[P-LAST NAME]}, please  <a href="#">{[EMAIL OPT OUT]}</a></p>
                    <p>© Copyright 2002 - 2017  <a href="http://www.bluebeam.com/" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>"><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software"></a>
                    
                    <?php elseif($page->language() == 'channel'): ?>
                    <p>YOUR COMPANY NAME HERE | YOUR PHONE NUMBER HERE | YOUR COMPANY ADDRESS HERE </p>
                    <p><a href="YOUR-UNSUBSCRIBE-URL-HERE">Unsubscribe</a></p>
                    <p>© Copyright 2002 - 2017  <a href="http://www.bluebeam.com/" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>"><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software"></a>
                    <?php else: ?>
                    <!-- Insert US one -->
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com">Sales</a> | <a href="mailto:support@bluebeam.com">Support</a> | <a href="http://www.bluebeam.com/us/contact/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>">Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA</p>
                    <p>We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp">view our policy</a></p>
                    <p><a href="%%ftaf_url%%">Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions">Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile">Unsubscribe</a></p>
                    <p>© Copyright 2002 - 2017  <a href="http://www.bluebeam.com/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>"><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software"></a>
                    <?php endif ?>

                                        </td>
                                      </tr>
                                    </table>

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
            </center>
          </td>
        </tr>
      </table>
    </custom>
  </body>
</span>