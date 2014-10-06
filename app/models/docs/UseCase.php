<?php

class UseCase extends \Eloquent {
	
	protected $table = "docs_use_cases";
	protected $fillable = ['id', 'name', 'event', 'description', 'userstory_id', 'parent_id'];
	
	public function parent(){
		return $this->belongsTo('UseCase', 'parent_id');
	}
	
	public function children(){
		return $this->hasMany('UseCase', 'parent_id');
	}	
	
	public function userStory(){	
		return $this->belongsTo('UserStory', 'userstory_id');
	}
}
