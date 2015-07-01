<?php

/**
 * Description of shipping
 *
 * @author Faizan Ayubi
 */
class Shipping extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label provider
     */
    protected $_provider;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label method
     */
    protected $_method;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label status
     */
    protected $_status;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 12
     */
    protected $_billed;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 12
     */
    protected $_cost;
}
