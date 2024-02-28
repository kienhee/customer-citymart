@extends('admin.layout.error')
@section('content')
    <div class="misc-wrapper">
        <h2 class="mb-2 mx-2">You are not authorized!</h2>
        <p class="mb-4 mx-2">
            You do not have permission to view this page using the credentials that you have provided while login. <br />
            Please contact your site administrator.
        </p>
        <a href="/" class="btn btn-primary">Back to home</a>
        <div class="mt-5">
            <img src="{{ asset('admin-frontend') }}/assets/img/illustrations/girl-with-laptop-light.png"
                alt="page-misc-not-authorized-light" width="450" class="img-fluid"
                data-app-light-img="illustrations/girl-with-laptop-light.png"
                data-app-dark-img="illustrations/girl-with-laptop-dark.png" />
        </div>
    </div>
@endsection
