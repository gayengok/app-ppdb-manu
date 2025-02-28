<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Student;
use App\Models\Guru;
use Illuminate\Support\Facades\Auth;
use App\Models\KelasSepuluh;
use App\Models\kelasSebelas;
use App\Models\KelasDuaBelas;
use App\Models\Notification;

class DashboardController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $jumlahGuru = Guru::count();
        $notifications = Notification::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();

        $newStudentsCount = Student::where('created_at', '>=', now()->startOfYear())->count();

        $newStudentsPerYear = Student::selectRaw("DATE_PART('year', created_at) as year, COUNT(*) as total")
            ->groupBy('year')
            ->orderBy('year', 'asc')
            ->pluck('total', 'year');

        $articlesPerMonth = Artikel::selectRaw("TO_CHAR(created_at, 'Mon YYYY') as month, COUNT(*) as count")
            ->groupByRaw("TO_CHAR(created_at, 'Mon YYYY')")
            ->orderByRaw("MIN(created_at)")
            ->get();

        $totalArticles = Artikel::count();

        $monthlyData = $articlesPerMonth->pluck('count');
        $monthlyLabels = $articlesPerMonth->pluck('month');

        $totalSiswaKelas10 = KelasSepuluh::count();
        $totalSiswaKelas11 = kelasSebelas::count();
        $totalSiswaKelas12 = KelasDuaBelas::count();

        $totalSiswa = $totalSiswaKelas10 + $totalSiswaKelas11 + $totalSiswaKelas12;

        // Mengirim data ke view
        return view('backend.app.dashboard.dashboard', compact(
            'articlesPerMonth',
            'totalArticles',
            'monthlyData',
            'monthlyLabels',
            'newStudentsPerYear',
            'newStudentsCount',
            'jumlahGuru',
            'user',
            'notifications',
            'totalSiswa',
            'totalSiswaKelas10',
            'totalSiswaKelas11',
            'totalSiswaKelas12'
        ));
    }
}
