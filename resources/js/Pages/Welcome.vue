<script setup>
import { Head, Link } from "@inertiajs/vue3";

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
</script>

<template>
    <div>
        <div class="h-screen">
            <div class="bg-[#29c190] shadow-lg py-1 flex">
                <div class="flex gap-20 items-center justify-center w-full">
                    <div class="flex gap-2 justify-center align-items-center">
                        <div class="w-5 h-5"></div>
                        <div class="text-white text-sm">
                            <p>
                                School Hours
                                <span class="text-black text-bold"
                                    >(8.00Am - 6.00pm)</span
                                >
                            </p>
                        </div>
                    </div>
                    <div>qwertyui</div>
                </div>
            </div>
            <div class="py-1 flex">
                <div class="flex items-center justify-between w-full mx-10">
                    <div class="text-3xl text-bold">Logo</div>
                    <div class="flex">
                        <div class="flex gap-2">
                            <div class="h-10 w-10"></div>
                            <div class="text-gray-400 text-sm my-2">
                                <p>Call Now</p>
                                <p>+254 718 776 401</p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="h-10 w-10"></div>
                            <div class="text-gray-400 text-sm my-2">
                                <p>E-mail Us</p>
                                <p>manenomichael99@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="h-10 w-10"></div>
                            <div class="text-gray-400 text-sm my-2">
                                <p>Our Location</p>
                                <p>Bungoma Town</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#29c190] shadow-lg h-20 flex ">
                <div class="flex justify-end items-center w-full mx-10">
                    <nav v-if="canLogin" class="-mx-3 flex gap-5 flex-1 justify-end">
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md bg-yellow-300 px-3 py-1 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md bg-yellow-300 font-bold  px-3 py-1 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md bg-yellow-300 font-bold px-3 py-1 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>
