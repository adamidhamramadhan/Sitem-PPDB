<?php

namespace App\Http\Controllers;

use App\Models\Perankingan;
use App\Models\Pendaftaran;
use App\Models\Perangkingan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PerangkinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siswa = Pendaftaran::all()->where('status_pendaftaran', 'Lolos');
        $data = DB::table('perangkingan')
        ->join('pendaftaran', 'pendaftaran.id', '=', 'perangkingan.pendaftaran_id')
        ->select('perangkingan.*', 'pendaftaran.nama_siswa')->orderBy('total_rata2', 'desc')->get(100);
        $perangkingan = DB::table('perangkingan')->orderBy('total_rata2', 'desc')->count();

        return view('pages.admin.perangkingan.index', compact('data','siswa', 'perangkingan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Pendaftaran::all()->where('status_pendaftaran', 'Lolos');
        return view('pages.admin.perangkingan.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pendaftaran_id' => 'required|unique:perangkingan',
            'nilai_ujian' => 'required|numeric|min:1|max:100',
            'nilai_wawancara' => 'required|numeric|min:1|max:100',
        ]);

        $ujian = $request->nilai_ujian;
        $wawancara = $request->nilai_wawancara;

        $total = ($ujian + $wawancara) / 2;

        DB::table('perangkingan')->insert(
            [
                'pendaftaran_id' => $request->pendaftaran_id,
                'nilai_ujian' => $ujian,
                'nilai_wawancara' => $wawancara,
                'total_rata2' => $total,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        
        return redirect()->route('perangkingan.index')
                        ->with('success','Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
