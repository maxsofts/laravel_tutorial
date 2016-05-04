<?php
/**
 * Created by PhpStorm.
 * User: tranxuanduc
 * Date: 5/4/16
 * Time: 10:51
 */

class this_is_test{

    private $name;

    /**
     * this_is_test constructor.
     */
    public function __construct()
    {
        $this->name = "Duc Sat Thu";
        
    }
    public function __game(){
        $this->name="Picachu";
        $this->version="1.0";
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param $value
     */
    public function setName($value){
        $this->name = $value;
    }
    public function name(){
        $this->name="vandinh";
    }
}