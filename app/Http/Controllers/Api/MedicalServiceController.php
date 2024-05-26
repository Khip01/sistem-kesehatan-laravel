<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MedicalService;
use Illuminate\Http\Request;

class MedicalServiceController extends Controller
{
    public function index(Request $request)
    {
        $service_medicines = MedicalService::when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
            ->orderBy('id', 'desc')
            ->get();

        return response([
            'data' => $service_medicines,
            'message' => 'Success',
            'status' => 'OK'
        ], 200);
    }
}
