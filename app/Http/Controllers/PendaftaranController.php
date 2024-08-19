<?php

namespace App\Http\Controllers;

use App\Models\NilaiRapot;
use App\Models\Pendaftaran;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pendaftaran::all()->where('user_id', Auth::user()->id)->first();

        if(isset($data)) {
            $nilai = NilaiRapot::all()->where('pendaftaran_id', $data->id)->first();
            return view('pages.siswa.pendaftaran.index', compact('data', 'nilai'));
        }

        return view('pages.siswa.pendaftaran.index', compact('data'));
        
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.siswa.pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'nama_siswa' => 'required',
            'nisn' => 'required|unique:pendaftaran|numeric|digits:10',
            'nik' => 'required|unique:pendaftaran|numeric|digits:16',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'foto_akte' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'agama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nohp_ayah' => 'required|numeric',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nohp_ibu' => 'required|numeric',
            'asal_sekolah' => 'required',
            'foto_rapot' => 'required|mimes:pdf',
            'foto_ijazah' => 'required|mimes:pdf',
        ]);

        $input = $request->all();
     
        if ($foto = $request->file('foto')){
            $destinationPath = 'img/foto_siswa/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }
        if ($foto = $request->file('foto_akte')){
            $destinationPath = 'img/foto_akte/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_akte'] = "$profileImage";
        }
        if ($foto = $request->file('foto_ijazah')){
            $destinationPath = 'img/foto_ijazah/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_ijazah'] = "$profileImage";
        }
        if ($foto = $request->file('foto_rapot')){
            $destinationPath = 'img/foto_rapot/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_rapot'] = "$profileImage";
        }

        Pendaftaran::create($input);

        return redirect()->route('pendaftaran.index')
                        ->with('success','Formulir pendaftaran berhasil dibuat!');
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
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('pages.siswa.pendaftaran.edit',compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'nama_siswa' => 'required',
            'nisn' => 'required|numeric|digits:10',
            'nik' => 'required|numeric|digits:16',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            // 'foto_akte' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'agama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nohp_ayah' => 'required|numeric',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nohp_ibu' => 'required|numeric',
            'asal_sekolah' => 'required',
            // 'foto_ijazah' => 'required|mimes:pdf',
        ]);

        $input = $request->all();
     
        if ($foto = $request->file('foto')){
            $destinationPath = 'img/foto_siswa/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        } else {
            unset($input['foto']);
        }
        if ($foto = $request->file('foto_akte')){
            $destinationPath = 'img/foto_akte/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_akte'] = "$profileImage";
        } else {
            unset($input['foto_akte']);
        }
        if ($foto = $request->file('foto_ijazah')){
            $destinationPath = 'img/foto_ijazah/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_ijazah'] = "$profileImage";
        } else {
            unset($input['foto_ijazah']);
        }
        if ($foto = $request->file('foto_rapot')){
            $destinationPath = 'img/foto_rapot/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto_rapot'] = "$profileImage";
        } else {
            unset($input['foto_rapot']);
        }

        $pendaftaran->update($input);

        return redirect()->route('pendaftaran.index')
                        ->with('success','Formulir pendaftaran berhasil diperbarui!');
       
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

    public function view_dashboard()
    {
        $data = Pendaftaran::all()->where('user_id', Auth::user()->id)->first();
        // dd($data);
        return view('pages.siswa.dashboard', compact('data'));
    }

    public function view_data_formulir()
    {
        $data = Pendaftaran::all()->where('status_pendaftaran', null);

        return view('pages.admin.pendaftaran.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function view_detail_pendaftaran(Pendaftaran $data, $id)
    {
        $data = Pendaftaran::all()->find($id);
        if(isset($data)) {
            $nilai = NilaiRapot::all()->where('pendaftaran_id', $data->id)->first();
            return view('pages.admin.pendaftaran.detail', compact('data', 'nilai'));
        }
        return view('pages.admin.pendaftaran.detail', compact('data'));
    }

    public function view_validasi_pendaftaran(Pendaftaran $data, $id)
    {
        $data = Pendaftaran::all()->find($id);
        return view('pages.admin.pendaftaran.validasi', compact('data'));
    }

    public function edit_formulir_pendaftaran(Request $request, $id)
    {
        $data = Pendaftaran::find($id);

        $data->status_pendaftaran = $request->status_pendaftaran;
        $data->save();

        return redirect()->route('pendaftaran.admin')
                        ->with('success','Status validasi siswa berhasil dibuat!');
    }
    public function view_data_formulir2()
    {
        $data = Pendaftaran::all()->where('status_pendaftaran', 'Tidak Lolos');

        return view('pages.admin.pendaftaran.index2', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view_data_formulir3()
    {
        $data = Pendaftaran::all()->where('status_pendaftaran', 'Lolos');

        return view('pages.admin.pendaftaran.index3', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function view_input_nilai(Pendaftaran $data, $id)
    {
        $data = Pendaftaran::all()->find($id);
        return view('pages.siswa.pendaftaran.inputnilai',compact('data'));
    }
    public function input_nilai(Request $request)
    {
        $request->validate([
            'pendaftaran_id' => 'required',
            'mtk1' => 'required|numeric|min:1|max:100',
            'mtk2' => 'required|numeric|min:1|max:100',
            'mtk3' => 'required|numeric|min:1|max:100',
            'mtk4' => 'required|numeric|min:1|max:100',
            'mtk5' => 'required|numeric|min:1|max:100',

            'ipa1' => 'required|numeric|min:1|max:100',
            'ipa2' => 'required|numeric|min:1|max:100',
            'ipa3' => 'required|numeric|min:1|max:100',
            'ipa4' => 'required|numeric|min:1|max:100',
            'ipa5' => 'required|numeric|min:1|max:100',

            'bind1' => 'required|numeric|min:1|max:100',
            'bind2' => 'required|numeric|min:1|max:100',
            'bind3' => 'required|numeric|min:1|max:100',
            'bind4' => 'required|numeric|min:1|max:100',
            'bind5' => 'required|numeric|min:1|max:100',

            'bing1' => 'required|numeric|min:1|max:100',
            'bing2' => 'required|numeric|min:1|max:100',
            'bing3' => 'required|numeric|min:1|max:100',
            'bing4' => 'required|numeric|min:1|max:100',
            'bing5' => 'required|numeric|min:1|max:100',
        ]);
        $mtk1 = $request->mtk1;
        $mtk2 = $request->mtk2;
        $mtk3 = $request->mtk3;
        $mtk4 = $request->mtk4;
        $mtk5 = $request->mtk5;

        $ipa1 = $request->ipa1;
        $ipa2 = $request->ipa2;
        $ipa3 = $request->ipa3;
        $ipa4 = $request->ipa4;
        $ipa5 = $request->ipa5;

        $bind1 = $request->bind1;
        $bind2 = $request->bind2;
        $bind3 = $request->bind3;
        $bind4 = $request->bind4;
        $bind5 = $request->bind5;

        $bing1 = $request->bing1;
        $bing2 = $request->bing2;
        $bing3 = $request->bing3;
        $bing4 = $request->bing4;
        $bing5 = $request->bing5;

        $rata2_mtk = ($mtk1 + $mtk2 + $mtk3 +$mtk4 + $mtk5) / 5;
        $rata2_ipa = ($ipa1 + $ipa2 + $ipa3 +$ipa4 + $ipa5) / 5;
        $rata2_bind = ($bind1 + $bind2 + $bind3 +$bind4 + $bind5) / 5;
        $rata2_bing = ($bing1 + $bing2 + $bing3 +$bing4 + $bing5) / 5;
        $total = ($rata2_mtk + $rata2_ipa + $rata2_bind + $rata2_bing) / 4;

        DB::table('nilai_rapot')->insert(
            [
                'pendaftaran_id' => $request->pendaftaran_id,
                'bahasa_indonesia' => $rata2_bind,
                'bahasa_inggris' => $rata2_bing,
                'mtk' => $rata2_mtk,
                'ipa' => $rata2_ipa,
                'total_rata2' => $total,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        
        return redirect()->route('pendaftaran.index')
                        ->with('success','Pengisian nilai rapot berhasil dibuat!');
    }

    public function download_foto_akte($nama_foto)
    {
        $path = public_path('img/foto_akte/'. $nama_foto);
        return response()->download($path);
    }

    public function download_rapot($nama_foto)
    {
        $path = public_path('img/foto_rapot/'. $nama_foto);
        return response()->download($path);
    }

    public function download_ijazah($nama_foto)
    {
        $path = public_path('img/foto_ijazah/'. $nama_foto);
        return response()->download($path);
    }

    public function jumlah_pendaftar()
    {
        $data1 = Pendaftaran::all()->count();
        $data3 = Pendaftaran::all()->where('status_pendaftaran', 'Lolos')->count();
        $data2 = Pendaftaran::all()->where('status_pendaftaran', 'Tidak Lolos')->count();

        return view('pages.admin.dashboard',compact('data1', 'data2', 'data3'));
    }

    public function cetak_kartu()
    {
        $data = Pendaftaran::all()->where('user_id', Auth::user()->id)->first();
           
        $pdf = PDF::loadView('pages.siswa.pendaftaran.cetak', ['data' => $data]);
     
        return $pdf->download('cetak_kartu.pdf');
    }

    public function cetak_laporan()
    {
        return view('pages.admin.pendaftaran.laporan');
    }
    public function cetak_lolos()
    {
        $data = Pendaftaran::all()->where('status_pendaftaran', 'Lolos');

        $pdf = PDF::loadView('pages/admin/pendaftaran/cetak_lolos',['data'=>$data]);
        return $pdf->download(date('d/m/y').'_dataPendaftaranLolos.pdf');
    }
    public function cetak_tidak_lolos()
    {
        $data = Pendaftaran::all()->where('status_pendaftaran', 'Tidak Lolos');

        $pdf = PDF::loadView('pages/admin/pendaftaran/cetak_tidak_lolos',['data'=>$data]);
        return $pdf->download(date('d/m/y').'_dataPendaftaranTidakLolos.pdf');
    }
    public function cetak_pendaftaran()
    {
        $data = Pendaftaran::all();

        $pdf = PDF::loadView('pages/admin/pendaftaran/cetak_pendaftaran',['data'=>$data]);
        return $pdf->download(date('d/m/y').'_dataPendaftaran.pdf');
    }
}
