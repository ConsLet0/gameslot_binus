<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.adminscript");
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position: relative; top: 150px; right: -150px">
            <h1 style="color: white">Add Game</h1>
            <form action="{{ url('/uploadproduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <br><label>Game Title</label><br/>
                    <input class="form-control" style="color: white" type="text" name="title">
                </div>
                <div>
                    <br><label>Game Photo</label><br/>
                    <input type="file" name="image">
                </div>

                <div>
                    <br><label class="form-label">Game Price</label><br/>
                    <input class="form-control" style="color: white" type="num" name="price">
                </div>
                <div>
                    <br><label>Game Genre</label><br/>
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
                <div>
                    <br><label>PEGI Rating</label><br/>
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
                    <textarea style="color: black" rows = "5" cols = "50" name = "description"></textarea>
                </div>
                <input type="submit" value="Publish Product">
            </form>
        </div>
    </div>
  </body>
</html>