<?php
Class House {
    public function introduce() {
        printf("House %s of %s : \"%s\"\n", static::getHouseName(), static::getHouseSeat(), static::getHouseMotto());
    }
}
?>