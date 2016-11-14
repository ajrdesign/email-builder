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
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/au/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/au" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/au" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'de'): ?>
                    <p>Kontakt: <a href="mailto:sales@bluebeam.com" >Vertrieb</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/de/contact" >Hilfe</a></p>
                    <p>Diese E-Mail wurde versendet von: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Wir respektieren Ihr Recht auf Datenschutz&nbsp;&ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >sehen Sie sich unsere Richtlinie an</a></p>
                    <p><a href="%%ftaf_url%%" >An einen Freund weiterleiten</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Abonnements verwalten</a> | <a href="%%profile_center_url%%" alias="Update Profile" >K&uuml;ndigen</a>  © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/de" target="_blank" >Bluebeam, Inc</a>. Alle Rechte vorbehalten.</p><a href="http://www.bluebeam.com/de" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'dk'): ?>
                    <p>Kontakt os: <a href="mailto:sales.dk@bluebeam.com" >Salg</a> | <a href="mailto:supportdenmark@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/dk/contact" >Hj&aelig;lp</a></p>
                    <p>Denne e-mail er sendt af: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Vi respekterer din ret til beskyttelse af personlige oplysninger - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >se vores politik</a></p>
                    <p><a href="%%ftaf_url%%" >Videresend til en ven</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Administrer abonnementer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Afmeld</a> © Copyright 2002-2016  <a href="http://www.bluebeam.com/dk" target="_blank" >Bluebeam, Inc</a>. Alle rettigheder forbeholdes.</p><a href="http://www.bluebeam.com/dk" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'es'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/es/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/es" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/es" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'fi'): ?>
                    <p>Contact Us: <a href="mailto:sales.fi@bluebeam.com" >Sales</a> | <a href="mailto:supportfinland@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/fi/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/fi" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/fi" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'fr'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/fr/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/fr" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/fr" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'ch'): ?>
                    <p>Kontakt: <a href="mailto:sales@bluebeam.com" >Vertrieb</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/ch-de/contact" >Hilfe</a></p>
                    <p>Diese E-Mail wurde versendet von: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA. Wir respektieren Ihr Recht auf Datenschutz&nbsp;&ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >sehen Sie sich unsere Richtlinie an</a></p>
                    <p><a href="%%ftaf_url%%" >An einen Freund weiterleiten</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Abonnements verwalten</a> | <a href="%%profile_center_url%%" alias="Update Profile" >K&uuml;ndigen</a>  © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/ch-de" target="_blank" >Bluebeam, Inc</a>. Alle Rechte vorbehalten.</p><a href="http://www.bluebeam.com/ch-de" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'it'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/it/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/it" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/it" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>
                    <?php elseif($page->language() == 'nl'): ?>
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/nl/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/nl" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/nl" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'no'): ?>
                    <p>Kontakt oss: <a href="mailto:sales.no@bluebeam.com" >Salg</a> | <a href="mailto:supportnorway@bluebeam.com" >St&oslash;tte</a> | <a href="http://www.bluebeam.com/no/contact" >Hjelp</a></p>
                    <p>Denne e-postmeldingen ble sendt av %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%% i USA Vi respekterer din rett til personvern &ndash; <a href="http://bluebeam.com/us/company/privacy-policy.asp" >se retningslinjene v&aring;re</a></p>
                    <p><a href="%%ftaf_url%%" >Videresend til en venn</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Administrer abonnementer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Opphev abonnement</a> © Copyright 2002&ndash;2016 <a href="http://www.bluebeam.com/no" target="_blank" >Bluebeam, Inc</a>. Med enerett.</p><a href="http://www.bluebeam.com/no" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam-programvare" ></a>

                    <?php elseif($page->language() == 'se'): ?>
                    <p>Kontakta oss: <a href="mailto:sales.se@bluebeam.com" >F&ouml;rs&auml;ljning</a> | <a href="mailto:supportsweden@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/se/contact" >Hj&auml;lp</a></p>
                    <p>E-postmeddelandet skickades av: %%Member_Busname%% %%Member_Addr%%<br>%%Member_City%% %%Member_State%% %%Member_PostalCode%% USA Vi respekterar din integritet - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >l&auml;s v&aring;r sekretesspolicy</a></p>
                    <p><a href="%%ftaf_url%%" >Vidarebefordra till en v&auml;n</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Hantera prenumerationer</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Avanm&auml;l</a> © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/se" target="_blank" >Bluebeam, Inc</a>. Alla r&auml;ttigheter f&ouml;rbeh&aring;lles.</p><a href="http://www.bluebeam.com/se" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>

                    <?php elseif($page->language() == 'uk'): ?>
                    <p>Contact Us: <a href="mailto:sales.uk@bluebeam.com" >Sales</a> | <a href="mailto:support@bluebeam.com" >Support</a> | <a href="http://www.bluebeam.com/uk/contact" >Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp" >view our policy</a></p>
                    <p><a href="%%ftaf_url%%" >Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions" >Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile" >Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/uk" target="_blank" >Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/uk" ><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software" ></a>
                    <?php else: ?>
                    <!-- Insert US one -->
                    <p>Contact Us: <a href="mailto:sales@bluebeam.com">Sales</a> | <a href="mailto:support@bluebeam.com">Support</a> | <a href="http://www.bluebeam.com/us/contact">Help</a></p>
                    <p>This email is sent by: %%Member_Busname%% %%Member_Addr%%,<br>%%Member_City%%, %%Member_State%% %%Member_PostalCode%%, USA
                    We respect your right to privacy - <a href="http://bluebeam.com/us/company/privacy-policy.asp">view our policy</a></p>
                    <p><a href="%%ftaf_url%%">Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions">Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile">Unsubscribe</a>
                    © Copyright 2002 - 2016  <a href="http://www.bluebeam.com/" target="_blank">Bluebeam, Inc</a>.  All Rights Reserved.</p>
                    <a href="http://www.bluebeam.com/"><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software"></a>
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