<x-app-layout>
<br><br>
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Fiche de produit 

           <a href="javascript:history.back()"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py- px- rounded-full float-right">
           Retour
          </button>
         </a> 
        </h3>
    </div>
</div>

<div class="py- text-left px-6 text-indigo-500">
  <div class="p-10 rounded-md shadow-md bg-white">               
    <div class="flex flex-wrap">
       <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">

                 <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">Désignation</label>
                      <input value="{!! $produit->designation  !!}" disabled class="border border-gray-500 @error('designation')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
                  </div>

                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">prix</label>
                      <input value="{!! $produit->prix  !!}" disabled class="border  border-gray-500 rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                       @error("prix")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                  </div>

                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">quantité</label>
                      <input value="{!! $produit->quantite  !!}" disabled class="border  border-gray-500 rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                   
                  </div>

                  <div class="mb-6">
                      <span class="text-gray-600">Dèscription:</span>
                      <textarea type="text" disabled class="form-textarea mt-1 block w-full rounded-lg text-gray-600" rows="3">
                          {!! $produit->description !!}
                        </textarea>
                  </div>

       </div>

        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">

            <div class="mb-6">
              <label class="block mb-3 text-gray-600" for="">   <img class="w-ful p-6" src="{{ asset('img/' . $produit->image) }}" alt="image"></label>
            </div>

       </div>
    </div>
    
                   <div class="flex justify-end pt-2 my-2">
                    <button type="submit" class="w-full text-center px-4 py-1 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                        
                       <a href="javascript:history.back()" class="btn btn-primary">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                        </a>
                    </button>
                  </div>
  </div>  

</div>

</x-app-layout>  