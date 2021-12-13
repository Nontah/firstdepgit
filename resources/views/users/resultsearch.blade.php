<x-guest-layout>


  <div class="pt-10">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <h1 class="w-full my-2 text-6xl font-bold leading-tight text-center text-whit">
         Liste des Produits
        </h1>
     
      </div>
    </div>
    <br>


         


  <div class="container">

        <div class="row">
            <div class="col-2">
              
              <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div>
            </div>
                <div class="col-8">
                          <form method="POST" action="{{ ('searchSelect') }}" class="d-flex" >
                                   @csrf
                                  <input class="typeahead form-control me-1" type="text" name="designation" placeholder="Search" aria-label="Vous recherchez un produit ?" required autofocus>
                                  <input type="submit" value="Search" class="btn btn-outline-success" />
                          </form>
                          <br>

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title"></h3>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>designation</th>
                          <th>prix </th>
                          <th>description</th>
                          <th>quantite</th>
                          <th>image</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        @foreach ($search_produit as $search_produit)
                          <tr>
                            <td>{!! $search_produit->id !!}</td>
                            <td class="text-primary"><strong>{!! $search_produit->designation  !!}</strong></td>
                            <td class="text-primary"><strong>{!! $search_produit->prix !!}</strong></td>
                            <td class="text-primary"><strong>{!! $search_produit->description !!}</strong></td> 
                               <td class="text-primary"><strong>{!! $search_produit->quantite !!}</strong></td>
                            <td class="text-primary"><strong> <img class="media-object" src="uploas/5.png" alt="image"></strong></td>
                        
                            
                          </tr>
                        @endforeach

                        </tbody>
                    </table>
                  </div>


             </div>
             <div class="col-2"></div>
        </div>   
    </div>
</x-guest-layout>