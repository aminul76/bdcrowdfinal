@extends('layouts.app')
@section('content')
  <!--================== Hero section START ==================-->
  <div class="about-hero">
            <div class="container">
                <div class="row ">
                    <div class="col-12 text-center">
                        <h1>About us</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================== Hero section END ==================-->

        <!--================== about intro START ==================-->
        <div class="container py-4 py-md-5">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <p>
                        BD Crowd operates investment platforms approved by regulators in Bangladesh. Our platforms serve ordinary people, high-net-worth individuals, corporates and government entities.<br><br> We are We are best known for our crowdfunding
                        impact investment for Bangladeshi social housing development projects which has been operational since 2018. At BD Crowd, we believe that Property & Equity Crowdfunding is the future of the Islamic Capital Markets.
                        <br> <br>BD Crowd offers access to investment opportunities in distinctive and promising companies while also serving as a platform for entrepreneurs to showcase their company to a community of Bangladeshi investors.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset('frontend/images/bdmap.svg')}}" alt="">
                </div>
            </div>
        </div>
        <!--================== about intro END ==================-->
        <!--================== about focus START ==================-->
        <div class="mission">
            <div class="container  text-center">
                <div class="row py-3 py-md-5">
                    <div class="col-12">
                        <p class="fs-3">Our Focus Verticals</p>
                    </div>
                </div>
                <div class="row mb-4 mb-md-5">
                    <div class="col-sm-6 col-md-3">
                        <img class="miss-icon mb-3 rounded-circle" src="{{asset('frontend/images/home.svg')}}" alt="">
                        <h5>Property</h5>

                    </div>
                    <div class="col-sm-6 col-md-3">
                        <img class="miss-icon mb-3 rounded-circle" src="{{asset('frontend/images/equity.jpg')}}" alt="">
                        <h5>Equity</h5>

                    </div>
                    <div class="col-sm-6 col-md-3">
                        <img class="miss-icon mb-3 rounded-circle" src="{{asset('frontend/images/helth.jpg')}}" alt="">
                        <h5>Health care
                        </h5>

                    </div>
                    <div class="col-sm-6 col-md-3">
                        <img class=" miss-icon mb-3 rounded-circle" src="{{asset('frontend/images/agriculture.jpg')}}" alt="">
                        <h5>Agriculture</h5>

                    </div>
                </div>
                <div class="row founder py-3 py-md-5">
                    <div class="col-12">
                        <img class="rounded-circle mb-3 mt-5" src="{{asset('frontend/images/persons/Shahjahan.jpg')}}" alt="">
                        <h6>S.M Shahjahan</h6>
                        <span class="sub-title">Founder & CEO</span>
                        <p>Civil Lawyer at High court,<br> Chairman at BD Tax Care</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--================== about focus END ==================-->

        <!--============ about advisor and team  start ============-->
        <div class="team text-center py-3 py-md-5 d-none">
            <div class="container">
                <div class="row">
                    <h2 class="fs-1 fw-bolder pt-3">ADVISORS</h2>
                </div>
                <div class="row pb-3 pb-md-5">
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/MRUddin.jpg" alt="">
                        <h6>Barrister M R Uddin</h6>
                        <span class="sub-title">Legal Advisor</span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/Yousuf.jpg" alt="">
                        <h6>Yousuf Sultan</h6>
                        <span class="sub-title">Sariah Advisor</span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/MohammadAminul.jpg" alt="">
                        <h6>Mohammad Aminul Islam</h6>
                        <span class="sub-title">Financial Advisor</span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/Zahiduzzaman.jpg" alt="">
                        <h6>Zahiduzzaman Zahid</h6>
                        <span class="sub-title">FinTech Advisor
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/Emdadul.jpg" alt="">
                        <h6>Emdadul Haque</h6>
                        <span class="sub-title">Admin Development Advisor
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/OmorFaisal.jpg" alt="">
                        <h6>Dr. Omor Faisal</h6>
                        <span class="sub-title">Business Development Advisor
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- team member start -->
                <div class="row">
                    <h2 class="fs-1 fw-bolder mt-3">TEAM</h2>
                </div>
                <div class="row pb-3 pb-md-5">
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/ImranHossain.jpg" alt="">
                        <h6>Imran Hossain</h6>
                        <span class="sub-title">Chairman</span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/AbdullahMasud.jpg" alt="">
                        <h6>Abdullah Al Masud</h6>
                        <span class="sub-title">Director, safety & compliance</span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/Imtiajuj.jpg" alt="">
                        <h6>Imtiajuj Islam</h6>
                        <span class="sub-title">Director, Investor Relations</span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/Mahdi.jpg" alt="">
                        <h6>Abdullah Al Mahdi</h6>
                        <span class="sub-title">Director, Marketing
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/arafat.jpg" alt="">
                        <h6>Easin Arafat</h6>
                        <span class="sub-title">Video Editor
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/maruf.jpg" alt="">
                        <h6>Maruf Jamil</h6>
                        <span class="sub-title">Graphic Designer
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/nurullah.jpg" alt="">
                        <h6>Farabi Islam Nurullah</h6>
                        <span class="sub-title">Jr. Web Developer
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/MasumBillah.jpg" alt="">
                        <h6>Masum Billah</h6>
                        <span class="sub-title">Social Media Manager

                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <img class="rounded-circle mb-3 mt-5" src="frontend/images/persons/Aminul.jpg" alt="">
                        <h6>Aminul Islam</h6>
                        <span class="sub-title">Jr. Software Engineer
                        </span>
                        <p>Barister at suprim court <br> Secretary at CiADR</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--============ about advisor and team  end============-->

@endsection