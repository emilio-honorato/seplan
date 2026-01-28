<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function estoque()
    {
        $dados = Vehicle::select(
                'marca',
                DB::raw('COUNT(*) as quantidade'),
                DB::raw('SUM(preco) as total')
            )
            ->groupBy('marca')
            ->get();

        return view('reports.estoque', compact('dados'));
    }
}
