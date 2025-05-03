@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
        <section class="pt-0 cover-background ipad-top-space-margin sm-pb-0" style="background-image:url('{{asset('images/gambar/hero-2.jpg')}}');">
            <div class="shape-image-animation p-0 w-100 d-none d-md-block"> 
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff"> 
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate
                    attributeName="d"
                    dur="5s"
                    values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    repeatCount="indefinite"
                    />
                </path>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center h-500px sm-h-300px">
                    <div class="col-12 col-lg-6 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px text-white fw-600 ls-minus-1px"><span class="text-base-color fw-600">Prodi</span> Kimia</h1>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end page title --> 
        <!-- start section -->
        <section> 
            <div class="container">  
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 col-md-8 col-sm-9 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px">Mengapa memilih program studi kimia?</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5" data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="{{asset('svg/kimia-2.svg')}}" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Peluang Karir Luas</a>
                                <p class="mb-30px ls-minus-05px">Lulusan kimia dibutuhkan di industri farmasi, makanan, energi, hingga laboratorium riset.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="{{asset('svg/kimia-1.svg')}}" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Landasan Ilmiah Kuat</a>
                                <p class="mb-30px">Belajar tentang struktur, sifat, dan reaksi zat sebagai dasar inovasi teknologi dan sains.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all">
                        <div class="bg-very-light-gray h-100 justify-content-end feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                            <div class="feature-box-icon"> 
                                <a href="demo-accounting-services-details.html"><img src="{{asset('svg/kimia-3.svg')}}" class="h-95px" alt=""></a>
                            </div>
                            <div class="feature-box-content">
                                <a href="demo-accounting-services-details.html" class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Kontribusi untuk Lingkungan</a>
                                <p class="mb-30px">Berperan penting dalam menciptakan solusi ramah lingkungan dan pengembangan produk kesehatan.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-0 big-section">
            <div class="container">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23"> 
                        <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                            <img src="{{ asset('images/gambar/hero.jpg') }}" alt="" class="border-radius-8px w-100">
                        </div>
                        <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px" data-shadow-animation="true" data-animation-delay="250" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img src="{{ asset('images/gambar/hero-3.jpg') }}" alt="" class="border-radius-8px w-100 box-shadow-quadruple-large" />
                        </div>
                    </div> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Apa yang Dipelajari dalam Prodi Kimia?</h3> 
                        <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">Program Studi Kimia adalah bidang pendidikan tinggi yang mempelajari struktur, sifat, reaksi, dan perubahan materi pada tingkat atom dan molekul. Mahasiswa di prodi ini akan mempelajari teori kimia dasar hingga lanjutan, teknik analisis laboratorium, serta penerapan kimia dalam berbagai sektor seperti industri, lingkungan, kesehatan, dan riset.
                        Prodi ini bertujuan menghasilkan lulusan yang kompeten dalam berpikir ilmiah, memiliki keterampilan laboratorium, dan siap bersaing di dunia kerja maupun akademik.</p> 
                        <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div> 
                </div> 
            </div>
        </section>  
        <!-- end section -->
        <!-- start section --> 
        <!-- end section -->
        <!-- start section --> 
        <section class="bg-very-light-gray overflow-hidden cover-background position-relative overlap-height" style="background-image: url(https://via.placeholder.com/1920x776)">
            <div class="container overlap-gap-section">
                <div class="row align-items-center justify-content-center mb-7"> 
                    <div class="col-xl-5 col-lg-6 mb-30px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px mb-50px">Visi, Misi, dan Tujuan</h3>
                        <div class="row row-cols-1">
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-binoculars fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Visi</span>
                                        <p class="w-90 sm-w-100">Menjadi Program Studi Kimia yang unggul dalam pendidikan, penelitian, dan pengabdian kepada masyarakat, serta mampu bersaing di tingkat nasional maupun internasional pada tahun 2030.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-flag fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div> 
                                        <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-40px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Misi</span>
                                        <p class="w-90 sm-w-100">Mengembangkan penelitian inovatif yang mendukung kemajuan ilmu pengetahuan dan kebutuhan industri.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-white position-relative box-shadow-bottom will-change-transform">
                                            <span class="number position-relative z-index-1 text-dark-gray fw-600"><i class="bi bi-trophy fs-16"></i></span>
                                            <div class="box-overlay bg-dark-gray rounded-circle"></div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px sm-ps-25px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-600 text-dark-gray fs-17 mb-5px">Tujuan</span>
                                        <p class="w-90 sm-w-100">Mendorong terciptanya inovasi dan solusi praktis melalui kegiatan penelitian dan pengabdian masyarakat.</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- end process step item --> 
                            <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-32">
                                Selengkapnya
                                <span class="bg-orient-blue text-white">
                                    <i class="feather icon-feather-arrow-right icon-small"></i>
                                </span>
                            </a>  
                        </div>  
                    </div> 
                    <div class="col-lg-6 text-center md-mb-20px offset-xl-1"> 
                        <figure class="position-relative mb-0 overflow-hidden" data-shadow-animation="true" data-bottom-top="transform: translateY(70px)" data-top-bottom="transform: translateY(-70px)"> 
                            <img src="{{ asset('images/gambar/hero-4.jpg') }}" class="w-100 border-radius-6px" alt=""> 
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        {{-- start section --}}
        <section class="pt-0 big-section tw-my-20">
            <div class="container">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Kata Sambutan</h3> 
                        <div class="tw-space-y-4 tw-text-justify tw-text-base tw-leading-relaxed tw-w-90 lg:tw-w-95 md:tw-w-full">
                            <p>Selamat datang di website resmi Program Studi Kimia.</p>

                            <p>Kami bangga menjadi bagian dari institusi yang terus berinovasi dan berkomitmen mencetak lulusan yang tidak hanya memahami ilmu kimia secara teori, tetapi juga mampu mengaplikasikannya dalam kehidupan nyata.</p>

                            <p>Melalui kurikulum berbasis praktikum dan riset, kami memfasilitasi mahasiswa untuk mengembangkan kreativitas, berpikir kritis, dan berkontribusi dalam memecahkan permasalahan global, mulai dari isu lingkungan hingga kesehatan.</p>

                            <p>Semoga website ini dapat menjadi media informasi yang bermanfaat bagi mahasiswa, calon mahasiswa, dan masyarakat luas dalam mengenal lebih dekat Program Studi Kimia.</p>
                        </div>
                        
                        <a href="#" class="btn btn-large btn-rounded with-rounded btn-base-color btn-round-edge btn-box-shadow tw-mt-7">
                            Selengkapnya
                            <span class="bg-orient-blue text-white">
                                <i class="feather icon-feather-arrow-right icon-small"></i>
                            </span>
                        </a>                        
                    </div>
                    <div class="col-lg-6 position-relative md-mt-14 sm-mt-17 xs-mt-23"> 
                        <div class="w-70 md-w-75 xs-w-90 tw-ml-32" data-animation-delay="50" data-shadow-animation="true">
                            <img src="{{ asset('images/gambar/foto2.jpg') }}" alt="" class=" border-radius-8px w-100">
                        </div>
                    </div> 
                </div> 
            </div>
        </section>  
        {{-- end section  --}}
        <!-- start section --> 
        <!-- end section -->
        <!-- start section -->
        <section class="py-0">
            <div class="container">        
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-6 col-md-7 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Berita Terkini</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- start blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="blog-image" style="height: 200px; overflow: hidden;">
                                        <a href="#" class="d-block">
                                            <img src="{{asset('images/gambar/bandung.jpg')}}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                        </a>
                                    </div>
                                    <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <a href="#" 
                                        class="card-title mb-15px fw-600 fs-20 text-dark-gray d-inline-block" 
                                        style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea",90) !!}
                                        </a>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                            {!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quod totam, blanditiis, nihil adipisci quisquam, quos aut iure quo nam optio reprehenderit dolorem. Labore nostrum, ipsum nemo quae pariatur ea", 120) !!}
                                        </p>
                                        <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                            <div class="me-auto">
                                                <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                    15 Maret 2025
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog list -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection