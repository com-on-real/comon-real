@extends('layouts.manager')

@section('title', 'ComOn Real')

@section('sidebar')
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6">
		<?php
		foreach($domaine as $i):
			if (!empty($i)):
			echo '<div class="card" id="'.$i.'" style="width: 18rem;">
					<div class="card-header">'.$i.'</div>
						<ul class="list-group list-group-flush">';

				foreach ($sous_domaine[$i] as $k)
					echo '<li class="list-group-item">'.$k.'</li>';

				echo '	</ul>
					</div>';
			endif;
		endforeach;
		?>	
		</div>
		<div class="col-md-6">
			<button type="button" class="btn btn-outline-dark" id="newDomaine">Nouveau</button>
			<form method="POST" action="{{ route('create_site_path') }}">
				@csrf
				<div class="form-group">
				  <label for="exampleFormControlInput1">Nom de domaine</label>
				  <input type="text" class="form-control" name="ndd" id="ndd" placeholder="nomdedomaine.fr">
				</div>
				<div class="form-group">
				  <label>Nombre de sous domaine</label>
				  <input class="form-control" name="nombreSubd" id="nombreSubd" type="number" value="1" min="0">
				</div>
				<div class="form-group">
					<label>Nom de sous domaine</label>
					<span id="nameSubd"></span>
					<i class="fa fa-plus-circle" aria-hidden="true" id="plusSub"></i>
				  </div>
				<div class="form-group">
				  <label for="exampleFormControlTextarea1">Description</label>
				  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-secondary btn-lg btn-block">RUN</button>
			</form>
		</div>

	</div>
</div>
@endsection
