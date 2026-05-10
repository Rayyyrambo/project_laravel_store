@extends('layouts.publik')

@section('title', 'product')

@section('content')
    <section class="py-5">
        <div class="container text-center mt-5 px-5 ">
        <div class="col" style="background-color: black; overflow: hidden">
            <img src="image/adidas.png" alt="" />
        </div>
        <!-- baju -->
        <div class="row mt- pt-5 " >
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/bajuadidas.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">BEACH</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.800.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/baju2.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">BLACK WHITE</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.700.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/baju 3.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">ARMY</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.500.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <
        </div>
        </div>
        
        <!--  celana  -->
        <div class="container text-center mt-5 mb-5 pb- ">
        <div class="col" style="background-color: black; overflow: hidden">
            <img src="{{ asset('image/adidas.png') }}" alt="" />
        </div>
        <div class="row mt-5  pt-5 pb-3" style="border-radius: 20px">
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/celana1.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">GREY SHORT</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.400.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/cenana2.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">BLUE SHORT</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.200.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/celana3.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">BLACK SHORT</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.300.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
        </div>

        <!-- sepatu -->
            <div class="container text-center mt-5">
        <div class="col" style="background-color: black; overflow: hidden">
            <img src="{{ asset('image/adidas.png') }}" alt="" />
        </div>
        <div class="row mt-5 pt-5 pb-3" style="border-radius: 20px">
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/sepatu1.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">SAMBA</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.300.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/sepatu2.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">BOTS BLACK</h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.500.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
            <div class="col-md-4 justify-content-center d-flex mb-4">
            <div
                class="card"
                style="
                background-size: cover;
                overflow: hidden;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
                border-top-right-radius: 40px;
                border-top-left-radius: 40px;
                width: 300px; border: 2px solid black;
                "
            >
                <img
                src="{{ asset('image/sepatu3.jpg') }}"
                alt=""
                style="width: 100%; height: 300px; object-fit: cover;"
                />
                <div class="card-body bg-dark">
                <h5 class="card-title mb-1 text-white">ATHLETE </h5>
                <p class="mb-1 text-white">Baju</p>
                <p class="fw-bold text-success">Rp.700.000</p>
                <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                >
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection