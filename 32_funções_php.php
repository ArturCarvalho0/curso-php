<?php
$salt = "dh39dh1w9hsd9";
$password = '123456' . $salt;

// echo md5($password);
// echo sha1($password);
// echo crypt($password, $salt);
// $passCr = base64_encode($password);
// echo $passCr;
// echo base64_decode($passCr);
echo hash('sha512', $password);

echo cryptC($password); 

function cryptC(String $value) : String {
  $hash = crypt($value, "dh39dh1w9hsd9");
  $hash = md5($value);
  $hash = sha1($hash);
  $hash = hash('sha512', $hash);
  return $hash;
}