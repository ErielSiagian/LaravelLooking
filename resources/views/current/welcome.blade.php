@extends('current.layouts.layoutLooking')
@section('content')
<div class="flex-center position-ref full-height">
            

            <div class="content">
                <div class="title m-b-md">
                    <img src="/img/picture.png" alt="random pictures"><br>
                    Looking.com<br>
                    
                </div>

                <p>{{$name}}</p>
                <p>{{$age}}</p>




                @foreach($websites as $p)

                    <div>
                        What you can do to {{$p['type']}} is all in {{$p['name']}} website!
                    
                    @if($loop->first)
                        <span>This webistes is for smart guys</span>
                    @endif
                    </div>

                @endforeach
            </div>
</div>
@endsection

    
