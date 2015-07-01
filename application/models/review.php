<?php

/**
 * Description of reviews
 *
 * @author Faizan Ayubi
 */
class Reviews extends Shared\Model {
    
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
     * @type integer
     * @length 5
     */
    protected $_customers_id;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label customers name
     */
    protected $_customers_name;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 1
     */
    protected $_rating;
    
    /**
     * @column
     * @readwrite
     * @type text
     * 
     * @validate min(2)
     * @label title
     */
    protected $_description;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 5
     */
    protected $_read;
}
