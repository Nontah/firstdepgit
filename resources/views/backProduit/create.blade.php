<x-app-layout>
<br><br>
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Enregistrement d'un nouveaux produit </h3>
    </div>
</div>

<div class="py- text-left px-6">
 <form method="post" action="{{ route('produits.store') }}" enctype="multipart/form-data" >       
            @csrf
   <div class="p-10 rounded-md shadow-md bg-white">
                    
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">
              
                        <div class="block mb-6">
                        <span class="text-gray-600" for="">Désignation :</span>
                          @error("designation")
                            <small class="text-red-600">{{ $message }}</small>
                          @enderror
                        <input name="designation" value="{{ old('designation') }}" type="text" class="border border-gray-500 @error('designation')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
                             
                          </div>
                         
                              <div class="block mb-6">
                              <span class="text-gray-600" for="">Quantité :</span>
                                @error("quantite")
                                <small class="text-red-600">{{ $message }}</small>
                                @enderror
                              <input name="quantite" value="{{ old('quantite') }}" type="number" min="0" class="border  border-gray-500 @error('quantite')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>

                             
                          </div>

                               <div class=" block mb-6">
                                <span class="text-gray-700">Dèscription :</span>
                                  @error("description")
                                    <small class="text-red-600">{{ $message }}</small>
                                  @enderror
                                  <textarea type="text" class="form-textarea mt-1 block w-full rounded-lg  @error('description')border-red-500 @enderror rounded-md" name="description" value="{{ old('description') }}" id="description" rows="3"> 
                                   {{old('description')}}
                                  </textarea>
                                  
                              </div>

                           <div class="block mb-6">
                              <label class="text-gray-600" for="">Catégorie :</label>
                              <select class="form-control" name="category_id" id="categorie_id" required>
                                @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->libele }}</option> 
                                @endforeach
                            </select>
                          </div>

                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">
                           <div class="block mb-6">
                              <span class="text-gray-600" for="">prix :</span>
                                @error("prix")
                                <small class="text-red-600">{{ $message }}</small>
                                @enderror
                              <input name="prix" value="{{ old('prix') }}" type="text" class="border  border-gray-500 @error('prix')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
                             
                          </div>

                      <div x-data="app()" x-cloak>
                      <div class="mb-6 text-center">
                          @error("image")
                            <small class="text-red-600">{{ $message }}</small>
                          @enderror
                      <div class="mx-auto w-40 h-40 mb-2 border rounde-full relative bg-gray-100 mb-4 shadow-inset">
                        <img id="image" class="object-cover w-full h-40 rounde-full" :src="image" />
                      </div>
                    
                      <label 
                        for="fileInput"
                        type="button"
                        class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
                      >

                        
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                          <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                          <circle cx="12" cy="13" r="3" />
                        </svg>            
                        Choisisez une image
                      </label>

                     

                      <input name="image" value="{{ old('image') }}"id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
                        var reader = new FileReader();
                        reader.onload = (e) => image = e.target.result;
                        reader.readAsDataURL(file);">

                        </div>

                      </div>
             </div>

         </div>
                                  
          <div class="flex justify-end pt-2 my-2">
            <button type="submit" class="w-full text-ceenter px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
               Valider
            </button>
          </div>
          </div>
        </form>        
  </div>

    <script>
    function app() {
      return {
        step: 1, 
      

        image: 'M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2'

       
      }
    }
  </script>
</x-app-layout>