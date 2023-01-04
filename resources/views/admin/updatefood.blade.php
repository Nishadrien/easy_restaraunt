
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


<div style="position:relative; top:60px; right:-150px">

    <form action="{{ url('/updatefoodmenu',$data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div >
    <label style="padding: 20px;">Title</label>
    <input type="text" style="color: blue;" name="title" value="{{$data->title}}" required>
    </div>
    <div >
    <label style="padding: 20px;">Price</label>
        <input type="num" style="color: blue; " name="price" value="{{$data->price}}" required>
        </div>
        
            <div  >
                <label style="padding: 20px;">Description</label>
                <input type="text" style="color: blue ;" name="description" value="{{$data->description}}" required>
                </div>

                <div >
                    <label style="padding: 20px;">Old Image</label>
                    <img height="150" width="150" src="/foodimage/{{ $data->image }}">
                    </div>

                    <div >
                        <label style="padding: 20px;">New Image</label>
                        <input type="file" name="image" required>
                        </div>

                <div>
                    <input type="submit" style="color:bisque" value="Save">
                    
                    </div>
    </form>
    
    <div>

    </div>
    @include("admin.adminscript")

  </body>
</html>
