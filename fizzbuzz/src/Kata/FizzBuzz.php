<?php
/**
 * Created by PhpStorm.
 * User: carlos.sanchez
 * Date: 30/04/14
 * Time: 14:32
 */

namespace Kata;


class FizzBuzz {

    public function execute($number)
    {
        $result = '';
        if ($this->isFizz($number))  {
           $result .= 'fizz';
        }
        if ($this->isBuzz($number))  {
            $result .= 'buzz';
        }
        if($result == '') {
            $result = $number;
        }

        return $result;
    }

    public function isFizz($number){
        return ($number%3 == 0);
    }

    public function isBuzz($number){
        return ($number%5 == 0);
    }

    public function executeLoop($limit){
        $result = [];
        for($iteration=1; $iteration <= $limit; $iteration++){
            $result[] = $this->execute($iteration);
        }

        return implode(',', $result);
    }
}