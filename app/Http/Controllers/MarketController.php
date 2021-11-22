<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markets = Market::all();
        return view('index',compact('markets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $market = new Market();
        $market->name = $request->name;
        $market->phone = $request->phone;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->manager = $request->manager;
        if ($request->status == 'Hoạt động') {
            $market->status = '1';
        }else{
            $market->status = '0';
        }
        $market->save();

        return redirect()->route('show.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $market = Market::findOrFail($id);
        return view('edit',compact('market'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $markets = Market::findOrFail($id);
        $market = new Market();
        $market->name = $request->name;
        $market->phone = $request->phone;
        $market->email = $request->email;
        $market->address = $request->address;
        $market->manager = $request->manager;
        $market->status = $request->status;
        $market->save();
        $markets->delete();
        return redirect()->route('show.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $market= Market::findOrFail($id);
        $market->delete();
        return redirect()->route('show.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $markets = Market::query()
            ->where('name', 'LIKE', "%{$search}%")
                ->get();
        return view('index', compact('markets'));
    }
}
