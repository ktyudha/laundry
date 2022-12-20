<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-capitalize font-weight-bold">
                    @if (Request::is('dashboard'))
                        dashboard
                    @elseif(Request::is('promo'))
                        promo
                    @elseif(Request::is('order'))
                        order
                    @elseif(Request::is('*/create', '*/create'))
                        create
                    @elseif(Request::is('*/edit', '*/edit'))
                        edit
                    @endif
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-capitalize active">
                        @if (Request::is('dashboard'))
                            dashboard
                        @elseif (Request::is('promo', 'promo/*'))
                            promo
                        @elseif(Request::is('carousel', 'carousel/*'))
                            carousel
                        @elseif(Request::is('order', 'order/*'))
                            order
                        @elseif(Request::is('post', 'post/*'))
                            post
                        @endif
                    </li>
                    @if (!Request::is('dashboard'))
                        <li class="breadcrumb-item text-capitalize active">
                            @if (Request::is('*/create'))
                                create
                            @elseif(Request::is('*/edit'))
                                edit
                            @else
                                all data
                            @endif
                        </li>
                    @endif
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
