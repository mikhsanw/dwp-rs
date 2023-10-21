@if($data->children->count() > 0 && $data->status != 4)
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$data->nama}}</a>
<div class="dropdown-menu rounded-0 m-0">
    @foreach($data->children as $sub)
        @include('layouts.frontend.menu', ['data'=>$sub])
    @endforeach
</div>
@else
    @if($data->status==2)
    <a class="nav-link" href="{{$data->link}}">{{$data->nama}}</a>
    @else
    <a class="nav-link" href="{{url('/company/page/'.$data->id.'/'.Help::generateSeoURL($data->nama))}}">{{$data->nama}}</a>
    @endif

@endif
