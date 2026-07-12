@extends('layouts.app')

@section('content')
@php
    // High-Fidelity Realistic Sample Data for a Premium Commercial Catalog
    $books = [
        [
            'id' => 1,
            'title' => 'The Alchemist',
            'author' => 'Paulo Coelho',
            'category' => 'Fiction',
            'publisher' => 'HarperTorch',
            'isbn' => '978-0061122415',
            'total_copies' => 15,
            'borrowed' => 12,
            'rating' => '4.8',
            'status' => 'Available',
            'cover_color' => 'bg-[#EAB308]',
            'cover_letter' => 'TA'
        ],
        [
            'id' => 2,
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'category' => 'Self-Development',
            'publisher' => 'Avery',
            'isbn' => '978-0735211292',
            'total_copies' => 20,
            'borrowed' => 9,
            'rating' => '4.7',
            'status' => 'Available',
            'cover_color' => 'bg-[#10B981]',
            'cover_letter' => 'AH'
        ],
        [
            'id' => 3,
            'title' => 'Think and Grow Rich',
            'author' => 'Napoleon Hill',
            'category' => 'Business',
            'publisher' => 'Combined Registry Co.',
            'isbn' => '978-1593302009',
            'total_copies' => 10,
            'borrowed' => 7,
            'rating' => '4.6',
            'status' => 'Available',
            'cover_color' => 'bg-[#6366F1]',
            'cover_letter' => 'TG'
        ],
        [
            'id' => 4,
            'title' => 'Clean Architecture',
            'author' => 'Robert C. Martin',
            'category' => 'Programming',
            'publisher' => 'Prentice Hall',
            'isbn' => '978-0134494166',
            'total_copies' => 6,
            'borrowed' => 6,
            'rating' => '4.9',
            'status' => 'Borrowed',
            'cover_color' => 'bg-[#3B82F6]',
            'cover_letter' => 'CA'
        ],
        [
            'id' => 5,
            'title' => 'Introduction to Algorithms',
            'author' => 'Thomas H. Cormen',
            'category' => 'Computer Science',
            'publisher' => 'MIT Press',
            'isbn' => '978-0262046305',
            'total_copies' => 4,
            'borrowed' => 4,
            'rating' => '4.5',
            'status' => 'Overdue',
            'cover_color' => 'bg-[#EF4444]',
            'cover_letter' => 'IA'
        ]
    ];

    $categories = ['Programming', 'Computer Science', 'Business', 'Self-Development', 'Fiction', 'Technology'];
    $statuses = ['Available', 'Borrowed', 'Overdue'];
@endphp

<div class="space-y-6 animate-fade-in select-none">
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="space-y-1">
            <h1 class="text-2xl font-bold tracking-tight text-slate-900">Books</h1>
            <p class="text-xs font-medium text-slate-500">Manage the complete library asset catalogue, monitor inventory thresholds, and track live circulation ratios.</p>
        </div>
        
        <div class="flex items-center gap-3 shrink-0">
            <button type="button" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-semibold text-slate-700 bg-white border border-slate-200 rounded-xl shadow-xs hover:bg-slate-50 transition-all">
                <svg class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <span>Import CSV</span>
            </button>
           <a href="{{ Route::has('books.create') ? route('books.create') : '/library/books/create' }}" class="inline-flex items-center justify-center gap-2 px-4 py-2.5 text-xs font-bold text-white bg-indigo-600 rounded-xl shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all cursor-pointer">
    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
    </svg>
    <span>Add Book</span>
</a>

        </div>
    </div>

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
        
        <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-xs flex flex-col justify-between group hover:border-slate-300 transition-colors">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Books</span>
                <div class="h-9 w-9 bg-slate-50 rounded-xl flex items-center justify-center text-slate-400 group-hover:bg-indigo-50 group-hover:text-indigo-600 transition-colors">
                    <svg class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-2xl font-bold text-slate-900 tracking-tight">1,456</span>
                <div class="flex items-center gap-1.5 text-[11px] font-semibold text-emerald-600 mt-1">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" /></svg>
                    <span>12.5% from yesterday</span>
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-xs flex flex-col justify-between group hover:border-emerald-200 transition-colors">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Available</span>
                <div class="h-9 w-9 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-500">
                    <svg class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-2xl font-bold text-slate-900 tracking-tight">1,204</span>
                <p class="text-[11px] text-slate-400 font-medium mt-1">82.6% total catalog volume</p>
            </div>
        </div>

        <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-xs flex flex-col justify-between group hover:border-indigo-200 transition-colors">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Borrowed</span>
                <div class="h-9 w-9 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-500">
                    <svg class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L17.5 12M21 7.5H7.5" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-2xl font-bold text-slate-900 tracking-tight">252</span>
                <div class="flex items-center gap-1 text-[11px] font-semibold text-slate-500 mt-1">
                    <span class="font-bold text-indigo-600">6 returned today</span>
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-xs flex flex-col justify-between group hover:border-rose-200 transition-colors">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Overdue</span>
                <div class="h-9 w-9 bg-rose-50 rounded-xl flex items-center justify-center text-rose-500">
                    <svg class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4">
                <span class="text-2xl font-bold text-rose-600 tracking-tight">19</span>
                <div class="flex items-center gap-1.5 text-[11px] font-semibold text-rose-600 mt-1 animate-pulse">
                    <span>Items need urgent attention</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white border border-slate-200/90 rounded-2xl p-4 shadow-xs flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full md:max-w-3xl">
            <div class="relative w-full sm:max-w-xs">
                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.25" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.603 10.602z" />
                    </svg>
                </span>
                <input type="text" placeholder="Search books, authors, ISBN..." class="w-full pl-10 pr-4 py-2 text-xs font-semibold text-slate-700 bg-slate-50/50 border border-slate-200 rounded-xl focus:outline-hidden focus:bg-white focus:ring-4 focus:ring-slate-100 focus:border-slate-300 transition-all placeholder:text-slate-400" />
            </div>

            <div class="grid grid-cols-2 sm:flex sm:items-center gap-2">
                <div class="relative">
                    <select class="appearance-none w-full sm:w-40 pl-3 pr-8 py-2 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-slate-300 transition-all cursor-pointer">
                        <option value="">Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ Str::slug($cat) }}">{{ $cat }}</option>
                        @endforeach
                    </select>
                    <span class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none text-slate-400">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </span>
                </div>

                <div class="relative">
                    <select class="appearance-none w-full sm:w-36 pl-3 pr-8 py-2 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-slate-300 transition-all cursor-pointer">
                        <option value="">Status</option>
                        @foreach($statuses as $stat)
                            <option value="{{ Str::slug($stat) }}">{{ $stat }}</option>
                        @endforeach
                    </select>
                    <span class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none text-slate-400">
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
                    </span>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 shrink-0 border-t border-slate-100 pt-3 md:pt-0 md:border-none">
            <div class="relative">
                <select class="appearance-none pl-3 pr-8 py-2 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-xl focus:outline-hidden focus:border-slate-300 transition-all cursor-pointer">
                    <option value="latest">Sort by: Default</option>
                    <option value="alpha">Title (A-Z)</option>
                    <option value="rating">Rating</option>
                </select>
                <span class="absolute inset-y-0 right-0 pr-2.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m11.25-.75v6.75m0 0l-3-3m3 3l3-3" /></svg>
                </span>
            </div>

            <button type="button" title="Export Manifest Data" class="p-2 bg-white border border-slate-200 rounded-xl text-slate-400 hover:text-slate-600 hover:border-slate-300 transition-all shadow-xs">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </button>
            
            <button type="button" title="Invalidate Context Cache" class="p-2 bg-white border border-slate-200 rounded-xl text-slate-400 hover:text-indigo-600 hover:border-indigo-200 transition-all shadow-xs">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
            </button>
        </div>
    </div>

    @if(count($books) > 0)
        <div class="bg-white border border-slate-200/90 rounded-2xl shadow-xs overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-slate-50/70 border-b border-slate-200/60 text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                            <th class="py-3.5 px-6">Book</th>
                            <th class="py-3.5 px-6">Category</th>
                            <th class="py-3.5 px-6">Publisher</th>
                            <th class="py-3.5 px-6 font-mono">ISBN</th>
                            <th class="py-3.5 px-6 text-center">Copies</th>
                            <th class="py-3.5 px-6 text-center">Rating</th>
                            <th class="py-3.5 px-6">Status</th>
                            <th class="py-3.5 px-6 text-right w-20">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-xs font-semibold text-slate-600">
                        @foreach($books as $book)
                            <tr class="hover:bg-slate-50/40 transition-colors group">
                                
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-4">
                                        <div class="h-12 w-9 rounded-md shrink-0 shadow-sm flex items-center justify-center font-bold text-[10px] text-white {{ $book['cover_color'] }} ring-1 ring-black/5 group-hover:scale-105 transition-transform duration-200">
                                            {{ $book['cover_letter'] }}
                                        </div>
                                        <div class="flex flex-col min-w-0 max-w-xs sm:max-w-sm">
                                            <span class="font-bold text-slate-800 text-sm group-hover:text-indigo-600 transition-colors truncate" title="{{ $book['title'] }}">
                                                {{ $book['title'] }}
                                            </span>
                                            <span class="text-slate-400 font-medium text-[11px] mt-0.5 truncate">{{ $book['author'] }}</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="py-4 px-6">
                                    <span class="font-medium text-slate-600 bg-slate-100 px-2 py-1 rounded-lg text-[11px]">{{ $book['category'] }}</span>
                                </td>

                                <td class="py-4 px-6">
                                    <span class="text-slate-500 font-medium">{{ $book['publisher'] }}</span>
                                </td>

                                <td class="py-4 px-6">
                                    <span class="font-mono text-[11px] text-slate-400 tracking-tight select-all">{{ $book['isbn'] }}</span>
                                </td>

                                <td class="py-4 px-6 text-center">
                                    <div class="flex flex-col items-center">
                                        <span class="text-sm font-bold text-slate-800">
                                            {{ $book['total_copies'] - $book['borrowed'] }}<span class="text-slate-300 font-medium mx-0.5">/</span>{{ $book['total_copies'] }}
                                        </span>
                                        <span class="text-[9px] font-bold uppercase tracking-wider text-slate-400 mt-0.5">Available</span>
                                    </div>
                                </td>

                                <td class="py-4 px-6 text-center">
                                    <div class="inline-flex items-center gap-1 text-slate-700 font-bold">
                                        <svg class="h-3.5 w-3.5 text-amber-500 fill-amber-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="text-xs">{{ $book['rating'] }}</span>
                                    </div>
                                </td>

                                <td class="py-4 px-6">
                                    @if($book['status'] === 'Available')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 text-[10px] font-bold rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-200/40 uppercase tracking-wide">
                                            <span class="h-1 w-1 rounded-full bg-emerald-500"></span>
                                            Available
                                        </span>
                                    @elseif($book['status'] === 'Borrowed')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 text-[10px] font-bold rounded-lg bg-indigo-50 text-indigo-700 border border-indigo-200/40 uppercase tracking-wide">
                                            <span class="h-1 w-1 rounded-full bg-indigo-500"></span>
                                            Borrowed
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 text-[10px] font-bold rounded-lg bg-rose-50 text-rose-700 border border-rose-200/40 uppercase tracking-wide">
                                            <span class="h-1 w-1 rounded-full bg-rose-500"></span>
                                            Overdue
                                        </span>
                                    @endif
                                </td>

                                <td class="py-4 px-6 text-right whitespace-nowrap">
                                    <div class="flex items-center justify-end gap-1">
                                        @php $showUrl = Route::has('library.books.show') ? route('library.books.show', $book['id']) : '#'; @endphp
                                        <a href="{{ $showUrl }}" title="Inspect asset overview" class="p-2 text-slate-400 hover:text-slate-700 hover:bg-slate-50 rounded-lg transition-all">
                                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </a>

                                        @php $editUrl = Route::has('library.books.edit') ? route('library.books.edit', $book['id']) : '#'; @endphp
                                        <a href="{{ $editUrl }}" title="Modify asset registry fields" class="p-2 text-slate-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all">
                                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                            </svg>
                                        </a>

                                        <form action="#" method="POST" class="inline" onsubmit="return confirm('Purge data map entry context?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Remove asset model from storage" class="p-2 text-slate-300 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all">
                                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50 flex flex-col sm:flex-row items-center justify-between gap-4">
                <span class="text-xs font-semibold text-slate-500">
                    Showing <span class="font-bold text-slate-800">1</span> to <span class="font-bold text-slate-800">5</span> of <span class="font-bold text-slate-800">1,456</span> entries
                </span>
                
                <div class="inline-flex items-center gap-1 bg-white p-1 rounded-xl border border-slate-200/80 shadow-xs">
                    <button type="button" disabled class="p-1.5 rounded-lg text-slate-300 cursor-not-allowed">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                    </button>
                    
                    <button type="button" class="px-3 py-1 text-xs font-bold rounded-lg bg-indigo-600 text-white shadow-xs">1</button>
                    <button type="button" class="px-3 py-1 text-xs font-bold rounded-lg text-slate-600 hover:bg-slate-50">2</button>
                    <button type="button" class="px-3 py-1 text-xs font-bold rounded-lg text-slate-600 hover:bg-slate-50">3</button>
                    <span class="px-1.5 text-slate-300 font-bold text-xs select-none">...</span>
                    <button type="button" class="px-3 py-1 text-xs font-bold rounded-lg text-slate-600 hover:bg-slate-50">292</button>
                    
                    <button type="button" class="p-1.5 rounded-lg text-slate-500 hover:bg-slate-50">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                    </button>
                </div>
            </div>
        </div>
    @else
        <div class="bg-white border border-slate-200 border-dashed rounded-2xl p-12 text-center max-w-xl mx-auto my-8 flex flex-col items-center justify-center space-y-4">
            <div class="h-14 w-14 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center shadow-inner">
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            </div>
            
            <div class="space-y-1">
                <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wide">No Books Found</h3>
                <p class="text-xs text-slate-400 max-w-xs font-medium leading-relaxed">No matching catalog records exist in your active workspace layout schema context.</p>
            </div>

            <div class="pt-2">
                <a href="{{ Route::has('library.books.create') ? route('library.books.create') : '#' }}" class="inline-flex items-center gap-2 px-4 py-2.5 text-xs font-bold text-white bg-indigo-600 rounded-xl shadow-md hover:bg-indigo-700 transition-all">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
                    <span>Add First Book</span>
                </a>
            </div>
        </div>
    @endif

</div>
@endsection