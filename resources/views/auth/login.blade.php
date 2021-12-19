<x-guest-layout>


    <style>
    .bg-image {
      background-image: url({{ asset('image/' . 'bg-image.png') }} );
    }
    .backdrop {
      backdrop-filter: blur(2px);
    }
  </style>

  <div class="h-screen w-full flex justify-center items-center bg-gradient-to-tr from-blue-900 to-blue-500 pt-3">
    <div class="bg-image w-full sm:w-1/2 md:w-9/12 lg:w-1/2 mx-3 md:mx-5 lg:mx-0 shadow-md flex flex-col md:flex-row items-center rounded z-10 overflow-hidden bg-center bg-cover bg-blue-600">
         <?php $lg='lg_bio2.png';?>
      <div class="w-full md:w-1/2 flex flex-col justify-center items-center bg-opacity-25 bg-blue-600 backdrop">
        <img class="responsive-img" src="{{ asset('image/' . $lg) }}">
        <p class="mb-2 text-white hidden md:block font-mono">
          Administration
        </p>
      </div>

      
      <div class="w-full md:w-1/2 flex flex-col items-center bg-white py-3 md:py-8 px-4">
        <h3 class="mb-4 font-bold text-3xl flex items-center text-blue-500">
          Authentification
        </h3>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />



        <form method="POST" action="{{ route('login') }}" class="px-3 flex flex-col justify-center items-center w-full gap-3">
               @csrf

          <x-input 
            type="email" name="email" :value="old('email')" placeholder="email.."
            class="px-4 py-2 w-full rounded border border-gray-300 shadow-sm text-base placeholder-gray-500 placeholder-opacity-50 focus:outline-none focus:border-blue-500" required autofocus
          />

            <!-- Password -->
         <x-input 
            id="password" type="password"  name="password" placeholder="password.."
            class="px-4 py-2 w-full rounded border border-gray-300 shadow-sm text-base placeholder-gray-500 placeholder-opacity-50 focus:outline-none focus:border-blue-500"
          required autocomplete="current-password"/>


           <!-- Remember Me -->
          

           <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?

                   ?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('connexion') }}
                </x-button>
            </div>
        </form>
        <p class="text-gray-700 text-sm mt-4">
         
          <a href="#" class="text-green-500 hover:text-green-600 mt-4 focus:outline-none font-bold underline">
          
          </a>
        </p>
      </div>
    </div>
  </div>

</x-guest-layout>
