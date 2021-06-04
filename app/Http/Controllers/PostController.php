<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function tambah()
    {
        return view('tambah');
    }

    public function tambah_data_post(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'caption' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,bmp,png,svg,'
        ]);

        $post = new Post();
        $post -> judul = $request->input('judul');
        $post -> caption = $request->input('caption');
        
        if ($request->file('foto')) {
            $file_path = $request->file('foto')->store('file_foto', 'public');
            $post->foto = $file_path;
        }

        $post->save();

        return redirect()->route('postnewblog');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'caption' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $post -> judul = $request->input('judul');
        $post -> caption = $request->input('caption');

        if ($request->file('foto')) {
            if ($post->foto && file_exists(storage_path('app/public/' . $post->foto))) {
                Storage::delete('public/' . $post->foto);
            }
            $file_path = $request->file('foto')->store('file_foto', 'public');
            $post->foto = $file_path;   
        }

        $post->save();

        return redirect()->route('postnewblog');
    }

    public function hapus($id)
    {
        DB::table('posts')->where('id', $id)->delete();

        return redirect('postnewblog');
    }
}
