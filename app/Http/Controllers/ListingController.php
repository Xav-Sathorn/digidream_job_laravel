<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /* SHOW ALL LISTINGS */
    public function index()
    {
        /* dd(request()); */
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }

    /* SHOW SINGLE LISTING */
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
