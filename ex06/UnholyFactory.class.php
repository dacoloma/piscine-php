<?php
Class UnholyFactory {
    static $absorbed;

    public function absorb($instance){

        if ( !in_array(get_class($instance),array("Footsoldier", "Archer", "Assassin")))
            print "(Factory can't absorb this, it's not a fighter)\n";
        else{
            // foreach ($instance->absorbed as $key => $value){
            //     if (get_class($instance) == $value){
            //         $instance->absorbed[$key] = $instance;
            //     }
            // }
            $type_soldier = get_class($instance);
            if ($type_soldier === "Footsoldier")
                $key = "foot soldier";
            if ($type_soldier === "Archer")
                $key = "archer";
            if ($type_soldier === "Assassin")
                $key = "assassin";
            static::$absorbed[$key] = $instance;
        }
    }

    public function fabricate($str){
        if ( !in_array($str,array("foot soldier", "archer", "assassin"))){
            print "(Factory hasn't absorbed any fighter of type $str)\n";    
            return ;
        }
        else {
            print "(Factory fabricates a fighter of type $str)\n";
            return static::$absorbed[$str];
        }
    }
}

?>