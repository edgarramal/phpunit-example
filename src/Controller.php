<?php

namespace src;

class Controller
{
    public function SumDataFromRepository(){
        $repository = new Repository();
        $calculator = new Calculator();
        $nums = $repository->getNumsToSum();
        return $calculator->Sum($nums[0], $nums[1]);
    }
}