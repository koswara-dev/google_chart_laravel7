<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
    public function googlePieChart()
    {
        $data = DB::table('siswa')
           ->select(
            DB::raw('jenkel as jenkel'),
            DB::raw('count(*) as number'))
           ->groupBy('jenkel')
           ->get();
        $array[] = ['Number', 'Jenis Kelamin'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->jenkel, $value->number];
        }
        return view('pie_chart')->with('jenkel', json_encode($array));
    }

    public function googleColumnChart()
    {
        $data = DB::table('siswa')
           ->select(
            DB::raw('jenkel as jenkel'),
            DB::raw('count(*) as number'))
           ->groupBy('jenkel')
           ->get();
        $array[] = ['Number', 'Jenis Kelamin'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->jenkel, $value->number];
        }
        return view('column_chart')->with('jenkel', json_encode($array));
    }
}