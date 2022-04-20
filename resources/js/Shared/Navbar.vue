<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <Link :href="'/'" class="navbar-brand">Zerihun Degu Construction</Link>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link :href="route('login')" class="text-sm text-gray-700 underline">
                                Log in
                            </Link>

                            <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                                Register
                            </Link>
                        </template>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</template>
