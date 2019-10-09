<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php $school_url = 'School URL';
	$school_name = 'School NAME';
	if(isset($_GET['school_url'])){
		$school_url = $_GET['school_url'];
	}
	if(isset($_GET['school_name'])){
		$school_name = $_GET['school_name'];
	}
?><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width">
      <meta name="title" content="School">
      <style>
        a:hover{color:#147dc2}
        a:active{color:#147dc2}
        h1 a:visited{color:#483729}
        h2 a:visited{color:#483729}
        h3 a:visited{color:#483729}
        h4 a:visited{color:#483729}
        h5 a:visited{color:#483729}
        h6 a:visited{color:#483729}
        table.button:hover table tr td a{color:#000000}
        table.button:active table tr td a{color:#000000}
        table.button table tr td a:visited{color:#000000}
        table.button.tiny:hover table tr td a{color:#000000}
        table.button.tiny:active table tr td a{color:#000000}
        table.button.tiny table tr td a:visited{color:#000000}
        table.button.small:hover table tr td a{color:#000000}
        table.button.small:active table tr td a{color:#000000}
        table.button.small table tr td a:visited{color:#000000}
        table.button.large:hover table tr td a{color:#000000}
        table.button.large:active table tr td a{color:#000000}
        table.button.large table tr td a:visited{color:#000000}
        table.button.secondary:hover table td{background:#919191;color:#fefefe}
        table.button.secondary:hover table a{border:0 solid #919191}
        table.button.secondary:hover table td a{color:#fefefe}
        table.button.secondary:active table td a{color:#fefefe}
        table.button.secondary table td a:visited{color:#fefefe}
        table.button.success:hover table td{background:#23bf5d}
        table.button.success:hover table a{border:0 solid #23bf5d}
        table.button.alert:hover table td{background:#e23317}
        table.button.alert:hover table a{border:0 solid #e23317}
        .thumbnail:hover{box-shadow:0 0 6px 1px rgba(33, 153, 232, 0.5)}
        .thumbnail:focus{box-shadow:0 0 6px 1px rgba(33, 153, 232, 0.5)}
        .text-orange-link:hover{color:#f9b32e}
        .button-orange:hover{background-color:#f9b32e}
        table.button-orange:hover table tr td a{color:#ffffff}
        table.button-orange:active table tr td a{color:#ffffff}
        table.button-orange table tr td a:visited{color:#ffffff}
        table.button-orange.tiny:hover table tr td a{color:#ffffff}
        table.button-orange.tiny:active table tr td a{color:#ffffff}
        table.button-orange.tiny table tr td a:visited{color:#ffffff}
        table.button-orange.small:hover table tr td a{color:#ffffff}
        table.button-orange.small:active table tr td a{color:#ffffff}
        table.button-orange.small table tr td a:visited{color:#ffffff}
        table.button-orange.large:hover table tr td a{color:#ffffff}
        table.button-orange.large:active table tr td a{color:#ffffff}
        table.button-orange.large table tr td a:visited{color:#ffffff}
        table.button-orange:hover table td{background:#f9b32e;color:#fefefe}
        table.button-orange:visited table td{background:#f9b32e;color:#fefefe}
        table.button-orange:active table td{background:#f9b32e;color:#fefefe}
        table.button-orange:hover table a{border:0 solid #f9b32e}
        table.button-orange:visited table a{border:0 solid #f9b32e}
        table.button-orange:active table a{border:0 solid #f9b32e}
        .text-green-link:hover{color:rgb(103, 79, 59)}
        a:hover{color:rgb(103, 79, 59)}
        table.button-green:hover table tr td a{color:#ffffff}
        table.button-green:active table tr td a{color:#ffffff}
        table.button-green table tr td a:visited{color:#ffffff}
        table.button-green.tiny:hover table tr td a{color:#ffffff}
        table.button-green.tiny:active table tr td a{color:#ffffff}
        table.button-green.tiny table tr td a:visited{color:#ffffff}
        table.button-green.small:hover table tr td a{color:#ffffff}
        table.button-green.small:active table tr td a{color:#ffffff}
        table.button-green.small table tr td a:visited{color:#ffffff}
        table.button-green.large:hover table tr td a{color:#ffffff}
        table.button-green.large:active table tr td a{color:#ffffff}
        table.button-green.large table tr td a:visited{color:#ffffff}
        table.button-green:hover table td{background:#9DD64F;color:#fefefe}
        table.button-green:visited table td{background:#9DD64F;color:#fefefe}
        table.button-green:active table td{background:#9DD64F;color:#fefefe}
        table.button-green:hover table a{border:0 solid #9DD64F}
        table.button-green:visited table a{border:0 solid #9DD64F}
        table.button-green:active table a{border:0 solid #9DD64F}
        .button.bg-yellow:hover{background-color:#ffdc99}
        .footer .menu th:not(:first-child):before{content:" | "}
        .before-triangle:before{content:'';width:0;height:0;border-top:9px solid transparent;border-left:12px solid #ffc14b;border-bottom:9px solid transparent;margin-left:-20px;margin-top:2px;position:absolute;clear:both}
      </style>
      <style type="text/css">
        .ExternalClass {
                                    width: 100%
                                }
                                .ExternalClass,
                                .ExternalClass p,
                                .ExternalClass span,
                                .ExternalClass font,
                                .ExternalClass td,
                                .ExternalClass div {
                                    line-height: 100%
                                }
                                @media only screen {
                                    html {
                                        min-height: 100%;
                                        background: #f3f3f3
                                    }
                                }
                                /*Columns Padding*/
                                @media only screen and (max-width: 596px) {
                                    .small-float-center {
                                        margin: 0 auto!important;
                                        float: none!important;
                                        text-align: center!important
                                    }
                                    .small-text-center {
                                        text-align: center!important
                                    }
                                    .small-text-left {
                                        text-align: left!important
                                    }
                                    .small-text-right {
                                        text-align: right!important
                                    }
                                }
                                @media only screen and (max-width: 596px) {
                                    table.body table.container .hide-for-large {
                                        display: block!important;
                                        width: auto!important;
                                        overflow: visible!important
                                    }
                                }
                                @media only screen and (max-width: 596px) {
                                    table.body table.container .row.hide-for-large,
                                    table.body table.container .row.hide-for-large {
                                        display: table!important;
                                        width: 100%!important
                                    }
                                }
                                @media only screen and (max-width: 596px) {
                                    table.body table.container .show-for-large {
                                        display: none!important;
                                        width: 0;
                                        mso-hide: all;
                                        overflow: hidden
                                    }
                                }
                                @media only screen and (max-width: 596px) {
                                    table.body img {
                                        width: auto!important;
                                        height: auto!important
                                    }
                                    table.body center {
                                        min-width: 0!important
                                    }
                                    table.body .container {
                                        width: 95%!important
                                    }
                                    table.body .columns,
                                    table.body .column {
                                        height: auto!important;
                                        -moz-box-sizing: border-box;
                                        -webkit-box-sizing: border-box;
                                        box-sizing: border-box;
                                    }
                                    table.body .columns .column,
                                    table.body .columns .columns,
                                    table.body .column .column,
                                    table.body .column .columns {
                                        padding-left: 6px!important;
                                        padding-right: 6px!important
                                    }
                                    table.body .collapse .columns,
                                    table.body .collapse .column {
                                        padding-left: 0!important;
                                        padding-right: 0!important
                                    }
                                    td.small-1,
                                    th.small-1 {
                                        display: inline-block!important;
                                        width: 8.33333%!important
                                    }
                                    td.small-2,
                                    th.small-2 {
                                        display: inline-block!important;
                                        width: 16.66667%!important
                                    }
                                    td.small-3,
                                    th.small-3 {
                                        display: inline-block!important;
                                        width: 25%!important
                                    }
                                    td.small-4,
                                    th.small-4 {
                                        display: inline-block!important;
                                        width: 33.33333%!important
                                    }
                                    td.small-5,
                                    th.small-5 {
                                        display: inline-block!important;
                                        width: 41.66667%!important
                                    }
                                    td.small-6,
                                    th.small-6 {
                                        display: inline-block!important;
                                        width: 50%!important
                                    }
                                    td.small-7,
                                    th.small-7 {
                                        display: inline-block!important;
                                        width: 58.33333%!important
                                    }
                                    td.small-8,
                                    th.small-8 {
                                        display: inline-block!important;
                                        width: 66.66667%!important
                                    }
                                    td.small-9,
                                    th.small-9 {
                                        display: inline-block!important;
                                        width: 75%!important
                                    }
                                    td.small-10,
                                    th.small-10 {
                                        display: inline-block!important;
                                        width: 83.33333%!important
                                    }
                                    td.small-11,
                                    th.small-11 {
                                        display: inline-block!important;
                                        width: 91.66667%!important
                                    }
                                    td.small-12,
                                    th.small-12 {
                                        display: inline-block!important;
                                        width: 100%!important
                                    }
                                    .columns td.small-12,
                                    .column td.small-12,
                                    .columns th.small-12,
                                    .column th.small-12 {
                                        display: block!important;
                                        width: 100%!important
                                    }
                                    table.body td.small-offset-1,
                                    table.body th.small-offset-1 {
                                        margin-left: 8.33333%!important
                                    }
                                    table.body td.small-offset-2,
                                    table.body th.small-offset-2 {
                                        margin-left: 16.66667%!important
                                    }
                                    table.body td.small-offset-3,
                                    table.body th.small-offset-3 {
                                        margin-left: 25%!important
                                    }
                                    table.body td.small-offset-4,
                                    table.body th.small-offset-4 {
                                        margin-left: 33.33333%!important
                                    }
                                    table.body td.small-offset-5,
                                    table.body th.small-offset-5 {
                                        margin-left: 41.66667%!important
                                    }
                                    table.body td.small-offset-6,
                                    table.body th.small-offset-6 {
                                        margin-left: 50%!important
                                    }
                                    table.body td.small-offset-7,
                                    table.body th.small-offset-7 {
                                        margin-left: 58.33333%!important
                                    }
                                    table.body td.small-offset-8,
                                    table.body th.small-offset-8 {
                                        margin-left: 66.66667%!important
                                    }
                                    table.body td.small-offset-9,
                                    table.body th.small-offset-9 {
                                        margin-left: 75%!important
                                    }
                                    table.body td.small-offset-10,
                                    table.body th.small-offset-10 {
                                        margin-left: 83.33333%!important
                                    }
                                    table.body td.small-offset-11,
                                    table.body th.small-offset-11 {
                                        margin-left: 91.66667%!important
                                    }
                                    table.body table.columns td.expander,
                                    table.body table.columns th.expander {
                                        display: none!important
                                    }
                                    table.body .right-text-pad,
                                    table.body .text-pad-right {
                                        padding-left: 10px!important
                                    }
                                    table.body .left-text-pad,
                                    table.body .text-pad-left {
                                        padding-right: 10px!important
                                    }
                                    table.menu {
                                        width: 100%!important
                                    }
                                    table.menu td,
                                    table.menu th {
                                        width: auto!important;
                                        display: inline-block!important
                                    }
                                    table.menu.vertical td,
                                    table.menu.vertical th,
                                    table.menu.small-vertical td,
                                    table.menu.small-vertical th {
                                        display: block!important
                                    }
                                    table.menu[align="center"] {
                                        width: auto!important
                                    }
                                }
                                /*Custom */
                                /*Column Reset*/
                                /*Blue*/
                                /* gray */
                                /* green*/
                                /*dark green*/
                                /*Orange*/
                                /* light */
                                /*Orange Button*/
                                /*Orange Hover*/
                                /*Green Button*/
                                /*green Hover*/
                                /*ADDITIONAL CSS FOR THIS PAGE*/
                                @media only screen and (max-width: 596px) {
                                    .show-mobile {
                                        display: block !important;
                                        width: auto !important;
                                        max-height: inherit !important;
                                        overflow: visible !important;
                                        float: none !important;
                                    }
                                    .hide-mobile {
                                        display: none !important;
                                    }
                                    .mobile-word-wrap br {
                                        display: none;
                                    }
                                }
      </style>
    </head>
    <body style="min-width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;width:100% !important;">
      <!-- <style> -->
      <table class="body" data-made-with-foundation="" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;background:#f3f3f3;height:100%;width:100%;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;background-color: #ffffff;">
        <tr style="padding:0;vertical-align:top;text-align:left;">
          <td class="float-center" align="center" valign="top" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;float:none;text-align:center;border-collapse:collapse !important;">
            <center data-parsed="" style="width:100%;min-width:580px;">
              <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                <tbody>
                  <tr style="padding:0;vertical-align:top;text-align:left;">
                    <td height="20px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:20px;line-height:20px;">&#xA0;</td>
                  </tr>
                </tbody>
              </table>
              <table border="0" cellspacing="0" cellpadding="0" class="wrapper float-center" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;margin:0 auto;float:none;text-align:center;">
                <tbody>
                  <tr style="padding:0;vertical-align:top;text-align:left;">
                    <td class="wrapper-inner" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                      <table class="container " border="0" cellspacing="0" cellpadding="0" width="600" align="center" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;background:#fefefe;width:600px;margin:0 auto;text-align:inherit;background-color: #f7f8f9;margin: 0 auto 0 auto; width: 600px;">
                        <tbody>
                          <tr style="padding:0;vertical-align:top;text-align:left;">
                            <td style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                              <table class="wrapper" align="center" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;background-color:#ffffff;">
                                <tr style="padding:0;vertical-align:top;text-align:left;">
                                  <td class="wrapper-inner" height="" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                    <table class="wrapper  header-with-image" align="center" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                      <tr style="padding:0;vertical-align:top;text-align:left;">
                                        <td class="wrapper-inner" height="" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                          <div>
                                            <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;width:100%;position:relative;display:table;">
                                              <tbody>
                                                <tr style="padding:0;vertical-align:top;text-align:left;">
                                                  <th class="small-12 large-12 columns last px-0" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:600px;padding-left:8px;padding-right:8px;padding-right:6px;padding-right:0px !important;padding-left:0px !important;">
                                                    <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                      <tr style="padding:0;vertical-align:top;text-align:left;">
                                                        <th style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;vertical-align:middle;text-align:center;">
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;background: #d49a8c;">
                                                            <a href="http://www.firstvotenc.org/" title="Free Shipping!" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;">
                                                              <img src="http://scribble.studio/ednc/emails/firstvote/img/background.jpg" class="" title="First Vote NC" alt="First Vote NC" style="outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;width:auto;max-width:100%;clear:both;display:block;border:none;width:100%;font-size: 40px;line-height: 60px; text-align:center;color:#000000;min-height: 100px;background: #ffffff;     white-space: pre-line;"/>
                                                                                                                </a>
                                                          </center>
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                            <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                              <tbody>
                                                                <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                  <td height="20px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:20px;line-height:20px;">&#xA0;</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <img src="http://scribble.studio/ednc/emails/firstvote/img/star.png" class="text-center " title="⭐" alt="⭐" style="outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;width:auto;max-width:100%;clear:both;display:block;margin:0 auto;float:none;text-align:center;text-align:center !important;line-height:40px;width:auto;font-size: 42px;text-align:text-center;color:#151a47;"/>
                                                                                                            </center>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="10px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:10px;line-height:10px;">&#xA0;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                            <h1 class="nc-blue-text text-center bold" style='color:inherit;word-wrap:normal;font-family:"Times New Roman", Times, serif;font-weight:400;margin:0;line-height:1.3;font-size:42px;color:#8DC63F;color:#151a47;font-weight:bold;text-align:center;text-align:center !important;'>Welcome to First Vote!</h1>
                                                          </center>
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                            <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                              <tbody>
                                                                <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                  <td height="10px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:10px;line-height:10px;">&#xA0;</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <img src="http://scribble.studio/ednc/emails/firstvote/img/star.png" class="text-center " title="⭐" alt="⭐" style="outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;width:auto;max-width:100%;clear:both;display:block;margin:0 auto;float:none;text-align:center;text-align:center !important;line-height:40px;width:auto;font-size: 42px;text-align:text-center;color:#151a47;"/>
                                                                                                            </center>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="10px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:10px;line-height:10px;">&#xA0;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </th>
                                                      </tr>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                              <tbody>
                                                <tr style="padding:0;vertical-align:top;text-align:left;">
                                                  <td height="0px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:0px;line-height:0px;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                              <table class="wrapper bg-white" align="" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;background-color:#ffffff;">
                                <tbody>
                                  <tr style="padding:0;vertical-align:top;text-align:left;">
                                    <td class="wrapper-inner" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                      <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                        <tbody>
                                          <tr style="padding:0;vertical-align:top;text-align:left;">
                                            <td height="15px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:15px;line-height:15px;">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;width:100%;position:relative;display:table;">
                                        <tbody>
                                          <tr style="padding:0;vertical-align:top;text-align:left;">
                                            <th class="small-12 large-12 columns   px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:600px;padding-left:8px;padding-right:8px;padding-right:30px !important;padding-left:30px !important;">
                                              <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                <tbody>
                                                  <tr style="padding:0;vertical-align:top;text-align:left;">
                                                    <th class=" px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;padding-right:30px !important;padding-left:30px !important;">
                                                      <p class="nc-blue-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;text-align:left;">
                                                        Thank you for signing up for First Vote NC: Local Elections 2017.
																									</p>
                                                      <p class="nc-blue-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;text-align:left;">
                                                        It speaks well of your leadership and your willingnes to explore new oppurtunities for your students.
																									</p>
                                                      <p class="nc-blue-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;text-align:left;">
                                                        We have developed an engaging and impactful project-based resource that aligns with standards and provides
																										you with tools to energize your students to become civically connected.
																									</p>
                                                      <p class="nc-blue-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;text-align:left;">
                                                        Check out the 17 lesson plans now available on our website, and look for 3 additional modules by Carolina K-12
																										on local elections that will be available starting September 1st.
																									</p>
                                                    </th>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </th>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                        <tbody>
                                          <tr style="padding:0;vertical-align:top;text-align:left;">
                                            <td height="15px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:15px;line-height:15px;">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <table class="wrapper nc-gray-bg" align="" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;background-color:#dcdfe5;">
                                <tbody>
                                  <tr style="padding:0;vertical-align:top;text-align:left;">
                                    <td class="wrapper-inner" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                      <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                        <tbody>
                                          <tr style="padding:0;vertical-align:top;text-align:left;">
                                            <td height="35px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:35px;line-height:35px;">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;width:100%;position:relative;display:table;">
                                        <tbody>
                                          <tr style="padding:0;vertical-align:top;text-align:left;">
                                            <th class="small-12 large-12 columns   px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:600px;padding-left:8px;padding-right:8px;padding-right:30px !important;padding-left:30px !important;">
                                              <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                <tbody>
                                                  <tr style="padding:0;vertical-align:top;text-align:left;">
                                                    <th class=" px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;padding-right:30px !important;padding-left:30px !important;">
                                                      <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                        <h2 class="nc-blue-text text-center " style='color:inherit;word-wrap:normal;font-family:"Times New Roman", Times, serif;font-weight:400;margin:0;line-height:1.3;font-size:34px;color:#8DC63F;font-weight:bold;color:#151a47;text-align:center;text-align:center !important;'>
                                                          Important Information
																										</h2>
                                                      </center>
                                                      <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                        <tbody>
                                                          <tr style="padding:0;vertical-align:top;text-align:left;">
                                                            <td height="35px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:35px;line-height:35px;">&nbsp;</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                      <p class="nc-red-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#861719;text-align:left;">
                                                        We've made you a custom url for your shool, <a class="text-no-underline nc-red-text bold nc-blue-text" href="<?php echo $school_url; ?>" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#861719;color:#151a47;text-decoration:none;font-weight:bold;"><?php echo $school_name; ?></a>!
																									</p>
                                                        <p class="nc-red-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#861719;text-align:left;">
                                                          Your custom url is: <a class="text-no-underline nc-red-text bold nc-blue-text" href="<?php echo $school_url; ?>" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#861719;color:#151a47;text-decoration:none;font-weight:bold;"><?php echo $school_url; ?></a>
                                                          </p>
                                                          <p class="nc-red-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#861719;text-align:left;">
                                                            You can login in at: <a class="text-no-underline nc-red-text bold nc-blue-text" href="http://wwww.firstvotenc.org/teacher-login/" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#861719;color:#151a47;text-decoration:none;font-weight:bold;">http://wwww.firstvotenc.org/teacher-login/</a> for acess 
																										to your custom site.
																									</p>
                                                        </th>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </th>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                            <tbody>
                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                <td height="25px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:25px;line-height:25px;">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table class="wrapper nc-blue-bg" align="" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;background-color:#151a47;">
                                    <tbody>
                                      <tr style="padding:0;vertical-align:top;text-align:left;">
                                        <td class="wrapper-inner" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                            <tbody>
                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                <td height="35px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:35px;line-height:35px;">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;width:100%;position:relative;display:table;">
                                            <tbody>
                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                <th class="small-12 large-12 columns   px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:600px;padding-left:8px;padding-right:8px;padding-right:30px !important;padding-left:30px !important;">
                                                  <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                    <tbody>
                                                      <tr style="padding:0;vertical-align:top;text-align:left;">
                                                        <th class=" px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;padding-right:30px !important;padding-left:30px !important;">
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                            <h2 class="text-white  text-center " style='color:inherit;word-wrap:normal;font-family:"Times New Roman", Times, serif;font-weight:400;margin:0;line-height:1.3;font-size:34px;color:#8DC63F;font-weight:bold;color:#ffffff;text-align:center;text-align:center !important;'>
                                                              Getting Started
																										</h2>
                                                          </center>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="35px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:35px;line-height:35px;">&nbsp;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <p class="text-white text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#ffffff;text-align:left;">
                                                            To get started with your account, please click the button below and set your password.
																									</p>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="25px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:25px;line-height:25px;">&nbsp;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                            <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;position:relative;width:100%;display:table;">
                                                              <tbody>
                                                                <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                  <th class="small-12 large-3 columns first" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-bottom:6px;width:129px;padding-left:8px;padding-right:8px;padding-left:6px;width:25%;">
                                                                    <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                                      <tbody>
                                                                        <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                          <td height="1px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:1px;line-height:1px;">&nbsp;</td>
                                                                        </tr>
                                                                      </tbody>
                                                                    </table>
                                                                  </th>
                                                                  <th class="small-12 large-6 columns " style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:274px;padding-left:8px;padding-right:8px;width:50%;">
                                                                    <table class=" button nc-red-bg large expand text-white text-center border-radius" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;background-color:#861719;color:#ffffff;text-align:center;margin:0 0 2px;border-radius:0px;width:100%;text-align:center !important;width:auto !important;width:100% !important;border-radius:10px !important;">
                                                                      <tbody>
                                                                        <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                          <td class="text-center" align="center" valign="middle" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;text-align:center;border-collapse:collapse !important;text-align:center !important;">
                                                                            <center style="width:100%;min-width:580px;min-width:242px;min-width:532px;min-width:0;min-width: auto;" data-parsed="">
                                                                              <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                                                <tbody>
                                                                                  <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                                    <td class="text-center text-white" align="center" valign="middle" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;color:#ffffff;text-align:center;text-align:left;border-collapse:collapse !important;text-align:center !important;">
                                                                                      <center align="center" class="text-center" data-parsed="" style="width:100%;min-width:580px;min-width:242px;min-width:532px;min-width:0;text-align:center !important;min-width: auto;">
                                                                                        <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                                                          <tbody>
                                                                                            <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                                              <td height="10px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;text-align:left;border-collapse:collapse !important;font-size:10px;line-height:10px;">&nbsp;</td>
                                                                                            </tr>
                                                                                          </tbody>
                                                                                        </table>
                                                                                        <a href="#" class="text-center text-white min-h-20 " title="Get started!" style="color:#0a0a0a;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#ffffff;min-height:20px;font-family:Helvetica, Arial, sans-serif;font-size:16px;font-weight:300;text-decoration:none;display:inline-block;padding:8px 16px;border-radius:3px;padding:0px 20px;font-size:15px;text-align:center;width:100%;padding-left:0;padding-right:0;text-align:center !important;">
                                                                                          <p class="text-white lead" style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#ffffff;font-size:20px;line-height:1.6;"><span class="bold" style="font-weight:bold;">GET STARTED</span></p>
                                                                                        </a>
                                                                                        <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                                                          <tbody>
                                                                                            <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                                              <td height="5px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;text-align:left;border-collapse:collapse !important;font-size:5px;line-height:5px;">&nbsp;</td>
                                                                                            </tr>
                                                                                          </tbody>
                                                                                        </table>
                                                                                      </center>
                                                                                    </td>
                                                                                  </tr>
                                                                                </tbody>
                                                                              </table>
                                                                            </center>
                                                                          </td>
                                                                        </tr>
                                                                      </tbody>
                                                                    </table>
                                                                  </th>
                                                                  <th class="small-12 large-3 columns last" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:129px;padding-left:8px;padding-right:8px;padding-right:6px;width:25%;">
                                                                    <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                                      <tbody>
                                                                        <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                          <td height="1px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:1px;line-height:1px;">&nbsp;</td>
                                                                        </tr>
                                                                      </tbody>
                                                                    </table>
                                                                  </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </center>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="25px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:25px;line-height:25px;">&nbsp;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                        </th>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </th>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table class="wrapper bg-white" align="" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;background-color:#ffffff;">
                                    <tbody>
                                      <tr style="padding:0;vertical-align:top;text-align:left;">
                                        <td class="wrapper-inner" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                            <tbody>
                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                <td height="35px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:35px;line-height:35px;">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;width:100%;position:relative;display:table;">
                                            <tbody>
                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                <th class="small-12 large-12 columns   px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-left:6px;padding-bottom:6px;width:600px;padding-left:8px;padding-right:8px;padding-right:30px !important;padding-left:30px !important;">
                                                  <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                    <tbody>
                                                      <tr style="padding:0;vertical-align:top;text-align:left;">
                                                        <th class=" px-5" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;padding-right:30px !important;padding-left:30px !important;">
                                                          <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                            <h2 class="nc-blue-text text-center " style='color:inherit;word-wrap:normal;font-family:"Times New Roman", Times, serif;font-weight:400;margin:0;line-height:1.3;font-size:34px;color:#8DC63F;font-weight:bold;color:#151a47;text-align:center;text-align:center !important;'>
                                                              Thank You!
																										</h2>
                                                          </center>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="25px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:25px;line-height:25px;">&nbsp;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <p class="nc-blue-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;text-align:left;">
                                                            In the meantime if you have questions, please don't hesitate to contact me. My email is 
																										<a class="text-no-underline bold nc-blue-text" href="mailto:hunterbuxton@gmail.com" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#151a47;text-decoration:none;font-weight:bold;">hunterbuxton@gmail.com</a> and my cell number is 
																										<a class="text-no-underline bold nc-blue-text" href="tel:919-605-5317" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#151a47;text-decoration:none;font-weight:bold;">919-605-5317</a>.
																									</p>
                                                          <p class="nc-blue-text text-left " style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;text-align:left;">
                                                            We are grateful for your willingness to explore this opportunity. We understand the tremendous demands placed on teachers and our intent is to 
																										not add to that burden, but provide a resource that brings excitement to this immensely important lesson.
																									</p>
                                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                            <tbody>
                                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                                <td height="25px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:25px;line-height:25px;">&nbsp;</td>
                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                          <p class="nc-blue-text text-left lh-15" style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;line-height:15px;text-align:left;">
                                                            Hunter Buxton
																									</p>
                                                          <p class="nc-blue-text text-left lh-15" style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;line-height:15px;text-align:left;">
                                                            Executive Director
																									</p>
                                                          <p class="nc-blue-text text-left lh-15" style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#151a47;line-height:15px;text-align:left;">
                                                            First Vote NC
																									</p>
                                                        </th>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </th>
                                              </tr>
                                            </tbody>
                                          </table>
                                          <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                            <tbody>
                                              <tr style="padding:0;vertical-align:top;text-align:left;">
                                                <td height="25px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:25px;line-height:25px;">&nbsp;</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <table class="wrapper row  footer" align="center" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;background-color:#dcdfe5;padding:0;width:100%;position:relative;display:table;">
                                    <tr style="padding:0;vertical-align:top;text-align:left;">
                                      <td class="wrapper-inner" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;">
                                        <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                                          <tbody>
                                            <tr style="padding:0;vertical-align:top;text-align:left;">
                                              <td height="20px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:20px;line-height:20px;">&#xA0;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;padding:0;width:100%;position:relative;display:table;">
                                          <tbody>
                                            <tr style="padding:0;vertical-align:top;text-align:left;">
                                              <th class="small-12 large-12 columns first last" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin:0 auto;padding-bottom:6px;width:600px;padding-left:8px;padding-right:8px;padding-left:6px;padding-right:6px;">
                                                <table style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;width:100%;">
                                                  <tr style="padding:0;vertical-align:top;text-align:left;">
                                                    <th style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;">
                                                      <center style="width:100%;min-width:580px;min-width:532px;min-width: auto;">
                                                        <p class="text-center nc-red-text text-center lh-15" style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#861719;line-height:15px;text-align:center;text-align:center !important;">
                                                          Have any questions?
                                                                                                </p>
                                                        <p class="text-center nc-red-text text-center" style="margin:0 0 0 10px;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;margin-bottom:10px;color:#84919D;color:#861719;text-align:center;text-align:center !important;">
                                                          Email <a class="text-no-underline bold nc-blue-text" href="mailto:help@firstvote.com" style="color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;color:#8DC63F;text-decoration:underline;color:#151a47;text-decoration:none;font-weight:bold;">help@firstvote.com</a> for help
                                                                                                </p>
                                                      </center>
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
                        </td>
                      </tr>
                      <table class="spacer" style="border-spacing:0;border-collapse:collapse;padding:0;vertical-align:top;text-align:left;">
                        <tbody>
                          <tr style="padding:0;vertical-align:top;text-align:left;">
                            <td height="20px" style="word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;hyphens:auto;vertical-align:top;text-align:left;color:#0a0a0a;font-family:Helvetica, Arial, sans-serif;font-weight:400;padding:0;margin:0;line-height:1.3;font-size:18px;line-height:25px;border-collapse:collapse !important;font-size:20px;line-height:20px;">&#xA0;</td>
                          </tr>
                        </tbody>
                      </table>
                    </tbody>
                  </table>
                </center>
              </td>
            </tr>
          </table>
        </body>
      </html>