@extends('home')
@section('content')
<div class="container">
        @if(session('info'))
                <div class="col-lg-6 alert alert-success">
                    {{session('info')}}
                </div>  
        @endif
</div>
<table class="table table-stripe table-hover">
    <legend> Ma liste d'utilisateur</legend>
    
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>

        </tr>
      </thead>

      <tbody>
        @if(count($users) > 0)
            @foreach($users as $user)
            
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>
                      

                  </td>
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
  </div>
@endsection 