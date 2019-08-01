<?php

namespace App\Http\Controllers;

use App\Address;

class AdressesController extends Controller {

	public function index() {
		$is_auth = session() -> get('is_auth');

		if (!$is_auth) {
			return redirect('/login');
		}

		$query = Address::query();
		$items = $query->get();

		return view('adresses', ['items' => $items]);
	}



	public function store() {
		$data = request()->all();

		$model = new Address();
		$model->fill($data);
		$model->save();

		return view('/adresses');
	}
}
