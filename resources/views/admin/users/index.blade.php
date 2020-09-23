+@extends('layouts.defaultTrue')

@section('content')
<section id="main-content">
 <section class="wrapper">
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>

                <div class="card-body">
             
                    <table class="table">
                      <thead>
                      <tr>
                        <th>N°</th>
                        <th>NOM</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>ACTIONS</th>
                       </tr>
                      </thead>
                      <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                <a href="{{route('admin.users.edit',$user->id)}}"><button class="btn btn-primary"> Editer</button></a>
                                @can('delete-users')
                                <form action="{{route('admin.users.destroy',$user->id)}}" method="post" class="d-inline">
                                 @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning"> Supprimer</button>
                                 </form>
                                @endcan
                                </td>
                             </tr>
                            @endforeach
                
                        </tbody>
                        <a href="{{route('register')}}"><button class="btn btn-secondary"> ajouter un utilisateur</button></a>
                    </table>
               {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</section>
@endsection
