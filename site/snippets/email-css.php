<style>

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0 0 104px !important;
  background-color: #F1F1F1;
}
span.preheader {
  display: none !important;
}
.ExternalClass { 
  width:100%;
} 

.ExternalClass, 
.ExternalClass p, 
.ExternalClass span, 
.ExternalClass font, 
.ExternalClass td, 
.ExternalClass div { 
  line-height: 100%; 
} 

#backgroundTable { 
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%;
  clear: both;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-break: normal;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  height: 100%;
  width: 100%;
}

table.container {
  background: #ffffff;
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {

}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 15px;
  padding-right: 15px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 15px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 15px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td {  
  color: #131313;
  font-family: Arial, Helvetica;
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
  font-weight: bold;
}

h1 {font-size: 42px; margin-bottom:10px; line-height: 45px;}
h2 {font-size: 30px; margin-bottom:10px; line-height: 30px;}
h3 {font-size: 24px; margin-bottom:10px;}
h4 {font-size: 20px; margin-bottom:10px;}
h5 {font-size: 17px; margin-bottom:10px;}
h6 {font-size: 14px; margin-bottom:10px;}
body, table.body, p, td {
  font-size: 14px;
  line-height:21px;
}

p.lead, p.lede, p.leed {
  font-size: 16px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 11px;
}

a {
  color: #0083db; 
  text-decoration: none;
}

a:hover { 
  color: #0083db !important;
  text-decoration: underline !important;
}

a:active { 
  color: #0083db !important;
}

a:visited { 
  color: #0083db !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #0083db;
}

.newsletter h1 a, 
.newsletter h2 a, 
.newsletter h3 a, 
.newsletter h4 a, 
.newsletter h5 a, 
.newsletter h6 a {
  color: #000000;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #0083db !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #0083db !important; 
} 

.newsletter h1 a:active, 
.newsletter h2 a:active,  
.newsletter h3 a:active, 
.newsletter h4 a:active, 
.newsletter h5 a:active, 
.newsletter h6 a:active { 
  color: #040404 !important; 
} 

.newsletter h1 a:visited, 
.newsletter h2 a:visited,  
.newsletter h3 a:visited, 
.newsletter h4 a:visited, 
.newsletter h5 a:visited, 
.newsletter h6 a:visited { 
  color: #040404 !important; 
} 

blockquote {
  border-left: 2px solid #0083db;
  margin-left: 0;
  padding-left: 20px;
}

/* Panels */

.panel {
  background: #3a3a3a;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

table.header {
  background: #131313;
  color: #ffffff;
}
table.header td {
  color: #ffffff;
}
.footer .wrapper {
  background: #ffffff;
}

.footer h5 {
  padding-bottom: 10px;
}
.footer img.social-icons {
  margin-right: 3px;
  margin-bottom: 10px;
  margin-top: 30px;
  display: inline-block;
}
.footer p {
  font-size: 9px;
  line-height: 15px;
  color: #858B8F;
  text-align: center;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button table td,
table.tiny-button table td,
table.small-button table td,
table.medium-button table td,
table.large-button table td {
  padding:0;
  -webkit-border-radius: 3px; 
  -moz-border-radius: 3px; 
  border-radius: 3px;
  background: #74C818;
  text-align: center;
}
table.button table,
table.tiny-button table,
table.small-button table,
table.medium-button table,
table.large-button table {
  width: 100%;
}

table.tiny-button table td {
  padding: 4px 8px;
}

table.small-button table td {
  padding: 6px 12px;
}

table.medium-button table td {
  padding: 12px 22px;
}

table.large-button table td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  color: #ffffff; 
  text-decoration: none; 
  text-decoration: none; 
  -webkit-border-radius: 3px; 
  -moz-border-radius: 3px; 
  border-radius: 3px; 
  display: inline-block;
  text-align: center;
  font-weight: bold;
}

table.new-button  {
  display: block;
}
table.new-button tbody {
  display: block;
}

table.tiny-button td a {
  font-size: 12px;
  
}

table.small-button td a {
  font-size: 12px;
}

table.medium-button td a {
  font-size: 14px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  cursor:pointer !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #dddddd !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Newletter Styling */

td.article-image-container {
  padding-bottom:10px;
}
hr.article-divider {
  color: #F1F1F1;
  background-color: #F1F1F1;
  margin: 25px 0 5px;
}
h5.edition-date {
  text-align: right;
  color: #f1f1f1;
  text-transform: uppercase;
  font-weight: normal;
  letter-spacing: 1px;
  font-size: 11px;
  margin-top: 10px;
  margin-bottom: 0;
  width: 100%;
}
hr.header-divider {
  color: #F1F1F1;
  background-color: #F1F1F1;
  margin: 10px 0 10px;
  width: 100%;
}
/* Variety Styling */

.variety-heading h5 {
  font-size: 14px;
  color: #ffffff;
  margin-bottom: 0;
  letter-spacing: 1px;
  text-align: center;
  font-weight: normal;
}
.variety-heading h6 {
  font-size: 10px;
  color: #d1d1d1;
  font-weight: normal;
  text-align: center;
  margin-bottom:0;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 15px !important;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 15px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

</style>
<style>

table.facebook td {
  background: #3b5998;
  border-color: #2d4473;
}

table.facebook:hover td {
  background: #2d4473 !important;
}

table.twitter td {
  background: #00acee;
  border-color: #0087bb;
}

table.twitter:hover td {
  background: #0087bb !important;
}

table.google-plus td {
  background-color: #DB4A39;
  border-color: #CC0000;
}

table.google-plus:hover td {
  background: #CC0000 !important;
}

.template-label {
  color: #cccccc;
  font-size: 13px;
}

.callout .panel {
  background: #ECF8FF;
  border-color: #b9e5ff;
}



table.columns .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad {
  padding-left: 10px;
}

table.columns .right-text-pad {
  padding-right: 10px;
}

@media only screen and (max-width: 600px) {

  table[class="body"] .right-text-pad {
    padding-left: 10px !important;
  }

  table[class="body"] .left-text-pad {
    padding-right: 10px !important;
  }
  .responsive-hero-container {
    height: 375px !important;
    background: url('<?php echo $page->mobileImg() ?>') no-repeat bottom center;
  }
  .responsive-hero-container img {
    display:none;
  }
  .responsive-campaign-container {
    height: 425px !important;
    background: url('<?php echo $page->mobileImg() ?>') no-repeat bottom center;
  }
  .responsive-campaign-container img {
    display:none;
  }
}
td.wrapper.wrapper-flush-t-padding {
  padding:0 20px 0 0;
}
</style>