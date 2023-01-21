@extends ('layouts.app')
@section('content')
<div class="container">
    <div class= "container" style ="with 70%; margin-bottom: 5px; padding: 0 text-align: right">
  <a href="{{route('users.create')}}" class="btn btn-outline-primary">Create User</a>
      
</div>
    <div class="card m-auto" style="with: 70%">
        <div class= "card-body">
            {{--Table--}}
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Users_list As $user)

                    <tr>
                        <td> {{$user->id}}</td>
                        <td> {{$user->name}}</td>
                        <td> {{$user->email}}</td>
                        <td> {{$user->created_at}}</td>
                    
                    <td>
                    <div class="flex">
                        <a href= "{{route ('users.edit', ['id' => $user->id])}}" class="btn btn-outline-success"> Edit</a>
                        <form
                        method="POST" action="{{ route('users.destroy', ['id' => $user->id]) }}"
                        style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
            
                </td>
            </tr>

                    @endforeach
                </tbody>
            </table>




@endsection