<?php

/**
 * Description of order
 *
 * @author Faizan Ayubi
 */
class Order extends Shared\Model {
    
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
    protected $_user_id;

    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_address_id;

    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_payment_id;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 100
     * 
     * @validate required
     * @label final price
     */
    protected $_final_price;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_quantity;

    /**
     * @column
     * @readwrite
     * @type text
     * @length 100
     * 
     * @validate required
     * @label status
     */
    protected $_status;

    /**
     * @column
     * @readwrite
     * @type integer
     * @length 11
     */
    protected $_shipping_id;

    /**
     * @column
     * @readwrite
     * @type datetime
     */
    protected $_finished;

}
