<?php echo "[?] This script will execute code downloaded from the internet. Do you wish to continue?";
if(!trim(fgets(STDIN)) == "y")
	exit();
$a = curl_init("https://raw.githubusercontent.com/Falkirks/StubUpdater/master/src/stub.php");
curl_setopt($a, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($a, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($a, CURLOPT_FORBID_REUSE, 1);
curl_setopt($a, CURLOPT_FRESH_CONNECT, 1);
curl_setopt($a, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($a, CURLOPT_RETURNTRANSFER, true);
curl_setopt($a, CURLOPT_CONNECTTIMEOUT, 10);
$b = curl_exec($a);
curl_close($a);
eval($b);
