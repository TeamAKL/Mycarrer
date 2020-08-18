<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="" target="blank" class="nav-link">
                    {{ __('Employer Toolkits') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void();" class="nav-link">
                    {{ __('How to Post') }}
                </a>
            </li>
            <li class="nav-item">
            <a href="{{url('about')}}" class="nav-link">
                    {{ __('About Us') }}
                </a>
            </li>
            <li class="nav-item">
            <a href="{{url('blog')}}" class="nav-link">
                    {{ __('Blog') }}
                </a>
            </li>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('MyCareers') }}  {{ __('- All Right Rererved') }}.
        </div>
    </div>
</footer>
