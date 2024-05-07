<div class="container-fluid d-flex align-items-stretch justify-content-between">
    {{-- MOBILE Toogle --}}
    <div class="d-flex align-items-center d-lg-none ms-n2 me-2">
        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
            <span class="svg-icon svg-icon-1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"></path>
                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </div>

    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
        <a href="{{ url('dashboard') }}" class="d-lg-none">
            <img src="{{ url('./assets/media/icons/logo.jpeg') }}" alt="logo" class="h-25px logo rounded me-2">
        </a>
    </div>
    {{-- End MOBILE Toogle --}}

    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
        <div class="d-flex align-items-stretch" id="kt_header_nav">
            <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">
                    Bedtime Stories
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <span class="text-muted fs-7 fw-bold mt-2">Panel Admin</span>
                </h1>
            </div>
        </div>
        <div class="d-flex align-items-stretch flex-shrink-0">
            <div class="d-flex align-items-center px-3">
                <div class="symbol symbol-50px me-2">
                    <img src="{{ url('./assets/media/icons/icon-boy-1.png') }}" alt="icon" class="bg-light rounded p-1">
                </div>
                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">
                        Hi, Febry
                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                            <svg width="24px" height="24px" viewBox="0 0 24 24">
                                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
                                <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                            </svg>
                        </span>
                    </div>
                    <span class="fw-bold text-muted text-hover-primary fs-7">febrid@ibik.ac.id</span>
                </div>
            </div>
        </div>
    </div>
</div>
