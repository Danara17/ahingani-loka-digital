<?php

namespace App\Http\Controllers;

use App\Models\MasterFitur;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MasterFiturController extends Controller
{
    public function page()
    {
        $data = MasterFitur::all();
        return view("master_fitur_web.master_fitur_web", compact("data"));
    }

    public function add_page()
    {
        return view('master_fitur_web.add_master_fitur_web');
    }

    public function add_post(Request $request)
    {

        $nama = $request->input('nama_fitur');
        $harga = $this->filter_harga($request->input('harga_fitur'));
        $deskripsi = $request->input('deskripsi_fitur');
        $alias = $request->input('alias');

        $fiturBaru = new MasterFitur();
        $fiturBaru->nama_fitur = $nama;
        $fiturBaru->harga = $harga;
        $fiturBaru->deskripsi = $deskripsi;
        $fiturBaru->alias = $alias;
        $fiturBaru->timestamps = false;

        if ($fiturBaru->save()) {
            return redirect()->route("master-fitur")->with("success", "Fitur Berhasil Dicatat");
        } else {
            return redirect()->route("master-fitur")->with("error", "Fitur Gagal Dicatat");
        }
    }

    public function edit_page($id)
    {
        $data = MasterFitur::where('id_fitur', $id)->first();
        return view("master_fitur_web.edit_master_fitur_web", compact("data"));
    }

    public function edit_post(Request $request)
    {
        $id = $request->input("id_fitur");
        $nama = $request->input('nama_fitur');
        $harga = $this->filter_harga($request->input('harga_fitur'));
        $deskripsi = $request->input('deskripsi_fitur');
        $alias = $request->input('alias');

        $update = MasterFitur::where('id_fitur', $id)->update([
            'nama_fitur' => $nama,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'alias' => $alias,
        ]);

        if ($update) {
            return redirect()->route("master-fitur")->with("success", "Catatan Fitur Berhasil Diperbarui");
        } else {
            return redirect()->route("master-fitur")->with("error", "Catatan Fitur Gagal Diperbarui");
        }
    }

    public function filter_harga($harga)
    {
        return str_replace(['Rp ', ',', '.00'], '', $harga);
    }

    // public function get_alias($nama)
    // {
    //     $dummy = [];
    //     $nama_baru = '';
    //     $nama = str_getcsv($nama, ' ');
    //     for ($i = 0; $i < count($nama); $i++) {
    //         $dummy[$i] = $nama[$i][0];
    //     }
    //     for ($j = 0; $j < count($dummy); $j++) {
    //         $nama_baru = $nama_baru . $dummy[$j];
    //     }
    //     return $nama_baru;
    // }
}
