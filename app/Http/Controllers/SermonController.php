<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SermonController extends Controller
{
    public function index(Request $request)
    {
        $sermons = Sermon::query()
            ->search($request->input('search'))
            ->latestPreached()
            ->paginate(9)
            ->withQueryString();

        return Inertia::render('Sermoes', [
            'sermons' => $sermons,
            'filters' => [
                'search' => $request->input('search', ''),
            ],
        ]);
    }
}
