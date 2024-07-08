<!doctype html>
<html lang="en">
  
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>GEO Business Solutions PVT. LTD. | Home Page</title>
  <link rel="icon" href="favicon.png"><link href="tailwind.css" rel="stylesheet"></head>

  <body
    x-data="
      {
        scrolledFromTop: false
      }
    "
    x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
    @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
  >
    <!-- ====== Navbar Section Start -->
    <header
      x-data="
        {
          navbarOpen: false,
        }
      "
      :class="scrolledFromTop ? 'fixed z-50 bg-white dark:bg-dark bg-opacity-80 shadow-sm backdrop-blur-sm' : 'absolute' "
      class="top-0 left-0 z-50 w-full"
    >
      <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
          <div class="max-w-full px-4 w-60">
            <a href="javascript:void(0)" class="block w-full py-5">
              {{-- <img
                src="src/assets/images/logo/geo-logo.png"
                alt="logo"
                class="w-full dark:hidden"
              /> --}}
              <svg width="250" height="50" viewBox="0 0 275 75" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M91.784 36.56C91.4293 35.9067 90.916 35.412 90.244 35.076C89.5907 34.7213 88.816 34.544 87.92 34.544C86.3707 34.544 85.1293 35.0573 84.196 36.084C83.2627 37.092 82.796 38.4453 82.796 40.144C82.796 41.9547 83.2813 43.3733 84.252 44.4C85.2413 45.408 86.5947 45.912 88.312 45.912C89.488 45.912 90.4773 45.6133 91.28 45.016C92.1013 44.4187 92.6987 43.56 93.072 42.44H86.996V38.912H97.412V43.364C97.0573 44.5587 96.4507 45.6693 95.592 46.696C94.752 47.7227 93.6787 48.5533 92.372 49.188C91.0653 49.8227 89.5907 50.14 87.948 50.14C86.0067 50.14 84.2707 49.72 82.74 48.88C81.228 48.0213 80.0427 46.836 79.184 45.324C78.344 43.812 77.924 42.0853 77.924 40.144C77.924 38.2027 78.344 36.476 79.184 34.964C80.0427 33.4333 81.228 32.248 82.74 31.408C84.252 30.5493 85.9787 30.12 87.92 30.12C90.272 30.12 92.2507 30.6893 93.856 31.828C95.48 32.9667 96.5533 34.544 97.076 36.56H91.784ZM104.852 34.18V38.156H111.264V41.852H104.852V46.164H112.104V50H100.064V30.344H112.104V34.18H104.852ZM124.509 50.196C122.661 50.196 120.962 49.7667 119.413 48.908C117.882 48.0493 116.659 46.8547 115.745 45.324C114.849 43.7747 114.401 42.0387 114.401 40.116C114.401 38.1933 114.849 36.4667 115.745 34.936C116.659 33.4053 117.882 32.2107 119.413 31.352C120.962 30.4933 122.661 30.064 124.509 30.064C126.357 30.064 128.046 30.4933 129.577 31.352C131.126 32.2107 132.339 33.4053 133.217 34.936C134.113 36.4667 134.561 38.1933 134.561 40.116C134.561 42.0387 134.113 43.7747 133.217 45.324C132.321 46.8547 131.107 48.0493 129.577 48.908C128.046 49.7667 126.357 50.196 124.509 50.196ZM124.509 45.828C126.077 45.828 127.327 45.3053 128.261 44.26C129.213 43.2147 129.689 41.8333 129.689 40.116C129.689 38.38 129.213 36.9987 128.261 35.972C127.327 34.9267 126.077 34.404 124.509 34.404C122.922 34.404 121.653 34.9173 120.701 35.944C119.767 36.9707 119.301 38.3613 119.301 40.116C119.301 41.852 119.767 43.2427 120.701 44.288C121.653 45.3147 122.922 45.828 124.509 45.828ZM155.058 39.92C156.197 40.1627 157.111 40.732 157.802 41.628C158.493 42.5053 158.838 43.5133 158.838 44.652C158.838 46.2947 158.259 47.6013 157.102 48.572C155.963 49.524 154.367 50 152.314 50H143.158V30.344H152.006C154.003 30.344 155.562 30.8013 156.682 31.716C157.821 32.6307 158.39 33.872 158.39 35.44C158.39 36.5973 158.082 37.5587 157.466 38.324C156.869 39.0893 156.066 39.6213 155.058 39.92ZM147.946 38.296H151.082C151.866 38.296 152.463 38.128 152.874 37.792C153.303 37.4373 153.518 36.924 153.518 36.252C153.518 35.58 153.303 35.0667 152.874 34.712C152.463 34.3573 151.866 34.18 151.082 34.18H147.946V38.296ZM151.474 46.136C152.277 46.136 152.893 45.9587 153.322 45.604C153.77 45.2307 153.994 44.6987 153.994 44.008C153.994 43.3173 153.761 42.776 153.294 42.384C152.846 41.992 152.221 41.796 151.418 41.796H147.946V46.136H151.474ZM166.319 30.344V42.104C166.319 43.28 166.608 44.1853 167.187 44.82C167.766 45.4547 168.615 45.772 169.735 45.772C170.855 45.772 171.714 45.4547 172.311 44.82C172.908 44.1853 173.207 43.28 173.207 42.104V30.344H177.995V42.076C177.995 43.8307 177.622 45.3147 176.875 46.528C176.128 47.7413 175.12 48.656 173.851 49.272C172.6 49.888 171.2 50.196 169.651 50.196C168.102 50.196 166.711 49.8973 165.479 49.3C164.266 48.684 163.304 47.7693 162.595 46.556C161.886 45.324 161.531 43.8307 161.531 42.076V30.344H166.319ZM188.469 50.196C187.032 50.196 185.744 49.9627 184.605 49.496C183.466 49.0293 182.552 48.3387 181.861 47.424C181.189 46.5093 180.834 45.408 180.797 44.12H185.893C185.968 44.848 186.22 45.408 186.649 45.8C187.078 46.1733 187.638 46.36 188.329 46.36C189.038 46.36 189.598 46.2013 190.009 45.884C190.42 45.548 190.625 45.0907 190.625 44.512C190.625 44.0267 190.457 43.6253 190.121 43.308C189.804 42.9907 189.402 42.7293 188.917 42.524C188.45 42.3187 187.778 42.0853 186.901 41.824C185.632 41.432 184.596 41.04 183.793 40.648C182.99 40.256 182.3 39.6773 181.721 38.912C181.142 38.1467 180.853 37.148 180.853 35.916C180.853 34.0867 181.516 32.6587 182.841 31.632C184.166 30.5867 185.893 30.064 188.021 30.064C190.186 30.064 191.932 30.5867 193.257 31.632C194.582 32.6587 195.292 34.096 195.385 35.944H190.205C190.168 35.3093 189.934 34.8147 189.505 34.46C189.076 34.0867 188.525 33.9 187.853 33.9C187.274 33.9 186.808 34.0587 186.453 34.376C186.098 34.6747 185.921 35.1133 185.921 35.692C185.921 36.3267 186.22 36.8213 186.817 37.176C187.414 37.5307 188.348 37.9133 189.617 38.324C190.886 38.7533 191.913 39.164 192.697 39.556C193.5 39.948 194.19 40.5173 194.769 41.264C195.348 42.0107 195.637 42.972 195.637 44.148C195.637 45.268 195.348 46.2853 194.769 47.2C194.209 48.1147 193.388 48.8427 192.305 49.384C191.222 49.9253 189.944 50.196 188.469 50.196ZM203.372 30.344V50H198.584V30.344H203.372ZM224.425 50H219.637L211.629 37.876V50H206.841V30.344H211.629L219.637 42.524V30.344H224.425V50ZM232.684 34.18V38.156H239.096V41.852H232.684V46.164H239.936V50H227.896V30.344H239.936V34.18H232.684ZM250.157 50.196C248.719 50.196 247.431 49.9627 246.293 49.496C245.154 49.0293 244.239 48.3387 243.549 47.424C242.877 46.5093 242.522 45.408 242.485 44.12H247.581C247.655 44.848 247.907 45.408 248.337 45.8C248.766 46.1733 249.326 46.36 250.017 46.36C250.726 46.36 251.286 46.2013 251.697 45.884C252.107 45.548 252.313 45.0907 252.313 44.512C252.313 44.0267 252.145 43.6253 251.809 43.308C251.491 42.9907 251.09 42.7293 250.605 42.524C250.138 42.3187 249.466 42.0853 248.589 41.824C247.319 41.432 246.283 41.04 245.481 40.648C244.678 40.256 243.987 39.6773 243.409 38.912C242.83 38.1467 242.541 37.148 242.541 35.916C242.541 34.0867 243.203 32.6587 244.529 31.632C245.854 30.5867 247.581 30.064 249.709 30.064C251.874 30.064 253.619 30.5867 254.945 31.632C256.27 32.6587 256.979 34.096 257.073 35.944H251.893C251.855 35.3093 251.622 34.8147 251.193 34.46C250.763 34.0867 250.213 33.9 249.541 33.9C248.962 33.9 248.495 34.0587 248.141 34.376C247.786 34.6747 247.609 35.1133 247.609 35.692C247.609 36.3267 247.907 36.8213 248.505 37.176C249.102 37.5307 250.035 37.9133 251.305 38.324C252.574 38.7533 253.601 39.164 254.385 39.556C255.187 39.948 255.878 40.5173 256.457 41.264C257.035 42.0107 257.325 42.972 257.325 44.148C257.325 45.268 257.035 46.2853 256.457 47.2C255.897 48.1147 255.075 48.8427 253.993 49.384C252.91 49.9253 251.631 50.196 250.157 50.196ZM267.383 50.196C265.946 50.196 264.658 49.9627 263.519 49.496C262.38 49.0293 261.466 48.3387 260.775 47.424C260.103 46.5093 259.748 45.408 259.711 44.12H264.807C264.882 44.848 265.134 45.408 265.563 45.8C265.992 46.1733 266.552 46.36 267.243 46.36C267.952 46.36 268.512 46.2013 268.923 45.884C269.334 45.548 269.539 45.0907 269.539 44.512C269.539 44.0267 269.371 43.6253 269.035 43.308C268.718 42.9907 268.316 42.7293 267.831 42.524C267.364 42.3187 266.692 42.0853 265.815 41.824C264.546 41.432 263.51 41.04 262.707 40.648C261.904 40.256 261.214 39.6773 260.635 38.912C260.056 38.1467 259.767 37.148 259.767 35.916C259.767 34.0867 260.43 32.6587 261.755 31.632C263.08 30.5867 264.807 30.064 266.935 30.064C269.1 30.064 270.846 30.5867 272.171 31.632C273.496 32.6587 274.206 34.096 274.299 35.944H269.119C269.082 35.3093 268.848 34.8147 268.419 34.46C267.99 34.0867 267.439 33.9 266.767 33.9C266.188 33.9 265.722 34.0587 265.367 34.376C265.012 34.6747 264.835 35.1133 264.835 35.692C264.835 36.3267 265.134 36.8213 265.731 37.176C266.328 37.5307 267.262 37.9133 268.531 38.324C269.8 38.7533 270.827 39.164 271.611 39.556C272.414 39.948 273.104 40.5173 273.683 41.264C274.262 42.0107 274.551 42.972 274.551 44.148C274.551 45.268 274.262 46.2853 273.683 47.2C273.123 48.1147 272.302 48.8427 271.219 49.384C270.136 49.9253 268.858 50.196 267.383 50.196Z" fill="black"/>
                <rect width="77" height="75" fill="url(#pattern0_0_1)"/>
                <defs>
                <pattern id="pattern0_0_1" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_0_1" transform="matrix(0.002 0 0 0.00205333 0 -0.0133333)"/>
                </pattern>
                <image id="image0_0_1" width="500" height="500" xlink:href="data:image/png;base64,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"/>
                </defs>
                </svg>
                
              <img
                src="src/assets/images/logo/logo-white.svg"
                alt="logo"
                class="hidden w-full dark:block"
              />
            </a>
          </div>
          <div class="flex items-center justify-end w-full px-4">
            <div>
              <button
                @click="navbarOpen = !navbarOpen"
                :class="navbarOpen && 'navbarTogglerActive'"
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                ></span>
              </button>
              <nav
                x-transition
                :class="!navbarOpen && 'hidden'"
                id="navbarCollapse"
                class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent"
              >
                <ul class="block lg:flex">
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Home
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      About Us
                    </a>
                  </li>
                  <li>
                    <a
                      href="/#services"
                      class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Services
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Carrier
                    </a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0)"
                      class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-12 lg:inline-flex"
                    >
                      Contact
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div
      class="relative bg-white dark:bg-dark pt-[120px] pb-[110px] lg:pt-[150px]"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 lg:w-5/12">
            <div class="hero-content">
              <h1
                class="mb-3 text-4xl font-bold leading-snug text-dark sm:text-[42px] lg:text-[40px] xl:text-[42px] dark:text-white"
              >
              Elevating Your Financial Aspirations with Expert Consultancy

              </h1>
              <p
                class="mb-8 max-w-[480px] text-base dark:text-dark-6 text-body-color"
              >
              At GEO Business Solutions PVT. LTD., we are your strategic partners, dedicated to simplifying the complex journey between you and financial institutions.

              </p>
              <ul class="flex flex-wrap items-center">
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-md bg-primary hover:bg-blue-dark lg:px-7"
                  >
                    Get Started
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-flex items-center justify-center py-3 px-5 text-center text-base font-medium text-[#464646] dark:text-white hover:text-primary"
                  >
                    <span class="mr-2">
                      <svg
                        width="24"
                        height="25"
                        viewBox="0 0 24 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <circle cx="12" cy="12.6152" r="12" fill="#3758F9" />
                        <rect
                          x="7.99893"
                          y="14.979"
                          width="8.18182"
                          height="1.63636"
                          fill="white"
                        />
                        <rect
                          x="11.2717"
                          y="7.61523"
                          width="1.63636"
                          height="4.09091"
                          fill="white"
                        />
                        <path
                          d="M12.0898 14.1606L14.9241 11.0925H9.25557L12.0898 14.1606Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    Download App
                  </a>
                </li>
              </ul>
              <div class="pt-16 clients">
                <h6
                  class="flex items-center mb-2 text-xs font-normal text-body-color"
                >
                  Used by Thriving Brands
                  <span
                    class="ml-2 inline-block h-[1px] w-8 bg-body-color"
                  ></span>
                </h6>
                <div class="flex max-w-[550px] items-center">
                  <div class="w-full py-3 mr-4">
                    <img src="src/assets/images/brands/ayroui.svg" alt="ayroui" />
                  </div>
                  <div class="w-full py-3 mr-4">
                    <img
                      src="src/assets/images/brands/graygrids.svg"
                      alt="graygrids"
                    />
                  </div>
                  <div class="w-full py-3 mr-4">
                    <img src="src/assets/images/brands/uideck.svg" alt="uideck" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="hidden px-4 lg:block lg:w-1/12"></div>
          <div class="w-full px-4 lg:w-6/12">
            <div class="lg:ml-auto lg:text-right">
              <div class="relative z-10 inline-block pt-11 lg:pt-0">
                <img
                  src="src/assets/images/hero/hero-image-01.png"
                  alt="hero"
                  class="max-w-full lg:ml-auto"
                />
                <span class="absolute -left-8 -bottom-8 z-[-1]">
                  <svg
                    width="93"
                    height="93"
                    viewBox="0 0 93 93"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Services Section Start -->
    <section class="pt-20 pb-12 lg:pt-[120px] dark:bg-dark lg:pb-[90px]" id="services">
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                What we Serve
              </span>
              <h2
                class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
              >
                Our Best Services
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
            <div
              class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
            >
              <div
                class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
              >
                <span
                  class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
                ></span>
                <svg
                  width="51"
                  height="50"
                  viewBox="0 0 51 50"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M48.2129 27.75H46.3848C45.7676 27.75 45.2441 27.0312 45.2441 26.1875V14.375C45.2441 13.5078 45.8066 12.75 46.4473 12.75H48.2129C48.6273 12.75 49.0247 12.5853 49.3177 12.2923C49.6108 11.9993 49.7754 11.6019 49.7754 11.1875C49.7754 10.7731 49.6108 10.3756 49.3177 10.0826C49.0247 9.78958 48.6273 9.62496 48.2129 9.62496H46.4473C45.6834 9.63491 44.9363 9.85058 44.2846 10.2493C43.6329 10.648 43.1008 11.215 42.7441 11.8906H32.5176L31.0254 10.5859C29.6979 9.3961 28.1019 8.54574 26.3739 8.10763C24.6459 7.66951 22.8375 7.65669 21.1035 8.07027C16.7285 9.17964 13.8379 12.7031 12.8301 14.1562H11.2676C11.2851 12.9959 10.8506 11.8743 10.056 11.0287C9.26132 10.183 8.1689 9.6796 7.00977 9.62496H2.90039C2.48599 9.62496 2.08856 9.78958 1.79554 10.0826C1.50251 10.3756 1.33789 10.7731 1.33789 11.1875C1.33789 11.6019 1.50251 11.9993 1.79554 12.2923C2.08856 12.5853 2.48599 12.75 2.90039 12.75H6.99414C7.61133 12.75 8.13477 13.4609 8.13477 14.3125V26.1171C8.13477 26.9843 7.57227 27.75 6.93164 27.75H2.90039C2.48599 27.75 2.08856 27.9146 1.79554 28.2076C1.50251 28.5006 1.33789 28.8981 1.33789 29.3125C1.33789 29.7269 1.50251 30.1243 1.79554 30.4173C2.08856 30.7103 2.48599 30.875 2.90039 30.875H6.93164C7.69117 30.8592 8.4327 30.6409 9.07961 30.2426C9.72651 29.8443 10.2553 29.2804 10.6113 28.6093H11.1582C11.7521 28.6105 12.3357 28.7638 12.8535 29.0546C12.8139 29.2662 12.8185 29.4837 12.8669 29.6934C12.9153 29.9031 13.0065 30.1006 13.1348 30.2734L14.9395 32.6875C15.1519 32.9635 15.4479 33.1635 15.7832 33.2578L18.1738 33.8984L19.2441 36.1796C19.3399 36.3842 19.4789 36.5656 19.6516 36.7112C19.8242 36.8569 20.0264 36.9634 20.2441 37.0234L22.7598 37.7109L24.3926 40.3046C24.5986 40.6321 24.9187 40.8715 25.291 40.9765L29.6426 42.1875C29.7797 42.2275 29.9216 42.2485 30.0645 42.25C30.3204 42.2503 30.5725 42.1879 30.7986 42.068C31.0248 41.9481 31.218 41.7745 31.3613 41.5625L39.5254 29.4375C39.5971 29.3314 39.6937 29.2446 39.8067 29.1847C39.9198 29.1248 40.0459 29.0935 40.1738 29.0937H43.041C43.4169 29.6348 43.9162 30.0786 44.4977 30.3883C45.0791 30.6981 45.726 30.8649 46.3848 30.875H48.2129C48.6273 30.875 49.0247 30.7103 49.3177 30.4173C49.6108 30.1243 49.7754 29.7269 49.7754 29.3125C49.7754 28.8981 49.6108 28.5006 49.3177 28.2076C49.0247 27.9146 48.6273 27.75 48.2129 27.75ZM15.3535 15.9687C16.1895 14.789 18.4785 11.9531 21.8691 11.0937C23.1138 10.8063 24.4095 10.8238 25.646 11.1448C26.8824 11.4659 28.023 12.0808 28.9707 12.9375L32.166 15.7187C32.5549 16.0161 32.8127 16.4532 32.8848 16.9375C32.8908 17.0594 32.8718 17.1812 32.8288 17.2955C32.7857 17.4097 32.7197 17.5139 32.6348 17.6015L31.3066 19.0234C30.9691 19.3887 30.5075 19.615 30.0121 19.6584C29.5166 19.7017 29.0228 19.5589 28.627 19.2578L28.3145 19.0234C27.3474 18.2923 26.1483 17.9361 24.939 18.0209C23.7297 18.1056 22.5919 18.6255 21.7363 19.4843L14.8379 26.6171C13.7811 25.8988 12.5374 25.5051 11.2598 25.4843V17.2812H12.8223C13.318 17.2789 13.8062 17.1587 14.2463 16.9305C14.6864 16.7023 15.066 16.3726 15.3535 15.9687ZM36.9395 27.6875L29.4004 38.875L26.7129 38.0937L25.0801 35.5C24.8722 35.171 24.549 34.9314 24.1738 34.8281L21.7676 34.1718L20.6895 31.8828C20.5937 31.6782 20.4547 31.4968 20.282 31.3512C20.1094 31.2055 19.9072 31.099 19.6895 31.039L17.1191 30.3515L16.4316 29.4375L23.9473 21.625C24.2729 21.3043 24.703 21.1114 25.159 21.0813C25.615 21.0512 26.0666 21.1859 26.4316 21.4609L26.7441 21.6953C27.7581 22.4607 29.02 22.8229 30.2856 22.7118C31.5512 22.6007 32.7306 22.0241 33.5957 21.0937L34.9316 19.7343C35.3031 19.3396 35.5908 18.8738 35.7775 18.3649C35.9641 17.8561 36.0458 17.3147 36.0176 16.7734C35.9849 16.1594 35.8197 15.5597 35.5332 15.0156H42.1191V25.9531H40.1738C39.5339 25.9551 38.9042 26.1144 38.3403 26.4168C37.7763 26.7192 37.2953 27.1555 36.9395 27.6875Z"
                    fill="#3758F9"
                  />
                </svg>
              </div>
              <h4
                class="text-dark dark:text-white mb-[14px] text-2xl font-bold"
              >
                Marketing Solutions
              </h4>
              <p class="text-body-color dark:text-dark-6">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>

              <span
                class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
              ></span>
            </div>
          </div>
          <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
            <div
              class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
            >
              <div
                class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
              >
                <span
                  class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
                ></span>
                <svg
                  width="51"
                  height="50"
                  viewBox="0 0 51 50"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M48.1348 34.7656C47.1191 31.4062 43.7598 29.5312 40.5566 30.4687C37.9004 31.25 34.2285 32.3437 31.3379 33.2031C31.5723 32.2656 31.416 31.4844 31.1816 30.8594C30.4004 28.9844 28.3691 28.125 26.5723 28.125H18.6816C18.0566 28.125 17.3535 27.8125 16.6504 27.1875C15.791 26.4062 14.6191 25.9375 13.4473 25.9375H7.11914C4.30664 25.9375 1.96289 28.3594 1.96289 31.3281V41.4844C1.96289 44.5312 4.30664 46.9531 7.19727 46.9531H14.9316C15.8691 46.9531 16.8848 46.6406 17.7441 46.0938C20.0098 47.3438 22.5879 47.9688 25.166 47.9688C26.7285 47.9688 28.291 47.7344 29.6973 47.2656L43.916 42.9688H43.9941C48.291 41.3281 48.916 37.5781 48.1348 34.7656ZM7.19727 43.4375C6.25977 43.4375 5.47852 42.5781 5.47852 41.4844V31.3281C5.47852 30.3125 6.18164 29.4531 7.11914 29.4531H13.5254C13.916 29.4531 14.2285 29.6094 14.3848 29.7656C14.6191 30 14.8535 30.1562 15.0879 30.3125V43.3594C15.0098 43.3594 15.0098 43.3594 14.9316 43.3594H7.19727V43.4375ZM42.8223 39.6094L28.5254 43.9844C27.4316 44.2969 26.2598 44.5313 25.0098 44.5313C22.9785 44.5313 21.0254 43.9844 19.3066 43.0469L18.5254 42.6562V31.7187C18.6035 31.7187 18.6035 31.7187 18.6816 31.7187H26.6504C27.3535 31.7187 27.9004 32.0312 27.9785 32.2656C28.0566 32.5 27.9004 33.3594 26.2598 34.9219L25.2441 35.8594L25.9473 37.0313C26.6504 38.2813 27.3535 38.0469 30.0879 37.2656C31.3379 36.875 33.0566 36.4063 34.7754 35.9375C38.1348 34.9219 41.5723 33.9063 41.5723 33.9063C42.9004 33.5156 44.3066 34.375 44.7754 35.8594C45.166 37.1094 45.0879 38.75 42.8223 39.6094Z"
                    fill="#3758F9"
                  />
                  <path
                    d="M47.4316 17.6563H45.4785V3.75C45.4785 2.8125 44.6973 1.95312 43.6816 1.95312C42.666 1.95312 41.9629 2.8125 41.9629 3.75V17.6563H37.666V6.09375C37.666 5.15625 36.8848 4.29688 35.8691 4.29688C34.8535 4.29688 34.1504 5.15625 34.1504 6.09375V17.6563H29.8535V10C29.8535 9.0625 29.0723 8.20313 28.0566 8.20313C27.041 8.20313 26.2598 8.98438 26.2598 10V17.6563H25.0879C24.1504 17.6563 23.291 18.4375 23.291 19.4531C23.291 20.4688 24.0723 21.25 25.0879 21.25H47.4316C48.3691 21.25 49.2285 20.4688 49.2285 19.4531C49.2285 18.4375 48.3691 17.6563 47.4316 17.6563Z"
                    fill="#3758F9"
                  />
                </svg>
              </div>
              <h4
                class="text-dark dark:text-white mb-[14px] text-2xl font-bold"
              >
                Business Analytics
              </h4>
              <p class="text-body-color dark:text-dark-6">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <span
                class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
              ></span>
            </div>
          </div>
          <div class="w-full px-4 sm:w-4/5 md:w-1/2 lg:w-1/3">
            <div
              class="group relative mb-8 rounded-xl border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 p-10 text-center md:px-8 lg:py-9 lg:px-6 xl:py-[45px] xl:px-[43px]"
            >
              <div
                class="relative z-10 inline-flex items-center mx-auto mb-10 h-11"
              >
                <span
                  class="bg-primary absolute -right-3 top-0 z-[-1] h-[34px] w-[34px] rounded-full opacity-10"
                ></span>
                <svg
                  width="51"
                  height="50"
                  viewBox="0 0 51 50"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M45.9473 17.2656H41.2598V8.125C41.2598 5.46875 39.1504 3.35938 36.4941 3.35938H10.7129C8.05664 3.35938 5.94727 5.46875 5.94727 8.125V21.7969C5.47852 22.1875 5.08789 22.7344 4.85352 23.4375L1.96289 37.5C1.80664 38.2813 2.04102 39.1406 2.58789 39.7656C3.05664 40.3906 3.83789 40.7031 4.61914 40.7031H29.7754V43.4375C29.7754 45.2344 31.2598 46.7188 33.0566 46.7188H45.9473C47.7441 46.7188 49.2285 45.2344 49.2285 43.4375V20.5469C49.2285 18.75 47.7441 17.2656 45.9473 17.2656ZM5.63477 37.1875L8.21289 24.7656H8.60352H29.8535V37.1875H5.63477ZM29.7754 20.5469V21.25H9.46289V8.125C9.46289 7.42187 10.0098 6.875 10.7129 6.875H36.4941C37.1973 6.875 37.7441 7.42187 37.7441 8.125V17.2656H33.0566C31.2598 17.2656 29.7754 18.75 29.7754 20.5469ZM45.7129 43.125H33.291V20.7812H45.7129V43.125Z"
                    fill="#3758F9"
                  />
                  <path
                    d="M37.7441 26.7969H41.6504C42.5879 26.7969 43.4473 26.0156 43.4473 25C43.4473 24.0625 42.666 23.2031 41.6504 23.2031H37.7441C36.8066 23.2031 35.9473 23.9844 35.9473 25C35.9473 25.9375 36.7285 26.7969 37.7441 26.7969Z"
                    fill="#3758F9"
                  />
                  <path
                    d="M39.541 38.9063C39.4629 38.9063 39.3066 38.9844 39.2285 38.9844C39.1504 39.0625 38.9941 39.0625 38.916 39.1406C38.8379 39.2188 38.7598 39.2969 38.6816 39.375C38.3691 39.6875 38.1348 40.1563 38.1348 40.625C38.1348 41.0938 38.291 41.5625 38.6816 41.875C38.7598 41.9531 38.8379 42.0313 38.916 42.1094C38.9941 42.1875 39.1504 42.2656 39.2285 42.2656C39.3066 42.3438 39.4629 42.3438 39.541 42.3438C39.6191 42.3438 39.7754 42.3438 39.8535 42.3438C40.3223 42.3438 40.791 42.1875 41.1035 41.7969C41.416 41.4844 41.6504 41.0156 41.6504 40.5469C41.6504 40.0781 41.4941 39.6094 41.1035 39.2969C40.7129 38.9844 40.0879 38.8281 39.541 38.9063Z"
                    fill="#3758F9"
                  />
                </svg>
              </div>
              <h4
                class="text-dark dark:text-white mb-[14px] text-2xl font-bold"
              >
                UX & UI Design
              </h4>
              <p class="text-body-color dark:text-dark-6">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>

              <span
                class="bg-primary absolute -bottom-2 left-0 right-0 z-[-1] mx-auto h-12 w-3/4 opacity-0 blur-[12px] transition group-hover:opacity-[14%]"
              ></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Services Section End -->

    <!-- ====== Video Section Start -->
    <section
      x-data="{ videoOpen: false }"
      class="relative z-10 overflow-hidden bg-primary"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 lg:w-1/2">
            <div class="max-w-[490px] py-[100px] lg:py-[140px]">
              <span class="block mb-3 text-base font-semibold text-white">
                Watch Our Intro Video
              </span>
              <h2
                class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[40px] md:leading-snug"
              >
                Making world a better place for you and us
              </h2>
              <p class="text-base leading-relaxed text-white mb-9">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                at quam fringilla, scelerisque nisl in, accumsan diam. Quisque
                sollicitudin risus eu tortor euismod imperdiet.
              </p>
              <a
                href="javascript:void(0)"
                class="inline-block py-3 text-base font-medium text-white border border-white rounded-full px-9 hover:bg-white hover:text-primary"
              >
                Know More
              </a>
            </div>
          </div>
        </div>
      </div>

      <div>
        <div class="top-0 right-0 z-10 w-full h-full lg:absolute lg:w-1/2">
          <div class="flex items-center justify-center w-full h-full">
            <img
              src="src/assets/images/videos/image-01.jpg"
              alt="image"
              class="top-0 left-0 z-[-1] h-full w-full object-cover object-center lg:absolute"
            />
            <a
              href="javascript:void(0)"
              @click="videoOpen = true"
              class="absolute z-40 flex h-20 w-20 items-center justify-center rounded-full bg-primary md:h-[100px] md:w-[100px]"
            >
              <span
                class="absolute top-0 right-0 z-[-1] h-full w-full animate-ping rounded-full bg-primary bg-opacity-20 delay-300 duration-1000"
              ></span>
              <svg
                width="23"
                height="27"
                viewBox="0 0 23 27"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M22.5 12.634C23.1667 13.0189 23.1667 13.9811 22.5 14.366L2.25 26.0574C1.58333 26.4423 0.750001 25.9611 0.750001 25.1913L0.750002 1.80866C0.750002 1.03886 1.58334 0.557731 2.25 0.942631L22.5 12.634Z"
                  fill="white"
                />
              </svg>
            </a>
          </div>
        </div>

        <span class="absolute left-0 top-0 z-[-1]">
          <svg
            width="644"
            height="489"
            viewBox="0 0 644 489"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle cx="196" cy="41" r="448" fill="white" fill-opacity="0.04" />
          </svg>
        </span>
        <span class="absolute left-0 top-0 z-[-1]">
          <svg
            width="659"
            height="562"
            viewBox="0 0 659 562"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="211"
              cy="114"
              r="448"
              fill="white"
              fill-opacity="0.04"
            />
          </svg>
        </span>
        <span class="absolute right-3 top-3 z-[-1] lg:right-1/2 lg:mr-3">
          <svg
            width="50"
            height="79"
            viewBox="0 0 50 79"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="47.7119"
              cy="76.9617"
              r="1.74121"
              transform="rotate(180 47.7119 76.9617)"
              fill="white"
            />
            <circle
              cx="47.7119"
              cy="61.6385"
              r="1.74121"
              transform="rotate(180 47.7119 61.6385)"
              fill="white"
            />
            <circle
              cx="47.7119"
              cy="46.3163"
              r="1.74121"
              transform="rotate(180 47.7119 46.3163)"
              fill="white"
            />
            <circle
              cx="47.7119"
              cy="16.7159"
              r="1.74121"
              transform="rotate(180 47.7119 16.7159)"
              fill="white"
            />
            <circle
              cx="47.7119"
              cy="31.3421"
              r="1.74121"
              transform="rotate(180 47.7119 31.3421)"
              fill="white"
            />
            <circle
              cx="47.7119"
              cy="1.74122"
              r="1.74121"
              transform="rotate(180 47.7119 1.74122)"
              fill="white"
            />
            <circle
              cx="32.3916"
              cy="76.9617"
              r="1.74121"
              transform="rotate(180 32.3916 76.9617)"
              fill="white"
            />
            <circle
              cx="32.3877"
              cy="61.6384"
              r="1.74121"
              transform="rotate(180 32.3877 61.6384)"
              fill="white"
            />
            <circle
              cx="32.3916"
              cy="46.3162"
              r="1.74121"
              transform="rotate(180 32.3916 46.3162)"
              fill="white"
            />
            <circle
              cx="32.3916"
              cy="16.7161"
              r="1.74121"
              transform="rotate(180 32.3916 16.7161)"
              fill="white"
            />
            <circle
              cx="32.3877"
              cy="31.342"
              r="1.74121"
              transform="rotate(180 32.3877 31.342)"
              fill="white"
            />
            <circle
              cx="32.3916"
              cy="1.74145"
              r="1.74121"
              transform="rotate(180 32.3916 1.74145)"
              fill="white"
            />
            <circle
              cx="17.0674"
              cy="76.9617"
              r="1.74121"
              transform="rotate(180 17.0674 76.9617)"
              fill="white"
            />
            <circle
              cx="17.0674"
              cy="61.6384"
              r="1.74121"
              transform="rotate(180 17.0674 61.6384)"
              fill="white"
            />
            <circle
              cx="17.0674"
              cy="46.3162"
              r="1.74121"
              transform="rotate(180 17.0674 46.3162)"
              fill="white"
            />
            <circle
              cx="17.0674"
              cy="16.7161"
              r="1.74121"
              transform="rotate(180 17.0674 16.7161)"
              fill="white"
            />
            <circle
              cx="17.0674"
              cy="31.342"
              r="1.74121"
              transform="rotate(180 17.0674 31.342)"
              fill="white"
            />
            <circle
              cx="17.0674"
              cy="1.74145"
              r="1.74121"
              transform="rotate(180 17.0674 1.74145)"
              fill="white"
            />
            <circle
              cx="1.74316"
              cy="76.9617"
              r="1.74121"
              transform="rotate(180 1.74316 76.9617)"
              fill="white"
            />
            <circle
              cx="1.74316"
              cy="61.6384"
              r="1.74121"
              transform="rotate(180 1.74316 61.6384)"
              fill="white"
            />
            <circle
              cx="1.74316"
              cy="46.3162"
              r="1.74121"
              transform="rotate(180 1.74316 46.3162)"
              fill="white"
            />
            <circle
              cx="1.74316"
              cy="16.7161"
              r="1.74121"
              transform="rotate(180 1.74316 16.7161)"
              fill="white"
            />
            <circle
              cx="1.74316"
              cy="31.342"
              r="1.74121"
              transform="rotate(180 1.74316 31.342)"
              fill="white"
            />
            <circle
              cx="1.74316"
              cy="1.74145"
              r="1.74121"
              transform="rotate(180 1.74316 1.74145)"
              fill="white"
            />
          </svg>
        </span>
      </div>

      <div
        x-show="videoOpen"
        x-transition
        class="fixed top-0 left-0 z-50 flex items-center justify-center w-full h-screen bg-black bg-opacity-70"
      >
        <div
          @click.outside="videoOpen = false"
          class="mx-auto w-full max-w-[550px] bg-white"
        >
          <iframe
            class="h-[320px] w-full"
            src="https://www.youtube.com/embed/LXb3EKWsInQ?autoplay=1&amp;mute=1"
          >
          </iframe>
        </div>

        <button
          @click="videoOpen = false"
          class="absolute top-0 right-0 flex items-center justify-center w-20 h-20 cursor-pointer text-body-color hover:bg-black"
        >
          <svg viewBox="0 0 16 15" class="w-8 h-8 fill-current">
            <path
              d="M3.37258 1.27L8.23258 6.13L13.0726 1.29C13.1574 1.19972 13.2596 1.12749 13.373 1.07766C13.4864 1.02783 13.6087 1.00141 13.7326 1C13.9978 1 14.2522 1.10536 14.4397 1.29289C14.6272 1.48043 14.7326 1.73478 14.7326 2C14.7349 2.1226 14.7122 2.24439 14.6657 2.35788C14.6193 2.47138 14.5502 2.57419 14.4626 2.66L9.57258 7.5L14.4626 12.39C14.6274 12.5512 14.724 12.7696 14.7326 13C14.7326 13.2652 14.6272 13.5196 14.4397 13.7071C14.2522 13.8946 13.9978 14 13.7326 14C13.6051 14.0053 13.478 13.984 13.3592 13.9375C13.2404 13.8911 13.1326 13.8204 13.0426 13.73L8.23258 8.87L3.38258 13.72C3.29809 13.8073 3.19715 13.8769 3.08559 13.925C2.97402 13.9731 2.85405 13.9986 2.73258 14C2.46737 14 2.21301 13.8946 2.02548 13.7071C1.83794 13.5196 1.73258 13.2652 1.73258 13C1.73025 12.8774 1.753 12.7556 1.79943 12.6421C1.84586 12.5286 1.91499 12.4258 2.00258 12.34L6.89258 7.5L2.00258 2.61C1.83777 2.44876 1.74112 2.23041 1.73258 2C1.73258 1.73478 1.83794 1.48043 2.02548 1.29289C2.21301 1.10536 2.46737 1 2.73258 1C2.97258 1.003 3.20258 1.1 3.37258 1.27Z"
            />
          </svg>
        </button>
      </div>
    </section>
    <!-- ====== Video Section End -->

    <!-- ====== Pricing Section Start -->
    <section
      class="relative z-20 overflow-hidden dark:bg-dark bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Pricing Table
              </span>
              <h2
                class="mb-3 text-3xl leading-[1.208] font-bold text-dark dark:text-white sm:text-4xl md:text-[40px]"
              >
                Our Pricing Plan
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="relative z-10 mb-10 overflow-hidden rounded-[10px] border-2 border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-[50px]"
            >
              <span class="block mb-3 text-lg font-semibold text-primary">
                Personal
              </span>
              <h2 class="mb-5 text-[42px] font-bold text-dark dark:text-white">
                <span>$59</span>
                <span
                  class="text-base font-medium text-body-color dark:text-dark-6"
                >
                  / year
                </span>
              </h2>
              <p
                class="pb-8 mb-8 text-base border-b border-stroke dark:border-dark-3 text-body-color dark:text-dark-6"
              >
                Perfect for using in a personal website or a client project.
              </p>
              <div class="mb-9 flex flex-col gap-[14px]">
                <p class="text-base text-body-color dark:text-dark-6">1 User</p>
                <p class="text-base text-body-color dark:text-dark-6">
                  All UI components
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Lifetime access
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Free updates
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Use on 1 (one) project
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  3 Months support
                </p>
              </div>
              <a
                href="javascript:void(0)"
                class="block w-full p-3 text-base font-medium text-center transition bg-transparent border rounded-md border-stroke dark:border-dark-3 text-primary hover:border-primary hover:bg-primary hover:text-white"
              >
                Choose Personal
              </a>

              <div>
                <span class="absolute right-0 top-7 z-[-1]">
                  <svg
                    width="77"
                    height="172"
                    viewBox="0 0 77 172"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                    <defs>
                      <linearGradient
                        id="paint0_linear"
                        x1="86"
                        y1="0"
                        x2="86"
                        y2="172"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#3056D3" stop-opacity="0.09" />
                        <stop
                          offset="1"
                          stop-color="#C4C4C4"
                          stop-opacity="0"
                        />
                      </linearGradient>
                    </defs>
                  </svg>
                </span>
                <span class="absolute right-4 top-4 z-[-1]">
                  <svg
                    width="41"
                    height="89"
                    viewBox="0 0 41 89"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="38.9138"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 38.9138 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 38.9138 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 38.9138 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 38.9138 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 38.9138 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 38.9138 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 38.9138 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="1.42021"
                      r="1.42021"
                      transform="rotate(180 38.9138 1.42021)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 26.4157 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 26.4157 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 26.4157 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 26.4157 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 26.4157 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 26.4157 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 26.4157 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="1.4202"
                      r="1.42021"
                      transform="rotate(180 26.4157 1.4202)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 13.9177 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 13.9177 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 13.9177 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 13.9177 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 13.9177 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 13.9177 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 13.9177 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="1.42019"
                      r="1.42021"
                      transform="rotate(180 13.9177 1.42019)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 1.41963 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 1.41963 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 1.41963 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 1.41963 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 1.41963 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 1.41963 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 1.41963 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="1.4202"
                      r="1.42021"
                      transform="rotate(180 1.41963 1.4202)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="relative z-10 mb-10 overflow-hidden rounded-[10px] border-2 border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-[50px]"
            >
              <span class="block mb-3 text-lg font-semibold text-primary">
                Business
              </span>
              <h2 class="mb-5 text-[42px] font-bold text-dark dark:text-white">
                <span>$199</span>
                <span
                  class="text-base font-medium text-body-color dark:text-dark-6"
                >
                  / year
                </span>
              </h2>
              <p
                class="pb-8 mb-8 text-base border-b border-stroke dark:border-dark-3 text-body-color dark:text-dark-6"
              >
                Perfect for using in a Business website or a client project.
              </p>
              <div class="mb-9 flex flex-col gap-[14px]">
                <p class="text-base text-body-color dark:text-dark-6">
                  5 Users
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  All UI components
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Lifetime access
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Free updates
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Use on 3 (Three) project
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  4 Months support
                </p>
              </div>
              <a
                href="javascript:void(0)"
                class="block w-full p-3 text-base font-medium text-center text-white transition border rounded-md border-primary bg-primary hover:bg-opacity-90"
              >
                Choose Business
              </a>

              <div>
                <span class="absolute right-0 top-7 z-[-1]">
                  <svg
                    width="77"
                    height="172"
                    viewBox="0 0 77 172"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                    <defs>
                      <linearGradient
                        id="paint0_linear"
                        x1="86"
                        y1="0"
                        x2="86"
                        y2="172"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#3056D3" stop-opacity="0.09" />
                        <stop
                          offset="1"
                          stop-color="#C4C4C4"
                          stop-opacity="0"
                        />
                      </linearGradient>
                    </defs>
                  </svg>
                </span>
                <span class="absolute right-4 top-4 z-[-1]">
                  <svg
                    width="41"
                    height="89"
                    viewBox="0 0 41 89"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="38.9138"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 38.9138 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 38.9138 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 38.9138 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 38.9138 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 38.9138 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 38.9138 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 38.9138 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="1.42021"
                      r="1.42021"
                      transform="rotate(180 38.9138 1.42021)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 26.4157 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 26.4157 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 26.4157 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 26.4157 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 26.4157 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 26.4157 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 26.4157 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="1.4202"
                      r="1.42021"
                      transform="rotate(180 26.4157 1.4202)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 13.9177 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 13.9177 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 13.9177 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 13.9177 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 13.9177 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 13.9177 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 13.9177 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="1.42019"
                      r="1.42021"
                      transform="rotate(180 13.9177 1.42019)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 1.41963 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 1.41963 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 1.41963 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 1.41963 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 1.41963 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 1.41963 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 1.41963 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="1.4202"
                      r="1.42021"
                      transform="rotate(180 1.41963 1.4202)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div
              class="relative z-10 mb-10 overflow-hidden rounded-[10px] border-2 border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-[50px]"
            >
              <span class="block mb-3 text-lg font-semibold text-primary">
                Professional
              </span>
              <h2 class="mb-5 text-[42px] font-bold text-dark dark:text-white">
                <span>$256</span>
                <span
                  class="text-base font-medium text-body-color dark:text-dark-6"
                >
                  / year
                </span>
              </h2>
              <p
                class="pb-8 mb-8 text-base border-b border-stroke dark:border-dark-3 text-body-color dark:text-dark-6"
              >
                Perfect for using in a Professional website or a client project.
              </p>
              <div class="mb-9 flex flex-col gap-[14px]">
                <p class="text-base text-body-color dark:text-dark-6">
                  Unlimited Users
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  All UI components
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Lifetime access
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Free updates
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  Use on Unlimited project
                </p>
                <p class="text-base text-body-color dark:text-dark-6">
                  12 Months support
                </p>
              </div>
              <a
                href="javascript:void(0)"
                class="block w-full p-3 text-base font-medium text-center transition bg-transparent border rounded-md border-stroke dark:border-dark-3 text-primary hover:border-primary hover:bg-primary hover:text-white"
              >
                Choose Professional
              </a>

              <div>
                <span class="absolute right-0 top-7 z-[-1]">
                  <svg
                    width="77"
                    height="172"
                    viewBox="0 0 77 172"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                    <defs>
                      <linearGradient
                        id="paint0_linear"
                        x1="86"
                        y1="0"
                        x2="86"
                        y2="172"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop stop-color="#3056D3" stop-opacity="0.09" />
                        <stop
                          offset="1"
                          stop-color="#C4C4C4"
                          stop-opacity="0"
                        />
                      </linearGradient>
                    </defs>
                  </svg>
                </span>
                <span class="absolute right-4 top-4 z-[-1]">
                  <svg
                    width="41"
                    height="89"
                    viewBox="0 0 41 89"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="38.9138"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 38.9138 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 38.9138 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 38.9138 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 38.9138 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 38.9138 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 38.9138 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 38.9138 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="38.9138"
                      cy="1.42021"
                      r="1.42021"
                      transform="rotate(180 38.9138 1.42021)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 26.4157 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 26.4157 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 26.4157 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 26.4157 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 26.4157 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 26.4157 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 26.4157 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="26.4157"
                      cy="1.4202"
                      r="1.42021"
                      transform="rotate(180 26.4157 1.4202)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 13.9177 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 13.9177 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 13.9177 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 13.9177 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 13.9177 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 13.9177 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 13.9177 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="13.9177"
                      cy="1.42019"
                      r="1.42021"
                      transform="rotate(180 13.9177 1.42019)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="87.4849"
                      r="1.42021"
                      transform="rotate(180 1.41963 87.4849)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="74.9871"
                      r="1.42021"
                      transform="rotate(180 1.41963 74.9871)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="62.4892"
                      r="1.42021"
                      transform="rotate(180 1.41963 62.4892)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="38.3457"
                      r="1.42021"
                      transform="rotate(180 1.41963 38.3457)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="13.634"
                      r="1.42021"
                      transform="rotate(180 1.41963 13.634)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="50.2754"
                      r="1.42021"
                      transform="rotate(180 1.41963 50.2754)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="26.1319"
                      r="1.42021"
                      transform="rotate(180 1.41963 26.1319)"
                      fill="#3056D3"
                    />
                    <circle
                      cx="1.41963"
                      cy="1.4202"
                      r="1.42021"
                      transform="rotate(180 1.41963 1.4202)"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Pricing Section End -->

    <!-- ====== Team Section Start -->
    <section
      class="overflow-hidden bg-tg-bg dark:bg-dark-2 pt-20 pb-20 lg:pt-[120px] lg:pb-[120px]"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Our Team
              </span>
              <h2
                class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
              >
                Our Team Members
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 xl:w-10/12 2xl:w-9/12">
            <div
              class="relative flex flex-wrap rounded-[10px] bg-white dark:bg-dark px-6 pt-10 shadow-team"
            >
              <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                <div class="mx-auto mb-10 max-w-[200px]">
                  <div class="mb-4 overflow-hidden rounded-[5px]">
                    <img
                      src="src/assets/images/team/team-05/image-01.jpg"
                      alt="image"
                      class="w-full"
                    />
                  </div>
                  <div class="text-center">
                    <h4
                      class="mb-1 text-base font-semibold text-dark dark:text-white"
                    >
                      Melissa Tatcher
                    </h4>
                    <p
                      class="text-body-color dark:text-dark-6 mb-5 leading-[16px] text-[10px] uppercase"
                    >
                      MARKETING OPERATIONS
                    </p>
                    <div class="flex items-center justify-center gap-5">
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M11.8502 6.45H10.4502H9.9502V5.95V4.4V3.9H10.4502H11.5002C11.7752 3.9 12.0002 3.7 12.0002 3.4V0.75C12.0002 0.475 11.8002 0.25 11.5002 0.25H9.6752C7.7002 0.25 6.3252 1.65 6.3252 3.725V5.9V6.4H5.8252H4.1252C3.7752 6.4 3.4502 6.675 3.4502 7.075V8.875C3.4502 9.225 3.7252 9.55 4.1252 9.55H5.7752H6.2752V10.05V15.075C6.2752 15.425 6.5502 15.75 6.9502 15.75H9.3002C9.4502 15.75 9.5752 15.675 9.6752 15.575C9.7752 15.475 9.85019 15.3 9.85019 15.15V10.075V9.575H10.3752H11.5002C11.8252 9.575 12.0752 9.375 12.1252 9.075V9.05V9.025L12.4752 7.3C12.5002 7.125 12.4752 6.925 12.3252 6.725C12.2752 6.6 12.0502 6.475 11.8502 6.45Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M14.6353 4.30004C14.7245 4.19615 14.6083 4.0604 14.4764 4.10903C14.1821 4.21757 13.9132 4.28916 13.5155 4.33335C14.0047 4.06095 14.2322 3.67161 14.4173 3.19475C14.4619 3.07973 14.3273 2.97535 14.2113 3.0303C13.7405 3.25356 13.2324 3.4192 12.6981 3.51707C12.1701 2.99371 11.4173 2.66669 10.5847 2.66669C8.98574 2.66669 7.68914 3.87253 7.68914 5.35947C7.68914 5.57056 7.71501 5.77618 7.76381 5.97305C5.46538 5.86597 3.41588 4.88275 1.992 3.37509C1.8944 3.27176 1.71732 3.28548 1.65655 3.41151C1.49444 3.74775 1.40407 4.12075 1.40407 4.51346C1.40407 5.44751 1.91508 6.27164 2.6919 6.75455C2.3436 6.74409 2.0105 6.67622 1.70354 6.56105C1.55409 6.50498 1.38277 6.60351 1.40285 6.75422C1.557 7.91149 2.49395 8.86622 3.70334 9.09182C3.46047 9.15362 3.20467 9.18642 2.94005 9.18642C2.87589 9.18642 2.81228 9.18442 2.74926 9.18055C2.58888 9.17062 2.45853 9.31409 2.52729 9.45135C2.98096 10.3568 3.96057 10.989 5.10054 11.0086C4.10968 11.731 2.86125 12.1614 1.50462 12.1614C1.33735 12.1614 1.26559 12.3765 1.41399 12.4494C2.56014 13.0128 3.86538 13.3334 5.25226 13.3334C10.5782 13.3334 13.4902 9.23022 13.4902 5.67173C13.4902 5.55525 13.4873 5.43876 13.482 5.32337C13.9143 5.03295 14.3029 4.68761 14.6353 4.30004Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M8.0216 10.4947C9.39934 10.4947 10.5162 9.37786 10.5162 8.00012C10.5162 6.62237 9.39934 5.50549 8.0216 5.50549C6.64386 5.50549 5.52698 6.62237 5.52698 8.00012C5.52698 9.37786 6.64386 10.4947 8.0216 10.4947Z"
                            fill=""
                          />
                          <path
                            d="M10.7312 1.33331H5.26883C3.09678 1.33331 1.33334 3.09675 1.33334 5.2688V10.6882C1.33334 12.9032 3.09678 14.6666 5.26883 14.6666H10.6882C12.9032 14.6666 14.6667 12.9032 14.6667 10.7312V5.2688C14.6667 3.09675 12.9032 1.33331 10.7312 1.33331ZM8.02152 11.2688C6.19356 11.2688 4.7527 9.78493 4.7527 7.99998C4.7527 6.21503 6.21506 4.73116 8.02152 4.73116C9.80646 4.73116 11.2688 6.21503 11.2688 7.99998C11.2688 9.78493 9.82797 11.2688 8.02152 11.2688ZM12.5376 5.03224C12.3226 5.2688 12 5.39783 11.6344 5.39783C11.3118 5.39783 10.9893 5.2688 10.7312 5.03224C10.4946 4.79568 10.3656 4.4946 10.3656 4.12901C10.3656 3.76342 10.4946 3.48385 10.7312 3.22579C10.9678 2.96772 11.2688 2.83869 11.6344 2.83869C11.957 2.83869 12.3011 2.96772 12.5376 3.20428C12.7527 3.48385 12.9032 3.80643 12.9032 4.15052C12.8817 4.4946 12.7527 4.79568 12.5376 5.03224Z"
                            fill=""
                          />
                          <path
                            d="M11.6564 3.61273C11.3769 3.61273 11.1403 3.84929 11.1403 4.12886C11.1403 4.40843 11.3769 4.64499 11.6564 4.64499C11.936 4.64499 12.1726 4.40843 12.1726 4.12886C12.1726 3.84929 11.9575 3.61273 11.6564 3.61273Z"
                            fill=""
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                <div class="mx-auto mb-10 max-w-[200px]">
                  <div class="mb-4 overflow-hidden rounded-[5px]">
                    <img
                      src="src/assets/images/team/team-05/image-02.jpg"
                      alt="image"
                      class="w-full"
                    />
                  </div>
                  <div class="text-center">
                    <h4
                      class="mb-1 text-base font-semibold text-dark dark:text-white"
                    >
                      Stuard Ferrel
                    </h4>
                    <p
                      class="text-body-color dark:text-dark-6 mb-5 leading-[16px] text-[10px] uppercase"
                    >
                      DIGITAL MARKETER
                    </p>
                    <div class="flex items-center justify-center gap-5">
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M11.8502 6.45H10.4502H9.9502V5.95V4.4V3.9H10.4502H11.5002C11.7752 3.9 12.0002 3.7 12.0002 3.4V0.75C12.0002 0.475 11.8002 0.25 11.5002 0.25H9.6752C7.7002 0.25 6.3252 1.65 6.3252 3.725V5.9V6.4H5.8252H4.1252C3.7752 6.4 3.4502 6.675 3.4502 7.075V8.875C3.4502 9.225 3.7252 9.55 4.1252 9.55H5.7752H6.2752V10.05V15.075C6.2752 15.425 6.5502 15.75 6.9502 15.75H9.3002C9.4502 15.75 9.5752 15.675 9.6752 15.575C9.7752 15.475 9.85019 15.3 9.85019 15.15V10.075V9.575H10.3752H11.5002C11.8252 9.575 12.0752 9.375 12.1252 9.075V9.05V9.025L12.4752 7.3C12.5002 7.125 12.4752 6.925 12.3252 6.725C12.2752 6.6 12.0502 6.475 11.8502 6.45Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M14.6353 4.30004C14.7245 4.19615 14.6083 4.0604 14.4764 4.10903C14.1821 4.21757 13.9132 4.28916 13.5155 4.33335C14.0047 4.06095 14.2322 3.67161 14.4173 3.19475C14.4619 3.07973 14.3273 2.97535 14.2113 3.0303C13.7405 3.25356 13.2324 3.4192 12.6981 3.51707C12.1701 2.99371 11.4173 2.66669 10.5847 2.66669C8.98574 2.66669 7.68914 3.87253 7.68914 5.35947C7.68914 5.57056 7.71501 5.77618 7.76381 5.97305C5.46538 5.86597 3.41588 4.88275 1.992 3.37509C1.8944 3.27176 1.71732 3.28548 1.65655 3.41151C1.49444 3.74775 1.40407 4.12075 1.40407 4.51346C1.40407 5.44751 1.91508 6.27164 2.6919 6.75455C2.3436 6.74409 2.0105 6.67622 1.70354 6.56105C1.55409 6.50498 1.38277 6.60351 1.40285 6.75422C1.557 7.91149 2.49395 8.86622 3.70334 9.09182C3.46047 9.15362 3.20467 9.18642 2.94005 9.18642C2.87589 9.18642 2.81228 9.18442 2.74926 9.18055C2.58888 9.17062 2.45853 9.31409 2.52729 9.45135C2.98096 10.3568 3.96057 10.989 5.10054 11.0086C4.10968 11.731 2.86125 12.1614 1.50462 12.1614C1.33735 12.1614 1.26559 12.3765 1.41399 12.4494C2.56014 13.0128 3.86538 13.3334 5.25226 13.3334C10.5782 13.3334 13.4902 9.23022 13.4902 5.67173C13.4902 5.55525 13.4873 5.43876 13.482 5.32337C13.9143 5.03295 14.3029 4.68761 14.6353 4.30004Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M8.0216 10.4947C9.39934 10.4947 10.5162 9.37786 10.5162 8.00012C10.5162 6.62237 9.39934 5.50549 8.0216 5.50549C6.64386 5.50549 5.52698 6.62237 5.52698 8.00012C5.52698 9.37786 6.64386 10.4947 8.0216 10.4947Z"
                            fill=""
                          />
                          <path
                            d="M10.7312 1.33331H5.26883C3.09678 1.33331 1.33334 3.09675 1.33334 5.2688V10.6882C1.33334 12.9032 3.09678 14.6666 5.26883 14.6666H10.6882C12.9032 14.6666 14.6667 12.9032 14.6667 10.7312V5.2688C14.6667 3.09675 12.9032 1.33331 10.7312 1.33331ZM8.02152 11.2688C6.19356 11.2688 4.7527 9.78493 4.7527 7.99998C4.7527 6.21503 6.21506 4.73116 8.02152 4.73116C9.80646 4.73116 11.2688 6.21503 11.2688 7.99998C11.2688 9.78493 9.82797 11.2688 8.02152 11.2688ZM12.5376 5.03224C12.3226 5.2688 12 5.39783 11.6344 5.39783C11.3118 5.39783 10.9893 5.2688 10.7312 5.03224C10.4946 4.79568 10.3656 4.4946 10.3656 4.12901C10.3656 3.76342 10.4946 3.48385 10.7312 3.22579C10.9678 2.96772 11.2688 2.83869 11.6344 2.83869C11.957 2.83869 12.3011 2.96772 12.5376 3.20428C12.7527 3.48385 12.9032 3.80643 12.9032 4.15052C12.8817 4.4946 12.7527 4.79568 12.5376 5.03224Z"
                            fill=""
                          />
                          <path
                            d="M11.6564 3.61273C11.3769 3.61273 11.1403 3.84929 11.1403 4.12886C11.1403 4.40843 11.3769 4.64499 11.6564 4.64499C11.936 4.64499 12.1726 4.40843 12.1726 4.12886C12.1726 3.84929 11.9575 3.61273 11.6564 3.61273Z"
                            fill=""
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                <div class="mx-auto mb-10 max-w-[200px]">
                  <div class="mb-4 overflow-hidden rounded-[5px]">
                    <img
                      src="src/assets/images/team/team-05/image-03.jpg"
                      alt="image"
                      class="w-full"
                    />
                  </div>
                  <div class="text-center">
                    <h4
                      class="mb-1 text-base font-semibold text-dark dark:text-white"
                    >
                      Eva Hudson
                    </h4>
                    <p
                      class="text-body-color dark:text-dark-6 mb-5 leading-[16px] text-[10px] uppercase"
                    >
                      UI/UX DESIGNER
                    </p>
                    <div class="flex items-center justify-center gap-5">
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M11.8502 6.45H10.4502H9.9502V5.95V4.4V3.9H10.4502H11.5002C11.7752 3.9 12.0002 3.7 12.0002 3.4V0.75C12.0002 0.475 11.8002 0.25 11.5002 0.25H9.6752C7.7002 0.25 6.3252 1.65 6.3252 3.725V5.9V6.4H5.8252H4.1252C3.7752 6.4 3.4502 6.675 3.4502 7.075V8.875C3.4502 9.225 3.7252 9.55 4.1252 9.55H5.7752H6.2752V10.05V15.075C6.2752 15.425 6.5502 15.75 6.9502 15.75H9.3002C9.4502 15.75 9.5752 15.675 9.6752 15.575C9.7752 15.475 9.85019 15.3 9.85019 15.15V10.075V9.575H10.3752H11.5002C11.8252 9.575 12.0752 9.375 12.1252 9.075V9.05V9.025L12.4752 7.3C12.5002 7.125 12.4752 6.925 12.3252 6.725C12.2752 6.6 12.0502 6.475 11.8502 6.45Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M14.6353 4.30004C14.7245 4.19615 14.6083 4.0604 14.4764 4.10903C14.1821 4.21757 13.9132 4.28916 13.5155 4.33335C14.0047 4.06095 14.2322 3.67161 14.4173 3.19475C14.4619 3.07973 14.3273 2.97535 14.2113 3.0303C13.7405 3.25356 13.2324 3.4192 12.6981 3.51707C12.1701 2.99371 11.4173 2.66669 10.5847 2.66669C8.98574 2.66669 7.68914 3.87253 7.68914 5.35947C7.68914 5.57056 7.71501 5.77618 7.76381 5.97305C5.46538 5.86597 3.41588 4.88275 1.992 3.37509C1.8944 3.27176 1.71732 3.28548 1.65655 3.41151C1.49444 3.74775 1.40407 4.12075 1.40407 4.51346C1.40407 5.44751 1.91508 6.27164 2.6919 6.75455C2.3436 6.74409 2.0105 6.67622 1.70354 6.56105C1.55409 6.50498 1.38277 6.60351 1.40285 6.75422C1.557 7.91149 2.49395 8.86622 3.70334 9.09182C3.46047 9.15362 3.20467 9.18642 2.94005 9.18642C2.87589 9.18642 2.81228 9.18442 2.74926 9.18055C2.58888 9.17062 2.45853 9.31409 2.52729 9.45135C2.98096 10.3568 3.96057 10.989 5.10054 11.0086C4.10968 11.731 2.86125 12.1614 1.50462 12.1614C1.33735 12.1614 1.26559 12.3765 1.41399 12.4494C2.56014 13.0128 3.86538 13.3334 5.25226 13.3334C10.5782 13.3334 13.4902 9.23022 13.4902 5.67173C13.4902 5.55525 13.4873 5.43876 13.482 5.32337C13.9143 5.03295 14.3029 4.68761 14.6353 4.30004Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M8.0216 10.4947C9.39934 10.4947 10.5162 9.37786 10.5162 8.00012C10.5162 6.62237 9.39934 5.50549 8.0216 5.50549C6.64386 5.50549 5.52698 6.62237 5.52698 8.00012C5.52698 9.37786 6.64386 10.4947 8.0216 10.4947Z"
                            fill=""
                          />
                          <path
                            d="M10.7312 1.33331H5.26883C3.09678 1.33331 1.33334 3.09675 1.33334 5.2688V10.6882C1.33334 12.9032 3.09678 14.6666 5.26883 14.6666H10.6882C12.9032 14.6666 14.6667 12.9032 14.6667 10.7312V5.2688C14.6667 3.09675 12.9032 1.33331 10.7312 1.33331ZM8.02152 11.2688C6.19356 11.2688 4.7527 9.78493 4.7527 7.99998C4.7527 6.21503 6.21506 4.73116 8.02152 4.73116C9.80646 4.73116 11.2688 6.21503 11.2688 7.99998C11.2688 9.78493 9.82797 11.2688 8.02152 11.2688ZM12.5376 5.03224C12.3226 5.2688 12 5.39783 11.6344 5.39783C11.3118 5.39783 10.9893 5.2688 10.7312 5.03224C10.4946 4.79568 10.3656 4.4946 10.3656 4.12901C10.3656 3.76342 10.4946 3.48385 10.7312 3.22579C10.9678 2.96772 11.2688 2.83869 11.6344 2.83869C11.957 2.83869 12.3011 2.96772 12.5376 3.20428C12.7527 3.48385 12.9032 3.80643 12.9032 4.15052C12.8817 4.4946 12.7527 4.79568 12.5376 5.03224Z"
                            fill=""
                          />
                          <path
                            d="M11.6564 3.61273C11.3769 3.61273 11.1403 3.84929 11.1403 4.12886C11.1403 4.40843 11.3769 4.64499 11.6564 4.64499C11.936 4.64499 12.1726 4.40843 12.1726 4.12886C12.1726 3.84929 11.9575 3.61273 11.6564 3.61273Z"
                            fill=""
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full px-4 sm:w-1/2 lg:w-1/4">
                <div class="mx-auto mb-10 max-w-[200px]">
                  <div class="mb-4 overflow-hidden rounded-[5px]">
                    <img
                      src="src/assets/images/team/team-05/image-04.jpg"
                      alt="image"
                      class="w-full"
                    />
                  </div>
                  <div class="text-center">
                    <h4
                      class="mb-1 text-base font-semibold text-dark dark:text-white"
                    >
                      Martin Ethariam
                    </h4>
                    <p
                      class="text-body-color dark:text-dark-6 mb-5 leading-[16px] text-[10px] uppercase"
                    >
                      GRAPHIC DESIGNER
                    </p>
                    <div class="flex items-center justify-center gap-5">
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M11.8502 6.45H10.4502H9.9502V5.95V4.4V3.9H10.4502H11.5002C11.7752 3.9 12.0002 3.7 12.0002 3.4V0.75C12.0002 0.475 11.8002 0.25 11.5002 0.25H9.6752C7.7002 0.25 6.3252 1.65 6.3252 3.725V5.9V6.4H5.8252H4.1252C3.7752 6.4 3.4502 6.675 3.4502 7.075V8.875C3.4502 9.225 3.7252 9.55 4.1252 9.55H5.7752H6.2752V10.05V15.075C6.2752 15.425 6.5502 15.75 6.9502 15.75H9.3002C9.4502 15.75 9.5752 15.675 9.6752 15.575C9.7752 15.475 9.85019 15.3 9.85019 15.15V10.075V9.575H10.3752H11.5002C11.8252 9.575 12.0752 9.375 12.1252 9.075V9.05V9.025L12.4752 7.3C12.5002 7.125 12.4752 6.925 12.3252 6.725C12.2752 6.6 12.0502 6.475 11.8502 6.45Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M14.6353 4.30004C14.7245 4.19615 14.6083 4.0604 14.4764 4.10903C14.1821 4.21757 13.9132 4.28916 13.5155 4.33335C14.0047 4.06095 14.2322 3.67161 14.4173 3.19475C14.4619 3.07973 14.3273 2.97535 14.2113 3.0303C13.7405 3.25356 13.2324 3.4192 12.6981 3.51707C12.1701 2.99371 11.4173 2.66669 10.5847 2.66669C8.98574 2.66669 7.68914 3.87253 7.68914 5.35947C7.68914 5.57056 7.71501 5.77618 7.76381 5.97305C5.46538 5.86597 3.41588 4.88275 1.992 3.37509C1.8944 3.27176 1.71732 3.28548 1.65655 3.41151C1.49444 3.74775 1.40407 4.12075 1.40407 4.51346C1.40407 5.44751 1.91508 6.27164 2.6919 6.75455C2.3436 6.74409 2.0105 6.67622 1.70354 6.56105C1.55409 6.50498 1.38277 6.60351 1.40285 6.75422C1.557 7.91149 2.49395 8.86622 3.70334 9.09182C3.46047 9.15362 3.20467 9.18642 2.94005 9.18642C2.87589 9.18642 2.81228 9.18442 2.74926 9.18055C2.58888 9.17062 2.45853 9.31409 2.52729 9.45135C2.98096 10.3568 3.96057 10.989 5.10054 11.0086C4.10968 11.731 2.86125 12.1614 1.50462 12.1614C1.33735 12.1614 1.26559 12.3765 1.41399 12.4494C2.56014 13.0128 3.86538 13.3334 5.25226 13.3334C10.5782 13.3334 13.4902 9.23022 13.4902 5.67173C13.4902 5.55525 13.4873 5.43876 13.482 5.32337C13.9143 5.03295 14.3029 4.68761 14.6353 4.30004Z"
                            fill=""
                          />
                        </svg>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="hover:text-primary text-dark-8"
                      >
                        <svg
                          width="16"
                          height="16"
                          viewBox="0 0 16 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          class="fill-current"
                        >
                          <path
                            d="M8.0216 10.4947C9.39934 10.4947 10.5162 9.37786 10.5162 8.00012C10.5162 6.62237 9.39934 5.50549 8.0216 5.50549C6.64386 5.50549 5.52698 6.62237 5.52698 8.00012C5.52698 9.37786 6.64386 10.4947 8.0216 10.4947Z"
                            fill=""
                          />
                          <path
                            d="M10.7312 1.33331H5.26883C3.09678 1.33331 1.33334 3.09675 1.33334 5.2688V10.6882C1.33334 12.9032 3.09678 14.6666 5.26883 14.6666H10.6882C12.9032 14.6666 14.6667 12.9032 14.6667 10.7312V5.2688C14.6667 3.09675 12.9032 1.33331 10.7312 1.33331ZM8.02152 11.2688C6.19356 11.2688 4.7527 9.78493 4.7527 7.99998C4.7527 6.21503 6.21506 4.73116 8.02152 4.73116C9.80646 4.73116 11.2688 6.21503 11.2688 7.99998C11.2688 9.78493 9.82797 11.2688 8.02152 11.2688ZM12.5376 5.03224C12.3226 5.2688 12 5.39783 11.6344 5.39783C11.3118 5.39783 10.9893 5.2688 10.7312 5.03224C10.4946 4.79568 10.3656 4.4946 10.3656 4.12901C10.3656 3.76342 10.4946 3.48385 10.7312 3.22579C10.9678 2.96772 11.2688 2.83869 11.6344 2.83869C11.957 2.83869 12.3011 2.96772 12.5376 3.20428C12.7527 3.48385 12.9032 3.80643 12.9032 4.15052C12.8817 4.4946 12.7527 4.79568 12.5376 5.03224Z"
                            fill=""
                          />
                          <path
                            d="M11.6564 3.61273C11.3769 3.61273 11.1403 3.84929 11.1403 4.12886C11.1403 4.40843 11.3769 4.64499 11.6564 4.64499C11.936 4.64499 12.1726 4.40843 12.1726 4.12886C12.1726 3.84929 11.9575 3.61273 11.6564 3.61273Z"
                            fill=""
                          />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <span class="absolute -left-12 -top-12 z-[-1]">
                <svg
                  width="143"
                  height="143"
                  viewBox="0 0 143 143"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <mask
                    id="mask0_924_7197"
                    style="mask-type: luminance"
                    maskUnits="userSpaceOnUse"
                    x="19"
                    y="19"
                    width="105"
                    height="105"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M45.1467 26.0654C70.0804 11.6699 101.963 20.2128 116.359 45.1465C130.754 70.0803 122.211 101.963 97.2774 116.358C72.3437 130.754 40.461 122.211 26.0655 97.2773C11.67 72.3435 20.2129 40.4609 45.1467 26.0654Z"
                      fill="white"
                    />
                  </mask>
                  <g mask="url(#mask0_924_7197)">
                    <path
                      d="M25.1839 111.911L139.426 45.9539"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M28.6839 117.973L142.926 52.0154"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M32.1839 124.035L146.426 58.0779"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M35.6839 130.098L149.926 64.1404"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M39.1839 136.159L153.426 70.2019"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M42.6839 142.222L156.926 76.2644"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M18.1839 99.7864L132.426 33.8289"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M21.6839 105.849L135.926 39.8914"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M11.1839 87.6624L125.426 21.7049"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M14.6839 93.7249L128.926 27.7674"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M4.18392 75.5384L118.426 9.58085"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M7.68197 81.5999L121.924 15.6424"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M-2.72461 63.5752L111.517 -2.38234"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M0.681966 69.4759L114.924 3.51835"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                    <path
                      d="M-6.2832 57.4092L107.959 -8.54836"
                      stroke="#3758F9"
                      stroke-width="3"
                    />
                  </g>
                </svg>
              </span>
              <span class="absolute -bottom-8 -right-8 z-[-1]">
                <svg
                  width="76"
                  height="75"
                  viewBox="0 0 76 75"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3329 4.38806C17.5447 4.38806 18.527 3.40576 18.527 2.19403C18.527 0.982301 17.5447 0 16.3329 0C15.1212 0 14.1389 0.982301 14.1389 2.19403C14.1389 3.40576 15.1212 4.38806 16.3329 4.38806Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.4724 4.38806C31.6841 4.38806 32.6664 3.40576 32.6664 2.19403C32.6664 0.982301 31.6841 0 30.4724 0C29.2607 0 28.2784 0.982301 28.2784 2.19403C28.2784 3.40576 29.2607 4.38806 30.4724 4.38806Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M44.6118 4.38806C45.8235 4.38806 46.8058 3.40576 46.8058 2.19403C46.8058 0.982301 45.8235 0 44.6118 0C43.4001 0 42.4178 0.982301 42.4178 2.19403C42.4178 3.40576 43.4001 4.38806 44.6118 4.38806Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.7512 4.38806C59.963 4.38806 60.9453 3.40576 60.9453 2.19403C60.9453 0.982301 59.963 0 58.7512 0C57.5395 0 56.5572 0.982301 56.5572 2.19403C56.5572 3.40576 57.5395 4.38806 58.7512 4.38806Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M72.8907 4.38806C74.1024 4.38806 75.0847 3.40576 75.0847 2.19403C75.0847 0.982301 74.1024 0 72.8907 0C71.679 0 70.6967 0.982301 70.6967 2.19403C70.6967 3.40576 71.679 4.38806 72.8907 4.38806Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.19403 18.5103C3.40576 18.5103 4.38806 17.528 4.38806 16.3162C4.38806 15.1045 3.40576 14.1222 2.19403 14.1222C0.982301 14.1222 0 15.1045 0 16.3162C0 17.528 0.982301 18.5103 2.19403 18.5103Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3329 18.5103C17.5447 18.5103 18.527 17.528 18.527 16.3162C18.527 15.1045 17.5447 14.1222 16.3329 14.1222C15.1212 14.1222 14.1389 15.1045 14.1389 16.3162C14.1389 17.528 15.1212 18.5103 16.3329 18.5103Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.4724 18.5103C31.6841 18.5103 32.6664 17.528 32.6664 16.3162C32.6664 15.1045 31.6841 14.1222 30.4724 14.1222C29.2607 14.1222 28.2784 15.1045 28.2784 16.3162C28.2784 17.528 29.2607 18.5103 30.4724 18.5103Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M44.6118 18.5103C45.8235 18.5103 46.8058 17.528 46.8058 16.3162C46.8058 15.1045 45.8235 14.1222 44.6118 14.1222C43.4001 14.1222 42.4178 15.1045 42.4178 16.3162C42.4178 17.528 43.4001 18.5103 44.6118 18.5103Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.7512 18.5103C59.963 18.5103 60.9453 17.528 60.9453 16.3162C60.9453 15.1045 59.963 14.1222 58.7512 14.1222C57.5395 14.1222 56.5572 15.1045 56.5572 16.3162C56.5572 17.528 57.5395 18.5103 58.7512 18.5103Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M72.8907 18.5103C74.1024 18.5103 75.0847 17.528 75.0847 16.3162C75.0847 15.1045 74.1024 14.1222 72.8907 14.1222C71.679 14.1222 70.6967 15.1045 70.6967 16.3162C70.6967 17.528 71.679 18.5103 72.8907 18.5103Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.19403 32.6329C3.40576 32.6329 4.38806 31.6506 4.38806 30.4389C4.38806 29.2272 3.40576 28.2449 2.19403 28.2449C0.982301 28.2449 0 29.2272 0 30.4389C0 31.6506 0.982301 32.6329 2.19403 32.6329Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3329 32.6329C17.5447 32.6329 18.527 31.6506 18.527 30.4389C18.527 29.2272 17.5447 28.2449 16.3329 28.2449C15.1212 28.2449 14.1389 29.2272 14.1389 30.4389C14.1389 31.6506 15.1212 32.6329 16.3329 32.6329Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.4724 32.6329C31.6841 32.6329 32.6664 31.6506 32.6664 30.4389C32.6664 29.2272 31.6841 28.2449 30.4724 28.2449C29.2607 28.2449 28.2784 29.2272 28.2784 30.4389C28.2784 31.6506 29.2607 32.6329 30.4724 32.6329Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M44.6118 32.6329C45.8235 32.6329 46.8058 31.6506 46.8058 30.4389C46.8058 29.2272 45.8235 28.2449 44.6118 28.2449C43.4001 28.2449 42.4178 29.2272 42.4178 30.4389C42.4178 31.6506 43.4001 32.6329 44.6118 32.6329Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.7512 32.6329C59.963 32.6329 60.9453 31.6506 60.9453 30.4389C60.9453 29.2272 59.963 28.2449 58.7512 28.2449C57.5395 28.2449 56.5572 29.2272 56.5572 30.4389C56.5572 31.6506 57.5395 32.6329 58.7512 32.6329Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M72.8907 32.6329C74.1024 32.6329 75.0847 31.6506 75.0847 30.4389C75.0847 29.2272 74.1024 28.2449 72.8907 28.2449C71.679 28.2449 70.6967 29.2272 70.6967 30.4389C70.6967 31.6506 71.679 32.6329 72.8907 32.6329Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.19403 46.7551C3.40576 46.7551 4.38806 45.7728 4.38806 44.561C4.38806 43.3493 3.40576 42.367 2.19403 42.367C0.982301 42.367 0 43.3493 0 44.561C0 45.7728 0.982301 46.7551 2.19403 46.7551Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3329 46.7551C17.5447 46.7551 18.527 45.7728 18.527 44.561C18.527 43.3493 17.5447 42.367 16.3329 42.367C15.1212 42.367 14.1389 43.3493 14.1389 44.561C14.1389 45.7728 15.1212 46.7551 16.3329 46.7551Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.4724 46.7551C31.6841 46.7551 32.6664 45.7728 32.6664 44.561C32.6664 43.3493 31.6841 42.367 30.4724 42.367C29.2607 42.367 28.2784 43.3493 28.2784 44.561C28.2784 45.7728 29.2607 46.7551 30.4724 46.7551Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M44.6118 46.7551C45.8235 46.7551 46.8058 45.7728 46.8058 44.561C46.8058 43.3493 45.8235 42.367 44.6118 42.367C43.4001 42.367 42.4178 43.3493 42.4178 44.561C42.4178 45.7728 43.4001 46.7551 44.6118 46.7551Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.7512 46.7551C59.963 46.7551 60.9453 45.7728 60.9453 44.561C60.9453 43.3493 59.963 42.367 58.7512 42.367C57.5395 42.367 56.5572 43.3493 56.5572 44.561C56.5572 45.7728 57.5395 46.7551 58.7512 46.7551Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M72.8907 46.7551C74.1024 46.7551 75.0847 45.7728 75.0847 44.561C75.0847 43.3493 74.1024 42.367 72.8907 42.367C71.679 42.367 70.6967 43.3493 70.6967 44.561C70.6967 45.7728 71.679 46.7551 72.8907 46.7551Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.19403 60.8778C3.40576 60.8778 4.38806 59.8955 4.38806 58.6838C4.38806 57.472 3.40576 56.4897 2.19403 56.4897C0.982301 56.4897 0 57.472 0 58.6838C0 59.8955 0.982301 60.8778 2.19403 60.8778Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3329 60.8778C17.5447 60.8778 18.527 59.8955 18.527 58.6838C18.527 57.472 17.5447 56.4897 16.3329 56.4897C15.1212 56.4897 14.1389 57.472 14.1389 58.6838C14.1389 59.8955 15.1212 60.8778 16.3329 60.8778Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.4724 60.8778C31.6841 60.8778 32.6664 59.8955 32.6664 58.6838C32.6664 57.472 31.6841 56.4897 30.4724 56.4897C29.2607 56.4897 28.2784 57.472 28.2784 58.6838C28.2784 59.8955 29.2607 60.8778 30.4724 60.8778Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M44.6118 60.8778C45.8235 60.8778 46.8058 59.8955 46.8058 58.6838C46.8058 57.472 45.8235 56.4897 44.6118 56.4897C43.4001 56.4897 42.4178 57.472 42.4178 58.6838C42.4178 59.8955 43.4001 60.8778 44.6118 60.8778Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.7512 60.8778C59.963 60.8778 60.9453 59.8955 60.9453 58.6838C60.9453 57.472 59.963 56.4897 58.7512 56.4897C57.5395 56.4897 56.5572 57.472 56.5572 58.6838C56.5572 59.8955 57.5395 60.8778 58.7512 60.8778Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M72.8907 60.8778C74.1024 60.8778 75.0847 59.8955 75.0847 58.6838C75.0847 57.472 74.1024 56.4897 72.8907 56.4897C71.679 56.4897 70.6967 57.472 70.6967 58.6838C70.6967 59.8955 71.679 60.8778 72.8907 60.8778Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.19403 74.9999C3.40576 74.9999 4.38806 74.0176 4.38806 72.8059C4.38806 71.5942 3.40576 70.6119 2.19403 70.6119C0.982301 70.6119 0 71.5942 0 72.8059C0 74.0176 0.982301 74.9999 2.19403 74.9999Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M16.3329 74.9999C17.5447 74.9999 18.527 74.0176 18.527 72.8059C18.527 71.5942 17.5447 70.6119 16.3329 70.6119C15.1212 70.6119 14.1389 71.5942 14.1389 72.8059C14.1389 74.0176 15.1212 74.9999 16.3329 74.9999Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M30.4724 74.9999C31.6841 74.9999 32.6664 74.0176 32.6664 72.8059C32.6664 71.5942 31.6841 70.6119 30.4724 70.6119C29.2607 70.6119 28.2784 71.5942 28.2784 72.8059C28.2784 74.0176 29.2607 74.9999 30.4724 74.9999Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M44.6118 74.9999C45.8235 74.9999 46.8058 74.0176 46.8058 72.8059C46.8058 71.5942 45.8235 70.6119 44.6118 70.6119C43.4001 70.6119 42.4178 71.5942 42.4178 72.8059C42.4178 74.0176 43.4001 74.9999 44.6118 74.9999Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M58.7512 74.9999C59.963 74.9999 60.9453 74.0176 60.9453 72.8059C60.9453 71.5942 59.963 70.6119 58.7512 70.6119C57.5395 70.6119 56.5572 71.5942 56.5572 72.8059C56.5572 74.0176 57.5395 74.9999 58.7512 74.9999Z"
                    fill="#13C296"
                  />
                  <path
                    opacity="0.613296"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M72.8907 74.9999C74.1024 74.9999 75.0847 74.0176 75.0847 72.8059C75.0847 71.5942 74.1024 70.6119 72.8907 70.6119C71.679 70.6119 70.6967 71.5942 70.6967 72.8059C70.6967 74.0176 71.679 74.9999 72.8907 74.9999Z"
                    fill="#13C296"
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Team Section End -->

    <!-- ====== FAQ Section Start -->
    <section
      x-data="
        {
          openFaq1: false, 
          openFaq2: false, 
          openFaq3: false, 
          openFaq4: false, 
          openFaq5: false, 
          openFaq6: false
        }
      "
      class="relative z-20 overflow-hidden dark:bg-dark bg-white pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
              <span class="block mb-2 text-lg font-semibold text-primary">
                FAQ
              </span>
              <h2
                class="text-dark dark:text-white mb-4 text-3xl font-bold sm:text-[40px]/[48px]"
              >
                Any Questions? Look Here
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 lg:w-1/2">
            <div
              class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
            >
              <button
                class="flex w-full text-left faq-btn"
                @click="openFaq1 = !openFaq1"
              >
                <div
                  class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                >
                  <svg
                    :class="openFaq1 && 'rotate-180'"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4
                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    How long we deliver your first blog post?
                  </h4>
                </div>
              </button>
              <div x-show="openFaq1" class="faq-content pl-[62px]">
                <p
                  class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
            >
              <button
                class="flex w-full text-left faq-btn"
                @click="openFaq2 = !openFaq2"
              >
                <div
                  class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                >
                  <svg
                    :class="openFaq2 && 'rotate-180'"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4
                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    How long we deliver your first blog post?
                  </h4>
                </div>
              </button>
              <div x-show="openFaq2" class="faq-content pl-[62px]">
                <p
                  class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
            >
              <button
                class="flex w-full text-left faq-btn"
                @click="openFaq3 = !openFaq3"
              >
                <div
                  class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                >
                  <svg
                    :class="openFaq3 && 'rotate-180'"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4
                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    How long we deliver your first blog post?
                  </h4>
                </div>
              </button>
              <div x-show="openFaq3" class="faq-content pl-[62px]">
                <p
                  class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <div
              class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
            >
              <button
                class="flex w-full text-left faq-btn"
                @click="openFaq4 = !openFaq4"
              >
                <div
                  class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                >
                  <svg
                    :class="openFaq4 && 'rotate-180'"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4
                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    How long we deliver your first blog post?
                  </h4>
                </div>
              </button>
              <div x-show="openFaq4" class="faq-content pl-[62px]">
                <p
                  class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
            >
              <button
                class="flex w-full text-left faq-btn"
                @click="openFaq5 = !openFaq5"
              >
                <div
                  class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                >
                  <svg
                    :class="openFaq5 && 'rotate-180'"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4
                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    How long we deliver your first blog post?
                  </h4>
                </div>
              </button>
              <div x-show="openFaq5" class="faq-content pl-[62px]">
                <p
                  class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
            <div
              class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
            >
              <button
                class="flex w-full text-left faq-btn"
                @click="openFaq6 = !openFaq6"
              >
                <div
                  class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                >
                  <svg
                    :class="openFaq6 && 'rotate-180'"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4
                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    How long we deliver your first blog post?
                  </h4>
                </div>
              </button>
              <div x-show="openFaq6" class="faq-content pl-[62px]">
                <p
                  class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                  It takes 2-3 weeks to get your first blog post ready. That
                  includes the in-depth research & creation of your monthly
                  content marketing strategy that we do before writing your
                  first blog post, Ipsum available .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="absolute bottom-0 right-0 z-[-1]">
        <svg
          width="1440"
          height="886"
          viewBox="0 0 1440 886"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            opacity="0.5"
            d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
            fill="url(#paint0_linear)"
          />
          <defs>
            <linearGradient
              id="paint0_linear"
              x1="1308.65"
              y1="1142.58"
              x2="602.827"
              y2="-418.681"
              gradientUnits="userSpaceOnUse"
            >
              <stop stop-color="#3056D3" stop-opacity="0.36" />
              <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
              <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
            </linearGradient>
          </defs>
        </svg>
      </div>
    </section>
    <!-- ====== FAQ Section End -->

    <!-- ====== Call To Action Section Start -->
    <section class="pt-20 lg:pt-[120px] dark:bg-dark">
      <div class="container mx-auto">
        <div
          class="relative z-10 overflow-hidden rounded bg-primary py-12 px-8 md:p-[70px]"
        >
          <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4 lg:w-1/2">
              <span class="block mb-4 text-base font-medium text-white">
                Find Your Next Dream App
              </span>
              <h2
                class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[40px]/[48px] lg:mb-0"
              >
                <span class="xs:block"> Get started with </span>
                <span>our free trial</span>
              </h2>
            </div>
            <div class="w-full px-4 lg:w-1/2">
              <div class="flex flex-wrap lg:justify-end">
                <a
                  href="javascript:void(0)"
                  class="inline-flex py-3 my-1 mr-4 text-base font-medium transition bg-white rounded-md hover:bg-shadow-1 text-primary px-7"
                >
                  Get Pro Version
                </a>
                <a
                  href="javascript:void(0)"
                  class="inline-flex py-3 my-1 text-base font-medium text-white transition rounded-md bg-secondary px-7 hover:bg-opacity-90"
                >
                  Start Free Trial
                </a>
              </div>
            </div>
          </div>

          <div>
            <span class="absolute top-0 left-0 z-[-1]">
              <svg
                width="189"
                height="162"
                viewBox="0 0 189 162"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <ellipse
                  cx="16"
                  cy="-16.5"
                  rx="173"
                  ry="178.5"
                  transform="rotate(180 16 -16.5)"
                  fill="url(#paint0_linear)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear"
                    x1="-157"
                    y1="-107.754"
                    x2="98.5011"
                    y2="-106.425"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white" stop-opacity="0.07" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </span>
            <span class="absolute bottom-0 right-0 z-[-1]">
              <svg
                width="191"
                height="208"
                viewBox="0 0 191 208"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <ellipse
                  cx="173"
                  cy="178.5"
                  rx="173"
                  ry="178.5"
                  fill="url(#paint0_linear)"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear"
                    x1="-3.27832e-05"
                    y1="87.2457"
                    x2="255.501"
                    y2="88.5747"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop stop-color="white" stop-opacity="0.07" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </span>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Call To Action Section End -->

    <!-- ====== Testimonials Section Start -->
    <section class="pt-20 pb-7 dark:bg-dark lg:pt-[120px] lg:pb-14">
      <div class="container mx-auto">
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <div class="mb-[60px] max-w-[510px] lg:mb-[70px]">
              <span class="block mb-2 text-lg font-semibold text-primary">
                Testimonials
              </span>
              <h2
                class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]"
              >
                What our Clients Says
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                There are many variations of passages of Lorem Ipsum available
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4 md:w-1/2">
            <div
              class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10"
            >
              <div class="flex items-center mb-10">
                <div
                  class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]"
                >
                  <img
                    src="src/assets/images/testimonials/testimonial-05/image-01.jpg"
                    alt="image"
                    class="w-full"
                  />
                </div>
                <div class="w-full">
                  <h5
                    class="mb-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    Jason Keys
                  </h5>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    Founder @ Dreampeet.
                  </p>
                </div>
              </div>

              <p class="text-base text-body-color dark:text-dark-6">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>

              <div>
                <span class="absolute top-0 right-0">
                  <svg
                    width="104"
                    height="102"
                    viewBox="0 0 104 102"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      opacity="0.6"
                      d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z"
                      stroke="#3758F9"
                    />
                    <path
                      opacity="0.6"
                      d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z"
                      stroke="#13C296"
                    />
                    <path
                      opacity="0.6"
                      d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z"
                      stroke="#F98B69"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2">
            <div
              class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10"
            >
              <div class="flex items-center mb-10">
                <div
                  class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]"
                >
                  <img
                    src="src/assets/images/testimonials/testimonial-05/image-02.jpg"
                    alt="image"
                    class="w-full"
                  />
                </div>
                <div class="w-full">
                  <h5
                    class="mb-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    Anee Doe
                  </h5>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    CEO @ Trorex.
                  </p>
                </div>
              </div>

              <p class="text-base text-body-color dark:text-dark-6">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>

              <div>
                <span class="absolute top-0 right-0">
                  <svg
                    width="104"
                    height="102"
                    viewBox="0 0 104 102"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      opacity="0.6"
                      d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z"
                      stroke="#3758F9"
                    />
                    <path
                      opacity="0.6"
                      d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z"
                      stroke="#13C296"
                    />
                    <path
                      opacity="0.6"
                      d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z"
                      stroke="#F98B69"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2">
            <div
              class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10"
            >
              <div class="flex items-center mb-10">
                <div
                  class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]"
                >
                  <img
                    src="src/assets/images/testimonials/testimonial-05/image-03.jpg"
                    alt="image"
                    class="w-full"
                  />
                </div>
                <div class="w-full">
                  <h5
                    class="mb-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    Dipali Dow
                  </h5>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    Founder @ Cradow.
                  </p>
                </div>
              </div>

              <p class="text-base text-body-color dark:text-dark-6">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>

              <div>
                <span class="absolute top-0 right-0">
                  <svg
                    width="104"
                    height="102"
                    viewBox="0 0 104 102"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      opacity="0.6"
                      d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z"
                      stroke="#3758F9"
                    />
                    <path
                      opacity="0.6"
                      d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z"
                      stroke="#13C296"
                    />
                    <path
                      opacity="0.6"
                      d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z"
                      stroke="#F98B69"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2">
            <div
              class="shadow-testimonial-6 dark:shadow-none relative mb-10 overflow-hidden rounded-[10px] bg-white dark:bg-dark-2 p-8 sm:p-10 md:py-10 md:px-6 lg:p-10"
            >
              <div class="flex items-center mb-10">
                <div
                  class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded md:h-[60px] md:max-w-[60px] lg:h-20 lg:max-w-[80px]"
                >
                  <img
                    src="src/assets/images/testimonials/testimonial-05/image-04.jpg"
                    alt="image"
                    class="w-full"
                  />
                </div>
                <div class="w-full">
                  <h5
                    class="mb-1 text-lg font-semibold text-dark dark:text-white"
                  >
                    John Doe
                  </h5>
                  <p class="text-xs text-body-color dark:text-dark-6">
                    Founder @ Poettry.
                  </p>
                </div>
              </div>

              <p class="text-base text-body-color dark:text-dark-6">
                “I believe in lifelong learning and Learn. is a great place to
                learn from experts. I've learned a lot and recommend it to all
                my friends and familys.”
              </p>

              <div>
                <span class="absolute top-0 right-0">
                  <svg
                    width="104"
                    height="102"
                    viewBox="0 0 104 102"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      opacity="0.6"
                      d="M28.707 23.8032C31.0493 22.4301 33.9507 22.4301 36.293 23.8032L56.4389 35.6133C58.7351 36.9594 60.1458 39.4218 60.1458 42.0835V65.9165C60.1458 68.5782 58.7351 71.0406 56.4388 72.3867L36.293 84.1968C33.9507 85.5699 31.0493 85.5699 28.707 84.1968L8.56115 72.3867C6.26492 71.0406 4.85417 68.5782 4.85417 65.9165V42.0835C4.85417 39.4218 6.26492 36.9594 8.56115 35.6133L28.707 23.8032Z"
                      stroke="#3758F9"
                    />
                    <path
                      opacity="0.6"
                      d="M105.25 12.7424C107.571 11.4027 110.429 11.4027 112.75 12.7424L144.587 31.1236C146.908 32.4634 148.337 34.9393 148.337 37.6188V74.3812C148.337 77.0607 146.908 79.5366 144.587 80.8764L112.75 99.2576C110.429 100.597 107.571 100.597 105.25 99.2576L73.4128 80.8764C71.0923 79.5366 69.6628 77.0607 69.6628 74.3812V37.6188C69.6628 34.9393 71.0923 32.4634 73.4128 31.1236L105.25 12.7424Z"
                      stroke="#13C296"
                    />
                    <path
                      opacity="0.6"
                      d="M59.25 -23.2576C61.5705 -24.5973 64.4295 -24.5973 66.75 -23.2576L82.1327 -14.3764C84.4532 -13.0366 85.8827 -10.5607 85.8827 -7.8812V9.8812C85.8827 12.5607 84.4532 15.0366 82.1327 16.3764L66.75 25.2576C64.4295 26.5973 61.5705 26.5973 59.25 25.2576L43.8673 16.3764C41.5468 15.0366 40.1173 12.5607 40.1173 9.8812V-7.8812C40.1173 -10.5607 41.5468 -13.0366 43.8673 -14.3764L59.25 -23.2576Z"
                      stroke="#F98B69"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Testimonials Section End -->

    <!-- ====== Contact Section Start -->
    <section
      class="relative z-10 overflow-hidden bg-white dark:bg-dark py-20 lg:py-[120px]"
    >
      <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4 lg:justify-between">
          <div class="w-full px-4 lg:w-1/2 xl:w-6/12">
            <div class="mb-12 max-w-[570px] lg:mb-0">
              <span class="block mb-4 text-base font-semibold text-primary">
                Contact Us
              </span>
              <h2
                class="text-dark dark:text-white mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]"
              >
                GET IN TOUCH WITH US
              </h2>
              <p
                class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-9"
              >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eius tempor incididunt ut labore et dolore magna aliqua. Ut enim
                adiqua minim veniam quis nostrud exercitation ullamco
              </p>

              <div class="mb-8 flex w-full max-w-[370px]">
                <div
                  class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]"
                >
                  <svg
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M30.6 11.8002L17.7 3.5002C16.65 2.8502 15.3 2.8502 14.3 3.5002L1.39998 11.8002C0.899983 12.1502 0.749983 12.8502 1.04998 13.3502C1.39998 13.8502 2.09998 14.0002 2.59998 13.7002L3.44998 13.1502V25.8002C3.44998 27.5502 4.84998 28.9502 6.59998 28.9502H25.4C27.15 28.9502 28.55 27.5502 28.55 25.8002V13.1502L29.4 13.7002C29.6 13.8002 29.8 13.9002 30 13.9002C30.35 13.9002 30.75 13.7002 30.95 13.4002C31.3 12.8502 31.15 12.1502 30.6 11.8002ZM13.35 26.7502V18.5002C13.35 18.0002 13.75 17.6002 14.25 17.6002H17.75C18.25 17.6002 18.65 18.0002 18.65 18.5002V26.7502H13.35ZM26.3 25.8002C26.3 26.3002 25.9 26.7002 25.4 26.7002H20.9V18.5002C20.9 16.8002 19.5 15.4002 17.8 15.4002H14.3C12.6 15.4002 11.2 16.8002 11.2 18.5002V26.7502H6.69998C6.19998 26.7502 5.79998 26.3502 5.79998 25.8502V11.7002L15.5 5.4002C15.8 5.2002 16.2 5.2002 16.5 5.4002L26.3 11.7002V25.8002Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="mb-1 text-xl font-bold text-dark dark:text-white">
                    Our Location
                  </h4>
                  <p class="text-base text-body-color dark:text-dark-6">
                    99 S.t Jomblo Park Pekanbaru 28292. Indonesia
                  </p>
                </div>
              </div>

              <div class="mb-8 flex w-full max-w-[370px]">
                <div
                  class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]"
                >
                  <svg
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <g clip-path="url(#clip0_941_17577)">
                      <path
                        d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.19997 22.8499C5.84997 19.4999 3.24997 15.7499 1.89997 12.2999C0.39997 8.59994 0.54997 5.54994 2.29997 3.84994C2.34997 3.79994 2.44997 3.74994 2.49997 3.69994L6.69997 1.19994C7.74997 0.599942 9.09997 0.899942 9.79997 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.79997 5.54994C2.84997 6.59994 2.89997 8.74994 3.99997 11.4999C5.24997 14.6499 7.64997 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.89997 14.1499 8.49997 11.9499C7.84997 10.8999 8.09997 9.54994 9.09997 8.84994L10.9 7.59994V7.54994L7.94997 3.14994C7.94997 3.09994 7.89997 3.09994 7.84997 3.14994L3.79997 5.54994Z"
                        fill="currentColor"
                      />
                      <path
                        d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z"
                        fill="currentColor"
                      />
                      <path
                        d="M24.35 14.7002C23.8 14.7002 23.3 14.3002 23.25 13.7002C22.95 11.0002 20.85 8.90018 18.15 8.55018C17.55 8.50018 17.1 7.90018 17.15 7.30018C17.2 6.70018 17.8 6.25018 18.4 6.30018C22.15 6.75018 25.05 9.65018 25.5 13.4002C25.55 14.0002 25.15 14.5502 24.5 14.6502C24.4 14.7002 24.35 14.7002 24.35 14.7002Z"
                        fill="currentColor"
                      />
                    </g>
                    <defs>
                      <clipPath id="clip0_941_17577">
                        <rect width="32" height="32" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="mb-1 text-xl font-bold text-dark dark:text-white">
                    Phone Number
                  </h4>
                  <p class="text-base text-body-color dark:text-dark-6">
                    (+62)81 414 257 9980
                  </p>
                </div>
              </div>

              <div class="mb-8 flex w-full max-w-[370px]">
                <div
                  class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]"
                >
                  <svg
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M28 4.7998H3.99998C2.29998 4.7998 0.849976 6.1998 0.849976 7.9498V24.1498C0.849976 25.8498 2.24998 27.2998 3.99998 27.2998H28C29.7 27.2998 31.15 25.8998 31.15 24.1498V7.8998C31.15 6.1998 29.7 4.7998 28 4.7998ZM28 7.0498C28.05 7.0498 28.1 7.0498 28.15 7.0498L16 14.8498L3.84998 7.0498C3.89998 7.0498 3.94998 7.0498 3.99998 7.0498H28ZM28 24.9498H3.99998C3.49998 24.9498 3.09998 24.5498 3.09998 24.0498V9.2498L14.8 16.7498C15.15 16.9998 15.55 17.0998 15.95 17.0998C16.35 17.0998 16.75 16.9998 17.1 16.7498L28.8 9.2498V24.0998C28.9 24.5998 28.5 24.9498 28 24.9498Z"
                      fill="currentColor"
                    />
                  </svg>
                </div>
                <div class="w-full">
                  <h4 class="mb-1 text-xl font-bold text-dark dark:text-white">
                    Email Address
                  </h4>
                  <p class="text-base text-body-color dark:text-dark-6">
                    info@yourdomain.com
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
            <div
              class="relative p-8 bg-white rounded-lg shadow-lg dark:bg-dark-2 sm:p-12"
            >
              <form>
                <div class="mb-6">
                  <input
                    type="text"
                    placeholder="Your Name"
                    class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none"
                  />
                </div>
                <div class="mb-6">
                  <input
                    type="email"
                    placeholder="Your Email"
                    class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none"
                  />
                </div>
                <div class="mb-6">
                  <input
                    type="text"
                    placeholder="Your Phone"
                    class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full rounded border py-3 px-[14px] text-base outline-none"
                  />
                </div>
                <div class="mb-6">
                  <textarea
                    rows="6"
                    placeholder="Your Message"
                    class="border-stroke dark:border-dark-3 dark:text-dark-6 dark:bg-dark text-body-color focus:border-primary w-full resize-none rounded border py-3 px-[14px] text-base outline-none"
                  ></textarea>
                </div>
                <div>
                  <button
                    type="submit"
                    class="w-full p-3 text-white transition border rounded border-primary bg-primary hover:bg-opacity-90"
                  >
                    Send Message
                  </button>
                </div>
              </form>
              <div>
                <span class="absolute -top-10 -right-9 z-[-1]">
                  <svg
                    width="100"
                    height="100"
                    viewBox="0 0 100 100"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                      fill="#3056D3"
                    />
                  </svg>
                </span>
                <span class="absolute -right-10 top-[90px] z-[-1]">
                  <svg
                    width="34"
                    height="134"
                    viewBox="0 0 34 134"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="31.9993"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 31.9993 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 31.9993 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 31.9993 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 31.9993 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 31.9993 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 31.9993 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 31.9993 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 31.9993 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 31.9993 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 31.9993 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 17.3333 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 17.3333 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 17.3333 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 17.3333 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 17.3333 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 17.3333 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 17.3333 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 17.3333 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 17.3333 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 17.3333 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 2.66536 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 2.66536 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 2.66536 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 2.66536 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 2.66536 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 2.66536 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 2.66536 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 2.66536 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 2.66536 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 2.66536 1.66665)"
                      fill="#13C296"
                    />
                  </svg>
                </span>
                <span class="absolute -left-7 -bottom-7 z-[-1]">
                  <svg
                    width="107"
                    height="134"
                    viewBox="0 0 107 134"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <circle
                      cx="104.999"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 104.999 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 104.999 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 104.999 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 104.999 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 104.999 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 104.999 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 104.999 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 104.999 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 104.999 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="104.999"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 104.999 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 90.3333 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 90.3333 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 90.3333 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 90.3333 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 90.3333 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 90.3333 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 90.3333 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 90.3333 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 90.3333 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="90.3333"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 90.3333 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 75.6654 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 31.9993 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 75.6654 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 31.9993 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 75.6654 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 31.9993 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 75.6654 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 31.9993 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 75.6654 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 31.9993 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 75.6654 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 31.9993 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 75.6654 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 31.9993 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 75.6654 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 31.9993 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 75.6654 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 31.9993 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="75.6654"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 75.6654 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="31.9993"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 31.9993 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 60.9993 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 17.3333 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 60.9993 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 17.3333 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 60.9993 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 17.3333 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 60.9993 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 17.3333 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 60.9993 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 17.3333 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 60.9993 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 17.3333 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 60.9993 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 17.3333 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 60.9993 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 17.3333 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 60.9993 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 17.3333 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="60.9993"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 60.9993 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="17.3333"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 17.3333 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 46.3333 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="132"
                      r="1.66667"
                      transform="rotate(180 2.66536 132)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 46.3333 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="117.333"
                      r="1.66667"
                      transform="rotate(180 2.66536 117.333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 46.3333 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="102.667"
                      r="1.66667"
                      transform="rotate(180 2.66536 102.667)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 46.3333 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="88"
                      r="1.66667"
                      transform="rotate(180 2.66536 88)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 46.3333 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="73.3333"
                      r="1.66667"
                      transform="rotate(180 2.66536 73.3333)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 46.3333 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="45"
                      r="1.66667"
                      transform="rotate(180 2.66536 45)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 46.3333 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="16"
                      r="1.66667"
                      transform="rotate(180 2.66536 16)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 46.3333 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="59"
                      r="1.66667"
                      transform="rotate(180 2.66536 59)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 46.3333 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="30.6666"
                      r="1.66667"
                      transform="rotate(180 2.66536 30.6666)"
                      fill="#13C296"
                    />
                    <circle
                      cx="46.3333"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 46.3333 1.66665)"
                      fill="#13C296"
                    />
                    <circle
                      cx="2.66536"
                      cy="1.66665"
                      r="1.66667"
                      transform="rotate(180 2.66536 1.66665)"
                      fill="#13C296"
                    />
                  </svg>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact Section End -->

    <!-- ====== Footer Section Start -->
    <footer class="relative z-10 bg-primary">
      <div class="container mx-auto">
        <div class="border-b border-gray-7/20 pt-[70px] pb-10">
          <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4 lg:w-1/2">
              <div class="w-full mb-5 max-w-[470px]">
                <h3
                  class="text-2xl font-bold text-white sm:text-[28px] sm:leading-snug"
                >
                  Signup for latest news and insights from TailGrids UI
                </h3>
              </div>
            </div>
            <div class="w-full px-4 lg:w-1/2">
              <div class="w-full mb-5">
                <form class="flex flex-wrap">
                  <div class="relative mr-5 mb-3 w-full max-w-[370px]">
                    <input
                      type="email"
                      placeholder="Enter your email address"
                      class="w-full pr-5 text-white bg-white/5 border border-white/[.08] rounded-md outline-none h-[52px] pl-14 placeholder-dark-8 focus:border-white/40 focus-visible:shadow-none"
                    />
                    <label class="absolute -translate-y-1/2 left-5 top-1/2">
                      <svg
                        width="18"
                        height="13"
                        viewBox="0 0 18 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M16.3052 0H1.69481C0.75974 0 0 0.799055 0 1.78251V11.2175C0 12.2009 0.75974 13 1.69481 13H16.3052C17.2403 13 18 12.2009 18 11.2175V1.78251C18 0.799055 17.2403 0 16.3052 0ZM16.3052 1.07565C16.4513 1.07565 16.5682 1.10638 16.6851 1.19858L9.40909 5.83924C9.1461 5.99291 8.8539 5.99291 8.59091 5.83924L1.31494 1.19858C1.43182 1.13712 1.5487 1.07565 1.69481 1.07565H16.3052ZM16.3052 11.8936H1.69481C1.34416 11.8936 1.02273 11.5863 1.02273 11.1868V2.27423L8.03572 6.76123C8.32792 6.94563 8.64935 7.03782 8.97078 7.03782C9.29221 7.03782 9.61364 6.94563 9.90584 6.76123L16.9188 2.27423V11.1868C16.9773 11.5863 16.6558 11.8936 16.3052 11.8936Z"
                          fill="white"
                        />
                      </svg>
                    </label>
                  </div>
                  <button
                    type="submit"
                    class="px-7 border border-transparent mb-3 transition bg-white rounded-md text-dark h-[52px] font-medium hover:bg-opacity-90"
                  >
                    Subscribe
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container pt-14 lg:pt-20">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 sm:w-2/3 lg:w-4/12 2xl:w-3/12">
            <div class="w-full mb-10">
              <a
                href="javascript:void(0)"
                class="mb-6 inline-block max-w-[160px]"
              >
                <img
                  src="src/assets/images/logo/logo-white.svg"
                  alt="logo"
                  class="max-w-full"
                />
              </a>
              <p class="text-base mb-7 text-white/70">
                We create digital experiences for brands and companies by using
                technology.
              </p>
              <div class="flex items-center -mx-3">
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="10"
                    height="18"
                    viewBox="0 0 10 18"
                    class="fill-current"
                  >
                    <path
                      d="M9.00007 6.82105H7.50006H6.96434V6.27097V4.56571V4.01562H7.50006H8.62507C8.91971 4.01562 9.16078 3.79559 9.16078 3.46554V0.550085C9.16078 0.247538 8.9465 0 8.62507 0H6.66969C4.55361 0 3.08038 1.54024 3.08038 3.82309V6.21596V6.76605H2.54466H0.72322C0.348217 6.76605 0 7.06859 0 7.50866V9.48897C0 9.87402 0.294645 10.2316 0.72322 10.2316H2.49109H3.02681V10.7817V16.31C3.02681 16.6951 3.32145 17.0526 3.75003 17.0526H6.26791C6.42862 17.0526 6.56255 16.9701 6.66969 16.8601C6.77684 16.7501 6.8572 16.5576 6.8572 16.3925V10.8092V10.2591H7.4197H8.62507C8.97328 10.2591 9.24114 10.0391 9.29471 9.709V9.6815V9.65399L9.66972 7.7562C9.6965 7.56367 9.66972 7.34363 9.509 7.1236C9.45543 6.98608 9.21436 6.84856 9.00007 6.82105Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="19"
                    height="15"
                    viewBox="0 0 19 15"
                    class="fill-current"
                  >
                    <path
                      d="M16.2622 3.17878L17.33 1.93293C17.6391 1.59551 17.7234 1.33595 17.7515 1.20618C16.9085 1.67337 16.1217 1.82911 15.6159 1.82911H15.4192L15.3068 1.72528C14.6324 1.18022 13.7894 0.894714 12.8902 0.894714C10.9233 0.894714 9.37779 2.40012 9.37779 4.13913C9.37779 4.24295 9.37779 4.39868 9.40589 4.5025L9.49019 5.02161L8.90009 4.99565C5.30334 4.89183 2.35288 2.03675 1.87518 1.5436C1.08839 2.84136 1.53799 4.08722 2.01568 4.86587L2.97107 6.31937L1.45369 5.54071C1.48179 6.63084 1.93138 7.48736 2.80247 8.11029L3.56116 8.62939L2.80247 8.9149C3.28017 10.2386 4.34795 10.7837 5.13474 10.9913L6.17443 11.2509L5.19094 11.8738C3.61736 12.912 1.65039 12.8342 0.779297 12.7563C2.54957 13.8983 4.65705 14.1579 6.11823 14.1579C7.21412 14.1579 8.02901 14.0541 8.2257 13.9762C16.0936 12.2631 16.4589 5.77431 16.4589 4.47655V4.29486L16.6275 4.19104C17.5829 3.36047 17.9763 2.91923 18.2011 2.65967C18.1168 2.68563 18.0044 2.73754 17.892 2.7635L16.2622 3.17878Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    class="fill-current"
                  >
                    <path
                      d="M8.91688 12.4995C10.6918 12.4995 12.1306 11.0911 12.1306 9.35385C12.1306 7.61655 10.6918 6.20819 8.91688 6.20819C7.14197 6.20819 5.70312 7.61655 5.70312 9.35385C5.70312 11.0911 7.14197 12.4995 8.91688 12.4995Z"
                    />
                    <path
                      d="M12.4078 0.947388H5.37075C2.57257 0.947388 0.300781 3.17104 0.300781 5.90993V12.7436C0.300781 15.5367 2.57257 17.7604 5.37075 17.7604H12.3524C15.2059 17.7604 17.4777 15.5367 17.4777 12.7978V5.90993C17.4777 3.17104 15.2059 0.947388 12.4078 0.947388ZM8.91696 13.4758C6.56206 13.4758 4.70584 11.6047 4.70584 9.35389C4.70584 7.10312 6.58976 5.23199 8.91696 5.23199C11.2165 5.23199 13.1004 7.10312 13.1004 9.35389C13.1004 11.6047 11.2442 13.4758 8.91696 13.4758ZM14.735 5.61164C14.4579 5.90993 14.0423 6.07264 13.5714 6.07264C13.1558 6.07264 12.7402 5.90993 12.4078 5.61164C12.103 5.31334 11.9368 4.9337 11.9368 4.47269C11.9368 4.01169 12.103 3.65916 12.4078 3.33375C12.7125 3.00834 13.1004 2.84563 13.5714 2.84563C13.9869 2.84563 14.4302 3.00834 14.735 3.30663C15.012 3.65916 15.2059 4.06593 15.2059 4.49981C15.1782 4.9337 15.012 5.31334 14.735 5.61164Z"
                    />
                    <path
                      d="M13.5985 3.82184C13.2383 3.82184 12.9336 4.12013 12.9336 4.47266C12.9336 4.82519 13.2383 5.12349 13.5985 5.12349C13.9587 5.12349 14.2634 4.82519 14.2634 4.47266C14.2634 4.12013 13.9864 3.82184 13.5985 3.82184Z"
                    />
                  </svg>
                </a>
                <a
                  href="javascript:void(0)"
                  class="px-3 text-gray-7 hover:text-white"
                >
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    class="fill-current"
                  >
                    <path
                      d="M16.7821 0.947388H1.84847C1.14272 0.947388 0.578125 1.49747 0.578125 2.18508V16.7623C0.578125 17.4224 1.14272 18 1.84847 18H16.7257C17.4314 18 17.996 17.4499 17.996 16.7623V2.15757C18.0525 1.49747 17.4879 0.947388 16.7821 0.947388ZM5.7442 15.4421H3.17528V7.32837H5.7442V15.4421ZM4.44563 6.2007C3.59873 6.2007 2.94944 5.5406 2.94944 4.74297C2.94944 3.94535 3.62696 3.28525 4.44563 3.28525C5.26429 3.28525 5.94181 3.94535 5.94181 4.74297C5.94181 5.5406 5.32075 6.2007 4.44563 6.2007ZM15.4835 15.4421H12.9146V11.509C12.9146 10.5739 12.8864 9.33618 11.5596 9.33618C10.2045 9.33618 10.0069 10.3813 10.0069 11.4265V15.4421H7.438V7.32837H9.95046V8.45605H9.9787C10.3457 7.79594 11.1644 7.13584 12.4347 7.13584C15.0601 7.13584 15.54 8.7861 15.54 11.0414V15.4421H15.4835Z"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-4/12 2xl:w-3/12">
            <div class="w-full mb-10">
              <h4 class="text-lg font-semibold text-white mb-9">Latest blog</h4>
              <a
                href="javascript:void(0)"
                class="flex items-center mb-8 text-gray-7 hover:text-white"
              >
                <div class="mr-5 w-full max-w-[70px] overflow-hidden rounded">
                  <img
                    src="src/assets/images/footers/footer-04/blog-01.jpg"
                    alt="image"
                    class="w-full"
                  />
                </div>
                <p class="text-base">I think really important to design...</p>
              </a>
              <a
                href="javascript:void(0)"
                class="flex items-center mb-8 text-gray-7 hover:text-white"
              >
                <div class="mr-5 w-full max-w-[70px] overflow-hidden rounded">
                  <img
                    src="src/assets/images/footers/footer-04/blog-02.jpg"
                    alt="image"
                    class="w-full"
                  />
                </div>
                <p class="text-base">Recognizing the need is the primary...</p>
              </a>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-3/12 2xl:w-2/12">
            <div class="w-full mb-10">
              <h4 class="text-lg font-semibold text-white mb-9">Company</h4>
              <ul class="space-y-3">
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    About company
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Company services
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Job opportunities
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Creative people
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-3/12 2xl:w-2/12">
            <div class="w-full mb-10">
              <h4 class="text-lg font-semibold text-white mb-9">Customer</h4>
              <ul class="space-y-3">
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Client support
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Latest news
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Company story
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="inline-block text-base leading-loose text-white/70 hover:underline underline-offset-2 hover:text-white"
                  >
                    Pricing packages
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-4 sm:w-1/2 lg:w-4/12 2xl:w-2/12">
            <div class="w-full mb-10">
              <h4 class="text-lg font-semibold text-white mb-9">
                Contact Info
              </h4>
              <ul>
                <li>
                  <p
                    class="inline-flex items-start mb-3 text-base leading-loose text-white/70"
                  >
                    <span class="mr-3 mt-[10px]">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M17.5 3H2.5C1.4375 3 0.53125 3.875 0.53125 4.96875V15.0937C0.53125 16.1562 1.40625 17.0625 2.5 17.0625H17.5C18.5625 17.0625 19.4687 16.1875 19.4687 15.0937V4.9375C19.4687 3.875 18.5625 3 17.5 3ZM17.5 4.40625C17.5312 4.40625 17.5625 4.40625 17.5937 4.40625L10 9.28125L2.40625 4.40625C2.4375 4.40625 2.46875 4.40625 2.5 4.40625H17.5ZM17.5 15.5938H2.5C2.1875 15.5938 1.9375 15.3438 1.9375 15.0312V5.78125L9.25 10.4688C9.46875 10.625 9.71875 10.6875 9.96875 10.6875C10.2187 10.6875 10.4687 10.625 10.6875 10.4688L18 5.78125V15.0625C18.0625 15.375 17.8125 15.5938 17.5 15.5938Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    info@yourmail.com
                  </p>
                </li>

                <li>
                  <p
                    class="inline-flex items-start mb-3 text-base leading-loose text-white/70"
                  >
                    <span class="mr-3 mt-[10px]">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g clip-path="url(#clip0_941_16343)">
                          <path
                            d="M15.1875 19.4688C14.3437 19.4688 13.375 19.25 12.3125 18.8438C10.1875 18 7.84374 16.375 5.74999 14.2813C3.65624 12.1875 2.03124 9.84377 1.18749 7.68752C0.249989 5.37502 0.343739 3.46877 1.43749 2.40627C1.46874 2.37502 1.53124 2.34377 1.56249 2.31252L4.18749 0.750025C4.84374 0.375025 5.68749 0.562525 6.12499 1.18752L7.96874 3.93753C8.40624 4.59378 8.21874 5.46877 7.59374 5.90627L6.46874 6.68752C7.28124 8.00002 9.59374 11.2188 13.2812 13.5313L13.9687 12.5313C14.5 11.7813 15.3437 11.5625 16.0312 12.0313L18.7812 13.875C19.4062 14.3125 19.5937 15.1563 19.2187 15.8125L17.6562 18.4375C17.625 18.5 17.5937 18.5313 17.5625 18.5625C17 19.1563 16.1875 19.4688 15.1875 19.4688ZM2.37499 3.46878C1.78124 4.12503 1.81249 5.46877 2.49999 7.18752C3.28124 9.15627 4.78124 11.3125 6.74999 13.2813C8.68749 15.2188 10.875 16.7188 12.8125 17.5C14.5 18.1875 15.8437 18.2188 16.5312 17.625L18.0312 15.0625C18.0312 15.0313 18.0312 15.0313 18.0312 15L15.2812 13.1563C15.2812 13.1563 15.2187 13.1875 15.1562 13.2813L14.4687 14.2813C14.0312 14.9063 13.1875 15.0938 12.5625 14.6875C8.62499 12.25 6.18749 8.84377 5.31249 7.46877C4.90624 6.81252 5.06249 5.96878 5.68749 5.53128L6.81249 4.75002V4.71878L4.96874 1.96877C4.96874 1.93752 4.93749 1.93752 4.90624 1.96877L2.37499 3.46878Z"
                            fill="white"
                          />
                          <path
                            d="M18.3125 8.90633C17.9375 8.90633 17.6562 8.62508 17.625 8.25008C17.375 5.09383 14.7812 2.56258 11.5937 2.34383C11.2187 2.31258 10.9062 2.00008 10.9375 1.59383C10.9687 1.21883 11.2812 0.906333 11.6875 0.937583C15.5625 1.18758 18.7187 4.25008 19.0312 8.12508C19.0625 8.50008 18.7812 8.84383 18.375 8.87508C18.375 8.90633 18.3437 8.90633 18.3125 8.90633Z"
                            fill="white"
                          />
                          <path
                            d="M15.2187 9.18755C14.875 9.18755 14.5625 8.93755 14.5312 8.56255C14.3437 6.87505 13.0312 5.56255 11.3437 5.3438C10.9687 5.31255 10.6875 4.93755 10.7187 4.56255C10.75 4.18755 11.125 3.9063 11.5 3.93755C13.8437 4.2188 15.6562 6.0313 15.9375 8.37505C15.9687 8.75005 15.7187 9.0938 15.3125 9.1563C15.25 9.18755 15.2187 9.18755 15.2187 9.18755Z"
                            fill="white"
                          />
                        </g>
                        <defs>
                          <clipPath id="clip0_941_16343">
                            <rect width="20" height="20" fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                    </span>
                    +885 543 4565
                  </p>
                </li>

                <li>
                  <p
                    class="inline-flex items-start mb-3 text-base leading-loose text-white/70"
                  >
                    <span class="mr-3 mt-[10px]">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M10 0.5625C5.6875 0.5625 2.1875 3.9375 2.1875 8.09375C2.1875 11.25 6.375 16.25 8.84375 18.9375C9.15625 19.2813 9.5625 19.4375 10 19.4375C10.4375 19.4375 10.8438 19.25 11.1562 18.9375C13.625 16.25 17.8125 11.25 17.8125 8.09375C17.8125 3.9375 14.3125 0.5625 10 0.5625ZM10.125 18C10.0625 18.0625 9.96875 18.0625 9.875 18C6.84375 14.6875 3.59375 10.375 3.59375 8.09375C3.59375 4.71875 6.46875 1.96875 10 1.96875C13.5312 1.96875 16.4062 4.71875 16.4062 8.09375C16.4062 10.375 13.1562 14.6875 10.125 18Z"
                          fill="white"
                        />
                        <path
                          d="M10 4.90625C8.125 4.90625 6.59375 6.4375 6.59375 8.3125C6.59375 10.1875 8.125 11.75 10 11.75C11.875 11.75 13.4062 10.2188 13.4062 8.34375C13.4062 6.46875 11.875 4.90625 10 4.90625ZM10 10.3438C8.875 10.3438 8 9.4375 8 8.34375C8 7.25 8.90625 6.34375 10 6.34375C11.0937 6.34375 12 7.25 12 8.34375C12 9.4375 11.125 10.3438 10 10.3438Z"
                          fill="white"
                        />
                      </svg>
                    </span>
                    401 Broadway, 24th Floor, London
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-12 bg-[#101541] py-8 lg:mt-[60px]">
        <div class="container mx-auto">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4 md:w-1/3 lg:w-1/2">
              <div class="flex justify-center my-1 md:justify-start">
                <p class="text-base text-gray-7">&copy; 2025 TailGrids</p>
              </div>
            </div>
            <div class="w-full px-4 md:w-2/3 lg:w-1/2">
              <div class="my-1">
                <div
                  class="flex flex-wrap items-center justify-center -mx-3 md:justify-end"
                >
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-base text-gray-7 hover:text-white"
                  >
                    Privacy policy
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-base text-gray-7 hover:text-white"
                  >
                    Legal notice
                  </a>
                  <a
                    href="javascript:void(0)"
                    class="px-3 text-base text-gray-7 hover:text-white"
                  >
                    Terms of service
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ====== Footer Section End -->

    <!-- theme switcher -->
    <div
      class="fixed flex items-center justify-center bg-white rounded dark:bg-dark-3 z-[99999] shadow-1 dark:shadow-box-dark bottom-10 right-10 h-11 w-11"
    >
      <label
        for="themeSwitcher"
        class="inline-flex items-center cursor-pointer"
        aria-label="themeSwitcher"
        name="themeSwitcher"
      >
        <input
          type="checkbox"
          name="themeSwitcher"
          id="themeSwitcher"
          class="sr-only"
        />
        <span class="block text-body-color dark:hidden">
          <svg
            class="fill-current"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M13.3125 1.50001C12.675 1.31251 12.0375 1.16251 11.3625 1.05001C10.875 0.975006 10.35 1.23751 10.1625 1.68751C9.93751 2.13751 10.05 2.70001 10.425 3.00001C13.0875 5.47501 14.0625 9.11251 12.975 12.525C11.775 16.3125 8.25001 18.975 4.16251 19.0875C3.63751 19.0875 3.22501 19.425 3.07501 19.9125C2.92501 20.4 3.15001 20.925 3.56251 21.1875C4.50001 21.75 5.43751 22.2 6.37501 22.5C7.46251 22.8375 8.58751 22.9875 9.71251 22.9875C11.625 22.9875 13.5 22.5 15.1875 21.5625C17.85 20.1 19.725 17.7375 20.55 14.8875C22.1625 9.26251 18.975 3.37501 13.3125 1.50001ZM18.9375 14.4C18.2625 16.8375 16.6125 18.825 14.4 20.0625C12.075 21.3375 9.41251 21.6 6.90001 20.85C6.63751 20.775 6.33751 20.6625 6.07501 20.55C10.05 19.7625 13.35 16.9125 14.5875 13.0125C15.675 9.56251 15 5.92501 12.7875 3.07501C17.5875 4.68751 20.2875 9.67501 18.9375 14.4Z"
            />
          </svg>
        </span>
        <span class="hidden text-white dark:block">
          <svg
            class="fill-current"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <g clip-path="url(#clip0_2172_3070)">
              <path
                d="M12 6.89999C9.18752 6.89999 6.90002 9.18749 6.90002 12C6.90002 14.8125 9.18752 17.1 12 17.1C14.8125 17.1 17.1 14.8125 17.1 12C17.1 9.18749 14.8125 6.89999 12 6.89999ZM12 15.4125C10.125 15.4125 8.58752 13.875 8.58752 12C8.58752 10.125 10.125 8.58749 12 8.58749C13.875 8.58749 15.4125 10.125 15.4125 12C15.4125 13.875 13.875 15.4125 12 15.4125Z"
              />
              <path
                d="M12 4.2375C12.45 4.2375 12.8625 3.8625 12.8625 3.375V1.5C12.8625 1.05 12.4875 0.637497 12 0.637497C11.55 0.637497 11.1375 1.0125 11.1375 1.5V3.4125C11.175 3.8625 11.55 4.2375 12 4.2375Z"
              />
              <path
                d="M12 19.7625C11.55 19.7625 11.1375 20.1375 11.1375 20.625V22.5C11.1375 22.95 11.5125 23.3625 12 23.3625C12.45 23.3625 12.8625 22.9875 12.8625 22.5V20.5875C12.8625 20.1375 12.45 19.7625 12 19.7625Z"
              />
              <path
                d="M18.1125 6.74999C18.3375 6.74999 18.5625 6.67499 18.7125 6.48749L19.9125 5.28749C20.25 4.94999 20.25 4.42499 19.9125 4.08749C19.575 3.74999 19.05 3.74999 18.7125 4.08749L17.5125 5.28749C17.175 5.62499 17.175 6.14999 17.5125 6.48749C17.6625 6.67499 17.8875 6.74999 18.1125 6.74999Z"
              />
              <path
                d="M5.32501 17.5125L4.12501 18.675C3.78751 19.0125 3.78751 19.5375 4.12501 19.875C4.27501 20.025 4.50001 20.1375 4.72501 20.1375C4.95001 20.1375 5.17501 20.0625 5.32501 19.875L6.52501 18.675C6.86251 18.3375 6.86251 17.8125 6.52501 17.475C6.18751 17.175 5.62501 17.175 5.32501 17.5125Z"
              />
              <path
                d="M22.5 11.175H20.5875C20.1375 11.175 19.725 11.55 19.725 12.0375C19.725 12.4875 20.1 12.9 20.5875 12.9H22.5C22.95 12.9 23.3625 12.525 23.3625 12.0375C23.3625 11.55 22.95 11.175 22.5 11.175Z"
              />
              <path
                d="M4.23751 12C4.23751 11.55 3.86251 11.1375 3.37501 11.1375H1.50001C1.05001 11.1375 0.637512 11.5125 0.637512 12C0.637512 12.45 1.01251 12.8625 1.50001 12.8625H3.41251C3.86251 12.8625 4.23751 12.45 4.23751 12Z"
              />
              <path
                d="M18.675 17.5125C18.3375 17.175 17.8125 17.175 17.475 17.5125C17.1375 17.85 17.1375 18.375 17.475 18.7125L18.675 19.9125C18.825 20.0625 19.05 20.175 19.275 20.175C19.5 20.175 19.725 20.1 19.875 19.9125C20.2125 19.575 20.2125 19.05 19.875 18.7125L18.675 17.5125Z"
              />
              <path
                d="M5.32501 4.125C4.98751 3.7875 4.46251 3.7875 4.12501 4.125C3.78751 4.4625 3.78751 4.9875 4.12501 5.325L5.32501 6.525C5.47501 6.675 5.70001 6.7875 5.92501 6.7875C6.15001 6.7875 6.37501 6.7125 6.52501 6.525C6.86251 6.1875 6.86251 5.6625 6.52501 5.325L5.32501 4.125Z"
              />
            </g>
            <defs>
              <clipPath id="clip0_2172_3070">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </span>
      </label>
    </div>
    <!-- theme switcher -->
  <script defer src="bundle.js"></script></body>

<!-- Mirrored from demo.tailgrids.com/templates/startup/build/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2024 05:39:24 GMT -->
</html>
