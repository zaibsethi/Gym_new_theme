<template>
    <!-- Preloader -->
<!--    <div class="preloader-bg"></div>-->
<!--    <div id="preloader">-->
<!--        <div id="preloader-status">-->
<!--            <div class="preloader-position loader"><span></span></div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Mouse cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="#home"> <img :src="logo" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>NO<span>STOP</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                                     data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                     aria-expanded="false">Branches <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><router-link to="/" class="dropdown-item"><span>Garhi Shahu</span></router-link></li>
                            <li><router-link to="/valencia" class="dropdown-item"><span>Valencia Town</span></router-link></li>
                            <li><router-link to="/pak-mint" class="dropdown-item"><span>Pakistan Mint</span></router-link></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

</template>

<script>
// Importing the image
import logo from '../../../public/frontend/img/logo.png'; // Adjust the path based on your project structure

export default {
    data() {
        return {
            logo: logo // Using the imported image path
        };
    }
}
</script>
