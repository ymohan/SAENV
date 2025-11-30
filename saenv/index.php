<?php
session_start();
// Generate a token if one doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>SAENV | Environmental Consultants & Compliance Experts Victoria</title>
    <meta name="description" content="SAENV provides expert environmental management, waste classification, EIA, and EPA compliance services across Victoria. Accredited ISO 14001 auditors.">
    <meta name="keywords" content="Environmental Consultant, EPA Victoria, Waste Classification, Soil Testing, ISO 14001, Compliance Audit, SAENV">
    <meta name="author" content="SAENV">
    <meta name="robots" content="index, follow">

    <!-- Performance: Preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Stylesheets -->	
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	
	<!--favicons-->
	<link rel="icon" type="image/svg+xml" href="../saenv/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/saenv/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../saenv/favicons/favicon-96x96.png">
	<link rel="shortcut icon" href="../saenv/favicons/favicon.ico">
	<style>
		.bi-telephone-fill{
			background-color: #fff;
			color: #000;
			/*padding: 1rem 2rem;*/
			border-radius: 50%;
			width: 2rem;
			height: 2rem;
			line-height: 2rem;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		
		.ms-lg-3 .btn-phone {			
			display: flex !important;
			justify-content: space-between;
			align-items: center;
			padding: 5px 1rem 7px 5px !important;
			margin: 0 auto;
		}
		
		.btn-close{
			position: relative;
			top: 50px;	
			border: 1px solid;
			border-radius: 50%;
		}
		.btn-close:hover {
			color: #f58920 !important;
		}
		
		.navbar-toggler, .btn-close{
			outline: none !important;
			box-shadow: none !important;
		}
		.common-subtitle {
			display: inline-flex;
			align-items: center;
			gap: 10px;
			justify-content: center;
			font-size: 20px;
			line-height: 120%;
			margin-bottom: 20px;
		}
		
		.flex-sm-row .btn-light{
			font-size: 1rem;
			padding: 10px 10px 8px 9px !important
		}
		@media (max-width:1200px){
			.btn-hero-submit {
				max-width: 100% !important;
				padding: 0.8rem 0;
			}
			.navbar>.container{
				max-width: 100% !important;
			}
			.nav-link {
				font-size: 0.9rem;
				padding-left: 0.2rem !important;
				padding-right: 0.2rem !important;
			}
			.btn-success-1 {
				padding: 0.5rem 1rem 0.5rem !important;
			}

		}
		@media(max-width:480px){
			.btn-success-1.px-5, .btn-outline-light .px-5 {
				padding: 0.5rem!important;
			}
		}
	</style>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="80">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
      <div class="container px-4">
        <a class="navbar-brand" href="#home">
            <span class="logo">
                <!-- Desktop Logo (Default) -->
                <img src="../saenv/images/logo/logo.svg" width="240" height="100" alt="SAENV" class="logo-desktop" onerror="this.src='https://via.placeholder.com/240x100/ffffff/003366?text=SAENV+Logo'" />
                <!-- Mobile Logo (< 480px) -->
                <img src="../saenv/images/logo/logo.svg" width="240" height="100" alt="SAENV" class="logo-mobile" onerror="this.src='https://via.placeholder.com/240x100/ffffff/003366?text=SAENV+Mobile'" />
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end">
		    <ul class="navbar-nav align-items-center gap-3 gap-lg-0">
				<li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
				<li class="nav-item"><a class="nav-link" href="#why-us">Why Us</a></li>
				<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
				<li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
				<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
				<li class="nav-item ms-lg-3">
					<a href="tel:0406744107" class="btn btn-phone px-4 py-2 d-flex align-items-center gap-2">
						<i class="bi bi-telephone-fill"></i> 0406 744 107
					</a>
				</li>
		    </ul>
        </div>
      </div>
    </nav>

    <!-- Mobile Offcanvas Menu -->
    <div class="offcanvas offcanvas-top h-100 bg-dark text-white" tabindex="-1" id="offcanvasMenu" aria-modal="true" role="dialog">  
		<div class="offcanvas-header justify-content-end p-4">
			<button type="button" class="btn-close btn-close-white fs-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	    </div>		  
		<div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">			
			<nav class="nav flex-column text-center staggered-menu">
			    <a class="nav-link overlay-link fs-1 fw-light text-white my-2 position-relative" href="#home">Home</a>
			    <a class="nav-link overlay-link fs-1 fw-light text-white my-2 position-relative" href="#about">About</a>
			    <a class="nav-link overlay-link fs-1 fw-light text-white my-2 position-relative" href="#why-us">Why Us</a>
			    <a class="nav-link overlay-link fs-1 fw-light text-white my-2 position-relative" href="#services">Process</a>
				<a class="nav-link overlay-link fs-1 fw-light text-white my-2 position-relative" href="#process">Process</a>
			    <a class="nav-link overlay-link fs-1 fw-light text-white my-2 position-relative" href="#contact">Contact</a>
			</nav>
		</div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Left Side: Dynamic Text Slider -->
                <div class="col-lg-6">
                    <!-- Static Badge -->
                    <div class="d-inline-block py-1 px-3 rounded-pill bg-white-1 bg-opacity-10 border border-white border-opacity-25 mb-3 text-white small fw-bold ls-1">
                        EPA Accredited • ISO 14001 Certified
                    </div>

                    <!-- Slider Container -->
                    <div class="hero-slider-container mb-4">
                        <!-- Slide 1 -->
                        <div class="hero-slide active">
                            <h1 class="display-4 fw-800 lh-1 mb-3">
                                Your Partner in Simplifying <br>
                            </h1>
							<span class="highlight mt-3">Complex Environmental Issues!</span>
                            <p class="lead opacity-90">
                                Our environmental consulting services are designed to meet the diverse needs of businesses, local governments, and individuals alike.
                            </p>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="hero-slide">
                            <h1 class="display-4 fw-800 lh-1 mb-3">
                                From Waste Classification to <br>
                            </h1>
							<span class="highlight">Environmental Management</span>
                            <p class="lead opacity-90">
                                We offer a comprehensive suite of services to address your specific challenges and goals.
                            </p>
                        </div>

                        <!-- Slide 3 -->
                        <div class="hero-slide">
                            <h1 class="display-4 fw-800 lh-1 mb-3">
                                Environmental Consultancy <br>
                            </h1>
							<span class="highlight">Simplifying Compliance</span>
                            <p class="lead opacity-90">
                                Tailored strategies to minimize impact, ensure compliance, and promote sustainability for businesses and local governments.
                            </p>
                        </div>
                    </div>

                    <!-- Static Buttons (UX Best Practice: Keeps CTA stable) -->
                    <div class="d-flex gap-3 flex-column flex-sm-row">
                        <a href="#leadForm" class="btn btn-success-1 btn-lg rounded-pill px-5 fw-light border-0">Explore Services</a>                       
                    </div>
                </div>

                <!-- Right Side: Static Consultation Form -->
                <div class="col-lg-6">
                    <div class="hero-form-card">
                        <h3 class="h4 fw-bold mb-2">Request Consultation</h3>
                        <p class="text-muted small mb-4">Secure your free compliance assessment today.</p>
                        
                        <form id="leadForm" novalidate>
                            <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">                         
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required placeholder="Your Full Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required placeholder="0400 000 000">
                                </div>
                                <div class="col-12">
                                    <label for="company" class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="company" name="company" required placeholder="Your Business Ltd">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="abc@example.com">
                                </div>
                                <div class="col-12">
                                    <label for="challenge" class="form-label">Primary Challenge <span class="text-danger">*</span></label>
                                    <select class="form-select" id="challenge" name="challenge" required>
                                        <option value="" selected disabled>Select your main concern...</option>
                                        <option value="Waste Classification">Waste Classification</option>
                                        <option value="EPA Compliance">EPA Compliance / Audit</option>
                                        <option value="Contaminated Land">Contaminated Land</option>
                                        <option value="ISO 14001">ISO 14001 Certification</option>
                                        <option value="Incident Response">Incident Response</option>
                                        <option value="Other">General Enquiry</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-hero-submit w-100 w-50">Request Consultation</button>
                                </div>
                            </div>
                            <div id="formMessage" class="mt-3 text-center small fw-bold"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Stats -->
    <section class="stats-banner py-5" aria-label="Company achievements and credentials">
	    <div class="container">
			<div class="row text-center g-4 align-items-center">
				<div class="col-6 col-md-3">
					<i class="bi bi-award-fill stats-icon" aria-hidden="true"></i>
					<h5 class="fw-bold mb-1">250+</h5>
					<p class="small text-muted mb-0">Audits Completed</p>
				</div>

			    <div class="col-6 col-md-3">
					<i class="bi bi-briefcase-fill stats-icon" aria-hidden="true"></i>
					<h5 class="fw-bold mb-1">15+ Years</h5>
					<p class="small text-muted mb-0">Industry Experience</p>
			    </div>

			    <div class="col-6 col-md-3">
					<i class="bi bi-people-fill stats-icon" aria-hidden="true"></i>
					<h5 class="fw-bold mb-1">150+</h5>
					<p class="small text-muted mb-0">Clients Served</p>
			    </div>

				<div class="col-6 col-md-3">
					<i class="bi bi-shield-check stats-icon" aria-hidden="true"></i>
					<h5 class="fw-bold mb-1">99%</h5>
					<p class="small text-muted mb-0">Compliance Success Rate</p>
				</div>
			</div>
		</div>
	</section>


    <!-- About Section -->
    <section class="abt-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="hero-image">
                        <img src="../saenv/images/abt4.webp" 
                             alt="Environmental landscape South Australia" 
                             loading="lazy">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">                    
					<div class="common-subtitle text-primary-green">
						<img alt="icon-2" src="../saenv/images/icon-2.svg"> <span class="text-primary-green text-uppercase">Who We Are </span>
					</div>
                    <h2 class="display-6 fw-bold mb-4">Your Partner in Sustainable Solutions</h2>
                    <p class="lead mb-4">
                        At SAENV, we don't just check boxes. We work closely with you to understand your unique requirements and develop strategies that deliver measurable results.
                    </p>
                    <p class="lead mb-4">
                        Whether you need complex waste classification, environmental impact assessments, or a full ISO 14001 audit, we simplify the science so you can focus on your operations.
                    </p>
                    <a href="#services" class="btn-learn-more">
                        See How We Help <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  Why Choose Us Section -->
    <section class="wcu-section py-5" id="why-us">
        <div class="container py-4">
            <div class="text-center mb-5 position-relative" style="z-index: 2;">
                <div class="common-subtitle text-primary-green">
					<img alt="icon-2" src="../saenv/images/icon-2.svg"> <span class="text-primary-green text-uppercase">Why Choose Us </span>
				</div>
                <h2 class="display-5 fw-bold">The SAENV Difference</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Technical expertise meets practical application.</p>
            </div>
            
            <div class="row g-4">
                <!-- Item 1 -->
                <div class="col-md-6 col-xl-3">
                    <div class="wcu-card-modern">
                        <div class="wcu-icon-wrapper">
                            <i class="bi bi-trophy-fill"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Deep Expertise</h4>
                        <p class="text-muted mb-0">Extensive experience with complex environmental legislation across Victoria and SA.</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-md-6 col-xl-3">
                    <div class="wcu-card-modern">
                        <div class="wcu-icon-wrapper">
                            <i class="bi bi-puzzle-fill"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Tailored Solutions</h4>
                        <p class="text-muted mb-0">No templates. We customize every strategy to meet your specific site constraints.</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-md-6 col-xl-3">
                    <div class="wcu-card-modern">
                        <div class="wcu-icon-wrapper">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Innovation</h4>
                        <p class="text-muted mb-0">We leverage the latest technologies and data modeling to save you time and budget.</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="col-md-6 col-xl-3">
                    <div class="wcu-card-modern">
                        <div class="wcu-icon-wrapper">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Collaboration</h4>
                        <p class="text-muted mb-0">We don't just report; we partner with you, stakeholders, and communities for success.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
		<div class="container py-5">
			<div class="text-center mb-5">
			  <h2 class="display-5 fw-bold">Our Services</h2>
			  <p class="lead text-muted mx-auto" style="max-width: 700px;">Comprehensive environmental solutions tailored to your project needs.</p>
			</div>

			<div class="row g-4">
			 <!-- Service 1 -->
				<div class="col-md-6 col-lg-4">
					<div class="service-card-1 bg-success-1 text-white">
					  <div class="icon-box-1"><i class="bi bi-envelope"></i></div>
					  <h4 class="text-white">Need a Solution ?</h4>
					  <p class="text-white">Preliminary and detailed site investigations (PSI/DSI) and remediation action plans for land development.</p>
					  <div class="service-benefit-1 text-white"><i class="bi bi-check-circle-fill me-2"></i>Unlock land value</div>
					</div>
				</div>
				<!-- Service 2 -->
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
					  <div class="icon-box"><i class="bi bi-truck"></i></div>
					  <h4>Waste Classification</h4>
					  <p class="text-muted">Soil & industrial waste testing, EPA-approved classification, Waste Tracker generation, and full legal consignment services.</p>
					  <div class="service-benefit"><i class="bi bi-check-circle-fill me-2"></i>Avoid heavy fines</div>
					</div>
				</div>
				<!-- Service 3 -->
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
					  <div class="icon-box"><i class="bi bi-recycle"></i></div>
					  <h4>Waste Management</h4>
					  <p class="text-muted">Custom waste management plans and recycling strategies to reduce pollution and meet circular economy targets.</p>
					  <div class="service-benefit"><i class="bi bi-check-circle-fill me-2"></i>Reduce disposal costs</div>
					</div>
				</div>
				<!-- Service 4 -->
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
					  <div class="icon-box"><i class="bi bi-file-earmark-bar-graph"></i></div>
					  <h4>Impact Assessment (EIA)</h4>
					  <p class="text-muted">Detailed assessments, risk management programs, and monitoring plans to secure statutory approvals.</p>
					  <div class="service-benefit"><i class="bi bi-check-circle-fill me-2"></i>Fast-track approvals</div>
					</div>
				</div>
				<!-- Service 5 -->
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
					  <div class="icon-box"><i class="bi bi-gear-wide-connected"></i></div>
					  <h4>ISO 14001 Systems</h4>
					  <p class="text-muted">System design, gap analysis, and implementation support for Environmental Management Systems (EMS).</p>
					  <div class="service-benefit"><i class="bi bi-check-circle-fill me-2"></i>Win government tenders</div>
					</div>
				</div>
				<!-- Service 6 -->
				<div class="col-md-6 col-lg-4">
					<div class="service-card">
					  <div class="icon-box"><i class="bi bi-exclamation-triangle"></i></div>
					  <h4>Incident Investigations</h4>
					  <p class="text-muted">Root-cause analysis (ICAM) to identify issues and turn negative events into improvement opportunities.</p>
					  <div class="service-benefit"><i class="bi bi-check-circle-fill me-2"></i>Prevent recurrence</div>
					</div>
				</div>         
			</div>
		</div>
    </section>

	<!--process-->
	<section class="py-5 bg-light position-relative" id="process">
		<div class="container py-5">
			<div class="text-center mb-5">
				<div class="common-subtitle text-primary-green">
						<img alt="icon-2" src="../saenv/images/icon-2.svg"> <span class="text-primary-green text-uppercase">Our Process </span>
					</div>
				<h2 class="display-5 fw-bold mt-2">How We Work</h2>
				<p class="text-muted mx-auto" style="max-width: 600px;">
					A streamlined approach to compliance and environmental management.
				</p>
			</div>

			<div class="process-timeline-wrapper">
				<div class="timeline-track d-none d-lg-block"></div>
				<div class="row g-4">
					<div class="col-xl-3 col-md-6 d-flex flex-column align-items-center">
						<div class="step-visuals text-center w-100">
							<div class="step-pill">STEP : 01</div>
							<div class="step-vertical-line"></div>
							<div class="step-dot"></div>
						</div>
						<div class="process-card mt-4 flex-grow-1 w-100">
							<h5 class="fw-bold text-navy">Consult</h5>
							<p class="text-dark text-start small mb-0">We assess your site, define regulatory requirements, and scope the project to ensure full EPA compliance.</p>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex flex-column align-items-center">
						<div class="step-visuals text-center w-100">
							<div class="step-pill">STEP : 02</div>
							<div class="step-vertical-line"></div>
							<div class="step-dot"></div>
						</div>
						<div class="process-card mt-4 flex-grow-1 w-100">
							<h5 class="fw-bold text-navy">Investigate</h5>
							<p class="text-dark text-start small mb-0">Comprehensive sampling, soil testing, and data modeling to understand specific site risks and contamination levels.</p>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex flex-column align-items-center">
						<div class="step-visuals text-center w-100">
							<div class="step-pill">STEP : 03</div>
							<div class="step-vertical-line"></div>
							<div class="step-dot"></div>
						</div>
						<div class="process-card mt-4 flex-grow-1 w-100">
							<h5 class="fw-bold text-navy">Strategize</h5>
							<p class="text-dark text-start small mb-0">Developing the Remediation Action Plan (RAP) or compliance strategy tailored to your budget.</p>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 d-flex flex-column align-items-center">
						<div class="step-visuals text-center w-100">
							<div class="step-pill">STEP : 04</div>
							<div class="step-vertical-line"></div>
							<div class="step-dot"></div>
						</div>
						<div class="process-card mt-4 flex-grow-1 w-100">
							<h5 class="fw-bold text-navy">Deliver</h5>
							<p class="text-dark text-start small mb-0">Final reporting, EPA submissions, and ongoing monitoring to ensure long-term approval.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
    <!-- Final CTA -->
    <section class="final-cta py-5 text-center" id="contact">
        <div class="container py-lg-5">
            <h2 class="display-4 fw-bold mb-4">Ready to Eliminate Risk?</h2>
            <p class="lead mb-5 opacity-90" style="max-width: 800px; margin: 0 auto;">
                Book your free compliance audit and discover exactly where your business is exposed — before it becomes expensive.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                <a href="tel:0406744107" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary-green">
                    <i class="bi bi-telephone-fill me-2"></i> 0406 744 107
                </a>
                <a href="#leadForm" class="btn btn-outline-light btn-lg-1 rounded-pill px-5 fw-bold">
                    Book Online
                </a>
            </div>
        </div>
    </section>
    <!-- Accreditations Section -->
    <section class="py-5 bg-white border-top border-bottom">
        <div class="container">
            <div class="text-center mb-4">
                <h5 class="text-center display-5 fw-bold ls-1">Our Accreditations & Memberships</h5>
            </div>
            <!-- Updated to support 5 cards of equal size -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 align-items-center justify-content-center text-center py-5">
                <div class="col">
                    <div class="accreditation-card">
                        <p> EPA Victoria <br> Accredited Consigner </p>
                    </div>
                </div>
                <div class="col">
                    <div class="accreditation-card">
                        <img src="../saenv/images/accredits/1.webp" alt="Environment Institute ANZ" class="img-fluid accreditation-img" loading="lazy">
                    </div>
                </div>
                <div class="col">
                    <div class="accreditation-card">
                        <img src="../saenv/images/accredits/2.webp" alt="Bureau Veritas" class="img-fluid accreditation-img" loading="lazy">
                    </div>
                </div>
                <div class="col">
                    <div class="accreditation-card">
                        <img src="../saenv/images/accredits/3.webp" alt="Environmental Compliance" class="img-fluid accreditation-img" loading="lazy">
                    </div>
                </div>
                <!-- 5th Placeholder Card (Duplicate of first logo for demonstration) -->
                <div class="col">
                    <div class="accreditation-card">
                        <img src="../saenv/images/accredits/4.webp" alt="Accredited Partner" class="img-fluid accreditation-img" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-5">
                    <h3 class="h4 fw-bold mb-3 text-primary-green d-flex align-items-center">
						<img src="../saenv/images/logo/logo2.svg" alt="SAENV Logo" class="me-2" style="height: 70px; width: auto; object-fit: contain;">
						
					</h3>
                    <p class="text-white mb-4">
                        EPA Victoria Accredited Environmental Consultants serving businesses and local governments.
                    </p>
                    <div class="text-white">
                        <p class="mb-2"><i class="bi bi-geo-alt me-2"></i> 8 Fawkner Road, Manor Lakes, VIC 3024</p>
                        <p class="mb-2"><i class="bi bi-envelope me-2"></i> admin@saenv.com.au</p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-6">
                    <h5 class="text-white mb-3">Company</h5>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2"><a href="#home" class="text-decoration-none text-white">Home</a></li>
                        <li class="mb-2"><a href="#about" class="text-decoration-none text-white">About Us</a></li>
                        <li class="mb-2"><a href="#why-us" class="text-decoration-none text-white">Why Us</a></li>
						<li class="mb-2"><a href="#services" class="text-decoration-none text-white">Services</a></li>
                        <li class="mb-2"><a href="#contact" class="text-decoration-none text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="text-white mb-3">Services</h5>
                    <ul class="list-unstyled text-white">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-white">Waste Mgmt</a></li>
						<li class="mb-2"><a href="#" class="text-decoration-none text-white">Waste Consignment</a></li>
						<li class="mb-2"><a href="#" class="text-decoration-none text-white">EIA</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-white">Compliance</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-white">ISO 14001</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4 opacity-25">
            <div class="row small text-white">
                <div class="col-md-6 text-center text-md-start">
					&copy; <span id="copyright-year">2025</span> SAENV Environmental Consulting.
				</div>
                <div class="col-md-6 text-center text-md-end">
                    <span class="idendity">ABN: 18 474 829 423</span> | Privacy Policy
                </div>
            </div>
        </div>
    </footer>
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
		<svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z"></path>
            <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z"></path>
        </svg>
	</div>

    <!-- Scripts -->
    <script src="vendor/js/bootstrap.bundle.min.js"></script>

<script>
    // Pure Vanilla JS for Scroll Progress
    document.addEventListener("DOMContentLoaded", function() {
        var progressPath = document.querySelector('.progress-wrap path');
        var pathLength = progressPath.getTotalLength();

        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

        var offset = 50;

        // 1. Define the update function (handles both progress bar AND visibility)
        var updateProgress = function () {
            var scroll = window.pageYOffset;
            var height = document.documentElement.scrollHeight - window.innerHeight;
            var progress = pathLength - (scroll * pathLength / height);
            progressPath.style.strokeDashoffset = progress;

            // Logic moved inside here so it runs on load AND on scroll
            if (scroll > offset) {
                document.querySelector('.progress-wrap').classList.add('active-progress');
            } else {
                document.querySelector('.progress-wrap').classList.remove('active-progress');
            }
        }

        // 2. Call it immediately to set state on page load/refresh
        updateProgress();

        // 3. Bind to scroll event
        window.addEventListener('scroll', updateProgress);

        // 4. Click Handler
        document.querySelector('.progress-wrap').addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
            return false;
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
	
		// --- 1. DYNAMIC YEAR (NEW) ---
		document.getElementById('copyright-year').textContent = new Date().getFullYear();
        
        // --- CONFIGURATION: VALIDATION PATTERNS ---
        const patterns = {
			email: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/,
			phone: /^(\+?61|0)[2-478]([ ]?[0-9]){8}$/ // Basic AU Phone regex
		};

        // --- HELPER FUNCTIONS ---

        // 1. Clear form and remove visual errors
        const resetFormFields = (form) => {
            form.reset(); 
            form.querySelectorAll('.field-error').forEach(el => el.remove());
            form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
        };


        // 2. Show Error Helper
        const showFieldError = (field, message) => {
			field.classList.add('is-invalid');
			// Check if error message already exists
			let errorDiv = field.nextElementSibling;
			if (!errorDiv || !errorDiv.classList.contains('field-error')) {
				errorDiv = document.createElement('div');
				errorDiv.className = 'field-error text-danger small mt-1';
				field.parentNode.insertBefore(errorDiv, field.nextSibling);
			}
			errorDiv.textContent = message;
		};

        // --- CORE LOGIC ---

        // Navbar Visuals
        const navbar = document.getElementById('navbar');
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    if (window.scrollY > 10) navbar.classList.add('scrolled');
                    else navbar.classList.remove('scrolled');
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Scroll Spy (IntersectionObserver)
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
        const sections = document.querySelectorAll("section");
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove("active");
                        if (link.getAttribute("href") === `#${id}`) link.classList.add("active");
                    });
                }
            });
        }, { rootMargin: "-50% 0px -50% 0px" });

        sections.forEach(section => observer.observe(section));

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offcanvasEl = document.getElementById('offcanvasMenu');
                    const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
                    if (offcanvas) offcanvas.hide();

                    const offsetPosition = target.getBoundingClientRect().top + window.pageYOffset - 80;
                    window.scrollTo({ top: offsetPosition, behavior: "smooth" });
                    
                    navLinks.forEach(link => link.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });

        // Hero Slider
        const slides = document.querySelectorAll('.hero-slide');
        if(slides.length > 0) {
            let currentSlide = 0;
            setInterval(() => {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }, 5000);
        }

        // --- FORM SUBMISSION HANDLER ---
        const leadForm = document.getElementById('leadForm');
			if (leadForm) {
			const msg = document.getElementById('formMessage');
			let msgTimer = null;

			// Input Listener: Clear errors as user types
			leadForm.querySelectorAll('input, select').forEach(field => {
				const clearError = () => {
					if (field.classList.contains('is-invalid')) {
						field.classList.remove('is-invalid');
						const errEl = field.nextElementSibling;
						if (errEl && errEl.classList.contains('field-error')) errEl.remove();
					}
				};
				field.addEventListener('input', clearError);
				field.addEventListener('change', clearError);
			});

			leadForm.addEventListener('submit', function (e) {
				e.preventDefault();
				const btn = this.querySelector('button[type="submit"]');
				
				// Clean up previous errors
				this.querySelectorAll('.field-error').forEach(el => el.remove());
				this.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
				if (msgTimer) clearTimeout(msgTimer);

				// Validation Logic
				let formValid = true;
				const requiredFields = this.querySelectorAll('[required]');

				requiredFields.forEach(field => {
					const val = field.value.trim();
					const name = field.getAttribute('name');
					const label = field.previousElementSibling ? field.previousElementSibling.textContent : name;
					const fieldNameDisplay = label.replace('*', '').trim();

					if (!val) {
						formValid = false;
						showFieldError(field, `${fieldNameDisplay} is required.`);
						return;
					}

					if (name === 'email' && !patterns.email.test(val)) {
						formValid = false;
						showFieldError(field, "Please enter a valid email address.");
					}

					// Phone Validation (Optional: adjust regex in patterns object)
					if (name === 'phone' && !patterns.phone.test(val.replace(/\s/g, ''))) {
						formValid = false;
						showFieldError(field, "Enter a valid phone number.");
					}
				});

				if (!formValid) {
					msg.innerHTML = '<div class="text-danger mt-2">Please fix the errors above.</div>';
					msgTimer = setTimeout(() => { msg.innerHTML = ''; }, 4000);
					return;
				}

				// Submit
				btn.disabled = true;
				const originalBtnText = btn.textContent;
				btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Sending...';

				const formData = new FormData(this);
				
				fetch('send-mail.php', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					btn.disabled = false;
					if (data.success) {
						btn.textContent = 'Message Sent!';
						btn.classList.replace('btn-hero-submit', 'btn-success'); // Ensure btn-success class exists in CSS or uses Bootstrap
						msg.innerHTML = `<div class="text-success mt-2">${data.message}</div>`;
						
						resetFormFields(this);

						setTimeout(() => {
							btn.textContent = originalBtnText;
							btn.classList.replace('btn-success', 'btn-hero-submit');
							msg.innerHTML = '';
						}, 4000);
					} else {
						throw new Error(data.message || 'Submission failed');
					}
				})
				.catch(error => {
					btn.disabled = false;
					btn.textContent = originalBtnText; // Revert text on error
					msg.innerHTML = `<div class="text-danger mt-2">${error.message || 'Error sending message.'}</div>`;
					msgTimer = setTimeout(() => { msg.innerHTML = ''; }, 4000);
				});
			});
		}
    });
</script>
</body>
</html>
