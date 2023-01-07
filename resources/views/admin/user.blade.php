<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  <x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar");
    <div style="position: relative; top: 60px; right: -60px">
        <table bgcolor="grey" border="3px">
            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
        </tr>

        <!-- display the data  -->
        <!-- data coming from the admin controller -->
        @foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <!-- give conditional if admin data cannot be deleted, and give delete function -->
            <!-- $data->id used for sending id for delete the data -->
            @if($data->usertype=="0")
            <td><a href="{{url('/deleteusers',$data->id)}}">Delete</a></td>
            @else
            <td><a>Not Allowed</a></td>
            @endif
        </tr>

        @endforeach
        </table>
        </div>
    </div>
    @include("admin.adminscript");
  </body>
</html>

  </body>
</html>

</body>
</html>
