@extends('layouts.app')

@section('title', 'UI Showcase')

@section('content')
    <div class="space-y-8">
        <x-ui.page-header
            title="UI Showcase"
            subtitle="A polished inventory of reusable components for the Sifra design system."
        >
            <x-slot:actions>
                <x-ui.button variant="primary">Launch demo</x-ui.button>
                <x-ui.button variant="outline">Review tokens</x-ui.button>
            </x-slot:actions>
        </x-ui.page-header>

        <div class="grid gap-6 xl:grid-cols-[1.4fr_0.9fr]">
            <x-ui.card title="Component Gallery" subtitle="Buttons, badges, cards, alerts, and stat cards all share the same visual language.">
                <div class="flex flex-wrap gap-3">
                    <x-ui.button variant="primary">Primary action</x-ui.button>
                    <x-ui.button variant="secondary">Secondary action</x-ui.button>
                    <x-ui.button variant="success">Success</x-ui.button>
                    <x-ui.button variant="danger">Danger</x-ui.button>
                    <x-ui.button variant="outline">Outline</x-ui.button>
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    <x-ui.badge type="primary" dot="true">Live</x-ui.badge>
                    <x-ui.badge type="success" dot="true">Ready</x-ui.badge>
                    <x-ui.badge type="warning" dot="true">Review</x-ui.badge>
                    <x-ui.badge type="danger" dot="true">Pending</x-ui.badge>
                </div>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <x-ui.stat-card title="Books in stock" value="1,284" description="Updated 10 mins ago" trend="+8.2%" trendType="up" icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='1.8' d='M12 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zM5.25 18a2.25 2.25 0 012.25-2.25h9a2.25 2.25 0 012.25 2.25'/></svg>" />
                    <x-ui.stat-card title="Borrowed today" value="36" description="Peak hour 14:00" trend="-2.1%" trendType="down" icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='1.8' d='M8.25 7.5v-1.5a2.25 2.25 0 114.5 0v1.5m-4.5 0h4.5m-4.5 0H4.5m4.5 0v8.25m4.5-8.25h4.5m-4.5 0H19.5'/></svg>" />
                    <x-ui.stat-card title="Café revenue" value="$4,320" description="This week" trend="Stable" trendType="neutral" icon="<svg xmlns='http://www.w3.org/2000/svg' class='h-6 w-6' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='1.8' d='M12 8.25v7.5m0 0l-3-3m3 3l3-3m-6.75 3h9'/></svg>" />
                </div>
            </x-ui.card>

            <x-ui.card title="Alerts & status" subtitle="Feedback states for success, warning and danger moments.">
                <div class="space-y-3">
                    <x-ui.alert type="success" title="Inventory synced">The latest purchase orders were imported successfully.</x-ui.alert>
                    <x-ui.alert type="warning" title="Review required">A small batch of books is below the threshold.</x-ui.alert>
                    <x-ui.alert type="danger" title="Action needed">Two borrowing records need immediate attention.</x-ui.alert>
                </div>
            </x-ui.card>
        </div>

        <x-ui.card title="Form primitives" subtitle="Reusable input, textarea, and select fields with inline validation states.">
            <div class="grid gap-6 lg:grid-cols-2">
                <div class="space-y-4">
                    <x-ui.input label="Book title" name="book_title" placeholder="Enter a title" required="true" />
                    <x-ui.input label="Author email" name="author_email" type="email" placeholder="name@example.com" error="Please enter a valid address" />
                    <x-ui.textarea label="Notes" name="notes" placeholder="Add a short note" rows="4" />
                </div>
                <div class="space-y-4">
                    <x-ui.select label="Status" name="status" :options="['draft' => 'Draft', 'review' => 'Review', 'published' => 'Published']" value="review" />
                    <x-ui.select label="Category" name="category" :options="['fiction' => 'Fiction', 'history' => 'History', 'cafe' => 'Café']" placeholder="Choose a category" />
                    <x-ui.empty-state title="No records yet" description="Create your first item to populate this workspace." icon="✦">
                        <x-slot:actions>
                            <x-ui.button variant="primary">Create item</x-ui.button>
                        </x-slot:actions>
                    </x-ui.empty-state>
                </div>
            </div>
        </x-ui.card>

        <x-ui.card title="Table example" subtitle="Responsive data display for lists and records.">
            <x-ui.table>
                <thead>
                    <tr class="border-b border-slate-200 bg-slate-50/80 text-left text-sm font-semibold text-slate-600">
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 bg-white">
                    <tr class="text-sm text-slate-700">
                        <td class="px-4 py-3 font-medium">Amina Hassan</td>
                        <td class="px-4 py-3">Librarian</td>
                        <td class="px-4 py-3"><x-ui.badge type="success" dot="true">Active</x-ui.badge></td>
                    </tr>
                    <tr class="text-sm text-slate-700">
                        <td class="px-4 py-3 font-medium">Daniel Moore</td>
                        <td class="px-4 py-3">Café supervisor</td>
                        <td class="px-4 py-3"><x-ui.badge type="warning" dot="true">Review</x-ui.badge></td>
                    </tr>
                    <tr class="text-sm text-slate-700">
                        <td class="px-4 py-3 font-medium">Sara Kim</td>
                        <td class="px-4 py-3">Inventory</td>
                        <td class="px-4 py-3"><x-ui.badge type="primary" dot="true">Ready</x-ui.badge></td>
                    </tr>
                </tbody>
            </x-ui.table>
        </x-ui.card>

        <x-ui.card title="Modals & interactions" subtitle="The modal foundation is ready for future confirmation flows.">
            <div class="flex flex-wrap gap-3">
                <x-ui.button variant="primary" onclick="document.getElementById('demo-modal').classList.remove('hidden')">Open modal</x-ui.button>
            </div>
            <div id="demo-modal" class="hidden">
                <x-ui.modal name="demo-modal" :show="true">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-slate-900">Modal foundation</h3>
                        <p class="mt-2 text-sm text-slate-500">This lightweight modal shell is ready for confirmation dialogs, forms, and review actions.</p>
                        <div class="mt-6 flex justify-end gap-3">
                            <x-ui.button variant="outline" onclick="document.getElementById('demo-modal').classList.add('hidden')">Cancel</x-ui.button>
                            <x-ui.button variant="primary">Proceed</x-ui.button>
                        </div>
                    </div>
                </x-ui.modal>
            </div>
        </x-ui.card>
    </div>
@endsection
