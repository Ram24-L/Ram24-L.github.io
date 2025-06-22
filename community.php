<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>

    <!-- Include JavaScript for color modes -->
    <script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Update the 'content' attribute to reflect the actual content description -->
    <meta name="description" content="your_description_goes_here">

    <!-- Modify the 'content' attribute to include appropriate keywords -->
    <meta name="keywords" content="your_keywords_goes_here">

    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <!-- Change the text within the <title> tag to match the webpage's content -->
    <title> your_title_goes_here </title>

    <!-- 
        Set the website's favicon and Apple touch icon using the files in the assets/logo folder. You can change these files to your own icons by replacing them with the same names and sizes.

        Be careful if you change the site.webmanifest file, as you need to update the src attribute of the icons array to match the new path of your icon files. Otherwise, your icons may not display correctly on some devices. 
    -->
	<link rel="apple-touch-icon" sizes="180x180" href="./assets/logo/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./assets/logo/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./assets/logo/favicon-16x16.png">
	<link rel="icon" type="image/x-icon" href="./assets/logo/favicon.ico">
	<link rel="manifest" href="./assets/logo/site.webmanifest">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./assets/libraries/glide/css/glide.core.min.css">
    <link rel="stylesheet" href="./assets/libraries/aos/aos.css">
    <link rel="stylesheet" href="./assets/css/main.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <!-- Update with the absolute URL of the content like: https://example.com/index.html -->
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <!-- Update with the type of object you’re sharing. (e.g., article, website, etc.) -->
    <meta property="og:type" content="website">
    <!-- Defines the content language -->
    <meta property="og:locale" content="en_US">

    
    <!-- X/Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Update with your X/Twitter handle -->
    <meta name="twitter:site" content="@yourtwitterhandle"> 
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta name="twitter:title" content="your_title_goes_here"> 
    <meta name="twitter:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta name="twitter:image" content="your_absolute_image_url_goes_here"> 
    
    <!-- 
        The following line specifies the canonical URL for this page.
        Replace your_canonical_url_goes_here with the actual canonical URL if needed like: https://example.com/index.html
        Or just remove it!!!!
    -->
    <link rel="canonical" href="your_canonical_url_goes_here">

</head>
<body>


    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>



	<!-- header top -->
<header class="navigation position-absolute w-100 bg-body-tertiary shadow border-bottom border-light border-opacity-10 rounded-bottom-3 rounded-bottom-sm-4">
	     <nav class="navbar navbar-expand-xl" aria-label="Offcanvas navbar large" style="padding: 0; ">
	        <div class="container py-1">
	            <a href="./index.php" class="navbar-brand">
	                <img src="./assets/logo/logo.png" height="60" alt="logo" style="margin-bottom: 10px;">
	            </a>
				<h4 class="px-1 home-text  rounded-3 text-base leading-6 fw-semibold" style="margin-top: 10px; font-size: 24px;">RADAR LIFE</h4>

	            <div class="dropdown ms-3 order-last">
	                <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
	                    <symbol id="check2" viewBox="0 0 16 16">
	                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
	                    </symbol>
	                    <symbol id="circle-half" viewBox="0 0 16 16">
	                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
	                    </symbol>
	                    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
	                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
	                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
	                    </symbol>
	                    <symbol id="sun-fill" viewBox="0 0 16 16">
	                        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
	                    </symbol>
	                </svg>

	                <button class="btn btn-primary home-text btn-sm rounded dropdown-toggle d-flex align-items-center"
	                    id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
	                    aria-label="Toggle theme (auto)">
	                    <svg fill="currentColor" class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
	                    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
	                </button>

	                <ul class="p-1 dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 rounded-3 shadow bg-dark"
	                    style="--bs-dropdown-min-width: 9rem;" aria-labelledby="bd-theme-text">

	                    <li style="color: var(--bs-tertiary-bg);">
	                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
	                            class="mt-n1 d-inline-block position-absolute top-0 end-0 translate-middle" viewBox="0 0 16 16">
	                            <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
	                        </svg>
	                    </li>

	                    <li>
	                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 home-text" data-bs-theme-value="light" aria-pressed="false">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
	                            Light
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
	                        </button>
	                    </li>

	                    <li>
	                        <button type="button" class="my-1 dropdown-item d-flex align-items-center rounded-1 home-text" data-bs-theme-value="dark" aria-pressed="false">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
	                            Dark
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
	                        </button>
	                    </li>

	                    <li>
	                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 active home-text" data-bs-theme-value="auto" aria-pressed="true">
	                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
	                            Auto
	                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
	                        </button>
	                    </li>
	                </ul>
	            </div>

	            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	            </button>

	            <div class="offcanvas offcanvas-end border-0 rounded-start-0 rounded-start-sm-4" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
	                <div class="offcanvas-header" style="padding: 2rem 2rem 1.5rem 2rem;">
	                    <h5 class="offcanvas-title m-0" id="offcanvasNavbar2Label">
	                        <a class="navbar-brand" href="javascript:;">
	                            <img src="./assets/logo/logo.png" height="32" alt="logo">
	                        </a>
	                    </h5>
	                    <button type="button" class="btn-close home-text" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	                </div>

	                <div class="offcanvas-body">
	                    <ul class="navbar-nav align-items-xl-center flex-grow-1 column-gap-4 row-gap-4 row-gap-xl-2">
	                        <li class="nav-item ms-xl-auto">
	                            <a href="./index.php" class="px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold" aria-current="page">
	                                Home
	                            </a>
	                        </li>

	                        <li class="nav-item">
	                            <a href="./community.php" class="px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold">
	                                Community
	                            </a>
	                        </li>

	                        <li class="nav-item">
	                            <a href="./about.php" class="px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold">
	                                About
	                            </a>
	                        </li>

	                        <li class="nav-item">
					            <div class="dropdown">
								    <button class="btn w-100 text-start dropdown-toggle px-3  home-text bg-body-secondary-hover nav-link rounded-3 text-base leading-6 fw-semibold " type="button" data-bs-toggle="dropdown" aria-expanded="false">
								        Blog
								    </button>
								    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 text-sm shadow bg-dark" style="--bs-dropdown-min-width: 9rem;">
								    	<li class="d-none d-xl-block" style="color: var(--bs-tertiary-bg);">
					                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
					                            class="mt-n1 d-inline-block position-absolute top-0 end-0 translate-middle" viewBox="0 0 16 16">
					                            <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
					                        </svg>
					                    </li>
								        <li>
								        	<a class="dropdown-item  home-text bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="./blog.php"> 
								        		Blog page 
								        	</a>
								        </li>
								        <li>
								        	<a class="dropdown-item  home-text bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="./blog-post.php"> 
								        		Blog post 
								        	</a>
								        </li>
								        <li>
								        	<a class="dropdown-item  home-text bg-body-secondary-hover py-2 text-base leading-6 fw-semibold" href="./blog-author.php"> 	Author page 
								        	</a>
								        </li>
								    </ul>
								</div>
	                        </li>

	                        <li class="nav-item ms-xl-auto">
	                            <a href="./contact.php" class="px-3  home-text bg-body-secondary-hover border nav-link rounded-3 text-base leading-6 fw-semibold text-center">
	                                Contact us
	                            </a>
	                        </li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </nav>
	</header>



	<!-- header body -->
	<div class="overflow-hidden py-9 py-xl-10 position-relative">
	   	<img src="./assets/img/bg/bg1 (2).jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

	   	<div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
	        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
	    </div>

	    <div class="position-absolute z-0 top-0 h-100 w-100">
		    <div class="container h-100 d-flex align-items-center">
                <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                    <h1 class="m-0 mt-7 home-text tracking-tight text-6xl fw-bold" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                        Our Community
                    </h1>
                    <p class="m-0 mt-4 home-text text-lg leading-8" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                        Save the earth like earth save us.
                    </p>
                </div>
		    </div>
	    </div>
	</div>	



	<!-- Why us -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5 order-first order-xl-last">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Apa itu 
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							"Radar Community"
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							Radar Community adalah komunitas terbuka yang fokus pada pelestarian alam, edukasi lingkungan, dan aksi nyata untuk mendukung Tujuan Pembangunan Berkelanjutan (SDGs), khususnya SDG 15: Life on Land. Kami bergerak melalui kolaborasi, kampanye, dan kegiatan sosial yang berdampak.
						</p>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg9.jpg" class="object-fit-cover rounded-3" alt="presentation">
                        </div>
					</div>
				</div>
			</div>		
		</div>
	</div>



	<!-- Service 1 -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Active Community
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Komunitas Pecinta alam yang aktif
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							Radar Community merupakan komunitas pecinta alam yang aktif, melakukan kegiatan sukarelawan bagi alam dan ekosistem darat di setiap bulannya. 
						</p>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
                        </div>
					</div>
				</div>
			</div>		
		</div>
	</div>



	<!-- Service 2 -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5 order-first order-xl-last">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Knowledge Gain
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Akses kelas pecinta alam
						</p>
						<p class="m-0 mt-4 text-body text-lg leading-8">
							Sebelum terjun melakukan kegiatan sukarelawan, anggota baru diwajibkan untuk menonton video tutorial yang telah disiapkan oleh sukarelawan yang berpengalaman.
						</p>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg3.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
                        </div>
					</div>
				</div>
			</div>		
		</div>
	</div>



	<!-- Service 3 -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Solid Community
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Komunitas yang Solid
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							Komunitas yang memberikan solidaritas besar bagi siapapun yang bergabung, kami bukan hanya sekadar komunitas pecinta alam, melainkan keluarga besar (atau tempat mencari keluarga &#128514;).
						</p>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
                        </div>
					</div>
				</div>
			</div>		
		</div>
	</div>



	<!-- big centered image -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9 d-none d-xl-block">
		<div class="container">
			<div class="ratio ratio-16x9">
		        <img src="./assets/img/bg/Save-Raja-Ampat.jpg" class="object-fit-cover rounded-3" alt="presentation" loading="lazy">
		    </div>
		</div>
	</div>
    


   <!-- Testimonials -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide pb-5">
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/satu.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-xl leading-9">
                                    <p class="m-0">
                                       Namanya kelapa sawit ya pohon, ya kan? Kelapa sawit itu pohon, ada daunnya kan? Ya dia menyerap karbon dioksida, darimana kita dituduh, yang mboten aja orang-orang itu”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/clients/1.jpg" alt="Clinet Name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Prabowo Subianto</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">President of Indonesia</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/satu.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “Lingkungan hidup bukan warisan nenek moyang, tapi titipan anak cucu kita. Maka kewajiban kita adalah menjaga dan merawatnya“.


                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/clients/3.png" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Emi Salim</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">Mantan Mentri Lingkungan Hidup</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/satu.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        "Kalau kita jaga alam, alam akan jaga kita. Semua kebijakan pembangunan harus berdasar pada prinsip keberlanjutan." 
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/clients/2.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Bima Arya</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">Mantan Walikota Bogor</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>



	<!-- Client -->
	<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
		<div class="container">
			<div class="max-w-2xl">
				<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
					Our Partners
				</h2>
				<div class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
					We're fortunate to have incredible Partners.
				</div>
			</div>

			<div class="mt-4">
				<div class="glide glideHighLinear">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides align-items-center">
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo1.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo2.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo3.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo4.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo5.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo6.png" class="img-fluid" alt="clients">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo7.png" class="img-fluid" alt="clients" width="70px">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo8.png" class="img-fluid" alt="clients" width="70px">
								</div>
							</li>
							<li class="glide__slide">
								<div class="p-5">
									<img src="./assets/img/clients/logo9.png" class="img-fluid" alt="clients">
								</div>
							</li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- FAQs -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
	    <div class="container">
	        <div class="row gy-5 g-sm-5">
	            <div class="col-12 col-lg-5">
	                <h2 class="m-0 text-body-emphasis tracking-tight leading-10 text-2xl fw-bold">
	                    Frequently asked questions
	                </h2>
	                <p class="m-0 mt-3 text-body-secondary leading-7 text-base">
	                    Our
	                    <a href="javascript:;" class="text-decoration-none fw-semibold">
	                    Team
	                    </a>
	                    is here to help you if you have any questions.
	                </p>
	            </div>

	            <div class="col-12 col-lg-7">
	                <dl class="m-0">
	                    <div>
	                        <dt class="text-body-emphasis leading-7 text-base fw-semibold">
	                            Siapa saja yang bisa bergabung dengan Radar Community?
	                        </dt>
	                        <dd class="m-0 mt-2 text-body-secondary leading-7 text-base">
	                            Semua orang bisa bergabung, baik pelajar, mahasiswa, profesional, maupun masyarakat umum yang peduli terhadap isu lingkungan dan ingin berkontribusi secara positif. Tidak ada batasan latar belakang atau keahlian!. 
	                        </dd>
	                    </div>

	                    <div class="mt-4 pt-3">
	                        <dt class="text-body-emphasis leading-7 text-base fw-semibold">
	                            Apa manfaat bergabung dengan Radar Community?
	                        </dt>
	                        <dd class="m-0 mt-2 text-body-secondary leading-7 text-base">
	                            Sebagai anggota, kamu akan:

								Terlibat dalam kegiatan lingkungan (webinar, aksi bersih, penanaman pohon, dll) Mendapat akses ke pelatihan dan edukasi seputar ekosistem darat Memperluas jejaring dengan individu dan organisasi yang memiliki visi serupa Berkesempatan menjadi volunteer atau bagian dari tim inisiator proyek sosial
	                        </dd>
	                    </div>

	                    <div class="mt-4 pt-3">
	                        <dt class="text-body-emphasis leading-7 text-base fw-semibold">
	                            Bagaimana cara mendaftar menjadi anggota Radar Community?
	                        </dt>
	                        <dd class="m-0 mt-2 text-body-secondary leading-7 text-base">
	                            Kamu Cukup mengisi form yang terdapat di Website kami, setelah itu kami akan mengundang anda ke grup whatsapp Radar Community.
	                        </dd>
	                    </div>

	                    <div class="mt-4 pt-3">
	                        <dt class="text-body-emphasis leading-7 text-base fw-semibold">
	                            Apakah ada biaya untuk bergabung dengan Radar Community?
	                        </dt>
	                        <dd class="m-0 mt-2 text-body-secondary leading-7 text-base">
	                            Tidak, bergabung dengan Radar Community sepenuhnya gratis. Kami percaya bahwa aksi peduli lingkungan harus terbuka untuk semua orang. Namun, untuk beberapa kegiatan tertentu (seperti pelatihan bersertifikat atau aksi lapangan di luar kota), mungkin ada kontribusi sukarela yang akan diinformasikan sebelumnya.
	                        </dd>
	                    </div>
	                </dl>
	            </div>
	        </div>
	    </div>
	</div>



	<!-- Call to action -->
	<div class="pb-9 pt-7">
		<div class="container">
			<div class="py-6 position-relative text-white rounded-3">
				<img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" loading="lazy" alt="Meeting">

			   	<div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
			        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
			    </div>

				<div class="px-6">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 tracking-tight text-4xl fw-bold text-center">
							Sign in for Radar Community now
						</h2>
						<p class="m-0 mt-4 text-lg leading-8 text-center">
							Join and help our nature now
						</p>
						<div class="mt-4 pt-3 text-center">
							<a href="javascript:;" class="btn btn-lg btn-primary text-white text-sm fw-semibold">
								Join Now
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



		<footer class="overflow-hidden py-6 py-sm-7 py-xl-6 bg-body-tertiary">
	    
	    <div class="container">

	        <div class="d-flex flex-column flex-xl-row gap-5 justify-content-between align-items-xl-center">
	            <div class="order-first order-xl-last">
	                <ul class="nav row gy-4 gx-sm-4 row-cols-2 row-cols-sm-auto">
	                    <li class="nav-item">
	                        <a href="./blog.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> Blog</a>
	                    </li>
						<li class="nav-item">
	                        <a href="./about.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> About </a>
	                    </li>
	                    <li class="nav-item">
	                        <a href="./community.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> Community </a>
	                    </li>
	                  
	                    <li class="nav-item">
	                        <a href="./contact.php" class="p-0 text-body-secondary nav-link leading-6 text-sm"> Contact us </a>
	                    </li>
	                </ul>
	            </div>

	            <div class="">
	                <a href="./index.php" class="link-body-emphasis d-flex align-items-center text-decoration-none">
	                    <img src="./assets/logo/logo.png" height="24" alt="logo" loading="lazy">
						RADAR LIFE
	                </a>
	            </div>

	            <div class="order-last order-xl-first">
	                <p class="mb-0 text-body-secondary leading-6 text-sm">
	                    © 
	                    <span class="current-year"></span> 
						Radar Community
	                </p>
	            </div>
	        </div>
	    </div>  
	</footer>



	<!-- Back to top button -->
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>



	<!-- Bootstrap JavaScript: Bundle with Popper -->
	<script src="./assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/libraries/glide/glide.min.js"></script>
	<script src="./assets/libraries/aos/aos.js"></script>
	<script src="./assets/js/scripts.js"></script>



</body>
</html>