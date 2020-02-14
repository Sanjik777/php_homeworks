<?php
class BetterBudget extends Budget
{
    public $debt=0;

    public function spendMoney($amount){//tratit s banka, potom svoi
        //uslovie esli deneg ne hvataet

        if(($this->collection-$amount)<0){
            echo 'Havent enough money in wallet';
            self::$bank -=$amount;
            if((self::$bank)-$amount<0){
                $this->debt = self::$bank;
                echo "Havent enough money in bank, you have debt = {$this->debt}";
            }
        }
        else $this->collection-=$amount;

        return $this;
    }
}