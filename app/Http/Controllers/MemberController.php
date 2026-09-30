<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Menampilkan daftar anggota.
     */
    public function index()
    {
        $members = Member::orderBy('urutan')->get();

        return view('admin.members.index', compact('members'));
    }

    /**
     * Menyimpan anggota baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'urutan' => 'required|integer|min:0',
        ]);

        $data = $request->only([
            'nama',
            'jabatan',
            'deskripsi',
            'urutan',
        ]);

        // Upload foto
        if ($request->hasFile('foto')) {

            $foto = $request->file('foto');

            $namaFoto = time() . '_' . $foto->getClientOriginalName();

            $foto->move(
                public_path('uploads/members'),
                $namaFoto
            );

            $data['foto'] = $namaFoto;
        }

        Member::create($data);

        return redirect()
            ->route('admin.members.index')
            ->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Mengupdate data anggota.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'urutan' => 'required|integer|min:0',
        ]);

        $data = $request->only([
            'nama',
            'jabatan',
            'deskripsi',
            'urutan',
        ]);

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($member->foto) {

                $fotoLama = public_path(
                    'uploads/members/' . $member->foto
                );

                if (file_exists($fotoLama)) {
                    unlink($fotoLama);
                }
            }

            // Upload foto baru
            $foto = $request->file('foto');

            $namaFoto = time() . '_' . $foto->getClientOriginalName();

            $foto->move(
                public_path('uploads/members'),
                $namaFoto
            );

            $data['foto'] = $namaFoto;
        }

        $member->update($data);

        return redirect()
            ->route('admin.members.index')
            ->with('success', 'Anggota berhasil diperbarui.');
    }

    /**
     * Menghapus anggota.
     */
    public function destroy(Member $member)
    {
        // Hapus file foto
        if ($member->foto) {

            $path = public_path(
                'uploads/members/' . $member->foto
            );

            if (file_exists($path)) {
                unlink($path);
            }
        }

        // Hapus data dari database
        $member->delete();

        return redirect()
            ->route('admin.members.index')
            ->with('success', 'Anggota berhasil dihapus.');
    }
}
