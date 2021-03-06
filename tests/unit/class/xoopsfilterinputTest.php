<?php
require_once(dirname(__FILE__).'/../init.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsFilterInputTest extends \PHPUnit_Framework_TestCase
{
    protected $myclass = 'XoopsFilterInput';
    
    public function test___construct()
	{
		$x = new $this->myclass();
        $this->assertInstanceOf($this->myclass, $x);
        $this->assertInstanceOf('Xoops\Core\FilterInput', $x);
    }
        
}
