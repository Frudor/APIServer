<?php

/**
 * Description of supplier
 *
 * @author Faizan Ayubi
 */
class Supplier extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_user_id;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_manufaturer_id;
    
    /**
    * @column
    * @readwrite
    * @type boolean
    */
    protected $_admin = false;
}
