<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // Show all listings
    public function index ()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show Create Form
    public function create () {
        return view('listings.create');
    }


    // Store listing data
    public function store (Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show edit form
    public function edit (Listing $listing)
    {
        if($listing->user_id != auth()->id())
        {
            abort(403, 'Unauthorize action!');
        }

        return view('listings.edit', ['listing' => $listing]);
    }

    
    // Submit edit listing form
    public function update (Request $request, Listing $listing) {
        
        if($listing->user_id != auth()->id())
        {
            abort(403, 'Unauthorize action!');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    // Delete listing
    public function destroy (Listing $listing)
    {
        if($listing->user_id != auth()->id())
        {
            abort(403, 'Unauthorize action!');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully!');

    }


    // Show single listing
    public function show (Listing $listing)
    {
        return view('listings.show', [
            'listing' =>  $listing
        ]);
    }


}
