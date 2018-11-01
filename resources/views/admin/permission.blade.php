@extends('admin/common')

@section('title', 'jinono')

@section('content')

    <h3>{{$role['name']}}</h3>
    @foreach($permissions as $controller =>$permission)
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{$controller}}</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            @foreach($permission as $p)
                            <div class="btn btn-default btn-flat">
                                <input type="checkbox" data-permission-id="{{$p['id']}}" class="checkbox-inline" @if($p['isset'])checked="checked"@endif>
                                {{$p['slug']}}
                            </div>
                            @endforeach
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach

    <script>
        $('input').click(function () {
            requestEvent.url = '{{url(ADMIN_URI.'/Auth.roleBindUser')}}';

            var role_id =
            var permission_id = $(this).attr('data-permission-id');
            requestEvent.data = [];
            requestEvent.apply();

        });


    </script>
@stop