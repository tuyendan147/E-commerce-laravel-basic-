<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>themsanpham</title>
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/styleback.css') !!}">
</head>
<body>
	<form action="{!! url('add-san-pham') !!}" method="post">
      {!! csrf_field() !!}
		<h1>BẢNG THÊM SẢN PHẨM</h1><br>
         <ul>
         <li>Danh Mục <select name="TenDanhMuc">
            @foreach($DanhMucs as $row)
            <option value="{!! $row->id !!}">{!! $row->tendanhmuc !!}</option>
            @endforeach
         </select></li><br>
         <li>Tên: <input type="text" value="" size="30" name="TenSanPham" /></li><br>
         <li>Ảnh: <input type="text" value="" size="10" name="AnhSanPham" /></li><br>
         <li>Mo Ta: <input type="text" value="" size="10" name="MoTa" /></li><br>
         <li>Giá: <input type="text" value="" size="10" name="GiaSanPham" /></li><br>
         <li>Giá khuyễn mãi: <input type="text" value="" size="10" name="GiaKhuyenMai" /></li><br>
         
         </ul>
         <p><input type="submit" value="OK" /></p>
     </form>
</body>
</html>