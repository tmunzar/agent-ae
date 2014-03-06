<?php

class Community extends Eloquent {

	public function area()
    {
        return $this->hasOne('Area');
    }
    
}