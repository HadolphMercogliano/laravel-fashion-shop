@extends('layouts.app')

@section('title', 'Lista prodotti')

@section('content')

    <table class="table table-striped">
        <a class="btn btn-primary my-3" href="{{ route('admin.shoes.create') }}">Aggiungi prodotto</a>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Marca</th>
                <th scope="col">Modello</th>
                <th scope="col">Colore</th>
                <th scope="col">Taglia</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Costo</th>
                <th scope="col">Genere</th>
                <th scope="col">Azioni</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($shoes as $shoe)
                <tr>

                    <th scope="row">{{ $shoe->id }}</th>
                    <td>{{ $shoe->marca }}</td>
                    <td>{{ $shoe->modello }}</td>
                    <td>{{ $shoe->colore }}</td>
                    <td>{{ $shoe->taglia }}</td>
                    <td>{{ $shoe->prezzo }}</td>
                    <td>{{ $shoe->costo }}</td>
                    <td>{{ $shoe->genere }}</td>
                    <td>
                        <a href={{ route('admin.shoes.show', $shoe) }} class="action-icon">
                            <i class=" bi bi-eye mx-2"></i>
                        </a>
                        <a href={{ route('admin.shoes.edit', $shoe) }} class="action-icon">
                            <i class="bi bi-pencil mx-2"></i>
                        </a>

                        <a type="button" class="text-danger" data-bs-toggle="modal"
                            data-bs-target="#delete-modal-{{ $shoe->id }}">
                            <i class="bi bi-trash mx-2"></i>
                        </a>
                        @foreach ($shoes as $shoe)
                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal-{{ $shoe->id }}" tabindex="-1"
                                aria-labelledby="delete-modal-{{ $shoe->id }}-label" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="delete-modal-{{ $shoe->id }}-label">
                                                Conferma eliminazione</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            Sei sicuro di voler eliminare il progetto <strong>{{ $shoe->marca }}</strong>
                                            <br>
                                            L'operazione non è reversibile
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>

                                            <form action="{{ route('admin.shoes.destroy', $shoe) }}" method="POST"
                                                class="">
                                                @method('DELETE')
                                                @csrf

                                                <button type="submit" class="btn btn-danger">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $shoes->links('pagination::bootstrap-5') }}
@endsection
{{-- @endsection --}}
