<x-app-layout>
<br><br>

<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Mise à jour d'un utilisateur
        <a href="javascript:history.back()"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py- px- rounded-full float-right">
           Retour
          </button>
         </a> 

        </h3>
    </div>
</div>

<div class="py- text-left px-6">
  <div class="p-10 rounded-md shadow-md bg-white">               
    <div class="flex flex-wrap">

        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">

              <div x-data="app()" x-cloak>
              <div class="mb-6 text-center">
                <div class="bg-white-100 ">
                <img id="image" class="h-45" :src="image" />

              </div>  
            
              <input name="image" id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
                var reader = new FileReader();
                reader.onload = (e) => image = e.target.result;
                reader.readAsDataURL(file);">
                </div>
                <span class="text-gray-600" for="">  {{ $user->name }}</span>
                <span class="text-gray-600" for="">  {{ $user->email }}</span>
              </div>


       </div>
<form method="post" action="{{ route('usermanage.update', $user) }}" >   
@method("PUT")    
@csrf
       <div class="">
        <h3 class="">Droits catégorie de produits</h3>
       
        <div class="block mb-6">
           @error("designation")
              <small class="text-red-600">{{ $message }}</small>
            @enderror
               <span class="text-gray-600" for="">Consulter</span>
       
           <input type="checkbox" name="consulte" id="consulte" class="" <?php if( $user->consultCat == 1 ) { ?> checked <?php }?> >

             

          </div>
     
       </div>


       <div class="">
        <h3 class="">Droits de produits</h3>
       
        <div class="block mb-6">
        
               <span class="text-gray-600" for="">Consulter</span>
       
           <input type="checkbox" name="consulteprd" id="consulteprd" class="" <?php if( $user->consultPrd == 1 ) { ?> checked <?php }?> >

          </div>
     
       </div>

        <div class="flex justify-end pt-2 my-">
          <button type="submit" class="w-full text-ceenter px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
             Valider
          </button>
        </div>

</form>

      </div> 

      </div> 
    </div>  
</div>
        
    <script>
    function app() {
      return {
        step: 1, 
        passwordStrengthText: '',
        togglePassword: false,

     
       image: '{{ asset('imguser/' . $user->image) }}',

      }
    }
  </script>
</x-app-layout>