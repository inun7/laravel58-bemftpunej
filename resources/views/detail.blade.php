@extends('layouts.master_secondary')
@section('content')

        <section class="banner_area">
            <div class="box_1620">
              <section class="feature_area white_feature p_25">
                <div class="container">
                  <div class="main_title">
                      <h3 style="color: black;">	
                          ~ BLOG DETAIL BEM FTP UNEJ ~
                      </h3>
                  </div>
                  
                  <!--================CONTENT  BLOG=================-->
                  <div class="card mb-4">
                    <div class="card-header">
                      <h5>{{$post->judul}}</h5>
                    </div>
                    <div class="card-body">
                      <img src="{{asset('storage/'. $post->foto)}}" class="img-fluid" alt="..." style="height: 200px; width: 200px;">
                      <p class="card-text text-justify">
                          {{$post->caption}}
                      </p>
                      <a href="{{url('/blog')}}" class="btn btn-warning">Kembali</a>
                    </div>
                  </div>    
                  <!--================END CONTENT BLOG =================-->
                  
                  </div>
                </div>
              </section>
            </div>
          </section>
          <!--================End Home Banner Area =================-->