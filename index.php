<?php
$date = new DateTime();
header('Content-Type: application/json');
$datetime = date('m/d/Y h:i:s a', time());
$json_ugly = '{"timestamp":1,"hostname":2,"engine":3}';
$json_pretty = json_encode(json_decode($json_ugly), JSON_PRETTY_PRINT);
$json_data = json_decode($json_ugly, true);

$json_data['timestamp'] = $datetime;
$json_data['hostname'] = gethostname();
$json_data['engine'] = 'PHP Version: ' . phpversion();
$json_data['visitor_ip'] = $_SERVER['REMOTE_ADDR'];



$json=json_encode($json_data, true);
echo $json;

?>
