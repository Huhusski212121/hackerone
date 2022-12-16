<?php
    $protocol = $_SERVER['SERVER_PROTOCOL'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $port = $_SERVER['REMOTE_PORT'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $ref = $_SERVER['HTTP_REFERER'];
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $dateTime = date('Y/m/d G:i:s');

    $fh = fopen('log.txt', 'a');
    fwrite($fh, 'IP Address: '."".$ip ."\n");
    fwrite($fh, 'Hostname: '."".$hostname ."\n");
    fwrite($fh, 'Port Number: '."".$port ."\n");
    fwrite($fh, 'User Agent: '."".$agent ."\n");
    fwrite($fh, 'HTTP Referer: '."".$ref ."\n");
    fwrite($fh, 'Date: '."".$dateTime ."\n\n");
    fclose($fh);
    ?> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div {
  margin-bottom: 15px;
  padding: 4px 12px;
}

.danger {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #04AA6D;
}

.info {
  background-color: #e7f3fe;
  border-left: 6px solid #2196F3;
}


.warning {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
}
</style>
</head>
<body>

<h2>Hello World !</h2>
<div class="danger">
  <p><strong>Danger!</strong> I can make the victim download anything automatically</p>
</div>

<div class="success">
  <p><strong>Success! the app install on your phone .... !</strong> Some text...</p>
</div>

<div class="info">
  <p><strong>Info!</strong>i can redirect this page to any another page</p>
</div>

<div class="warning">
  <p><strong>Warning!</strong>Any link or addition in the site address will direct you to this page ..... !</p>
</div>

</body>
</html>
