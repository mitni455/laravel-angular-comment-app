<?php

class UserStory extends \Eloquent {
	
	protected $table = "docs_user_stories";
	protected $fillable = ['id', 'user_role_id', 'want_to', 'so_that', 'description', 'parent_id'];
	
	public function parent(){
		return $this->belongsTo('UserStory', 'parent_id');
	}
	
	public function children(){
		return $this->hasMany('UserStory', 'parent_id');
	}	
	
	public function userRole(){
		return $this->belongsTo('UserRole', 'user_role_id');
	}	
	
	public function useCases(){
		return $this->hasMany('UseCase');
	}
}
