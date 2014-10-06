<?php

class ClassMethodModel extends \Eloquent {
	
	protected $table = "schema_class_methods";
	protected $fillable = ['id', 'class_id', 'name', 'description', 'type'];
	
	public function getClass(){
		return $this->belongsTo('ClassModel', 'class_id');
	}
	
	
	public function arguments(){
		return $this->hasMany('ClassMethodArgumentModel', 'method_id');
	}
		
	
}
