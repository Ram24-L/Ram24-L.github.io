<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>

    <!-- Include JavaScript for color modes -->
    <script src="./assets/js/color-modes.js" defer></script>

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
				<h4 class="px-1 home-text  rounded-3 text-base leading-6 fw-semibold" style="margin-top: 10px; font-size: 24px;">RADAR Community</h4>

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
	<div class="overflow-hidden position-relative">
	   <img  id="logo" src="./assets/img/bg/logo-light.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Meeting">

	   <div class="overlay position-absolute z-n1 top-0 h-100 w-100 bg-dark"
	        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);">
	    </div>

	    <div class="container">
	        <div class="min-vh-100 row align-items-center">
	        	<div class="col-12 col-xl-8">
		            <div class="pt-9 pt-md-10 pt-xl-11 pb-7 pb-md-8 pb-xl-9 max-w-2xl mx-auto mx-xl-0">
		                <div class="mt-4 pt-2">
		                    <div class="text-center text-xl-start">
		                        <h1 class="m-0  home-text tracking-tight text-6xl fw-bold" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
		                            Lindungi Ekosistem Darat Kita
		                        </h1>
		                        <p class="m-0 mt-4  home-text text-lg leading-8" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
		                            Bergabunglah bersama kami dalam melindungi lahan, hutan, satwa liar, dan tumbuhan asli,
demi memastikan planet yang sehat untuk generasi yang akan datang.
		                        </p>
		                        <div class="mt-4 pt-3 d-flex align-items-center justify-content-center justify-content-xl-start column-gap-3">
		                            <a href="contact.php" class="btn btn-lg btn-primary  home-text text-sm fw-semibold" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
		                                Contact us
		                            </a>
		                            <a href="#page" class="btn btn-lg  home-text icon-link icon-link-hover bg-body-secondary-hover text-sm leading-6 fw-semibold" data-aos-delay="300" data-aos="fade" data-aos-duration="3000">
		                                Learn more 
		                                <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
		                                <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
		                            </a>
		                        </div>
		                    </div>
		                </div>
		            </div>
	            </div>

	            <div class="col-12 col-xl-4">
	            	<div class="pt-3 pt-md-4 pt-xl-12 pb-2 pb-md-3 pb-xl-6">
	            		<!-- Button trigger modal -->
						<a class="video-play-button video-btn-modal position-relative" href="javascript:;"
							data-bs-toggle="modal" data-bs-target="#videoModal"
							data-bs-src="https://www.youtube.com/embed/KfjIaEP0EtY">
							<span class="top-50 start-50 translate-middle"></span>
						</a>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div> 



	<!-- Modal to embed vidoes!! -->
	<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content border-0" style="border-radius: 0.75rem;">
				<div class="modal-header border-0 p-0">
					<button type="button" class="btn-close bg-white border position-absolute top-0 end-0 translate-middle me-n3 me-sm-n5 mt-n4 rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body p-0">
					<div class="ratio ratio-16x9">
						<iframe class="embed-responsive-item iframeVideo" style="border-radius: 0.75rem;" allow="autoplay"></iframe>
					</div>
				</div>
				
			</div>
		</div>
	</div>



	<!-- Why Should we ?  -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-5 bg-body-tertiary">
	    <div class="container">
	        <div>
	            <div class="mx-auto max-w-2xl text-center">
					<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold" id="page">
						"Why Should We ? "
					</h2>
	                <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
	                    Mengapa kita harus menjaga ekosistem daratan kita ?
	                </p>
	                <p class="m-0 mt-4 text-body text-lg leading-8">
	                    ekosistem darat memegang peranan penting  <br>dalam kehidupan manusia di sekitarnya
	                </p>
	            </div>
	        </div>
	        <div>
	            <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/1.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Habitat Bagi 80% Spesies di bumi
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                                Lebih dari 80% spesies di bumi hidup di ekosistem darat. Menjaga hutan, padang rumput, dan lahan basah berarti melindungi keanekaragaman .
                            </p>
	                    </div>
	                </div>
      				
      				<div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/2.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Menjaga Keseimbangan Air dan Iklim
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                               Tumbuhan di daratan menyerap karbon dan mengatur siklus air yang sangat penting untuk mengurangi pemanasan global.
                            </p>
	                    </div>
	                </div>

	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/3.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Mendukung Kehidupan Manusia
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                                Ekosistem darat menyediakan makanan, air bersih, bahan obat-obatan, dan mata pencaharian bagi miliaran orang di seluruh dunia.
                            </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>     

	<!-- What Should we do-->
	</div>
		<div class="overflow-hidden py-7 py-sm-8 py-xl-5 bg-body-secondary">
	    <div class="container">
	        <div>
	            <div class="mx-auto max-w-2xl text-center">
					<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
						"What Should we do? "
					</h2>
	                <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
	                    Bagaimana Cara Untuk Berkontribusi Menjaga Ekosistem Daratan
	                </p>
	                <p class="m-0 mt-4 text-body text-lg leading-8">
	                    Kita dapat memulai berkontribusi untuk ekosistem daratan dari hal hal kecil
	                </p>
	            </div>
	        </div>
	        <div>
	            <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/4.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Menanam Pohon
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                                Lebih dari 80% spesies di bumi hidup di ekosistem darat. Menjaga hutan, padang rumput, dan lahan basah berarti melindungi keanekaragaman .
                            </p>
	                    </div>
	                </div>
      				
      				<div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/5.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                Mengurangi Sampah & Mendaur Ulang
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                               Tumbuhan di daratan menyerap karbon dan mengatur siklus air yang sangat penting untuk mengurangi pemanasan global.
                            </p>
	                    </div>
	                </div>

	                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/6.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                 Mendukung Konservasi Satwa dan Habitat
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                                Ekosistem darat menyediakan makanan, air bersih, bahan obat-obatan, dan mata pencaharian bagi miliaran orang di seluruh dunia.
                            </p>
	                    </div>
	                </div>
					
						                <div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="0" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/8.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                              Konsumsi Secara Bertanggung Jawab
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                               Pilih produk lokal, organik, dan ramah lingkungan. Hindari barang dari industri yang merusak hutan atau satwa liar.
                            </p>
	                    </div>
	                </div>
      				
      				<div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/9.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                            Dukung Kebijakan Lingkungan
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                              Gunakan suara dan pilihanmu untuk mendukung pemimpin, organisasi, atau gerakan yang memperjuangkan perlindungan lingkungan.

Gambar saran: Ilustrasi voting, kampanye, atau anak muda membawa poster lingkungan.
                            </p>
	                    </div>
	                </div>
						<div class="col pt-5 pt-xl-4">
	                    <div class="max-w-xl mx-auto mx-xl-0" data-aos-delay="200" data-aos="fade" data-aos-duration="1000">
                        	<div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                                <img src="./assets/img/bg/7.jpg" class="object-fit-cover rounded-3" alt="Service image" loading="lazy">
                            </div>

                            <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">
                                 Komunitas Relawan Pecinta alam
                            </h3>

                            <!-- Remove line-clamp-2 if you need more lines or add line-clamp-3 -->
                            <p class="m-0 mt-3 text-body-secondary line-clamp-3 text-sm leading-6">
                                Mengikuti komunitas relawan pecinta alam dapat membuat anda berkontribusi langsung untuk menjaga ekosistem darat
                            </p>
	                    </div>
	                </div>
	                
	            </div>
	        </div>

	        <div class="text-center pt-7">
	            
                </a>
	        </div>
	    </div>      
	</div>	

	<!-- radar community -->
	<div class="overflow-hidden py-7 py-sm-8 py-xl-10">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-between">
				<div class="col-12 col-xl-5 order-last">
					<div class="mx-auto max-w-2xl">
						<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
							Open Recruitment
						</h2>
						<p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
							Radar Community.
						</p>
						<p class="m-0 mt-4 text-body-secondary text-lg leading-8">
							Kami mengajak anak muda Indonesia untuk bergabung dengan komunitas Pecinta alam 'Radar Community' yang Berpusat di Taman Kencana Bogor.
						</p>
						<div class="mt-4">
							<a href="javascript:;" class="icon-link icon-link-hover text-decoration-none text-sm leading-6 fw-bold">
			                    Learn more 
			                    <span class="bi align-self-start left-to-right" aria-hidden="true">→</span>
			                    <span class="bi align-self-start right-to-left" aria-hidden="true">←</span>
			                </a>
						</div>
					</div>
				</div>

				<div class="col-12 col-xl-6">
					<div class="mx-auto max-w-2xl">
                        <div class="ratio ratio-4x3" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <img src="./assets/img/bg/10.jpg" class="object-fit-cover rounded-3" alt="about us" loading="lazy">
                        </div>
					</div>
				</div>
			</div>

			<!-- big image -->
		    <div class="ratio ratio-16x9 mt-7 mt-sm-8 mt-xl-9">
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



    <!-- Contact us -->
    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Join us
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight fw-bold">
                            RADAR COMMUNITY <br> Looking for Members
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
				<form class="row g-4"  id="myForm" method="POST" action="proses.php" >
				<div class="col-md-6">
					<label for="nameForm" class="form-label text-sm">
						Full name <span class="text-danger-emphasis">*</span>
					</label>
					<input type="text" class="form-control form-control-sm" name="nameForm" id="nameForm" style="border: 1px solid gray;" required placeholder="Full Name">
					<div class="invalid-feedback text-xs">
						Please enter your full name.
					</div>
				</div>

				<div class="col-md-6">
					<label for="emailForm" class="form-label text-sm">
						Email address <span class="text-danger-emphasis">*</span>
					</label>
					<input type="email" class="form-control form-control-sm" name="emailForm" id="emailForm" style="border: 1px solid gray;" required placeholder="Email">
					<div class="invalid-feedback text-xs">
						Please enter your email address.
					</div>
				</div>

				<div class="col-md-6">
					<label for="phoneForm" class="form-label text-sm">
						Phone number <span class="text-danger-emphasis">*</span>
					</label>
					<input type="text" class="form-control form-control-sm" name="phoneForm" id="phoneForm" style="border: 1px solid gray;" required placeholder="Phone Number">
					<div class="invalid-feedback text-xs">
						Please enter your phone number.
					</div>
				</div>

				<div class="col-md-6">
					<label for="subjectForm" class="form-label text-sm">
						Age <span class="text-danger-emphasis">*</span>
					</label>
					<input type="text" class="form-control form-control-sm" name="subjectForm" id="subjectForm" style="border: 1px solid gray;" required placeholder="Age">
					<div class="invalid-feedback text-xs">
						Please enter your age.
					</div>
				</div>

				<div class="col-md-6">
					<label for="genderForm" class="form-label text-sm">
						Gender <span class="text-danger-emphasis">*</span>
					</label>
					<select class="form-select form-select-sm" name="genderForm" id="genderForm" required style="border: 1px solid gray;">
						<option value="" disabled selected>Select your gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
					<div class="invalid-feedback text-xs">
						Please select your gender.
					</div>
				</div>

				<div class="col-md-6">
					<label for="provinceForm" class="form-label text-sm">
						Province <span class="text-danger-emphasis">*</span>
					</label>
					<select class="form-select form-select-sm" name="provinceForm" id="provinceForm" required style="border: 1px solid gray;">
						<option value="" disabled selected>Province</option>
						<option value="aceh">Aceh</option>
						<option value="bali">Bali</option>
						<option value="banten">Banten</option>
						<option value="bengkulu">Bengkulu</option>
						<option value="yogyakarta">DI Yogyakarta</option>
						<option value="jakarta">DKI Jakarta</option>
						<option value="gorontalo">Gorontalo</option>
						<option value="jambi">Jambi</option>
						<option value="jabar">Jawa Barat</option>
						<option value="jateng">Jawa Tengah</option>
						<option value="jatim">Jawa Timur</option>
						<option value="kalbar">Kalimantan Barat</option>
						<option value="kalsel">Kalimantan Selatan</option>
						<option value="kaltim">Kalimantan Timur</option>
						<option value="kalut">Kalimantan Utara</option>
						<option value="kepbangka">Kepulauan Bangka Belitung</option>
						<option value="kepri">Kepulauan Riau</option>
						<option value="lampung">Lampung</option>
						<option value="maluku">Maluku</option>
						<option value="malut">Maluku Utara</option>
						<option value="ntb">Nusa Tenggara Barat</option>
						<option value="ntt">Nusa Tenggara Timur</option>
						<option value="papua">Papua</option>
						<option value="papuabarat">Papua Barat</option>
						<option value="riau">Riau</option>
						<option value="sulbar">Sulawesi Barat</option>
						<option value="sulsel">Sulawesi Selatan</option>
						<option value="sulteng">Sulawesi Tengah</option>
						<option value="sultra">Sulawesi Tenggara</option>
						<option value="sulut">Sulawesi Utara</option>
						<option value="sumbar">Sumatera Barat</option>
						<option value="sumsel">Sumatera Selatan</option>
						<option value="sumut">Sumatera Utara</option>
					</select>
					<div class="invalid-feedback text-xs">
						Please select your province.
					</div>
				</div>

				<div class="col-12">
					<div class="form-check">
						<input class="form-check-input" style="border: 1px solid gray;" type="checkbox" id="gridCheck" name="terms" required>
						<label class="form-check-label text-sm" for="gridCheck">
							I agree to the terms &amp; conditions and privacy policy <span class="text-danger-emphasis">*</span>
						</label>
						<div class="invalid-feedback text-xs">
							Please agree to the terms &amp; conditions and privacy policy.
						</div>
					</div>
				</div>

				<div class="col-12 text-center pt-3">
					<button type="submit" class="btn btn-lg btn-primary home-text text-sm fw-semibold" id="sendMessage">
						Send message
					</button>
				</div>

				<!-- Alert message  -->
				<div class="col-12" id="messageStatus"></div>
			</form>
                    </div>
                </div>

                <div class="d-none d-xl-block col-12 col-xl-7" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div class="h-100 position-relative ms-xxl-5">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n1 rounded-5">
                            <img src="./assets/img/bg/bg7.jpg" class="w-100 h-100 rounded-3 object-fit-cover" loading="lazy" alt="Image description">
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
						RADAR Community
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
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 home-text">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>



	<!-- Bootstrap JavaScript: Bundle with Popper -->
	<script src="./assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/libraries/glide/glide.min.js"></script>
	<script src="./assets/libraries/aos/aos.js"></script>
	<script src="./assets/js/scripts.js"></script>
    <script src="./assets/php/contact/script.js"></script>


<script>
document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault(); // cegah reload halaman

    const form = e.target;
    const formData = new FormData(form);
    const statusDiv = document.getElementById("messageStatus");

    fetch("proses.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // pastikan proses.php kirim JSON
    .then(data => {
        if (data.success) {
            statusDiv.innerHTML = `
                <div class="alert alert-success" role="alert">
                    ✅ Data berhasil dikirim!
                </div>`;
            form.reset();
        } else {
            statusDiv.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    ❌ Gagal mengirim data. Silakan coba lagi.
                </div>`;
        }
    })
    .catch(error => {
        statusDiv.innerHTML = `
            <div class="alert alert-danger" role="alert">
                ⚠️ Terjadi kesalahan: ${error.message}
            </div>`;
    });
});

</script>
<script>
  const updateThemeImage = (theme) => {
  const logo = document.getElementById("logo");
  if (!logo) {
    console.warn("Logo tidak ditemukan");
    return;
  }

  // Tambahkan efek fade-out
  logo.classList.add("fade-out");

  setTimeout(() => {
    // Ganti gambar setelah efek fade-out
    logo.src = theme === "dark"
      ? "./assets/img/bg/logo-dark.jpg"
      : "./assets/img/bg/logo-light.jpg";

    // Setelah gambar berubah, tunggu sebentar lalu fade-in
    logo.onload = () => {
      logo.classList.remove("fade-out");
    };
  }, 300); // Sesuaikan dengan waktu transisi CSS
};


  document.querySelectorAll('[data-bs-theme-value]').forEach(btn => {
    btn.addEventListener('click', () => {
      const theme = btn.getAttribute('data-bs-theme-value');
      document.documentElement.setAttribute('data-bs-theme', theme);
      updateThemeImage(theme);
    });
  });
</script>

</body>
</html>