<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon 5.0</title>

    <link rel="shortcut icon" href="/assets/Logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://kit.fontawesome.com/812136cf50.js" crossorigin="anonymous"></script>

    <script src="path/to/faq.js"></script>
    <script src="script.js" defer ></script>
</head>
<body>

    <!-- Preload -->
    <div class="preload">
        <h2 data-text="&nbsp;》Hackathon...&nbsp;">&nbsp;》HackAthon...&nbsp;</h2>
    </div>
    <!-- Preload -->

    <!-- Navbar -->
    <nav id="navbar">
        <div class="container">
            <div class="nav-logo">
                <!-- <img src="" alt="Nav Logo" width="80"> -->
                <svg width="80" height="59" viewBox="0 0 80 59" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="80" height="59" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_161_201" transform="translate(-0.0062996) scale(0.00585317 0.00793651)"/>
                    </pattern>
                    <image id="image0_161_201" width="173" height="126" xlink:href="data:image/png;base64,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"/>
                    </defs>
                    </svg>
                    <a href="#">Hackathon</a>
            </div>
            <div class="nav-menu">
                <div class="nav-link">
                    <a href="#" class="active">Home</a>
                    <a href="#champ-section">Champion Prizes</a>
                    <a href="#mentor">Mentor & Jury</a>
                    <a href="#">About</a>
                    <a href="#faq-section">FAQ</a>
                    <a href="#Timeline-section">Timeline</a>
                </div>
                <div class="login-btn">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    
    <!-- Landing Page -->
    <section id="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="heading">
                    <h1>Hackathon 5.0</h1>
                    <h2>Envision an <span class="span1">Idea</span> and Acualize it <br> throught Your <span class="span2">Code</span></h2>
                </div>
                <div class="box">
                    <img src="/assets/LPV-Hero.png" alt="Hero1">
                </div>
            </div>
        </div>
    </section>

    <section id="hero2-section">
        <div class="container">
            <div class="hero2-content">
                <div class="heading">
                    <h2>36-Hours Coding Competition</h2>
                    <p>Hackathon 5.0 merupakan puncak dari rangkaian acara TechnoScape berupa kompetisi coding secara online selama 36 jam, di mana setiap tim bersaing untuk membuat aplikasi atau situs web inovatif yang dapat memecahkan permasalahan di kehidupan nyata. Peserta berkesempatan untuk berinteraksi dengan para mentor dalam sesi mentoring bisnis, teknologi, dan desain.</p>
                </div>
                <div class="box">
                    <img src="/assets/TS.png" alt="TS-Hero">
                </div>
            </div>
            <!-- vidio recap -->
        </div>
    </section>
    <!-- Landing Page -->


    <!-- Champion Prizes -->
    <section id="champ-section">
        <div class="container">
            <div class="header">
                <h1>Champion Prize</h1>
            </div>
            <div class="champ-content">
                <div class="box">
                    <img src="/assets/Champion/2.png" alt="Champion2">
                    <h1>Rp3.000.000 </h1>
                </div>
                <div class="box">
                    <img src="/assets/Champion/1.png" alt="Champion1">
                    <h1>Rp5.000.000 </h1>
                </div>
                <div class="box">
                    <img src="/assets/Champion/3.png" alt="Champion3">
                    <h1>Rp2.000.000 </h1>
                </div>
            </div>
            <div class="price-btn">
                <h1>Merchandise + Sertifikat</h1>
            </div>
        </div>
    </section>
    <!-- Champion Prizes -->
    

    <!-- Mentor & Jury -->
    <section id="mentor">
        <div class="heading">
            <h1>Mentor & Jury</h1>
        </div>
        
        <div class="container">
            <div class="sub-header">
                <h1>9</h1>
                <h2>Mentors</h2>
            </div>

            <div class="slideshow-container">
                <div class="slide-btn">
                    <img class="prev" onclick="plusSlides(-1)" src="/assets/Mentor/left.png" alt="left-btn">
                </div>

                <div class="mySlides fade">
                    <div class="box">
                        <img src="/assets/Mentor/1.jpg" alt="mentor1">
                        <div class="text">
                            <h1>Joseph Li</h1>
                            <h2>Software Engineer at Gojek</h2>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/assets/Mentor/2.jpg" alt="mentor2">
                        <div class="text">
                            <h1>Michelle Nuela</h1>
                            <h2>Data Analyst at Brick</h2>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/assets/Mentor/3.jpg" alt="mentor3">
                        <div class="text">
                            <h1>Marchel Choi</h1>
                            <h2>Data Engineer at Astra</h2>
                        </div>
                    </div>
                </div>
                
                <div class="mySlides fade">
                    <div class="box">
                        <img src="/assets/Mentor/4.jpg" alt="mentor4">
                        <div class="text">
                            <h1>Park Linda</h1>
                            <h2>Marketing Lead at Tiket.com</h2>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/assets/Mentor/5.jpg" alt="mentor5">
                        <div class="text">
                            <h1>Jonathan Arif</h1>
                            <h2>Sales Engineer at SanDisk</h2>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/assets/Mentor/6.jpg" alt="mentor6">
                        <div class="text">
                            <h1>Kim Min Jeong </h1>
                            <h2>Business Analyst at Logitech</h2>
                        </div>
                    </div>
                </div>
                
                <div class="mySlides fade">
                    <div class="box">
                        <img src="/assets/Mentor/7.jpg" alt="mentor7">
                        <div class="text">
                            <h1>Rico Huang</h1>
                            <h2>System Analyst at Tokopedia</h2>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/assets/Mentor/8.jfif" alt="mentor8">
                        <div class="text">
                            <h1>Kim Sejeong</h1>
                            <h2>Software Engineer at Gojek</h2>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/assets/Mentor/9.jfif" alt="mentor9">
                        <div class="text">
                            <h1>Huang Renjun</h1>
                            <h2>Data Analyst at Gojek</h2>
                        </div>
                    </div>
                </div>

                <div class="slide-btn">
                    <img class="next" onclick="plusSlides(1)" src="/assets/Mentor/right.png" alt="right-btn">
                </div>
            </div> 
        </div>     
    </section>

    <section id="jury">
        <div class="container">
            <div class="sub-head">
                <h1>3</h1>
                <h2>Juries</h2>
            </div>

            <div class="juries">
                <div class="box">
                    <img src="/assets/Jury/1.jpg" alt="jury1">
                    <div class="text">
                        <h1>Mellinda Lim</h1>
                        <h2>Product Manager at Gojek</h2>
                    </div>
                </div>
                <div class="box">
                    <img src="/assets/Jury/2.jpg" alt="jury2">
                    <div class="text">
                        <h1>Sim Yae Jun</h1>
                        <h2>Data Engineer at Tiket.com</h2>
                    </div>
                </div>
                <div class="box">
                    <img src="/assets/Jury/3.jpg" alt="jury3">
                    <div class="text">
                        <h1>Philip Yang</h1>
                        <h2>Software Engineer at Logitech</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mentor & Jury -->


    <!-- Kenapa harus join Hackathon -->
    <section id="reson-section">
        <div class="container">
            <div class="head">
                <h1>Why You Should Join Us?</h1>
            </div>
            <div class="boxtop">
                <div class="box">
                    <div class="card">
                        <div class="judul">
                            <h1>Melakukan Mentoring dengan Para Ahli</h1>
                        </div>
                        <div class="isi">
                            <h2>Kamu berkesempatan melakukan mentoring bisnis, desain, dan teknologi langsung dari orang-orang yang berpengalaman di bidang IT serta memberikan masukan tentang proyekmu.</h2>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <div class="judul">
                            <h1>Menambah Value pada CV</h1>
                        </div>
                        <div class="isi">
                            <h2>Dengan menyelesaikan case study yang diberikan, kamu dapat menambah value CV kamu, lho!</h2>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <div class="judul">
                            <h1>Mendapatkan Peluang Wawancara Kerja</h1>
                        </div>
                        <div class="isi">
                            <h2>CV pemenang Hackathon 5.0 akan didistribusikan ke perusahaan sponsor Hackathon 5.0.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxbtm">
                <div class="box">
                    <div class="card">
                        <div class="judul">
                            <h1>Menambah Relasi</h1>
                        </div>
                        <div class="isi">
                            <h2>Kamu berkesempatan untuk menjalin relasi secara online dengan peserta, mentor, dan juri Hackathon 5.0.</h2>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="card">
                        <div class="judul">
                            <h1>Mengembangkan Keterampilan</h1>
                        </div>
                        <div class="isi">
                            <h2>Perlombaan ini mendorongmu untuk mengembangkan keterampilan. Selain itu, kamu dituntut untuk membuat produk inovatif berdasarkan kasus tertentu.</h2>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
    </section>
    <!-- Kenapa harus join Hackathon -->


    <!-- FAQ -->
    <section id="faq-section">
        <div class="container">
            <div class="head">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="faq-content">
                <div class="qabox">
                    <div class="qbox-question" onclick="toggleAnswer(this)">
                        <h1>Apa saja persyaratan untuk berpartisipasi?</h1>
                        <div class="span-btn">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="abox-answer">
                        <br>
                        <ul>
                            <li><p>Peserta adalah warga negara Indonesia berusia 18 hingga 25 tahun untuk memenuhi syarat.</p></li>
                            <li><p>Peserta wajib menyerahkan CV (Curriculum Vitae) pada halaman pendaftaran Developer Workshop.</p></li>
                            <li><p>Peserta harus memahami dasar bahasa pemrograman Golang dan NodeJS</p></li>
                        </ul>
                        <br>
                    </div>
                </div>

                <div class="qabox">
                    <div class="qbox-question" onclick="toggleAnswer(this)">
                        <h1>Kapan batas waktu pendaftaran?</h1>
                        <div class="span-btn">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="abox-answer">
                        <br>
                        <p>Batas akhir pendaftaran adalah Rabu, 7 Juni 2022. Namun, jika pendaftaran Developer Workshop sudah mencapai jumlah maksimal, maka pendaftaran akan ditutup lebih awal. Jadi, jangan sampai ketinggalan!</p>
                        <br>
                    </div>
                </div>

                <div class="qabox">
                    <div class="qbox-question" onclick="toggleAnswer(this)">
                        <h1>Apakah acara Developer Workshop bersifat gratis?</h1>
                        <div class="span-btn">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="abox-answer">
                        <br>
                        <p>Developer Workshop merupakan acara berbayar. Peserta harus membayar Rp45.000 untuk menghadiri acara ini.</p>
                        <br>
                    </div>
                </div>

                <div class="qabox">
                    <div class="qbox-question" onclick="toggleAnswer(this)">
                        <h1>Siapa yang bisa saya hubungi terkait pendaftaran?</h1>
                        <div class="span-btn">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="abox-answer">
                        <br>
                        <p>Jika memiliki pertanyaan, jangan ragu menghubungi:</p>
                        <div class="contact-box">
                            <div class="lbox">
                                <ul>
                                    <li><p>Lisa</p></li>
                                    <li><p>WA: 08987654321</p></li>
                                    <li><p>ID LINE: haihalo</p></li>
                                </ul>
                            </div>
                            <div class="rbox">
                                <ul>
                                    <li><p>Cynthia</p></li>
                                    <li><p>WA: 08123456789</p></li>
                                    <li><p>ID LINE: halohai</p></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->


    <!-- Timeline -->
    <section id="Timeline-section">
        <div class="container">
            <div class="head">
                <h1>Timeline</h1>
            </div>
            <div class="box">
                <div class="day1">
                    <div class="frame">
                        <img src="/assets/Timeline/1.png" alt="img-TL">
                    </div>
                    <div class="title">
                        <h3>Open Registration</h3>
                        <p>Senin, 12 Juni 2023</p>
                    </div>
                </div>
                <div class="day2">
                    <div class="frame">
                        <img src="/assets/Timeline/2.png" alt="img-TL">
                    </div>
                    <div class="title">
                        <h3>Close Registration</h3>
                        <p>Minggu, 25 Juni 2023</p>
                    </div>
                </div>
                <div class="day3">
                    <div class="frame">
                        <img src="/assets/Timeline/3.png" alt="img-TL">
                    </div>
                    <div class="title">
                        <h3>Technical Meeting</h3>
                        <p>Selasa, 27 Juni 2023</p>
                    </div>
                </div>
                <div class="day4">
                    <div class="frame">
                        <img src="/assets/Timeline/4.png" alt="img-TL">
                    </div>
                    <div class="title">
                        <h3>Competition Day</h3>
                        <p>Jumat, 30 Juni 2023</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Timeline -->


    <!-- Sponsor -->
    <section id="Sponsor-section">
        <div class="container">
            <div class="head">
                <h1>Sponsor</h1>
            </div>
            <div class="box">
                <div class="platinum">
                    <h3>PLATINUM</h3>
                    <img src="/assets/Sponsor/1.png" alt="Sponsor-logo">
                </div>
                <div class="gold">
                    <h3>GOLD</h3>
                    <img src="/assets/Sponsor/2.png" alt="Sponsor-logo">
                </div>
                <div class="silver">
                    <h3>SILVER</h3>
                    <img src="/assets/Sponsor/3.png" alt="Sponsor-logo">
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsor -->
    

    <!-- Media Partner -->
    <section id="media-section">
        <div class="container">
            <div class="head">
                <h1>Media Partner</h1>
            </div>
            <div class="box">
                <div class="line1">
                    <img src="/assets/Media Partner/1.png" alt="logo" style="width: 285px; height: 74px;">
                    <img src="/assets/Media Partner/2.png" alt="logo" style="width: 306px; height: 78px;">
                    <img src="/assets/Media Partner/3.png" alt="logo" style="width: 339px; height: 116px;">
                    <img src="/assets/Media Partner/3.1.png" alt="logo" style="width: 132px; height: 132px;">
                </div>
                <div class="line2">
                    <img src="/assets/Media Partner/4.png" alt="logo" style="width: 212px; height: 132px;">
                    <img src="/assets/Media Partner/5.png" alt="logo" style="width: 468px; height: 75px;">
                    <img src="/assets/Media Partner/6.png" alt="logo" style="width: 275px; height: 75px;">
                    <img src="/assets/Media Partner/7.png" alt="logo" style="width: 91px; height: 91px;">
                </div>
                <div class="line3">
                    <img src="/assets/Media Partner/8.png" alt="logo" style="width: 131px; height: 169px;">
                    <img src="/assets/Media Partner/9.png" alt="logo" style="width: 200px; height: 200px;">
                    <img src="/assets/Media Partner/10.png" alt="logo" style="width: 177px; height: 177px;">
                    <img src="/assets/Media Partner/11.png" alt="logo" style="width: 184px; height: 184px;">
                    <img src="/assets/Media Partner/12.png" alt="logo" style="width: 184px; height: 184px;">
                </div>
                <div class="line4">
                    <img src="/assets/Media Partner/13.png" alt="logo" style="width: 200px; height: 166px;">
                    <img src="/assets/Media Partner/14.png" alt="logo" style="width: 285px; height: 145px;">
                    <img src="/assets/Media Partner/15.png" alt="logo" style="width: 348px; height: 46px;">
                </div>
                <div class="line5">
                    <img src="/assets/Media Partner/16.png" alt="logo" style="width: 216px; height: 56px;">
                    <img src="/assets/Media Partner/17.png" alt="logo" style="width: 171px; height: 132px;">
                    <img src="/assets/Media Partner/18.png" alt="logo" style="width: 171px; height: 120px;">
                    <img src="/assets/Media Partner/19.png" alt="logo" style="width: 284px; height: 72px;">
                </div>
            </div>
        </div>
    </section>
    <!-- Media Partner -->


    <!-- Other Event -->
    <section id="event-section">
        <div class="container">
            <div class="header">
                <h1>Other Event</h1>
            </div>
            <div class="box">
                <div class="sub-head">
                    <h2>Virtual Conference</h2>
                    <h3>Register Here!</h3>
                </div>
                <div class="slideshow-container">
                    <div class="slide-btn">
                        <img class="prev" onclick="plusSlide(-1)" src="/assets/Mentor/left.png" alt="left-btn">
                    </div>
    
                    <div class="mySlide fade">
                        <div class="content">
                            <img src="/assets/Other Event/1.png" alt="Event1">
                        </div>
                    </div>
                    
                    <div class="mySlide fade">
                        <div class="content">
                            <img src="/assets/Other Event/2.png" alt="Event2">
                        </div>
                    </div>
                    
                    <div class="mySlide fade">
                        <div class="content">
                            <img src="/assets/Other Event/3.png" alt="Event3">
                        </div>
                    </div>
    
                    <div class="slide-btn">
                        <img class="next" onclick="plusSlide(1)" src="/assets/Mentor/right.png" alt="right-btn">
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="sub-head">
                    <h2>Developer Workshop</h2>
                    <h3>Register Here!</h3>
                </div>
                <div class="slideshow-container">
                    <div class="slide-btn">
                        <img class="prev" onclick="plusSlidez(-1)" src="/assets/Mentor/left.png" alt="left-btn">
                    </div>
    
                    <div class="mySlidez fade">
                        <div class="content">
                            <img src="/assets/Other Event/dw/1.png" alt="Event1">
                        </div>
                    </div>
                    
                    <div class="mySlidez fade">
                        <div class="content">
                            <img src="/assets/Other Event/dw/2.png" alt="Event2">
                        </div>
                    </div>
                    
                    <div class="mySlidez fade">
                        <div class="content">
                            <img src="/assets/Other Event/dw/3.png" alt="Event3">
                        </div>
                    </div>
    
                    <div class="slide-btn">
                        <img class="next" onclick="plusSlidez(1)" src="/assets/Mentor/right.png" alt="right-btn">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Other Event -->


    <!-- Contact Us -->
    <section id="Contact-section">
        <div class="container">
            <div class="content">
                <h1>Contact Us</h1>
            </div>
            <div class="box">
                <div class="left">
                <form action="" id="form">
                    <label for="name">Name</label>
                    <div class="name">
                        <input type="text" name="name" id="name" placeholder="Name">
                        <label for="name" class="error"></label>
                    </div>
                    <label for="email">Email</label>
                    <div class="email">
                        <input type="email" name="email" id="email" placeholder="example@gmail.com">
                    </div>

                    <label for="subject">Subject</label>
                    <div class="subject">
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                    </div>

                    <label for="massage">Massage</label>
                        <div class="massage">
                            <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Input Your Massage Here..."></textarea>                           
                        </div>
                        <div class="submit">
                            <input type="submit" value="SEND">
                        </div>
                        
                </form>
                </div>
                <div class="right">
                    <div class="box-sosmed">
                        <div class="header">
                            <h1>Social Media</h1>
                        </div>
                        <div class="sosmed">
                            <div class="ig sm">                          
                                <a href="">
                                    <img src="/assets/Sosmed/vector.png" alt="">
                                    <h2>techoscapebncc</h2> 
                                </a>                               
                            </div>
                            <div class="em sm">
                                <a href="">
                                    <img src="/assets/Sosmed/🦆 icon _email outline_.png" alt="">
                                    <h2>bncc.net</h2>
                                </a>
                            </div>
                            <div class="tw sm">
                                <a href="">
                                    <img src="/assets/Sosmed/Twitter.png" alt="">
                                    <h2>BNCC_Binus</h2>
                                </a>
                            </div>
                            <div class="fb sm">
                                <a href="">
                                    <img src="/assets/Sosmed/Facebook.png" alt="">
                                    <h2>Bina Nusantara Computer Club</h2>
                                </a>
                            </div>
                            <div class="in sm">
                                <a href="">
                                    <img src="/assets/Sosmed/Linkedin.png" alt="">
                                    <h2>Bina Nusantara Computer Club</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Powered and Organized by -->
    <section id="pao-section">
        <div class="container">
            <div class="kiri">
                <div class="bncc">
                    <h1>Organized By</h1>
                    <div class="bncclogo">
                        <img src="/assets/Logo/BNCC.png" alt="">
                    </div>
                </div>
            </div>
            <div class="kanan">
                <div class="atas">
                    <div class="email">
                        <input type="email" name="email" id="email" placeholder="Masukan Email Anda">
                        <input type="button" class="btn" value="Subscibe Sekarang!">
                    </div>
                </div>
                <div class="bawah">
                        <div class="gojek">
                            <h1>Official Learning Partner of</h1>
                                <div class="gojeklogo">
                                    <img src="/assets/Sponsor/1.png" alt="">
                                </div>
                        </div>
                            <div class="tiket">
                                <h1>Official Empowering Affiliate of</h1>
                                <div class="tiketlogo">
                                    <img src="/assets/Sponsor/2.png" alt="">
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </section>
<!-- Powered and Organized by -->


    <!-- Footer -->
    <section id="footer-section">
        <div class="garis"></div>
        <div class="container">
            <div class="top">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-regular fa-envelope"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-linkedin"></i>
            </div>
            <div class="buttom">
                <h1>
                    All Rights Reserved BNCC 2022 © Bina Nusantara Computer Club Privacy Policy & Terms of Service
                </h1>
            </div>
    </section>
    <!-- Footer -->
</body>
</html>