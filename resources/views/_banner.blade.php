@if(Session::has('success'))
<div class="relative bg-green-600" id="success_banner">
  <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="pr-16 sm:text-center sm:px-16">
      <p class="font-medium text-white">
        <span class="hidden md:inline">
          {{ Session::get('success')}}
        </span>
      </p>
    </div>
    <div class="absolute inset-y-0 right-0 pt-1 pr-1 flex items-start sm:pt-1 sm:pr-2 sm:items-start">
      <button id="success_banner_btn" type="button" class="flex p-2 rounded-md hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-white">
        <span class="sr-only">Dismiss</span>
        <!-- Heroicon name: outline/x -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</div>
@endif

@if(Session::has('failed'))
<div class="relative bg-red-600" id="failed_banner">
  <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
    <div class="pr-16 sm:text-center sm:px-16">
      <p class="font-medium text-white">
        <span class="hidden md:inline">
          {{ Session::get('failed')}}
        </span>
      </p>
    </div>
    <div class="absolute inset-y-0 right-0 pt-1 pr-1 flex items-start sm:pt-1 sm:pr-2 sm:items-start">
      <button id="failed_banner_btn" type="button" class="flex p-2 rounded-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-white">
        <span class="sr-only">Dismiss</span>
        <!-- Heroicon name: outline/x -->
        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</div>
@endif

@push('scripts')
  <script>
    document.getElementById('success_banner_btn').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('success_banner').style.display = 'none';
    })

    document.getElementById('failed_banner_btn').addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('failed_banner').style.display = 'none';
    })
  </script>
@endpush