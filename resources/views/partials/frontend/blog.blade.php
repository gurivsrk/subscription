
@foreach($all_blogs as $blog)

<div class="col-md-3">
    <div class="masonry-items" style="box-shadow:5px 5px {{!empty($blog->CatName->bgcolor)?$blog->CatName->bgcolor:'#dbf8ff'}}">
        <a href="{{route('frontend.blog',[$blog->id, $blog->slug])}}">
            <img class="main-masonry-img" src="{{ !empty($blog->thumbnail) ? asset('/storage/thumbnail/'.$blog->thumbnail) : asset($blog->blogImage)}}" alt="{{$blog->thumbnail}}">
            <div class="items-content">
                <div class="feature-card feature-tab">
                    <div class="feature-card-img bg_{{$blog->catName->id}} position-relative-custom cursor-point display-inline ">
                    <img src="{{!empty($blog->catName->logo)? asset($blog->catName->logo) : asset('frontend/imgs/favicon.png')}}" width="50px" height="50px" class="obj-fit-contain position-relative-custom">
                    </div>
                    <div class="card-title">
                        {{$blog->catName->name}}
                    </div>
                    <h5>{{$blog->title}}</h5>
                </div> 
            </div>
            </a>
    </div>
</div>
@endforeach
