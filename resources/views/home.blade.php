@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('You are logged in!') }}</p>

                    <div class="mt-4 p-3 bg-light text-center">
                        <strong style="font-size: 1.5em;">Poin Anda :</strong> 
                        <span style="font-size: 2em;">{{ $saldo }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection