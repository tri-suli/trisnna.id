@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-brand-cream bg-white focus:border-brand-orange focus:ring-brand-orange rounded-xl shadow-sm']) }}>
