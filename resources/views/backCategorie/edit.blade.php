<x-app-layout>
<br><br>

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Mise à jour d'un catégorie de produit  
        <a href="javascript:history.back()"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py- px- rounded-full float-right">
                   Retour
                    </button>
         </a> 

        </h3>
    </div>
</div>
  @if(session()->has('mo'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Information </p>
              <p class="text-sm">{!! session('mo') !!}.</p>
            </div>
          @endif
<form method="post" action="{{ route('categorie.update', $categorie) }}" enctype="multipart/form-data">   
         @method("PUT")    
            @csrf
              <div class="p-10 rounded-md shadow-md bg-white">
                <div class="flex flex-wrap">
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">

                  <div class="block mb-6">
                      <span class="text-gray-700">libelé:</span>
                      @error("libele")
                        <small class="text-red-600">{{ $message }}</small>
                      @enderror
                      <input wire:model="libele" value="{!! $categorie->libele  !!}" name="libele" type="text" class="border border-gray-500 @error('libele')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
                     
                  </div>
                

                     <div class="block mb-6">
                        <span class="text-gray-700">Dèscription:</span>
                        @error("description")
                          <small class="text-red-600">{{ $message }}</small>
                        @enderror 
                        <textarea type="text" class="form-textarea mt-1 block w-full rounded-lg  @error('description')border-red-500 @enderror rounded-md" name="description" id="description" rows="3">{!! $categorie->description !!}
                        </textarea>
                       
                      </div>
                           
                  
              </div>

              <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">

            <div x-data="app()" x-cloak>
              <div class="mb-6 text-center">
                <div class="bg-white-100 px-10">
                <img id="imagecat" class="h-25 px-10" :src="imagecat" />
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

         

              <input name="imagecat" id="fileInput" accept="imagecat/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
                var reader = new FileReader();
                reader.onload = (e) => imagecat = e.target.result;
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


    <script>
    function app() {
      return {
        step: 1, 
  

        imagecat: '{{ asset('img/catimg/' .$categorie->image) }}',

       
      }
    }
</script>

</x-app-layout>