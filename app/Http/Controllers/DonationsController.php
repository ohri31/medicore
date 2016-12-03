<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Donation;
use Illuminate\Http\Request;
use Session;
use Auth;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if(!Auth::check()) return redirect('home');

        if($request != null){
          $lokacija     = $request->input('lokacija');
          //$tipdonacije  = $request->input('tipdonacije');
          $keyword      = $request->input('keyword');
        }

        $d = Donation::query();

        if($lokacija != "" && $lokacija != null) $d->where('lokacija', '=', $lokacija);
        //if($tipdonacije != "" && $tipdonacije != null) $d->where('tipdonacije', '=', $tipdonacije);
        if($keyword != "" && $keyword != null) $d->where('doniram', 'LIKE', $keyword.'%');

        $donations = $d->latest()->paginate(10);

        return view('donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('donations.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function success()
    {
        return view('donations.success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Donation::create($requestData);

        Session::flash('flash_message', 'Donation added!');

        return redirect('donations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        if(!Auth::check()) return redirect('home');
        $donation = Donation::findOrFail($id);

        return view('donations.show', compact('donation'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\View\View
     */
    public function frame()
    {
        return view('donations.frame');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store_frame(Request $request)
    {

        $requestData = $request->all();

        Donation::create($requestData);

        Session::flash('flash_message', 'Donation added!');

        return redirect('/frameplugin/success');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        if(!Auth::check()) return redirect('home');
        $donation = Donation::findOrFail($id);

        return view('donations.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        if(!Auth::check()) return redirect('home');
        $requestData = $request->all();

        $donation = Donation::findOrFail($id);
        $donation->update($requestData);

        Session::flash('flash_message', 'Donation updated!');

        return redirect('donations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        if(!Auth::check()) return redirect('home');
        Donation::destroy($id);

        Session::flash('flash_message', 'Donation deleted!');

        return redirect('donations');
    }
}
