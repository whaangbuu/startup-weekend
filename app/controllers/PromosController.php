<?php

class PromosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /promos
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.create-promotion');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /promos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /promos
	 *
	 * @return Response
	 */
	public function store()
	{
		$category_id = Input::get('category');
		$user_id = Input::get('user');

		$promo = new Promo;
		$promo->name = Input::get('promo');
		$promo->details = Input::get('description');

		//for file
		$image = Input::file('image');
		$filename = time()."-".$image->getClientOriginalName();
		$path = public_path('img/products/'.$filename);
		Image::make($image->getRealPath())->resize(468, 249)->save($path);
		$promo->image = 'img/products/'.$filename;
		$promo->category_id = $category_id;
		$promo->user_id = $user_id;
		$promo->save();

		return Redirect::to('/')->with('message', 'Product Created');
	}

	/**
	 * Display the specified resource.
	 * GET /promos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /promos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /promos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /promos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}