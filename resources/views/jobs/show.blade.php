@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$job->title}}</div>

                <div class="card-body">
                <p>
                    <h3>Description</h3>
                    {{$job->description}}
                </p>
                <p>
                    <h3>Duties</h3>
                    {{$job->roles}}
                </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Short info</div>

                <div class="card-body">
                <p><b>Company:</b> <a href="{{route('company.index',[$job->company->id,$job->company->slug])}}">{{$job->company->cname}}</a> </p>
                <p><b>Address:</b> {{$job->address}}</p>
                <p><b>Employment type: </b>{{$job->type}}</p>
                <p><b>Position:</b>  {{$job->position}}</p>
                <p><b>Date:</b> {{$job->created_at->diffForHumans()}}</p>
                </div>
            </div>
            <br>
            @if(Auth::check() && Auth::user()->user_type = 'seeker')
            <button class="btn btn-success" style="width: 100%;">Apply</button>
            @endif
        </div>

    
    </div>
</div>
@endsection
