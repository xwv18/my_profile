<x-main>
    <nav id="navbar-example2" class="navbar bg-body-tertiary position-sticky z-1 top-0 left-0 w-100 px-5"
        style="box-shadow: 0px 7px 11px 3px rgba(0,0,0,0.1);">
        <a class="navbar-brand fs-3 text-info" href="#">
            <img src="{{ asset('image/logo.jpeg') }}" style="width:9vw;height:8vh;"> ゾゾ
        </a>
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-dark link-info" href="#scrollspyHeading1">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-dark link-info" href="#scrollspyHeading2">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-dark link-info" href="#scrollspyHeading3">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-3 fs-5 text-dark link-info" href="#scrollspyHeading4">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="scrollspy-example bg-body-white rounded-2" tabindex="0">
            <section id="scrollspyHeading1" style="height: 85vh;">
                <div class="row">
                    <div class="col-6" style="padding-left:5rem;">
                        <div class="fs-1 lh-lg" style="padding-top:5rem;">
                            こんにちは、<br> 私は Webデザイナー <br> <span class="text-info">THIHA ZAW</span> です。
                        </div>
                        <a href="#" class="btn bg-info text-white ms-3">Contact</a>
                    </div>
                    <div class="col-6">
                        <div style="padding-top:5rem">
                            <img src="{{ asset('image/image_01.jpeg') }}" class="rounded-circle"
                                style="width: 40vw;height:60vh;">
                        </div>
                    </div>
                </div>
            </section>
            <section id="scrollspyHeading2" style="height: 80vh;">
                <div class="text-center">
                    <span class="fs-3 text-info border-bottom border-2 border-info">About</span>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div style="padding-top:50px;padding-left:3rem;">
                            <img src="{{ asset('image/image_01.jpeg') }}" class="rounded-4"
                                style="width: 28vw;height:38vh">
                        </div>
                    </div>
                    <div class="col-7" style="padding-left:5rem;">
                        <div class="lh-lg" style="padding-top:50px;font-size:1rem;">
                            私の名前は <span class="text-info">テイハゾ</span>です。ミャンマーから日本に来てアルバイトと日本語勉強継ぐながら 現在は
                            IT企業のWebサイト制作やコーデイング系を勉強しています。
                            <span class="text-info">Fullstack
                                Developer</span>なるため独学で勉強しています。ITパスポート試験受ける為勉強しています。IT企業の知らない事いっぱいあるけど自分の興味、成長のため継げて頑張りたい。
                        </div>
                    </div>
                </div>
            </section>
            <section id="scrollspyHeading3" style="height: 80vh;">
                <div class="text-center">
                    <span class="fs-3 text-info border-bottom border-2 border-info">Skills</span>
                </div>
                <div class="row">
                    <div class="col-6" style="padding-left:3rem;">
                        <div class="lh-lg" style="padding-top:50px;">
                            <h5>経験</h5>
                            <div class="fs-6">&nbsp;&nbsp;&nbsp;未経験なんですけど頑張る気は強いです。</div>
                        </div>
                        <div class="">
                            <h5>スキル</h5>
                            <div class="">
                                <div class="fs-5 px-3 py-1 my-2 border border-success"><i
                                        class="fa-brands fa-html5"></i>HTML<br>
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 70%">70%</div>
                                    </div>
                                </div>
                                <div class="fs-5 px-3 py-1 my-2 border border-success"><i
                                        class="fa-brands fa-css3"></i>CSS<br>
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 65%">65%</div>
                                    </div>
                                </div>
                                <div class="fs-5 px-3 py-1 my-2 border border-success"><i
                                        class="fa-brands fa-js"></i>JAVASCRIPT<br>
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 50%">50%</div>
                                    </div>
                                </div>
                                <div class="fs-5 px-3 py-1 my-2 border border-success"><i
                                        class="fa-solid fa-database"></i>MYSQL<br>
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 45%">45%</div>
                                    </div>
                                </div>
                                <div class="fs-5 px-3 py-1 my-2 border border-success"><i
                                        class="fa-brands fa-laravel"></i>PHP/LARAVEL<br>
                                    <div class="progress" role="progressbar" aria-label="Success example"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-info" style="width: 45%">45%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div style="padding-top:10rem;padding-left:2rem;">
                            <img src="{{ asset('image/computer.jpeg') }}" class="rounded-4"
                                style="width: 40vw;height:45vh">
                        </div>
                    </div>
                </div>
            </section>
            <section id="scrollspyHeading4" class="mt-5" style="height: 85vh;">
                <div class="text-center">
                    <span class="fs-3 text-info border-bottom border-2 border-info">Contact</span>
                </div>
                <div class="row mt-5">
                    <div class="offset-3 col-6 card">
                        <div class="card-body">
                            <form>
                                @csrf
                                <div class="pb-3">
                                    <label>Name</label><br>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="pb-3">
                                    <label>Email</label><br>
                                    <input class="form-control" type="email">
                                </div>
                                <div class="pb-3">
                                    <textarea class="form-control" name="Comments" id="" cols="20" rows="5"></textarea>
                                </div>
                                <input class="btn bg-info text-white" type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <x-footer></x-footer>
</x-main>
