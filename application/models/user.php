<?php

/**
 * The User Model
 *
 * @author Faizan Ayubi
 */
class User extends Shared\Model {

    /**
     * @column
     * @readwrite
     * @type text
     * @length 100
     * 
     * @validate required, min(3), max(32)
     * @label name
     */
    protected $_name;

    /**
     * @column
     * @readwrite
     * @type text
     * @length 100
     * @index
     * 
     * @validate required, max(100)
     * @label email address
     */
    protected $_email;
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 20
     * 
     * @validate required, min(3), max(20)
     * @label phone
     */
    protected $_phone;

    /**
     * @column
     * @readwrite
     * @type text
     * @length 255
     * @index
     * 
     * @validate required, alpha, min(8)
     * @label password
     */
    protected $_password;
}
