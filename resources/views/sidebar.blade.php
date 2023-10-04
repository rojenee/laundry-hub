@extends('template')
@section('content')

        <link rel="stylesheet" href="css/style_sidebar.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>


        <style>
            /* html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
} */

        </style>

        <nav class="sidebar mt-3 ">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="/images/logo.png" style="width:40px">
                    </span>
                    <div class="text header-text">
                        <span class="name"> Laundry Hub</span>
                    </div>
                        {{-- <i class="bx bx-chevron-right toggle "></i> --}}
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        
                         <i class='bx bx-search icon'></i>
                        <input type="search" placeholder="Search...">
                  
                     </li>
                        <ul class="menu-links">
                           <li class="nav-link">
                            <a href="/dashboard">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text"> Dashboard</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                            <i class='bx bx-clipboard icon'></i>
                           
                            <span class="text nav-text"> Laundry List</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                            <i class='bx bx-category-alt icon'></i>
                           
                            <span class="text nav-text"> Category</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                            <i class='bx bx-file icon'></i>
                           
                            <span class="text nav-text"> Supply List</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                            <i class='bx bx-group icon'></i>
                           
                            <span class="text nav-text"> Customers</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                            <i class='bx bxs-package icon'></i>
                           
                            <span class="text nav-text"> Inventory</span>
                        </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                            <i class='bx bxs-report icon'></i>
                           
                            <span class="text nav-text"> Reports</span>
                        </a>
                        </li>
                        <li class="">
                            <a href="#">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text"> Logout</span>
                        </a>
                        </li>
                    </ul>
                       
                        <li class="mode">
                            <div class="moon-sun">
                                <i class="bx bx-moon icon moon"></i>
                                <i class="bx bx-sun icon sun"></i>
                            </div>
                            <span class="mode-text text">Dark Mode </span>
                            <div class="toggle-switch">
                                <span class="switch">

                                </span>
                            </div>
                        </li>
                    
                </div>
            </div>
        </nav>
        <nav class="nav-menu ">
            <i class="bx bx-menu" id="sidebar-close"></i>
        </nav>
        {{-- <main class="main">
            @include('order') <!-- Include the order content here -->
        </main> --}}
        <script src="script.js">

        </script>
    @endsection
    </body>
    </html>
