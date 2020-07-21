<div class="sidebar" data="blue">
    <div class="sidebar-wrapper">
        <div class="logo">
        <a href="{{url('employer')}}" class="simple-text logo-normal">{{ __('Mycareers') }}</a>
            <span style=" color: #fff;
            font-size: .7rem;
            font-weight: 600;">
            Your Balance : <span style="
            font-size: .8rem;">MMK - {{number_format('200000')}}</span> <!-- color: #d4420e; -->
        </span>
    </div>
    <ul class="nav">
        @if(Auth::user()->role_id == 1)
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
                {{-- <i class="fa fa-desktop" aria-hidden="true"></i> --}}
                <i class="tim-icons icon-istanbul"></i>
                <span class="nav-link-text" >{{ __('Company') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse" id="company"> <!-- IF you want to show use like this  <div class="collapse show" id="company"> -->
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'company_info') class="active " @endif>
                        <a href="{{ route('company')  }}">
                            {{-- <i class="tim-icons icon-istanbul"></i> --}}
                            <i class="fa fa-info" aria-hidden="true"></i>
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
                        <a href="{{ route('profile.edit')  }}">
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
                    <li @if ($pageSlug == 'allresume') class="active " @endif>
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
                    <li @if ($pageSlug == 'purchasedresumes') class="active " @endif>
                        <a href="{{ route('purchased')  }}">
                            <i class="tim-icons icon-notes"></i>
                            <p>{{ __('Purchased Resume') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        @else
        <li>
            <a data-toggle="collapse" href="#category" aria-expanded="false"> <!-- initial is true and use flase to hide -->
                {{-- <i class="fa fa-desktop" aria-hidden="true"></i> --}}
                <i class="tim-icons icon-istanbul"></i>
                <span class="nav-link-text" >{{ __('Category') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse" id="category"> <!-- IF you want to show use like this  <div class="collapse show" id="category"> -->
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'company_info') class="active " @endif>
                        <a href="{{ route('job-category.create')  }}">
                            {{-- <i class="tim-icons icon-istanbul"></i> --}}
                            <i class="fa fa-info" aria-hidden="true"></i>
                            <p>{{ __('Category Create') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'users') class="active " @endif>
                        <a href="{{ route('job-category.index')  }}">
                            <i class="tim-icons icon-paper fs-2"></i>
                            <p>{{ __('Category List') }}</p>
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <!-- JOBS -->
        <li @if ($pageSlug == 'jobs') class="active " @endif>
            <a href="{{ route('jobs') }}">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <p>{{ __('Employers') }}</p>
            </a>
        </li>

        <!-- Seeker Database -->
        <li>
            <a data-toggle="collapse" href="#seeker" aria-expanded="false">
                <i class="tim-icons  icon-coins"></i>
                <span class="nav-link-text" >{{ __('Seekers') }}</span>
                <b class="caret mt-1"></b>
            </a>

            <div class="collapse" id="seeker">
                <ul class="nav pl-4">
                    <li @if ($pageSlug == 'allresume') class="active " @endif>
                        <a href="{{ route('allresumes')  }}">
                            <i class="tim-icons icon-bullet-list-67"></i>
                            <p>{{ __('All Resumes') }}</p>
                        </a>
                    </li>
                    <li @if ($pageSlug == 'appliedresume') class="active " @endif>
                        <a href="{{ route('appliedresume')  }}">
                            <i class="tim-icons icon-badge"></i>
                            <p>{{ __('Seeker Datas') }}</p>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        @endif
    </ul>
</div>
</div>
