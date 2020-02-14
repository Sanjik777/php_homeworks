<?php
class Budget
{
    public static $bank=0;
    public $collection=0;

    public function addMoney($amount){//bank
        self::$bank +=$amount;
        return $this;
    }
    public function spendMoney($amount){//tratit s banka, potom svoi
        //uslovie esli deneg ne hvataet
        if((self::$bank)-$amount<0){
            echo 'Havent enough money in bank';

            if(($this->collection-$amount)<0){
                echo 'Havent enough money in wallet';
            }
            else $this->collection-=$amount;
        }
        else self::$bank -=$amount;

        //--------код учителя:
        /*if(self::$bank + $this->collection<$amount)
            die("No money");
        $k=self::$bank - $amount;
        if($k<0)
            self::$bank=0;
        $this->collection+=$k;

        else{
            self::$bank-=$amount;
        }*/
        return $this;
    }
    public function collectMoney($amount){
        //s banka v collection
        if((self::$bank)-$amount<0){
            echo 'Havent enough money in bank';
        }
        else {
            self::$bank -=$amount;
            $this->collection +=$amount;
        }

        //--------код учителя не скатал с доски:

        return $this;
    }
}