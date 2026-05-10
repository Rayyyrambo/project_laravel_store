@extends('layouts.publik')

@section('title', 'home')
    


@section('content')
    <section
        class="text-center text-white d-flex align-items-end justify-content-center pb-4"
        style="
            background: url('{{ asset('image/ladnscape.jpg') }}') center/cover no-repeat;
            height: 80vh;
        "
        >
        <div>
            <h1 class="fw-bold" style="color: black">Discover Your Style</h1>
            <a href="#" class="btn btn-primary btn-lg mt-3">Shop Now</a>
        </div>
        </section>
        <!-- end section -->

        <!-- section best sellers -->
        <section class="py-5 mb-5">
        <div class="container text-center">
            <div class="container text-center">
            <div class="row justify-content-center">
            <div class="bg-danger" style="width: 400px; border-radius: 10px">
                <h2 class="fw-bold text-white">Our Best Sellers</h2>
            </div>
            </div>
            <div class="row mt-4 justify-content-center">
            <!-- card baju -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="{{ asset('image/OIP.webp') }}"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">Baju Kaos Hitam</h5>
                    <p class="text-muted mb-1">Baju</p>
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
            <!-- card sepatu -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="{{ asset('image/adidasshoes.webp') }}"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">Adidas Shoes</h5>
                    <p class="text-muted mb-1">sepatu</p>
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
            <!-- card topi -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="{{ asset('image/topi.jpg') }}"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">Adidas Jeans</h5>
                    <p class="text-muted mb-1">celana</p>
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
        </div>
        </section>
        <!-- end section best sellers -->
        
        <!-- section2 -->
        <section
        class="img-fluid-responsive text-white d-flex justify-content-center align-items-center text-center pt-5 p-3"
        style="
            background: url({{ asset('image/newbrand.jpg') }}) center/cover no-repeat;
        "
        >
        <div>
            <h1 class="fw-bold fst-italic" style="color: rgb(77, 116, 18)">
            COMING SOON
            </h1>
            <h2 class="fw-bold" style="color: rgb(80, 119, 22)">NEW BRANDS</h2>

            <p class="fw-bold pb-3" style="color: rgb(243, 240, 240)">
            Step Into the Streets. Adidas bukan hanya sepatu—ini adalah identitas.
            Dibuat untuk kamu yang berani tampil beda dan selalu selangkah di
            depan tren Di setiap langkah, ada cerita tentang keberanian untuk
            mengekspresikan diri tanpa batas. Dengan desain yang ikonik dan
            sentuhan modern, Adidas menghadirkan perpaduan sempurna antara gaya
            streetwear dan kenyamanan premium. Bukan sekadar mengikuti tren, tapi
            menciptakan arah baru di setiap jejak yang kamu tinggalkan. Dari
            hiruk-pikuk kota hingga sudut-sudut tersembunyi yang penuh inspirasi,
            Adidas menjadi partner setia yang menemani setiap perjalananmu. Karena
            di jalanan, gaya adalah bahasa—dan kamu adalah pesannya. Ini bukan
            hanya tentang apa yang kamu pakai, tapi bagaimana kamu melangkah dan
            menunjukkan siapa dirimu sebenarnya. Saatnya tampil berani, percaya
            diri, dan jadilah pusat perhatian di setiap langkahmu bersama Adidas.
            </p>
        </div>
        </section>

        <!-- contact Start -->
        <section class="pt-5" id="contact">
        <div class="container pt-3  rounded-3 custom-gradient shadow-lg bg-body rounded">
            <style>
                .custom-gradient{
                    background: linear-gradient(45deg, #565657, #bebdbe);
                }
            </style>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-5 ">
                    <form class="mt-5 ">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input
                            type="text"
                            class="form-control"
                            id="name"
                            aria-describedby="name"
                            style="border: 1px solid rgb(7, 7, 7)"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input
                            type="email"
                            class="form-control"
                            id="email"
                            aria-describedby="email"
                            style="border: 1px solid rgb(7, 7, 7)"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="Pesan" class="form-label fw-bold">Pesan</label>
                            <textarea
                            class="form-control"
                            id="Pesan"
                            rows="3"
                            style="border: 1px solid rgb(7, 7, 7)"
                            ></textarea>
                        </div>
                        <button
                            type="submit"
                            class="btn btn-primary"
                            style="box-shadow: 0px 0px 5px 0px blue"
                        >
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </section>
        <!-- Star End -->

        <!-- New Brands Star -->
        <section class="py-5 mb-5">
        <div class="container text-center">
            <div class="row justify-content-center">
            <div class="bg-danger" style="width: 400px; border-radius: 10px">
                <h2 class="fw-bold text-white">NEW BRANDS</h2>
            </div>
            </div>

            <div class="row mt-4 justify-content-center">
            <!-- card sepatu new brands-->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="image/new1.jpg"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                    style="border-bottom: 1px solid rgb(94, 92, 92)"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">Adizero</h5>
                    <p class="text-muted mb-1">sepatu</p>
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
            <!-- card sepatu -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="image/new2.jpg"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                    style="border-bottom: 1px solid rgb(5, 5, 5)"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">Elastics</h5>
                    <p class="text-muted mb-1">sepatu</p>
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
            <!-- card topi -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="image/new4.jpg"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                    style="border-bottom: 1px solid rgb(94, 92, 92)"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">trewhite</h5>
                    <p class="text-muted mb-1">Baju</p>
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
            <!-- BARIS KE 2 -->
            <div class="row mt-4 justify-content-center">
            <!-- card baju -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm " >
                <img
                    src="image/new5.jpg"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                    style="border-bottom: 1px solid rgb(94, 92, 92)"
                />
                <div class="card-body bg-danger">
                    <div class="row justify-content-center px-4">
                    <div style="background-color: red; width: 300px; justify-content: center; display: flex; border-radius: 10px; border: 1px solid white;">
                    <h5 class="card-title mb-1">SPECIAL BRANDS</h5>
                    </div>
                    </div>
                    
                    <h5 class="card-title mb-1">PSM Makassar</h5>
                    <p class="text-muted mb-1">Baju</p>
                    <p class="fw-bold text-success">Rp.1000.000</p>
                    <a
                    href="#"
                    class="btn btn-primary"
                    style="box-shadow: 0px 0px 5px 2px rgb(50, 80, 250)"
                    >buy now</a
                    >
                </div>
                </div>
            </div>
            <!-- card sepatu -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="image/new6.webp"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                    style="border-bottom: 1px solid rgb(5, 5, 5)"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">blacksnack</h5>
                    <p class="text-muted mb-1">sneakers</p>
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
            <!-- card topi -->
            <div class="col-12 col-md-3 mt-4 px-4">
                <div class="card h-100 border-1 shadow-sm">
                <img
                    src="image/new3.webp"
                    alt="baju"
                    class="card-img-top"
                    height="300px"
                    style="border-bottom: 1px solid rgb(94, 92, 92)"
                />
                <div class="card-body">
                    <h5 class="card-title mb-1">Bathingape</h5>
                    <p class="text-muted mb-1">sneakers</p>
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
        </div>
        </section>
@endsection