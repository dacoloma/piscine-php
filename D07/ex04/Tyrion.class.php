<?php
Class Tyrion extends Lannister{
    public function sleepWith($instance){
        if (get_class ($instance) != "Jaime" && get_class ($instance) != "Cersei")
            printf("Let's do this.\n");
        else
            printf("Not even if I'm drunk !\n");
    }

}
?>