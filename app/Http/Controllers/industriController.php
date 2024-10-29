<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\industri;

class industriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $industri = industri::all();
        return view('admin.dataindustri', compact('industri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahIndustri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request
    dd($request->all());
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:industri,email',
        'password' => 'nullable|min:6',
        'status_akun' => 'required|string|max:6',
    ]);

    // Create a new industri record
    industri::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Don't forget to hash passwords
        'status_akun' => $request->status_akun,
    ]);

    return redirect()->route('dataindustri')->with('success', 'Admin created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Mencari admin berdasarkan ID
    $industri = industri::find($id);

    // Jika admin tidak ditemukan
    if (!$industri) {
        return redirect()->route('dataindustri')->with('error', 'Admin not found!');
    }

    // Mengirim data admin ke view edit
    return view('admin.editIndustri', compact('industri'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:industri,email,' . $id,
        'password' => 'nullable|min:6', // Password bisa kosong jika tidak diubah
        'status_akun' => 'required|string|max:6', // Password bisa kosong jika tidak diubah
    ]);

    // Mencari admin berdasarkan ID
    $industri = industri::find($id);

    // Jika admin tidak ditemukan
    if (!$industri) {
        return redirect()->route('dataindustri')->with('error', 'Admin not found!');
    }

    // Update data admin
    $industri->nama = $request->nama;
    $industri->email = $request->email;
    $industri->status_akun = $request->status_akun;

    // Jika password diisi, maka diupdate
    if ($request->password) {
        $industri->password = $request->password; // Simpan password tanpa hashing
    }

    // Simpan perubahan
    $industri->save();

    return redirect()->route('dataindustri')->with('success', 'Admin updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Mencari admin berdasarkan ID
    $industri = industri::findOrFail($id);

    // Menghapus admin
    $industri->delete();

    return redirect()->route('dataindustri')->with('success', 'Admin deleted successfully!');
}

}
