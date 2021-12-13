<x-master-layout>
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <x-headmaster-layout> 

            </x-headmaster-layout>

            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
           
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="images/bg-banner/2.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span> </span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <div class="product-selec-box">
                                    <div class="product-short">
                                        <p>Trier par:</p>

                                        <div class="dropdown">
                                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Trie par défaut
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('boutique','orderBy=orderBy') }}">Prix de haut en bas </a>
                                             <a class="dropdown-item" href="{{ route('boutique','orderBy=orderByDesc') }}">Prix faible à élevé</a>
                                          </div>
                                        </div>
                                 
                                    </div>
                                </div>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                @foreach ($categorie  as $cat)
                                                <div class="col-lg-3 col-md-4 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img src="{{ asset('img/' . $cat->image) }}" alt="Li's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                
                                                                <h4><a class="product_name" href="#">{{  $cat->designation }}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">fcfa {{  $cat->prix }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul class="add-actions-link">

                                                                     <li class="add-cart">
                                                                        <a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#details<?php echo $cat->id;?>" style=""><i class="fa fa-eye"></i> Détails</a>
                                                                    </li>

                                                                  
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                    <div id="list-view" class="tab-pane product-list-view fade" role="tabpanel">
                                        <div class="row">
                                            
                                            <div class="col">
                                                 @foreach ($categorie  as $cat)
                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">

                                                        <div class="product-image">
                                                            <a href="#">
                                                                <img src="{{ asset('img/' . $cat->image) }}" alt="Li's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                           
                                                                <h4><a class="product_name" href="#">{{  $cat->designation }}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">fcfa {{  $cat->prix }}</span>
                                                                </div>
                                                                <p>{{  $cat->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                                  <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#details<?php echo $cat->id;?>"><i class="fa fa-eye"></i>Détails</a></li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                  @endforeach
                                           
                                            </div>

                                                
                                        </div>
                                    </div>
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                  {!! $lien !!}
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->
            <!-- Begin Footer Area -->

            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            @foreach ($categorie  as $modal)
            <div class="modal fade modal-wrapper " id="details<?php echo $modal->id;?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times; </span>

                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="{{ asset('img/' . $modal->image) }}" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset('img/' . $modal->image) }}" alt="product image">
                                            </div>
                                              <div class="lg-image">
                                                <img src="{{ asset('img/' . $modal->image) }}" alt="product image">
                                            </div>

                                               <div class="lg-image">
                                                <img src="{{ asset('img/' . $modal->image) }}" alt="product image">
                                            </div>
                                           
                                           
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">

                                          <div class="sm-image"><img src="{{ asset('img/' . $modal->image) }}" alt="product image thumb"></div>                                        
                                            <div class="sm-image"><img src="{{ asset('img/' . $modal->image) }}" alt="product image thumb"></div>

                                            <div class="sm-image"><img src="{{ asset('img/' . $modal->image) }}" alt="product image thumb"></div>

                                            <div class="sm-image"><img src="{{ asset('img/' . $modal->image) }}" alt="product image thumb"></div>

                                               <div class="sm-image"><img src="{{ asset('img/' . $modal->image) }}" alt="product image thumb"></div>

                                            <div class="sm-image"><img src="{{ asset('img/' . $modal->image) }}" alt="product image thumb"></div>

                                         

                                         
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                         <h2>{!! $modal->designation !!}</h2>
                                          
                                            <div class="rating-box pt-20">
                                              
                                            </div>
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2">{!! $modal->prix !!}</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>{!! $modal->description !!}.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="product-variants">
                                            
                                            </div>
                                            <div class="single-add-to-cart">
                                               
                                            </div>
                                            <div class="product-additional-info pt-25">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
              @endforeach  
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
  
             
         
</x-master-layout>