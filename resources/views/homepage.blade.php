@include("navbarpage")
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

    
    <div id="homepage-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#homepage-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#homepage-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#homepage-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./homepageasset/img/banner1.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Valorant</b> New Agent!</h1>
                                <h3 class="h2">SPARK - NEON AGENT</h3>
                                <p>
                                    Neon, VALORANT’s newest Manila-born Agent, touches down with Episode 4: Disruption
                                    <a class="text-success" href="https://www.youtube.com/watch?v=dtx8CgjRmqE" target="_blank">Watch Trailer Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./homepageasset/img/banner2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success"><b>Apex Legends</b> Season 12 Leaks</h1>
                                <h3 class="h2">New Legend "MAGGIE" Confirmed !</h3>
                                <p>
                                    ‘Mad Maggie’ was the long-time friend of Walter ‘Fuse’ Fitzroy before the Explosives 
                                    Expert decided to leave Salvo and join the Apex Games. Maggie saw Fuse’s decision to leave 
                                    their home planet and join the Syndicate run competition as a betrayal of their friendship.
                                    <a rel="sponsored" class="text-success" href="https://www.youtube.com/watch?v=fXiQSLAxx5g" target="_blank">Watch Leaks Here | by GameLeap</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./homepageasset/img/banner3.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">PUBG: BATTLEGROUNDS IS GOING F2P</h1>
                                <h3 class="h2">The free to play era begins January 12, 2022</h3>
                                <p>
                                    All players who have owned and played PUBG: BATTLEGROUNDS before the 
                                    free-to-play service transition will automatically receive the PUBG – 
                                    SPECIAL COMMEMORATIVE PACK, which includes a free BATTLEGROUNDS Plus upgrade 
                                    and additional in-game rewards. 
                                    <a rel="sponsored" class="text-success" href="https://na.battlegrounds.pubg.com/2021/12/10/pubg-is-going-f2p/" target="_blank">Read Full Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#homepage-carousel" role="button" data-bs-slide="prev">
            <img style="width: 50px" height="50px" src="./homepageasset/img/previous.png">
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#homepage-carousel" role="button" data-bs-slide="next">
            <img style="width: 50px" height="50px" src="./homepageasset/img/next.png">
        </a>
    </div>

    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Recomendation</h1>
                <p>
                    This game should be played by everyone                
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./homepageasset/img/category1.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Rust</h5>
                <p class="text-center"><a href="/shoppage" class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./homepageasset/img/category2.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">The Hunter</h2>
                <p class="text-center"><a href="/shoppage" class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./homepageasset/img/category3.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Tomb Raider</h2>
                <p class="text-center"><a href="/shoppage" class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Game</h1>
                    <p>
                        Most Played Games
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="https://store.steampowered.com/agecheck/app/271590/">
                            <img src="./homepageasset/img/featured1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <img width="30px" src="./homepageasset/img/verified_badge.png">
                                <li class="text-right">$60</li>
                            </ul>
                            <a href="https://store.steampowered.com/agecheck/app/271590/" class="h2 text-decoration-none text-dark">GTA V</a>
                            <p class="card-text">
                                Grand Theft Auto V is an action-adventure game played from either a third-person or first-person perspective.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="https://store.steampowered.com/app/1190340/SUPER_PEOPLE/">
                            <img src="./homepageasset/img/featured2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <img width="30px" src="./homepageasset/img/verified_badge.png">
                                <li class=" text-right">Free</li>
                            </ul>
                            <a href="https://store.steampowered.com/app/1190340/SUPER_PEOPLE/" class="h2 text-decoration-none text-dark">Super People</a>
                            <p class="card-text">
                                The Super People CBT is the period of closed beta testing, where players can try and test the game before release, along with optionally giving feedback on bugs and balancing to the developers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="https://playvalorant.com/">
                            <img src="./homepageasset/img/featured3.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <img width="30px" src="./homepageasset/img/verified_badge.png">
                                <li class="text-right">Free</li>
                            </ul>
                            <a href="https://playvalorant.com/" class="h2 text-decoration-none text-dark">Valorant</a>
                            <p class="card-text">
                                Valorant is a tactical shooting game involving two teams with 5 players in each team.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
</body>