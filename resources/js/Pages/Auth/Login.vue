<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="container py-2">
            <br><br><br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card p-3">
                        <h5>Login</h5>
                        <hr class="m-0">
                        <div class="card-body">
                            <BreezeValidationErrors class="mb-4" />
                            
                            <form @submit.prevent="submit">

                                <div class="form-group row">
                                    <BreezeLabel for="email" class="col-sm-4 pt-3 col-form-label text-md-right" value="Email" />

                                    <div class="col-md-6">
                                        <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <BreezeLabel for="password" class="col-md-4 col-form-label text-md-right" value="Password" />

                                    <div class="col-md-6">
                                        <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="current-password" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <BreezeCheckbox name="remember" v-model:checked="form.remember" />

                                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <BreezeButton class="btn btn-success" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            Log in
                                        </BreezeButton>

                                        <Link v-if="canResetPassword" :href="route('password.request')" class="btn btn-link">
                                            Change your password
                                        </Link>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeGuestLayout>
</template>
