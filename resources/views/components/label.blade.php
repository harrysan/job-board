<label class="block mb-2 text-sm font-medium text-slate-900" for="{{ $for }}">
    {{ $slot }} @if ($required)
        <span>*</span>
    @endif
</label>
