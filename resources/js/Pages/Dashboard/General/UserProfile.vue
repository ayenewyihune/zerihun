<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import DashboardLayout from '@/Layouts/Dashboard.vue';

defineProps({
    user: Object,
})
</script>

<template>
    <Head title="Profile" />

    <DashboardLayout>
        <div class="card p-3">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active show" href="#view" data-toggle="tab">User Details</a></li>
                    <li class="nav-item"><a class="nav-link" id="edit_data" href="#edit" data-toggle="tab">Edit Data</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="view">
                        <div class="text-center py-3">
                            <img v-if="$page.props.auth.user.profile_pic" class="rounded-circle img-fluid img-thumbnail" width="200"
                                src="/storage/dashboard/user/profile_pic/{{$page.props.auth.user.profile_pic}}"
                                alt>
                            <img v-else class="rounded-circle img-fluid img-thumbnail" width="200"
                                src="/storage/dashboard/user/profile_pic/default.jpg"
                                alt>
                        </div>

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>First Name</b> <a class="float-right">{{user.first_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Middle Name</b> <a class="float-right">{{user.middle_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Last Name</b> <a class="float-right">{{user.last_name}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Role</b> <a class="float-right">{{user.role_id}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{user.email}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone Number</b> <a class="float-right">{{user.phone_mobile}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="edit">
                        
                        <form method="POST" action="{{route('update_user')}}" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="first_name" class="control-label">First Name</label>
                
                                <div class="col-sm-10">
                                    <input id="first_name" type="text"
                                        class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name"
                                        value="{{user.first_name}}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="middle_name" class="control-label">Middle Name</label>
                
                                <div class="col-sm-10">
                                    <input id="middle_name" type="text"
                                        class="form-control{{ $errors->has('middle_name') ? ' is-invalid' : '' }}" name="middle_name"
                                        value="{{user.middle_name}}" required>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label for="last_name" class="control-label">Last Name</label>
                
                                <div class="col-sm-10">
                                    <input id="last_name" type="text"
                                        class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name"
                                        value="{{user.last_name}}" required>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <label for="phone_mobile" class="control-label">Phone Number</label>
                
                                <div class="col-sm-10">
                                    <input id="phone_mobile" type="text"
                                        class="form-control{{ $errors->has('phone_mobile') ? ' is-invalid' : '' }}"
                                        name="phone_mobile" value="{{user.phone_mobile}}">
                                </div>
                            </div>

                            <!-- <h3>Upload Your Photo</h3><br>
                            <div class="form-group">
                                <div>
                                    <input id="profile_pic" type="file"
                                        class="form-control-file{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}"
                                        name="profile_pic" value="{{ old('profile_pic') }}" aria-describedby="fileHelp">
                                </div>
                            </div>
                            <br><br>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div> -->
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
    </DashboardLayout>
</template>
