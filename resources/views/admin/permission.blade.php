@extends('admin/common')

@section('title', 'jinono')

@section('content')

    @foreach($permissions as $permission)
        <div class="box">
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>id</th>
                        <th>名称</th>
                        <th>操作</th>
                    </tr>
                    <tr>
                        <td>{{$permission['id']}}</td>
                        <td>{{$role['name']}}</td>
                        <td>
                            <a href="" type="button" class="btn btn-default btn-xs">绑定用户</a>
                            <a href="" type="button" class="btn btn-default btn-xs">权限设置</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach

@stop