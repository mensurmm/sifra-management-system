<div class="flex items-center gap-2 border-b border-slate-200 pb-px mb-6">
    <a href="{{ route('profile.show') }}" class="px-4 py-2.5 text-xs font-bold transition-all border-b-2 {{ Route::is('profile.show') ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-slate-400 hover:text-slate-700' }}">
        Account Details Overview
    </a>
    <a href="{{ route('profile.edit') }}" class="px-4 py-2.5 text-xs font-bold transition-all border-b-2 {{ Route::is('profile.edit') ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-slate-400 hover:text-slate-700' }}">
        Edit Profile Information
    </a>
    <a href="{{ route('profile.password.edit') }}" class="px-4 py-2.5 text-xs font-bold transition-all border-b-2 {{ Route::is('profile.password.edit') ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-slate-400 hover:text-slate-700' }}">
        Change Password Space
    </a>
    <a href="{{ route('profile.notifications.edit') }}" class="px-4 py-2.5 text-xs font-bold transition-all border-b-2 {{ Route::is('profile.notifications.edit') ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-slate-400 hover:text-slate-700' }}">
        System Notifications Settings
    </a>
</div>
