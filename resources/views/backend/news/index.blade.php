@extends('layout-backend')

@section('content')

    @component('components.backend.page-header')
        @slot('faicon') fa-flag @endslot
        @slot('header') 最新消息 @endslot
        @slot('descriptionStatus') false @endslot
        @slot('breadcrumbs', ['首頁', '最新消息'])
    @endcomponent

    <section class="content container-fluid">

        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title" style="padding-top:3px;">最新消息</h3>
                <div class="btn-group">
                    <a href="{{ route('backend.news.create') }}" class="btn btn-xs btn-success">
                        <i class="fa fa-plus"></i> &nbsp; 新增
                    </a>
                </div>
            </div>
            <div class="box-body">
            

            </div>
            <!-- /.box-body -->
        </div>
        

    </section>
    
@endsection