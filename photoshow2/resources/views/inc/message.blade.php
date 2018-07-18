@if(count($errors) >0)
 @foreach($errors->all() as $errors)
  <div class="callout alert">
    {{$errors}}
  </div>
  @endforeach
  @endif

  @if(session('success'))
   <div class="callout success">
     {{session('success')}}
   </div>
   @endif

   @if(session('error'))
   <div class="callout alert">
     {{sesion('error')}}
   </div>
   @endif
