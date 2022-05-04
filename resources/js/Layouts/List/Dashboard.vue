
<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import DashboardLayout from '@/Layouts/Dashboard.vue';
</script>

<template>
    <DashboardLayout>
        <div class="container-fluid py-3">
            <div class="card p-3">
                <div class="row">
                    <slot name="title"/>
                </div>
                <hr>
                <slot name="link"/>
                <div class="card-body table-responsive px-0">
                    <table class="table mb-4 table-bordered">
                        <thead class="thead-light">
                            <slot name="thead"/>
                        </thead>
                        <tbody>
                            <slot name="tbody"/>
                        </tbody>
                    </table>
                </div>
                <slot name="link"/>
            </div>
            <slot name="buttons"/>

            <slot name="other"/>
        </div>
    </DashboardLayout>
</template>
