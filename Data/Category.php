<?php

class Category
{
    //
    private string $name;
    private bool $expensive;
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of expensive
     */ 
    public function getExpensive()
    {
        return $this->expensive;
    }
    
    /**
     * Set the value of expensive
     *
     * @return  self
     */ 
    public function setExpensive($expensive)
    {
        $this->expensive = $expensive;

        return $this;
    }

    
    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        //validasi
        if(trim($name) != "")
        {
            $this->name = $name;
        }
        return $this;
        
    }
}

?>