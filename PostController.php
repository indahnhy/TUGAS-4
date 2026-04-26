<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');

            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move(public_path('images'), $namaFile);

            $data['gambar'] = $namaFile;
        }

        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar'); 
            $namaFile = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile); //
            $data['gambar'] = $namaFile;
        }

        $post->update($data);

        return redirect()->route('posts.index');
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }

public function greeting()
{
    return view('greeting', [
        'pesan' => 'Selamat Belajar Laravel Blade'
    ]);
}

public function siswa()
{
    $siswa = ['indah', 'nata', 'naufa', 'neza'];

    return view('daftar_siswa', compact('siswa'));
}
public function profile()
{
    return view('profile', [
        'nama' => 'Indah Nurhayati',
        'email' => 'indahindah1233162@email.com',
        'alamat' => 'Lombok'
    ]);
}
}