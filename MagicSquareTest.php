<?php
require_once 'simpletest/autorun.php';
require_once 'MagicSquare.php';

class MagicSquareTest extends UnitTestCase
{
    public function testMagicSquare1()
    {
        $this->assertFalse(magic_square(array([1,2,3], [4,5,6], [7,8,9])));
    }
    public function testMagicSquare2()
    {
        $this->assertTrue(magic_square(array([4,9,2], [3,5,7], [8,1,6])));
    }
	public function testMagicSquare3()
    {
        $this->assertTrue(magic_square(array([7,12,1,14], [2,13,8,11], [16,3,10,5], [9,6,15,4])));
    }
	public function testMagicSquare4()
    {
        $this->assertTrue(magic_square(array([23, 28, 21], [22, 24, 26], [27, 20, 25])));
    }
	public function testMagicSquare5()
    {
        $this->assertFalse(magic_square(array([16, 23, 17], [78, 32, 21], [17, 16, 15])));
    }
}

?>
