<?php
abstract Class Fighter {
    static $footSoldier = false;
    static $archer = false;
    static $assassin = false;
    public $absorbed;

    public function __construct($fighter) {
        $str = "";
        if ($fighter === "foot soldier"){
            $this->absorbed[$fighter] = "Footsoldier";
            if (static::$footSoldier == true)
                $str = "already ";
            static::$footSoldier = true;
        }
        if ($fighter === "archer"){
            $this->absorbed[$fighter] = "Archer";
            if (static::$archer == true)
                $str = "already ";
            static::$archer = true;
        }
        if ($fighter === "assassin"){
            $this->absorbed[$fighter] = "Assassin";
            if (static::$assassin == true)
                $str = "already ";
            static::$assassin = true;
        }
        print "(Factory ".$str."absorbed a fighter of type $fighter)\n";
    }
    
    abstract public function fight($target);
}
?>