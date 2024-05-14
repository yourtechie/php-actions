// CalculatorTest.php
use PHPUnit\Framework\TestCase;

require 'Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $this->assertEquals(4, Calculator::add(2, 2));
    }
}
