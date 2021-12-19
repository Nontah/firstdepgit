<x-guestshop-layout>
    <div class="body-wrapper">
        <!-- Begin Header Area -->
    <x-headmaster-layout> 

    </x-headmaster-layout>

<style type="text/css">

.category-sub-menu ul li { padding-top: px; } .category-sub-menu li.has-sub > a {  bottom: 27px; } .relative { position: relative; } .inline-flex {  display: inline-flex; } .rounded-md { border-radius: 0.375rem; }
</style>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
         
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-0 pb-0 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-1 order-lg-2">
                            <!-- Begin Li's Banner Area -->
                          
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
                                   
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                               
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                @foreach ($categorie as $acceuil)

                                                <div class="col-lg-3 col-md-3 col-sm-6 mt-40">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product-wrap">
                                                        <div class="product-image">
                                                            <a href="{{ route('show_produit','id='.$acceuil->id.'')}}">
                                                                <img src="{{ asset('img/' . $acceuil->image) }}" alt="Li's Product Image">
                                                            </a>
                                                    
                                                        </div>

                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Bioshop</a>
                                                                    </h5>
                                                                   
                                                                </div>
                                                        <h4><a class="product_name" href="{{ route('show_produit','id='.$acceuil->id.'')}}">{{ $acceuil->designation }}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">fcfa 
                                                            {{ $acceuil->prix }}</span>
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
                                    <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                            @foreach ($categorie as $acceuil2)

                                                <div class="row product-layout-list">
                                                    <div class="col-lg-3 col-md-5 ">
                                                        <div class="product-image">
                                                            <a href="{{ route('show_produit','id='.$acceuil2->id.'')}}">
                                                                <img src="{{ asset('img/' . $acceuil2->image) }}" alt="Li's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-7">
                                                        <div class="product_desc">
                                                            <div class="product_desc_info">
                                                                <div class="product-review">
                                                                    <h5 class="manufacturer">
                                                                        <a href="product-details.html">Bioshop</a>
                                                                    </h5>
                                                                   
                                                                </div>
                                                                <h4><a class="product_name" href="{{ route('show_produit','id='.$acceuil2->id.'')}}">{{ $acceuil2->designation }}</a></h4>
                                                                <div class="price-box">
                                                                    <span class="new-price">fcfa 
                                                            {{ $acceuil->prix }}</span>
                                                                </div>
                                                                <p>{{ $acceuil2->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="shop-add-action mb-xs-30">
                                                            <ul class="add-actions-link">
                                                               
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
                                                   {{ $categorie->links() }}
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                        <div class="col-lg-3 order-2 order-lg-1">
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                                <div class="sidebar-title">
                                    <h2>catégories</h2>
                                </div>
                                <!-- category-sub-menu start -->
                                <div class="category-sub-menu">
                                    <ul>
                                        @foreach ($categories  as $cat)
                                        <li>   <a href="{{ route('categoriechoix','id='.$cat->id.'') }}">{{ $cat->libele  }}</a></li>

                                        <li class="has-sub">
                                            <a href="#{{ $cat->id }}"></a>
                                                 <ul>
                                                <?php $produitcat = DB::table('produits')
                                                    ->where('category_id',''.$cat->id.'')
                                                    ->get();?>
                                                    @foreach($produitcat as $prod)
                                                    <li><a href="{{ route('show_produit','id='.$prod->id.'')}}">{{  $prod->designation }}</a></li>
                                                    @endforeach  
                                            </ul>
                                        </li>
                                       
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!--sidebar-categores-box start  -->
                        
                    </div>
                </div>
            </div>
       
            <!-- Begin Footer Area -->
            <x-footer-layout>
            
            </x-footer-layout>
            <!-- Footer Area End Here -->
           
        
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
      </x-guestshop-layout>










