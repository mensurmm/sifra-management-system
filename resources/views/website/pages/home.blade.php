@extends('website.layouts.app')

@section('content')
    <!-- 🧭 Include top header navigation partial -->
    @include('website.partials.navbar')

    <!-- 🖼️ Section 1: Top premium dark hero display area & white stat modules -->
    @include('website.sections.hero.hero')

    <!-- 💡 Placeholder container target for next sections (Featured Books row) -->
    <div class="max-w-7xl mx-auto px-12 py-16 text-center text-xs font-semibold text-slate-400">
        ... Next up: We will implement Section 2 (Featured Books & Café Specials) matching your mockup pixel by pixel ...
    </div>
@endsection
