<?PHP
require_once 'Color.class.php';
Class Vertex {
    private $_x;
    private $_y;
    private $_z;
    private $_w;
    private $_color;
    public static $verbose = False;
    // = new Color(array('red'=>255));

    function __construct(){
        if ($verbose == True)
        printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: 255, green: 255, blue: 255 ) ) constructed", $this->x,$this->y,$this->z,$this->w);
    }

    function _destruct(){
        if ($verbose == True)
        printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: 255, green: 255, blue: 255 ) ) destructed", $this->x,$this->y,$this->z,$this->w);
    }

    function getX(){
        return $this->_x;
    }

    function getY(){
        return $this->_y;
    }

    function getZ(){
        return $this->_z;
    }

    function getW(){
        return $this->_w;
    }

    function getColor(){
        return $this->_color;
    }

    function setX($x){
        $this->_x = $x;
    }

    function setY($y){
        $this->_y = $y;
    }

    function setZ($z){
        $this->_z = $z;
    }

    function setW($w){
        $this->_w = $w;
    }

    function setColor(){
         $this->_color;
    }

    function __toString(){
        return sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->x,$this->y,$this->z,$this->w);
    }
}
?>