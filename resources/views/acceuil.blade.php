<x-master-layout>

     <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <x-headmaster-layout> 

            </x-headmaster-layout>
<style>
    
    .cat-mega-menu > li > ul > li > a:hover{ color: #274CE0; }
    .category-menu-list > ul > li > a:hover,
    .cat-dropdown > li > a:hover{ color: #293a6c; }
    .category-heading{ background: #03b1f7;  }
    li.right-menu .cat-mega-menu > li, li.right-menu .cat-mega-menu-2 > li { width: 100%; }
    .category-heading > h2 { color: #fff; }
    .category-heading > h2::before { color: #fff; }
</style> 
          <!-- Begin Slider With Category Menu Area -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Category Menu Area -->
                    
                        <!-- Category Menu Area End Here -->
                        <!-- Begin Slider Area -->
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-area slider-area-3 pt-sm-30 pt-xs-30 pb-xs-30">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    @foreach ($slide as $acceuil)
                                        <div class="single-slide align-center-left animation-style-01 bg-{{ $acceuil->id }}">
                                            <div class="slider-progress"></div>
                                            <div class="slider-content">
                                               
                                                <h3>{{ $acceuil->designation }}</h3>
                                                <h4>Prix : <span> {{ $acceuil->prix }} FCFA</span></h4>

                                            <div class="default-btn slide-btn">
                                                <a href="{{ route('show_produit','id='.$acceuil->id.'')}}" class="links">Détails</a>
                                            </div>
                                              
                                            </div>
                                        </div>
                                    @endforeach
                                
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        
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
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Nos produits bio favories</span></a></li>
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
                                                <a href="{{ route('show_produit','id='.$fav->id.'')}}">
                                                    <img src="{{ asset('img/' . $fav->image) }}" alt="Image">
                                                </a>
                                                <span class="sticker">fav</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">

                                                    <h4><a class="product_name" href="{{ route('show_produit','id='.$fav->id.'')}}">{{ $fav->designation }}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">fcfa 
                                                            {{ $fav->prix }}
                                                        </span>
                                                    </div>
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


            <div class="product-area pt-60 pb-50">
                <div class="container">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Tout nos produits</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    @foreach ($acceuils as $fav)

                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                         
                                        <div class="single-product-wrap">
                                         
                                            <div class="product-image">
                                                <a href="{{ route('show_produit','id='.$fav->id.'')}}">
                                                    <img src="{{ asset('img/' . $fav->image) }}" alt="Image">
                                                </a>
                                                
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">

                                                    <h4><a class="product_name" href="{{ route('show_produit','id='.$fav->id.'')}}">{{ $fav->designation }}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">fcfa 
                                                            {{ $fav->prix }}
                                                        </span>
                                                    </div>
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
   
</x-master-layout>