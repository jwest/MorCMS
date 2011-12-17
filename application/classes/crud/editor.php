<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author jwest
 */
interface CRUD_Editor {
    
    
    /**
     * Construction for initialize editor
     */
    public function __construct($param = array());
    
    
    /**
     * Change param from CRUD item
     */
    public function change_param($item);
    
    
    /**
     * Create textarea input with value in var $value
     */
    public function textarea($value);
    
    
    /**
     * Init javascripts for editor
     */
    public function javascript();
    
    
    /**
     * Action execute on save
     */
    public function on_save($value);
    
    
}

?>
