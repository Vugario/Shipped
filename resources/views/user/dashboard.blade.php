@extends('layouts.app')

@section('content')
    <div class="d-flex flex-row flex-md-equal">
        <div class="card mr-2">
            <div class="card-body">
                <p class="lead mb-0 text-muted">Upcoming release</p>
                <h3 class="display-4">2018.2</h3>
            </div>
        </div>
        <div class="card mr-2">
            <div class="card-body">
                <p class="lead mb-0 text-muted">Incidents</p>
                <h3 class="display-4">3 <small class="text-success">+43%</small></h3>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="lead mb-0 text-muted">Incidents</p>
                <h3 class="display-4">3 <small class="text-danger">-43%</small></h3>
            </div>
        </div>
    </div>
@endsection
