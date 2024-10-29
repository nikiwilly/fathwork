<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin; // Adjust the namespace according to your structure
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = admin::all();
        return view('admin.dataadmin', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahdataadmin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    //dd($request->all());
   admin::create([
    'username' => $request -> username,
    'email' => $request -> email,
    'password' => $request -> password,

   ]);

   return redirect()->route('dataadmin')->with('success', 'Admin created successfully!');

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
    $admin = Admin::find($id);

    // Jika admin tidak ditemukan
    if (!$admin) {
        return redirect()->route('dataadmin')->with('error', 'Admin not found!');
    }

    // Mengirim data admin ke view edit
    return view('admin.editdataadmin', compact('admin'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:admin,email,' . $id,
        'password' => 'nullable|min:6', // Password bisa kosong jika tidak diubah
    ]);

    // Mencari admin berdasarkan ID
    $admin = Admin::find($id);

    // Jika admin tidak ditemukan
    if (!$admin) {
        return redirect()->route('dataadmin')->with('error', 'Admin not found!');
    }

    // Update data admin
    $admin->username = $request->username;
    $admin->email = $request->email;

    // Jika password diisi, maka diupdat    e
    if ($request->password) {
        $admin->password = $request->password; // Simpan password tanpa hashing
    }

    // Simpan perubahan
    $admin->save();

    return redirect()->route('dataadmin')->with('success', 'Admin updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Mencari admin berdasarkan ID
    $admin = Admin::findOrFail($id);

    // Menghapus admin
    $admin->delete();

    return redirect()->route('dataadmin')->with('success', 'Admin deleted successfully!');
}

}
