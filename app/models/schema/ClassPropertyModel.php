<?php

class ClassPropertyModel extends \Eloquent {
	
	protected $table = "schema_class_properties";
	protected $fillable = ['id', 'class_id', 'name', 'type', 'description', 'visibility', 'getter', 'setter' ];
	
	public function getClass(){
		return $this->belongsTo('ClassModel', 'class_id');
	}
		
	
}
