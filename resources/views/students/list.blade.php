<x-app-layout>
  <div style="margin: 10px; background-color: white; display:flex; padding: 20px">
    <div style="flex: 3; border-right: 1px solid; padding-right: 10px;">
      <table width="100%">
        @foreach ($students as $item)
            <tr>
              <td>{{ "Student ".($loop->index + 1) }}</td>
              <td><a href={{ "/students/".$item->id }} style="text-decoration: none;">{{ "Name ".$item->name }}</a></td>
            </tr>
        @endforeach
      </table>
      <div style="display:flex; padding: 10px;">
        <div style="flex:1"></div>
        <a href={{ "/students/create?grade=".request()->input('grade') }} style="display:inline-block; border: 1px solid; padding: 10px 20px; background-color: lightgrey;">+ add student</a>
      </div>
    </div>
    <div style="flex: 1; padding-left: 20px;">
      @foreach ($sections as $item)
        <div style="background-color: grey; text-align: center; font-size: 36px; padding: 10px 0px; margin: 10px 0px;">{{ $item->name }}</div>
      @endforeach
      <div style="display:flex; padding-top: 10px;">
        <div style="flex:1"></div>
        <a href="/sections/create" style="display:inline-block; border: 1px solid; padding: 10px 20px; background-color: lightgrey;">+ add section</a>
      </div>
    </div>
  </div>
</x-app-layout>