@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Users
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col">#</th>
                                <th class="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            @if(!$user->hasRole('admin'))
                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>
                                    <a href="{{ route('profile.show', $user->id) }}">{{ $user->username }}</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection