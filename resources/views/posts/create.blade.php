@extends('layouts.app')

@section('content')
<div class="container">
<form action="/p" enctype="multipart/form-data" method="post">
@csrf
            <div class="row" >
                <div class="col-8 offset-2">
              <div class="row">
                <p class="h1">Add New Post</p>
              </div>
              <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>
            </div>
        
            
            <div class="row">
                <div class="col-4 d-grid gap-2 mx-auto">
                <button class="btn btn-primary "> Post</button>
                </div>
                
            </div>
            </form>
    </div>
@endsection
