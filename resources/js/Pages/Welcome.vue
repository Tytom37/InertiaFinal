<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-white text-black/50 dark:bg-black dark:text-white/50">
        <img
            id="background"
            class="absolute inset-0 w-full h-full object-cover z-0"
            src="../Components/bg.avif"
        />
        <div
            class=" flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-start lg:col-start-1">
                        <b class="text-6xl text-amber-300">EventExt</b>
                    </div>
                    <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end lg:col-start-3">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 bg-amber-600 btn ring-1 ring-transparent transition text-white focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 bg-amber-600 btn text-white ring-1 ring-transparent transition hover:bg-amber-900 hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 bg-amber-600 btn text-white ring-1 ring-transparent transition hover:bg-amber-900 hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white ml-[2%]"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-20">
                    <div class="text-center">
                        <h1 class="text-4xl text-white font-bold bg-amber-600 w-50 p-4 m-auto rounded-2xl">Book Your Tickets Now</h1>
                        <p class="mt-4 text-lg">Welcome to EventEx! We've been transforming event ticketing, making it easy to find, book, and enjoy unforgettable experiences. Discover the difference with EventEx today!</p>
                        <Link 
                            href="/login"
                            class="mt-6 inline-block rounded-md bg-amber-600 px-6 py-3 text-white ring-1 ring-transparent transition hover:bg-amber-900 focus:outline-none focus-visible:ring-white"
                        >
                            Get Started
                        </Link>
                    </div>
                </main>

                <footer class="py-4 text-gray-500 text-center mt-[20%]">
                    Copyright &copy; 2024. EventEx, Inc.
                </footer>
            </div>
        </div>
    </div>
</template>



