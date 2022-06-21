<base href="/public">
@include("admin.adminscript")
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; top: 20px; right: -150px">
            <form action="{{ url('/updateproductitem', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <br><label class="form-label">Game Title</label><br/>
                    <input class="form-control" style="color: white" type="text" name="title" value="{{ $data->title }}">
                </div>
                <div>
                    <br><label>Game Photo [Old]</label><br/>
                    <img height="200" width="200" src="/productimage/{{ $data->image }}" >
                </div>
                <div>
                    <br><label class="form-label">Game Photo [New]</label><br/>
                    <input class="form-control" style="color: white" type="file" name="image" required>
                </div>
                <div>
                    <br><label class="form-label">Game Price</label><br/>
                    <input class="form-control" style="color: white" type="num" name="price" value="{{ $data->price }}">
                </div>
                <div>
                    <br><label value="{{ $data->genre }}">Game Genre</label><br/>
                    <select class="form-select" name="genre">
                        <option value="rpg">RPG</option>
                        <option value="arcade">Arcade</option>
                        <option value="fps">FPS</option>
                        <option value="sandbox" selected>Sandbox</option>
                        <option value="survival">Survival</option>
                        <option value="rts">RTS</option>
                        <option value="mmorpg">MMORPG</option>
                        <option value="openworld" selected>Open World</option>
                        <option value="a">A</option>
                        <option value="cc" selected>CC</option>
                      </select>
                </div>
                <a style="text-decoration: none; color: white" href="{{ url('/updategenre', $data->id) }}">Have your own genre? Click here</a>
                <div>
                    <br><label value="{{ $data->pegirate }}">PEGI Rating</label><br/>
                    <select class="form-select" name="pegirate">
                        <option value="0">0</option>
                        <option value="3">3</option>
                        <option value="7">7</option>
                        <option value="12">12</option>
                        <option value="16">16</option>
                        <option value="18">18</option>
                      </select>
                </div>
                <div>
                    <br><label>Game Description</label><br/>
                    <textarea style="color: black" rows = "5" cols = "50" name = "description" value="{{ $data->description }}"></textarea>
                </div>
                <input type="submit" value="Publish Product">
            </form>
        </div>
    </div>
    </div>
  </body>
