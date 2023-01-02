@extends('layout.app')
@section('pageTitle',trans('Applicant list'))
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
                                    <th scope="col">{{__('Image')}}</th>
                                    <th scope="col">{{__('Name')}}</th>
                                    <th scope="col">{{__('Contact')}}</th>
                                    <th scope="col">{{__('Email')}}</th>
                                    <th scope="col">{{__('Date of Birth')}}</th>
                                    <th class="white-space-nowrap">{{__('ACTION')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($addmission as $u)
                                <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img src="" alt=""></td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->contact}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->birth_date}}</td>
                                    <td class="white-space-nowrap">
                                        {{-- <a href="javascript:void()" onclick="$('#form{{$u->id}}').submit()">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <form id="form{{$u->id}}" action="{{route('unit.destroy',$u->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            
                                        </form> --}}
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