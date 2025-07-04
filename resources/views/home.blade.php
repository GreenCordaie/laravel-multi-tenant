@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de Bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Bienvenue sur votre espace, {{ $tenantName }} !</h1>
                    <p>Vous êtes bien connecté à votre espace privé.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection