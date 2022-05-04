<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import DashboardListLayout from '@/Layouts/List/Dashboard.vue';
</script>

<template>
    <Head title="Dashboard" />

    <DashboardListLayout>
        <template v-slot:title>
            <div class="col-6">
                <h4>Design Progress</h4>          
            </div>
            <div class="col-6 text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Add Progress</button>
            </div>
        </template>
        <template v-slot:thead>
            <div class="col-6">
                <h4>Design Progress</h4>          
            </div>
        </template>
        <template v-slot:tbody>
            <div class="col-6">
                <h4>Design Progress</h4>          
            </div>
        </template>
    </DashboardListLayout>
</template>
