<?php 

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }
    public function mb_strrev($text)
    {
        return join('', array_reverse(
            preg_split('~~u', $text, -1, PREG_SPLIT_NO_EMPTY)
        ));
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

        return $str2 . $this->mb_strrev($str2);
    }

    
}
