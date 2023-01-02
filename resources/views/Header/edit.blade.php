@extends('layout.app')

@section('pageTitle',trans('Update Menu'))
@section('pageSubTitle',trans('Update'))

@section('content')

  <section id="multiple-column-form">
      <div class="row match-height">
          <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="card-body">
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.header.update',encryptor('encrypt',$header->id))}}">
                              @csrf
                              @method('patch')
                              <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$header->id)}}">
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Menu 1')}}</label>
                                          <input type="text"  value="{{ $header->menu_1 }}" class="form-control" name="menu_1">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Menu 2')}}</label>
                                          <input type="text" value="{{ $header->menu_2 }}" class="form-control" name="menu_2">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Menu 3')}}</label>
                                          <input type="text" value="{{ $header->menu_3 }}" class="form-control" name="menu_3">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Menu 4')}}</label>
                                          <input type="text" value="{{ $header->menu_4 }}" class="form-control" name="menu_4">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Menu 5')}}</label>
                                          <input type="text"  value="{{ $header->menu_5 }}" class="form-control" name="menu_5">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Title')}}</label>
                                          <input type="text"  value="{{ $header->title }}" class="form-control" name="title">
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Short Text')}}</label>
                                          <textarea name="short_text" class="form-control" cols="5" rows="2">{{ $header->short_text }}</textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-group">
                                          <label for="name">{{__('Logo')}}</label>
                                          <input type="file"  class="form-control" name="logo">
                                      </div>
                                  </div>
                                  
                                  <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mb-1">{{__('Save')}}</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- // Basic multiple Column Form section end -->
</div>
@endsection