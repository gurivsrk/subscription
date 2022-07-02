@extends('layouts.app', ['activePage' => 'package', 'titlePage' => __('Package')])


@section('content')

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-info">
              <h4 class="card-title ">Package</h4>
              <p class="card-category"> Here you can manage Form package</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                       <form class="p-4" method="post" action="{{ (empty($packageUpdate))?route('package.store'):route('package.update',$package->id)}}" enctype="multipart/form-data">
                       @if(!empty($packageUpdate))
                        @method('patch')
                       @endif
                       <h4 class="card-title mb-4">Add package</h4>
                            @csrf
                                <div class="{{ $errors->has('package_name') ? ' has-danger' : '' }} mb-3">
                                    <label class="">{{ __('Package name') }}</label>
                                    <input class="form-control{{ $errors->has('package_name') ? ' is-invalid' : '' }}" name="package_name" id="input-package_name" type="text" placeholder="{{ __('Package Name') }}" value="{{ old('package_name', @$package->package_name) }}" required="true" aria-required="true"/>
                                    @if ($errors->has('package_name'))
                                        <span id="package_name-error" class="error text-danger" for="input-package_name">{{ $errors->first('package_name') }}</span>
                                    @endif
                                </div>
                                <div class="{{ $errors->has('price') ? ' has-danger' : '' }} mb-3">
                                    <label class="">{{ __('Price') }}</label>
                                    <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="text" placeholder="{{ __('Price') }}" value="{{ old('price', @$package->price) }}" required="true" aria-required="true"/>
                                    @if ($errors->has('price'))
                                        <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="{{ $errors->has('tenure') ? ' has-danger' : '' }} mb-3">
                                    <label class="">{{ __('Tenure') }}</label>
                                    <select name="pack_validity" class="form-control custom-select">
                                        <option value="monthly" {{@$package->pack_validity === 'monthly' ? ' selected':''}} >Monthly</option>
                                        <option value="quarterly" {{@$package->pack_validity === 'quarterly' ? ' selected':''}}>Quarterly</option>
                                        <option value="yearly" {{@$package->pack_validity === 'yearly' ? ' selected':''}}>Yearly</option>
                                    </select>
                                    @if ($errors->has('tenure'))
                                        <span id="tenure-error" class="error text-danger" for="input-tenure">{{ $errors->first('tenure') }}</span>
                                    @endif
                                </div>
                                <div class="{{ $errors->has('any_offer') ? ' has-danger' : '' }} mb-3">
                                    <label class="">{{ __('Any offer') }}</label>
                                    <input class="form-control{{ $errors->has('any_offer') ? ' is-invalid' : '' }}" name="any_offer" id="input-any_offer" type="text" placeholder="{{ __('Any offer') }}" value="{{ old('any_offer', @$package->any_offer) }}" />
                                    @if ($errors->has('any_offer'))
                                        <span id="any_offer-error" class="error text-danger" for="input-any_offer">{{ $errors->first('any_offer') }}</span>
                                    @endif
                                </div>
                                <div class="{{ $errors->has('features') ? ' has-danger' : '' }} mb-3">
                                    <label class="">{{ __('Features') }}</label>
                                    @if(empty($packageUpdate))
                                    <div class="dynamic-input-fields position-relative">
                                        <input class="form-control " name="features[]"  type="text" placeholder="{{ __('Features') }}"  required="true"  aria-required="true"/>
                                    </div>
                                    <div class="dynamic-input-fields position-relative">
                                        <input class="form-control" name="features[]"  type="text" placeholder="{{ __('Features') }}" required="true" aria-required="true"/>
                                    </div>
                                    <div class="dynamic-input-fields position-relative">
                                        <input class="form-control" name="features[]"  type="text" placeholder="{{ __('Features') }}" required="true" aria-required="true"/>
                                    </div>
                                    <div class="dynamic-input-fields-last position-relative">
                                        <input class="form-control" name="features[]"  type="text" placeholder="{{ __('Features') }}"  required="true" aria-required="true"/>
                                        <div class="dynamicAddMore">+</div>
                                    </div>
                                    @else
                                        @foreach(json_decode($package->description) as $feature)
                                            @if($loop->last)
                                            <div class="dynamic-input-fields-last position-relative">
                                                <input class="form-control" name="features[]"  type="text" placeholder="{{ __('Features') }}"  value="{{ old('features', @$feature) }}" required="true" aria-required="true"/>
                                                <div class="dynamicAddLess">-</div>
                                            </div>
                                            <div class="dynamic-input-fields-last position-relative">
                                                <div class="dynamicAddMore" style="right: -65px;top: -26px;">+</div>
                                            </div>
                                            @else
                                                <div class="dynamic-input-fields position-relative">
                                                    <input class="form-control" name="features[]"  type="text" placeholder="{{ __('Features') }}" value="{{ old('features', @$feature) }}" required="true" aria-required="true"/>
                                                    <div class="dynamicAddLess">-</div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                              

                              @if ($errors->has('for'))
                                        <span id="for-error" class="error text-danger" for="input-for">{{ $errors->first('for') }}</span>
                                    @endif
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <input class="btn {{(!empty(@$packageUpdate))?'btn-warning':'btn-success'}} " name="Submit" type="submit" value="{{(!empty(@$packageUpdate))?'Update':'Submit'}}"/>
                                </div>
                       </form>
                    </div>
                    <div class="col-md-8">
                    <div class="table-responsive">
                <table class="table table-sort">
                  <thead >
                        <tr>
                          <th>Sno.</th>
                          <th>Pakage Name</th>
                          <th>Price</th>
                          <th>Any Offer</th>
                          <th>Tenure</th>
                          <th class="text-center">Actions</th>
                      </tr>
                    </thead>
                  <tbody>

                   @foreach($packages as $key=>$pack)
                      <tr>
                          <td>{{++$key}}</td>
                          <td>{{ @$pack->package_name}}</td>
                          <td>{{ @$pack->price }}</td>
                          <td>{{ @$pack->any_offer }} </td>
                          <td> {{ @$pack->pack_validity }}</td>
                          <td class="td-actions text-center">
                          <span class="featured-subs vsrk-icon featured btn btn-link {{(@$pack->featured == true)?'active':''}}" data-id="{{@$pack->id}}" ><span class="material-icons">star</span></span>
                          <a rel="tooltip" class="btn btn-success btn-link" href="{{route('package.edit',$pack->id)}}"> <i class="material-icons">edit</i> </a>
                          <form action="{{ route('package.destroy',$pack->id) }}" method="POST" onsubmit="return confirm('Are you sure ?');" style="display: inline-block;">
                              @method('delete') 
                              @csrf
                              <button class="btn btn-danger btn-link"> <i class="material-icons">delete</i> </button>
                          </form>
                          </td>
                      </tr>
                   
                    @endforeach
                    </tbody>
                </table>
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
<script>
$('.featured-subs').on('click',function(){
    const $this = $(this)
    if($this.hasClass('active')) $this.removeClass('active') 
    else{
      $this.addClass('active')
      if($('.featured-subs.active').length > 3){
        $this.removeClass('active')
         return alert('Maximum three can be featured package')
      }
    }
    
    $.ajax({
            type:'POST',
            url : '{{route("changePackageOrder")}}',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            data: {id : $this.data('id')},
            success: function(result){
                console.log(result);
                return result;
            }
          })
  })
  </script>
@endpush