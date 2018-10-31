@extends('admin/common')

@section('title', 'jinono')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @foreach($list as $class_name=>$data)
                <div class="box" data-id="{{current($data)['id']}}">
                    <div class="box-header">
                        <h3 class="box-title">{{$class_name}}</h3>
                        <input type="text" name="c_name" class="form-control" value="{{current($data)['c_name']}}">
                        <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        <table class="table table-striped">
                            <tbody>
                            <tr>
                                <th>方法别名</th>
                                <th>控制器.方法</th>
                                <th>描述</th>
                                <th>可见</th>
                            </tr>
                            @foreach($data as $d)
                                <tr data-id="{{$d['id']}}">
                                    <td><input type="text" name="name" class="form-control" value="{{$d['m_name']}}"></td>
                                    <td>{{$d['slug']}}</td>
                                    <td><input type="text" name="description" class="form-control"
                                               value="{{$d['description']}}"></td>
                                    <td><input type="text" name="view" class="form-control" value="{{$d['view']}}"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
    </div>

    <script>
        $('.form-control').blur(function () {
            var id = $(this).parent().parent().attr('data-id');
            var c_name = $(this).parent().find('input[name="c_name"]').val();
            var m_name = $(this).parent().find('input[name="m_name"]').val();
            var description = $(this).parent().find('input[name="description"]').val();
            var view = $(this).parent().find('input[name="view"]').val();

            $.ajax({
                type: 'POST',
                url: '{{url(ADMIN_URI.'/Auth.upMenu')}}',
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                    'c_name': c_name,
                    'm_name': m_name,
                    'description': description,
                    'view': view,
                },
                success: function (d) {
                    if(d.code == 0){

                    }
                }
            });
        });
    </script>
@stop