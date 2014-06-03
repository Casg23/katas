<?php

namespace GildedRose\Test\Console;

use GildedRose\Console\Program;
use PHPUnit_Framework_TestCase;

class ProgramTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function compareOutput()
    {
        ob_start();
        Program::main();
        $output = ob_get_contents();

        $this->assertEquals($output, file_get_contents('out.txt'));
    }


}