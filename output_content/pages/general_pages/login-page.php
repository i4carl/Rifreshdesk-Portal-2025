<style>
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
<section class="freshi4-container flex w-full flex-col relative min-h-[100vh] xl:flex-row">
    <div class="main-details__wrapper flex flex-col xl:flex-row xl:flex-1 justify-center items-center gap-[38px] sm:gap-[86px] relative z-[1] min-h-[100vh]">
        <div id="main-details__header" class="flex flex-col xl:flex-1 sm:flex-row sm:!pt-30 xl:!pt-0 xl:h-[288px] justify-center items-center xl:items-center gap-6 !px-12 !py-6">
            <div class="w-full md:w-[525px] h-fit flex">
                <img src="./assets/global/Transparent.png" class="w-full h-full object-contain" alt="">
            </div>
        </div>
        <div id="loginForm" class="fw-loginform-wrapper w-full flex-1 xl:h-full flex flex-col">
            <div class="fw-form-section w-full flex-1 h-full flex flex-col">
                <form class="relative new_user_session w-full flex flex-col !px-12 !py-6 xl:min-w-[742px] xl:max-w-[48.30vw] flex-1 xl:h-full" id="new_user_session" novalidate="novalidate" action="/support/login" accept-charset="UTF-8" method="post">
                    <div class="absolute w-full h-full bg-[url('/2025/rifreshdesk/assets/global/background-banner.png')] bg-cover bg-no-repeat bg-center top-0 left-0"></div>
                    <input name="utf8" type="hidden" value="✓" />
                    <input type="hidden" name="authenticity_token" value="" />
                    <div class="flex flex-col gap-6 w-full max-w-[485px] mx-auto xl:my-auto relative z-[2]">
                        <label for="emailInput" class="group hover:!border-[#fff] focus-within:!border-[#fff] !flex !py-[12px] border-b border-[#fff] w-full gap-[10px] items-center">
                            <svg class="group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !text-[#fff] w-[20px] h-[20px]" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.50001 3H17.5C17.9603 3 18.3333 3.3731 18.3333 3.83333V17.1667C18.3333 17.6269 17.9603 18 17.5 18H2.50001C2.03977 18 1.66667 17.6269 1.66667 17.1667V3.83333C1.66667 3.3731 2.03977 3 2.50001 3ZM16.6667 6.5316L10.0598 12.4483L3.33334 6.51328V16.3333H16.6667V6.5316ZM3.75956 4.66667L10.0516 10.2183L16.2508 4.66667H3.75956Z" fill="currentColor"/>
                            </svg>
                            <input type="email" name="email" id="emailInput" class="autofill:bg-[#000] group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !border-0 !outline-none !h-fit !text-[14px] !leading-[1.6] !font-['Poppins',sans-serif] !text-[#fff] w-full" placeholder="Enter your email here!">
                        </label>
                        <label for="password" class="group hover:!border-[#fff] focus-within:!border-[#fff] !flex !py-[12px] border-b border-[#fff] w-full gap-[10px] items-center">
                            <svg class="group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !text-[#fff] w-[20px] h-[20px]" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 6.66667H16.6667C17.1269 6.66667 17.5 7.03977 17.5 7.5V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333H3.33333C2.8731 18.3333 2.5 17.9602 2.5 17.5V7.5C2.5 7.03977 2.8731 6.66667 3.33333 6.66667H5V5.83333C5 3.07191 7.23857 0.833332 10 0.833332C12.7614 0.833332 15 3.07191 15 5.83333V6.66667ZM4.16667 8.33333V16.6667H15.8333V8.33333H4.16667ZM9.16667 11.6667H10.8333V13.3333H9.16667V11.6667ZM5.83333 11.6667H7.5V13.3333H5.83333V11.6667ZM12.5 11.6667H14.1667V13.3333H12.5V11.6667ZM13.3333 6.66667V5.83333C13.3333 3.99238 11.8409 2.5 10 2.5C8.15905 2.5 6.66667 3.99238 6.66667 5.83333V6.66667H13.3333Z" fill="currentColor"/>
                            </svg>
                            <input type="password" name="password" id="password" class="autofill:bg-[#000] group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !border-0 !outline-none !h-fit !text-[14px] !leading-[1.6] !font-['Poppins',sans-serif] !text-[#fff] w-full" placeholder="Enter your password here!">
                        </label>
                        <div class="flex justify-between">
                            <div class="flex">
                                <label for="remember_me" class="!flex gap-[12px] items-center cursor-pointer">
                                    <input type="checkbox" class="peer/remember" name="user_session[remember_me]" id="remember_me" hidden>
                                    <div class="peer-checked-remember peer-checked/remember:!border-[#4C93CF] peer-checked/remember:bg-[#4C93CF] w-[16px] h-[16px] border !border-[#fff] flex items-center justify-center">
                                        <svg class="w-[14px] h-[14px] opacity-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.83374 8.84968L11.196 3.48746L12.0209 4.31241L5.83374 10.4996L2.12142 6.7873L2.94638 5.96235L5.83374 8.84968Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <div class="text-white !leading-[1.6] !font-['Poppins',sans-serif] !text-[14px]">
                                        Remember me
                                    </div>
                                </label>
                            </div>
                            <a href="#" id="forgetPassLink" class="fw-forget-section flex !text-[#fff] !font-['Poppins',sans-serif] !text-[14px] !leading-[1.6]">
                                Forgot password
                            </a>
                        </div>
                        <div class="flex max-sm:flex-col sm:flex-wrap gap-6">
                            <button type="submit" class="login-button !rounded-[8px] flex-1 sm:shrink-1 sm:basis-[230.5px] !bg-[#4C93CF] items-center justify-center !py-[12px] !outline-none text-white !font-semibold !text-[14px] !font-['Poppins',sans-serif] flex !leading-[1.6] gap-[6px]">
                                <div class="">
                                    Sign in
                                </div>
                                <svg class="!text-white w-[20px] h-[20px]" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4763 9.66658L9.00634 5.19657L10.1848 4.01807L16.6667 10.4999L10.1848 16.9817L9.00634 15.8032L13.4763 11.3332H3.33334V9.66658H13.4763Z" fill="currentColor"/>
                                </svg>
                            </button>
                            <button class="agentloginbtn !rounded-[8px] flex-1 sm:shrink-1 sm:basis-[230.5px] border !border-[#fff] items-center justify-center !py-[12px] !outline-none !text-[#fff] !font-semibold !text-[14px] !font-['Poppins',sans-serif] flex !leading-[1.6] gap-[6px]">
                                <svg class="!text-[#fff] w-[20px] h-[20px]" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.41668 12.2183V17.1667H11.0833V12.2183C14.3719 12.6283 16.9167 15.4337 16.9167 18.8333H3.58334C3.58334 15.4337 6.12809 12.6283 9.41668 12.2183ZM10.25 11.3333C7.48751 11.3333 5.25001 9.09584 5.25001 6.33334C5.25001 3.57084 7.48751 1.33334 10.25 1.33334C13.0125 1.33334 15.25 3.57084 15.25 6.33334C15.25 9.09584 13.0125 11.3333 10.25 11.3333Z" fill="currentColor"/>
                                </svg>
                                <div class="">
                                    I'm an Agent!
                                </div>
                            </button>
                        </div>
                        <!-- <a href="#" class="!font-bold !text-white !text-[16.8px] !leading-[1.6] !font-['Poppins',sans-serif] self-center sm:self-start">
                            
                        </a> -->
                    </div>
                    <div class="absolute w-full h-full !bg-[#145082e6] bg-cover bg-no-repeat bg-center top-0 left-0"></div>
                </form>
            </div>
        </div>
        <div id="forgetPassForm" class="fw-loginform-wrapper w-full flex-1 xl:h-full d-none flex-col">
            <div class="fw-form-section w-full flex-1 h-full flex flex-col">
                <form novalidate="novalidate" id="password_reset" accept-charset="UTF-8" method="post" class="relative new_user_session w-full flex flex-col !px-12 !py-6 !bg-[#145082] xl:min-w-[742px] xl:max-w-[48.30vw] flex-1 xl:h-full">
                    <div class="absolute w-full h-full bg-[url('/2025/rifreshdesk/assets/global/background-banner.png')] bg-cover bg-no-repeat bg-center top-0 left-0"></div>
                    <input name="utf8" type="hidden" value="✓">
                    <input type="hidden" name="authenticity_token" value="">
                    <div class="flex flex-col gap-6 w-full max-w-[485px] mx-auto xl:my-auto relative z-[2]">
                        <div class="flex flex-col gap-[14px]">
                            <p class="leading-[1.6] !font-semibold !text-[24.2px] !font-['Poppins',sans-serif] !text-white flex-1">
                                Forgot password
                            </p>
                            <p class="leading-[1.6] !text-[14px] !font-['Poppins',sans-serif] !text-white flex-1">
                                Give us your email address and instructions to reset your password will be emailed to you.
                            </p>
                        </div>
                        <label for="email" class="group hover:!border-[#fff] focus-within:!border-[#fff] !flex !py-[12px] border-b border-[#fff] w-full gap-[10px] items-center">
                            <svg class="group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !text-[#fff] w-[20px] h-[20px]" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.50001 3H17.5C17.9603 3 18.3333 3.3731 18.3333 3.83333V17.1667C18.3333 17.6269 17.9603 18 17.5 18H2.50001C2.03977 18 1.66667 17.6269 1.66667 17.1667V3.83333C1.66667 3.3731 2.03977 3 2.50001 3ZM16.6667 6.5316L10.0598 12.4483L3.33334 6.51328V16.3333H16.6667V6.5316ZM3.75956 4.66667L10.0516 10.2183L16.2508 4.66667H3.75956Z" fill="currentColor"/>
                            </svg>
                            <input type="email" name="email" id="email" class="autofill:bg-[#000] group-[.active]:!text-[#fff] group-hover:!text-[#fff] group-focus-within:!text-[#fff] !border-0 !outline-none !h-fit !text-[14px] !leading-[1.6] !font-['Poppins',sans-serif] !text-[#fff] w-full" placeholder="Enter your email here!">
                        </label>
                        <div class="flex max-sm:flex-col sm:flex-wrap gap-6">
                            <button type="submit" class="!rounded-[8px] cool-animation-hover password-forgot-button flex-1 sm:shrink-1 sm:basis-[230.5px] !bg-[#4C93CF] items-center justify-center !py-[12px] !outline-none text-white !font-semibold !text-[14px] !font-['Poppins',sans-serif] flex !leading-[1.6] gap-[6px]">
                                <div class="">
                                    Confirm reset password
                                </div>
                                <svg class="!text-white w-[20px] h-[20px]" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4763 9.66658L9.00634 5.19657L10.1848 4.01807L16.6667 10.4999L10.1848 16.9817L9.00634 15.8032L13.4763 11.3332H3.33334V9.66658H13.4763Z" fill="white"/>
                                </svg>
                                <div class="cool-animation-portal border-0">
                                    <div class="items-center bg-[#000] rounded-full h-full justify-center !py-[12px] !outline-none !text-[#4C93CF] !font-semibold !text-[14px] !font-['Poppins',sans-serif] flex !leading-[1.6] gap-[6px] whitespace-nowrap">
                                        Confirm reset password
                                        <svg class="!text-[#4C93CF] w-[20px] h-[20px] shrink-0" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.4763 9.66658L9.00634 5.19657L10.1848 4.01807L16.6667 10.4999L10.1848 16.9817L9.00634 15.8032L13.4763 11.3332H3.33334V9.66658H13.4763Z" fill="currentColor"/>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <a href="#" id="loginFormLink" class="!rounded-[8px] flex-1 sm:shrink-1 sm:basis-[230.5px] border !border-[#fff] items-center justify-center !py-[12px] !outline-none !text-[#fff] !font-semibold !text-[14px] !font-['Poppins',sans-serif] flex !leading-[1.6] gap-[6px]">
                                <div class="">
                                    Cancel
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="absolute w-full h-full !bg-[#145082e6] bg-cover bg-no-repeat bg-center top-0 left-0"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<style>
/* Reveal the checkmark when checkbox is checked */
#remember_me:checked + .peer-checked-remember svg {
  opacity: 1 !important;
}
/* Change the white to any color */
/* input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active{
    -webkit-box-shadow: 0 0 0 30px #000 inset !important; */
/* } */
/*Change text in autofill textbox*/
/* input:-webkit-autofill{
    -webkit-text-fill-color: #111 !important;
} */
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.addEventListener('keyup', (e) => {
            const target = e.target;

            // Check if target is an input and has a value
            if (target.tagName === 'INPUT') {
                // Use setTimeout to wait for the character to be added to the value
                setTimeout(() => {
                    if (target.value.trim() !== '' && target.value.trim() !== null) {
                        // Add class to the parent element
                        target.parentElement.classList.add('active');
                        console.log(target.value.trim());
                    }else{
                        target.parentElement.classList.remove('active');
                    }
                }, 0); // Wait for input value to update
            }
        })
        // Snippets as HTML strings from Liquid
        const loginFormHTML = `{% snippet login_form %}`;
        const passwordFormHTML = `{% snippet password_form %}`; // May or may not be present

        // Helper to extract authenticity_token from HTML string
        function extractTokenFromHTML(html) {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const input = doc.querySelector('input[name="authenticity_token"]');
            return input ? input.value : '';
        }

        // Step 1: Extract tokens
        const loginToken = extractTokenFromHTML(loginFormHTML);
        const passwordToken = passwordFormHTML ? extractTokenFromHTML(passwordFormHTML) : '';

        // Step 2: Update the token in the real #loginForm
        if (loginToken) {
            const loginForm = document.querySelector('#loginForm');
            if (loginForm) {
            const loginTokenInput = loginForm.querySelector('input[name="authenticity_token"]');
            if (loginTokenInput) {
                loginTokenInput.value = loginToken;
            }
            }
        }

        // Step 3: Update the token in the real #forgetPassForm, only if passwordFormHTML exists
        if (passwordToken) {
            const forgetPassForm = document.querySelector('#forgetPassForm');
            if (forgetPassForm) {
            const passTokenInput = forgetPassForm.querySelector('input[name="authenticity_token"]');
            if (passTokenInput) {
                passTokenInput.value = passwordToken;
            }
            }
        }
    })
</script>
<script src="./output_content/custom-scripts/login-page.js"></script>
<!-- <section class="container">
    <div class="row fw-loginform-wrapper justify-content-center align-items-center" id="loginForm">
        <div class="col-lg-6 fw-form-section">
            <div class="alert alert-with-close notice" id="noticeajax" style="display: none;"></div>

            <div class="form">
                <form class="new_user_session" id="new_user_session" novalidate="novalidate" action="/support/login" accept-charset="UTF-8" method="post">
                    <input name="utf8" type="hidden" value="✓" /><input type="hidden" name="authenticity_token" value="DmT8cTIYAep9yHBY449q4HWRbLedLIk/0v2w5fVvzITlu4VB2BxIipCjCkHMQvoowBIjs5+PIAuxzLwLgaPWPQ==" />
                    <h1>Log in to support portal</h1>

                    <p>
                        Are you a new user? <b> <a href="/support/signup">Sign up with us</a></b>
                    </p>

                    <div class="form-group">
                        <label for="emailInput" class="form-label">
                            Your e-mail address

                            <span class="fw-asterisk">*</span>
                        </label>

                        <input type="email" class="form-control" id="emailInput" placeholder="Your e-mail address" name="user_session[email]" required="" aria_describedby="emailInput" />

                        <div class="invalid-feedback emailInput"></div>
                    </div>

                    <div class="form-group">
                        <label for="passwordInput" class="form-label">
                            Password

                            <span class="fw-asterisk">*</span>
                        </label>

                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="user_session[password]" required="" aria_describedby="passwordInput" autocomplete="off" />

                        <div class="invalid-feedback passwordInput"></div>
                    </div>

                    <div class="form-check">
                        <input name="user_session[remember_me]" type="hidden" value="false" />

                        <input type="checkbox" class="form-check-input" id="rememberInput" name="user_session[remember_me]" value="1" checked="true" aria_describedby="rememberInput" />

                        <label for="rememberInput" class="form-check-label">
                            Remember me on this computer
                        </label>

                        <div class="invalid-feedback rememberInput"></div>
                    </div>

                    <button type="submit" class="btn fw-primary-button btn-block w-100 login-button" data-recaptcha-enterprise="">
                        Login
                    </button>
                </form>

                <div class="fw-or">
                    <div><span>...or login using</span></div>
                    <hr />
                </div>
                <div class="fw-social-media-login row">
                    <div class="col-md-8 mx-auto">
                        <form id="auto_link" method="post" action="/auth/google_login">
                            <input type="hidden" name="authenticity_token" value="yBICuzZSC4wmFvtFyN44c8Tsnx5I2pDOKy8R/DaJf+c=" />
                            <a id="google_auto_link" href="javascript:document.getElementById('google_auto_link').parentNode.submit()" class="fw-google-btn py-12 rounded">Continue with Google</a>
                        </form>

                        <a id="" href="/sso/facebook" class="fw-fb-btn py-12 rounded">Continue with Facebook</a>
                    </div>
                </div>

                <div class="text-center fw-forget-section"><a href="#" id="forgetPassLink">Forgot your password?</a></div>
            </div>
            <p class="fs-20 semi-bold mt-16 text-center">
                Are you an agent?
                <a
                    id=""
                    href="https://rifreshworks.myfreshworks.com/login?client_id=451980303908285122&amp;redirect_uri=https%3A%2F%2Frifreshworks.freshdesk.com%2Ffreshid%2Fauthorize_callback%3Fhd%3Dhttps%3A%2F%2Frifreshworks.freshdesk.com"
                    class="fw-twitter-btn py-12 rounded"
                >
                    Login here
                </a>
            </p>
        </div>
    </div>
    <div class="row fw-loginform-wrapper justify-content-center d-none" id="forgetPassForm">
        <div class="col-lg-6 fw-form-section">
            <div class="form">
                <form novalidate="novalidate" id="password_reset" action="/password_resets" accept-charset="UTF-8" method="post">
                    <input name="utf8" type="hidden" value="✓" /><input type="hidden" name="authenticity_token" value="SN6INdL+ec1reHsWL7gzDQGHkMXSfFdMbVlHLXmQTZejAfEFOPowrYYTAQ8AdaPFtATfwdDf/ngOaEvDDVxXLg==" />
                    <h1>Forgot password</h1>
                    <p>Give us your email address and instructions to reset your password will be emailed to you.</p>
                    <div class="form-group">
                        <label for="email" class="form-label">
                            Your e-mail address

                            <span class="fw-asterisk">*</span>
                        </label>

                        <input type="email" class="form-control" id="email" placeholder="Your e-mail address" name="email" required="" />

                        <div class="invalid-feedback email"></div>
                    </div>

                    <button type="submit" class="btn fw-primary-button btn-block password-forgot-button">
                        Reset my password
                    </button>
                    <button type="button" class="btn fw-secondary-button btn-block" id="loginFormLink">
                        Cancel
                    </button>
                </form>

                <div class="fw-or">
                    <div><span>...or login using</span></div>
                    <hr />
                </div>
                <div class="fw-social-media-login row">
                    <div class="col-md-8 mx-auto">
                        <form id="auto_link" method="post" action="/auth/google_login">
                            <input type="hidden" name="authenticity_token" value="yBICuzZSC4wmFvtFyN44c8Tsnx5I2pDOKy8R/DaJf+c=" />
                            <a id="google_auto_link" href="javascript:document.getElementById('google_auto_link').parentNode.submit()" class="fw-google-btn py-12 rounded">Continue with Google</a>
                        </form>

                        <a id="" href="/sso/facebook" class="fw-fb-btn py-12 rounded">Continue with Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->