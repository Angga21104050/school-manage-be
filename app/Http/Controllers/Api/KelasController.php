<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\Kelas as KelasResource;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return KelasResource::collection(
            Kelas::latest()->get()
        );
    }

    public function show(Kelas $kelas)
    {
        return new KelasResource($kelas);
    } 
}
