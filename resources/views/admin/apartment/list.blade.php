<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-3 header">
            <div class="col-md-3">
                <div class="ml-5">
                    <i class="fas fa-swimmer fa-5x"></i>
                </div>
                <div class="ml-5">
                    <span>Sweet Home</span>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <form class="form-inline">
                    <input type="text" class="form-control mr-3 w-75" placeholder="Gõ từ khoá và enter để tìm kiếm">
                    <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-md-3 mt-4">
                <i class="fas fa-user fa-2x mr-2"></i>(<a href="">Đăng xuất</a>)
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title float-left">Sweet Home</h5>
                <div class="clearfix"></div>
                <div class="row mt-3 mb-3 ml-1">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <label class="mr-3">Danh sách chung cư</label>
                            <select name="categoryId" class="form-control mr-3">
                                <option value="0">{{__('mymessage.all_category')}}</option>
                                @foreach($list_obj as $item)
                                    <option value="{{$item->id}}"{{$item->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Lọc" class="btn btn-outline-success">
                        </div>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="w-25">Tên chung cư</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Thông tin chung</th>
                        <th scope="col">Thông tin chi tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products_in_view as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>
                                <div class="card"
                                     style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item->image, array('width' => 70, 'height' => 70, 'crop' => 'fit'))}}'); background-size: cover; width: 77px; height: 60px">
                                </div>
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="/admin/product/{{$item -> id}}/edit">{{__('mymessage.edit')}}</a>&nbsp;&nbsp;
                                <a href="/admin/product/{{$item -> id}}">{{__('mymessage.delete')}}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row float-right mr-2">
                    {{$products_in_view->links()}}
                </div>
            </div>
        </div>
    </div>

</body>
</html>