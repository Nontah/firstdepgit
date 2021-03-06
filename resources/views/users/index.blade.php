<x-app-layout>

<br><br>

  <style>
    [x-cloak] {
      display: none;
    }

    [type="checkbox"] {
      box-sizing: border-box;
      padding: 0;
    }

    .form-checkbox,
    .form-radio {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      -webkit-print-color-adjust: exact;
      color-adjust: exact;
      display: inline-block;
      vertical-align: middle;
      background-origin: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      flex-shrink: 0;
      color: currentColor;
      background-color: #fff;
      border-color: #e2e8f0;
      border-width: 1px;
      height: 1.4em;
      width: 1.4em;
    }

    .form-checkbox {
      border-radius: 0.25rem;
    }

    .form-radio {
      border-radius: 50%;
    }

    .form-checkbox:checked {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
      border-color: transparent;
      background-color: currentColor;
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
    }
    
    .form-radio:checked {
      background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
      border-color: transparent;
      background-color: currentColor;
      background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
<div class="bg-gray-800 pt-3">
    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">  Information du compte </h3>
    </div>
</div>
 @if(session()->has('statu'))
            <div class="bg-red-100 border-t border-b border-red-500 text-white-700 px-4 py-3" role="alert">
              <p class="font-bold">Informational</p>
              <p class="text-sm">{!! session('statu') !!}.</p>

            </div>
    @endif
 @if(session()->has('ok'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Information</p>
              <p class="text-sm">{!! session('ok') !!}.</p>

            </div>
    @endif
<form method="post" action="{{ route('user.update', $user) }}" enctype="multipart/form-data" >
  @method("PUT")    
  @csrf
 
</form>  

<div class="py- text-left px-6 text-indigo-500">
  <div class="p-10 rounded-md shadow-md bg-white">               
    <div class="flex flex-wrap">

<div class="w-full  bg-gray-00">



<div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
  <div class="top h-64 w-full bg-blue-600 overflow-hidden relative" >
    <img src="{{ asset('imguser/' . Auth::user()->image) }}" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
    <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
      @if(Auth::user()->image == '1')
         <img class="responsive-img h-24 w-24 object-cover rounded-full" src="{{ asset('imguser/' .'default' . '.png') }}" />
      @elseif(Auth::user()->image != '')
      <img src="{{ asset('imguser/' . Auth::user()->image) }}" class="responsive-img h-24 w-24 object-cover rounded-full">
       @endif
      <h1 class="text-2xl font-semibold">{{ Auth::user()->name }}</h1>
      <h4 class="text-sm font-semibold"></h4>
    </div>
  </div>

  <div x-data="app()" x-cloak>
  <div class="grid grid-cols-12 bg-white ">


    <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">


      
    <button        
      @click="step = <?php echo session('step1');?>"
      class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold" 
      >Image de profil
    </button>

      <button        
      @click="step = <?php echo session('step2');?>"
      class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold" 
      >Nom(s)
    </button>

    <button       
      @click="step = <?php echo session('step3');?>"
      class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200" 
      >Mot de pass
    </button>

    <button       
      @click="step = <?php echo session('step4') ;?>"
      class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200" 
      >Email
    </button>

    
       
              

    </div>

    <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
      <div id="infobase" class="px-4 pt-4">
       
    <div class="max-w-3xl mx-auto px-4 py-w">


      <div x-show.transition="step != 'complete'">  
        <!-- Top Navigation -->
        <div class="border-b-2 py-">
          <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight">
            

          </div>
          <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div class="flex-1">
              <div x-show="step === <?php echo session('step1');?>">
                <div class="text-lg font-bold text-gray-700 leading-tight">Mise ?? jour de Image de Profile</div>
              </div>
              
              <div x-show="step === <?php echo session('step2');?>">
                <div class="text-lg font-bold text-gray-700 leading-tight">Mise ?? jour du Nom</div>
              </div>

              <div x-show="step === <?php echo session('step3');?>">
                <div class="text-lg font-bold text-gray-700 leading-tight">Mise ?? jour du Mot de pass</div>
              </div>

              <div x-show="step === <?php echo session('step4');?>">
                <div class="text-lg font-bold text-gray-700 leading-tight">Mise ?? jour de l'adresse email</div>
              </div>

            </div>

            
          </div>
        </div>
        <!-- /Top Navigation -->

        <!-- Step Content -->
        <div class="py-10"> 
         
          <div x-show.transition.in="step === <?php echo session('step1');?>">
             <form method="post" action="{{ route('updateprofilimage') }}" enctype="multipart/form-data" >
                @if(session()->has('pf'))
              <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-1" role="alert">
                <p class="font-bold">Message</p>
                <p class="text-sm">{!! session('pf') !!}.</p>
              </div>
            @endif
            @csrf
            <div class="mb-5 text-center">
              <div class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                <img id="image" class="object-cover w-full h-32 rounded-full" :src="image" />
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

              <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Cliquez pour ajouter une photo de profil</div>

              <input name="image" id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
                var reader = new FileReader();
                reader.onload = (e) => image = e.target.result;
                reader.readAsDataURL(file);">
            </div>
            
            <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                    Valider
            </button>
          
           </form>

            </div>

            <div x-show.transition.in="step === <?php echo session('step2');?>">
              @if(session()->has('nn'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Informational message</p>
              <p class="text-sm">{!! session('nn') !!}.</p>
            </div>
           @endif
            <form method="post" action="{{ route('updateusename') }}" enctype="multipart/form-data">
               
            @csrf

            <div class="mb-5">
              <label for="name" class="font-bold mb-1 text-gray-700 block">Nom(s)</label>
              <input type="text" name="name" value="{{ Auth::user()->name  }}" 
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('name')border-red-500 @enderror"
                placeholder="Enter your firstname...">
            </div>
            
                <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                        Valider
                 </button>
       
    
           </form>
            </div>
          
          <div x-show.transition.in="step === <?php echo session('step3');?>">
            @if(session()->has('ps'))
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                  <p class="font-bold">Informational message</p>
                  <p class="text-sm">{!! session('ps') !!}.</p>
                </div>
            @endif
            @if(session()->has('pser'))
            
              <div class="bg-red-100 border-t border-b border-red-500 text-white-700 px-4 py-3" role="alert">
              <p class="font-bold">Informational</p>
              <p class="text-sm">{!! session('pser') !!}.</p>

            </div>
            @endif
          <form method="post" action="{{ route('updateusepass') }}" enctype="multipart/form-data" >  
            @csrf
        
            <div class="mb-5">
              <label for="password" class="font-bold mb-1 text-gray-700 block">Changer de mot de passe</label>
              <div class="text-gray-600 mt-2 mb-4">
                Veuillez cr??er un mot de passe s??curis?? .
              
              </div>


              <div class="relative">
                  <label for="password" class="font-bold mb-1 text-gray-700 block">Mot de pass actuel</label>
                <input
                  name="passactuel"
                  :type="togglePassword ? 'password' : 'password'"
                  @keydown="checkPasswordStrength()"
                  x-mode="passactuel"
                  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('passactuel')border-red-500 @enderror"
                 >
                <div class="mb-5">
                 <label for="password" class="font-bold mb-1 text-gray-700 block">Entrey le nouveaux mot de pass</label>
                <input
                  :type="togglePassword ? 'password' : 'password'"
                  name="password"
                  @keydown="checkPasswordStrength()"
                  x-mode="password"
                  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('password')border-red-500 @enderror"
                 >
                   @error("password")
                        <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-5">
                <label for="confirmnewpass" class="font-bold mb-1 text-gray-700 block">Confirmer</label>
                <input
                  :type="togglePassword ? 'password' : 'password'"
                  name="password_confirmation"
                  @keydown="checkPasswordStrength()"
                  x-mode="password"
                
                  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('password_confirmation')border-red-500 @enderror"
                 >
                  @error("password_confirmation")
                        <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="absolute right-0 bottom-0 top-0 px-3 py-3 cursor-pointer" 
                  @click="togglePassword = !togglePassword"
                > 
                 

                  <svg :class="{'hidden': togglePassword, 'block': !togglePassword }" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500" viewBox="0 0 24 24"><path d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z"/><path d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"/></svg>
                </div>
              </div>
            
            </div>

            
            <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
              Valider
            </button>
           
          </form>

          </div>

          
          <div x-show.transition.in="step === <?php echo session('step4');?>">
            @if(session()->has('code'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold">Informational message</p>
              <p class="text-sm">{!! session('code') !!}.</p>
            </div>
           @endif
              @if(session()->has('em'))
              <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                <p class="font-bold">M??ssage</p>
                <p class="text-sm">{!! session('em') !!}.
                  <div x-data="{ showModal: false }" :class="{'overflow-y-hidden': showModal}">
                           
                  <button @click="showModal = true" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white m-5 show-modal">
                   Cliquez ici
                  </button>

                   <div x-show="showModal" class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-black bg-opacity-50 ">
                      <!-- modal -->
                      <div class="bg-white rounded shadow-lg w-10/12 md:w-1/3">
                        <!-- modal header -->
                        <div class="border-b px-4 py-2 flex justify-between items-center">
                          <h3 class="font-semibold text-lg">Saisisez votre code</h3>
                          <button class="text-black close-modal">&cross;</button>
                        </div>
                        <!-- modal body -->
                        <form method="post" action="{{ route('updateusemail') }}" enctype="multipart/form-data" >
                         
                        @csrf

                        <div class="p-3">

                             <div class="mb-5">
                            <input type="hidden" name="name" value="{{ Auth::user()->name  }}" 
                              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('name')border-red-500 @enderror"
                              placeholder="Enter your firstname...">
                          </div>

                             <input type="hidden" name="email"  value="{{ Auth::user()->email }}" 
                              class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('email')border-red-500 @enderror"
                              placeholder="Enter your email address...">


                             <div class="mb-5">
                                <label for="code" class="font-bold mb-1 text-gray-700 block">Entrez le code</label>
                                <input type="text" 
                                  name="code" 
                                  class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('code')border-red-500 @enderror"
                                  placeholder="Entrez le code...">
                              </div>
                        </div>

                        <button type="submit" class="w-ful text-center px-2 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                                          Envoyer
                        </button>
                      </form>
                        <div class="flex justify-end items-center w-100 border-t p-3">
                          <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal">
                            Annuler
                          </button>
                        </div>

                      </div>
                    </div>
                  </div>
                </p>
              </div>
             @endif
            
          <form method="post" action="{{ route('updateusnewemail') }}" enctype="multipart/form-data" >  
            @csrf

              <label for="password" class="font-bold mb-1 text-gray-700 block">Changer l'adresse email </label>

               <div class="mb-5">
              <input type="hidden" name="name" value="{{ Auth::user()->name  }}" 
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('name')border-red-500 @enderror"
                placeholder="Enter your firstname...">
            </div>

               <input type="hidden" name="email"  value="{{ Auth::user()->email }}" 
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('email')border-red-500 @enderror"
                placeholder="Enter your email address...">



             <div class="mb-5">
              <label for="email" class="font-bold mb-1 text-gray-700 block">Email actuel</label>
              <input type="email" value="{{ Auth::user()->email }}" 
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                placeholder="Enter your email address...">
            </div>

            <div class="mb-5">
              <label for="email" class="font-bold mb-1 text-gray-700 block">Entrez la nouvelle adresse email</label>
              <input type="email" name="email"  
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('email')border-red-500 @enderror"
                placeholder="Entrez votre adresse mail...">
                  @error("email")
                        <small class="text-danger">{{ $message }}</small>
                  @enderror
            </div>

             
                <button type="submit" class="w-full text-center px-4 py-3 bg-blue-500 rounded-md shadow-md text-white font-semibold">
                        Valider
                 </button>
        </form>





          </div>
           
        </div>
        <!-- / Step Content -->
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

        image: '{{ asset('imguser/' . Auth::user()->image) }}',
        password: '',
        gender: 'Male',

        checkPasswordStrength() {
          var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
          var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

          let value = this.password;

          if (strongRegex.test(value)) {
            this.passwordStrengthText = "Strong password";
          } else if(mediumRegex.test(value)) {
            this.passwordStrengthText = "Could be stronger";
          } else {
            this.passwordStrengthText = "Too weak";
          }
        }
      }
    }
  </script>

      </div> 
      </div> 
 
   </div>

</div>

 
  <style type="text/css">
    
    #modal:target {
   display: flex;
}
  </style>
  <script>

    const modal = document.querySelector('.modal');

    const showModal = document.querySelector('.show-modal');
    const closeModal = document.querySelectorAll('.close-modal');

    showModal.addEventListener('click', function (){
      modal.classList.remove('hidden')
    });

    closeModal.forEach(close => {
      close.addEventListener('click', function (){
        modal.classList.add('hidden')
      });
    });
  </script>


</x-app-layout>  