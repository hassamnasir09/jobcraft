@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} 
class="form-control">
