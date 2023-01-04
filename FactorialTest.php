<?php
use PHPUnit\Framework\TestCase;

require './src/Factorial.php';

class FactorialTest extends TestCase{
    public function testFactorial() {
        $a=new Factorial ;
        $this->assertEquals(1, $a->Factoriala(0), 'failure from factorial(0)');

   $b=new Factorial;
    $this->assertEquals(1, $b->Factoriala(1), 'failure from factorial (1)');
    $c=new Factorial;
    
    $this->assertEquals(120, $c->Factoriala(5), 'failure from factorial(5)');
    
    // n factorial (m-1) 14
    
    $d=new Factorial;
    
    $this->assertEquals($c->Factoriala(5), (5* ($d->Fact(5))), "n! != n*( (n-1)!)");
    
    $e=new Factorial;
    
    $this->assertEquals(null, ($e->Factoriala(-3)), "factorial(-3) is wrong");
     $this->assertEquals(null, ($e->Factoriala(1.5)), "factorial (1.5) is wrong");
    $this->assertEquals(null, ($e->Factoriala(false)), "factorial (false) is wrong") ;
     $this->assertEquals(null, ($e->Factoriala('abc')), "factorial ('abc') is wrong");
    }
}
?>