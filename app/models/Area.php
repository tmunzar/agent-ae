<?php

class Area extends Eloquent {
	
	public function city()
    {
        return $this->hasOne('City');
    }

}