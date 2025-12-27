<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function siswaPerKelas()
    {
        return Kelas::with('siswa:id,name,kelas_id')
            ->select('id', 'name')
            ->get();
    }

    public function guruPerKelas()
    {
        return Kelas::with('guru:id,name,kelas_id')
            ->select('id', 'name')
            ->get();
    }

    public function kelasSiswaGuru()
    {
        return Kelas::with([
            'siswa:id,name,kelas_id',
            'guru:id,name,kelas_id',
        ])->select('id', 'name')->get();
    }
}
