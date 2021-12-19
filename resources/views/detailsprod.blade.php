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

                                Autre produits dans la categorie:</span>
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
                                                <a href="{{ route('show_produit','id='.$samecategory->id.'')}}">
                                                    <img src="{{ asset('img/' . $samecategory->image) }}" alt="Li's Product Image">
                                                </a>
                                                
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <h4><a class="product_name" href="{{ route('show_produit','id='.$samecategory->id.'')}}">{!! $samecategory->designation !!}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{ $samecategory->prix }} fcfa</span>
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
        
  
        </div>
        <!-- Body Wrapper End Here -->


</x-master-layout>