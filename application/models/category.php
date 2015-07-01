<?php

/**
 * Description of categories
 *
 * @author Faizan Ayubi
 */
class Categories extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 32
     * 
     * @validate required, min(3), max(32)
     * @label name
     */
    protected $_name;
    
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
     * @length 5
     */
    protected $_parent_id;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 3
     */
    protected $_sort_order;
}
