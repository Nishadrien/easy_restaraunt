<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
@include("admin.navbar")
<form action="{{ url('/uploadchief') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div>
<label>Name</label>
<input style="color:blue" type="text" name="name" placeholder="enter chef name" required>
</div>
<div>
    <label>Speciality</label>
    <input style="color:blue" type="text" name="speciality" placeholder="enter chef Speciality" required>
    </div>
    <div>
        
        <input type="file" name="image" required>
        </div>
        <div>
            
            <input type="submit"  value="Save">
            </div>
</form>

<table bgcolor="black">
  <tr align="center">
    <th style="padding: 30px;">Chef Name</th>
    <th style="padding: 30px;">Speciality</th>
    <th style="padding: 30px;">Image</th>
    <th style="padding: 30px;">Action</th>
    <th style="padding: 30px;">Action 2</th>
  </tr>
  @foreach ($data as $data)
    
  
  <tr align="center">
    <td>{{ $data->name }}</td>
    <td>{{ $data->speciality}}</td>
    <td><img height="80" width="80"  src="/chiefimage/{{ $data->image }}"></td>
    <td><a href="{{ url('/updatechief',$data->id) }}">Update</a></td>
    <td><a href="{{ url('/deletechief',$data->id) }}">Delete</a></td>
  </tr>
  @endforeach
  </table>
    </div>


    @include("admin.adminscript")

  </body>
</html>
