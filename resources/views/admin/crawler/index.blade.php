@extends('admin/public/layout')

@section('title')
    爬虫管理
@endsection

@section('content')
    <section class="content-header">
        <h1>
            爬虫列表
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body  no-padding">

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>爬虫ID</th>
                                        <th>爬虫名</th>
                                        <th>URL</th>
                                        <th>Class名</th>
                                        <th>操作</th>
                                    </tr>
                                    @foreach($crawlers as $crawler)
                                        <tr>
                                            <td>{{ $crawler->id }}</td>
                                            <td>{{ $crawler->name }}</td>
                                            <td>{{ $crawler->url }}</td>
                                            <td>{{ $crawler->classname }}</td>
                                            <td>
                                                <div class="btn-group-xs" >
                                                    <a class="btn btn-default" href="{{ route('admin.crawler.run',['id'=>$crawler->id]) }}">启动爬虫</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                    </div>

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