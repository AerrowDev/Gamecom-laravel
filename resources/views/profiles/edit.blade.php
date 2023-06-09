@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
            @method('PATCH')
            <div class="row" >
                <div class="col-8 offset-2">
                    <div class="row">
                    <p class="h1">Edit Profile</p>
                
                    </div>

                        <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label"> Title</label>

                                <input id="title"
                                    type="text"
                                    class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    name="title"
                                    value="{{ old('title') ?? $user->profile->title }}"
                                    autocomplete="title" autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label">Description</label>

                                <input id="description"
                                    type="text"
                                    class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                    name="description"
                                    value="{{ old('description')  ?? $user->profile->description }}"
                                    autocomplete="description" autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label">URL</label>

                                <input id="url"
                                    type="text"
                                    class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                    name="url"
                                    value="{{ old('url') ?? $user->profile->url}}"
                                    autocomplete="url" autofocus>

                                @if ($errors->has('url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                                <input type="file" class="form-control-file" id="image" name="image">

                                @if ($errors->has('image'))
                                    <strong>{{ $errors->first('image') }}</strong>
                                @endif
                            </div>

                </div>
            </div>
                  

                            <div class="row">
                                <div class="col-4 d-grid gap-2 mx-auto">
                                <button class="btn btn-primary "> Save Profile</button>
                                </div>
                                
                            </div>
    </form>
</div>
@endsection
