<nav class="bg-indigo-600 border-b border-indigo-300 border-opacity-25 lg:border-none">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
    <div class="relative h-16 flex items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
      <div class="px-2 flex items-center lg:px-0">
        <div class="flex-shrink-0">
          <h1 class="text-white text-2xl font-bold">Shoex Store</h1>
        </div>
        <div class="hidden lg:block lg:ml-10">
          <div class="flex space-x-4">
            <a href="{{ route('home') }}" class="bg-indigo-700 text-white rounded-md py-2 px-3 text-sm font-medium">
              Home
            </a>
            
            @if(Auth::check() && Auth::user()->role == "MEMBER")
              <a href="#" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                My Transactions
              </a>
            @endif
          </div>
        </div>
      </div>
      <div class="flex lg:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="bg-indigo-600 p-2 rounded-md inline-flex items-center justify-center text-indigo-200 hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:block lg:ml-4">
        <div class="flex items-center">
          <!-- Profile dropdown -->
          @if(Auth::check())
            <div class="ml-3 relative flex-shrink-0">
              <div>
                <button id="toggle_user_menu_btn" type="button" class="bg-indigo-600 rounded-full flex text-sm text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="rounded-full h-8 w-8" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixqx=nkXPoOrIl0&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div id="user_menu" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">
                  Sign out
                </a>
              </div>
            </div>
          @else
            <div class="flex space-x-4">
              <a href="{{ route('login') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                Login
              </a>

              <a href="{{ route('register') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">
                Register
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</nav>


@push('scripts')
  <script>
    const toggleUserMenuBtn = document.getElementById('toggle_user_menu_btn');
    const userMenu = document.getElementById('user_menu');

    toggleUserMenuBtn.addEventListener('click', function(e) {
      e.preventDefault();
      
      if (userMenu.classList.contains("hidden")) {
        userMenu.classList.remove("hidden")
      } else {
        userMenu.classList.add("hidden")
      }
    });
  </script>
@endpush