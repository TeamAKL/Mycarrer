<div class="sidebar" data="blue">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-normal">{{ __('Mycareers') }}</a>
            <span style=" color: #fff;
            font-size: .7rem;
            font-weight: 600;">
            Your Balance : <span style="
            font-size: .8rem;">200000 MMK</span> <!-- color: #d4420e; -->
        </span>
    </div>
    <ul class="nav">
        <li @if ($pageSlug == 'dashboard') class="active " @endif>
            <a href="{{ route('employer') }}">
                <i class="fa fa-home" aria-hidden="true"></i>
                <p>{{ __('Dashboard') }}</p>
            </a>
        </li>

        <!-- JOBS -->
        <li @if ($pageSlug == 'jobs') class="active " @endif>
            <a href="{{ route('jobs') }}">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <p>{{ __('Jobs') }}</p>
            </a>
        </li>

        <!-- Company -->
        <li>
            <a data-toggle="collapse" href="#company" aria-expanded="false"> <!-- initial is true and use flase to hide -->
                <i class="fa fa-desktop" aria-hidden="true"></i>
                <span class="nav-link-text" >{{ __('Company') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse" id="company"> <!-- IF you want to show use like this  <div class="collapse show" id="company"> -->
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'company_info') class="active " @endif>
                        <a href="{{ route('company')  }}">
                            <i class="tim-icons icon-istanbul"></i>
                            <p>{{ __('Company Info') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'users') class="active " @endif>
                        <a href="{{ route('user.index')  }}">
                            <i class="tim-icons icon-paper fs-2"></i>
                            <p>{{ __('History List') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'users') class="active " @endif>
                        <a href="{{ route('user.index')  }}">
                            <i class="tim-icons icon-single-02"></i>
                            <p>{{ __('User') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- End Company -->

        <!-- Resume Database -->
        <li>
            <a data-toggle="collapse" href="#resume" aria-expanded="false">
                <i class="tim-icons  icon-coins"></i>
                <span class="nav-link-text" >{{ __('Resume Database') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse" id="resume">
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'users') class="active " @endif>
                        <a href="{{ route('allresumes')  }}">
                            <i class="tim-icons icon-bullet-list-67"></i>
                            <p>{{ __('All Resumes') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'appliedresume') class="active " @endif>
                        <a href="{{ route('appliedresume')  }}">
                            <i class="tim-icons icon-badge"></i>
                            <p>{{ __('Applied Resume') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'purchaseresume') class="active " @endif>
                        <a href="{{ route('purchased')  }}">
                            <i class="tim-icons icon-notes"></i>
                            <p>{{ __('Purchased Resume') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- End Resume Database -->

        {{-- <li>
            <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                <i class="fab fa-laravel" ></i>
                <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse show" id="laravel-examples">
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'profile') class="active " @endif>
                        <a href="{{ route('profile.edit')  }}">
                            <i class="tim-icons icon-single-02"></i>
                            <p>{{ __('User Profile') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'users') class="active " @endif>
                        <a href="{{ route('user.index')  }}">
                            <i class="tim-icons icon-bullet-list-67"></i>
                            <p>{{ __('User Management') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}
        <!-- Job Category -->
        {{-- <li>
            <a data-toggle="collapse" href="#job-category" aria-expanded="true">
                <i class="tim-icons icon-paper" ></i>
                <span class="nav-link-text" >{{ __('Job Category') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse show" id="job-category">
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'job-category/create') class="active " @endif>
                        <a href="{{ route('job-category.create')  }}">
                            <i class="tim-icons icon-simple-add"></i>
                            <p>{{ __('Add New Job Category') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'job-category') class="active " @endif>
                        <a href="{{ route('job-category.index')  }}">
                            <i class="tim-icons icon-bullet-list-67"></i>
                            <p>{{ __('JobCategory List') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li> --}}

        <!-- End Job Category -->

        <!-- NO NEED NOW -->
        {{-- <li @if ($pageSlug == 'icons') class="active " @endif>
            <a href="{{ route('pages.icons') }}">
                <i class="tim-icons icon-atom"></i>
                <p>{{ __('Icons') }}</p>
            </a>
        </li>
        <li @if ($pageSlug == 'maps') class="active " @endif>
            <a href="{{ route('pages.maps') }}">
                <i class="tim-icons icon-pin"></i>
                <p>{{ __('Maps') }}</p>
            </a>
        </li>
        <li @if ($pageSlug == 'notifications') class="active " @endif>
            <a href="{{ route('pages.notifications') }}">
                <i class="tim-icons icon-bell-55"></i>
                <p>{{ __('Notifications') }}</p>
            </a>
        </li>
        <li @if ($pageSlug == 'tables') class="active " @endif>
            <a href="{{ route('pages.tables') }}">
                <i class="tim-icons icon-puzzle-10"></i>
                <p>{{ __('Table List') }}</p>
            </a>
        </li>
        <li @if ($pageSlug == 'typography') class="active " @endif>
            <a href="{{ route('pages.typography') }}">
                <i class="tim-icons icon-align-center"></i>
                <p>{{ __('Typography') }}</p>
            </a>
        </li>
        <li @if ($pageSlug == 'rtl') class="active " @endif>
            <a href="{{ route('pages.rtl') }}">
                <i class="tim-icons icon-world"></i>
                <p>{{ __('RTL Support') }}</p>
            </a>
        </li>
        <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
            <a href="{{ route('pages.upgrade') }}">
                <i class="tim-icons icon-spaceship"></i>
                <p>{{ __('Upgrade to PRO') }}</p>
            </a>
        </li> --}}
    </ul>
</div>
</div>
