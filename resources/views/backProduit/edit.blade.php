<x-app-layout>
<br><br>
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2"> Mise à jour d'un produit
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
   @if(session()->has('adimg'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Information </p>
              <p class="text-sm">{!! session('adimg') !!}.</p>
            </div>
    @endif
<form method="post" action="{{ route('produits.update', $produit) }}" enctype="multipart/form-data">   
@method("PUT")    
@csrf
<div class="py- text-left px-6">
  <div class="p-10 rounded-md shadow-md bg-white">               
    <div class="flex flex-wrap">
       <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">

        <div class="block mb-6">
          <span class="text-gray-600" for="">Désignation</span>
           @error("designation")
              <small class="text-red-600">{{ $message }}</small>
            @enderror
          <input wire:model="designation" value="{!! $produit->designation  !!}" name="designation" type="text" class="border border-gray-500 @error('designation')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-wider"/>
           
          </div>


          <div class="block mb-6">
            <span class="text-gray-600" for="">quantité</span>
              @error("quantite")
                <small class="text-red-600">{{ $message }}</small>
              @enderror
              <input name="quantite" value="{!! $produit->quantite  !!}"  type="number" min="0" class="border  border-gray-500 @error('quantite')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
            
          </div>
          
           <label class="block mb-6">
              <span class="text-gray-700">Dèscription:</span>
               @error("description")
                <small class="text-red-600">{{ $message }}</small>
                @enderror
              <textarea type="text" class="form-textarea mt-1 block w-full rounded-lg @error('description')border-red-500 @enderror rounded-md" name="description" id="description" rows="3">{{ $produit->description }}</textarea>
               
            </label>

           <div class="block mb-6">
                <label class="text-gray-600" for="">Categorie</label>
              <select class="form-control" name="category_id"  value="{{ $produit->category_id  }}"  id="categorie_id" required>
                  @foreach ($categories as $categorie)
                  <option {{ $categorie->id==$produit->category_id ? "selected" : "" }} value="{{ $categorie->id }}">{{ $categorie->libele }}</option> 
                  @endforeach
              </select>
                   
            </div>

       </div>

        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 bg-gray-00">


           <div class="block mb-6">
            <span class="text-gray-600" for="">prix</span>
            @error("prix")
              <small class="text-red-600">{{ $message }}</small>
            @enderror
            <input name="prix" value="{!! $produit->prix  !!}" type="text" class="border  border-gray-500 @error('prix')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
             
          </div>


            <!--<div class="mb-6">
                <label class="block mb-3 text-gray-600" for="">   <img class="w-ful p-6" src="{{ asset('img/' . $produit->image) }}" alt="image">
                </label>
                <input wire:model="image" value="{!! $produit->image  !!}" name="image" type="file" class="form-control-file" class="border  border-gray-500 @error('image')border-red-500 @enderror rounded-md inline-block py-2 px-3 w-full text-gray-600 tracking-widest"/>
            </div>-->

              <div x-data="app()" x-cloak>
              <div class="mb-6 text-center">
                <div class="bg-white-100 px-10">
                <img id="image" class="h-25 px-10" :src="image" />
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

         

              <input name="image" id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
                var reader = new FileReader();
                reader.onload = (e) => image = e.target.result;
                reader.readAsDataURL(file);">
                </div>

              </div>


       </div>
      </div> 


   <div class="flex justify-center">
    <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
       Valider
    </button>
  </div>
    </div> 

 <div class="flex justify-center">
     <h4 class="text-gray-600" for=""> Ajout d'image </h4>
 </div>



</div>


</form>  



  <table class="table">
                             
    <tr class="">
      <td class="">

 <div x-data="app2()" x-cloak>
      
 <form method="post" action="{{ route('ajoutimg2', $produit) }}" enctype="multipart/form-data" >
      @method("POST")
      @csrf
     <div class="">

                <div class=" text-center">
                     <input value="{!! $produit->designation  !!}" name="designation" type="hidden" />

                 
                    <div class="mx-auto w-44 h-44 mb-2 border rounded-ful relative bg-gray-100 mb-4 shadow-inset">
                      <img id="imagep2" class="object-cover w-full h-44 rounded-ful" :src="imagep2"/>
                    </div>
                  
                    <label 
                      for="fileInputp2"
                      type="button"
                      class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                        <circle cx="12" cy="13" r="3" />
                      </svg>            
                      Ajoutez une image
                    </label>

                  

                    <input name="image2" id="fileInputp2" accept="imagep2/*" class="hidden" type="file" @change="let file = document.getElementById('fileInputp2').files[0]; 
                      var reader = new FileReader();
                      reader.onload = (e) => imagep2 = e.target.result;
                      reader.readAsDataURL(file);">
                </div> 

              </div>
  <input type="hidden" name="ajoutprodimg2" value="{{ $produit->id  }}">


                    <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                      Valider
                   </button> 

         </form>

</div>
</td>

<td>
<div x-data="app3()" x-cloak>
     
  <form method="post" action="{{ route('ajoutimg3', $produit) }}" enctype="multipart/form-data" >
              @method("POST")
              @csrf
     <div class="">
            

                <div class="text-center">
                    <input value="{!! $produit->designation  !!}" name="designation" type="hidden" />
                 
             
                    <div class="mx-auto w-44 h-44 mb-2 border rounded-ful relative bg-gray-100 mb-4 shadow-inset">
                      <img id="imagep3" class="object-cover w-full h-44 rounded-ful" :src="imagep3"/>
                    </div>
                  
                    <label 
                      for="fileInputp3"
                      type="button"
                      class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium"
                    >
                      <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                        <circle cx="12" cy="13" r="3" />
                      </svg>            
                      Ajoutez une image
                    </label>

                

                    <input name="image3" id="fileInputp3" accept="imagep3/*" class="hidden" type="file" @change="let file = document.getElementById('fileInputp3').files[0]; 
                      var reader = new FileReader();
                      reader.onload = (e) => imagep3 = e.target.result;
                      reader.readAsDataURL(file);">
                </div> 

  <input type="hidden" name="ajoutprodimg3" value="{{ $produit->id  }}">
              </div>

                  <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                      Valider
                  </button> 

         </form>
</div>
</td>
</tr>
</table>





    <script>
    function app() {
      return {
        step: 1, 
        passwordStrengthText: '',
        togglePassword: false,

        image: '{{ asset('img/' .$produit->image) }}',

       
      }
    }


        function app2() {
           
          return {

            step: 1, 
            imagep2: '{{ asset('img/' .$produit->img2) }}',
        password: '',
        gender: 'Male',
        
          }
        }

         function app3() {
           
          return {

            step: 1, 
            imagep3: '{{ asset('img/' .$produit->img3 ) }}',
        password: '',
        gender: 'Male',
        
          }
        }
  </script>
</x-app-layout>