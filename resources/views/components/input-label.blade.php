@props(['value'])

<label class="label " style="color:black">
    {{ $value ?? $slot }}
</label>
