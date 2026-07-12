from pathlib import Path

root = Path('resources/views')
root.mkdir(parents=True, exist_ok=True)

component_templates = {
    'components/ui/alert.blade.php': """@props(['type' => 'info'])
@php
$classes = [
    'rounded-xl border px-4 py-3 text-sm',
    $type === 'success' ? 'border-emerald-200 bg-emerald-50 text-emerald-700' : '',
    $type === 'danger' ? 'border-rose-200 bg-rose-50 text-rose-700' : '',
    $type === 'warning' ? 'border-amber-200 bg-amber-50 text-amber-700' : 'border-slate-200 bg-slate-50 text-slate-700',
];
@endphp
<div {{ $attributes->merge(['class' => implode($classes, ' ')]) }}>
    {{ $slot }}
</div>
""",
    'components/ui/badge.blade.php': """@props(['variant' => 'neutral'])
@php
$variants = [
    'neutral' => 'bg-slate-100 text-slate-700',
    'success' => 'bg-emerald-100 text-emerald-700',
    'danger' => 'bg-rose-100 text-rose-700',
    'info' => 'bg-indigo-100 text-indigo-700',
];
@endphp
<span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold ' . ($variants[$variant] ?? $variants['neutral'])]) }}>
    {{ $slot }}
</span>
""",
    'components/ui/button.blade.php': """@props(['variant' => 'primary', 'href' => null])
@php
$base = 'inline-flex items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold transition';
$variants = [
    'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700',
    'secondary' => 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50',
    'danger' => 'bg-rose-600 text-white hover:bg-rose-700',
];
@endphp
@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
        {{ $slot }}
    </button>
@endif
""",
    'components/ui/card.blade.php': """@props(['title' => null])
<div {{ $attributes->merge(['class' => 'rounded-2xl border border-slate-200 bg-white shadow-sm']) }}>
    @if($title)
        <div class="border-b border-slate-100 px-5 py-4">
            <h3 class="text-sm font-semibold text-slate-900">{{ $title }}</h3>
        </div>
    @endif
    <div class="p-5">
        {{ $slot }}
    </div>
</div>
""",
    'components/ui/dropdown.blade.php': """<div class="relative">
    {{ $trigger }}
    <div class="absolute right-0 z-20 mt-2 w-48 rounded-xl border border-slate-200 bg-white p-2 shadow-lg">
        {{ $slot }}
    </div>
</div>
""",
    'components/ui/empty-state.blade.php': """@props(['title' => 'Nothing here yet', 'description' => 'Start by adding your first record.'])
<div class="rounded-2xl border border-dashed border-slate-300 bg-slate-50 p-8 text-center">
    <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
    <p class="mt-2 text-sm text-slate-600">{{ $description }}</p>
    <div class="mt-4">
        {{ $slot }}
    </div>
</div>
""",
    'components/ui/input.blade.php': """@props(['label' => null, 'name' => null])
<div class="space-y-1">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-slate-700">{{ $label }}</label>
    @endif
    <input {{ $attributes->merge(['class' => 'w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-100']) }} />
</div>
""",
    'components/ui/modal.blade.php': """@props(['id' => 'modal', 'title' => null])
<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-950/40 p-4">
    <div class="w-full max-w-lg rounded-2xl bg-white p-6 shadow-xl">
        @if($title)
            <h3 class="text-lg font-semibold text-slate-900">{{ $title }}</h3>
        @endif
        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</div>
""",
    'components/ui/page-header.blade.php': """@props(['title' => 'Page', 'description' => null])
<div class="flex flex-col gap-2 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
    <h1 class="text-2xl font-semibold text-slate-900">{{ $title }}</h1>
    @if($description)
        <p class="text-sm text-slate-600">{{ $description }}</p>
    @endif
</div>
""",
    'components/ui/pagination.blade.php': """<nav class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
    <span class="text-sm text-slate-600">Showing recent items</span>
    <div class="flex items-center gap-2">
        <a href="#" class="rounded-lg border border-slate-200 px-3 py-1.5 text-sm text-slate-600 hover:bg-slate-50">Previous</a>
        <a href="#" class="rounded-lg bg-indigo-600 px-3 py-1.5 text-sm font-semibold text-white">1</a>
        <a href="#" class="rounded-lg border border-slate-200 px-3 py-1.5 text-sm text-slate-600 hover:bg-slate-50">Next</a>
    </div>
</nav>
""",
    'components/ui/search.blade.php': """@props(['placeholder' => 'Search'])
<div class="relative">
    <input type="search" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'w-full rounded-xl border border-slate-200 bg-slate-50 px-3 py-2 text-sm text-slate-700 focus:border-indigo-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-100']) }} />
</div>
""",
    'components/ui/select.blade.php': """@props(['label' => null, 'name' => null])
<div class="space-y-1">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-slate-700">{{ $label }}</label>
    @endif
    <select {{ $attributes->merge(['class' => 'w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-100']) }}>
        {{ $slot }}
    </select>
</div>
""",
    'components/ui/table.blade.php': """<div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-200">
            {{ $slot }}
        </table>
    </div>
</div>
""",
    'components/ui/tabs.blade.php': """<div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm">
    <div class="flex flex-wrap gap-2">
        {{ $slot }}
    </div>
</div>
""",
    'components/ui/textarea.blade.php': """@props(['label' => null, 'name' => null])
<div class="space-y-1">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-slate-700">{{ $label }}</label>
    @endif
    <textarea {{ $attributes->merge(['class' => 'min-h-28 w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-100']) }}></textarea>
</div>
""",
    'components/ui/timeline.blade.php': """<ol class="space-y-4">
    {{ $slot }}
</ol>
""",
    'components/ui/primary-button.blade.php': """@props(['href' => null, 'variant' => 'primary'])
@php
$base = 'inline-flex items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold shadow-sm transition';
$variants = [
    'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700',
    'secondary' => 'border border-slate-200 bg-white text-slate-700 hover:bg-slate-50',
    'danger' => 'bg-rose-600 text-white hover:bg-rose-700',
];
@endphp
@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => $base . ' ' . ($variants[$variant] ?? $variants['primary'])]) }}>
        {{ $slot }}
    </button>
@endif
""",
    'components/ui/text-input.blade.php': """@props(['label' => null, 'name' => null])
<div class="space-y-1">
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-slate-700">{{ $label }}</label>
    @endif
    <input {{ $attributes->merge(['class' => 'w-full rounded-xl border border-slate-200 bg-white px-3 py-2 text-sm text-slate-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-100']) }} />
</div>
""",
}

for rel, content in component_templates.items():
    path = root / rel
    path.parent.mkdir(parents=True, exist_ok=True)
    if not path.exists():
        path.write_text(content, encoding='utf-8')

layout_templates = {
    'layouts/guest.blade.php': """<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Sifra') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800">
    <div class="min-h-screen">
        @yield('content')
        {{ $slot }}
    </div>
</body>
</html>
""",
    'layouts/auth.blade.php': """<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Sifra') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800">
    <main class="min-h-screen">
        @yield('content')
        {{ $slot }}
    </main>
</body>
</html>
""",
    'layouts/error.blade.php': """@extends('layouts.guest')

@section('content')
<div class="flex min-h-screen items-center justify-center px-6 py-12">
    <div class="w-full max-w-xl rounded-2xl border border-slate-200 bg-white p-8 text-center shadow-sm">
        <h1 class="text-4xl font-semibold text-slate-900">Something went wrong</h1>
        <p class="mt-3 text-sm text-slate-600">Please return to the dashboard and try again.</p>
        <a href="/" class="mt-6 inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-700">Go home</a>
    </div>
</div>
@endsection
""",
}
for rel, content in layout_templates.items():
    path = root / rel
    path.parent.mkdir(parents=True, exist_ok=True)
    if not path.exists():
        path.write_text(content, encoding='utf-8')


def page_content(title, description, action='/'):
    return f"""@extends('layouts.app')

@section('content')
<div class="space-y-6">
    <div class="flex flex-col gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-slate-900">{title}</h1>
            <p class="mt-1 text-sm text-slate-600">{description}</p>
        </div>
        <a href="{action}" class="inline-flex items-center rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-700">Open</a>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <p class="text-sm text-slate-600">This view is ready for your module-specific content.</p>
    </div>
</div>
@endsection
"""


def partial_content(title):
    return f"""<div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
    <h3 class="text-sm font-semibold text-slate-900">{title}</h3>
    <p class="mt-2 text-sm text-slate-600">Add your {title.lower()} markup here.</p>
</div>
"""


def ensure(rel, content):
    path = root / rel
    path.parent.mkdir(parents=True, exist_ok=True)
    if not path.exists():
        path.write_text(content, encoding='utf-8')

# Profile and settings
ensure('profile/show.blade.php', page_content('Profile', 'Review account details and recent activity.', '/profile/edit'))
ensure('profile/password.blade.php', page_content('Password', 'Update your password and protect your account.', '/profile'))
ensure('profile/notifications.blade.php', page_content('Notifications', 'Manage how you receive updates from Sifra.', '/profile'))
ensure('settings/index.blade.php', page_content('Settings', 'Configure the core platform preferences from one place.', '/settings/general'))
ensure('settings/general.blade.php', page_content('General Settings', 'Adjust the platform name, localization, and defaults.', '/settings'))
ensure('settings/users.blade.php', page_content('Users', 'Manage staff accounts and access levels.', '/settings/roles'))
ensure('settings/roles.blade.php', page_content('Roles', 'Define role-based permissions for your team.', '/settings/permissions'))
ensure('settings/permissions.blade.php', page_content('Permissions', 'Review and refine the platform permissions matrix.', '/settings/users'))
ensure('settings/backup.blade.php', page_content('Backup', 'Create and restore platform backups.', '/settings'))
ensure('settings/notifications.blade.php', page_content('Notifications', 'Configure email and in-app notifications.', '/settings'))
ensure('settings/appearance.blade.php', page_content('Appearance', 'Customize colors, themes, and dashboard presentation.', '/settings'))
ensure('settings/security.blade.php', page_content('Security', 'Manage password rules and session controls.', '/settings'))

# Reports
ensure('reports/dashboard.blade.php', page_content('Reports Dashboard', 'Overview of library, café, and financial performance.', '/reports/library'))
ensure('reports/cafe.blade.php', page_content('Café Reports', 'Monitor sales and product performance.', '/reports'))
ensure('reports/financial.blade.php', page_content('Financial Reports', 'Review payments, purchases, and revenue trends.', '/reports'))
ensure('reports/members.blade.php', page_content('Member Reports', 'Track membership growth and engagement.', '/reports'))
ensure('reports/partials/filters.blade.php', partial_content('Report Filters'))
ensure('reports/partials/charts.blade.php', partial_content('Charts'))
ensure('reports/partials/summary.blade.php', partial_content('Summary'))
ensure('reports/partials/tables.blade.php', partial_content('Tables'))
ensure('reports/partials/export.blade.php', partial_content('Export'))

# Library partials and pages
for rel, title in [
    ('library/books/partials/hero.blade.php', 'Book Hero'),
    ('library/books/partials/stats.blade.php', 'Book Stats'),
    ('library/books/partials/toolbar.blade.php', 'Book Toolbar'),
    ('library/books/partials/filters.blade.php', 'Book Filters'),
    ('library/books/partials/form.blade.php', 'Book Form'),
    ('library/books/partials/sidebar.blade.php', 'Book Sidebar'),
    ('library/books/partials/empty-state.blade.php', 'Book Empty State'),
    ('library/books/partials/delete-modal.blade.php', 'Delete Book Modal'),
    ('library/categories/partials/form.blade.php', 'Category Form'),
    ('library/categories/partials/table.blade.php', 'Category Table'),
    ('library/categories/partials/toolbar.blade.php', 'Category Toolbar'),
    ('library/categories/partials/filters.blade.php', 'Category Filters'),
    ('library/categories/partials/stats.blade.php', 'Category Stats'),
    ('library/authors/partials/form.blade.php', 'Author Form'),
    ('library/authors/partials/toolbar.blade.php', 'Author Toolbar'),
    ('library/authors/partials/filters.blade.php', 'Author Filters'),
    ('library/authors/partials/table.blade.php', 'Author Table'),
    ('library/authors/partials/stats.blade.php', 'Author Stats'),
    ('library/publishers/partials/form.blade.php', 'Publisher Form'),
    ('library/publishers/partials/toolbar.blade.php', 'Publisher Toolbar'),
    ('library/publishers/partials/table.blade.php', 'Publisher Table'),
    ('library/publishers/partials/filters.blade.php', 'Publisher Filters'),
    ('library/publishers/partials/stats.blade.php', 'Publisher Stats'),
]:
    ensure(rel, partial_content(title))

ensure('library/categories/show.blade.php', page_content('Category Details', 'Review the details of a library category.', '/library/categories'))
ensure('library/authors/show.blade.php', page_content('Author Details', 'Review the author profile and related books.', '/library/authors'))
ensure('library/publishers/show.blade.php', page_content('Publisher Details', 'Review publisher information and catalog history.', '/library/publishers'))

for rel, title in [
    ('library/members/index.blade.php', 'Members'),
    ('library/members/create.blade.php', 'Add Member'),
    ('library/members/edit.blade.php', 'Edit Member'),
    ('library/members/show.blade.php', 'Member Details'),
    ('library/members/partials/hero.blade.php', 'Member Hero'),
    ('library/members/partials/stats.blade.php', 'Member Stats'),
    ('library/members/partials/toolbar.blade.php', 'Member Toolbar'),
    ('library/members/partials/filters.blade.php', 'Member Filters'),
    ('library/members/partials/table.blade.php', 'Member Table'),
    ('library/members/partials/profile-card.blade.php', 'Profile Card'),
    ('library/members/partials/membership-card.blade.php', 'Membership Card'),
    ('library/members/partials/activity.blade.php', 'Member Activity'),
    ('library/borrowing/index.blade.php', 'Borrowing'),
    ('library/borrowing/create.blade.php', 'New Borrowing'),
    ('library/borrowing/show.blade.php', 'Borrowing Details'),
    ('library/borrowing/partials/toolbar.blade.php', 'Borrowing Toolbar'),
    ('library/borrowing/partials/filters.blade.php', 'Borrowing Filters'),
    ('library/borrowing/partials/table.blade.php', 'Borrowing Table'),
    ('library/borrowing/partials/issue-modal.blade.php', 'Issue Modal'),
    ('library/borrowing/partials/book-search.blade.php', 'Book Search'),
    ('library/borrowing/partials/member-search.blade.php', 'Member Search'),
    ('library/borrowing/partials/summary.blade.php', 'Borrowing Summary'),
    ('library/borrowing/partials/timeline.blade.php', 'Borrowing Timeline'),
    ('library/returns/index.blade.php', 'Returns'),
    ('library/returns/create.blade.php', 'Create Return'),
    ('library/returns/show.blade.php', 'Return Details'),
    ('library/returns/partials/toolbar.blade.php', 'Return Toolbar'),
    ('library/returns/partials/filters.blade.php', 'Return Filters'),
    ('library/returns/partials/table.blade.php', 'Return Table'),
    ('library/returns/partials/return-modal.blade.php', 'Return Modal'),
    ('library/returns/partials/fine-summary.blade.php', 'Fine Summary'),
    ('library/reservations/index.blade.php', 'Reservations'),
    ('library/reservations/create.blade.php', 'Create Reservation'),
    ('library/reservations/show.blade.php', 'Reservation Details'),
    ('library/reservations/partials/table.blade.php', 'Reservation Table'),
    ('library/reservations/partials/toolbar.blade.php', 'Reservation Toolbar'),
    ('library/reservations/partials/filters.blade.php', 'Reservation Filters'),
]:
    ensure(rel, page_content(title, f'Add the {title.lower()} experience for this module.', '/library'))

# Café pages
for rel, title in [
    ('cafe/products/index.blade.php', 'Products'),
    ('cafe/products/create.blade.php', 'Create Product'),
    ('cafe/products/edit.blade.php', 'Edit Product'),
    ('cafe/products/show.blade.php', 'Product Details'),
    ('cafe/products/partials/hero.blade.php', 'Product Hero'),
    ('cafe/products/partials/stats.blade.php', 'Product Stats'),
    ('cafe/products/partials/toolbar.blade.php', 'Product Toolbar'),
    ('cafe/products/partials/filters.blade.php', 'Product Filters'),
    ('cafe/products/partials/table.blade.php', 'Product Table'),
    ('cafe/products/partials/product-card.blade.php', 'Product Card'),
    ('cafe/products/partials/form.blade.php', 'Product Form'),
    ('cafe/categories/index.blade.php', 'Product Categories'),
    ('cafe/categories/create.blade.php', 'Create Category'),
    ('cafe/categories/edit.blade.php', 'Edit Category'),
    ('cafe/categories/partials/form.blade.php', 'Category Form'),
    ('cafe/categories/partials/table.blade.php', 'Category Table'),
    ('cafe/categories/partials/toolbar.blade.php', 'Category Toolbar'),
    ('cafe/inventory/index.blade.php', 'Inventory'),
    ('cafe/inventory/create.blade.php', 'Add Inventory Item'),
    ('cafe/inventory/edit.blade.php', 'Edit Inventory Item'),
    ('cafe/inventory/partials/stats.blade.php', 'Inventory Stats'),
    ('cafe/inventory/partials/toolbar.blade.php', 'Inventory Toolbar'),
    ('cafe/inventory/partials/filters.blade.php', 'Inventory Filters'),
    ('cafe/inventory/partials/table.blade.php', 'Inventory Table'),
    ('cafe/inventory/partials/stock-alert.blade.php', 'Stock Alert'),
    ('cafe/inventory/partials/supplier-card.blade.php', 'Supplier Card'),
    ('cafe/suppliers/index.blade.php', 'Suppliers'),
    ('cafe/suppliers/create.blade.php', 'Create Supplier'),
    ('cafe/suppliers/edit.blade.php', 'Edit Supplier'),
    ('cafe/suppliers/show.blade.php', 'Supplier Details'),
    ('cafe/suppliers/partials/form.blade.php', 'Supplier Form'),
    ('cafe/suppliers/partials/table.blade.php', 'Supplier Table'),
    ('cafe/purchases/index.blade.php', 'Purchases'),
    ('cafe/purchases/create.blade.php', 'Create Purchase'),
    ('cafe/purchases/show.blade.php', 'Purchase Details'),
    ('cafe/purchases/partials/purchase-form.blade.php', 'Purchase Form'),
    ('cafe/purchases/partials/table.blade.php', 'Purchase Table'),
    ('cafe/purchases/partials/summary.blade.php', 'Purchase Summary'),
    ('cafe/pos/index.blade.php', 'Point of Sale'),
    ('cafe/pos/partials/product-grid.blade.php', 'Product Grid'),
    ('cafe/pos/partials/cart.blade.php', 'Cart'),
    ('cafe/pos/partials/checkout.blade.php', 'Checkout'),
    ('cafe/pos/partials/payment-modal.blade.php', 'Payment Modal'),
    ('cafe/pos/partials/receipt-preview.blade.php', 'Receipt Preview'),
    ('cafe/pos/partials/customer-panel.blade.php', 'Customer Panel'),
    ('cafe/sales/index.blade.php', 'Sales'),
    ('cafe/sales/show.blade.php', 'Sale Details'),
    ('cafe/sales/partials/table.blade.php', 'Sales Table'),
    ('cafe/sales/partials/receipt.blade.php', 'Receipt'),
    ('cafe/sales/partials/summary.blade.php', 'Sales Summary'),
]:
    ensure(rel, page_content(title, f'Add the {title.lower()} experience for this cafe module.', '/cafe/products'))

print('Created Blade view files successfully.')
