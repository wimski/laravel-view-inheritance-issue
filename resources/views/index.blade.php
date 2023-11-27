<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>View Inheritance Issue</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <h1>View Inheritance Issue</h1>

            <h2>Expected Result</h2>
            <div class="card p-3 mb-3">
                @include('example')
            </div>

            <h2>Actual Results</h2>
            <div class="row">
                <div class="col-4">

                    <h3>Simple Blade Includes</h3>
                    <div class="card p-3">
                        @include('overview')
                    </div>

                </div>
                <div class="col-4">

                    <h3>View Components</h3>
                    <div class="card p-3">
                        <x-overview/>
                    </div>

                </div>
                <div class="col-4">

                    <h3>Livewire</h3>
                    <div class="card p-3">
                        <livewire:overview/>
                    </div>

                </div>
            </div>

            <h2>Nesting</h2>
            @include('nesting.grand-child')

            @section('nesting')
                <p>A section with the same name as in another view, but without extension and totally unrelated.</p>
            @show
        </div>
    </body>
</html>
