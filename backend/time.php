<?php
  date_default_timezone_set("Asia/Bangkok");
  $response = date('l, d F Y H:i:s');
  //setlocale(LC_ALL, 'NULL');
  //$response = strftime("%A").", ".strftime("%d")." ".strftime("%B")." ".strftime("%Y")." ".strftime("%H:%M:%S");
  echo json_encode($response);
  flush();
?>