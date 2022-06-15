<?php
date_default_timezone_set("America/Sao_Paulo");
$example = date('d/m/Y/ h:i:s');
$date = date("Y-m-d");//DATE
$datetime = date("Y-m-d H:i:s");//DATE TIME

// TIMESTAMP
$time = time();

//echo date('d/m/Y', $time);
$data_pagamento = mktime(15,30,00,02,15,2023);
//echo date('d/m - h:i', $data_pagamento);

//STR TO TIME
$data = '2022-06-14 22:10:00';
$data = strtotime($data);

echo date('d/m/Y', $data);

