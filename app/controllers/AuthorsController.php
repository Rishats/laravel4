<?php


/**
* 
*/
class AuthorsController extends BaseController
{
	public $restful = true;
	public function get_index()
	{

		return View::make('authors.index');
	}
		public function info()
	{

		return View::make('authors.indexs');
	}
}