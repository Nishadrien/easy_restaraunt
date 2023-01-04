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


<form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
@csrf
<div >
<label style="padding: 20px;">Title</label>
<input type="text" style="color: blue;" name="title" placeholder="write food title" required>
</div>
<div >
<label style="padding: 20px;">Price</label>
    <input type="num" style="color: blue; " name="price" placeholder="write food price" required>
    </div>
    <div >
        <label style="padding: 20px;">Image</label>
        <input type="file" name="image" required>
        </div>
        <div  >
            <label style="padding: 20px;">Description</label>
            <input type="text" style="color: blue ;" name="description" placeholder="write food description" required>
            </div>
            <div>
                <button type="submit" style="color:bisque" value="Save">Save
                </button>
                </div>
</form>


<table bgcolor="black">



<tr>
    <th style="padding:30px;">Food Name</th>
    <th style="padding:30px;">Price</th>
    <th style="padding:30px;">Description</th>
    <th style="padding:30px;">Image</th>
    <th style="padding:30px;">Action</th>
    <th style="padding:30px;">Action2</th>
</tr>
@foreach ($data as $data)
<tr align="center">

    <td>{{ $data->title }}</td>
    <td>{{ $data->price }}</td>
    <td>{{ $data->description }}</td>
    <td><image height="150" width="150" src="/foodimage/{{ $data->image }}"></td>
        <td><a href="{{ url('/deletefood',$data->id) }}">Delete</a></td>
        <td><a href="{{ url('/updatefood',$data->id) }}">Update</a></td>
</tr>
@endforeach
</table>



    </div>
    @include("admin.adminscript")

  </body>
</html>
