<x-app-layout>
<br><br>
 <div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Fiche de catégorie</h3>
    </div>
</div>

    <div class="py- text-left px-6 text-indigo-500">
   
              <div class="p-10 rounded-md shadow-md bg-white">
                 <div class="flex flex-wrap">
                  <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">
                   
                    <div class="mb-6">
                      <label class="block mb-3 text-gray-600" for="">libelé</label>
                      <input value="{!! $categorie->libele  !!}" disabled  class="border border-gray-500 rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
                    </div>

                    <label class="block">
                        <span class="text-gray-600">Dèscription:</span>
                        <textarea type="text" disabled class="form-textarea mt-1 block w-full rounded-lg text-gray-600 " name="description" id="description" rows="3">{!! $categorie->description !!}</textarea>
                          @error("description")
                          <small class="text-danger">{{ $message }}</small>
                          @enderror
                    </label>
                  </div> 
                  <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">
                      <div class="mb-4">
                        <label class="block mb-3 text-gray-600" for="">   <img class="w-ful p-2" src="{{ asset('img/catimg/' . $categorie->image) }}" alt="image"></label>
                      </div>
                  </div> 
                </div> 


                  <div class="flex justify-end pt-2 my-2">
                    <button class="w-full text-ceenter px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                    <a href="javascript:history.back()" class="btn btn-primary">
                    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                    </a>
                    </button>
                  </div>
              </div>
    <script>
    function app() {
      return {
        step: 1, 
  

        imagecat: '{{ asset('img/catimg/' .$categorie->image) }}',

       
      }
    }
</script>

</x-app-layout>