<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-brand-orange border border-transparent rounded-xl font-bold text-xs text-white uppercase tracking-widest hover:bg-brand-rust focus:bg-brand-rust active:bg-brand-dark focus:outline-none focus:ring-2 focus:ring-brand-orange focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-brand-orange/20']) }}>
    {{ $slot }}
</button>
