@extends('dashboard')
@section('admin')
<div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thêm/Sửa Sản Phẩm</h2>
            </div>
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Tên Sản Phẩm:</label>
                        <input type="text" name="id" value=" " hidden="true">
                        <input required="true" type="text" class="form-control" id="title" name="title" value=" ">
                    </div>
                    <div class="form-group">
                        <label for="price">Chọn Danh Mục:</label>
                        <select class="form-control" name="id_category" id="id_category">
                            <option>-- Lụa chọn danh mục --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Tình Trạng:</label>
                        <input style="text-transform: capitalize" class="form-control" name="status" id="status"
                            value=" "></input>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá Bán:</label>
                        <input required="true" type="number" class="form-control" id="price" name="price" value=" ">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Ảnh bìa:</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                    </div>

                    <tr>
                        <td align="right" class="ver-top"><label>Ảnh Kèm Theo:</label></td>
                        <td colspan="3">
                            <input id="album" class="form-control file" type="file" name="images[]"
                                data-max-file-count="15" accept="image/*" multiple="multiple">
                        </td>
                    </tr>

                    <div class="form-group">
                        <label for="content">Nội Dung:</label>
                        <textarea class="form-control" rows="5" name="content" id="content"></textarea>
                    </div>
                    <button class="btn btn-success">Lưu</button>
                </form>
            </div>
        </div>
    </div>
    @endsection