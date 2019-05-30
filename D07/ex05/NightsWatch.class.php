<?php
Class NightsWatch {
    public $characters;

    public function recruit($character){
        $this->characters[] = $character;
    }

    public function fight(){
        foreach ($this->characters as $character){
            if (method_exists($character, "fight" ))
                $character->fight();
        }
    }
}
?>