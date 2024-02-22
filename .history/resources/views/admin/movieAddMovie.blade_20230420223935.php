@extends('dashboard')
@section('admin')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Thêm Phim</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{URL::to('/save-Movie')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Tên Phim:</label>

                    <input required="true" name="TenPhim" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="price">Chọn Danh Mục:</label>
                    <select class="form-control" name="id_category" id="id_category">
                        <option>-- Lụa chọn danh mục --</option>
                        <?php
              $sql          = 'select * from category';
              $categoryList = executeResult($sql);

              foreach ($categoryList as $item) {
                if ($item['id'] == $id_category) {
                  echo '<option selected value="' . $item['id'] . '">' . $item['name'] . '</option>';
                } else {
                  echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                }
              }
              ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Thời Lượng:</label>

                    <input required="true" name="ThoiLuong" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">
                    <label for="name">Mô Tả:</label>

                    <input required="true" name="ThoiLuong" type="text" class="form-control" id="title" name="title"
                        value=" ">
                </div>
                <div class="form-group">

                    <label for="name">Ảnh Kèm Theo:</label>

                    <input id="album" class="form-control file" type="file" name="HinhAnh[]" data-max-file-count="15"
                        accept="image/*" multiple="multiple">


                </div>
                <button type="submit" name="add_Movie" class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection