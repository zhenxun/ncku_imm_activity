@extends('layout-backend')

@section('content')

    @component('components.backend.page-header')
    @slot('faicon') fa-flag @endslot
    @slot('header') 最新消息 @endslot
    @slot('descriptionStatus') false @endslot
    @slot('breadcrumbs', ['首頁', '最新消息'])
    @endcomponent

    <section class="content container-fluid">

        @include('backend.news._form')

    </section>
    
@endsection