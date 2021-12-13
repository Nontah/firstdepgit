<x-app-layout>
    <x-slot name="header">
   <h4>Fiche de produit</h4>
    </x-slot>

<div class="flex">
 	<div class="w-1/5 bg--500 h-12">
    


                 
  </div>
<div class="w-2/5 bg--500 h-12">
                @foreach ($r_produit as $r_produit)
            
             
                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">Désignation</label>
                      <input value="{!! $r_produit->designation  !!}" disabled class="border border-gray-500 @error('designation')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
                   
                  </div>
                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">prix</label>
                      <input value="{!! $r_produit->prix  !!}" disabled class="border  border-gray-500 @error('prix')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                       @error("prix")
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                  </div>
                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">quantité</label>
                      <input value="{!! $r_produit->quantite  !!}" disabled class="border  border-gray-500 @error('quantite')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                   
                  </div>


                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">Dèscription</label>
                      <input  value="{!! $r_produit->description  !!}" disabled class="border border-gray-500 @error('description')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                  </div>


                   <div class="flex justify-end pt-2 my-2">
                    <button type="submit" class="w-ful text-right px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                        
                       <a href="javascript:history.back()" class="btn btn-primary">
                            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                        </a>
                    </button>
                  </div>
                      @endforeach
  </div>

<div class="w-2/5 bg--400 h-12"> 
    <div class="mb-6">
      <label class="block mb-3 text-gray-600" for="">   <img class="w-ful p-6" src="{{ asset('img/' . $r_produit->image) }}" alt="image"></label>
    </div>

</div>
  				
</div>
</x-app-layout>  