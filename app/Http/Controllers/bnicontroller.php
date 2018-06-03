<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\rcmodel;

class bnicontroller extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function index(){
        $rctable = rcmodel::all();
        
        return view('/home', compact($rctable));
   }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'norek' => 'required|numeric|digits:16',
			'startdate' => 'required|numeric|digits:8',
			'enddate' => 'required|numeric|digits:8'
        ]);

        $rctable = new rcmodel();

        $rctable->norek = $request->norek;
        $rctable->startdate = $request->startdate;
        $rctable->enddate = $request->enddate;
        $rctable->save();           

        return redirect('/home');
    }
}


