<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Layout</title>
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="prospects.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('public/blog_page1/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/blog_page1/prospects.css'); ?>">
</head>

<body>

    <div class="container">



        <!-- Toggle Button -->
        <div class="sidebar-toggle" onclick="toggleSidebar()">
            <svg width="8" height="13" class="arrow-icon" viewBox="0 0 8 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.5 12.125L0.499999 0.875C0.499999 0.73175 0.58825 0.601702 0.762695 0.535156C0.916467 0.476521 1.08727 0.490213 1.22266 0.582031L1.27832 0.625977L1.2793 0.625977L7.38379 6.24902C7.51944 6.37418 7.53637 6.55524 7.43457 6.69434L7.38379 6.75098L1.2793 12.374L1.27832 12.374C1.13646 12.5047 0.938404 12.5318 0.762695 12.4648C0.58825 12.3983 0.5 12.2682 0.5 12.125Z"
                    fill="white" />
                <path
                    d="M0.5 12.125L0.499999 0.875C0.499999 0.73175 0.58825 0.601702 0.762695 0.535156C0.916467 0.476521 1.08727 0.490213 1.22266 0.582031L1.27832 0.625977L1.2793 0.625977L7.38379 6.24902C7.51944 6.37418 7.53637 6.55524 7.43457 6.69434L7.38379 6.75098L1.2793 12.374L1.27832 12.374C1.13646 12.5047 0.938404 12.5318 0.762695 12.4648C0.58825 12.3983 0.5 12.2682 0.5 12.125Z"
                    stroke="black" />
                <path
                    d="M0.5 12.125L0.499999 0.875C0.499999 0.73175 0.58825 0.601702 0.762695 0.535156C0.916467 0.476521 1.08727 0.490213 1.22266 0.582031L1.27832 0.625977L1.2793 0.625977L7.38379 6.24902C7.51944 6.37418 7.53637 6.55524 7.43457 6.69434L7.38379 6.75098L1.2793 12.374L1.27832 12.374C1.13646 12.5047 0.938404 12.5318 0.762695 12.4648C0.58825 12.3983 0.5 12.2682 0.5 12.125Z"
                    stroke="white" />
            </svg>
        </div>

        <!-- Dropdown Overlay -->
        <div class="dropdown-overlay" id="dropdownOverlay"></div>





        <!-- Main content wrapper -->
        <main class="main-content">
            <!-- Navbar -->
            <header class="navbar">
                <div class="profile-menu">
                    <span>Isacc Oddy</span><svg class="nav-svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                        <path
                            d="M13.0623 4.25176L13.774 4.74724C14.0753 4.95704 14.0753 5.29628 13.774 5.50385L7.545 9.84265C7.24365 10.0525 6.75636 10.0525 6.45821 9.84265L0.226013 5.50385C-0.0753378 5.29405 -0.0753378 4.9548 0.226013 4.74724L0.937715 4.25176C1.24227 4.03973 1.73918 4.04419 2.03733 4.26069L5.71766 6.95012V0.535655C5.71766 0.238813 6.06068 0 6.48706 0H7.51294C7.93932 0 8.28235 0.238813 8.28235 0.535655V6.95012L11.9627 4.26069C12.2608 4.04196 12.7577 4.0375 13.0623 4.25176Z"
                            fill="white" />
                    </svg>

                    <div class="nav-dropdown">
                        <ul>
                            <li><svg width="11" height="12" viewBox="0 0 11 12" fill="none">
                                    <path
                                        d="M5.41394 6C6.99207 6 8.27108 4.65703 8.27108 3C8.27108 1.34297 6.99207 0 5.41394 0C3.83582 0 2.5568 1.34297 2.5568 3C2.5568 4.65703 3.83582 6 5.41394 6ZM7.55233 6.76406L6.48537 11.25L5.77108 8.0625L6.48537 6.75H4.34251L5.0568 8.0625L4.34251 11.25L3.27555 6.76406C1.68403 6.84375 0.41394 8.21016 0.41394 9.9V10.875C0.41394 11.4961 0.893851 12 1.48537 12H9.34251C9.93403 12 10.4139 11.4961 10.4139 10.875V9.9C10.4139 8.21016 9.14385 6.84375 7.55233 6.76406Z"
                                        fill="#534F4F" />
                                </svg>
                                <span class="nav-list">Profiles</span>
                            </li>
                            <li><svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                                    <path
                                        d="M8.41631 2.9927L8.28818 3.21689C8.2413 3.29999 8.14129 3.33448 8.05222 3.30155C7.86783 3.23257 7.69906 3.1338 7.55061 3.00995C7.47873 2.95037 7.45998 2.84533 7.50686 2.7638L7.635 2.53961C7.52717 2.41419 7.44279 2.26839 7.38654 2.11004H7.1287C7.03495 2.11004 6.95369 2.04262 6.93806 1.94856C6.90681 1.76042 6.90525 1.56288 6.93806 1.36691C6.95369 1.27284 7.03495 1.20386 7.1287 1.20386H7.38654C7.44279 1.04552 7.52717 0.899712 7.635 0.77429L7.50686 0.550097C7.45998 0.468573 7.47717 0.363531 7.55061 0.303955C7.69906 0.180101 7.86939 0.0813305 8.05222 0.0123481C8.14129 -0.0205753 8.2413 0.0139159 8.28818 0.0970083L8.41631 0.321201C8.58039 0.291413 8.74759 0.291413 8.91166 0.321201L9.0398 0.0970083C9.08668 0.0139159 9.18669 -0.0205753 9.27576 0.0123481C9.46015 0.0813305 9.62891 0.180101 9.77736 0.303955C9.84924 0.363531 9.86799 0.468573 9.82111 0.550097L9.69298 0.77429C9.8008 0.899712 9.88518 1.04552 9.94144 1.20386H10.1993C10.293 1.20386 10.3743 1.27128 10.3899 1.36534C10.4212 1.55348 10.4227 1.75102 10.3899 1.94699C10.3743 2.04106 10.293 2.11004 10.1993 2.11004H9.94144C9.88518 2.26839 9.8008 2.41419 9.69298 2.53961L9.82111 2.7638C9.86799 2.84533 9.8508 2.95037 9.77736 3.00995C9.62891 3.1338 9.45858 3.23257 9.27576 3.30155C9.18669 3.33448 9.08668 3.29999 9.0398 3.21689L8.91166 2.9927C8.74915 3.02249 8.58039 3.02249 8.41631 2.9927ZM8.25223 2.07084C8.85385 2.53491 9.53984 1.84665 9.0773 1.24306C8.47569 0.777425 7.7897 1.46725 8.25223 2.07084ZM6.45052 4.48366L6.97713 4.74705C7.13495 4.83798 7.20371 5.03082 7.14121 5.20327C7.00213 5.58267 6.72867 5.93072 6.47553 6.23487C6.35989 6.3744 6.15987 6.4089 6.00205 6.31796L5.54732 6.05458C5.2973 6.26936 5.00665 6.44025 4.68944 6.55156V7.07834C4.68944 7.2602 4.55974 7.41698 4.3816 7.44834C3.9972 7.51418 3.59404 7.51732 3.19557 7.44834C3.01586 7.41698 2.88304 7.26177 2.88304 7.07834V6.55156C2.56583 6.43868 2.27518 6.26936 2.02516 6.05458L1.57043 6.3164C1.41417 6.40733 1.21259 6.37284 1.09696 6.2333C0.84381 5.92915 0.576601 5.58111 0.437527 5.20327C0.375021 5.03238 0.443777 4.83955 0.601603 4.74705L1.12196 4.48366C1.06102 4.15599 1.06102 3.81892 1.12196 3.48969L0.601603 3.22473C0.443777 3.1338 0.373459 2.94096 0.437527 2.77008C0.576601 2.39067 0.84381 2.04262 1.09696 1.73848C1.21259 1.59894 1.41261 1.56445 1.57043 1.65538L2.02516 1.91877C2.27518 1.70398 2.56583 1.5331 2.88304 1.42178V0.893441C2.88304 0.713146 3.01118 0.556368 3.18932 0.525013C3.57372 0.459166 3.97844 0.45603 4.37691 0.523445C4.55662 0.554801 4.68944 0.710011 4.68944 0.893441V1.42022C5.00665 1.5331 5.2973 1.70242 5.54732 1.9172L6.00205 1.65382C6.15831 1.56288 6.35989 1.59738 6.47553 1.73691C6.72867 2.04106 6.99432 2.3891 7.13339 2.76851C7.1959 2.9394 7.13495 3.13223 6.97713 3.22473L6.45052 3.48812C6.51147 3.81735 6.51147 4.15443 6.45052 4.48366ZM4.61287 4.81446C5.53795 3.60727 4.1644 2.22919 2.96117 3.15732C2.0361 4.36451 3.40965 5.74259 4.61287 4.81446ZM8.41631 7.6788L8.28818 7.90299C8.2413 7.98608 8.14129 8.02058 8.05222 7.98765C7.86783 7.91867 7.69906 7.8199 7.55061 7.69604C7.47873 7.63647 7.45998 7.53143 7.50686 7.4499L7.635 7.22571C7.52717 7.10029 7.44279 6.95448 7.38654 6.79614H7.1287C7.03495 6.79614 6.95369 6.72872 6.93806 6.63466C6.90681 6.44652 6.90525 6.24898 6.93806 6.05301C6.95369 5.95894 7.03495 5.88996 7.1287 5.88996H7.38654C7.44279 5.73161 7.52717 5.58581 7.635 5.46039L7.50686 5.2362C7.45998 5.15467 7.47717 5.04963 7.55061 4.99005C7.69906 4.8662 7.86939 4.76743 8.05222 4.69845C8.14129 4.66552 8.2413 4.70001 8.28818 4.78311L8.41631 5.0073C8.58039 4.97751 8.74759 4.97751 8.91166 5.0073L9.0398 4.78311C9.08668 4.70001 9.18669 4.66552 9.27576 4.69845C9.46015 4.76743 9.62891 4.8662 9.77736 4.99005C9.84924 5.04963 9.86799 5.15467 9.82111 5.2362L9.69298 5.46039C9.8008 5.58581 9.88518 5.73161 9.94144 5.88996H10.1993C10.293 5.88996 10.3743 5.95738 10.3899 6.05144C10.4212 6.23958 10.4227 6.43712 10.3899 6.63309C10.3743 6.72716 10.293 6.79614 10.1993 6.79614H9.94144C9.88518 6.95448 9.8008 7.10029 9.69298 7.22571L9.82111 7.4499C9.86799 7.53143 9.8508 7.63647 9.77736 7.69604C9.62891 7.8199 9.45858 7.91867 9.27576 7.98765C9.18669 8.02058 9.08668 7.98608 9.0398 7.90299L8.91166 7.6788C8.74915 7.70859 8.58039 7.70859 8.41631 7.6788ZM8.25223 6.75538C8.85385 7.21944 9.53984 6.53118 9.0773 5.92759C8.47569 5.46352 7.7897 6.15178 8.25223 6.75538Z"
                                        fill="#534F4F" />
                                </svg>
                                <span class="nav-list">Settings</span>
                            </li>
                            <li><svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                                    <path
                                        d="M12.2479 4.89812L8.24766 8.83497C7.8905 9.18647 7.27142 8.94042 7.27142 8.4366V6.18697H4.03317C3.71649 6.18697 3.46171 5.93623 3.46171 5.62456V3.37494C3.46171 3.06327 3.71649 2.81253 4.03317 2.81253H7.27142V0.562905C7.27142 0.0614258 7.88812 -0.18697 8.24766 0.164534L12.2479 4.10138C12.4693 4.32166 12.4693 4.67785 12.2479 4.89812ZM4.9856 8.7178V7.78046C4.9856 7.62579 4.85702 7.49925 4.69987 7.49925H2.69977C2.27832 7.49925 1.93783 7.16415 1.93783 6.74938V2.25012C1.93783 1.83535 2.27832 1.50025 2.69977 1.50025H4.69987C4.85702 1.50025 4.9856 1.37371 4.9856 1.21905V0.281702C4.9856 0.12704 4.85702 0.000498399 4.69987 0.000498399H2.69977C1.4378 0.000498399 0.41394 1.00814 0.41394 2.25012V6.74938C0.41394 7.99136 1.4378 8.999 2.69977 8.999H4.69987C4.85702 8.999 4.9856 8.87246 4.9856 8.7178Z"
                                        fill="#534F4F" />
                                </svg>
                                <span class="nav-list">Logout</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile Hamburger Menu -->
                <div class="hamburger-menu" id="hamburgerMenu">
                    <div class="hamburger-line"></div>
                    <div class="hamburger-line"></div>
                    <div class="hamburger-line"></div>
                </div>

                <!-- Mobile Dropdown -->
                <div class="mobile-dropdown" id="mobileDropdown">
                    <ul>
                        <li>
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none">
                                <path
                                    d="M5.41394 6C6.99207 6 8.27108 4.65703 8.27108 3C8.27108 1.34297 6.99207 0 5.41394 0C3.83582 0 2.5568 1.34297 2.5568 3C2.5568 4.65703 3.83582 6 5.41394 6ZM7.55233 6.76406L6.48537 11.25L5.77108 8.0625L6.48537 6.75H4.34251L5.0568 8.0625L4.34251 11.25L3.27555 6.76406C1.68403 6.84375 0.41394 8.21016 0.41394 9.9V10.875C0.41394 11.4961 0.893851 12 1.48537 12H9.34251C9.93403 12 10.4139 11.4961 10.4139 10.875V9.9C10.4139 8.21016 9.14385 6.84375 7.55233 6.76406Z"
                                    fill="white" />
                            </svg>
                            <span>Profiles</span>
                        </li>
                        <li>
                            <svg width="11" height="8" viewBox="0 0 11 8" fill="none">
                                <path
                                    d="M8.41631 2.9927L8.28818 3.21689C8.2413 3.29999 8.14129 3.33448 8.05222 3.30155C7.86783 3.23257 7.69906 3.1338 7.55061 3.00995C7.47873 2.95037 7.45998 2.84533 7.50686 2.7638L7.635 2.53961C7.52717 2.41419 7.44279 2.26839 7.38654 2.11004H7.1287C7.03495 2.11004 6.95369 2.04262 6.93806 1.94856C6.90681 1.76042 6.90525 1.56288 6.93806 1.36691C6.95369 1.27284 7.03495 1.20386 7.1287 1.20386H7.38654C7.44279 1.04552 7.52717 0.899712 7.635 0.77429L7.50686 0.550097C7.45998 0.468573 7.47717 0.363531 7.55061 0.303955C7.69906 0.180101 7.86939 0.0813305 8.05222 0.0123481C8.14129 -0.0205753 8.2413 0.0139159 8.28818 0.0970083L8.41631 0.321201C8.58039 0.291413 8.74759 0.291413 8.91166 0.321201L9.0398 0.0970083C9.08668 0.0139159 9.18669 -0.0205753 9.27576 0.0123481C9.46015 0.0813305 9.62891 0.180101 9.77736 0.303955C9.84924 0.363531 9.86799 0.468573 9.82111 0.550097L9.69298 0.77429C9.8008 0.899712 9.88518 1.04552 9.94144 1.20386H10.1993C10.293 1.20386 10.3743 1.27128 10.3899 1.36534C10.4212 1.55348 10.4227 1.75102 10.3899 1.94699C10.3743 2.04106 10.293 2.11004 10.1993 2.11004H9.94144C9.88518 2.26839 9.8008 2.41419 9.69298 2.53961L9.82111 2.7638C9.86799 2.84533 9.8508 2.95037 9.77736 3.00995C9.62891 3.1338 9.45858 3.23257 9.27576 3.30155C9.18669 3.33448 9.08668 3.29999 9.0398 3.21689L8.91166 2.9927C8.74915 3.02249 8.58039 3.02249 8.41631 2.9927ZM8.25223 2.07084C8.85385 2.53491 9.53984 1.84665 9.0773 1.24306C8.47569 0.777425 7.7897 1.46725 8.25223 2.07084ZM6.45052 4.48366L6.97713 4.74705C7.13495 4.83798 7.20371 5.03082 7.14121 5.20327C7.00213 5.58267 6.72867 5.93072 6.47553 6.23487C6.35989 6.3744 6.15987 6.4089 6.00205 6.31796L5.54732 6.05458C5.2973 6.26936 5.00665 6.44025 4.68944 6.55156V7.07834C4.68944 7.2602 4.55974 7.41698 4.3816 7.44834C3.9972 7.51418 3.59404 7.51732 3.19557 7.44834C3.01586 7.41698 2.88304 7.26177 2.88304 7.07834V6.55156C2.56583 6.43868 2.27518 6.26936 2.02516 6.05458L1.57043 6.3164C1.41417 6.40733 1.21259 6.37284 1.09696 6.2333C0.84381 5.92915 0.576601 5.58111 0.437527 5.20327C0.375021 5.03238 0.443777 4.83955 0.601603 4.74705L1.12196 4.48366C1.06102 4.15599 1.06102 3.81892 1.12196 3.48969L0.601603 3.22473C0.443777 3.1338 0.373459 2.94096 0.437527 2.77008C0.576601 2.39067 0.84381 2.04262 1.09696 1.73848C1.21259 1.59894 1.41261 1.56445 1.57043 1.65538L2.02516 1.91877C2.27518 1.70398 2.56583 1.5331 2.88304 1.42178V0.893441C2.88304 0.713146 3.01118 0.556368 3.18932 0.525013C3.57372 0.459166 3.97844 0.45603 4.37691 0.523445C4.55662 0.554801 4.68944 0.710011 4.68944 0.893441V1.42022C5.00665 1.5331 5.2973 1.70242 5.54732 1.9172L6.00205 1.65382C6.15831 1.56288 6.35989 1.59738 6.47553 1.73691C6.72867 2.04106 6.99432 2.3891 7.13339 2.76851C7.1959 2.9394 7.13495 3.13223 6.97713 3.22473L6.45052 3.48812C6.51147 3.81735 6.51147 4.15443 6.45052 4.48366ZM4.61287 4.81446C5.53795 3.60727 4.1644 2.22919 2.96117 3.15732C2.0361 4.36451 3.40965 5.74259 4.61287 4.81446ZM8.41631 7.6788L8.28818 7.90299C8.2413 7.98608 8.14129 8.02058 8.05222 7.98765C7.86783 7.91867 7.69906 7.8199 7.55061 7.69604C7.47873 7.63647 7.45998 7.53143 7.50686 7.4499L7.635 7.22571C7.52717 7.10029 7.44279 6.95448 7.38654 6.79614H7.1287C7.03495 6.79614 6.95369 6.72872 6.93806 6.63466C6.90681 6.44652 6.90525 6.24898 6.93806 6.05301C6.95369 5.95894 7.03495 5.88996 7.1287 5.88996H7.38654C7.44279 5.73161 7.52717 5.58581 7.635 5.46039L7.50686 5.2362C7.45998 5.15467 7.47717 5.04963 7.55061 4.99005C7.69906 4.8662 7.86939 4.76743 8.05222 4.69845C8.14129 4.66552 8.2413 4.70001 8.28818 4.78311L8.41631 5.0073C8.58039 4.97751 8.74759 4.97751 8.91166 5.0073L9.0398 4.78311C9.08668 4.70001 9.18669 4.66552 9.27576 4.69845C9.46015 4.76743 9.62891 4.8662 9.77736 4.99005C9.84924 5.04963 9.86799 5.15467 9.82111 5.2362L9.69298 5.46039C9.8008 5.58581 9.88518 5.73161 9.94144 5.88996H10.1993C10.293 5.88996 10.3743 5.95738 10.3899 6.05144C10.4212 6.23958 10.4227 6.43712 10.3899 6.63309C10.3743 6.72716 10.293 6.79614 10.1993 6.79614H9.94144C9.88518 6.95448 9.8008 7.10029 9.69298 7.22571L9.82111 7.4499C9.86799 7.53143 9.8508 7.63647 9.77736 7.69604C9.62891 7.8199 9.45858 7.91867 9.27576 7.98765C9.18669 8.02058 9.08668 7.98608 9.0398 7.90299L8.91166 7.6788C8.74915 7.70859 8.58039 7.70859 8.41631 7.6788ZM8.25223 6.75538C8.85385 7.21944 9.53984 6.53118 9.0773 5.92759C8.47569 5.46352 7.7897 6.15178 8.25223 6.75538Z"
                                    fill="white" />
                            </svg>
                            <span>Settings</span>
                        </li>
                        <li>
                            <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                                <path
                                    d="M12.2479 4.89812L8.24766 8.83497C7.8905 9.18647 7.27142 8.94042 7.27142 8.4366V6.18697H4.03317C3.71649 6.18697 3.46171 5.93623 3.46171 5.62456V3.37494C3.46171 3.06327 3.71649 2.81253 4.03317 2.81253H7.27142V0.562905C7.27142 0.0614258 7.88812 -0.18697 8.24766 0.164534L12.2479 4.10138C12.4693 4.32166 12.4693 4.67785 12.2479 4.89812ZM4.9856 8.7178V7.78046C4.9856 7.62579 4.85702 7.49925 4.69987 7.49925H2.69977C2.27832 7.49925 1.93783 7.16415 1.93783 6.74938V2.25012C1.93783 1.83535 2.27832 1.50025 2.69977 1.50025H4.69987C4.85702 1.50025 4.9856 1.37371 4.9856 1.21905V0.281702C4.9856 0.12704 4.85702 0.000498399 4.69987 0.000498399H2.69977C1.4378 0.000498399 0.41394 1.00814 0.41394 2.25012V6.74938C0.41394 7.99136 1.4378 8.999 2.69977 8.999H4.69987C4.85702 8.999 4.9856 8.87246 4.9856 8.7178Z"
                                    fill="white" />
                            </svg>
                            <span>Logout</span>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Placeholder for main page content -->
            <section class="content">
                <div class="wrapper">

                    <nav class="navbar2">
                        <ul class="nav-links2">
                            <li class="nav-item2 active2"><a href="#" data-section="blogs">Blogs</a></li>
                            <li class="nav-item2"><a href="#" data-section="categories">Categories</a></li>
                            <li class="nav-item2"><a href="#" data-section="media">Media</a></li>
                        </ul>
                    </nav>

                    <div class="container2">
                        <div class="breadcrumb2">
                            <span style="font-weight: 700 !important; color: #4B4A4A !important;">Blogs</span>
                            <span class="separator2">></span>
                            <span>List Blogs</span>
                        </div>

                        <div class="filter-section2">
                            <div class="filter-row2">
                                <div class="filter-group2">
                                    <label for="startDate2">Start Date</label>
                                    <input type="date" id="startDate2" class="date-input2" value="2024-01-03">
                                </div>
                                <div class="filter-group2">
                                    <label for="endDate2">End Date</label>
                                    <input type="date" id="endDate2" class="date-input2" value="2024-01-03">
                                </div>
                                <div class="filter-group2">
                                    <label for="category2">Title</label>
                                    <div class="select-wrapper2">
                                        <select id="category2" class="date-input2">
                                            <option value="" selected>Select category</option>
                                            <option value="...">...</option>
                                            <option value="...">...</option>
                                            <option value="...">...</option>
                                        </select>
                                    </div>
                                </div>

                                <button id="searchBtn2" class="btn2 btn-primary2">Search</button>
                            </div>
                            <label for="searchInput2" class="filter-table-label2">Filter Table</label>
                            <div class="filter-table2">
                                <input type="text" id="searchInput2" class="search-input2" placeholder="search post title">
                                <a href="<?php echo base_url('posts/create'); ?>" id="addPostBtn2" class="btn2 btn-primary2">Add Post</a>
                                <!-- <button id="addPostBtn2" class="btn2 btn-primary2">Add Post</button> -->
                            </div>
                        </div>

                        <div class="table-container2">
                            <table id="blogTable2" class="table2">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Title/Category</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($posts as $index => $post): ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td><?php echo $post['title']; ?></td>
                                            <td><?php echo $post['content']; ?></td>
                                            <td>
                                                <div class="action-buttons2">
                                                    <a href="<?php echo base_url('posts/delete/' . $post['id']); ?>" class="delete-btn2" aria-label="Delete">
                                                        <button class="delete-btn2" aria-label="Delete">
                                                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M3 6h18"></path>
                                                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                            </svg>
                                                        </button>

                                                    </a>
                                                    <a href="<?php echo base_url('posts/edit/' . $post['id']); ?>" class="edit-btn2" aria-label="Edit">
                                                        <button class="edit-btn2" aria-label="Edit">
                                                            <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                            </svg>
                                                        </button>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="modal2" id="confirmModal2">
                        <div class="modal-content2">
                            <p>Are you sure</p>
                            <div class="modal-buttons2">
                                <button id="noBtn2" class="btn2 btn-secondary2">No</button>
                                <button id="yesBtn2" class="btn2 btn-primary2">Yes</button>
                            </div>
                        </div>
                    </div>

                </div>


            </section>


        </main>

    </div>
    <!-- Footer -->

    <!-- <script src="script.js"></script>
    <script src="prospects.js"></script> -->
    <script src="<?php echo base_url('public/blog_page1/script.js'); ?>"></script>
    <script src="<?php echo base_url('public/blog_page1/prospects.js'); ?>"></script>

    <script>
        // wrapper funtionalities
        document.addEventListener('DOMContentLoaded', function() {
            // Navigation functionality
            const navLinks = document.querySelectorAll('.nav-item2 a');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    // Remove active class from all links
                    navLinks.forEach(l => l.parentElement.classList.remove('active2'));

                    // Add active class to clicked link with animation
                    this.parentElement.classList.add('active2');
                });
            });

            // Mock API data for suggestions
            const mockData = [
                "Amazing blog post about technology",
                "Best practices in web development",
                "Creative design patterns",
                "Digital marketing strategies",
                "Effective communication skills",
                "Future of artificial intelligence",
                "Growth hacking techniques",
                "How to improve productivity",
                "Innovation in tech industry",
                "JavaScript frameworks comparison",
                "Knowledge management systems",
                "Leadership in remote teams",
                "Modern web architecture",
                "Next generation computing",
                "Optimization techniques",
                "Programming best practices",
                "Quality assurance in software",
                "React vs Vue comparison",
                "Software development lifecycle",
                "Testing methodologies"
            ];

            // Suggestions functionality
            const searchInput = document.getElementById('searchInput2');
            const suggestionsContainer = document.createElement('div');
            suggestionsContainer.className = 'suggestions2';
            document.querySelector('.filter-table2').appendChild(suggestionsContainer);

            function showSuggestions(suggestions) {
                suggestionsContainer.innerHTML = '';
                suggestions.forEach(suggestion => {
                    const div = document.createElement('div');
                    div.className = 'suggestion-item2';
                    div.textContent = suggestion;
                    div.addEventListener('click', () => {
                        searchInput.value = suggestion;
                        hideSuggestions();
                        filterTable(suggestion.toLowerCase());
                    });
                    suggestionsContainer.appendChild(div);
                });
                suggestionsContainer.classList.add('show');
            }

            function hideSuggestions() {
                suggestionsContainer.classList.remove('show');
            }

            function filterSuggestions(searchTerm) {
                return mockData.filter(item =>
                    item.toLowerCase().includes(searchTerm.toLowerCase())
                );
            }

            function filterTable(searchTerm) {
                const tableRows = document.querySelectorAll('#blogTable2 tbody tr');

                tableRows.forEach(row => {
                    const titleCategory = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const titleViews = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

                    if (titleCategory.includes(searchTerm) || titleViews.includes(searchTerm)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            searchInput.addEventListener('focus', () => {
                showSuggestions(mockData);
            });

            searchInput.addEventListener('input', () => {
                const searchTerm = searchInput.value;
                const filteredSuggestions = filterSuggestions(searchTerm);
                showSuggestions(filteredSuggestions);
                filterTable(searchTerm.toLowerCase());
            });

            document.addEventListener('click', (e) => {
                if (!searchInput.contains(e.target) && !suggestionsContainer.contains(e.target)) {
                    hideSuggestions();
                }
            });

            // Modal functionality
            const deleteButtons = document.querySelectorAll('.delete-btn2');
            const confirmModal = document.getElementById('confirmModal2');
            const noBtn = document.getElementById('noBtn2');
            const yesBtn = document.getElementById('yesBtn2');

            function showModal() {
                confirmModal.style.display = 'flex';
                requestAnimationFrame(() => {
                    confirmModal.classList.add('show');
                });
            }

            function hideModal() {
                confirmModal.classList.remove('show');
                setTimeout(() => {
                    confirmModal.style.display = 'none';
                }, 300);
            }

            // Replace the existing delete button functionality with this:
            deleteButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();

                    // Store the delete URL for later use
                    const deleteUrl = button.closest('a').href;

                    // Show modal
                    showModal();

                    // Handle Yes button click
                    yesBtn.onclick = function() {
                        window.location.href = deleteUrl; // Proceed with deletion
                    };
                });
            });

            noBtn.addEventListener('click', hideModal);
            yesBtn.addEventListener('click', hideModal);

            window.addEventListener('click', (e) => {
                if (e.target === confirmModal) {
                    hideModal();
                }
            });

            // Search button functionality
            const searchBtn = document.getElementById('searchBtn2');
            searchBtn.addEventListener('click', () => {
                const startDate = document.getElementById('startDate2').value;
                const endDate = document.getElementById('endDate2').value;
                const category = document.getElementById('category2').value;

                console.log('Filters:', {
                    startDate,
                    endDate,
                    category
                });
            });

            // Add Post button functionality
            const addPostBtn = document.getElementById('addPostBtn2');
            addPostBtn.addEventListener('click', () => {
                console.log('Add Post button clicked');
            });
        });
    </script>
</body>

</html>