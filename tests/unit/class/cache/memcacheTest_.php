<?php
require_once(dirname(__FILE__).'/../../init_mini.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsCacheMemcacheTest extends \PHPUnit_Framework_TestCase
{
    protected $myclass = 'XoopsCacheMemcache';
	
    public function test__construct()
	{
		$instance = new $this->myclass(null);
		$this->assertInstanceOf($this->myclass, $instance);
		$this->assertInstanceOf('Xoops_Cache_Memcache', $instance);
    }
	
}
