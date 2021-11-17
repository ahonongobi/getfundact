@extends('_layouts._user')

@section('content')
<div class="benefit-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach ($contribution as $item)
            <div class="col-sm-6 col-lg-3">
                <div class="benefit-item">
                    @if ($item->photo=="anonyme.png")
                    <img width="100" height="100" src="{{asset('assets/img/6.png')}}" alt="" srcset="">

                    @else
                    <img width="100" height="100" src="{{asset('/storage/UserPhoto/'.$item->photo)}}" alt="" srcset="">

                    @endif
                    <h3>{{$item->name}}  </h3>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {!! $contribution->links() !!}
            </div>
            <div class="col-sm-6 col-lg-3 d-none">
                <div class="benefit-item">
                    <img width="100" height="100" src="{{asset('assets/img/anonymous-user.png')}}" alt="" srcset="">
                    <h3></h3>
                </div>
            </div>
            
            <div class="col-sm-6 col-lg-3 d-none">
                <div class="benefit-item four">
                    <img width="100" height="100" src="{{asset('assets/img/6.png')}}" alt="" srcset="">

                    <h3>Education facilities</h3>
                </div>
            </div>

            
        </div>
    </div>
</div>

@endsection