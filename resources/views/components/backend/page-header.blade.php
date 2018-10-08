<section class="content-header">
    <h1>
        {{ $header }}
        @if($descriptionStatus == 'true')
        <small>{{ $description }}</small>
        @endif
    </h1>
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
        @php
            $num_breadcrumbs = count($breadcrumbs);
            $icon = ($loop->iteration == 1)? '<i class="fa '.$faicon.'"></i>':'';
            $active = ($loop->iteration == $num_breadcrumbs)? 'active':'';
        @endphp
        <li class="{{ $active }}"><a href="#">{!! $icon !!} {{ $breadcrumb }}</a></li>
        @endforeach
    </ol>
</section>