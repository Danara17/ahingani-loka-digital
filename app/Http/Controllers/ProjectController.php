<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function page()
    {
        return view('project.project');
    }

    public function create_project_page()
    {
        return view('project.create_project');
    }

    public function create_project_post(Request $request)
    {
        $newProject = new Project();
        $newProject->nama_client = $request->nama_client;
        $newProject->email_client = $request->email_client;
        $newProject->no_telp = $request->no_telp;
        $newProject->alamat = $request->alamat;
        $newProject->nama_bisnis = $request->nama_bisnis;
        $newProject->deskripsi_proyek = $request->deskripsi_proyek;
        $newProject->jenis_proyek = $request->jenis_proyek;
        $newProject->jenis_proyek = $request->ide_desain;
        if ($newProject) {
            return redirect()->route("project")->with("success", "Project Berhasil Dicatat");
        } else {
            return redirect()->route("project")->with("error", "Project Gagal Dicatat");
        }
    }
}
