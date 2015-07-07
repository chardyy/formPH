<?php

class RegistrationController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /registration/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.register');
	}

    /**
     * Show the form for creating a new resource.
     * POST /registration/store
     *
     * @return Response
     */

    public function store(){
        return Redirect::home();
    }
}