<!-- resources/views/voters/index.blade.php -->

@extends('layout')

@section('content')
<div class="container-fluid bg-dark text-white" style="height: 100vh">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <h3 class="card-header">Registered Voters</h3>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Region</th>
                                <th>District</th>
                                <th>Ward</th>
                                <th>DOB</th>
                                <th>Fingerprint ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($voters as $voter)
                            <tr>
                                <td>{{ $voter->name }}</td>
                                <td>{{ $voter->region }}</td>
                                <td>{{ $voter->district }}</td>
                                <td>{{ $voter->ward }}</td>
                                <td>{{ $voter->birth_date }}</td>
                                <td>{{ $voter->fingerprint_id}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
