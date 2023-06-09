@extends('layouts.app')

@section('content')
<div class="container">
<div class="container">
                <div class="row">
                    <div class="col-3 p-5">
                        <img src="{{$user->profile->profileImage()}}" alt="Your Profile Picture" class="rounded-circle w-100" >
                    </div>
                    <div class="col-7 p-5">
                        <div class="d-flex justify-content-between align-items-baseline"> 
                            <div class="d-flex align-items-center pb-3">
                                <div class="h4 ">{{$user->username}}</div>

                            <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                            </div>

                            @can('update', $user->profile)
                            <a href="/p/create">Share Story</a>
                            @endcan
                        </div>
                        @can('update', $user->profile)
                        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                        @endcan
                        <div class="d-flex">
                        <div class="pe-3"><strong class="px-1">{{$postCount}}</strong>posts</div>
                        <div class="pe-3"><strong class="px-1">{{$followersCount}}</strong>followers</div>
                        <div class="pe-3"><strong class="px-1">{{$followingCount}}</strong>following</div>
                        </div>
                        <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
                        <div class="">{{$user->profile->description}}</div>
                        <div class=""><a href="#">{{$user->profile->url}}</a></div>
                    </div>
                </div>

                <div class="row pt-4">
                @foreach($user->posts as $post)
                    <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">  <img src="/storage/{{ $post->image }}" alt="{{$post->title}}" class="w-100"></a>
                    </div>
                    @endforeach
                </div>
             </div>
</div>
@endsection
