@extends('layout.header')
@section('content')
<!DOCTYPE html>


    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">
                @for ($i = 0; $i<count($arr); $i++)
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="{{$arr[$i]['gambar']}}" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$arr[$i]['judul']}}</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        {{$arr[$i]['isi']}}
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">{{$arr1[$i]['nama']}}</span>
                        <span class="tm-color-primary">{{$arr[$i]['tanggal']}}</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>{{$i}}</span>
                        <span>{{$arr[$i]['pembuat']}}</span>
                    </div>
                </article>
                @endfor
               
               
            </div>

            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    
                </div>             
            </div>            
            
@endsection