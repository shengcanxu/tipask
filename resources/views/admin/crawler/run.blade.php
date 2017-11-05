@extends('admin/public/layout')

@section('title')
    运行爬虫
@endsection

@section('content')
    <section class="content-header">
        <h1>
            运行爬虫
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <span style="font-size: large"> 爬虫运行中...</span>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        set_active_menu('crawler',"{{ route('admin.crawler.index') }}");
    </script>
@endsection