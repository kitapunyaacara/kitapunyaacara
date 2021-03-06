<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class EventsController extends Controller
{
  /**
    * Create a new ContactController instance
    *
    * @return void

  public function __construct()
  {
    $this->middleware('admin', ['except' => ['create', 'store', 'index']]);
  }
*/
	/**
	* Menampilkan data dari database
	*
	*
	*
	*/
	public function index()
	{
	return view('front.events');
	}

  public function detail()
	{
	return view('front.events-detail');
	}


	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
	//return view('/');
	return view('front.contact');
	}

  /**
   * Store data yang baru di create
   *
   * @param ContactRequest $request
   * @return Response
   */
  public function store(ContactRequest $request)
  {
    $simpan = $request->all();
    Contact::create($simpan);

    return redirect('/')->with('tambah', 'Terimakasih');
  }

}
