<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\Siswa as SiswaResource;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return SiswaResource::collection(
            Siswa::with('kelas')->latest()->get()
        );
    }

    public function show(Siswa $siswa)
    {
        return new SiswaResource(
            $siswa->load('kelas')
        );
    }
}
