<?php

class UserRole extends \Eloquent {
	
	protected $table = "docs_user_roles";
	protected $fillable = ['id', 'name', 'description', 'parent_id'];
	
	public function parent(){
		return $this->belongsTo('UserRole', 'parent_id');
	}
	
	public function children(){
		return $this->hasMany('UserRole', 'parent_id');
	}	
	
	public function userStories(){
		return $this->hasMany('UserStory');
	}
}
