<!-- Current: "bg-zinc-900 text-white", Default: "text-zinc-300 hover:bg-white/5 hover:text-white" -->

<a {{ $attributes }} class="{{ request()->fullUrlis(url($href)) ? 'bg-zinc-700 text-white' : 'text-zinc-300 hover:bg-white/5 hover:text-white' }} block rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>

