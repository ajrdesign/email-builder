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
                                  <?php echo $page->text()->kirbytext() ?>
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
                                        <table class="menu vertical">
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
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </table>
    <div class="whatever">
      
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">

       /*var emailbody = document.getElementById('email-wrapper');
       var testString = 'Hello my name is';
       var emailStripped = document.write( testString.replace(/\s/g, '') );
       console.log(emailbody);
       console.log(emailStripped);*/
          /*$.ajax({
                type:"POST",
                beforeSend: function (request)
                {
                    request.setRequestHeader("Authority", authorizationToken);
                },
                url: "http://premailer.dialect.ca/api/0.1/documents?html=<span>Hello World</span>",
                data: "json=" + escape(JSON.stringify(createRequestObject)),
                processData: false,
                success: function(msg) {
                    $("#results").append("The result =" + StringifyPretty(msg));
                }
        });*/
       /*$(function () {
        var htmlData = $('#email-wrapper').html();
        var jqxhr = $.get( "http://premailer.dialect.ca/api/0.1/documents?html=<span>Hello World</span>", function( data ) {
            // alert('hi');
            $( ".whatever" ).html( data );   
        })
        .fail(function() {
            alert( "error" );
        });    
    });*/
$.ajax({
    type:"POST",
//     dataType: 'jsonp',
    url: "https://inlinestyler.torchbox.com/styler/convert",
    data: { returnraw: 1, source_url: "http://bluebeam.com/us/email/launch/2016-launch-academic.html" },
    success: function( data ) {
        console.log( data );
    }
});

    </script>
  </body>

</html>