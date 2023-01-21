@extends ('layouts.app')
@section('content')
<div class="container">
    <form class="card m-auto" style="with: 80%">
        <div class= "card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                            <th>Name</th>
                                <th>Email</th>
                                    <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Users_list As $user)

                    <tr>
                        <td> {{$user->id}}</td>
                        <td> {{$user->name}}</td>
                        <td> {{$user->email}}</td>
                        <td> {{$user->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>




@endsection