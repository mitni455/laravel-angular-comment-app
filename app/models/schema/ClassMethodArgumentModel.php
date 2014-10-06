<?php

class ClassMethodArgumentModel extends \Eloquent {
	
	protected $table = "schema_class_method_args";
	protected $fillable = ['id', 'method_id', 'name', 'type', 'description' ];
	
	public function getMethod(){
		return $this->belongsTo('ClassMethodModel', 'method_id');
	}
	
	/*
	public function arguments(){
		return $this->hasMany('ClassMethodArgumentModel', 'method_id');
	}
	*/	
	
}
