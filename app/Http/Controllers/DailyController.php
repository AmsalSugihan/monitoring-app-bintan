<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daily;
use Illuminate\Support\Facades\Validator;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $daily = Daily::orderBy('created_at', 'DESC')->get();
  
        $daily = Daily::orderBy('created_at', 'DESC')
                ->join('users', 'dailies.petugas_id', '=', 'users.id')
                ->select('dailies.*', 'users.name as petugas_name')
                ->get();

        return view('daily.index', compact('daily'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daily.create');
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
            'tanggal' => 'required',
            'suhu_pagi' => 'required'
        ])->validate();

        if($request->suhu_sore !== null){
            $status = 'Complete';
        }else{
            $status = 'Incomplete';
        }
      
        Daily::create([
            'tanggal' => $request->tanggal,
            'suhu_pagi' => $request->suhu_pagi,
            'suhu_sore' => $request->suhu_sore ?? '',
            'status' => $status,
            'keterangan' => $request->keterangan ?? '',
            'petugas_id' => $request->petugas_id,
        ]);
 
        return redirect()->route('daily')->with('success', 'Daily Monitoring added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daily = Daily::findOrFail($id);
  
        return view('daily.show', compact('daily'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daily = Daily::findOrFail($id);
  
        return view('daily.edit', compact('daily'));
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
        $daily = Daily::findOrFail($id);

        Validator::make($request->all(), [
            'tanggal' => 'required',
            'suhu_pagi' => 'required',
            'suhu_sore' => 'required',
        ])->validate();

        if($request->suhu_sore !== null){
            $status = 'Complete';
        }else{
            $status = 'Incomplete';
        }
      
        $daily->update([
            'tanggal' => $request->tanggal,
            'suhu_pagi' => $request->suhu_pagi,
            'suhu_sore' => $request->suhu_sore ?? '',
            'status' => $status,
            'keterangan' => $request->keterangan ?? '',
            'petugas_id' => $request->petugas_id,
        ]);
  
        return redirect()->route('daily')->with('success', 'daily monitoring updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daily = Daily::findOrFail($id);
  
        $daily->delete();
  
        return redirect()->route('daily')->with('success', 'daily monitoring deleted successfully');
    }
}
