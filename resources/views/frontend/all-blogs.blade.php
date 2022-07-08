@extends('layouts.frontend.frontend', ['activeClass' => 'all_blog','pageType'=>'all_blog'])
@section('frontend_content')
<section id="main-blog-section"  class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="breadcrumbs">
                    <span><a href="/">Home</a></span>
                    <span>All Blogs</span>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section-titles service-titles-heading service-titles-heading-2 mb-60 text-center py-4">
    <h1 class="blog-title-with-border">Blogs</h1>
    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusLorem ipsumLorem
        ipsum dolor sit amet, consectetur adipisicing elit,</p>
</div>
<section id="masonry-gallery" class="bg-light mt-5">
    <div class="container">
        <div class="row justify-content-center masonry-gallery">
            @include('partials.frontend.blog',compact(['all_blogs']))
        </div>
    </div>
</section>

@endsection


