<x-app-layout>
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot> --}}

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
        @for ($i = 0; $i < 5; $i++)
          <a href={{ "/students?grade=".($i + 1) }} style="display: inline-block; width: 50%; margin: 10px; text-align: center; font-size: 24px; padding: 24px; border: 1px solid; background-color: lightgrey;">Grade x{{ $i + 1 }}</a>    
        @endfor
      </div>
    </div>
  </div>
</x-app-layout>