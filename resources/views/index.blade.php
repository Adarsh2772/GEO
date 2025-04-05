<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GEO Business Solutions PVT. LTD. | Home Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/geo_favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/geo-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="social-links d-none d-md-flex align-items-center">
            </div>
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">finance@geobiz.in</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 9766562525</span></i>
                {{-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91 7030493488</span></i> --}}
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/">
                <img src="{{ asset('assets/img/logo-3.png') }}" alt="GEO logo">

            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li class="dropdown"><a href="#"><span>Services</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#services">Finance </a></li>
                            <li><a href="#RERA">RERA</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#choseus">Why Choose Us?</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container w-50-l-22" data-aos="zoom-out" data-aos-delay="100">
            <h1 style="color: #fff;">Innovative Finance Solutions to Turn Dreams into Reality</h1>
            <h2 style="color: #fff;">At GEO Business Solutions PVT. LTD., we are your strategic partners, dedicated to
                simplifying the complex journey between you and financial institutions.</h2>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <div class="container mt-5">
            <div class="row g-4 p-4">
                <!-- Personal Loan Card -->
                <div class="col-md-4">
                    <div class="card h-100 d-flex flex-column zoom-effect">
                        <img src="{{ asset('assets/img/Competitive-Interest-Rates.png') }}" class="card-img-top"
                            alt="Personal Loan">
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-uppercase fw-bold text-muted">Competitive Interest Rates</h6>
                            <h5 class="card-title">Affordable financing for your growing business.</h5>
                            <p class="card-text">
                                Unlock financing opportunities with competitive rates tailored to meet your business
                                needs.
                            </p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#detailsModal">
                                Know More <i class="bx bxs-chevron-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="detailsModalLabel">Why Competitive Rates Matter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>High interest rates can eat into your profitability, affecting your business's growth
                                    trajectory. Securing loans at competitive rates helps ensure that more of your
                                    resources are directed toward building your business rather than servicing debt.</p>
                                <h5 class="fw-bold">Our Offerings</h5>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>1. Multiple Loan Options:</strong> Choose from a variety of loans, such
                                        as construction finance, term loans, or loans against property, each designed to
                                        cater to specific needs. Our team ensures you select the most affordable and
                                        suitable option for your project.
                                    </li>
                                    <li class="list-group-item">
                                        <strong>2. Transparent Terms:</strong> No hidden charges or surprises—our
                                        transparent loan terms empower you to plan your finances confidently.
                                    </li>
                                    <li class="list-group-item">
                                        <strong>3. Flexible Repayment Plans:</strong> Customize repayment schedules
                                        based on your cash flow, offering convenience and reducing financial strain.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home Loan Card -->
                <div class="col-md-4">
                    <div class="card h-100 d-flex flex-column zoom-effect">
                        <img src="{{ asset('assets/img/Cost-Optimization.png') }}" class="card-img-top"
                            alt="Home Loan">
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-uppercase fw-bold text-muted">Reduce Loan Expenses</h6>
                            <h5 class="card-title">Cut costs, maximize savings on your loans.</h5>
                            <p></p>
                            <p class="card-text">
                                Streamline your finances by minimizing loan costs.
                            </p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#loanExpenseModal">
                                Know More <i class="bx bxs-chevron-right ms-1"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="loanExpenseModal" tabindex="-1"
                            aria-labelledby="loanExpenseModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="loanExpenseModalLabel">Why It’s Important
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Loan expenses, including interest payments and fees, can significantly impact
                                            your cash flow and profitability. Optimizing your loan-related costs ensures
                                            that more of your resources are available for business growth and
                                            operational needs.</p>
                                        <h5 class="fw-bold">How We Help You Reduce Loan Expenses</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <strong>1. Loan Structure Analysis:</strong> We review your existing
                                                loan portfolio to identify high-cost loans and suggest strategies to
                                                refinance or restructure them at lower interest rates or better terms.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>2. Negotiate Better Terms:</strong> Our experts work with
                                                lenders to negotiate reduced interest rates, extended tenures, or waiver
                                                of prepayment penalties, ensuring you save money in the long run.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>3. Optimize Repayment Plans:</strong> Tailor your repayment
                                                schedules to align with your cash flow, avoiding unnecessary penalties
                                                or excess interest accumulation.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>4. Identify Hidden Charges:</strong> We scrutinize loan
                                                agreements to uncover and eliminate hidden fees, charges, or clauses
                                                that might inflate your borrowing costs.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Digital Rupee Card -->
                <div class="col-md-4">
                    <div class="card h-100 d-flex flex-column zoom-effect">
                        <img src="{{ asset('assets/img/Expert-Support.png') }}" class="card-img-top"
                            alt="Digital Rupee">
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-uppercase fw-bold text-muted">Expert Support</h6>
                            <h5 class="card-title">Guidance you can trust, expertise you can rely on.</h5>
                            <p></p>
                            <p class="card-text">
                                Get personalized advice from seasoned financial experts.
                            </p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#expertSupportModal">
                                Know More <i class="bx bxs-chevron-right ms-1"></i>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="expertSupportModal" tabindex="-1"
                            aria-labelledby="expertSupportModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="expertSupportModalLabel">Why You Need
                                            Expert Support</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>In today’s dynamic market, financial challenges can arise unexpectedly.
                                            Having access to expert guidance can mean the difference between overcoming
                                            obstacles and facing setbacks.</p>
                                        <h5 class="fw-bold">Our Expertise Includes:</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <strong>1. Financial Consultation:</strong> Get tailored advice on
                                                tackling challenges like cash flow issues, funding shortfalls, or
                                                regulatory compliance.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>2. Loan Process Simplification:</strong> From application to
                                                approval, we guide you through every step of the loan process, ensuring
                                                a seamless experience.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>3. Ongoing Project Support:</strong> Receive continuous
                                                financial advice throughout your project lifecycle, ensuring that your
                                                finances stay on track.
                                            </li>
                                        </ul>
                                        <h5 class="fw-bold mt-4">Benefits of Expert Support:</h5>
                                        <ul>
                                            <li>Faster resolution of financial bottlenecks.</li>
                                            <li>Access to industry insights and proven strategies.</li>
                                            <li>Increased confidence in financial decisions.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row g-4 p-4">
                <!-- Personal Loan Card -->
                <div class="col-md-4">
                    <div class="card h-100 d-flex flex-column zoom-effect">
                        <img src="{{ asset('assets/img/End-to-End-Financial-Solutions.png') }}" class="card-img-top"
                            alt="Personal Loan">
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-uppercase fw-bold text-muted">End-to-End Financial Solutions</h6>
                            <h5 class="card-title">Your one-stop destination for financial needs.</h5>
                            <p></p>
                            <p class="card-text">
                                From funding to compliance, find all your financial solutions under one roof.
                            </p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#comprehensiveServicesModal">
                                Know More <i class="bx bxs-chevron-right ms-1"></i>
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="comprehensiveServicesModal" tabindex="-1"
                            aria-labelledby="comprehensiveServicesModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="comprehensiveServicesModalLabel">
                                            Comprehensive Services</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>From securing project financing to managing operational cash flow, we provide
                                            a 360-degree solution to all your financial needs.</p>
                                        <h5 class="fw-bold">What We Cover:</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <strong>1. Project Funding:</strong> Secure construction finance,
                                                working capital loans, or long-term loans tailored to your project
                                                needs.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>2. Cash Flow Management:</strong> Ensure uninterrupted
                                                operations by effectively managing your income and expenses.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>3. Debt Restructuring:</strong> Optimize your existing debt to
                                                reduce costs and improve repayment terms.
                                            </li>
                                        </ul>
                                        <h5 class="fw-bold mt-4">How It Works:</h5>
                                        <ul>
                                            <li>Assess your financial needs.</li>
                                            <li>Craft a tailored solution combining various services.</li>
                                            <li>Provide ongoing support to ensure successful implementation.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home Loan Card -->
                <div class="col-md-4">
                    <div class="card h-100 d-flex flex-column zoom-effect">
                        <img src="{{ asset('assets/img/Strategic-Business-Planning.png') }}" class="card-img-top"
                            alt="Home Loan">
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-uppercase fw-bold text-muted">Strategic Business Planning</h6>
                            <h5 class="card-title">Strategies for sustainable growth.</h5>
                            <p></p>
                            <p></p>
                            <p class="card-text">
                                Develop sustainable strategies with our business planning services.
                            </p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#futurePlanModal">
                                Know More <i class="bx bxs-chevron-right ms-1"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="futurePlanModal" tabindex="-1"
                            aria-labelledby="futurePlanModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="futurePlanModalLabel">Plan for the Future
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>A well-defined business strategy is key to long-term success. Our team helps
                                            you create a roadmap that balances short-term goals with long-term
                                            sustainability.</p>
                                        <h5 class="fw-bold">Our Services:</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <strong>1. Financial Roadmapping:</strong> Develop a detailed financial
                                                plan that aligns with your business objectives and milestones.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>2. ROI Optimization:</strong> Use data analytics to maximize
                                                returns on investment while minimizing risks.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>3. Market Analysis:</strong> Stay ahead of competitors with
                                                insights into market trends, customer preferences, and emerging
                                                opportunities.
                                            </li>
                                        </ul>
                                        <h5 class="fw-bold mt-4">Benefits:</h5>
                                        <ul>
                                            <li>Enhanced profitability through strategic decision-making.</li>
                                            <li>Reduced risks with informed financial forecasting.</li>
                                            <li>A clear path to achieving growth objectives.</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Digital Rupee Card -->
                <div class="col-md-4">
                    <div class="card h-100 d-flex flex-column zoom-effect">
                        <img src="{{ asset('assets/img/RERA-Compliance-Assistance.png') }}" class="card-img-top"
                            alt="Digital Rupee">
                        <div class="card-body d-flex flex-column">
                            <h6 class="text-uppercase fw-bold text-muted">RERA Compliance Assistance</h6>
                            <h5 class="card-title">Navigating RERA made simple.</h5>
                            <p></p>
                            <p></p>
                            <p class="card-text">
                                Stay compliant with RERA regulations effortlessly.
                            </p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal"
                                data-bs-target="#reraComplianceModal">
                                Know More <i class="bx bxs-chevron-right ms-1"></i>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="reraComplianceModal" tabindex="-1"
                            aria-labelledby="reraComplianceModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold" id="reraComplianceModalLabel">Why RERA
                                            Compliance is Crucial</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Compliance with RERA regulations ensures project transparency and avoids
                                            costly penalties. Non-compliance can lead to delays, fines, and loss of
                                            reputation.</p>
                                        <h5 class="fw-bold">How We Support You:</h5>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <strong>1. Project Registration:</strong> Simplify the RERA registration
                                                process with our guidance, ensuring all documents are in place and
                                                compliant with legal requirements.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>2. Regular Updates:</strong> Stay on top of quarterly updates,
                                                disclosures, and submissions to ensure continued compliance throughout
                                                your project.
                                            </li>
                                            <li class="list-group-item">
                                                <strong>3. Regulatory Guidance:</strong> Avoid pitfalls by proactively
                                                addressing changes in RERA rules and their implications for your
                                                project.
                                            </li>
                                        </ul>
                                        <h5 class="fw-bold mt-4">Why Choose Us?</h5>
                                        <ul>
                                            <li>Comprehensive understanding of RERA regulations.</li>
                                            <li>Proactive support to prevent penalties.</li>
                                            <li>Expert insights to keep your project compliant and on track.</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ======= Featured Services Section ======= -->
        {{-- <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="mb-2"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Expertise</a></h4>
              <p class="description">Our financial experts bring years of industry-specific knowledge to the table, ensuring you receive the best advice and solutions.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="mb-2"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Prompt Service</a></h4>
              <p class="description">Experience swift and efficient service with our dedicated team, ensuring your financial needs are met promptly.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="mb-2"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Customized Solutions</a></h4>
              <p class="description">We understand that each client is unique. Our solutions are tailored to your specific needs, ensuring optimal results.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="mb-2"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Transparent Process</a></h4>
              <p class="description">Experience a transparent and straightforward process from consultation to execution. We believe in clear communication and integrity.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section --> --}}

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                    <h3>Discover unique approaches and professional expertise.</h3>
                    {{-- <p class="fst-italic">
              At GEO Business Solutions PVT. LTD., we're experts in finance consultancy, with over 12 years of experience. We've worked extensively in the banking sector, building a strong network and deep understanding of finance.
            </p> --}}
                </div>
                <div class="row">

                    <div class="col-lg-7 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">

                        <ul>
                            <li>
                                <p class="m-2">
                                    <img src="{{ asset('assets/icons/1.png') }}" alt="">
                                </p>
                                <div>
                                    <h5>Background & Experience</h5>
                                    <p>
                                        Through our years in banking, we noticed a gap - many people struggle to
                                        navigate the complex world of finance, unable to find proper guidance. That's
                                        where we saw an opportunity to make a difference. We founded GEO Business
                                        Solutions PVT. LTD. to provide a one-stop solution for all customers’ financial
                                        needs.
                                        With financial solutions, we are providing RERA services and business solutions.
                                        Our expert knowledge and experience in RERA.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <p class="m-2">
                                    <img src="{{ asset('assets/icons/2.png') }}" alt="">
                                </p>
                                <div>
                                    <h5>We Achieved</h5>
                                    <p>Over 100+ happy customers achieved their financial goals, with 250+ crores
                                        disbursements. Our track record speaks for itself, demonstrating our commitment
                                        to delivering results and making a positive impact on the lives of our clients.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <p class="m-2">
                                    <img src="{{ asset('assets/icons/3.png') }}" alt="">
                                </p>
                                <div>
                                    <h5>Vision & Values</h5>
                                    <p>By 2030, we envision reaching new heights by disbursing over 1000+ crores in the
                                        next six years. Our goal is to ensure the financial soundness of satisfied
                                        customers through quality services in Pune. We are dedicated to making a lasting
                                        impact on the financial well-being of our clients and the community.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center align-items-center" data-aos="fade-right"
                        data-aos-delay="100">
                        <img src="{{ asset('assets/img/office5.jpeg') }}" class="img-fluid img-bordered"
                            alt="Office Image">
                    </div>
                </div>


                <br>
                <div class="section-title">
                    <h5>Core Team</h5>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/img/Sambhaji-More2.jpeg') }}" class=""
                            style="height: 225px;border-radius: 10px;" alt="Sambhaji More">
                    </div>
                    <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100" style="align-content: center;">
                        <p><b>Sambhaji More</b>, Director at GEO Business Solutions PVT. LTD., brings 11 years of
                            banking experience and a strong foundation in legal and technical domains. Beginning as a
                            legal head in an NBFC, he gained valuable insights that he now leverages to align with GEO’s
                            goals. As Director, Sambhaji plays a pivotal role in relationship management, uniting
                            bankers and clients, addressing their needs, and ensuring compliance for smooth, efficient
                            transactions</p>
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100" style="align-content: center;">
                        <p><b>Siddhant Chindhe</b>, Director at GEO Business Solutions PVT. LTD., With over 10 years of
                            experience in the finance sector, including expertise in construction finance, Siddhant
                            Chindhe brings a strategic approach to credit evaluation, ensuring precise scrutiny of
                            proposals to safeguard company interests and build client trust. In his leading role at GEO,
                            he drives professional growth, stays ahead of industry trends, and fosters long-term
                            relationships, positioning himself as a trusted advisor in the financial landscape.</p>
                    </div>
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/img/Siddhant-Chindhe.jpeg') }}"
                            style="width: 337px;border-radius: 10px;" alt="Siddhant Chindhe">
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <h3>FINANCE Service We Can <span>Help With</span></h3>
                    <p>Explore our range of services and discover how we can transform your vision into reality. </p>
                </div>

                <div class="row">
                    <div class="section-title">
                        <h3>Retail Loans</h3>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/HomeLoan.png') }}" alt="">
                            </div>
                            <h4><a>Home Loan</a></h4>
                            <p class="text-justify">
                                A home loan finances home purchases, repaid via EMIs over 5–30 years. It offers
                                low-interest rates, tax benefits, and flexible terms; good credit ensures better deals.
                                <a href="/services" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/Mortgage.png') }}" alt="">
                                {{-- <i class="bi bi-buildings-fill"></i> --}}
                            </div>
                            <h4><a>Mortgage</a></h4>
                            <p class="text-justify">A mortgage is a home loan repaid in EMIs, offering low-interest
                                rates, tax benefits, and flexible terms. Good credit and proper documents are key.
                                <a href="/services" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/BusinessLoans.png') }}" alt="">
                            </div>
                            <h4><a>Business Loans</a></h4>
                            <p class="text-justify">Business loans provide funds for startups, operations, or
                                expansion, with flexible repayment options. Eligibility depends on credit score, income,
                                and business plans.
                                <a href="/services" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/EquipmentFinance.png') }}" alt="">
                            </div>
                            <h4><a>Equipment Finance</a></h4>
                            <p class="text-justify">Equipment finance helps businesses acquire machinery or equipment
                                through loans or leases. It offers flexible terms and may include tax benefits.
                                <a href="/services" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/balance-tranfer.png') }}" alt="">
                            </div>
                            <h4><a>Balance Transfer (BT)</a></h4>
                            <p class="text-justify">A Balance Transfer (BT) allows transferring outstanding debt from
                                one credit card to another with a lower interest rate. It helps reduce interest payments
                                and pay off debt faster.
                                <a href="/services" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="section-title">
                        <h3>Wholesale</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/ProjectFinance.png') }}" alt="">
                            </div>
                            <h4><a>Project Finance – Plant & Machinery, CC-OD</a></h4>
                            <p class="text-justify">Project finance for plant and machinery involves funding the
                                purchase and installation of equipment, typically through loans. It provides short-term
                                working capital for operational needs.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/CashCredit.png') }}" alt="">
                            </div>
                            <h4><a>Cash Credit / Working Capital (CC) / Overdraft (OD)</a></h4>
                            <p class="text-justify">Cash Credit (CC) and Overdraft (OD) provide short-term funds for
                                businesses, helping manage working capital with flexible repayment
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/TermLoan.png') }}" alt="">
                            </div>
                            <h4><a>Term Loan</a></h4>
                            <p class="text-justify">A term loan is a fixed amount borrowed for a specific period,
                                repaid in regular installments. It typically has a set interest rate and is used for
                                business or personal purposes.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/LetterofCredit.png') }}" alt="">

                            </div>
                            <h4><a>Letter of Credit</a></h4>
                            <p class="text-justify">A Letter of Credit (LC) is a financial document issued by a bank
                                guaranteeing payment to a seller upon fulfilling specified conditions. It reduces risk
                                in international trade by assuring the seller of payment.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/BankGuarantee.png') }}" alt="">

                            </div>
                            <h4><a>Bank Guarantee</a></h4>
                            <p class="text-justify">A bank guarantee is a promise from a bank to cover a borrower’s
                                debt if they fail to repay. It provides security to the lender in financial
                                transactions.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/ForeignCurrencyTermLoan.png') }}" alt="">

                            </div>
                            <h4><a>Foreign Currency Term Loan</a></h4>
                            <p class="text-justify">A Foreign Currency Term Loan is a loan taken in a foreign currency,
                                typically for long-term financing. It helps businesses manage international expenses and
                                exchange rate fluctuations.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/ConstructionFinance.png') }}" alt="">

                            </div>
                            <h4><a>Construction Finance</a></h4>
                            <p class="text-justify">Construction finance provides funding for building or renovating
                                properties, typically through short-term loans. It covers costs like materials, labor,
                                and permits.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/LoanagainstProperty.png') }}" alt="">

                            </div>
                            <h4><a>Loan against Property (LAP)</a></h4>
                            <p class="text-justify">A Loan Against Property (LAP) is a secured loan where property is
                                used as collateral. It offers lower interest rates and flexible repayment terms.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/balance-tranfer.png') }}" alt="">

                            </div>
                            <h4><a>Balance Transfer</a></h4>
                            <p class="text-justify">A balance transfer allows you to move debt from one credit card to
                                another, often with lower interest rates. It's a strategy to save on interest and pay
                                off debt faster.
                                <a href="/wholesale" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                </div>

                <br>
                <div class="row" id="RERA">
                    <div class="section-title">
                        <h3>RERA Services</h3>
                    </div>
                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/registration.png') }}" alt="">

                            </div>
                            <h4><a>Registration</a></h4>
                            <p class="text-justify">Compliance registration is the process of ensuring a business meets
                                legal and regulatory requirements. It involves submitting necessary documentation to
                                relevant authorities for approval
                                <a href="/mahareraservice" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/Compliance.png') }}" alt="">

                            </div>
                            <h4><a>Compliance </a></h4>
                            <p class="text-justify">Compliance ensures adherence to laws, regulations, and policies to
                                maintain legal and ethical standards. It minimizes risks and ensures business integrity
                                <a href="/mahareraservice" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/Drafting.png') }}" alt="">

                            </div>
                            <h4><a>Drafting</a></h4>
                            <p class="text-justify">A mortgage is a loan for buying a home, repaid in EMIs. It offers
                                low interest rates, tax benefits, and flexible terms.
                                <a href="/mahareraservice" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/ProjectPlanning.png') }}" alt="">

                            </div>
                            <h4><a>Project Planning </a></h4>
                            <p class="text-justify">Project planning involves defining goals, timelines, and resources
                                needed to complete a project. It ensures effective coordination, risk management, and
                                successful project delivery.
                                <a href="/mahareraservice" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/ProjectAmendments.png') }}" alt="">

                            </div>
                            <h4><a>Project Amendments</a></h4>
                            <p class="text-justify">Project amendments involve making changes to a project's scope,
                                timeline, or deliverables. They require proper documentation and approval to ensure
                                alignment with goals.
                                <a href="/mahareraservice" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box border-hover-effect">
                            <div class="mb-2">
                                <img src="{{ asset('assets/icons/Extension.png') }}" alt="">

                            </div>
                            <h4><a>Extension </a></h4>
                            <p class="text-justify">A mortgage is a loan to buy or build a home, repaid in EMIs with
                                flexible terms. It offers low-interest rates, tax benefits, and requires good credit and
                                documents.
                                <a href="/mahareraservice" class="learn-more-link">Know More</a>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->


        <section class="portfolio-details" style="background-image: linear-gradient(#b2dafd, #ffffff);">
            <div class="mt-4">
                <div class="row">
                    <div class="col-lg-5 py-3 p-60">
                        <h2 style="color: #00579e;">Geo Business Guide Center</h2>
                        <ul class="lh-fs">
                            <li><b>Actionable financial insights to power your business</b></li>
                            <li><b>In-depth guides on loan types, eligibility, and benefits</b></li>
                            <li><b>Blogs on the latest business finance trends and tools</b></li>
                            <li><b>Proven strategies for faster approvals and smarter borrowing</b></li>
                        </ul>
                        <a href="#contact"><button class="btn btn-primary explore-btn">Explore Now</button></a>
                    </div>
                    <div class="col-lg-7 bg-blur">
                        <!-- First Row: Right to Left -->

                        <div class="marquee-container">
                            <div class="marquee-content">

                                <img src="{{ asset('assets/sliders/1.png') }}" class="d-block" alt="Slide 1">

                                <img src="{{ asset('assets/sliders/2.png') }}" class="d-block" alt="Slide 2">

                                <img src="{{ asset('assets/sliders/3.png') }}" class="d-block" alt="Slide 3">

                                <img src="{{ asset('assets/sliders/4.png') }}" class="d-block" alt="Slide 1">

                                <img src="{{ asset('assets/sliders/5.png') }}" class="d-block" alt="Slide 2">

                                <img src="{{ asset('assets/sliders/6.png') }}" class="d-block" alt="Slide 3">

                                <img src="{{ asset('assets/sliders/7.png') }}" class="d-block" alt="Slide 1">

                                <img src="{{ asset('assets/sliders/8.png') }}" class="d-block" alt="Slide 2">

                                <img src="{{ asset('assets/sliders/15.png') }}" class="d-block" alt="Slide 6">
                                <!-- Duplicate Images for Seamless Loop -->

                                <img src="{{ asset('assets/sliders/1.png') }}" class="d-block" alt="Slide 1">

                                <img src="{{ asset('assets/sliders/2.png') }}" class="d-block" alt="Slide 2">

                                <img src="{{ asset('assets/sliders/3.png') }}" class="d-block" alt="Slide 3">

                                <img src="{{ asset('assets/sliders/4.png') }}" class="d-block" alt="Slide 1">

                                <img src="{{ asset('assets/sliders/5.png') }}" class="d-block" alt="Slide 2">

                                <img src="{{ asset('assets/sliders/6.png') }}" class="d-block" alt="Slide 3">

                                <img src="{{ asset('assets/sliders/7.png') }}" class="d-block" alt="Slide 1">

                                <img src="{{ asset('assets/sliders/8.png') }}" class="d-block" alt="Slide 2">

                                <img src="{{ asset('assets/sliders/15.png') }}" class="d-block" alt="Slide 6">
                            </div>
                        </div>
                        <!-- Second Row: Left to Right -->

                        <div class="marquee-container mt-2">
                           
                            <div class="marquee-content-right">
                                <img src="{{ asset('assets/sliders/9.png') }}" class="d-block" alt="Slide 4">

                                <img src="{{ asset('assets/sliders/10.png') }}" class="d-block" alt="Slide 5">

                                <img src="{{ asset('assets/sliders/11.png') }}" class="d-block" alt="Slide 6">

                                <img src="{{ asset('assets/sliders/12.png') }}" class="d-block" alt="Slide 5">

                                <img src="{{ asset('assets/sliders/13.png') }}" class="d-block" alt="Slide 6">

                                <img src="{{ asset('assets/sliders/14.png') }}" class="d-block" alt="Slide 5">

                                <img src="{{ asset('assets/sliders/16.png') }}" class="d-block" alt="Slide 5">
                                <!-- Duplicate Images for Seamless Loop -->

                                <img src="{{ asset('assets/sliders/9.png') }}" class="d-block" alt="Slide 4">

                                <img src="{{ asset('assets/sliders/10.png') }}" class="d-block" alt="Slide 5">

                                <img src="{{ asset('assets/sliders/11.png') }}" class="d-block" alt="Slide 6">

                                <img src="{{ asset('assets/sliders/12.png') }}" class="d-block" alt="Slide 5">

                                <img src="{{ asset('assets/sliders/13.png') }}" class="d-block" alt="Slide 6">

                                <img src="{{ asset('assets/sliders/14.png') }}" class="d-block" alt="Slide 5">

                                <img src="{{ asset('assets/sliders/16.png') }}" class="d-block" alt="Slide 5">
                            </div>
                        </div>


                    </div>
                </div>
        </section>

        <section id="choseus" class="portfolio-details py-5">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h3>Why Choose <span>GEO</span> Business Solutions?</h3>
                </div>
                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    {{-- <i class="bi bi-person-fill-check me-2 fs-3"></i> --}}
                                    <img src="{{ asset('assets/why/Expertise.png') }}" style="height: 50px;"
                                        alt="">
                                    <h5 class="card-title mb-0"><u>Expertise</u></h5>
                                </div>
                                <p class="card-text">
                                    Our financial experts bring years of industry-specific knowledge to the table,
                                    ensuring you receive the best advice and solutions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    {{-- <i class="bi bi-clock-fill me-2 fs-3"></i> --}}
                                    <img src="{{ asset('assets/why/Prompt-Service.png') }}" style="height: 50px;"
                                        alt="">

                                    <h5 class="card-title mb-0"><u>Prompt Service</u></h5>
                                </div>
                                <p class="card-text">
                                    Experience swift and efficient service with our dedicated team, ensuring your
                                    financial needs are met promptly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    {{-- <i class="bi bi-gear-fill me-2 fs-3"></i> --}}
                                    <img src="{{ asset('assets/why/Customized-Solutions.png') }}"
                                        style="height: 50px;" alt="">

                                    <h5 class="card-title mb-0"><u>Customized Solutions</u></h5>
                                </div>
                                <p class="card-text">
                                    We understand that each client is unique. Our solutions are tailored to your
                                    specific needs, ensuring optimal results.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    {{-- <i class="bi bi-eye-fill me-2 fs-3"></i> --}}
                                    <img src="{{ asset('assets/why/Transparent-Process.png') }}"
                                        style="height: 50px;" alt="">

                                    <h5 class="card-title mb-0"><u>Transparent Process</u></h5>
                                </div>
                                <p class="card-text">
                                    We ensure you experience a clear and transparent process, fostering trust and
                                    confidence in every step of our service.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    {{-- <i class="bi bi-life-preserver me-2 fs-3"></i> --}}
                                    <img src="{{ asset('assets/why/All-Inclusive-Support.png') }}"
                                        style="height: 50px;" alt="">

                                    <h5 class="card-title mb-0"><u>All-Inclusive Support</u></h5>
                                </div>
                                <p class="card-text">
                                    Our experts provide valuable insights to elevate your business strategies,
                                    contributing to your overall growth.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    {{-- <i class="bi bi-people-fill me-2 fs-3"></i> --}}
                                    <img src="{{ asset('assets/why/Extensive-Network.png') }}" style="height: 50px;"
                                        alt="">

                                    <h5 class="card-title mb-0"><u>Extensive Network</u></h5>
                                </div>
                                <p class="card-text">
                                    Benefit from our strong relationships with banks and financial institutions, paving
                                    the way to secure the best deals and funding options.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                    {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">

                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">What is
                                    project finance, and how can GEO Business Solutions PVT. LTD. help? <i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Project finance involves securing funding for large-scale ventures, such as real
                                        estate projects. At GEO Business Solutions PVT. LTD., we specialize in
                                        structuring project finance solutions tailored to your specific needs. From
                                        assessing feasibility to securing funding, our expert team guides you through
                                        every step of the process.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">How does
                                    cash credit/working capital benefit MSME businesses, and what solutions does GEO
                                    Business Solutions PVT. LTD. offer? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Cash credit/working capital is essential for the day-to-day operations and
                                        growth of MSME businesses. At GEO Business Solutions PVT. LTD., we offer
                                        customized cash credit solutions designed to provide the necessary liquidity for
                                        your business's dynamic needs, ensuring sustainable growth and success.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">What are the
                                    advantages of opting for a term loan, and how does GEO Business Solutions PVT. LTD.
                                    assist in this process? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Term loans offer opportunities for expansion and development by providing
                                        flexible funding options. Our expert team at GEO Business Solutions PVT. LTD.
                                        helps you unlock these opportunities by offering competitive and tailored term
                                        loan solutions designed to meet the unique requirements of your industry and
                                        business size.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can you
                                    explain loan against property (LAP) and its benefits? How does GEO Business
                                    Solutions PVT. LTD. facilitate LAP solutions?<i
                                        class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Loan against property (LAP) allows you to leverage the equity in your property
                                        for strategic investments while retaining ownership. GEO Business Solutions PVT.
                                        LTD. offers LAP solutions that provide liquidity for your financial needs while
                                        ensuring your assets work for you, enabling you to make the most of your
                                        property investments.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What makes
                                    GEO Business Solutions PVT. LTD.' home loan offerings unique, and how can they help
                                    individuals achieve homeownership? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        GEO Business Solutions PVT. LTD. offers seamless and competitive home loan
                                        offerings designed to fulfill the dream of homeownership for individuals.
                                        Whether you're a first-time buyer or looking to upgrade, our personalized home
                                        loan solutions cater to your specific requirements, making the home buying
                                        process hassle-free and rewarding.
                                    </p>
                                </div>
                            </li>

                            <li>
                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">How does
                                    balance transfer (BT) work, and what are the benefits of choosing GEO Business
                                    Solutions PVT. LTD. for BT services? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Balance transfer allows you to optimize your existing loans by transferring them
                                        to a new lender with better terms and lower interest rates. At GEO Business
                                        Solutions PVT. LTD., we facilitate smooth and efficient balance transfer
                                        services, helping you benefit from improved loan terms, reduced financial
                                        burden, and enhanced financial stability.
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Get In Touch</span></h3>
                    <p>Market by leveraging our expertise. Let us guide you in transforming challenges into
                        opportunities and achieving sustainable growth. </p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>ASPIRO, Office No. 102 Pimpri Station Road Opp. THYSSENKRUPP, Pimpri,Pune - 411 018</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>finance@geobiz.in
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+91 9766562525</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7561.927350428433!2d73.79973794208242!3d18.620703529969404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b850e88005d9%3A0xbb942a62c220088c!2sASPIRO!5e0!3m2!1sen!2sin!4v1714304519858!5m2!1sen!2sin"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        @if ($message = Session::get('success'))
                            <div class="col-md-12">
                                <div class="text-success">
                                    <p>{{ $message }}</p>
                                </div>
                            </div>
                        @endif
                        <form id="contactForm" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" maxlength="50" name="name" class="form-control"
                                        id="name" autocomplete="off" placeholder="Enter Your Name *"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="text-danger danger-message">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col form-group">
                                    <input type="email" maxlength="50" class="form-control" name="email"
                                        id="email" autocomplete="off" placeholder="Enter Your Email *"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="text-danger danger-message">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="tel" maxlength="10" class="form-control" name="contact_no"
                                    id="contact_no" autocomplete="off" placeholder="Enter Your Contact No *"
                                    value="{{ old('contact_no') }}" required>
                                @error('contact_no')
                                    <div class="text-danger danger-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" maxlength="200" autocomplete="off"
                                    placeholder="Message *" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-danger danger-message">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" id="submitButton" class="btn btn-primary">
                                    <span id="buttonText">Send Message</span>
                                    <span id="buttonLoader" style="display: none;">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-7 footer-contact">
                        <h3>GEO <span>BUSINESS</span></h3>
                        <p class="logo-css">SOLUTIONS PVT. LTD.</p>
                        <p>ASPIRO, Office No. 102
                            <br> Pimpri Station Road Opp.
                            <br> THYSSENKRUPP, Pimpri,
                            <br>Pune - 411 018<br>

                            <strong>Phone:</strong> +91 9766562525 <br>
                            <strong>Email:</strong> finance@geobiz.in<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-5 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About Us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-5 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Project Finance</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Term Loan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home Loan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Overdraft</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-7 footer-links">
                        <h4>Our Business</h4>
                        <p>At GEO Business Solutions PVT. LTD., we are your strategic partners, dedicated to simplifying
                            the complex journey between you and financial institutions.</p>
                        {{-- <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div> --}}
                    </div>

                </div>
            </div>
        </div>

        <!-- Bootstrap Large Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <a href="#contact">
                  <div class="modal-body" data-bs-dismiss="modal">
                      <!-- Full Size Image -->
                      <img src="{{ asset('assets/img/landing-page-2.png') }}" alt="Full Image">
                  </div>
                </a>
              </div>
          </div>
      </div>

        <style>
            .text-justify {
                text-align: justify;
            }

            .team-img {
                height: 150px;
                width: 150px;
            }

            .portfolio-details {
                padding-top: 0px;
            }

            .learn-more-link {
                color: #1a4ba0;
                /* Blue color for the link */
                text-decoration: none;
                /* Remove underline */
                font-weight: bold;
                /* Make the text bold */
                margin-left: 5px;
                /* Add some space before the link */
            }

            .learn-more-link:hover {
                text-decoration: underline;
                /* Underline on hover */
            }

            .logo-css {
                margin-top: -15px;
                font-weight: 600;
                padding-bottom: 5px;
            }

            .bi {
                color: #1a4ba0;
            }

            @media (min-width: 768px) {
                .w-50-l-22 {
                    width: 50%;
                    left: -22%;
                }

                #hero {
                    width: 100%;
                    height: 70vh;
                    background: url('{{ asset('assets/slider/1.png') }}') 0px 60%;
                    background-size: contain;
                    position: contain;
                }

                #hero:before {
                    content: "";
                    background: none;
                    position: absolute;
                    bottom: 0;
                    top: 0;
                    left: 0;
                    right: 0;
                }
            }

            .lh-fs {
                line-height: 30px;
                font-size: 18px;
                padding: 18px;
            }

            .explore-btn {
                font-weight: 600;
                width: 50%;
                padding: 8px 10px;
                outline: 2px solid #1a4ba0;
                outline-offset: 2px;
            }

            .img-bordered {
                max-width: 100%;
                height: auto;
                /* border: 6px solid #1a4ba0;  */
                border-radius: 5px;
                /* Optional rounded corners */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Subtle shadow for better visuals */
                /* width: 526px;
  height: 356px; */
            }

            .btn-primary {
                --bs-btn-bg: #1a4ba0 !important;
                --bs-btn-border-color: #1a4ba0 !important;
            }

            .zoom-effect {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                position: relative;
                z-index: 1;
            }

            .zoom-effect:hover {
                transform: translateY(-10px) scale(1.05);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                z-index: 10;
            }


            .border-hover-effect {
                position: relative;
                padding: 20px;
                border: 1px solid transparent;
                /* Default border hidden */
                transition: border-color 0.3s ease-in-out;
            }

            .border-hover-effect::before,
            .border-hover-effect::after {
                content: '';
                position: absolute;
                width: 0;
                height: 2px;
                background: #0057a2;
                /* Border color */
                transition: all 0.3s ease-in-out;
            }

            .border-hover-effect::before {
                bottom: 0;
                left: 0;
                transform-origin: left bottom;
            }

            .border-hover-effect::after {
                top: 0;
                right: 0;
                transform-origin: right top;
            }

            .border-hover-effect:hover::before {
                width: 100%;
            }

            .border-hover-effect:hover::after {
                width: 100%;
            }


            .marquee-container {
                overflow: hidden;
            }

            /* Scrolling Content */
            .marquee-content {
                display: flex;
                gap: 20px;
                /* Space between images */
                animation: marqueeScroll 10s linear infinite;
                width: 200%;
                /* Ensures looping */
            }

            @keyframes marqueeScroll {
                from {
                    transform: translateX(0);
                }

                to {
                    transform: translateX(-50%);
                }
            }

            .marquee-content-right {
                display: flex;
            gap: 20px; /* Space between images */
            animation: marqueeScrollRight 10s linear infinite;
            width: 200%; /* Ensures looping */
            }

            /* Animation */
            @keyframes marqueeScrollRight {
                from {
                    transform: translateX(-50%);
                }

                to {
                    transform: translateX(0);
                }
            }

            .modal-body img {
                width: 100%;
                height: auto;
            }
            .p-60{
              padding: 60px
            }
            .bg-blur{
              -webkit-mask-image: linear-gradient(to right, transparent 0%, black 70%, black 100%, transparent 100%);
            }
        </style>

    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitButton = document.getElementById('submitButton');
            const buttonText = document.getElementById('buttonText');
            const buttonLoader = document.getElementById('buttonLoader');
            let formData = new FormData(this);

            // Disable the button and show the loader
            submitButton.disabled = true;
            buttonText.style.display = 'none';
            buttonLoader.style.display = 'inline-block';

            // Reset errors
            // document.getElementById('nameError').innerText = '';
            // document.getElementById('emailError').innerText = '';
            // document.getElementById('contactNoError').innerText = '';
            // document.getElementById('messageError').innerText = '';

            fetch('savecontactform', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    // Enable the button and hide the loader
                    submitButton.disabled = false;
                    buttonText.style.display = 'inline-block';
                    buttonLoader.style.display = 'none';

                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thank You!',
                            text: 'The form has been submitted successfully. Our representative will get in touch with you shortly.',
                            confirmButtonColor: '#004e89'
                        });
                        document.getElementById('contactForm').reset();
                    } else {
                        // Show validation errors
                        if (data.errors) {
                            if (data.errors.name) document.getElementById('nameError').innerText = data.errors
                                .name[0];
                            if (data.errors.email) document.getElementById('emailError').innerText = data.errors
                                .email[0];
                            if (data.errors.contact_no) document.getElementById('contactNoError').innerText =
                                data.errors.contact_no[0];
                            if (data.errors.message) document.getElementById('messageError').innerText = data
                                .errors.message[0];
                        }
                    }
                })
                .catch(error => {
                    // Enable the button and hide the loader
                    submitButton.disabled = false;
                    buttonText.style.display = 'inline-block';
                    buttonLoader.style.display = 'none';

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong. Please try again later.',
                        confirmButtonColor: '#d33'
                    });
                });
        });
        
      // Auto show modal on page load
      function isWebView() {
            return window.innerWidth > 768; // Open modal only if screen width is greater than 768px (tablet & desktop)
        }

        // Open modal after 2 seconds if it's a web view
        document.addEventListener("DOMContentLoaded", function() {
            if (isWebView()) {
                setTimeout(function() {
                    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
                    myModal.show();
                }, 5000); // 2000ms = 2 seconds
            }
        });
    </script>


    @include('include.whatsapp')
</body>

</html>
