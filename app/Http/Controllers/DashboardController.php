<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index(){
        $usuarios= User::all()->count();

        //grafico 1- clientes
        $customerData = Cliente::select([
            DB::raw('MONTH(created_at) as mes'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('mes')
        ->orderBy('mes','asc')
        ->get();

        //preparar arrays
        foreach($customerData as $customer){
            $mes[]= $customer->mes;
            $total[]= $customer->total;
        }
        //formatar para Chartjs
        $customerLabel = "'Comparativo de cadastro de clientes por meses'";
        $customerMes = implode(',', $mes);
        $customerTotal = implode(',', $total);

        return view('admin.dashboard', compact('usuarios','customerLabel','customerMes','customerTotal'));
    }
}
