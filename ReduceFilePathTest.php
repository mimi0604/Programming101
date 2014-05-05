<?php
require_once 'simpletest/autorun.php';
require_once 'ReduceFilePath.php';

class ReduceFilePathTest extends UnitTestCase
{
    public function testReduceFilePath1()
    {
        $this->assertEqual("/", reduce_file_path("/"));
    }
    public function testReduceFilePath2()
    {
        $this->assertEqual("/", reduce_file_path("/srv/../"));
    }
	public function testReduceFilePath3()
    {
        $this->assertEqual("/srv/www/htdocs/wtf", reduce_file_path("/srv/www/htdocs/wtf/"));
    }
	public function testReduceFilePath4()
    {
        $this->assertEqual("/srv/www/htdocs/wtf", reduce_file_path("/srv/www/htdocs/wtf"));
    }
	public function testReduceFilePath5()
    {
        $this->assertEqual("/srv", reduce_file_path("/srv/./././././"));
    }
	public function testReduceFilePath6()
    {
        $this->assertEqual("/etc/wtf", reduce_file_path("/etc//wtf/"));
    }
    public function testReduceFilePath7()
    {
        $this->assertEqual("/", reduce_file_path("/etc/../etc/../etc/../"));
    }
    public function testReduceFilePath8()
    {
        $this->assertEqual("/", reduce_file_path("//////////////"));
    }
    public function testReduceFilePath9()
    {
        $this->assertEqual("/", reduce_file_path("//////////////"));
    }	
}

?>
