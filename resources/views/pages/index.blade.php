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
                    <div class="mt-3"> Tuyển dụng</div>
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
                            <div class="container">
                                <img src="{{asset($new->image)}}" alt="avatar"
                                     class="card-img-top img-avatar img-fluid" style="height: 15rem">
                            </div>
                            <div class="card-body" style="height: 15rem">
                                <p class="card-text">{{$new->created_at}}</p>
                                <h5 class="card-title">{{$new->title}}</h5>
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
