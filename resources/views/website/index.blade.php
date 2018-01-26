@extends('layouts.website')

@section('content')
    <!--<div class="jumbotron">
        <h1 class="display-4">Release comfortably</h1>
        <p class="lead">
            Shipped keeps track of your PR's, dependencies, release notes, and release planning.
        </p>
    </div>-->

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h2 class="display-4 font-weight-normal">Shipped</h2>
            <p class="lead font-weight-normal">
                Smart release and incident management.
            </p>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Release Management</h2>
                <p class="lead">Get a grip on what is being release and when.</p>
                <p class="lead">Shipped schedules releases, keeps track of what has changed. It can even provide deployment instructions and status checks. Shipped will generate release notes either before or after a release.</p>
            </div>
        </div>
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="bg-primary box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="bg-primary box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Incident Management</h2>
                <p class="lead">Shipped can help with keeping track of incidents followed by a release. Help you reach the right team, alert them, and provide communication to your organisation or even customers.</p>
            </div>
        </div>
    </div>
@endsection
