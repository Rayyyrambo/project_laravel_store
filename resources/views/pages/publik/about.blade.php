@extends('layouts.publik')

@section('title', 'about')

@section('content')
    <div class="jumbotron text-center pt-5 pb-4">
      <img
        src="image/adidas.png"
        alt=""
        style="
          border-bottom-left-radius: 200px;
          border-bottom-right-radius: 200px;
        "
      />
      <h1 class="display-4 fw-bold">ADIDAS-STORE</h1>
      <p class="lead">
        This is a simple hero unit, a simple jumbotron-style component for
        calling extra attention to featured content or information.
      </p>
    </div>
    <!-- end section1 -->

    <!-- section2 -->
    <div class="container mt-5 px-4 mb-5">
      <div class="row mb-5">
        <div class="col text-center">
          <h2>adidas</h2>
        </div>
      </div>
      <div class="row justify-content-between fs-5 text-center">
        <div
          class="col-md-4 px-4 py-4 mb-3"
          style="border: 2px solid black; border-radius: 30px"
        >
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est omnis
            expedita, aliquid quis quod fugit eos. Et, quia doloremque, eius
            exercitationem facere minima deserunt reprehenderit perferendis
            esse, amet alias. Laboriosam cum voluptates ipsam aperiam dolorem
            earum fugiat ea facere, nemo similique minus consectetur. Suscipit,
            non? Magnam deleniti aut cumque placeat?
          </p>
        </div>
        <div
          class="col-md-4 px-4 py-4 mb-3"
          style="border: 2px solid black; border-radius: 30px"
        >
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est omnis
            expedita, aliquid quis quod fugit eos. Et, quia doloremque, eius
            exercitationem facere minima deserunt reprehenderit perferendis
            esse, amet alias. Laboriosam cum voluptates ipsam aperiam dolorem
            earum fugiat ea facere, nemo similique minus consectetur. Suscipit,
            non? Magnam deleniti aut cumque placeat?
          </p>
        </div>
      </div>
    </div>
    <!-- end section2 -->
      <div class="jumbotron text-center pt-4" ">
          <h1>SEJARAH</h1>
          <h1 class="display-4 fw-bold">ADIDAS-STORE</h1>
          <p class="lead mb-5 px-5 fs-3">
            Adidas adalah perusahaan perlengkapan olahraga asal Jerman yang didirikan pada tahun <span class="fw-bold">1949</span> oleh <span class="fw-bold">spamAdolf Dassler</span> di Herzogenaurach setelah berpisah dari saudaranya, Rudolf Dassler, yang kemudian mendirikan Puma. Sebelum berpisah, keduanya menjalankan usaha sepatu bersama yang sudah dikenal sejak 1920-an, namun konflik internal menyebabkan mereka berpisah dan membangun perusahaan masing-masing yang menjadi rival besar. Adidas mulai dikenal luas saat tim Jerman Barat memenangkan FIFA World Cup 1954 dengan menggunakan sepatu inovatif Adidas yang memiliki paku yang bisa dilepas sesuai kondisi lapangan, sehingga memberi keunggulan dalam pertandingan. Sejak saat itu, Adidas terus berkembang menjadi salah satu merek olahraga terbesar di dunia, memproduksi berbagai perlengkapan seperti sepatu, pakaian, dan aksesoris olahraga, serta menjalin kerja sama dengan atlet dan klub ternama. Dengan ciri khas logo tiga garis, Adidas tidak hanya berfokus pada performa olahraga tetapi juga merambah ke dunia fashion dan gaya hidup, menjadikannya salah satu brand global paling berpengaruh hingga saat ini.
          </p>     
          <img src="image/history.png" alt="" style="width: 100%; object-fit: cover;">
          <p class="mt-4 px-5 mb-5 fs-3">
            By the 1970s, Adidas had become a global leader in sportswear, symbolized by its iconic three-stripe logo and later the trefoil logo, representing diversity and performance. The brands influence extended beyond sports into popular culture, especially through music and street fashion. A notable moment came when the hip-hop group Run-D.M.C. embraced Adidas sneakers without laces, leading to one of the first major collaborations between a music group and a sportswear company, further cementing Adidass place in youth and urban culture.

            Despite its success, Adidas faced challenges in the 1980s and 1990s due to increased competition, particularly from emerging global brands. To adapt, the company restructured its operations, focused on innovation, and expanded its global marketing strategies. In 2006, Adidas strengthened its presence in the international market by acquiring Reebok, aiming to better compete in North America; although Reebok was later sold in 2021, the acquisition marked an important phase in Adidass global expansion strategy.
          </p>
          <img src="image/imageadidas.jpg" alt="" style="width: 100%; object-fit: cover;">
      </div>
@endsection