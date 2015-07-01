<?php

/**
 * Description of product
 *
 * @author Faizan Ayubi
 */
class Product extends Shared\Model{
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label name
     */
    protected $_name;
    
    /**
     * @column
     * @readwrite
     * @type text
     * 
     * @validate required, min(3)
     * @label description
     */
    protected $_description;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 255
     * 
     * @validate required, min(3), max(255)
     * @label url
     */
    protected $_url;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 12
     * 
     * @validate required, min(3), max(12)
     * @label model
     */
    protected $_model;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label image
     */
    protected $_image;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 10,2
     */
    protected $_price;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 7,2
     */
    protected $_weight;
}
