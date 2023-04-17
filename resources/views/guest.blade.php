@extends('layouts.app')
@section('content')
		<div class="container">
				<div class="row justify-content-center align-items-center g-4">
						@forelse ($shoes as $shoe)
								<div class="col-4">
										<div class="card">
												<img src="{{ $shoe->image }}" class="card-img-top" alt="...">
												<div class="card-body">
														<h4 class="card-title">Modello: {{ $shoe->marca }} - {{ $shoe->modello }}</h4>
														<p>{{ $shoe->genere }}</p>
														<p>Colore: {{ $shoe->colore }}</p>
														<p class="text-muted">Taglia: {{ $shoe->taglia }}</p>
														<p> € {{ $shoe->prezzo }}</p>
												</div>
										</div>
								</div>
						@empty
								<h4>Nessun prodotto...</h4>
						@endforelse
				</div>
		</div>
		{{ $shoes->links('pagination::bootstrap-5') }}
@endsection
