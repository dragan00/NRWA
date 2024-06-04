<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Region;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('countries.create', compact('regions'));
    }

    public function store(Request $request)
    {
        Country::create($request->all());
        return redirect()->route('countries.index');
    }

    public function edit(Country $country)
    {
        $regions = Region::all();
        return view('countries.edit', compact('country', 'regions'));
    }

    public function update(Request $request, Country $country)
    {
        $country->update($request->all());
        return redirect()->route('countries.index');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index');
    }
}
