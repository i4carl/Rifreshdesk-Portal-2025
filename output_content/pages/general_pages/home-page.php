<style>
    .fw-helpcenter{
        padding: 0;
    }
    .cool-animation-hover{
        position: relative;
    }
    .cool-animation-hover > .cool-animation-portal{
        position: absolute;
        width: 0;
        height: 100%;
        overflow: hidden;
        transition: width ease 1200ms;
    }
    .cool-animation-hover:hover > .cool-animation-portal{
        overflow: hidden;
        transition: width ease 1200ms;
        width: 100%;
        height: 100%;
        /* box-shadow: 0 0 2px 0px #000; */
    }
    .cool-animation-hover > .cool-animation-portal > div{
        position: absolute;
        width: 230px;
        height: 100%;
        left: 50%;
        top: 0%;
        transform: translateX(-50%);
    }
    label.group.active{
        border-color: #fff !important;
    }
</style>
<section class="fw-helpcenter flex w-full flex-col relative">
    <div class="flex flex-col w-full min-h-[533px] relative p-9">
        <div class="absolute w-full h-full flex top-0 left-0">
            <div class="flex-1 h-full overflow-hidden">
                <img src="./assets/homepage/homepage-banner.png" class="w-full object-contain" alt="">
            </div>
            <div class="bg-[#000] w-[288px] h-full">
            </div>
        </div>
        <header class="w-full justify-between flex relative z-[1]">
            <div id="portal-brand-wrapper" class="flex w-[245px] gap-6 ">
                <img src="./assets/global/header-logo.png" class="w-14 object-contain" alt="">
                <div class="font-['Cormorant_Garamond',sans-serif] font-bold text-white text-[42px] leading-[1.21]">
                    Freshdesk
                </div>
            </div>
        </header>
    </div>
</section>
<!-- <section>
    <div class="alert alert-with-close notice" id="noticeajax" style="display: none;"></div>
</section>
<section class="container-fluid px-0 fw-helpcenter mb-md-n64">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-6 mx-auto">
                <h1>Hi, how can we help you?</h1>

                <form action="/support/search" id="fw-search-form" data-current-tab="all">
                    <div class="form-group fw-search my-0">
                        <div class="input-group">
                            <input type="text" class="form-control" id="searchInput" name="term" value="" placeholder="Enter the search term here...." autocomplete="off" aria-label="Enter the search term here...." />
                            <button class="btn px-20 input-group-text" type="submit" tabindex="-1" aria-label="Search"><span class="icon-search"></span></button>
                        </div>

                        <div class="visually-hidden">
                            <span id="srSearchUpdateMessage" aria-live="polite"></span>
                        </div>

                        <div class="fw-autocomplete-wrapper box-shadow bg-light br-8 p-16 d-none">
                            <div class="fw-autocomplete-header">
                                <button class="fw-search-tab fw-active-search-tab" data-tab="all">
                                    All
                                </button>

                                <button class="fw-search-tab" data-tab="solutions">
                                    Articles
                                </button>

                                <button class="fw-search-tab" data-tab="topics">
                                    Topics
                                </button>

                                <button class="fw-search-tab" data-tab="tickets">
                                    Tickets
                                </button>
                            </div>

                            <div class="fw-loading my-80 d-none"></div>

                            <div class="fw-autocomplete-focus">
                                <div class="fw-recent-search">
                                    <div class="fw-recent-title d-none row align-items-center">
                                        <div class="col-8 fs-20 semi-bold"><span class="icon-recent me-8"></span>Recent Searches</div>
                                        <div class="col-4 px-0 text-end"><button class="btn btn-link fw-clear-all">Clear all</button></div>
                                    </div>
                                    <p class="ps-32 fw-no-recent-searches mb-16 d-none">No recent searches</p>
                                    <ul class="fw-no-bullet fw-recent-searches mb-16 d-none"></ul>
                                </div>

                                <div class="fw-popular-articles-search">
                                    <p class="fs-20 semi-bold fw-popular-title d-none"><span class="icon-article me-8"></span> Popular Articles</p>
                                    <ul class="fw-no-bullet fw-popular-topics d-none"></ul>
                                </div>

                                <div class="fw-solutions-search-results fw-results d-none">
                                    <hr class="mt-24" />
                                    <div class="fw-solutions-search-results-title row align-items-center">
                                        <div class="col-8 fs-20 semi-bold"><span class="icon-article me-8"></span>Articles</div>
                                        <div class="col-4 px-0 text-end"><a class="btn btn-link fw-view-all fw-solutions-view-all" href="/support/search/solutions">View all</a></div>
                                    </div>
                                    <ul class="fw-no-bullet fw-search-results fw-solutions-search-results-container"></ul>
                                </div>

                                <div class="fw-topics-search-results fw-results d-none">
                                    <hr class="mt-24" />
                                    <div class="fw-topics-search-results-title row align-items-center">
                                        <div class="col-8 fs-20 semi-bold"><span class="icon-topic me-8"></span>Topics</div>
                                        <div class="col-4 px-0 text-end"><a class="btn btn-link fw-view-all fw-topics-view-all" href="/support/search/topics">View all</a></div>
                                    </div>
                                    <ul class="fw-no-bullet fw-search-results fw-topics-search-results-container"></ul>
                                </div>

                                <div class="fw-tickets-search-results fw-results d-none">
                                    <hr class="mt-24" />
                                    <div class="fw-tickets-search-results-title row align-items-center">
                                        <div class="col-8 fs-20 semi-bold"><span class="icon-ticket me-8"></span>Tickets</div>
                                        <div class="col-4 px-0 text-end"><a class="btn btn-link fw-view-all fw-tickets-view-all" href="/support/search/tickets">View all</a></div>
                                    </div>
                                    <ul class="fw-no-bullet fw-search-results fw-tickets-search-results-container"></ul>
                                </div>
                            </div>

                            <div class="fw-autocomplete-noresults d-none text-center py-40">
                                <img src="/assets/cdn/portal/images/no-results.png" class="img-fluid fw-no-results-img" alt="no results" />
                                <p class="mt-24 text-secondary">
                                    Sorry! nothing found for <br />
                                    <span id="input_term"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid px-0 mt-16">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-3 mb-8">
                <a class="card fw-horizontal" href="/support/solutions" aria-label="Browse articles" data-customize-id="solutions">
                    <div class="col-3 px-0 my-auto text-center">
                        <div class="fw-category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #fff;
                                            opacity: 0.01;
                                        }
                                        .cls-2,
                                        .cls-3 {
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                        .cls-2 {
                                            stroke: #475867;
                                        }
                                        .cls-3 {
                                            stroke: #00a886;
                                        }
                                    </style>
                                </defs>
                                <g id="White_BG" data-name="White BG"><rect class="cls-1" width="64" height="64"></rect></g>
                                <g id="Artwork">
                                    <circle class="cls-2" cx="32.05" cy="30.65" r="14.75"></circle>
                                    <path class="cls-2" d="M38.27,44.4v8.8a1.56,1.56,0,0,1-1.55,1.56H27.39a1.56,1.56,0,0,1-1.55-1.56V44.4"></path>
                                    <line class="cls-2" x1="30.54" y1="58.94" x2="33.65" y2="58.94"></line>
                                    <path class="cls-2" d="M42.35,34.16a10.65,10.65,0,0,1-.87,1.91"></path>
                                    <path class="cls-2" d="M32.05,19.78A10.88,10.88,0,0,1,42.93,30.65"></path>
                                    <line class="cls-3" x1="32" y1="5.06" x2="32" y2="9.64"></line>
                                    <line class="cls-3" x1="13.9" y1="12.55" x2="17.14" y2="15.79"></line>
                                    <line class="cls-3" x1="50.1" y1="48.75" x2="46.86" y2="45.52"></line>
                                    <line class="cls-3" x1="6.4" y1="30.65" x2="10.98" y2="30.65"></line>
                                    <line class="cls-3" x1="57.6" y1="30.65" x2="53.02" y2="30.65"></line>
                                    <line class="cls-3" x1="13.9" y1="48.75" x2="17.14" y2="45.52"></line>
                                    <line class="cls-3" x1="50.1" y1="12.55" x2="46.86" y2="15.79"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body col-9">
                        <h2 class="mt-0 card-title fs-18 line-clamp-2">Browse articles</h2>
                        <p class="line-clamp-3">Explore How-To's and learn best practices from our knowledge base</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-3 mb-8">
                <a class="card fw-horizontal" href="/support/discussions" aria-label="Meet the community" data-customize-id="forums">
                    <div class="col-3 px-0 my-auto text-center">
                        <div class="fw-category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #fff;
                                            opacity: 0.01;
                                        }
                                        .cls-2,
                                        .cls-3,
                                        .cls-4 {
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                        }
                                        .cls-2,
                                        .cls-3 {
                                            stroke: #475867;
                                        }
                                        .cls-2,
                                        .cls-4 {
                                            stroke-width: 2px;
                                        }
                                        .cls-3 {
                                            stroke-width: 1.98px;
                                        }
                                        .cls-4 {
                                            stroke: #00a886;
                                        }
                                        .cls-5 {
                                            fill: #00a886;
                                        }
                                    </style>
                                </defs>
                                <g id="White_BG" data-name="White BG"><rect class="cls-1" width="64" height="64"></rect></g>
                                <g id="Artwork">
                                    <circle class="cls-2" cx="32" cy="34.98" r="5"></circle>
                                    <path class="cls-2" d="M22,54A10,10,0,0,1,32.67,44,10.24,10.24,0,0,1,42,54.31V57a2,2,0,0,1-2,2H24a2,2,0,0,1-2-2Z"></path>
                                    <circle class="cls-3" cx="46.08" cy="39.82" r="4"></circle>
                                    <path class="cls-2" d="M40.72,48.85a8.06,8.06,0,0,1,5.9-2,8.29,8.29,0,0,1,7.56,8.36v2.17A1.63,1.63,0,0,1,52.56,59h-13"></path>
                                    <circle class="cls-3" cx="17.95" cy="39.82" r="4"></circle>
                                    <path class="cls-2" d="M24.43,59h-13a1.62,1.62,0,0,1-1.62-1.62V54.92a8.1,8.1,0,0,1,8.64-8.08A7.84,7.84,0,0,1,23.35,49"></path>
                                    <path class="cls-4" d="M29.94,21H20l-2,5-2-5H11.92A6.9,6.9,0,0,1,5,14.12V11.91A6.9,6.9,0,0,1,11.92,5H52.13A6.9,6.9,0,0,1,59,11.91v2.21A6.9,6.9,0,0,1,52.13,21H48l-2,5-2-5h-10L32,26Z"></path>
                                    <circle class="cls-5" cx="31.99" cy="12.64" r="2"></circle>
                                    <circle class="cls-5" cx="39.92" cy="12.64" r="2"></circle>
                                    <circle class="cls-5" cx="24" cy="12.64" r="2"></circle>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body col-9">
                        <h2 class="mt-0 card-title fs-18 line-clamp-2">Meet the community</h2>
                        <p class="line-clamp-3">Set up your support portal, populate it with useful solutions, and create a dedicated community for your customers</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-3 mb-8">
                <a class="card fw-horizontal" href="/support/tickets" aria-label="View all tickets" data-customize-id="tickets_list">
                    <div class="col-3 px-0 my-auto text-center">
                        <div class="fw-category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #fff;
                                            opacity: 0.01;
                                        }
                                        .cls-2,
                                        .cls-3 {
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                        .cls-2 {
                                            stroke: #475867;
                                        }
                                        .cls-3 {
                                            stroke: #00a886;
                                        }
                                    </style>
                                </defs>
                                <g id="White_BG" data-name="White BG"><rect class="cls-1" width="64" height="64"></rect></g>
                                <g id="Artwork">
                                    <path class="cls-2" d="M5,27.83V11A6.08,6.08,0,0,1,11.06,5H48.91A6.07,6.07,0,0,1,55,11V27.83"></path>
                                    <path class="cls-2" d="M5,27.59V17A6.08,6.08,0,0,1,11.06,11H48.91A6.08,6.08,0,0,1,55,17V27.59"></path>
                                    <path class="cls-2" d="M35.1,52.07h-24A6.08,6.08,0,0,1,5,46V39.81a5,5,0,0,0,0-10V23A6.07,6.07,0,0,1,11.05,17H48.9A6.07,6.07,0,0,1,55,23v6.79h0a5,5,0,0,0-5,4.56"></path>
                                    <path class="cls-2" d="M34.57,43.1h-13a4,4,0,0,1-4-4v-8a4,4,0,0,1,4-4h18a4,4,0,0,1,4,4v2.95"></path>
                                    <circle class="cls-3" cx="46.58" cy="46.6" r="12.43"></circle>
                                    <path class="cls-3" d="M55.67,47.3a11.24,11.24,0,0,1-18,0,11.22,11.22,0,0,1,18,0Z"></path>
                                    <path class="cls-3" d="M50.29,46a3.62,3.62,0,1,1-5.65-3,11.59,11.59,0,0,1,4.07,0A3.6,3.6,0,0,1,50.29,46Z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body col-9">
                        <h2 class="mt-0 card-title fs-18 line-clamp-2">View all tickets</h2>
                        <p class="line-clamp-3">Track all your ticket's progress and your interaction with the support teams</p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-xl-3 mb-8">
                <a class="card fw-horizontal" href="/support/tickets/new" aria-label="Submit a ticket" data-customize-id="submit_ticket">
                    <div class="col-3 px-0 my-auto text-center">
                        <div class="fw-category-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #fff;
                                            opacity: 0.01;
                                        }
                                        .cls-2,
                                        .cls-3 {
                                            fill: none;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                        .cls-2 {
                                            stroke: #475867;
                                        }
                                        .cls-3 {
                                            stroke: #00a886;
                                        }
                                    </style>
                                </defs>
                                <g id="White_BG" data-name="White BG"><rect class="cls-1" width="64" height="64"></rect></g>
                                <g id="Artwork">
                                    <circle class="cls-2" cx="20.96" cy="22.89" r="7.95"></circle>
                                    <path class="cls-2" d="M5.05,51A15.91,15.91,0,0,1,22,35.12c8.45.55,14.84,8,14.84,16.42V55.8A3.18,3.18,0,0,1,33.68,59H8.23A3.18,3.18,0,0,1,5.05,55.8Z"></path>
                                    <path class="cls-3" d="M37.86,23.4A11.63,11.63,0,1,1,40.38,26l-4,1.49Z"></path>
                                    <line class="cls-3" x1="47.43" y1="11.11" x2="47.43" y2="17.11"></line>
                                    <line class="cls-3" x1="47.43" y1="20.75" x2="47.43" y2="21.75"></line>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body col-9">
                        <h2 class="mt-0 card-title fs-18 line-clamp-2">Submit a ticket</h2>
                        <p class="line-clamp-3">Describe your issue by filling out the support ticket form</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid px-0">
    <div class="container">
        <div class="fw-section-heading text-center mt-28 mt-md-44 mb-24 mb-md-16">
            <h2>Knowledge base</h2>
            <a href="/support/solutions">View all articles</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-xl-3 mb-8">
                <a class="card h-100 fw-kbase-card" aria-label="Knowledge Base" href="/support/solutions/1070000142743">
                    <div class="px-0 my-auto fw-icon-holder">
                        <span class="icon-category"></span>
                    </div>
                    <div class="card-body">
                        <p class="mt-0 card-title fs-18 line-clamp-2">Knowledge Base</p>
                        <p class="line-clamp-2"></p>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-xl-3 mb-8">
                <a class="card h-100 fw-kbase-card" aria-label="Guidelines" href="/support/solutions/1070000228524">
                    <div class="px-0 my-auto fw-icon-holder">
                        <span class="icon-category"></span>
                    </div>
                    <div class="card-body">
                        <p class="mt-0 card-title fs-18 line-clamp-2">Guidelines</p>
                        <p class="line-clamp-2">Insert all manuals from the end-user to the agent. All the app integrations, theme customization, API documentations and etc.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid px-0 pb-60">
    <div class="container">
        <div class="fw-section-heading text-center mt-28 mt-md-44 mb-24 mb-md-16">
            <h2>Forums</h2>
            <a href="/support/discussions">View all topics</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-xl-3 mb-8">
                <a class="card h-100" href="/support/discussions/1070000064758" aria-label="Freshworks Forums">
                    <div class="card-body">
                        <p class="mt-0 card-title fs-18 line-clamp-2">Freshworks Forums</p>
                        <p class="line-clamp-2">Default forum category, feel free to edit or delete it.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid px-0 pt-60 pb-44 bg-light">
    <div class="container">
        <div class="col-xl-9 mx-auto mb-32">
            <div class="fw-section-heading row mb-16">
                <div class="col-md-8 text-center text-lg-start">
                    <h4>Most popular articles</h4>
                </div>
                <div class="col-md-4 text-center text-end">
                    <a href="/support/solutions">View all articles</a>
                </div>
            </div>
            <div class="fw-articles">
                <div class="row">
                    <a class="col-md-6 fw-article-info d-flex" href="/support/solutions/articles/1070000079211-tcl-television" aria-label="Advanced filters for Search">
                        <div class="pt-4 pe-8"><span class="icon-article pr-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">TCL television</p>
                            <p class="line-clamp-2 fw-meta-info">
                                Modified on Fri, Sep 6, 2024 at 1:57 PM
                            </p>
                        </div>
                        <p></p>
                    </a>

                    <a class="col-md-6 fw-article-info d-flex" href="/support/solutions/articles/1070000079212-tcl-smartphone" aria-label="Advanced filters for Search">
                        <div class="pt-4 pe-8"><span class="icon-article pr-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">TCL Smartphone</p>
                            <p class="line-clamp-2 fw-meta-info">
                                Modified on Fri, Sep 6, 2024 at 1:58 PM
                            </p>
                        </div>
                        <p></p>
                    </a>

                    <a
                        class="col-md-6 fw-article-info d-flex"
                        href="/support/solutions/articles/1070000079210-tcl-inspires-greatness-and-unveils-its-vision-for-the-future-of-home-theatre-mobile-tech-and-home-li"
                        aria-label="Advanced filters for Search"
                    >
                        <div class="pt-4 pe-8"><span class="icon-article pr-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">TCL Inspires Greatness and Unveils its Vision for the Future of Home Theatre, Mobile Tech and Home Living at IFA 2024</p>
                            <p class="line-clamp-2 fw-meta-info">
                                Modified on Fri, Sep 6, 2024 at 1:56 PM
                            </p>
                        </div>
                        <p></p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-9 mx-auto">
            <div class="fw-section-heading row mb-16">
                <div class="col-md-8 text-center text-lg-start">
                    <h4>Trending topics</h4>
                </div>
                <div class="col-md-4 text-center text-end">
                    <a href="/support/discussions">View all topics</a>
                </div>
            </div>
            <div class="fw-articles odd-count">
                <div class="row">
                    <a class="col-md-6 fw-article-info d-flex" href="/support/discussions/topics/1070000512325" aria-label="Advanced filters for Search">
                        <div class="pt-4 pe-8"><span class="icon-topic pe-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">Fast tracked delivery</p>
                            <p class="line-clamp-2 fw-meta-info">Created on Tue, Aug 20, 2024 at 2:57 PM by Joe Mathew</p>
                        </div>
                    </a>

                    <a class="col-md-6 fw-article-info d-flex" href="/support/discussions/topics/1070000512323" aria-label="Advanced filters for Search">
                        <div class="pt-4 pe-8"><span class="icon-topic pe-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">SMS tracking</p>
                            <p class="line-clamp-2 fw-meta-info">Created on Tue, Aug 20, 2024 at 2:39 PM by Maria Von Trapp</p>
                        </div>
                    </a>

                    <a class="col-md-6 fw-article-info d-flex" href="/support/discussions/topics/1070000512324" aria-label="Advanced filters for Search">
                        <div class="pt-4 pe-8"><span class="icon-topic pe-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">Choosing delivery slots</p>
                            <p class="line-clamp-2 fw-meta-info">Created on Tue, Aug 20, 2024 at 2:48 PM by Sam Kart</p>
                        </div>
                    </a>

                    <a class="col-md-6 fw-article-info d-flex" href="/support/discussions/topics/1070000512320" aria-label="Advanced filters for Search">
                        <div class="pt-4 pe-8"><span class="icon-topic pe-8"></span></div>
                        <div>
                            <p class="fs-18 semi-bold line-clamp-2">End of season sale</p>
                            <p class="line-clamp-2 fw-meta-info">Created on Tue, Aug 20, 2024 at 2:21 PM by Joe Mathew</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
