<?php

class Card extends Eloquent {
	protected $softDelete = true;
	protected $fillable = array('title','description','location','transaction_type','property_type','price','area');

	public function publish()
	{
		$this->published = 1;
		return $this->save();
	}

	public function unpublish()
	{
		$this->published = 0;
		return $this->save();
	}
}