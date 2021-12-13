<x-app-layout>
	<br><br>
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">Tableau de bord</h3>
                </div>
            </div>
    
            <div class="flex flex-wrap">
                
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <a class="btn btn-primary btn-sm mr-2" href="{{ route('usermanage.index') }}">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div> 
                            </a>         
               
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Nombre D'utilisateurs</h5>
                                <h3 class="font-bold text-3xl"><?php echo $data = DB::table('users')->count('id');?> <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Nombres de produit</h5>
                                <h3 class="font-bold text-3xl"><?php echo $data = DB::table('produits')->count('id');?></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-600">Categorie de produits</h5>
                                <h3 class="font-bold text-3xl">Nombre <?php echo $data = DB::table('categories')->count('id');?> </h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
               
            </div>
<?php /*
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 

                <div class="list-group">
                	<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
    
					  <a href="produits" class="list-group-item list-group-item-action flex-column align-items-start cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">Gestion des produits</h5>
					 
					    </div>
					    <p class="mb-1">Ajout,mise à jour,suppression, recherche, Affichage.</p>
					  </a>
					</div>  
					    <br>  <br>
					<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        
					  <a href="categorie" class="list-group-item list-group-item-action flex-column align-items-start cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">Gestion des categories</h5>
					    
					    </div>
					    <p class="mb-1">Ajout,mise à jour,suppression, recherche, Affichage.</p>
					
					  </a>
					</div>  
					  <br>  <br>
					  <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
    
					  <a href="user" class="list-group-item list-group-item-action flex-column align-items-start cursor-pointer mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full my-6">
					    <div class="d-flex w-100 justify-content-between">
					      <h5 class="mb-1">Edition des infos du compte</h5>
	
					    </div>
					    <p class="mb-1">Edition des informations du compte.</p>
					
					  </a>
					</div>

               
                </div>
            </div>
        </div>
    </div>

  */?>
</x-app-layout>  
