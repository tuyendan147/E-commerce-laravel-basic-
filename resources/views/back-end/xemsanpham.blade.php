<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>xemsanpham</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container"> 
 <div class="row"> 
  <h1 class="text-center">Bảng cơ sở dữ liệu mặc hàng</h1> 
  <div class="col-md-10 col-md-offset-1"> 
   <div class="panel panel-default panel-table"> 
    <div class="panel-heading"> 
     <div class="row"> 
      <div class="col col-xs-6"> 
       <h3 class="panel-title">Danh sách mặc hàng</h3> 
      </div> 
      <div class="col col-xs-6 text-right"> 
       <button type="button" class="btn btn-sm btn-primary btn-create" ><a href="{!!url('/them-san-pham')!!}">Thêm sản phẩm</a></button> 
      </div> 
     </div> 
    </div> 
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th><em class="fa fa-cog"></em>
        </th> 
        <th class="hidden-xs">Id</th> 
        <th>Tên</th> 
        <th>ảnh</th>
        <th>gia</th>
        <th>gia khuyen mai</th>
       </tr> 
      </thead> 
      <tbody>
        @foreach($sanpham as $xem)
        <tr> 
       <td align="center"><a class="btn btn-default" href="{!! url('sua-san-pham') !!}/{!! $xem->id !!}"><em class="fa fa-pencil"></em></a> 
        <a class="btn btn-danger" href="{!! url('xoa-san-pham') !!}/{!! $xem->id !!}"><em class="fa fa-trash"></em></a>
       </td> 
       <td class="hidden-xs">{!! $xem->id !!}</td> 
       <td>{!! $xem->tensanpham !!}</td> 
       <td><img src="{!! url('public/images/'.$xem->anh)!!}" width="50px" height="50px"></td>
       <td>{!! $xem->gia !!}</td>
       <td>{!! $xem->giakhuyenmai !!}</td>
      </tr> 
      @endforeach
      
  
     </tbody></table> 
    </div> 
    <div class="panel-footer"> 
     <div class="row"> 
      <div class="col col-xs-4">Trang 1 của 5 </div> 
      <div class="col col-xs-8"> 
       <ul class="pagination hidden-xs pull-right"> 
        <li><a href="#">1</a>
        </li> 
        <li><a href="#">2</a>
        </li> 
        <li><a href="">3</a>
        </li> 
        <li><a href="#">4</a>
        </li> 
        <li><a href="#">5</a>
        </li> 
       </ul> 
       <ul class="pagination visible-xs pull-right"> 
        <li><a href="#">«</a>
        </li> 
        <li><a href="#">»</a>
        </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </div>
</div>
</body>
</html>