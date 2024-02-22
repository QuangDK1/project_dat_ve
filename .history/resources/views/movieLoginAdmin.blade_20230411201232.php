<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    .modal-container {
        width: 600px;
        height: 300px;
        background-color: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 40px;
        border-radius: 5px;
    }

    .model-close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 10px;
        font-size: 20px;
        color: #d38566;
    }

    .model-close:hover {
        background-color: #d38566;
        color: #fff;
    }

    .modal-login h3 {
        font-size: 1.25em;
        margin: 0;
        color: #66CC00;
    }

    .form-login {
        margin-top: 20px;
    }

    .form-login form label {
        font-size: 12px;
        font-weight: 700;
    }

    .form-login form input {
        display: block;
    }

    .info-user input {
        width: 100%;
        padding: 5px;
        outline: none;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    .remember {
        display: flex;
        margin-bottom: 10px;
    }

    .form-login button {
        margin-top: 30px;
        background-color: #66CC00;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-weight: 700;
        cursor: pointer;
        margin-bottom: 10px;
        border-radius: 3px;
        float: right;

    }

    .support-form {
        display: flex;
        justify-content: space-between;
    }

    .forget-password {
        text-decoration: none;
        color: #d38566;
        font-size: 15px;
        padding: 10px;
    }

    .forget-password:hover {
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .user {
        border: none;
        background-color: #d38566;
        color: #fff;
        margin-bottom: 18px;
        margin-left: 10px;
    }

    .support-form p a {
        display: flex;
        justify-content: space-between;
    }

    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: rgba(209, 189, 189, 0.1);
        font-family: "Montserrat", sans-serif;
    }

    header {
        background-color: #d38566;
        width: 100%;
        text-align: center;
    }

    header img {
        width: 180px;
        text-align: center;
        padding: 10px;
    }

    a {
        text-decoration: none;
    }

    .error {
        color: red;
        font-family: verdana, Helvetica;
    }
    </style>
</head>

<body>
    <div class="modal js-modal">
        <div class="modal-container">
            <div class="model-close js-modal-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="modal-login">
                <h3>ĐĂNG NHẬP ADMIN</h3>
            </div>
            <div class="form-login">
                <form action=" " id="formlogin">
                    <div class="info-user">
                        <label for="input-account">Tên tài khoản *</label>
                        <input type="text" id="input-account" name="username" />
                        <p><label for="input-password">Mật khẩu *</label></p>
                        <input type="password" id="input-password" name="password" />
                        <button type="submit">ĐĂNG NHẬP</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>