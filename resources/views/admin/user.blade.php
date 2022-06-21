<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.adminscript");
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
        <div style="position: relative; top: 20px; right: -150px">
            <h1 style="color: white">User Management</h1>
            <table bgcolor="white" border="3px">
                <tr align="center">
                    <th style="color: black; padding: 30px">Name</th>
                    <th style="color: black; padding: 30px">Email</th>
                    <th style="color: black; padding: 30px">Gender</th>
                    <th style="color: black; padding: 30px">Date Of Birth</th>
                    <th style="color: black; padding: 30px">Role</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <th style="color: black; padding: 30px">{{ $data->name }}</th>
                    <th style="color: black; padding: 30px">{{ $data->email }}</th>
                    <th style="color: black; padding: 30px">{{ $data->gender }}</th>
                    <th style="color: black; padding: 30px">{{ $data->dob }}</th>
                    @if($data->usertype=="0")
                        <th style="color: black; padding: 30px">User</th>
                        <th style="color: black; padding: 30px"><a style="color: red" href="{{ url('/deleteuser', $data->id) }}">Delete</a></th>
                    @else
                        <th style="color: black; padding: 30px">Administrator</th>
                        <th style="color: black; padding: 30px">Not Allowed</th>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
  </body>
</html>