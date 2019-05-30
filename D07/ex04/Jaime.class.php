<?php
Class Jaime extends Lannister{
    public function sleepWith($instance){
        if (get_class ($instance) === "Cersei")
            printf("With pleasure, but only in a tower in Winterfell, then.\n");
        else if (get_class ($instance) === "Tyrion")
            printf("Not even if I'm drunk !\n");
        else
            printf("Let's do this.\n");
    }
}
?>