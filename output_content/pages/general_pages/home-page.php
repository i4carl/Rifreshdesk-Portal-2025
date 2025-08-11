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
    @media screen and (max-width: 1024px){
        #menuNavDisplay{
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            padding: 38px 24px;
            background: #172965e0;
            width: 100%;
            height: 100%;
            z-index: 1024;
            backdrop-filter: blur(8px);
            transform: translateX(100%);
            transition: all ease 300ms;
        }
        #menuNavDisplay.is-open{
            transform: translateX(0%);
        }
        .menu-button{
            z-index: 1025;
        }
    }
</style>
<section class="fw-helpcenter flex w-full flex-col relative !bg-white">
    <div class="flex flex-col w-full min-h-[533px] relative p-9">
        <div class="absolute w-full h-full flex top-0 left-0">
            <div class="flex-1 h-full overflow-hidden">
                <div class="w-full h-full bg-[url('https://cdn.jsdelivr.net/gh/i4carl/Rifreshdesk-Portal-2025@4fab7ccd5ae0c6ec2eec5c85059ab9f2f1b90206/assets/homepage/homepage-banner.jpg')] bg-fixed bg-center"></div>
                <!-- <img src="./assets/homepage/homepage-banner.png" class="w-full object-contain" alt=""> -->
                <div class="bg-[#172964cc] w-full h-full top-0 left-0 absolute"></div>
            </div>
        </div>
        <div class="flex flex-col w-full relative gap-30 z-[1]">
            <header class="w-full justify-between items-center flex">
                <div id="portal-brand-wrapper" class="flex w-[133px] gap-6 shrink-0">
                    <img src="https://cdn.jsdelivr.net/gh/i4carl/Rifreshdesk-Portal-2025@4fab7ccd5ae0c6ec2eec5c85059ab9f2f1b90206/assets/global/PESO.png" class="w-full object-contain" alt="">
                </div>
                <div class="menu-button cursor-pointer w-6 h-6 flex shrink-0 lg:hidden">
                    <svg class="w-full h-full text-white" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z" fill="white"/>
                    </svg>
                </div>
                <nav id="menuNavDisplay" class="flex gap-3">
                    <a href="/support/home" class="gap-3 flex !font-['Poppins',sans-serif] text-sm leading-[1.6] text-white p-3">
                        <svg class="text-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.6667 16.6668C16.6667 17.127 16.2936 17.5001 15.8334 17.5001H4.16671C3.70647 17.5001 3.33337 17.127 3.33337 16.6668V9.16676H0.833374L9.43946 1.34302C9.75729 1.05407 10.2428 1.05407 10.5606 1.34302L19.1667 9.16676H16.6667V16.6668ZM9.16671 10.8334V15.8334H10.8334V10.8334H9.16671Z"
                                fill="currentColor"
                            ></path>
                        </svg>
                        <span>Home</span>
                    </a>
                    <a href="/support/solutions" class="gap-3 flex !font-['Poppins',sans-serif] text-sm leading-[1.6] text-white p-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.6667 18.3333H5.41667C3.80583 18.3333 2.5 17.0275 2.5 15.4167V4.16666C2.5 2.78595 3.61929 1.66666 5 1.66666H16.6667C17.1269 1.66666 17.5 2.03976 17.5 2.49999V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333ZM15.8333 16.6667V14.1667H5.41667C4.72631 14.1667 4.16667 14.7263 4.16667 15.4167C4.16667 16.107 4.72631 16.6667 5.41667 16.6667H15.8333ZM8.33333 3.33332V9.99999L11.25 8.33332L14.1667 9.99999V3.33332H8.33333Z"
                                fill="white"
                            ></path>
                        </svg>
                        <span>Knowledge Base</span>
                    </a>
                    <a href="/support/discussions" class="gap-3 flex !font-['Poppins',sans-serif] text-sm leading-[1.6] text-white p-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.16659 11.7183V16.6667H10.8333V11.7183C14.1218 12.1283 16.6666 14.9337 16.6666 18.3333H3.33325C3.33325 14.9337 5.87799 12.1283 9.16659 11.7183ZM9.99992 10.8333C7.23742 10.8333 4.99992 8.59584 4.99992 5.83334C4.99992 3.07084 7.23742 0.833344 9.99992 0.833344C12.7624 0.833344 14.9999 3.07084 14.9999 5.83334C14.9999 8.59584 12.7624 10.8333 9.99992 10.8333Z"
                                fill="white"
                            ></path>
                        </svg>
                        <span>Forums</span>
                    </a>
                    <a href="/support/tickets" class="gap-3 flex !font-['Poppins',sans-serif] text-sm leading-[1.6] text-white p-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.504 2.4996C17.9643 2.4996 18.3373 2.8727 18.3373 3.33294V7.91627C17.1868 7.91627 16.254 8.84901 16.254 9.9996C16.254 11.1502 17.1868 12.0829 18.3373 12.0829V16.6663C18.3373 17.1265 17.9643 17.4996 17.504 17.4996H2.50399C2.04375 17.4996 1.67065 17.1265 1.67065 16.6663V12.0829C2.82125 12.0829 3.75399 11.1502 3.75399 9.9996C3.75399 8.84901 2.82125 7.91627 1.67065 7.91627V3.33294C1.67065 2.8727 2.04375 2.4996 2.50399 2.4996H17.504ZM13.3373 7.4996H6.67065V12.4996H13.3373V7.4996Z"
                                fill="white"
                            ></path>
                        </svg>
                        <span>Tickets</span>
                    </a>
                    <a href="/logout" class="gap-3 flex !font-['Poppins',sans-serif] text-sm leading-[1.6] text-white p-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 17L21 12L16 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M21 12H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12 5H6C4.89543 5 4 5.89543 4 7V17C4 18.1046 4.89543 19 6 19H12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span>Logout</span>
                    </a>
                </nav>
            </header>
            <div id="search_container" class="flex flex-col max-w-150 items-start">
                <div class="text-white !font-['Poppins',sans-serif] text-[20.16px] leading-[1.6] font-bold ml-[42px]">Need help?</div>
                <form action="/support/search" id="fw-search-form" data-current-tab="all">
                  <div class="fw-search flex flex-col mt-0">
                    <label for="searchBar" class="group hover:!border-[#fff] focus-within:!border-[#fff] !flex !py-[12px] border-b border-[#fff] w-full gap-[10px] items-center">
                        <button type="submit" class="input-group-text !p-0 !bg-transparent !border-none !h-0">
                          <svg class="group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !text-[#fff] w-[35px] h-[35px]" width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.972 2.97998C23.1855 2.97998 29.04 8.83444 29.04 16.048C29.04 23.2615 23.1855 29.116 15.972 29.116C8.75846 29.116 2.90399 23.2615 2.90399 16.048C2.90399 8.83444 8.75846 2.97998 15.972 2.97998ZM15.972 26.212C21.5876 26.212 26.136 21.6636 26.136 16.048C26.136 10.4324 21.5876 5.88398 15.972 5.88398C10.3564 5.88398 5.80799 10.4324 5.80799 16.048C5.80799 21.6636 10.3564 26.212 15.972 26.212ZM28.2926 26.3152L32.3995 30.4221L30.3461 32.4755L26.2392 28.3686L28.2926 26.3152Z" fill="currentColor"></path>
                          </svg>
                        </button>
                        <input type="text" name="term" id="searchInput" class="autofill:bg-[#000] px-0 group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !border-0 !outline-none !h-fit !text-[29.04px] !leading-[1.6] !!font-['Poppins',sans-serif] !text-[#fff] w-full" placeholder="Enter the search term here...">
                    </label>
                    <div class="fw-autocomplete-wrapper d-none box-shadow bg-light br-8 p-16 top-[100%]">
                        <div class="fw-autocomplete-header">
                            <button class="fw-search-tab fw-active-search-tab" data-tab="all">
                                All
                            </button>

                            <button class="fw-search-tab" data-tab="solutions">
                                Articles
                            </button>
                        </div>

                        <div class="fw-loading my-80 d-none"></div>

                        <div class="fw-autocomplete-focus">
                            <div class="fw-recent-search">
                                <div class="fw-recent-title row align-items-center">
                                    <div class="col-8 fs-20 semi-bold"><span class="icon-recent me-8"></span>Recent Searches</div>
                                    <div class="col-4 px-0 text-end"><button class="btn btn-link fw-clear-all">Clear all</button></div>
                                </div>
                                <p class="ps-32 fw-no-recent-searches mb-16 d-none">No recent searches</p>
                                <ul class="fw-no-bullet fw-recent-searches mb-16"><li><a class="ps-32 line-clamp-2" href="/en/support/search?term=asd">asd</a></li><li><a class="ps-32 line-clamp-2" href="/en/support/search?term=as">as</a></li><li><a class="ps-32 line-clamp-2" href="/en/support/search?term=dcxcas">dcxcas</a></li><li><a class="ps-32 line-clamp-2" href="/en/support/search?term=ad">ad</a></li></ul>
                            </div>

                            <div class="fw-popular-articles-search">
                                <p class="fs-20 semi-bold fw-popular-title"><span class="icon-article me-8"></span> Popular Articles</p>
                                <ul class="fw-no-bullet fw-popular-topics"><li><a href="/support/solutions/articles/1070000079211-tcl-television" class="ps-32 line-clamp-2">TCL television</a></li><li><a href="/support/solutions/articles/1070000079212-tcl-smartphone" class="ps-32 line-clamp-2">TCL Smartphone</a></li><li><a href="/support/solutions/articles/1070000079210-tcl-inspires-greatness-and-unveils-its-vision-for-the-future-of-home-theatre-mobile-tech-and-home-li" class="ps-32 line-clamp-2">TCL Inspires Greatness and Unveils its Vision for the Future of Home Theatre, Mobile Tech and Home Living at IFA 2024</a></li></ul>
                            </div>

                            <div class="fw-solutions-search-results fw-results d-none">
                                <hr class="mt-24">
                                <div class="fw-solutions-search-results-title row align-items-center">
                                    <div class="col-8 fs-20 semi-bold"><span class="icon-article me-8"></span>Articles</div>
                                    <div class="col-4 px-0 text-end"><a class="btn btn-link fw-view-all fw-solutions-view-all" href="/support/search/solutions">View all (4)</a></div>
                                </div>
                                <ul class="fw-no-bullet fw-search-results fw-solutions-search-results-container"></ul>
                            </div>

                            <div class="fw-topics-search-results fw-results d-none">
                                <hr class="mt-24">
                                <div class="fw-topics-search-results-title row align-items-center">
                                    <div class="col-8 fs-20 semi-bold"><span class="icon-topic me-8"></span>Topics</div>
                                    <div class="col-4 px-0 text-end"><a class="btn btn-link fw-view-all fw-topics-view-all" href="/support/search/topics">View all</a></div>
                                </div>
                                <ul class="fw-no-bullet fw-search-results fw-topics-search-results-container"></ul>
                            </div>

                            <div class="fw-tickets-search-results fw-results d-none">
                                <hr class="mt-24">
                                <div class="fw-tickets-search-results-title row align-items-center">
                                    <div class="col-8 fs-20 semi-bold"><span class="icon-ticket me-8"></span>Tickets</div>
                                    <div class="col-4 px-0 text-end"><a class="btn btn-link fw-view-all fw-tickets-view-all" href="/support/search/tickets">View all</a></div>
                                </div>
                                <ul class="fw-no-bullet fw-search-results fw-tickets-search-results-container"></ul>
                            </div>
                        </div>

                        <div class="fw-autocomplete-noresults text-center py-40 d-none">
                            <img src="/assets/cdn/portal/images/no-results.png" class="img-fluid fw-no-results-img" alt="no results">
                            <p class="mt-24 text-secondary">
                                Sorry! nothing found for <br>
                                <span id="input_term"><strong>"asd"</strong></span>
                            </p>
                        </div>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-full flex px-6 !py-18 gap-6 flex-wrap">
        <div class="gap-3 py-3 px-0 sm:!px-6 flex flex-1 min-w-[275px]">
            <div class="flex gap-[14px]">
                <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                    <svg class="w-[21px] h-[21px]" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.37737 15.12H11.7826C11.8935 14.1107 12.4085 13.2775 13.2448 12.367C13.3389 12.2645 13.943 11.6394 14.0146 11.5501C14.7267 10.6622 15.12 9.5634 15.12 8.4C15.12 5.61648 12.8635 3.36 10.08 3.36C7.29647 3.36 5.03999 5.61648 5.03999 8.4C5.03999 9.56281 5.43289 10.661 6.14427 11.5487C6.21602 11.6382 6.82147 12.265 6.91448 12.3663C7.75122 13.2774 8.26645 14.1107 8.37737 15.12ZM11.76 16.8H8.39999V17.64H11.76V16.8ZM4.8333 12.5993C3.9114 11.4489 3.35999 9.98886 3.35999 8.4C3.35999 4.68864 6.36863 1.68 10.08 1.68C13.7914 1.68 16.8 4.68864 16.8 8.4C16.8 9.9897 16.2479 11.4505 15.3252 12.6012C14.8041 13.2508 13.44 14.28 13.44 15.54V17.64C13.44 18.5679 12.6878 19.32 11.76 19.32H8.39999C7.47215 19.32 6.71999 18.5679 6.71999 17.64V15.54C6.71999 14.28 5.35463 13.2498 4.8333 12.5993ZM10.92 8.40403H13.02L9.23998 13.444V10.084H7.13999L10.92 5.04V8.40403Z" fill="#111111"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-[14px] !font-['Poppins',sans-serif] text-[#111111] text-left">
                    <div class="leading-[1.15] font-bold text-base !font-['Lato',sans-serif]">
                        Browse articles
                    </div>
                    <div class="text-sm leading-[1.6]">
                        Explore How-To's and learn best practices from our knowledge base
                    </div>
                </div>
            </div>
        </div>
        <div class="gap-3 py-3 px-0 sm:!px-6 flex flex-1 min-w-[275px]">
            <div class="flex gap-[14px]">
                <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                    <svg class="w-[21px] h-[21px]" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.6401 17.64H2.52005C2.05614 17.64 1.68005 17.2639 1.68005 16.8V10.4889C1.68005 10.2461 1.78506 10.0152 1.96802 9.85572L5.04005 7.17725V3.36C5.04005 2.89608 5.41614 2.52 5.88005 2.52H17.6401C18.104 2.52 18.4801 2.89608 18.4801 3.36V16.8C18.4801 17.2639 18.104 17.64 17.6401 17.64ZM7.56005 15.96H10.0801V10.8709L6.72005 7.94137L3.36005 10.8709V15.96H5.88005V12.6H7.56005V15.96ZM11.7601 15.96H16.8001V4.2H6.72005V5.98692C6.91698 5.98692 7.11391 6.05588 7.27208 6.19378L11.4721 9.85572C11.6551 10.0152 11.7601 10.2461 11.7601 10.4889V15.96ZM13.4401 9.24H15.1201V10.92H13.4401V9.24ZM13.4401 12.6H15.1201V14.28H13.4401V12.6ZM13.4401 5.88H15.1201V7.56H13.4401V5.88ZM10.0801 5.88H11.7601V7.56H10.0801V5.88Z" fill="#111111"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-[14px] !font-['Poppins',sans-serif] text-[#111111] text-left">
                    <div class="leading-[1.15] font-bold text-base !font-['Lato',sans-serif]">
                        Meet the community
                    </div>
                    <div class="text-sm leading-[1.6]">
                        Set up your support portal, populate it with useful solutions, and create a dedicated ...
                    </div>
                </div>
            </div>
        </div>
        <div class="gap-3 py-3 px-0 sm:!px-6 flex flex-1 min-w-[275px]">
            <div class="flex gap-[14px]">
                <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                    <svg class="w-[21px] h-[21px]" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.6441 2.52C18.108 2.52 18.4841 2.89608 18.4841 3.36V7.98C17.3243 7.98 16.3841 8.92021 16.3841 10.08C16.3841 11.2398 17.3243 12.18 18.4841 12.18V16.8C18.4841 17.2639 18.108 17.64 17.6441 17.64H2.52408C2.06017 17.64 1.68408 17.2639 1.68408 16.8V12.18C2.84388 12.18 3.78408 11.2398 3.78408 10.08C3.78408 8.92021 2.84388 7.98 1.68408 7.98V3.36C1.68408 2.89608 2.06017 2.52 2.52408 2.52H17.6441ZM16.8041 4.2H3.36408V6.69312L3.49503 6.76122C4.61944 7.37608 5.39712 8.54574 5.45997 9.90208L5.46408 10.08C5.46408 11.5115 4.66832 12.7572 3.49503 13.3988L3.36408 13.466V15.96H16.8041V13.466L16.6731 13.3988C15.5487 12.784 14.771 11.6143 14.7082 10.2579L14.7041 10.08C14.7041 8.64847 15.4998 7.40281 16.6731 6.76122L16.8041 6.69312V4.2ZM13.4441 7.56V12.6H6.72408V7.56H13.4441Z" fill="#111111"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-[14px] !font-['Poppins',sans-serif] text-[#111111] text-left">
                    <div class="leading-[1.15] font-bold text-base !font-['Lato',sans-serif]">
                        View all tickets
                    </div>
                    <div class="text-sm leading-[1.6]">
                        Track all your ticket's progress and your interaction with the support teams
                    </div>
                </div>
            </div>
        </div>
        <div class="gap-3 py-3 px-0 sm:!px-6 flex flex-1 min-w-[275px]">
            <div class="flex gap-[14px]">
                <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                    <svg class="w-[21px] h-[21px]" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6 3.36H4.20002V16.8H15.96V6.72H12.6V3.36ZM2.52002 2.51311C2.52002 2.053 2.89591 1.68 3.35876 1.68H13.44L17.6398 5.88L17.64 17.6337C17.64 18.1011 17.2663 18.48 16.8056 18.48H3.35448C2.89362 18.48 2.52002 18.0975 2.52002 17.6469V2.51311ZM9.24002 12.6H10.92V14.28H9.24002V12.6ZM9.24002 5.88H10.92V10.92H9.24002V5.88Z" fill="#111111"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-[14px] !font-['Poppins',sans-serif] text-[#111111] text-left">
                    <div class="leading-[1.15] font-bold text-base !font-['Lato',sans-serif]">
                        Submit a ticket
                    </div>
                    <div class="text-sm leading-[1.6]">
                        Describe your issue by filling out the support ticket form
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-[#145082] pt-[66px] !pb-[88px] px-6 gap-14 flex flex-col">
        <div class="gap-3 flex flex-col">
            <div class="py-6 px-0 sm:!px-6 flex gap-6 items-center">
                <div class="flex-1 bg-[#ffffffb3] h-[1px] opacity-[0.5]"></div>
                <div class="text-[24px] leading-[1.2083] !font-['Lato',sans-serif] text-[#fff]">Knowledge base</div>
                <div class="flex-1 bg-[#ffffffb3] h-[1px] opacity-[0.5]"></div>
            </div>
            <div class="px-0 sm:!px-6 py-3 gap-6 flex flex-wrap">
                <div class="flex-1 py-[30px] gap-6 flex h-[135px] text-white min-w-[750px]">
                    <img src="https://cdn.jsdelivr.net/gh/i4carl/Rifreshdesk-Portal-2025@4fab7ccd5ae0c6ec2eec5c85059ab9f2f1b90206/assets/homepage/technicalities.webp" class="w-15 h-15 object-cover rounded-lg" alt="">
                    <div class="flex flex-col gap-[14px] text-left">
                        <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Technicalities</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                            Learn more about the technicalities of Freshworks products
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-6 flex h-[135px] text-white min-w-[750px]">
                    <img src="https://cdn.jsdelivr.net/gh/i4carl/Rifreshdesk-Portal-2025@4fab7ccd5ae0c6ec2eec5c85059ab9f2f1b90206/assets/homepage/Clients.webp" class="w-15 h-15 object-cover rounded-lg" alt="">
                    <div class="flex flex-col gap-[14px] text-left">
                        <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Clients List</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                            Get to know your clients!
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-6 flex h-[135px] text-white min-w-[275px]">
                    <div class="fw-folder-icon text-center w-15 h-15 object-cover rounded-lg bg-[#111] m-0 p-4 flex items-center justify-center">
                        <span class="icon-folder text-[24px]"></span>
                    </div>
                    <div class="flex flex-col gap-[14px] text-left">
                        <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Project Information</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                            Learn more about Projects’ Information
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-6 flex h-[135px] text-white min-w-[275px]">
                    <img src="https://cdn.jsdelivr.net/gh/i4carl/Rifreshdesk-Portal-2025@4fab7ccd5ae0c6ec2eec5c85059ab9f2f1b90206/assets/homepage/project-information.jpg" class="w-15 h-15 object-cover rounded-lg" alt="">
                    <div class="flex flex-col gap-[14px] text-left">
                        <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Project Information</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                            Learn more about Projects’ Information
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-6 flex h-[135px] text-white min-w-[275px]">
                    <img src="https://cdn.jsdelivr.net/gh/i4carl/Rifreshdesk-Portal-2025@4fab7ccd5ae0c6ec2eec5c85059ab9f2f1b90206/assets/homepage/guidelines.jpg" class="w-15 h-15 object-cover rounded-lg" alt="">
                    <div class="flex flex-col gap-[14px] text-left">
                        <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Guidelines</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                            To get started with everything!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap-3 flex flex-col">
            <div class="py-6 px-0 sm:!px-6 flex gap-6 items-center">
                <div class="flex-1 bg-[#ffffffb3] h-[1px] opacity-[0.5]"></div>
                <div class="text-[24px] leading-[1.2083] !font-['Lato',sans-serif] text-[#fff]">Forums</div>
                <div class="flex-1 bg-[#ffffffb3] h-[1px] opacity-[0.5]"></div>
            </div>
            <div class="px-0 sm:!px-6 py-3 gap-6 flex flex-wrap">
                <div class="py-[30px] gap-[10px] flex flex-col text-left flex-1 h-[135px] min-w-[275px]">
                    <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Portal Limited Capabilities</div>
                    <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                        Learn more about Projects’ Information
                    </div>
                </div>
                <div class="py-[30px] gap-[10px] flex flex-col text-left flex-1 h-[135px] min-w-[275px]">
                    <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">API’s</div>
                    <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                        Learn more about Projects’ Information
                    </div>
                </div>
                <div class="py-[30px] gap-[10px] flex flex-col text-left flex-1 h-[135px] min-w-[275px]">
                    <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">Custom Forms</div>
                    <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                        Learn more about Projects’ Information
                    </div>
                </div>
                <div class="py-[30px] gap-[10px] flex flex-col text-left flex-1 h-[135px] min-w-[275px]">
                    <div class="font-bold text-[16.8px] leading-[1.1488] !font-['Lato',sans-serif]">CPOV</div>
                    <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif]">
                        Learn more about Projects’ Information
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full pt-[66px] !pb-[88px] px-6 gap-14 flex flex-col">
        <div class="gap-3 flex flex-col">
            <div class="py-6 px-0 sm:!px-6 flex gap-6 items-center justify-between">
                <div class="text-left text-[18px] md:text-[20.16px] leading-[1.6] !font-['Lato',sans-serif] text-[#111111] font-bold">Knowledge base</div>
                <a href="" class="text-left !text-[#777777] text-[14px] leading-[1.6] !font-['Poppins',sans-serif] md:self-start">View all articles</a>
            </div>
            <div class="px-0 sm:!px-6 py-3 gap-6 flex flex-wrap">
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Televisions</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Smartphone</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Inspires Greatness and Unveils its Vision for the Future of Home Theatre, Mobile Tech and Home Living at IFA 2024</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Televisions</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap-3 flex flex-col">
            <div class="py-6 px-0 sm:!px-6 flex gap-6 items-center justify-between">
                <div class="text-left text-[18px] md:text-[20.16px] leading-[1.6] !font-['Lato',sans-serif] text-[#111111] font-bold">Trending topics</div>
                <a href="" class="text-left !text-[#777777] text-[14px] leading-[1.6] !font-['Poppins',sans-serif] md:self-start">View all articles</a>
            </div>
            <div class="px-0 sm:!px-6 py-3 gap-6 flex flex-wrap">
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Televisions</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Smartphone</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Inspires Greatness and Unveils its Vision for the Future of Home Theatre, Mobile Tech and Home Living at IFA 2024</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
                <div class="flex-1 py-[30px] gap-[14px] flex h-[135px] text-[#111111] min-w-[275px]">
                    <div class="p-[10px] rounded-full bg-[#E9E9E9] h-[41px] w-[41px]">
                        <svg class="w-5 h-5 flex shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5 17.5H2.50002C2.03979 17.5 1.66669 17.1269 1.66669 16.6667V10.4057C1.66669 10.1648 1.77086 9.93575 1.95237 9.7775L5.00002 7.12029V3.33333C5.00002 2.8731 5.37312 2.5 5.83335 2.5H17.5C17.9603 2.5 18.3334 2.8731 18.3334 3.33333V16.6667C18.3334 17.1269 17.9603 17.5 17.5 17.5ZM7.50002 15.8333H10V10.7847L6.66669 7.87835L3.33335 10.7847V15.8333H5.83335V12.5H7.50002V15.8333ZM11.6667 15.8333H16.6667V4.16667H6.66669V5.93941C6.86205 5.93941 7.05742 6.00782 7.21434 6.14462L11.381 9.7775C11.5625 9.93575 11.6667 10.1648 11.6667 10.4057V15.8333ZM13.3334 9.16667H15V10.8333H13.3334V9.16667ZM13.3334 12.5H15V14.1667H13.3334V12.5ZM13.3334 5.83333H15V7.5H13.3334V5.83333ZM10 5.83333H11.6667V7.5H10V5.83333Z" fill="#111111"/>
                        </svg>
                    </div>
                    <div class="flex flex-col gap-[6px] text-left">
                        <div class="text-[16.8px] leading-[1.25] !font-['Lato',sans-serif] line-clamp-2 overflow-hidden text-ellipsis">TCL Televisions</div>
                        <div class="text-[14px] leading-[1.6] !font-['Poppins',sans-serif] text-[#777777]">
                            Modified on Fri, Sep 6, 2024 at  1:57 PM 
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
