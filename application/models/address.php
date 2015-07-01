<?php

/**
 * Description of address
 *
 * @author Faizan Ayubi
 */
class Address extends Shared\Model {
    
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
    protected $_street;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_zone;
}
