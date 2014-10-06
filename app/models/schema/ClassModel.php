<?php

class ClassModel extends \Eloquent {
	
	protected $table = "schema_classes";
	protected $fillable = ['id', 'name', 'description', 'type', 'superclass_id'];
	
	public function parent(){
		return $this->belongsTo('ClassModel', 'superclass_id');
	}
	
	public function children(){
		return $this->hasMany('ClassModel', 'superclass_id');
	}	
	
}
