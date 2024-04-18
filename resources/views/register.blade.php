@extends('layout')

@section('content')

<div class="container-fluid bg-dark text-white" style="height: 100vh;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card bg-dark text-white">
                <div class="card-header">
                    <h2 class="text-center">Voter Registration</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="region">Region:</label>
                            <input type="text" id="region" name="region" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="district">District:</label>
                            <input type="text" id="district" name="district" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="ward">Ward:</label>
                            <input type="text" id="ward" name="ward" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of birth:</label>
                            <input type="date" id="dob" name="dob" class="form-control" required>
                        </div>
                        <div class="row px-2 py-4">
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                        </div>
                        <div class="row px-2 py-5">
                            <div class="col px-2">
                                <a href="{{route('votes.display')}}" class="btn btn-secondary">RESULTS PAGE</a>
                            </div>
                            
                            <div class="col px-2">
                            <a href="{{route('voters.index')}}" class="btn btn-secondary">VOTERS LIST</a>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection