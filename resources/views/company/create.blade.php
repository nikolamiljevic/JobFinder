@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
           
                @if(empty(Auth::user()->company->logo))
                <img src="{{asset('avatar/man.jpg')}}" width="100">
            @else
            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}">
            @endif
        <br>

            <form action="{{route('company.logo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Update logo
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control" name="company_logo">
                        <br>
                        <button class="btn btn-dark float-right" type="submit">Update</button>
                        @if($errors->has('avatar'))
                        <div class="error" style="color: red;">
                            {{$errors->first('avatar')}}
                        </div>
                    @endif
                    </div>
                </div>
            </form>

        </div>
 
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Update your company information
                </div>

    <form action="{{route('company.store')}}" method="POST">@csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                    <input type="text" class="form-control" name="address" value="{{Auth::user()->company->address}}">
                    </div>

                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{Auth::user()->company->phone}}">
                    </div>
                       
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="text" class="form-control" name="website" value="{{Auth::user()->company->website}}">
                    </div>

                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" class="form-control" name="slogan" value="{{Auth::user()->company->slogan}}">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" >
                                {{Auth::user()->company->description}}
                        </textarea>
                    </div>
                </div>

                        <div class="form-group">
                         <button class="btn btn-dark" type="submit">Update</button>
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
                        About your company
                    </div>
                    <div class="card-body">
                <p>Name: {{Auth::user()->company->cname}}</p>
                <p>Address: {{Auth::user()->company->address}}</p>
                <p>Phone: {{Auth::user()->company->phone}}</p>
                <p>Website: {{Auth::user()->company->website}}</p>
                <p>Slogan: {{Auth::user()->company->slogan}}</p>
                <p><a href="company/{{Auth::user()->company->slug}}">Company page</a></p>
                    </div>
                </div>
            <form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                        <div class="card-header">
                            Update cover photo
                        </div>
                        <div class="card-body">
                            <input type="file" class="form-control" name="cover_photo">
                            <br>
                            <button class="btn btn-dark float-right" type="submit">Update</button>
                        </div>
                </div>
            </form>
          
            </div>
        </div>
    </div>
</div>
        </div>

           
@endsection
