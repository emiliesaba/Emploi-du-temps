@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modifier <strong> {{$user->name}}</strong></div>

                  <div class="card-body">
                        <form action="{{route('admin.users.update',$user)}}" method="post">
                        @csrf
                          @method('PUT')
                         <div class="form-group row">
                            <label for="0" >NOM</label>
                                <input id="name" type="text" class="form-control  {{ $errors->has('name') ? ' is-invalid': ' ' }}" name="name" value="{{old('name') ?? $user->name}}"autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          </div>
                        <div class="form-group row">
                            <label for="0" >Email</label>
                                <input id="email" type="email" class="form-control  {{ $errors->has('email') ? ' is-invalid': '' }}" name="email" value="{{old('email') ?? $user->email}}"  autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                            @foreach($roles as $role)
                                <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}"  id="{{$role->id}}"
                                @foreach($user->roles as $userRole) @if ($userRole->id == $role->id) checked @endif @endforeach>
                                <label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>
                                </div>
                             
                            @endforeach
                                  <button type="submit" class="btn btn-primary">Modifier</button>  
                        </form>
                  </div>
               </div>    
            </div>
        </div>
    </div>
</div>
@endsection
