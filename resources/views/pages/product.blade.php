@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('product')])

@section('content')
  <div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title">Product</h4>
              <p class="card-category">Here you can manage Product</p>
            </div>
            <div class="card-body table-responsive">
                <!--- Add Form --->
                    <div class="row  justify-content-center">
                    <div id="addproductSection" class="col-md-10 vsrkAddForms {{ $errors->any() ? 'd-block' : ((@$type =='edit-product')?'d-block':'') }}">
                            @if(@$type =='edit-product')
                                <a href="{{route('product.index')}}"><div class="close">X</div></a>
                            @else
                                <div class="close">X</div>
                            @endif    
                        <form method="post"  id="add-product-member" action="{{ (@$type !='edit-product')?route('product.store'):route('product.update',$product->id)}}" enctype="multipart/form-data">
                            @if(@$type =='edit-product')
                                @method('put')
                            @endif
                        <h4 class="card-title mb-4">Add product</h4>
                            @csrf
                            <div class="col-md-4 p-0">
                                <label class="">{{ __('report') }}</label>
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised">
                                    @if(@$type =='edit-product')
                                        <img src="{{asset($product->profileImg)}}">
                                    @endif
                                    </div>
                                        <a href="#pablo" class="fileinput-exists" data-dismiss="fileinput">
                                        <i class="fa fa-times"></i></a>
                                    <div id="vsrkInputImg"> 
                                        <span class="btn btn-raised btn-file">
                                        <input type="file" name="profileImgT" />
                                        </span>
                                    </div>
                                </div> 
                                @if ($errors->has('profileImgT'))
                                        <span id="profileImgT-error" class="error text-danger" for="input-profileImgT">{{ $errors->first('profileImgT') }}</span>
                                    @endif   
                            </div>
                            <div class="row">
                                <div class="col-md-6{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="">{{ __('Name') }}</label>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{old('name', @$product->name)}}"  required="true" aria-required="true"/>
                                    @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6{{ $errors->has('designation') ? ' has-danger' : '' }}">
                                    <label class="">{{ __('designation') }}</label>
                                    <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" id="input-designation" type="text" placeholder="{{ __('designation') }}" value="{{old('designation', @$product->designation)}}"  required="true" aria-required="true"/>
                                    @if ($errors->has('designation'))
                                        <span id="designation-error" class="error text-danger" for="input-designation">{{ $errors->first('designation') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="{{ $errors->has('descritption') ? ' has-danger' : '' }}">
                                <label class="">{{ __('descritption') }}</label>
                                <textarea class="form-control{{ $errors->has('descritption') ? ' is-invalid' : '' }} ckeditor"  rows="5"  name="descritption" id="input-descritption" placeholder="{{ __('descritption') }}" required="true" aria-required="true">{!! old('descritption', @$product->descritption) !!}</textarea>
                                @if ($errors->has('descritption'))
                                    <span id="name-descritption" class="error text-danger" for="input-descritption">{{ $errors->first('descritption') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                            <input class="btn {{(@$type == 'edit-product')?'btn-warning':'btn-success'}} " name="Submit" type="submit" value="{{(@$type == 'edit-product')?'Update':'Submit'}}"/>
                            </div>
                        </form>
                    </div>
                    </div>
                <!---- End Add Form ---->
                    <div id="normal-view" class="row">
                        <div  class="col-12 text-right ">
                            <button data-attr="addproductSection" class="btn btn-sm btn-info addBtn">Add New Product<div class="ripple-container"></div></button>
                        </div>
                            {{-- @include('partials.blogType',compact('item','type')) --}}
                        </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
    </div>
  </div>
@endsection
@push('js')

@endpush