<?php

/**
 * Description of productstocategories
 *
 * @author Faizan Ayubi
 */
class Productstocategories extends Shared\Model {

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
    protected $_categories_id;
    
}
