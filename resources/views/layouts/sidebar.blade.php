<!-- ========== Left Sidebar Start ========== -->
@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp
    <div class="col-md-4">
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="pull-left">
                        <img src="{{asset('/backend')}}/upload/employee_photos/{{ Auth::user()->photo }}" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <p style="margin-bottom: auto;
                            margin-top: revert;
                            font-size: 13px;">{{ Auth::user()->name }}</p>
                        </div>

                        <p class="text-muted m-0">{{ Auth::user()->type }}</p>
                    </div>
                </div>
                            <!--- Divider -->
                            <div id="sidebar-menu">
                                <ul>
                                    <li>
                                        <a href="{{ url('/home') }}" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                                    </li>

                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> User Management </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Supplier </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Customer </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Category </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Products </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Order </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Sales Report </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Expenses </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="#" class="waves-effect {{ ($prefix=='/employee')?'subdrop': '' }}"><i class="md md-people"></i><span> Estimation </span><span class="pull-right"><i class="md {{ ($prefix=='/employee')?'md-remove': 'md-add' }}"></i></span></a>
                                        <ul class="list-unstyled" style="{{ ($prefix=='/employee')?'display: block;': 'display: none;' }}">
                                            <li class="{{ ($route=='employee.view')?'active':'' }}"><a href="{{ route('employee.view') }}">All User</a></li>
                                            <li class="{{ ($route=='employee.add')?'active':'' }}"><a href="{{ route('employee.add') }}">Add User</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- Left Sidebar End -->
    </div>


