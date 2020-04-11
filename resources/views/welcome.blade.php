@extends('layouts.vitrine')

@section('title', 'ComOn Real')

@section('sidebar')
    @parent
@endsection

@section('content')

        <section class="a-propos">
            <h2><a href="{{ route('root_path') }}">A propos</h2></a>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda officiis cum explicabo repudiandae
                debitis illo qui ex eos unde. Eveniet assumenda vitae quis inventore voluptate quos. Repudiandae enim nobis
                minus!</p>
        </section>
        
        <section id="card-nav">

            <div id="service">
                <img class="image" src="images/plan-action.jpg">
                <h3>Service et Creation</h3>
            </div>
            <div id="plan">
                <img class="image" src="images/plan-action.jpg">
                <h3>Plan d'action</h3>
            </div>
            <div id="equipe">
                <img class="image" src="images/plan-action.jpg">
                <h3>Equipe</h3>
            </div>
            <div id="equipe">
                <img class="image" src="images/plan-action.jpg">
                <h3>Equipe</h3>
            </div>

        </section>
@endsection