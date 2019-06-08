@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Trololo</div>
                    <div class="card-body">
                        {{ $user_type }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
