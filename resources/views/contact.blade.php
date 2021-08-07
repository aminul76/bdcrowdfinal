@extends('layouts.app')
@section('content')
<div class="map bg-first">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58419.78104373681!2d90.42195349999997!3d23.774597800000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8283b4348f02708!2sBD%20TAX%20CARE%20(BTC)!5e0!3m2!1sen!2sbd!4v1623478283940!5m2!1sen!2sbd"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="bg-first py-4 py-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-5">
                        <h4>Contact us</h4>
                        <p>Email us with any questions or inquiries. We would be happy to answer your questions and set up a meeting with you if need.

                        </p>
                        <form class="contact-form" action="">
                            <div class="pt-3">
                                <label class="fw-bold form-label">Your name (Required)</label>
                                <input class="form-control mb-3" type="text">
                            </div>
                            <div>
                                <label class="fw-bold form-label">Your e-mail (Required)</label>
                                <input class="form-control mb-3" type="email">
                            </div>
                            <div>
                                <label class="fw-bold form-label">Subject</label>
                                <input class="form-control mb-3" type="text">
                            </div>
                            <div class="form-floating">
                                <span class="fw-bold form-label ">Your message</span>
                                <textarea class="form-control mt-2" style="height: 100px"></textarea>
                            </div>
                            <button class=" btn btn-first mt-4"> Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-4 offset-lg-2">
                        <div class="contact-box py-3 py-md-4">
                            <h5>E-mail </h5>
                            <a class="link-dark text-decoration-none" href="mailto:bdcrowdltd@gmail.com">bdcrowdltd@gmail.com</a>
                        </div>
                        <div class="contact-box  py-3 py-md-4">
                            <h5>Phone </h5>
                            <a class="link-dark text-decoration-none" href="tel:+880 1716 715 728">+880 1716 715 728</a>
                        </div>
                        <div class="contact-box  py-3 py-md-3">
                            <h5>Address </h5>
                            <p>House #5, Block #C, Aveneue Road, Aftabnagor, Dhaka-1213, Dhaka, Bangladesh
                            </p>
                        </div>
                        <div class="d-none d-md-block contact-box  pt-3 pt-md-4 pb-2 pb-md-3">
                            <h5>Social Link </h5>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="">
                                        <img src="assets/images/facebook.svg" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">
                                        <img src="assets/images/linkdin.svg" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">
                                        <img src="assets/images/twitter.svg" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">
                                        <img src="assets/images/youtube.svg" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">
                                        <img src="assets/images/whatsapp.svg" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">
                                        <img src="assets/images/instragram.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection