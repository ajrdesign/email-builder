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
                    <p>Published by Bluebeam, Inc.</p>
                    <a href="http://www.bluebeam.com/"><img src="https://downloads.bluebeam.com/images/2016/universal-assets/bluebeam-b-logo-email-footer.png" alt="Bluebeam Software"></a>
                    <p>55 South Lake Ave, Suite 900, Pasadena, CA 91101, USA </p>
                    <p>We respect your right to privacy - <a href="http://www.breakgroundmedia.com/privacy-policy/">view our policy</a></p>
                    <?php if($page->parent()->emailclient() == 'et'): ?>
                      <p><a href="%%ftaf_url%%">Forward to a Friend</a> | <a href="%%subscription_center_url%%" alias="Manage Subscriptions">Manage Subscriptions</a> | <a href="%%profile_center_url%%" alias="Update Profile">Unsubscribe</a>
                    <?php endif ?>
                    <p>© Copyright 2017 Bluebeam, Inc. BREAKGROUND is a Trademark of Bluebeam, Inc. All Rights Reserved.</p>
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
