<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PrayerRequest;
use App\Models\Sermon;
use App\Models\User;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard', [
            'stats' => [
                'totalSermons' => Sermon::count(),
                'totalPrayerRequests' => PrayerRequest::count(),
                'recentPrayerRequests' => PrayerRequest::where('created_at', '>=', now()->subDays(7))->count(),
                'totalUsers' => User::count(),
            ],
            'recentSermons' => Sermon::latestPreached()->take(5)->get(),
            'recentPrayers' => PrayerRequest::latest()->take(5)->get(),
        ]);
    }
}
