<?php

class Profile extends Eloquent {
	protected $guarded = array();

	protected $softDelete = true;

	public static $rules = array();
}
