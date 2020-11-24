@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pokemones</div>

                <pokemoncomponent inline-template>
                <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                            <th>Nombre</th>
                            <th>URL</th>
                            </thead>
                            <body>
                                <tr v-for="pokemon in pokemons">
                                <td v-text="pokemon.name"></td>
                                <td v-text="pokemon.url"></td>
                                </tr>
                            </body>
                </pokemoncomponent>
            </div>
        </div>
    </div>
</div>
@endsection