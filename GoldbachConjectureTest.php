<?php
require_once 'simpletest/autorun.php';
require_once 'GoldbachConjecture.php';

class GoldbachConjectureTest extends UnitTestCase
{
    public function testGoldbachConjecture1()
    {
        $this->assertEqual("[(2, 2)]", goldbach(4));
    }
    public function testGoldbachConjecture2()
    {
        $this->assertEqual("[(3, 3)]", goldbach(6));
    }
	public function testGoldbachConjecture3()
    {
        $this->assertEqual("[(3, 5)]", goldbach(8));
    }
	public function testGoldbachConjecture4()
    {
        $this->assertEqual("[(3, 7), (5, 5)]", goldbach(10));
    }
	public function testGoldbachConjecture5()
    {
        $this->assertEqual("[(3, 97), (11, 89), (17, 83), (29, 71), (41, 59), (47, 53)]", goldbach(100));
    }
}

?>
