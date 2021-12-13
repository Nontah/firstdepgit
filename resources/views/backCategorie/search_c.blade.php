<x-app-layout>
 <br><br>
 <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Fiche de categorie</h3>
    </div>
</div>

 <div class="w-3/5 bg--500 h-12"> </div>
 
    <div class="py-4 text-left px-6 text-indigo-500">
          @foreach ($r_categorie as $r_categorie)
            
              <div class="p-10 rounded-md shadow-md bg-white">
                  <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">libelé</label>
                      <input value="{!! $r_categorie->libele  !!}" disabled  class="border border-gray-500 @error('libele')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
                  </div>
                
               
                  <div class="mb-6">  <label class="block mb-3 text-gray-600" for="">Dèscription</label>
                    <p> {!! $r_categorie->description  !!}</p>
                    
                  </div>
                           
                   <div class="flex justify-end pt-2 my-2">
                      <button type="submit" class="w-full text-ceenter px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                          <a href="javascript:history.back()" class="btn btn-primary">
                           <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                          </a>
                      </button>
                  </div>
           </div>
          @endforeach
  </div>

</x-app-layout>