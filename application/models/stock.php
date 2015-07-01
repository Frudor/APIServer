<?php

/**
 * Description of stock
 *
 * @author Faizan Ayubi
 */
class Stock extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_manufacture_id;

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
     * @type integer
     * @length 11
     */
    protected $_quantity;
}
