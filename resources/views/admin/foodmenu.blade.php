<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div style="position: relative; top: 60px; right: -150px" >
    <!-- since we want to upload for photos to database -->
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            <div>
                <label>Title</label>
                <input style="color: blue;" type="text" name="title" placeholder="Write a title" required></input>
            </div>
            <div>
                <label>Price</label>
                <input style="color: blue;" type="num" name="price" placeholder="Price" required></input>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" required></input>
            </div>
            <div>
                <label>Description</label>
                <input style="color: blue;" type="text" name="description" placeholder="Description" required></input>
            </div>
            <div>
                <input type="submit" value="save"></input>
            </div>
        </form>
    </div>
    </div>
    @include("admin.adminscript");
  </body>
</html>
