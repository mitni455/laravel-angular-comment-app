<?php

class PageController extends \BaseController {

	/**
	 * Send back all comments as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		$master = [];
		$pages = [];
		
		foreach(Page::get() as $page){
		
			// --- If no parent, must be a master page
			if(	empty($page->parent_id) ){
				
				
				array_push($pages, $this->pageModelToArray($page) );
			}
			
		}
		
		return Response::json($pages);
	}
	
	
	private function pageModelToArray($page){
		
		$pageArray = [];
		$pageArray['id'] = $page->id;
		$pageArray['path'] = $page->path;
		$pageArray['title'] = $page->title;
		$pageArray['kids'] = [];
		
		foreach($page->children()->get() as $kid){
			array_push($pageArray['kids'], $this->pageModelToArray($kid));	
		}
		
		
		return $pageArray;
	}
	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Page::create(array(
			'title' => Input::get('title'),
			'path' => Input::get('path')
		));

		return Response::json(array('success' => true));
	}

	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Page::find($id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Page::destroy($id);

		return Response::json(array('success' => true));
	}

}