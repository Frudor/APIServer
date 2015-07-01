<?php

/**
 * Description of banner
 *
 * @author Faizan Ayubi
 */
class Banner extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label title
     */
    protected $_title;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 64
     * 
     * @validate required, min(3), max(64)
     * @label url
     */
    protected $_url;
    
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
     * @type text
     * @length 10
     * 
     * @validate required, min(3), max(10)
     * @label group
     */
    protected $_group;
    
    /**
     * @column
     * @readwrite
     * @type integer
     * @length 7
     * 
     * @validate required
     * @label expires impressions
     */
    protected $_expires_impressions;
    
    /**
     * @column
     * @readwrite
     * @type datetime
     * 
     * @validate required
     * @label expires date
     */
    protected $_expires_date;
}