<?php

// backward compatibility - see 
// http://stackoverflow.com/questions/42811164/class-phpunit-framework-testcase-not-found
if (!class_exists('\PHPUnit\Framework\TestCase') &&
    class_exists('\PHPUnit_Framework_TestCase')) {
    class_alias('\PHPUnit_Framework_TestCase', '\PHPUnit\Framework\TestCase');
}

require_once('ucam_webauth.php');

final class Ucam_WebauthTest extends PHPUnit\Framework\TestCase {
	
	public function testCanCreate() {
        $this->assertInstanceOf(
            Ucam_Webauth::class,
            new Ucam_Webauth(array(
	        	'key_dir' => '/srv/www/ucamstuff/webauthkeys/',
				'cookie_key' => 'some random string'))
        );
    }

}
