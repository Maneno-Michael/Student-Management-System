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
            <div class="bg-green-400 h-10 flex items-center justify-between">
                <div class="flex items-center justify-between w-full mx-10">
                    <div class="flex gap-2 justify-center align-items-center">
                        <div class="w-5 h-5"></div>
                        <div class="text-white text-md">
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
            <!-- <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </Link>

                <template v-else>
                    <Link
                        :href="route('login')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </Link>

                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </Link>
                </template>
            </nav> -->
        </div>
    </div>
</template>
