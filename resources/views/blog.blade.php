@extends('layouts.master_secondary')
@section('content')

<section class="banner_area">
    <div class="box_1620">
      <section class="feature_area white_feature p_25">
        <div class="container">
          <div class="main_title">
              <h3 style="color: black;">	
                  ~ SELAMAT DATANG DI BLOG 
                  BEM FTP UNEJ ~
              </h3>
          </div>
          
          <!--================CONTENT  BLOG=================-->
          @foreach($post as $index => $item)            
          <div class="card mb-4">
            <div class="card-header">
              <h5>{{$item->judul}}</h5>
            </div>
            <div class="card-body">
              <img src="{{asset('storage/'. $item->foto)}}" class="img-fluid" alt="..." style="height: 100px; width: 100px;">
              <p class="card-text">{{$item->caption}}</p>
              <a href="{{url('/detail', $item->id)}}" class="btn btn-success">Baca selengkapnya</a>
            </div>
          </div>
          @endforeach
          <!--================END CONTENT BLOG =================-->

          </div>
        </div>
      </section>
    </div>
  </section>