@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
        <img src="{{asset('avatar/man.jpg')}}" width="100">
        </div>
 
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Update your profile
                </div>

    <form action="{{route('profile.create')}}" method="POST">@csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea name="experience" class="form-control">

                        </textarea>
                    </div>
                        <div class="form-group">
                            <label for="">Bio</label>
                            <textarea name="bio" class="form-control">

                            </textarea>
                        </div>

                        <div class="form-group">
                         <button class="btn btn-success" type="submit">Update</button>
                         </div>
                </div>
            </div>

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        </div>
    </form>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        About you
                    </div>
                    <div class="card-body">
                    <p>Name: {{Auth::user()->name}}</p>
                    <p>Email: {{AUth::user()->email}}</p>
                    <p>Address: {{Auth::user()->profile->address}}</p>
                    <p>Gender: {{Auth::user()->profile->gender}}</p>
                    <p>Experience: {{Auth::user()->profile->experience}}</p>
                    <p>Bio: {{Auth::user()->profile->bio}}</p>
                    <p>Member on: {{Auth::user()->created_at}}</p>
                    </div>
                </div>

                <div class="card">
                        <div class="card-header">
                            Update cover letter
                        </div>
                        <div class="card-body">
                            <input type="file" class="form-control" name="cover_letter">
                            <br>
                            <button class="btn btn-success float-right" type="submit">Update</button>
                        </div>

                        <div class="card-header">
                            Update resume
                        </div>
                        <div class="card-body">
                            <input type="file" class="form-control" name="resume">
                            <br>
                            <button class="btn btn-success float-right" type="submit">Update</button>
                        </div>
                    </div>
            </div>
    </div>
</div>
@endsection
