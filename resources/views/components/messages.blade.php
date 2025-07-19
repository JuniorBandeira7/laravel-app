@if (session()->has('success'))
    <div>{{ session('success') }}</div>
@endif

@id (session()->has('message'))
    <div>{{ session(('message')) }}</div>
@endif

@if (session()->has('error'))
    <div>{{ session('error') }}</div>
@endif
