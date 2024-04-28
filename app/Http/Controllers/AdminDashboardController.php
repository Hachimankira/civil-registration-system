<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use App\Models\NationalIDCard;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $births = Birth::all();

        $count_submitted_id = NationalIDCard::where('status', 'submitted')->count();
        $count_verified_id = NationalIDCard::where('status', 'verified')->count();
        $count_registered_id = NationalIDCard::where('status', 'registered')->count();
        $count_rejected_id = NationalIDCard::where('status', 'rejected')->count();

        $count_submitted_birth = Birth::where('status', 'submitted')->count();
        $count_verified_birth = Birth::where('status', 'verified')->count();
        $count_registered_birth = Birth::where('status', 'registered')->count();
        $count_rejected_birth = Birth::where('status', 'rejected')->count();

        $count_submitted = $count_submitted_id + $count_submitted_birth;
        $count_verified = $count_verified_id + $count_verified_birth;
        $count_registered = $count_registered_id + $count_registered_birth;
        $count_rejected = $count_rejected_id + $count_rejected_birth;      
        $datas = NationalIDCard::all();

        // chart data
        $pie_chart_data = [
            'labels' => ['Submitted', 'Verified', 'Registered', 'Rejected'],
            'data' => [$count_submitted, $count_verified, $count_registered, $count_rejected],
        ];
        $birth_chart_data = [
            'labels' => ['Submitted', 'Verified', 'Registered', 'Rejected'],
            'data' => [$count_submitted_birth, $count_verified_birth, $count_registered_birth, $count_rejected_birth],
        ];
        $id_chart_data = [
            'labels' => ['Submitted', 'Verified', 'Registered', 'Rejected'],
            'data' => [$count_submitted_id, $count_verified_id, $count_registered_id, $count_rejected_id],
        ];
        $chart_data = [
            'pie_chart_data' => $pie_chart_data,
            'birth_chart_data' => $birth_chart_data,
            'id_chart_data' => $id_chart_data,
        ];
        return view('admin_dashboard', compact('datas', 'births', 'count_submitted', 'count_verified', 'count_registered', 'count_rejected', 'chart_data'));
    }
    /**
     * Chart
     */
    public function barChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('bar-chart', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
