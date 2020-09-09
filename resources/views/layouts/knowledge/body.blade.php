@extends('layouts.main')
@section('title', 'Knowledge Base')

@section('content')
    <div class="card">
        <div class="card-header">
        <h1>
            <strong> Knowledge Base</strong> 
        </h1>
        </div> 
            <div class="card-body">
                <div class="row">
                
                    @foreach($categories as $c)
                        <div class="card" style="margin-left:10px;margin-top:10px;width: 284px;height: fit-content;">
                                <div class="card-header">
                                    {{$c->name_categories}}
                                </div>
                        @foreach($kgroups as $k)
                            @if($c->id == $k->category)
                                <div class="list-group list-group-flush">
                                    <a href="{{ url('/uploads/'.$k->file) }}" target="_blank" class="list-group-item">
                                       #{{$k->title}}
                                    </a>  
                                </div>
                            @endif
                        @endforeach
                        </div>
                    @endforeach

                </div>
            </div>
    </div>

@endsection