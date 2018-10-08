@extends('layout-backend')

@section('content')

    @component('components.backend.page-header')
        @slot('faicon') fa-dashboard @endslot
        @slot('header') 首頁 @endslot
        @slot('descriptionStatus') false @endslot
        @slot('breadcrumbs', ['首頁'])
    @endcomponent
   
    <section class="content container-fluid">

            123

    </section>


    
@endsection