<?php

class SequenceDiagram extends \Eloquent {
	
	protected $table = "docs_sequence_diagrams";
	protected $fillable = ['id', 'usecase_id',  'method_id' ];
	
	public function useCases(){
		return $this->hasMany('UseCase', 'usecase_id');
	}	
	
	/* ---- inferred ----
	public function roles(){
		return $this->hasMany('UserRole', 'role_id');
	}	
	*/
	
	/* --- inferred --- 
	public function classes(){
		return $this->hasMany('Class', 'class_id');
	}
	*/
	
	public function methods(){
		return $this->hasMany('Method', 'method_id');
	}	
}
