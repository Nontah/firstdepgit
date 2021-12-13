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
            <div class="col-3">
              <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn btn-primary" type="button">Produit par categorie</button>
                <br>
                <button class="btn btn-primary" type="button">Button</button>
              </div>
            </div>
                <div class="col-8">

                    
                          <form method="POST" action="{{ ('search') }}" class="d-flex" >
                               @csrf
                            <input class="form-control me-2" type="text" name="designation" placeholder="Search" aria-label="Vous recherchez un produit ?" required autofocus>
                            <input type="submit" value="Search" class="btn btn-outline-success" />
                          </form>
                          <br>
                          <br>

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title"></h3>
                    </div>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Categorie</th>
                          <th>designation</th>
                          <th>prix </th>
                          <th>description</th>
                          <th>quantite</th>
                          <th>image</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php  $categories  = DB::table('categories')  ->get();  foreach ($categories  as $categories ) {  $idcat=$categories->id;  ?>
                        <tr>
                          <td class="text-primary"><strong>{!! $categories->libele  !!}</strong></td>
                        </tr>


                      <?php
                  
                       $produit = DB::table('produits')
                       ->where('category_id',''.$idcat.'')
                     //  ->groupBy('category_id')
                       ->get();
                       
                        foreach ($produit as $produit) {
                           ?>
                          <tr>
                            <td>{!! $produit->id !!}</td>
                            <td class="text-primary"><strong>{!! $produit->designation  !!}</strong></td>
                            <td class="text-primary"><strong>{!! $produit->prix !!}</strong></td>
                            <td class="text-primary"><strong>{!! $produit->description !!}</strong></td> 
                               <td class="text-primary"><strong>{!! $produit->quantite !!}</strong></td>
                            <td class="text-primary"><strong> <img class="media-object" src="uploas/5.png" alt="image"></strong></td>
                        
                            
                          </tr>
                          <?php } ?>

                    
              <?php } ?>

                        </tbody>
                    </table>
                  </div>


             </div>
             <div class="col-1"></div>
        </div>   
    </div>
</x-guest-layout>