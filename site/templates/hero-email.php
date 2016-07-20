<?php snippet('email-header') ?>
<table align="center" class="container float-center">
              <tbody>
                <tr>
                  <td>
                    <table class="spacer">
                      <tbody>
                        <tr>
                          <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row">
                      <tbody>
                        <tr>
                          <th class="small-12 large-12 columns first last">
                            <table>
                              <tr>
                                <th>
                                  <img src="<?php echo $page->herourl() ?>" alt="<?php echo $page->heroalt() ?>">
                                  <?php echo $page->text()->kirbytext() ?>
                                  <table class="button large secondary">
                                    <tr>
                                      <td>
                                        <table>
                                          <tr>
                                            <td><a href="<?php echo $page->calltoaction() ?>"><?php echo $page->calltoactioncopy() ?></a></td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </th>
                                <th class="expander"></th>
                              </tr>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" align="center">
                      <tr>
                        <td class="wrapper-inner">
                          <table class="spacer">
                            <tbody>
                              <tr>
                                <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="row">
                            <tbody>
                              <tr>
                                <th class="small-12 large-6 columns first">
                                  <table>
                                    <tr>
                                      <th>
                                        <h5>Connect With Us:</h5>
                                        <table align="left" class="menu vertical">
                                          <tr>
                                            <td>
                                              <table>
                                                <tr>
                                                  <th style="text-align: left;" class="menu-item float-center"><a href="#">Twitter</a></th>
                                                  <th style="text-align: left;" class="menu-item float-center"><a href="#">Facebook</a></th>
                                                  <th style="text-align: left;" class="menu-item float-center"><a href="#">Google +</a></th>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </th>
                                    </tr>
                                  </table>
                                </th>
                                <th class="small-12 large-6 columns last">
                                  <table>
                                    <tr>
                                      <th>
                                        <h5>Contact Info:</h5>
                                        <p>Phone: 408-341-0600</p>
                                        <p>Email: <a href="mailto:foundation@zurb.com">foundation@zurb.com</a></p>
                                      </th>
                                    </tr>
                                  </table>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                    <center data-parsed="">
                      <table align="center" class="menu float-center">
                        <tr>
                          <td>
                            <table>
                              <tr>
                                <th class="menu-item float-center"><a href="#">Terms</a></th>
                                <th class="menu-item float-center"><a href="#">Privacy</a></th>
                                <th class="menu-item float-center"><a href="#">Unsubscribe</a></th>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>