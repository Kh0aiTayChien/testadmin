@extends('layouts.master')
@section('content')

    <div class="banner-container">
        <img class="img-fluid img-responsive banner mt-4 w-100  " src="{{asset('images/banner-01.png')}}" alt="banner">
        <div class="text-banner h2">TIN TỨC</div>
        <div class="text-banner text-mini h3"> Trang chủ / Tin tức</div>
    </div>
    <div class="content">
        <div class="side-content ">
            <div class="box-side-content">
                <div class="p-4">
                    <h4 class="font-size-medium"> DANH MỤC NỘI DUNG</h4>
                    <div class="mt-3"> Cẩm nang tri thức</div>
                    <div class="mt-3"> Sự kiện doanh nghiệp</div>
                    <div class="mt-3"> Tuyển dụng </div>
                </div>
            </div>
            <div>

            </div>
        </div>
        <div class="main-content ms-4">
            <h3> TIN TỨC </h3>
            <div class="row mt-4">
                @foreach($news as $new)
                    <div class="col-6">
                        <div class="card border-0" style="width: 100%;">
                            <img src="{{asset($new->image)}}" alt="banner" class="card-img-top" alt="">
                            <div class="card-body">
                                <p class="card-text">{{$new->created_at}}</p>
                                <h5 class="card-title">{{$new->title}}</h5>
{{--                                <p class="card-text">{!! $new->content !!}} </p>--}}
{{--                                <p class="card-text">{{ Str::limit($new->content, 100, '...') }} </p>--}}
{{--                                <p class="card-text">{{ strip_tags(Str::limit($new->content, 100, '...'),'<p>') }} </p>--}}
                                <p class="card-text">{!! Str::limit(strip_tags($new->content, '<p>'),100) !!}
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col-12 text-center">
                        {{ $news->links() }}
                    </div>
            </div>
        </div>
    </div>
    <script>

    </script>
@endsection
