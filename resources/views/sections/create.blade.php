<x-app-layout>
  <div style="background-color: white: margin: 10px; padding: 20px;">
    <form action="/sections" method="POST">
      @csrf
      <div class="mt-4">
        <x-input-label for="name" :value="__('Full name:')" />
        <x-text-input class="block mt-1 w-full" type="text" name="name"/>
      </div>
      <input type="submit" value="Add" style="margin-top: 10px; background-color: lightgrey; padding: 10px; width: 100%;" />
    </form>
  </div>
</x-app-layout>