<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportsControlller extends Controller
{
    //
    
    public function index() {
        $users=User::all();
       $pdf = Pdf::loadView('me', compact( 'users','image'));
    return $pdf->download('invoice.pdf');
        return view('reports.index');
    }
}
