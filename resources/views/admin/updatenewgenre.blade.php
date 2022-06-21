<base href="/public">
@include("admin.adminscript")
<body>
    <div class="container-scroller">        
        @include('admin.navbar')
        <div style="position: relative; top: 150px; right: -150px">
            <h1>Add New Game Genre</h1>
            <form action="{{ url('/updatenewgenre', $data->id) }}"  method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <br><label>New Game Genre</label><br/>
                    <input class="form-control" style="color: white" type="num" name="genre" value="{{ $data->genre }}">
                </div>
                <br>
            <input type="submit" value="Add Genre">
            </form>
        </div>
    </div>
</body>