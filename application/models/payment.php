<?php

/**
 * Description of payment
 *
 * @author Faizan Ayubi
 */
class Payment extends Shared\Model {
    
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
     * @label provider
     */
    protected $_provider;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 12
     * 
     * @label transaction id
     */
    protected $_transaction_id;
}
