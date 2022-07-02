@extends('layouts.frontend.frontend', ['activeClass' => 'all_packages','pageType'=>'all_packages'])
@section('frontend_content')
<section id="main-blog-section" class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="breadcrumbs">
                    <span><a href="/">Home</a></span>
                    <span>All Packages</span>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.frontend.package',compact('packages'))

@endsection


