@extends('layouts.cv')

@section('title', 'CV Florian BROTTE')

@section('sidebar')
    @parent


@endsection

@section('cvPage')
	<div id="page">
		<div id="header">
			<div id="intro">
				<h1>Florian BROTTE <hr align="left"> </h1>
				<h2>A propos de moi</h2>
				<p></p>
			</div>
			<img id="profile" src="assets/img/profile.jpg" alt="Photo de profile de florian" class="rounded-circle">
				<!-- The Modal -->
		</div>


		<div id="content">
			<div id="competence">
				<h1>Competence</h1>
			</div>
			<div id="date">
		
			</div>
			
			<div id="formation">
				<h1>Formation et stage</h1>
				<ul>
					<li>
						<h2><span class="fonction">TEST Test</span><span class="date">12/20</span></h2>
						<p>123</p>
					</li>
				</ul>
				<p>Test</p>
			</div>
			<div id="experience">
				<h1>Experience</h1>
			</div>
		</div>



		<div id="footer">
			<h1>Interese pour en savoir plus</h1>

			<div id="link">
				<p>forian-brotte.fr/parcours</p>
				<p>florian-brotte.fr/linkdin</p>
			</div>
			<div id="contact">
				<p>06 52 65 76 39</p>
				<p>f.brotte@gmail.com</p>
			</div>
			<div id="adresse">
				<p>337 B rue de Bretagne</p>
				<p>38190 Froges</p>
			</div>
		</div>
	</div>
@endsection

@section('motivationPage')
@endsection

@section('timelinePage')
	<div class="timeline" id="timeline">

		@for($i = 0 ; $i < 5 ; $i++)
		<div class="container left">
			<div class="content">
			<h2>2017</h2>
			<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
			</div>
		</div>
		<div class="container right">
			<div class="content">
			<h2>2016</h2>
			<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
			</div>
		</div>
		@endfor

	</div>
@endsection

@section('startModal')
	<div id="startModal" class="modalDialog">
		{{-- <a href="#close" title="Close" class="close">X</a> --}}
		<div>
			<h1>BIENVENUE {{ $entreprise }}</h1>
			<hr>
			@if($entreprise)
				<p>Nous effectuons une mise à niveau de notre site Internet. Certaines pages peuvent être indisponibles.La page de contact reste disponible. Veuillez nous excuser pour le dérangement.</p>
				<p>Cliquez sur la croix pour fermer cette fenêtre.</p>
			@endif
			<button id="close">Ouvrir le cv</button>
		</div>
	</div>
@endsection