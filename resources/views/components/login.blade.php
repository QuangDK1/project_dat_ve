<div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="myform bg-dark">
                <h1 class="text-center">Đăng nhập</h1>
                <form action="{{URL::to('/index')}}" id="formlogin" method="post">
                    @csrf
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name ="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" name ="Password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3" style= "color:red;font-weigh:500px">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo $message;
                            Session::put('message',null);
                        }
                        ?>
                    </div>
                    
                    <button type="submit" class="btn btn-light mt-3">Đăng nhập</button>
                    <p>Không phải thành viên? <a href="{{ route('dangky') }}">Đăng ký ngay</a></p>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>
