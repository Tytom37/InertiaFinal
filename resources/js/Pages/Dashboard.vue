<script setup>
import Mylayout from '@/Layouts/MyLayout.vue';
import { Link, Head } from '@inertiajs/vue3';

defineOptions({
        layout: Mylayout
    });
</script>

<template>
    <div class="py-12 welcome">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="content">
                    <div class="info">
                        <div class="texts">
                            <h1>Secure Your Tickets Today</h1>
                            <h3>Click Below to Reserve Your Spot</h3>
                        </div>
                        <div class="bookBtn">
                            <Link
                                href="/bookings/create"
                                class="mt-6 inline-block rounded-md bg-amber-600 px-6 py-3 text-white ring-1 ring-transparent transition hover:bg-amber-900 focus:outline-none focus-visible:ring-white"
                            >
                                BOOK NOW
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="slogan">
                    <div class="cont">
                        <div class="logo2"></div>
                        <b>Unlock the Excitement, One Ticket at a Time!</b>
                    </div>
                </div>
                <div class="about">
                    <div class="firstsection">
                        <h1>About us</h1>
                        <p>Welcome to EventEx, your ultimate destination for seamless event ticketing solutions! 
                        Founded in 2020, we are dedicated to revolutionizing the way you discover, book, and experience events. 
                        Our mission is to connect people with unforgettable experiences, 
                        making the process of finding and purchasing tickets as effortless as possible.</p>
                        <Link class="aboutBtn" href="about">Read More</Link>
                    </div>
                    <div class="secondsection">
                        <div class="background"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

.texts h1 {
    text-shadow: 3px 3px 2px rgb(255, 165, 0);
}

.secondsection {
    margin: 50px;
}

.about {
    background-color: lightyellow;
    text-align:  center;
    padding: 100px;
}

.about p {
    font-size: 1.2em;
    margin-bottom: 20px;
    text-align: justify;
}

.about h1 {
    font-weight: bolder;
    font-size: 2em;
    margin-bottom: 0.5em;
}

.aboutBtn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1em;
    color: #fff;
    background-color: #007BFF;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}

.aboutBtn:hover {
    background-color: #0056b3;
}

.slogan {
    text-align: center;
    padding: 100px;
    display: flex;
    flex-direction: column;
    gap: 50px;
    background-color: white;
}

h1 {
    font-size: 50px;
}

.info {
    color: white;
    padding-top: 100px;
    padding-left: 50px;
    display: flex;
    gap: 20px;
    flex-direction: column;
}

.texts {
    width: 50%;
    padding: 5px;
    border-radius: 10px;
}

.content {
    height: 428px;
    background-image: url('../Components/contentbck.avif');
    background-position: center;
    background-repeat: no-repeat;
}

.logo2 {
    background-image: url('../Components/logo.png');
    height: 190px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

.background {
    background-image: url('../Components/secondbck.avif');
    height: 990px;
    border-radius: 20px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

</style>
