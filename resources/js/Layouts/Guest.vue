<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Navbar from '@/Shared/Navbar.vue';
import Footer from '@/Shared/Footer.vue';
</script>

<template>
    <div style="min-height: calc(100vh - 176px);">
        <Navbar/>
        <div class="py-4">
            <slot />
        </div>
    </div><br><br><br><br><br>
    <Footer/>
</template>
