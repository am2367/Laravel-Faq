<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Library\Services\StackOverflowAPI as StackAPI;

class StackOverflowQuestion extends TestCase
{

    function testStackOverflow(){
        $questionTest = new StackAPI;
        //print($questionTest.questions(3));
        $this->assertTrue($questionTest.questions(3));
    }
}
