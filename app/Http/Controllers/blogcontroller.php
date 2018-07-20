<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blog;
use Illuminate\Support\Facades\File;

class blogcontroller extends Controller
{
	public function index()
	{
		//ngebalikin data yang sudah dihapus
		 // blog::withTrashed()->restore();

		$blogs= blog::all();	
		return view('blog/index', ['blogs' => $blogs]);
	}
	//halaman index
	public function show($id)
	{
		$blog=blog::find($id);
		if(!$blog)
			abort(404);
		return view('blog/single',['blog' => $blog]);
	}

	public function create(){
		return view('blog/tambahdata');
	}
	public function store(Request $request){
		
		// min/max data yang di isi
		// $this->validate($request,[
		// 	'pesan'=>'required|min:5',
		// 	'alamat'=>'required|min:5',
		// 	'no_tlp'=>'required|min:5',
		// ]);

		$blog= new blog;
		$blog->name=$request->name;
		$blog->address=$request->address;
		$blog->country=$request->country;
		$blog->zip_code  =$request->zip_code;
		$blog->postal_code =$request->postal_code;
		$blog->region =$request->region;
		$blog->city  =$request->city;
		$blog->region =$request->region;
		$blog->country =$request->country;
		$blog->contact_name  =$request->contact_name;
		$blog->contact_title =$request->contact_title;
		$blog->contact_phone =$request->contact_phone;
		$blog->contact_fax  =$request->contact_fax;
		$blog->contact_email =$request->contact_email;
		$blog->save();

		return redirect('blogy');
	}


	// edit data
	public function edit($id)
	{

		$blog=blog::findOrFail($id);
		if(!$blog)
			abort(404);
		return view('blog/edit',['blog' => $blog]);
	}

	public function update(Request $request, $id)
	{
		$blog=blog::findOrFail($id);

		$blog->name  =$request->name;
		$blog->address =$request->address;
		$blog->country =$request->country;
		$blog->zip_code  =$request->zip_code;
		$blog->postal_code =$request->postal_code;
		$blog->region =$request->region;
		$blog->city  =$request->city;
		$blog->region =$request->region;
		$blog->country =$request->country;
		$blog->contact_name  =$request->contact_name;
		$blog->contact_title =$request->contact_title;
		$blog->contact_phone =$request->contact_phone;
		$blog->contact_fax  =$request->contact_fax;
		$blog->contact_email =$request->contact_email;
		$blog->save();
		return redirect('blogy');
	}

	public function destroy($id){
		$blog=blog::find($id);
		$blog->delete();

	// halaman yang akan ditampilkan setelah proses delete
		return redirect('blogy');
	}
}