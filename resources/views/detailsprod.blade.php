<x-master-layout>

      <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
             <x-headmaster-layout> 

            </x-headmaster-layout>

            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
        @foreach ($produit as $search)
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img src="{{ asset('img/' . $search->image) }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('img/' . $search->img2) }}" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="{{ asset('img/' . $search->img3) }}" alt="product image">
                                    </div>
                                  
                                 
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                   
                                    <div class="sm-image"><img src="{{ asset('img/' . $search->image) }}" alt=""></div>

                                    <div class="sm-image"><img src="{{ asset('img/' . $search->img2) }}" alt=""></div>

                                    <div class="sm-image"><img src="{{ asset('img/' . $search->img3) }}" alt=""></div>

                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content sp-sale-content pt-60">
                                <div class="product-info">
                                    <h2>{{ $search->designation }}</h2>
                                  
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2">FCFA {!! $search->prix  !!}</span>
                                    </div>
                                    <div class="countersection">
                                   
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span>{!! $search->description  !!}
                                            </span>
                                        </p>
                                    </div>
                                    <div class="product-variants">
                                        <div class="produt-variants-size">
                                            
                                        </div>
                                    </div>
                                    <div class="single-add-to-cart">
                                        
                                    </div>
                                  
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
          
            <!-- Product Area End Here -->
               
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <br>
                            <div class="li-section-title">
                                <h2>
                                    <span>
                                    <?php $data = DB::table('produits')
                                    ->where('category_id',''.$search->category_id.'')
                                    ->count('id');
                                    
                                        if( ''.$data.'' > 1) 
                                    { echo $data=$data-1 ; 

                                    ?>

                                Autre produit dans dans la meme categorie:</span>
                                </h2>
                            </div>
                            <div class="row">

                                <div class="product-active owl-carousel">
                                  <?php 

                                   $samecategory = DB::table('produits')
                                   ->where('category_id',''.$search->category_id.'')
                                   ->where('id','<>',''.$search->id.'')
                                  // ->and('id',''.$search->id.'')
                                   ->get();

                                   foreach ($samecategory as $samecategory)
                                 
                                    { ?>

                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="{{ asset('img/' . $samecategory->image) }}" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="{{ route('show_produit','id='.$samecategory->id.'')}}">{!! $samecategory->designation !!}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{ $samecategory->prix }}</span>
                                                    </div>
                                                </div>
                                                  <!--
                                                    <div class="add-actions">
                                                   
                                                    </div>
                                                 -->
                                                
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                  <?php } ?>
                                </div>
                            </div>

                              <?php } ?>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->

            <!-- Begin Footer Area -->
          
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
    <?php /* $vsamecategory = DB::table('produits')
    ->where('category_id',''.$search->id.'')

    ->get(); ?>  
    <?php foreach ($vsamecategory as $modal) { ?>

    <div class="modal fade modal-wrapper details<?php echo $modal->id;?>" id="details" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
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
                                           
                                            
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">                                        
                                            <div class="sm-image"><img src="images/product/small-size/1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/5.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/6.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2>{!! $modal->designation !!}</h2>
                                            <span class="product-details-ref">Reference: demo_15</span>
                                            <div class="rating-box pt-20">
                                                <ul class="rating rating-with-review-item">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="review-item"><a href="#">Read Review</a></li>
                                                    <li class="review-item"><a href="#">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2">$57.98</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="product-variants">
                                                <div class="produt-variants-size">
                                                    <label>Dimension</label>
                                                    <select class="nice-select">
                                                        <option value="1" title="S" selected="selected">40x60cm</option>
                                                        <option value="2" title="M">60x90cm</option>
                                                        <option value="3" title="L">80x120cm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-add-to-cart">
                                               
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
            <?php }*/ ?>
        </div>
        <!-- Body Wrapper End Here -->


</x-master-layout>