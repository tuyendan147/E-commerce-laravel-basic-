<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>themsanpham</title>
	<link rel="stylesheet" type="text/css" href="{!! url('public/css/styleback.css') !!}">
</head>
<body>
   @foreach($sanpham as $rowsp)
	<form action="{!! url('edit-san-pham') !!}/{!! $rowsp->id !!}" method="post">
      {!! csrf_field() !!}
		<h1>BẢNG THÊM SẢN PHẨM</h1><br>
         <ul>
         <li>Danh Mục <select name="TenDanhMuc">
            @foreach($DanhMucs as $row)
            <option value="{!! $row->id !!}">{!! $row->tendanhmuc !!}</option>
            @endforeach
         </select></li><br>
         <li>Tên: <input type="text"  size="30" name="TenSanPham" value="{!! $rowsp->tensanpham !!}" /></li><br>
         <li>Ảnh: <input type="text"  size="10" name="AnhSanPham" value="{!! $rowsp->anh !!}" /></li><br>
         <li>Mo Ta: <input type="text"  size="10" name="MoTa" value="{!! $rowsp->mota !!}" /></li><br>
         <li>Giá: <input type="text"  size="10" name="GiaSanPham" value="{!! $rowsp->gia !!}" /></li><br>
         <li>Giá khuyễn mãi: <input type="text"  size="10" name="GiaKhuyenMai" value="{!! $rowsp->giakhuyenmai !!}" /></li><br>
         
         </ul>
         <p><input type="submit" value="OK" /></p>
     </form>
     @endforeach
</body>
</html>