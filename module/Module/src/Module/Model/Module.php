<?php

namespace Module\Model;

/**
 *
 * @author Chris
 */
class Model {
    
    public $name;
    
    public function exchangeArray($data)
    {
        
        $this->name     = (isset($data['NAME'])) ? $data['NAME'] : null;
    }

    // Add the following method:
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
