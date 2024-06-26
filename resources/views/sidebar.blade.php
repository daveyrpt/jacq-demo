<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('home*') ? '' : 'collapsed' }}" href="{{ route('home.index') }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('message.dashboard') }}</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('profile*') ? '' : 'collapsed' }}"
                href="{{ route('profile.index', Auth::user()->id) }}">
                <i class="bi bi-people-fill"></i>
                <span>{{ __('message.profile') }}</span>
            </a>
        </li>

        @if (Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('news*') ? '' : 'collapsed' }}" href="{{ route('news.index') }}">
                    <i class="bi bi-newspaper"></i>
                    <span>{{ __('message.news') }}</span>
                </a>
            </li>
        @endif

        @if (Auth::user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact-form*') ? '' : 'collapsed' }}" href="{{ route('contact-form.index') }}">
                    <i class="bi bi-patch-question-fill"></i>
                    <span>{{ __('message.help and support') }}</span>
                </a>
            </li>
        @endif

        @if (Auth::user()->isSuperAdmin)
            <li class="nav-item">
                <a class="nav-link {{ Request::is('logs*') ? '' : 'collapsed' }}" href="{{ route('logs.index') }}">
                    <i class="bi bi-shield-exclamation"></i>
                    <span>{{ __('message.log') }}</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link {{ Request::is('account-setting*') ? '' : 'collapsed' }}"
                href="{{ route('account-setting.index') }}">
                <i class="bi bi-nut-fill"></i>
                <span>{{ __('message.setting') }}</span>
            </a>
        </li>

    </ul>

</aside>
