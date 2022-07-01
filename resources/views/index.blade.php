<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/bootstrap.rtl.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white pb-0">
    <div class="container-fluid" style="width: 100%">
        <a class="navbar-brand" href="#">
            <img src="https://www.digikala.com/static/files/bc60cf05.svg" alt="" height="24">
        </a>
        <div class="input-group my-2 border border-secondary rounded-3 w-50">
            <div class="input-group-prepend">
                <span class="input-group-text border-0" id="basic-addon1">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            <input type="text" class="form-control border-0" placeholder="جستجو در دیجی کالا" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button type="button" class="btn bg-white border border-secondary border3" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
            <span><i class="far fa-user"></i></span>
            ورود به حساب کاربری
        </button>
        <button type="button" class="btn btn-outline-white border3 ps-4" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
            <i class="far fa-shopping-cart fa-lg "></i>
        </button>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg  navbar-light bg-white pt-0 pb-0">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item  ">
                    <a class="nav-link " aria-current="page" href=""> <i class="bi bi-justify"></i> دسته بندی کالاها </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href=""> <i class="bi bi-basket"></i> سوپر مارکت </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href=""> <i class="bi bi-percent"></i>تخفیف ها و پیشنهادها </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">دیجی کالای من </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">دیجی پلاس </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">دیجی کلاب </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">دیجی پی </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">سوالی دارید؟ </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">فروشنده شوید </a>
                </li>
            </ul>
        </div>
        <p class="nav-item mb-0 text-center txt" >
            <a class="nav-link text-secondary  text-center " href="">لطفا شهر و استان خود را انتخاب کنید
                <i class="fas fa-map-marker-check"></i>
            </a>
        </p>
    </div>
</nav>

<div class="container-fluid m-0 p-0">
    <div>
        <div class="container">
            <div class=" rounded-3">
                <img src="Images/88fb17aa2f980652886a323e3c02856e3a71f8ad_1641583756.gif" class="w-100 rounded-3">
            </div>
            <div class="row mt-5">
                <div class="col-md-8 col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner br-20">
                            <div class="carousel-item active">
                                <img src="Images/Slider/01.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Slider/02.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="Images/Slider/03.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 ">
                    <div class="row mt-3 mt-lg-0 ">
                        <img src="Images/01.jpg" alt="" class="w-100 br-20 p-2">
                    </div>
                    <div class="row mt-3 ">
                        <img src="Images/02.jpg" alt="" class="w-100 br-20 p-2">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-danger mt-3">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col d-none d-lg-block d-xl-block text-center "><img src="Images/pishnahad.png"
                                                                                    class="w-75">
                        <button type="button" class="btn btn-outline-light mt-3 rounded-2 d-block m-auto"> مشاهده همه
                            >
                        </button>
                    </div>

                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/03.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">کفش طبیعت گردی مردانه</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">30%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">317,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">40%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/04.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">بادی اسپلش زنانه مای حجم220 </p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">93,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">58%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">37,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">20%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/05.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">کاسه وینتچ مجموعه3عددی</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">119,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">38%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">74,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">50%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/06.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">کیف پول مردانه چرمانی</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">100,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">40%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">60,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">70%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/12.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/13.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/14.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/15.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>

            </div>
        </div>
        <div class="bg-success mt-3">
            <div class="container">
                <div class="row align-items-center py-5">
                    <div class="col d-none d-lg-block d-xl-block text-center "><img src="Images/pishnahad.png"
                                                                                    class="w-75">
                        <button type="button" class="btn btn-outline-light mt-3 rounded-2 d-block m-auto"> مشاهده همه
                            >
                        </button>
                    </div>

                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/03.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">کفش طبیعت گردی مردانه</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">30%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">317,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 40%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">40%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/04.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">بادی اسپلش زنانه مای حجم220 </p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">93,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">58%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">37,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">20%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/05.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">کاسه وینتچ مجموعه3عددی</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">119,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">38%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">74,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">50%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm mt-2 text-center">
                        <div class="card br-10">
                            <img src="Images/06.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text">کیف پول مردانه چرمانی</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">100,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">40%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">60,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div>
                                        <span class="text-danger">70%</span><span
                                            class="text-secondary">فروش رفته</span>
                                    </div>
                                    <div class="text-end">
                                        <span>15:03:39</span>
                                        <i class="far fa-clock"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <a href="#">
                        <img src="Images/16.jpg" class="br-20 p-2 w-100">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="#">
                        <img src="Images/17.jpg" class="br-20 p-2 w-100">
                    </a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div>
                <div class="row ">
                    <div class="col-md-10 col-sm-12 shadow br-20 bg-white order-1 order-md-0">
                        <div class="d-flex">
                            <div class="mt-2 w-25">
                                <h6> اسپری</h6>
                                <p class="fs-13 border-bottom border-danger">بر اساس بازدیدهای شما</p>
                            </div>
                            <div class="mt-5 w-75">
                                <p class="mt-2 fs-13 border-bottom border-secondary opacity-25 ms-2"></p>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/23.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">بادی اسپلش</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/24.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">بادی اسپلش</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/23.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">بادی اسپلش</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/22.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">بادی اسپلش</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/23.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">بادی اسپلش</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/24.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center">بادی اسپلش</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12 ">
                        <div class="card br-10">
                            <p class="card-text text-center fs-14 text-secondary mt-2">پیشنهادهای لحظه‌ای برای شما</p>
                            <img src="Images/25.jpg" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center"> بادی اسپلش</p>
                                <div class="text-end mt-5">
                                    <div>
                                        <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                        <span class="bg-danger px-2 br-20 text-white">30%</span>
                                    </div>
                                    <div>
                                        <span class="fw-bold fs-5">317,000</span>
                                        <span class="">تومان</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row bg-white br-20">
                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                         <span class="bi bi-piggy-bank fs-1 ">
                         <i class="fas fa-laptop blue"></i>
                    </span>

                        <p class="text-dark mt-3">کالای دیجیتال</p>
                        <p class="text-primary mt-3">+990000 کالا</p>
                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                         <i class="fas fa-wrench"></i>
                    </span>
                        <p class="text-dark mt-3">ابزار و تجهیزات </p>
                        <p class="text-primary mt-3">+179000 کالا</p>
                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                        <i class="fas fa-birthday-cake"></i>
                    </span>
                        <p class="text-dark mt-3">پوشاک</p>
                        <p class="text-primary mt-3">+135000 کالا</p>
                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                         <span class="bi bi-piggy-bank fs-1 blue">
                        <i class="fas fa-baby"></i>
                    </span>
                        <p class="text-dark mt-3">کودک و نوزاد</p>
                        <p class="text-primary mt-3">+121000 کالا</p>
                    </a>
                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                       <i class="fas fa-shopping-basket"></i>
                    </span>
                        <p class="text-dark mt-3">سوپر مارکتی</p>
                        <p class="text-primary mt-3">+721000 کالا</p>
                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                        <i class="fas fa-apple-alt"></i>
                    </span>
                        <p class="text-dark mt-3">زیبایی و سلامت</p>
                        <p class="text-primary mt-3">+21000 کالا</p>
                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                       <i class="fas fa-home"></i>
                    </span>
                        <p class="text-dark mt-3">خانه و آشپزخانه</p>
                        <p class="text-primary mt-3">+231000 کالا</p>
                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                        <i class="fas fa-pen-nib"></i>
                    </span>
                        <p class="text-dark mt-3">لوازم و تحریر</p>
                        <p class="text-primary mt-3">+121000 کالا</p>

                    </a>

                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                        <i class="fas fa-swimmer"></i>
                    </span>
                        <p class="text-dark mt-3">ورزش و سفر</p>
                        <p class="text-primary mt-3">+421000 کالا</p>

                    </a>
                </div>

                <div class="col-lg col-md col-sm text-center  mt-3">
                    <a href="#">
                        <span class="bi bi-piggy-bank fs-1 blue">
                      <i class="fas fa-users-class"></i>
                    </span>
                        <p class="text-dark mt-3">بومی</p>
                        <p class="text-primary mt-3">+81000 کالا</p>
                    </a>

                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div>
                <div class="row ">
                    <div class="col-md-3 col-sm-12 mb-2">
                        <div class="card br-10">
                            <p class="fs-90 text-center text-success mt-5">
                                <i class="fab fa-centos"></i>
                            </p>
                            <div class="card-body">
                                <h5 class="card-text text-center fw-bold">شخصی سازی پیشنهاد ها</h5>
                                <p class="card-text text-center text-secondary">برای مشاهده پیشنهادهای مناسب خود و
                                    همچنین داشتن تجربه بهتر لطفا وارد حساب کاربری شوید.</p>
                                <div class="d-grid gap-2 my-2">
                                    <button class="btn btn-danger" type="button">
                                        <i class="fas fa-sign-in-alt"></i>
                                        ورود به حساب دیجی کالا
                                    </button>
                                </div>
                                <p class="fs-12 text-center text-secondary">ثبت‌نام رایگان در صورت نداشتن حساب
                                    کاربری</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 shadow br-20 bg-white">
                        <div class="d-flex">
                            <div class="mt-2 w-25">
                                <h6> کفش ورزشی مردانه</h6>
                                <p class="fs-13 border-bottom border-danger">بر اساس بازدیدهای شما</p>
                            </div>
                            <div class="mt-5 w-75">
                                <p class="mt-2 fs-13 border-bottom border-secondary opacity-25 ms-2"></p>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/28.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center"> کفش ورزشی مردانه</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/27.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center"> کفش ورزشی مردانه</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/26.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center"> کفش ورزشی مردانه</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/27.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center"> کفش ورزشی مردانه</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/28.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center"> کفش ورزشی مردانه</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <div class="card br-10 border-0">
                                    <img src="Images/29.jpg" class="card-img-top p-3" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-center"> کفش ورزشی مردانه</p>
                                        <div class="text-end mt-5">
                                            <div>
                                                <span class="text-secondary text-decoration-line-through fs-6">453,000</span>
                                                <span class="bg-danger px-2 br-20 text-white">30%</span>
                                            </div>
                                            <div>
                                                <span class="fw-bold fs-5">317,000</span>
                                                <span class="">تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/18.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/19.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/20.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 rounded-3">
                    <a href="#" class="">
                        <img src="Images/21.jpg" class="w-100 br-20 p-2">
                    </a>
                </div>

            </div>
        </div>
        <footer class="container">
            <div class="d-flex justify-content-between align-items-center">
                <img src="https://www.digikala.com/static/files/2a4774d7.svg">
                <button class="btn btn-light border-1 border-dark rounded-3">بازگشت به بالا</button>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 mt-3 text-center border-end border-secondary unbordered">
                    <span class="px-3 text-center"> تلفن پشتیبانی :۶۱۹۳۰۰۰۰ - ۰۲۱ </span>
                </div>
                <div class="col-md-4 col-sm-12 mt-3 text-center border-end border-secondary unbordered">
                    <span class="px-3 text-center"> ۶۲۹۹۹۹۱۱ - ۰۲۱ </span>
                </div>
                <div class="col-md-4 col-sm-12 mt-3 text-center">
                    <span class="px-3 text-center"> هفت روز هفته، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم. </span>
                </div>
            </div>
            <div class="row my-5 justify-content-around border-bottom border-secondary">
                <div class="col col-xl-auto  col-lg-3 col-md-6 col-sm-12 text-center">
                    <img src="https://www.digikala.com/static/files/8f570b58.svg" class="w-50 pt-2">
                    <p>امکان تحویل اکسپرس</p>
                </div>
                <div class="col col-xl-auto  col-lg-auto col-md-6 col-sm-12 text-center">
                    <img src="https://www.digikala.com/static/files/22414818.svg" class="w-50 pt-2">
                    <p>امکان تحویل اکسپرس</p>
                </div>
                <div class="col col-xl-auto  col-lg-auto col-md-6 col-sm-12 text-center">
                    <img src="https://www.digikala.com/static/files/a9286d2f.svg" class="w-50 pt-2">
                    <p>امکان تحویل اکسپرس</p>
                </div>
                <div class="col col-xl-auto  col-lg-auto col-md-6 col-sm-12 text-center">
                    <img src="https://www.digikala.com/static/files/514926b1.svg" class="w-50 pt-2">
                    <p>امکان تحویل اکسپرس</p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="text-center">
                        <li><p class="fw-bold">با دیجی کالا</p></li>
                        <li>
                            اتاق خبر دیجی کالا
                        </li>
                        <li>
                            فروش در دیجی کالا
                        </li>
                        <li>
                            فرصت های شغلی
                        </li>
                        <li>
                            تماس با دیجی کالا
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="text-center">
                        <li><p class="fw-bold">خدمات مشتریان</p></li>
                        <li>
                            پاسخ به پرسش های متداول
                        </li>
                        <li>
                            وریه های بازگرداندن کالا
                        </li>
                        <li>
                            شرایط استفاده
                        </li>
                        <li>
                            حریم خصوصی
                        </li>
                        <li>
                            گزارش باگ
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="text-center">
                        <li><p class="fw-bold">راهنمای خرید از دیجی کالا</p></li>
                        <li>
                            نحواه ثبت سفارش
                        </li>
                        <li>
                            رویه ارسال سفارش
                        </li>
                        <li>
                            شیوه های پرداخت
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <ul class="text-center">
                        <li><p class="fw-bold"> با ما همراه باشید</p></li>
                        <a class="fs-1 m-2 text-secondary fab fa-twitter"></a>
                        <a class="fs-1 m-2 text-secondary fab fa-instagram"></a>
                        <a class="fs-1 m-2 text-secondary fab fa-linkedin-in"></a>
                        <a class="fs-1 m-2 text-secondary fab fa-telegram-plane"></a>

                    </ul>
                    <div class="text-center">
                        <p class="fw-bold fs-5"> با ما همراه باشید</p>
                        <div class="input-group justify-content-center">
                            <button type="button" class="btn btn-secondary text-white">
                                ثبت
                            </button>
                            <div class="form-outline">
                                <input type="text" id="form1" class="form-control"
                                       placeholder="آدرس ایمیل خود را وارد کنید"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between bgdarkBlue p-3 rounded-3">
                <div class="col-md-6 col-sm-12">
                    <img src="https://www.digikala.com/static/files/59d36e01.svg">
                    <h3 class="d-inline text-white">دانلود اپلیکیشن دیجی کالا</h3>
                </div>
                <div class="col-md-6 col-sm-12">
                    <a href="#"> <img src="Images/gp.svg" style="width: 150px"></a>
                    <a href="#"> <img src="Images/bz.svg" style="width: 150px">
                    </a>
                    <a href="#"> <img src="Images/mt.png" style="width: 150px">
                    </a>
                    <a href="#"> <img src="Images/sa.svg" style="width: 150px">
                    </a>
                </div>
            </div>
            <div class="border-bottom border-secondary">
                <h6>
                    فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین
                </h6>
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <p class="text-secondary">دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، ۷ روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌کالا با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.</p>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="d-flex justify-content-around mb-2">
                            <div class="border border-secondary rounded-3 "> <img src="Images/001.png"></div>
                            <div class="border border-secondary rounded-3 ">
                                <img src="Images/002.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-2 text-center">
                استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع
                بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.
            </p>
        </footer>
        <div class="DGS p-2 mt-5">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/01.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/02.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/03.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/04.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/05.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/06.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/07.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/08.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/09.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/10.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/12.svg" style="height: 70px">
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-6 border border-secondary">
                        <img class="w-100 fs-1 py-3" src="Images/DGs/11.svg" style="height: 70px">
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div>
    </div >
</div>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
</body>
</html>
