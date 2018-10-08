@if(session()->has('success'))
    @component('components.alert-component')
    @slot('color') is-primary @endslot
    {{ session('success') }}
    @endcomponent

@endif

@if(session()->has('error'))
    @component('components.alert-component')
    @slot('type') is-danger @endslot
    {{ session('error') }}
    @endcomponent
@endif
