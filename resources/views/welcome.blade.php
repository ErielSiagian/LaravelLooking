@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="/img/picture.png" alt="random pictures"><br>
                    Looking.com<br>
                    
                </div>


                @foreach($websites as $p)

                    <div>
                        What you can do to {{$p['type']}} is all in {{$p['name']}} website!
                    
                    @if($loop->first)
                        <span>This webistes is for idiots</span>
                    @endif
                    </div>

                @endforeach
            </div>
</div>
@endsection

    
