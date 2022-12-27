<x-app-layout>
  <div style="margin: 10px; background-color: white; padding: 20px;">
    <div style="display: flex">
      <div style="flex:3; padding-right: 20px; border-right: 1px solid; ">
        <div style="display:flex">
          <div style="flex: 2">
            <div class="mt-4">
              <x-input-label for="name" :value="__('Full name:')" />
              <x-text-input class="block mt-1 w-full" type="text" name="name"/>
            </div>
            <div class="mt-4">
              <x-input-label for="contact" :value="__('Parent/Guardian contact information:')" />
              <x-text-input class="block mt-1 w-full" type="text" name="contact"/>
            </div>
            <div class="mt-4">
              <x-input-label for="subjects" :value="__('Subject choices:')" />
              <x-text-input class="block mt-1 w-full" type="text" name="subjects"/>
            </div>
          </div>
    
          <div style="padding-left: 20px; flex: 1">
            <img alt="Image(option)" style="border: 1px solid; width: 100%; height: 100%; background-color: lightgrey" />
          </div>
        </div>

        <div class="mt-4">
          <x-input-label for="academics" :value="__('Academics(grades and predicted %):')" />
          <textarea class="block mt-1 w-full" name="academics"></textarea>
        </div>

        <div class="mt-4">
          <x-input-label for="extras" :value="__('Extra-curriculars/workshops/internships:')" />
          <textarea class="block mt-1 w-full" name="extras"></textarea>
        </div>

        <div class="mt-4">
          <x-input-label for="notes" :value="__('Other/notes:')" />
          <textarea class="block mt-1 w-full" name="notes"></textarea>
        </div>
      </div>
      <div style="flex: 1; padding-left: 20px;">
        @foreach ($sections as $item)
          <div style="background-color: grey; text-align: center; font-size: 36px; padding: 10px 0px;">{{ $item->name }}</div>
        @endforeach
        <div style="display:flex; padding-top: 10px;">
          <div style="flex:1"></div>
          <a href="/sections/create" style="display:inline-block; border: 1px solid; padding: 10px 20px; background-color: lightgrey;">+ add section</a>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>