<?php

/**
 * Description of productsattribut
 *
 * @author Faizan Ayubi
 */
class Productsattribute extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 5
     */
    protected $_products_id;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 32
     * 
     * @validate min(2)
     * @label name
     */
    protected $_name;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate min(2)
     * @label value
     */
    protected $_value;
}
