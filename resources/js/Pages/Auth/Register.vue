<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    role: '',
    first_name: '',
    middle_name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

defineProps({
    roles: Object,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Register" />
        <div class="container py-2">
            <br><br><br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card p-3">
                        <h5>Register</h5>
                        <hr class="m-0">
                        <div class="card-body">
                            <BreezeValidationErrors class="mb-4" />
                            <form @submit.prevent="submit">

                                <div class="form-group row">
                                    <BreezeLabel for="role" class="col-md-4 col-form-label text-md-right" value="Role" />

                                    <div class="col-md-6">
                                        <select id="role" name="role" v-model="form.role"
                                            class="form-control" required>
                                            <option></option>
                                            <option v-for="role in roles" :key="role.id" :value="role.id">{{role.name}}</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <BreezeLabel for="first_name" class="col-md-4 col-form-label text-md-right" value="First Name" />

                                    <div class="col-md-6">
                                        <BreezeInput id="first_name" type="text" class="mt-1 block w-full" v-model="form.first_name" required autocomplete="first_name" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <BreezeLabel for="middle_name" class="col-md-4 col-form-label text-md-right" value="Middle Name" />

                                    <div class="col-md-6">
                                        <BreezeInput id="middle_name" type="text" class="mt-1 block w-full" v-model="form.middle_name" required autocomplete="middle_name" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <BreezeLabel for="last_name" class="col-md-4 col-form-label text-md-right" value="Last Name" />

                                    <div class="col-md-6">
                                        <BreezeInput id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name" required autocomplete="last_name" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <BreezeLabel for="email" class="col-sm-4 col-form-label text-md-right" value="Email" />

                                    <div class="col-md-6">
                                        <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <BreezeLabel for="password" class="col-md-4 col-form-label text-md-right" value="Password" />

                                    <div class="col-md-6">
                                        <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <BreezeLabel for="password_confirmation" class="col-md-4 col-form-label text-md-right" value="Confirm Password" />

                                    <div class="col-md-6">
                                        <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <BreezeButton class="ml-4 btn btn-primary" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            Register
                                        </BreezeButton>

                                        <Link :href="route('login')" class="btn btn-link">
                                            Already registered?
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
