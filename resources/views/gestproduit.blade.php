<x-app-layout>
    <x-slot name="header">
   <h4>Liste des produits</h4>
    </x-slot>

<x-guest-layout>
 	<div class="container">

        <div class="row">
            <div class="col-2"></div>
                <div class="col-8">

			   		<br>
								
							  	<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">
											 <div class="ml-2" >
							                    <a class="btn btn-primary btn sm" href="{{ route('produits.create') }}"><i class="fas fa-plus"></i> Ajouter</a>
							                </div>


										</h3>
										
							
									</div>

									<table class="table">
									<thead>
										<tr>
										
											<th>designation</th>
											<th>prix</th>
											<th>quantite</th>
											<th>description</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($listProduits as $produit)
			                            <tr>
			                                <td scope="row">{{ $produit->designation }}</td>
			                                <td>{{ $produit->prix }}</td>
			                                <td>{{ $produit->quantite }}</td>
			                                <td>{{ $produit->description }}</td>
			                                <td class="d-flex">

			                                    <a class="btn btn-info btn-sm mr-2" href="{{ route('produits.show', $produit) }}"><i class="fas fa-eye"></i>Voir </a>

			                                    @if(Auth::user()!=null )
			                                        <a class="btn btn-primary btn-sm mr-2" href="{{ route('produits.edit', $produit) }}"><i class="fas fa-edit"></i>Editer</a>

			                                        <a onclick="event.preventDefault(); delConfirm('{{ $produit->id }}')" class="btn btn-danger btn-sm" href="{{ route('produits.destroy', $produit) }}"><i class="fas fa-trash"></i>Sup</a>
			                                    @endif
			                                    <form style="display: none" id="{{ $produit->id }}" method="post" action="{{ route('produits.destroy', $produit) }}">
			                                        @csrf
			                                        @method("DELETE")
			                                    </form>
			                                </td>
			                            </tr>
				                        @endforeach
									</tbody>
	              				</table>
							</div>
								{!! $links !!}

				    </div>	
						
             <div class="col-2"></div>
        </div>   
    </div>
</x-guest-layout>
</x-app-layout>  