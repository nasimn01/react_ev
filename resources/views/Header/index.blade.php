@extends('layout.app')
@section('pageTitle',trans('Header'))
@section('pageSubTitle',trans('List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">{{__('#SL')}}</th>
                                    <th scope="col">{{__('Menu 1')}}</th>
                                    <th scope="col">{{__('Menu 2')}}</th>
                                    <th scope="col">{{__('Menu 3')}}</th>
                                    <th scope="col">{{__('Menu 4')}}</th>
                                    <th scope="col">{{__('Menu 5')}}</th>
                                    
                                    <th class="white-space-nowrap">{{__('ACTION')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($header as $u)
                                <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                    
                                    <td>{{$u->menu_1}}</td>
                                    <td>{{$u->menu_2}}</td>
                                    <td>{{$u->menu_3}}</td>
                                    <td>{{$u->menu_4}}</td>
                                    <td>{{$u->menu_5}}</td>
                                    
                                    <td class="white-space-nowrap">
                                        <a href="{{route(currentUser().'.header.edit',encryptor('encrypt',$u->id))}}">
                                             <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="7" class="text-center">No Data Found</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection