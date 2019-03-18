<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slide;

class pageController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexPage() {
		$category = Category::paginate(3);

		$slide = Slide::all();
		return view('page.user.home', compact('slide', 'category'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function loginPage() {
		return view('frontend.layout.admin.body');
	}
}
