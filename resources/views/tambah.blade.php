@extends('layouts.master_secondary')
@section('content')

<section class="banner_area">
    <div class="box_1620">
        <section class="feature_area white_feature p_25">
            <div class="container">
                <div class="main_title">
                    <h3 style="color: black;">	
                        ~ TAMBAH POSTINGAN BARU ! ~
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
                        <form action="{{url('tambah-data-post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Judul</label>
                                <input type="text" class="form-control" name="judul" id="formGroupExampleInput" placeholder="masukkan judul disini">
                              </div>
                            <br>
                            <div class="input-group">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="inputGroupFile04">Pilih Foto</label>
                                    <input type="file" name="foto" class="custom-file-input" id="foto">
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label for="">Konten Maksimal 225 Karakter</label>
                                    <textarea class="caption" name="caption" id="caption"></textarea>
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
                                <button type="submit" class="btn btn-primary">Tambah</button>
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