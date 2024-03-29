@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{__ ('Register Time') }}</th>
                        <th>{{__ ('Name') }}</th>
                        <th>{{__ ('Email') }}</th>
                        <th>{{__ ('Website') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                            <tr>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->website}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

                {{$users->links()}}
                </div>
                </div>
    </div>

    </div>
    </div>

@endsection
