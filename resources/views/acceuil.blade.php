<x-master-layout>

<style>
.cat-mega-menu > li > ul > li > a:hover{
    color: #274CE0;
}


.category-menu-list > ul > li > a:hover,
.cat-dropdown > li > a:hover{
    color: #293a6c;
}
.category-heading{

    background: #03b1f7; 
}

li.right-menu .cat-mega-menu > li, li.right-menu .cat-mega-menu-2 > li {
    width: 100%;
}
.category-heading > h2 {

    color: #fff;
  
}

.category-heading > h2::before {

    color: #fff;
}

</style>    
     <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <x-headmaster-layout> 

            </x-headmaster-layout>

          <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                        <div class="col-lg-3">
                            <!--Category Menu Start-->
                             
                            <div class="category-menu category-menu-2">
                                <div class="category-heading">
                                    <h2 class="categories-toggle"><span>categories</span></h2>
                                </div>
                                <div id="cate-toggle" class="category-menu-list">
                                    <ul>
                                        @foreach ($categorie  as $cat)
                     <li class="right-menu"><a href="{{ route('categoriechoix','id='.$cat->id.'') }}">{!! $cat->libele  !!}</a>
                                            <ul class="cat-mega-menu">
                                             <?php $produitcat = DB::table('produits')
                                                    ->where('category_id',''.$cat->id.'')
                                                    ->get();?>
                                                <li class="right-menu cat-mega-title">
                                                   <a href="">{{  $cat->libele }}</a>
                                                    <ul>
                                                        @foreach($produitcat as $produitcat)
                                                        <li><a href="#">{{  $produitcat->designation }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            
                                                

                                            </ul>

                                        </li>
                                            @endforeach
                                    </ul>
                                </div>
                            </div>
                           
                            <!--Category Menu End-->
                        </div>
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-6 col-md-8">
                            <div class="slider-area slider-area-3 pt-sm-30 pt-xs-30 pb-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    @foreach ($acceuils as $acceuil)

                                    <div class="single-slide align-center-left animation-style-01 bg-{{ $acceuil->id }}">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h3>{{ $acceuil->designation }}</h3>
                                            <h4>Prix : <span>FCFA {{ $acceuil->prix }}</span></h4>
                                          
                                        </div>
                                    </div>
                                     @endforeach
                                
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class="col-lg-3 col-md-4 text-center pt-sm-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="{{ asset('img/' . $acceuil->image) }}" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-25 mb-xs-5">
                                  {{ $acceuil->description }}
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>


            <div class="product-area pt-60 pb-50">
                <div class="container">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Nos produits bio favoris</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    @foreach ($favorie as $fav)

                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                         
                                        <div class="single-product-wrap">
                                         
                                            <div class="product-image">
                                                <a href="#">
                                                    <img src="{{ asset('img/' . $fav->image) }}" alt="Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">

                                                    <h4><a class="product_name" href="{{ route('show_produit','id='.$fav->id.'')}}">{!! $fav->designation !!}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">fcfa 
                                                            {!! $fav->prix !!}
                                                        </span>
                                                    </div>
                                                </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart">
                                                         <a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#details<?php echo $fav->id;?>" style=""><i class="fa fa-eye"></i> Détails</a>
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
                   
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- categorie-->
                <div class="content-wraper pt-0 pb-0 pt-sm-30">
                    <div class="container">
                         <div class="row">
                         <div class="col-lg-12">
                        <div class="shop-products-wrapper">
                                <div class="tab-content">
                                  
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="li-product-tab text-center">
                                        <ul class="nav li-product-menu">
                                           <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Naviguer par catégories</span></a></li>
                                        </ul>               
                                    </div>
                                    <!-- Begin Li's Tab Menu Content Area -->
                                </div>
                            </div>
                             <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                @foreach ($categorie as $cat)

                                                <div class="col-lg-3 col-md-3 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="" style="background:#03b1f7;color:#fff;">

                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                
                                                                <h4 class="text-center"><a class="product_nam" href="{{ route('categoriechoix','id='.$cat->id.'') }}">{{ $cat->libele }}</a></h4>
                                                               
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="product-image p-1">
                                                            <a href="{{ route('categoriechoix','id='.$cat->id.'') }}">
                                                                <img src="{{ asset('img/catimg/' . $cat->image) }}" alt="Image">
                                                            </a>
                                                        
                                                        </div>

                                                        

                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>
                                                
                                                @endforeach
                                               
                                               



                                            </div>
                                        </div>
                                    </div>

                                </div>
                    </div></div></div></div>


</div></div></div>




            <!-- Begin Li's TV & Audio Product Area -->
    <?php /* 
            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                   @foreach ($categorie as $categorie)
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                             <br><br>
                            <div class="li-section-title">
                                <h2>
                                    <span>{!! $categorie->libele !!}</span>
                                </h2>
                               
                            </div>
                            <div class="row">
                      
                                <div class="product-active owl-carousel">
                                <?php  $catproduit = DB::table('produits')
                                                    ->where('category_id',''.$categorie->id.'')
                                                    ->get(); 
                                foreach ($catproduit as $catproduit) { ?> 
                                                
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{ route('show_produit','id='.$catproduit->id.'')}}">
                                                    <img src="{{ asset('img/' . $catproduit->image) }}" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                   
                                                    <h4><a class="product_name" href="{{ route('show_produit','id='.$catproduit->id.'')}}">{!! $catproduit->designation !!}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">fcfa {!! $catproduit->prix !!}</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                   
                                                </div>
                                            </div>
                                        </div>

                                   <?php /* <div class="modal fade modal-wrapper" id="d<?php echo $catproduit->id;?>" >
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
                                                                    <img src="{{ asset('img/' . $catproduit->image) }}" alt="product image">
                                                                </div>
                                                                <div class="lg-image">
                                                                    <img src="images/product/large-size/2.jpg" alt="product image">
                                                                </div>
                                                          
                                                            </div>
                                                            <div class="product-details-thumbs slider-thumbs-1">                                        
                                                                <div class="sm-image"><img src="images/product/small-size/1.jpg" alt="product image thumb"></div>
                                                                <div class="sm-image"><img src="images/product/small-size/2.jpg" alt="product image thumb"></div>
                                                                <div class="sm-image"><img src="images/product/small-size/3.jpg" alt="product image thumb"></div>
                                                          
                                                            </div>
                                                        </div>
                                                        <!--// Product Details Left -->
                                                    </div>

                                                    <div class="col-lg-7 col-md-6 col-sm-6">
                                                        <div class="product-details-view-content pt-60">
                                                            <div class="product-info">
                                                                <h2>{!! $catproduit->designation !!}</h2>
                                                                
                                                             
                                                                <div class="price-box pt-20">
                                                                    <span class="new-price new-price-2">fcfa {!! $catproduit->prix !!}</span>
                                                                </div>
                                                                <div class="product-desc">
                                                            <p>
                                                                <span>
                                                                    {!! $catproduit->description !!}
                                                                </span>
                                                            </p>
                                                                </div>
                                                              
                                                             </div>
                                                        </div>
                                                     </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <!-- Quick View | Modal Area End Here -->
                           </div>   *?>
                         

                             </div>
                          <?php  } ?> 
                                </div>
                          
                            </div>
                        </div>
  
                        <br>
                    </div>
                       @endforeach
                </div>
            </section>


            @foreach ($acceuils as $modal)
            <div class="modal fade modal-wrapper " id="details<?php echo $modal->id;?>" >
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
                                          
                                                <div class="price-box pt-20">
                                                    <span class="new-price new-price-2">
                                                        fcfa {!! $modal->prix !!}
                                                    </span>
                                                </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>
                                                        {!! $modal->description !!}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
    </div>   
@endforeach
<?php */?>
</x-master-layout>