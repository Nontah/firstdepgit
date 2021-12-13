<x-guest-layout>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Bio Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Accueil</a></li>
                      
                    </ul>
                    <form class="d-flex">
                        <button class="btn-outline-dark" type="submit">
                            <li class=""><a class="nav-link" aria-current="page" href="login">Connxion</a></li>
                      
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bio Shop</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Découvrez notre catalogue de produits bio</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-2">

                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        Category
                      </button>
                     
                      <div class="dropdown-menu">
                          
                           @foreach ($classc  as $classc)
                   
                        <a class="dropdown-item" href="{{ route('search.show', $classc) }}">{!! $classc->libele  !!}</a>
                        @endforeach

                      </div>
                    </div>
               
              <div class="container  px-4 px-lg-5 mt-5">

                <div class="row gx-7 gx-lg-6 row-cols-8 justify-content-center">



                    <form method="POST" action="{{ ('searchSelect') }}" class="d-flex" >
                             @csrf
                            <input class="typeahead form-control me-1" type="text" name="designation" placeholder="Search" aria-label="Vous recherchez un produit ?" required autofocus>
                            <input type="submit" value="Search" class="btn btn-outline-success" />

                    </form>

                </div>
    </div>    

            <div class="container px-4 px-lg-5 mt-5">

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    @foreach ($acceuils as $acceuil)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('img/' . $acceuil->image) }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{!! $acceuil->designation  !!}</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    {!! $acceuil->prix !!}
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".details<?php echo $acceuil->id;?>">Détails</button>
                                </div>
                            </div>
                        </div>
                    </div>
                 @endforeach
                </div>
            </div>
        </section>

@foreach ($acceuils as $modal)
<div class="modal fade details<?php echo $modal->id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       
      <div class="container">
        <div class="row">
            <div class="col-5">
                     <img class="card-img-top p-6" src="{{ asset('img/' . $modal->image) }}" alt="Gite">
            </div>
            <div class="col-7">

              <table class="table table">
                    <thead>
                      <tr>
                        <th scope="col">Désignation : </th>
                        <th scope="col">{!! $modal->designation  !!}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">prix : </th>
                        <td>{!! $modal->prix  !!}</td>
                     
                      </tr>
                      <tr>
                        <th scope="row">Dèscription : </th>
                        <td>{!! $modal->description  !!}</td>
                      
                      </tr>
                      <tr>
                        <th scope="row">Quantité : </th>
                        <td colspan="2">{!! $modal->quantite  !!}</td>
                      
                      </tr>
                    </tbody>
                  </table>
          
            </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
 @endforeach
     <script type="text/javascript">

                
                    var path = "{{ route('autocomplete') }}";
                    $('input.typeahead').typeahead({
                        source: function (query, process) {
                            return $.get(path, { query: query }, function (data) {
                                 return process(data);
                                });
                            }
                    });
                    
            </script>
   </x-guest-layout>