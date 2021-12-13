<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="test/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="test/css/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="test/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Bio Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
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
                           <?php  $categories  = DB::table('categories')->get();  foreach ($categories  as $categorie ) {  $idcat=$categorie->id;  ?>  
                     
                        <a class="dropdown-item" href="{{ route('search.show', $categorie->id) }}">{!! $categorie->libele  !!}</a>
                        <?php } ?>

                      </div>
                    </div>
               
              <div class="container  px-4 px-lg-5 mt-5">

                <div class="row gx-7 gx-lg-6 row-cols-8 justify-content-center">



                    <form method="POST" action="{{ ('search') }}" class="d-flex" >
                             @csrf
                            <input class="form-control me-1" type="text" name="designation" placeholder="Search" aria-label="Vous recherchez un produit ?" required autofocus>
                            <input type="submit" value="Search" class="btn btn-outline-success" />

                    <script>
                        $('#ika').autocomplete({     
                            source : 'SearchController/'   
                        });
                    </script>
                <br/>
                <p id="formul"></p>

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
                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".details<?php echo $acceuil->id;?>">Details</button>
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
                     <img class="w-ful p-6" src="{{ asset('img/' . $modal->image) }}" alt="Gite">
            </div>
            <div class="col-7">

              <table class="table table">
                    <thead>
                      <tr>
                        <th scope="col">designation : </th>
                        <th scope="col">{!! $modal->designation  !!}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">prix : </th>
                        <td>{!! $modal->prix  !!}</td>
                     
                      </tr>
                      <tr>
                        <th scope="row">description : </th>
                        <td>{!! $modal->description  !!}</td>
                      
                      </tr>
                      <tr>
                        <th scope="row">quantite : </th>
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
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="test/js/scripts.js"></script>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <script src="test/wbjs/jquery-1.12.js"></script>
    <script src="test/wbjs/jquery-uic.js"></script>
    <script>
                function ref() 
                {
                    var xhr = getXMLHttpRequest(); 
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                            document.getElementById('formul').innerHTML = xhr.responseText;
                        }
                    };
                 
                    xhr.open("GET", "SearchController/i", true);
                    xhr.send(null); 
                }
                    var timer=setInterval("ref()", 1000);
                    
            </script>
    </body>
</html>
