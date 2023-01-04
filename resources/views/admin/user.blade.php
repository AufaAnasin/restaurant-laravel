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
        <tr align="center">
            <td>Icaufa</td>
            <td>icaufa@gmail.com</td>
            <td><a href="">Delete</a></td>
        </tr>
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
