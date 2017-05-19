<?php

include_once 'ucam_webauth.php';

$testhostname = 'localhost';

$webauth = new Ucam_Webauth(array(
        'key_dir' => '/srv/www/ucamstuff/webauthkeys/',
	'cookie_key' => 'some random string',
));

$webauth->hostname($testhostname);
$result = $webauth->authenticate();
if (! $result) exit;

$result = $result ? 'true' : 'false';
$status = $webauth->status();
$msg = $webauth->msg();

?>
<html>
<head><title>test</title></head>
<body>
<p>authenticate() returned <?php echo $result ?> with status <?php echo $status ?> and message '<?php echo $msg ?>'.</p>
</body>
</html>
