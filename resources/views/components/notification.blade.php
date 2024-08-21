@if(Session::has('success'))
    <p class="text-green-500">{{ Session::get('success') }}</p>
@endif
@if(Session::has('error'))
    <p class="text-red-600">{{ Session::get('error') }}</p>
@endif
