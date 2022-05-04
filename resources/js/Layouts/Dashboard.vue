<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import Navbar from '@/Shared/Navbar.vue';
import Footer from '@/Shared/Footer.vue';
import Message from '@/Shared/Message.vue';
</script>

<template>
    <body class="font-sans antialiased hold-transition sidebar-mini">
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                    </li>
                    <li class="nav-item">
                        <Link :href="'/'" class="nav-link">Home</Link>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-light-primary elevation-4">

                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div v-if="$page.props.auth.user.profile_pic" class="image">
                            <img src="/storage/dashboard/user/profile_pic/{{$page.props.auth.user.profile_pic}}" class="img-circle elevation-2" alt="">
                        </div>
                        <div v-else class="image">
                            <img src="/storage/dashboard/user/profile_pic/default.jpg" class="img-circle elevation-2" alt="">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{$page.props.auth.user.first_name}} {{$page.props.auth.user.middle_name}}</a>
                        </div>
                    </div>

                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-user"></i>
                                    <p>General<i class="right fa fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <Link :href="'/dashboard/user'" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>Profile</p>
                                        </Link>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-tasks"></i>
                                    <p>Projects<i class="right fa fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <Link :href="'/dashboard/projects/list'" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>List</p>
                                        </Link>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dashboard/projects/charts" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>Charts</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dashboard/projects/map" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>Map</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-globe"></i>
                                    <p>Locations<i class="right fa fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/dashboard/regions" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>Regions</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dashboard/zones" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>Zones</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dashboard/weredas" class="nav-link">
                                            <i class="fa fa-circle nav-icon"></i>
                                            <p>Weredas</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper">
                <Message />
                
                <slot />
            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-inline">

                </div>
                <!-- <strong>Copyright &copy; {{now()->year}} <a href="https://eceplc.com/" target="_blank">ECE ADVANCED ENGINEERING PLC</a>.</strong> All -->
                rights
                reserved.
            </footer>
        </div>
    </body>
</template>