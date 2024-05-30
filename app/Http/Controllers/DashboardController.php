<?php

namespace App\Http\Controllers;

use App\Models\Bagagen;
use App\Models\Bilhete;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cliente;
use App\Models\Encomenda;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index(){
        $usuarios= User::all()->count();
        $clientes= Cliente::all()->count();
        $encomendas= Encomenda::all()->count();
        $bilhetes= Bilhete::all()->count();
        $bagagens= Bagagen::all()->count();

        //grafico 1- clientes
        $customerData = Cliente::select([
            DB::raw('YEAR(created_at) as mes'),
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
        $customerLabel = "'Comparativo de cadastro de clientes por ano'";
        $customerMes = implode(',', $mes);
        $customerTotal = implode(',', $total);

        return view('admin.dashboard', compact('bagagens','usuarios','bilhetes','clientes','encomendas','customerLabel','customerMes','customerTotal'));
    }
}
