<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center h-10 px-4 py-2 rounded-xl bg-[#4f46e5] text-xs font-bold text-white shadow-sm hover:bg-[#4338ca] active:bg-[#3730a3] focus:outline-none focus:ring-4 focus:ring-indigo-500/10 transition-all cursor-pointer select-none']) }}>
    {{ $slot }}
</button>
