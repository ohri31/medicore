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
    public function index()
    {
        if(!Auth::check()) return redirect('home');
        $donations = Donation::paginate(25);

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
