<?php

namespace Hackathon\LevelD;

class Bobby
{
    public $wallet = array();
    public $total;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
        $this->computeTotal();
    }

    /**
     * @TODO
     *
     * @param $price
     *
     * @return bool|int|string
     */
    public function giveMoney($price)
    {
        if ($price > $this->total)
            return false;
        while (count($this->wallet) > 0 && count(array_filter($this->wallet, 'is_numeric')) > 0){
            $m = max(array_filter($this->wallet, 'is_numeric'));
            $array = array_filter($this->wallet, 'is_numeric');
            while ($m > $price && count($array) > 0){
                $pos = array_search($m, $array);
                unset($array[$pos]);
                $n = max($array);
                if ($n < $price)
                    break;
                $m = $n;  
            }
            $pos = array_search($m, $this->wallet);
            $price -= $m;
            unset($this->wallet[$pos]);
            $this->computeTotal();
            if ($price <= 0)
                return true;
        }
        return false;
    }

    /**
     * This function updates the amount of your wallet
     */
    private function computeTotal()
    {
        $this->total = 0;

        foreach ($this->wallet as $element) {
            if (is_numeric($element)) {
                $this->total += $element;
            }
        }
    }
}
