<!DOCTYPE html>
<html>
  <style>

    body{
      background-color: #F5F5F5;
    }
    h1{
      color: #1976D2 !important;
      text-align: center;
    }
    h2{
      color: #1976D2 !important;
      text-align: center;
    }
    h3{
      color: #3c40c6 !important;
      text-align: center;
    }
    img{
      display: block;
      width: 375px;
      height: 375px;
      margin: 0 auto;
    }
    #flag{
    	color: #1976D2 !important;
      text-align: center;
      display: block;
    }
  </style>
  <head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-3.3.1.min.js"></script>
    <title>敲打仓鼠王</title>
  </head>
  <body>
    <h2>仓鼠王又来偷吃瓜子了，让我们打他10000000次解锁Flag吧！</h2>
    <h3>源代码有彩蛋！</h3>
    <h1 id="goal">Hits: <span id="clickcount">0</span>/10000000</h1>
    <img id="Click" src="img/cx.png">
    <span id="flag">
    	<?php
if (isset($_POST['clicks'])) {
    $clicks = $_POST['clicks'];
    if ($clicks >= 10000000) {
        $flag_first  = "C4n9_5hu_vv4n9_10v3_m3l0n_5e3d5_!";
        $flag_second = base64_encode(base64_encode(base64_encode($flag_first)));
        $flag_final  = strrev($flag_second);
        echo "flag{" . $flag_final . "}";
    }
}

?></span>
  </body>
  <script>
    var clicks=0;
    $(function() {
      $("#Click")
        .mousedown(function() {
          $(this).width('350px').height('350px');
        })
        .mouseup(function() {
          $(this).width('375px').height('375px');
          clicks++;
          $("#clickcount").text(clicks);
          if(clicks >= 10000000){
          	var form = $('<form action="" method="post">' +
						'<input type="text" name="clicks" value="' + clicks + '" hidden/>' +
						'</form>');
						$('body').append(form);
						form.submit();
          }
        });
    });
  </script>
</html>
<!-- 
```''''''''''''''''''''''''''''''''''':;$$!!!!!!;;;;;;;!!!!!!;;!!!!;;;;;;;;;;;!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                                        '%|''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''':
              .``.                       :%!'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''':
             `'``''.                     `%|'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''':
            `'`...`''.                   `%%'''''''''''''``'':;|%$&@@@@@@@@@@@&$$%|;:''```':!!;:'''''''''''''''''''''''''''''''':
           .''......`'::'''''':`         '%|''''''':!%&@@&$|;:'`.............`:;;;;!|%$&@@@@%;';%&%:'''''''''''''''''''''''''''':
        .`':'`...............''.        .!%:':!$&&%;`....                      .'::::;;:::::;!|$&&&@|''''''''''''''''''''''''''':
     .`::`.................`''.         ;&&&&!`.                                 `'::::;;;::::;:::;|&@%;'''''''''''''''''''''''':
   `''`...................''.          ;$|`  .                                    `'''':::::::::::::::!$@%:''''''''''''''''''''':
  .`:'``...............`':'.          ;$;.                                        .''''''::::::::::::::;;|&$;''''''''''''''''''':
     ..```'':`...........`''.       `|%'                                           .''''''':::::::::::::::;!$$;''''''''''''''''':
           `'..............''`    .;$;                                             .''''''''::::::::::::::::;|&|'''''''''''''''':
          .''....':''::::''':'.  '$%`     .':::.                                    `'''''''':::::::::::::::::|$!''''''''''''''':
          `'`..':`.       ...  '%%'      `:'..''                                    `''''''''':::::::::::::::;;%$;`':!;''''''''':
          `''''`.           .:$%'      .''`  .''.                                   `'''''''''::::::::::::::;::|&@@$|!$$;''''''':
           ``.         .`'!&&;.       .:'...``''`':`.';:'''`                        `'''''''''':::::::::::::!%&$!::::;!$%:'''''':
                .``  .!&|;%%`        .:' .':''::'.   `:'`..                         `''''''''''::::::::::;|&$!::;;:::;;%$;'''''':
          `:%@@&%|$! '%!'|%'        .''.    ....':'`.''....                         `''''''''''':::::::;$@%;:;$&%$%::;;|$!'''''':
 .`:!$&@&%!:''''''!%;!%:!$:                        ..':'`.                         .`''''''''''':::::;$&|::!$$:..!$;:;;|$!'''''':
|!;:'''''''''''''''!&@|:%!.  `|&&&@@@&&$|;'`            ..`::`                     .''''''''''''':::|$%::;%$:.. .!$;:;;|$!'''''':
'''''''''''''''''''':;:|%:.  ....  ...   .';|&@&%:.                                `'''''''''''''::;$%;:|&|:'`. .!$;:;;|$!'''''':
'''''''''''''''''''''':$@@@@@@@&&$|;'..  .....  .'!&@$;.                           `''';$@&|;:'''::|$!:;%@&%;:::;$%:;;;|$!'''''':
''''''''''''''''''';%@$!:''''''''::;!%$@@&%;`. .......'|&$;.                      .'';$%' .`:!$@@$%$%!;;;;;;%&@$$$!::;;%$;'''''':
'''''''''''''''';$&|:''''''''''''''''''''':;|$&&%;'.......'|&%'.                  `:|$'  .;%$!`  .`:|$&&%|!!;;!||;;;;;!$%:'''''':
'''''''''''''!$&|:''''''''''''''''''''''''''''''':|$@&%;`....`;%;..       .......`:%$'  .|$!|&!.        .'!&@@&%|!;;;;%$;''''''':
'''''''''';$&|:''''''''''''''''''''''''''''''''''''''':;%&@$;`...         ....``';|$!.   .':'.    .;&&@$'      .'!$@@&@%:''''''':
'''''''!$&|:'''''''''''''''''''''''''''''''''''''''::::::;!$@@&&&&&&&&&&&&$%%|||!!!|%$&@@&|;'.     '%&$;.   :$&|`    .;$%:'''''':
''':!&&%!!;::''''''''''''''''''''''''''''''':::::;:;;|$&&%!;:::::::::::::::::::::::::::::::;!|$&&$|:`.     `%&$$; .!&$:`|%:''''':
'':%@$%!;!!|%&@@$|;:''''''''''''''''''::::::;::;|$@&|;::::::::::::::::::::::::::::::::;!%$|;:::::::;!%&@&|:`.    .|&&&!.|%:''''':
''''`':;%&@&%!;::!|$@@$|;'''''''''::;;::::;!$@@$!::::::::::::::::::::::::::::::::::::|@#####&!::::::::::::;%&@&%:.     `%|'''''':
'''''''''''':|$@@&%!;::!%$@@&&&@@&|;:;!$@@$|;:::::::::::::::::::::::::::::::::::::::|@@###@@#&!:::::::::::::::::!%&@$!!$&!'''''':
'''''''''''''''''':!%&&&$|!;:::;;|$&&$|!;;;;;::::::::::::::::::::::::::::::::::::::|&#@@@@@@#@|::::::::::::::::::;;!%$;''''''''':
''''''''''''''''''''''|$|;!%$&&$|;::|&@@&@@@@######@@&%!;:::::::::::::::::::::::::;%@@@@@@@@@@%::::::::::::::::::;;;%$;''''''''':
''''''''''''''''''''';$%;:::::::::::;|$@#####@@##@@@@@##&!:::::::!|%%%|;::::::::::;$@@@@@@@@@@|:::::::::::::::::::;;|$!''''''''':
'''''''''''''''''''''!$|;;::::::::;%@@&$%%$&@######@$|;::::::::;|@####@%;::::::::::%@###@@@@#&!:::::::::::::::::::;;|$!''''''''':
'''''''''''''''''''''|$|;;:::::::::;|$@#####@&%!;:::::::::::::::`..````''::::::::::!&#@@@@@#&|::::::::::::::::::::;;%$!''''''''':
'''''''''''''''''''''|$!;;::::::;%@#@&$%!;::::::::::::::::'`.                .`'::::!$@###@$!::::::::::::::::::::;;;%$;''''''''':
'''''''''''''''''''''|%'`':::::::::::::::::::::::::'`.                                `:;;:::::::::::::::::::::::;;!$&;''''''''':
'''''''''''''''''';$&!`.       ..```````....                          ;&|`                          ...```'''''':::::;$&!''''''':
'''''''''''''''';&%'..                                              .|%'                                             ..'$%:''''':
'''''''''''''':%$:..                                             .':|%`                                               ..`|$:'''':
''''''''''''''|$'..        .`'. .''.  .`.                       .'''%!.                          .`''`.`''..`'`        ..`|%:''':
'''''''''''''!$;..        .`'`..`''. .''.                          .!%'                          `'''``'''.`''`         ..'%|''':
'''''''''''''!$:..        .''` .''`  .``                            .;!.                        .`''`.`'`. `''.         ..`|%:'':
''''''''''''';%!.         .``.                                                                                          ...!%:'':
''''''''''''''!$;..                                                                                                     ..`|%:'':
'''''''''''''''!$!..                                                                                                    ..!$;''':
'''''''''''''''':%&:..                                                                                                 .`%$;'''':
'''''''''''''''''':|&!`..                                                                                           ..`|&!'''''':
'''''''''''''''|&&$$$@@@$;`...                                                                                     `!&$;'''''''':
'''''''''''''';$!..... ..'|&@&%!:`.                                                                           `:%@@%:''''''''''':
'''''''''''''''!$!.          ..`':!%$&@@@@@@&&$$$$$$$$$&&&|`                                  ...``':!|%&@@@@$|;'''''''''''''''':
'''''''''''''''':%$'                   ..  ..............                .:!||||||||%%%%%%|%&@$|!;;::''''''''''''''''''''''''''':
''''''''''''''''''!$%`                                                                     ..`!&$;'''''''''''''''''''''''''''''':
'''''''''''''''''''';$$:.                                                                       `|&%:''''''''''''''''''''''''''':
'''''''''''''''''''''''|&&;.                                                                       '$&!''''''''''''''''''''''''':
'''''''''''''''''''''''''';%@&!'.      .;:.                                                          `!&%:'''''''''''''''''''''':
''''''''''''''''''''''''''''''';|&@&%!:|$!`                                                             '%&|'''''''''''''''''''':
'''''''''''''''''''''''''''''''''''''';$%:`                                              .:$|`             :$&!''''''''''''''''':
''''''''''''''''''''''''''''''''''''''|$!'.                                                .;$@$;`           .;&$!'''''''''''''':
''''''''''''''''''''''''''''''''''''';%%:`                                                  .:;!|%@@&%;'`.      `|&!'''''''''''':
'''''''''''''''''''''''''''''''''''''!$!:`                                                   `::;;|&|'':!|%$&&&&&&|:'''''''''''':
'''''''''''''''''''''''''''''''''''''%$;'.                                                   `:::;!%$!'''''''''''''''''''''''''':
'''''''''''''''''''''''''''''''''''':$%;'.                                                   .'::;;!$$:''''''''''''''''''''''''':

               -->
