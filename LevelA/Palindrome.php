<?php 

namespace Hackathon\LevelA;

header('Content-type: text/html; charset=utf-8');

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {
        $str = $this->str;
        $str2 = $str;

        return $str2 . strrev($str2);
    }

}
