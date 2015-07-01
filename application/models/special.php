<?php

/**
 * Description of special
 *
 * @author Faizan Ayubi
 */
class Special extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_product_id;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 100
     * 
     * @validate required
     * @label price
     */
    protected $_price;
}
