<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $query = $request->query('q');

        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%'.$query.'%')
            ->get();

        return view('results', ['jobs' => $jobs]);
    }
}
