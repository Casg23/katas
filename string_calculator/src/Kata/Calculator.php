<?php
namespace Kata;

class InvalidArgumentException extends \Exception{}
class Calculator{
    
    private $separator= ',';

    public function add($numbers)
    {
        $this->getSeparator($numbers);

        if ($this->isInvalidArgument($numbers))
        {
            throw new InvalidArgumentException();
        }

        $numbersExploded = explode($this->separator, str_replace('\n', $this->separator, $numbers));
        return array_sum($numbersExploded);
    }

    public function isInvalidArgument($numbers){
        if (substr($numbers, -2) === '\n') return true;
        if ($this->separator !== ',' && strstr($numbers, ',')) return true;
    }

    private function getSeparator($numbers)
    {
        if (substr($numbers, 0, 2) === '//' && substr($numbers, 3, 2) === '\n') {
            $this->separator = substr($numbers, 2, 1);
        }
    }
}
