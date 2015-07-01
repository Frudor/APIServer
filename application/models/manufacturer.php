<?php

/**
 * Description of manufacturer
 *
 * @author Faizan Ayubi
 */
class Manufacturer extends Shared\Model {
    
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
     * @length 255
     * 
     * @validate required, min(3), max(255)
     * @label url
     */
    protected $_url;
}
