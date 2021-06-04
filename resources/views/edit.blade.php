@extends('layouts.master_secondary')
@section('content')

<section class="banner_area">
    <div class="box_1620">
        <section class="feature_area white_feature p_25">
            <div class="container">
                <div class="main_title">
                    <h3 style="color: black;">	
                        ~ EDIT POSTINGAN DISINI ! ~
                    </h3>
                </div>
                <!--================CONTENT  BLOG=================-->
                <div class="card mb-4">
                    @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @elseif(session('berhasil'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ session('berhasil') }}</li>
                        </ul>
                    </div>
                    @endif
                    
                    <div class="card-header">
                        <h5>Judul Maks 30 karakter</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('update/'. $post->id)}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('PUT')
                            <br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Judul</label>
                                <input type="text" class="form-control" name="judul" id="formGroupExampleInput" value="{{ $post->judul }}">
                              </div>
                            <br>
                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile04">.jpg</label>
                                    <input type="file" name="foto" class="custom-file-input" value="{{ $post->foto }}" id="foto">
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="">Konten Maksimal 255 Karakter</label>
                                    <textarea class="caption" name="caption" id="caption">
                                        {{$post["caption"]}}
                                    </textarea>
                                    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                                    <script>
                                        tinymce.init({
                                            selector:'textarea.caption',
                                            width: 900,
                                            height: 300
                                        });
                                    </script>
                                </div>  
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--================END CONTENT BLOG =================-->
                
            </div>
        </div>
    </section>
</div>
</section>