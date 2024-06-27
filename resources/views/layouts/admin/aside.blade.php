<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false"><i
                        class="mdi mdi-view-dashboard"></i><span class="hide-menu">Home</span></a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Users
                    </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                        <a href="{{ url('/users') }}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span
                                class="hide-menu"> All Users </span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Properties
                    </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                        <a href="{{ route('properties.index') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu"> All Properties </span></a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('properties.create') }}" class="sidebar-link"><i
                                class="mdi mdi-note-plus"></i><span class="hide-menu">
                                Add Property </span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Property Type
                    </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                        <a href="{{ url('addpropertytype') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu"> All Types</span></a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">More Properties
                    </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                        <a href="{{ url('showproperty') }}" class="sidebar-link"><i
                                class="mdi mdi-note-outline"></i><span class="hide-menu">Display</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
