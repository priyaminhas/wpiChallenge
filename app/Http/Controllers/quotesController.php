<?php

namespace App\Http\Controllers;

use App\Quotes;
use App\States;
use Illuminate\Http\Request;

class quotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quotes = Quotes::all();
        return view('quotes.index',compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('quotes.create');
        //
    }

    public function edit($id)
    { 
        $quote = Quotes::where('id', $id)->first();
        return view('quotes.edit', compact('quote', 'id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = new Quotes();
        $data = $request->validate([
            'season' => 'required',
            'quote' => 'required',
            'episode' => 'required'
        ]);
        $quote->saveQuote($data);
        return redirect('/quotes')->with('success', 'New Quote has been created');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(Quotes $quotes)
    {
        //
    }

   /* public function test()
    {
        $states = new States();
        $statesAvg = $states->getAvgPriceStateWise();
      
        $statesAvg->each(function($stateAvg)
        {
            echo $stateAvg->state.': Steak('.round($stateAvg->avgSteak,2).'), Ground Beef ('.round($stateAvg->avgBeef,2).'), Sausage ('.round($stateAvg->avgSausage,2).'), Fried Chicken ('.round($stateAvg->avgChicken,2).'), Tuna ('.round($stateAvg->avgTuna,2).')

            <br/>';
        });
     
    }*/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
  /*  public function edit(Quotes $quotes)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $quote = new Quotes();
        $data = $request->validate([
            'season' => 'required',
            'quote' => 'required',
            'episode' => 'required'
        ]);
        $data['id'] = $id;
        $quote->updateQuote($data);
        return redirect('/quotes')->with('success', 'Quote has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $quote = Quotes::find($id);
        $quote->delete();

        return redirect('/quotes')->with('success', 'Quote has been deleted!!');
    }
}
