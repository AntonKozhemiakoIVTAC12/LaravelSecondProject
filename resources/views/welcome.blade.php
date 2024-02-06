@if (Auth::check())
    <script>window.location = "{{ route('dashboard') }}";</script>
@else
    <script>window.location = "{{ route('login') }}";</script>
@endif
