<?php

class Page extends \Eloquent {
	
	protected $table = "pages";
	protected $fillable = ['id', 'title', 'path', 'parent_id'];
	
	public function parent(){
		return $this->belongsTo('Page', 'parent_id');
	}
	
	public function children(){
		return $this->hasMany('Page', 'parent_id');
	}
	
	
}