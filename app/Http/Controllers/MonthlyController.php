<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monthly;
use Illuminate\Support\Facades\Validator;

class MonthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $monthly = Daily::orderBy('created_at', 'DESC')->get();
  
        $monthly = Monthly::orderBy('created_at', 'DESC')
                ->join('users', 'monthlies.petugas_id', '=', 'users.id')
                ->select('monthlies.*', 'users.name as petugas_name')
                ->get();

        return view('monthly.index', compact('monthly'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monthly.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'bulan' => 'required',
            'tahun' => 'required',
            'suhu_ruang' => 'required',
            'suhu_chiller' => 'required',
            'suhu_freezer' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ])->validate();
      
        Monthly::create($request->all());
 
        return redirect()->route('monthly')->with('success', 'Monthly Monitoring added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monthly = Monthly::findOrFail($id);
  
        return view('monthly.show', compact('monthly'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monthly = Monthly::findOrFail($id);
  
        return view('monthly.edit', compact('monthly'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $monthly = Monthly::findOrFail($id);

        Validator::make($request->all(), [
            'bulan' => 'required',
            'tahun' => 'required',
            'suhu_ruang' => 'required',
            'suhu_chiller' => 'required',
            'suhu_freezer' => 'required',
            'status' => 'required',
            'keterangan' => 'required'
        ])->validate();
      
        $monthly->update($request->all());
  
        return redirect()->route('monthly')->with('success', 'monthly monitoring updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monthly = Monthly::findOrFail($id);
  
        $monthly->delete();
  
        return redirect()->route('monthly')->with('success', 'monthly monitoring deleted successfully');
    }
}
