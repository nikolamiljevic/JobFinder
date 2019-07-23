@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Auth::user()->user_type == 'seeker')
            <div class="card">
                @foreach($jobs as $job)
                    <div class="card-header">
                     <b> Title: </b> {{$job->title}}
                    </div>
                       
                    <div class="card-body">
                    <small class="badge badge-primary">{{$job->position}}</small> <br>
                    {{$job->description}}
                    </div>
                    <div class="card-footer">
                        <span>
                            <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                                Read
                            </a>
                        </span>
                        <span class="float-right">
                            Last date to apply: {{$job->last_date}}
                        </span>
                        
                    </div>
                    <br>
                @endforeach
                @endif
            </div>
          
        </div>
    </div>
</div>
@endsection
