@include('navbarpage')
<body>
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1><b><strong>About Us</strong></b></h1>
                    <br>
                    <p>
                        The need for Information Technology (IT) in the business industry has 
                        shifted into an environment that is more outward looking in order to compete 
                        in the free market. Information Technology is closely related to Information 
                        Systems (IS) in their joint support of the organization. They facilitate excellent 
                        procedures of the whole organization and strengthen its competitiveness.
                    </p>
                </div>
                <div class="col-md-4">
                    <img style="width: 500px" src="./homepageasset/img/binus.png">
                </div>
            </div>
        </div>
    </section>
 
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Created By</h1>
                <p style="color: #59ab6e"><b><strong>
                    Muhammad Affan Ilhamsyah &
                    Taufan Aryo Wicaksono
                </p></b></strong>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <a style="text-decoration:none"  href="https://code.visualstudio.com/">
                <div  class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img style="width: 100px" class="fa fa-lg" src="./homepageasset/img/vscode.png"></div>
                    <h2 style="color: #59ab6e" class="h5 mt-4 text-center">Visual Studio Code</h2>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <a style="text-decoration:none"  href="https://www.instagram.com/affanilhamsyah/">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img style="width: 100px" class="fa fa-lg" src="./homepageasset/img/ig.png"></div>
                    <h2 style="color: #59ab6e" class="h5 mt-4 text-center">Muhammad Affan Ilhamsyah</h2>
                </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <a style="text-decoration:none"  href="https://www.instagram.com/taufanaryoo/">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img style="width: 100px" class="fa fa-lg" src="./homepageasset/img/ig.png"></div>
                    <h2 style="color: #59ab6e" class="h5 mt-4 text-center">Taufan Aryo Wicaksono</h2>
                </div>
                </a>    
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <a style="text-decoration:none"  href="https://www.sublimetext.com/">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img style="width: 100px" class="fa fa-lg" src="./homepageasset/img/sublime.png"></div>
                    <h2 style="color: #59ab6e" class="h5 mt-4 text-center">Sublime Text</h2>
                </div>
                </a>
            </div>
        </div>
    </section>
@include('footer')