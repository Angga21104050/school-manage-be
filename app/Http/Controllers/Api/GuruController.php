<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\Guru as GuruResource;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return GuruResource::collection(
            Guru::with('kelas')->latest()->get()
        );
    }

    public function show(Guru $guru)
    {
        return new GuruResource(
            $guru->load('kelas')
        );
    }
}
