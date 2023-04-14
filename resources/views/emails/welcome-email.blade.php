@extends('layouts.app')
@section('content')
<div class="container">
<x-mail::message>
# <h1>Welcome to GameCom!</h1>


<br><br>
Connect and have fun with gamers worldwide!


<button class="btn btn-primary" href="view">Continue </button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

</div>
@endsection