<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
@include("admin.navbar")
<form action="{{ url('/updatefoodchief',$data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
<div>
<label>Chef Name</label>
<input style="color: blue;" type="text" name="name" value="{{ $data->name }}">
</div>
<div>
    <label>Speciality</label>
    <input style="color: blue;" type="text" name="speciality" value="{{ $data->speciality }}">
    </div>
    <div>
        <label>Old image</label>
       <img height="250" width="250" src="/chiefimage/{{ $data->image }}">
        </div>
        <div>
            <label>New Image</label>
            <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Update">
                </div>
</form>
</div>
    @include("admin.adminscript")

  </body>
</html>
