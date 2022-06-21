<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.adminscript");
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
        <div style="position: relative; top: 20px; right: -150px">
          <h1 style="color: white">View Product</h1>
            <table bgcolor="white" border="3px">
                <tr align="center"> 
                    <th style="color: black; padding: 30px">Game Image</th>
                    <th style="color: black; padding: 30px">Game Title</th>
                    <th style="color: black; padding: 30px">PEGI Rating</th>
                    <th style="color: black; padding: 30px">Genre</th>
                    <th style="color: black; padding: 30px">Price</th>
                </tr>
                @foreach($data as $data)
                <tr align="center">
                    <th style="color: black; padding: 30px"><img height="200" width="200" src="/productimage/{{ $data->image }}" alt=""></th>
                    <th style="color: black; padding: 30px">{{ $data->title }}</th>
                    <th style="color: black; padding: 30px">{{ $data->pegirate }}</th>
                    <th style="color: black; padding: 30px">{{ $data->genre }}</th>
                    <th style="color: black; padding: 30px">{{ $data->price }}</th>
                    <th style="color: black; padding: 30px"><a style="color: red" href="{{ url('/deleteproduct', $data->id) }}">Delete</a></th>
                    <th style="color: black; padding: 30px"><a style="color: blue" href="{{ url('/updateproduct', $data->id) }}">Update</a></th>
                </tr>
                @endforeach
          </table>
        </div>
    </div>
    </div>
  </body>
</html>