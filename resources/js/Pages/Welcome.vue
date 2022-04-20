<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/Guest.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>

    <GuestLayout>
        <div class="container py-1">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <br><br><br><br><br><br><br>
                    <div id="title" class="text-center center">
                        <h3>Zerihun Degu - Project Management System</h3>
                        <hr>
                    </div>
                    <div id="desc" class="text-center center">
                        <h4 class="display-4 mb-3" style="font-size: 1.1rem">This is a construction project information management system for Zerihun Degu construction.</h4>
                        <div v-if="canLogin">
                            <div v-if="$page.props.auth.user">
                                <p>Go to your dashboard</p>
                                <div class="text-center">
                                    <Link href="/about" class="px-3 m-1 btn btn-primary">About</Link>
                                    <Link href="/dashboard" class="px-3 m-1 btn btn-outline-primary">Dashboard</Link>
                                </div>
                            </div>
                            <div v-else>
                            <p>Please login to access</p>
                                <div class="text-center">
                                    <Link href="/about" class="px-3 m-1 btn btn-primary">About</Link>
                                    <Link href="/login" class="px-3 m-1 btn btn-outline-primary">Login</Link>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </GuestLayout>
</template>
