@if($isModal === '1')
<div class="modal fade" id="{{ $idModal }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body py-4 px-4">
                <div class="text-center mb-3">
                    <img class="" src="https://www.kidsplaza.vn/blog/wp-content/uploads/2019/05/kidsplaza_logo_new.png" width="35%" height="auto" />
                </div>
                <div class="text-center text-secondary fs-6 mb-4">
                    {{ $idModal === 'registerModal' ? 'Nhập số thông tin bạn muốn đăng ký tài khoản' : 'Đăng nhập với tài khoản của bạn'}}
                </div>
                <form id="{{ $idModal === 'registerModal' ? 'registerForm' : 'loginForm' }}" class="form-info" >
                    @if($idModal === 'registerModal')
                    <div class="mb-4 box-input">
                        <label for="exampleInputUserName1" class="form-label">Username<sup class="text-danger fs-6">*</sup></label>
                        <input type="userName" name="username" placeholder="Vui lòng nhập username" class="form-control py-2" id="exampleInputUserName1" aria-describedby="userNameHelp">
                        <div class="usernameError text-danger form-text"></div>
                    </div>
                    @endif
                    <div class="mb-4 box-input">
                        <label for="exampleInputEmail1" class="form-label">Email<sup class="text-danger fs-6">*</sup> </label>
                        <input type="email" name="email" placeholder="Vui lòng nhập email" class="form-control py-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div class="emailError text-danger form-text"></div>
                    </div>
                    <div class="mb-4 box-input">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu<sup class="text-danger fs-6">*</sup></label>
                        <input type="password" name="password" placeholder="Vui lòng nhập mật khẩu" class="form-control py-2" id="exampleInputPassword1">
                        <div class="passwordError text-danger form-text"></div>
                    </div>
                    @if($idModal === 'loginModal')
                    <div class="d-flex justify-content-between mb-4 text-bule204" style="font-size:13px;">
                        <div>
                            <button class="registerModal text-bule204 cup border-0 bg-white" type="button" data-bs-toggle="modal" data-bs-target="#registerModal">Đăng ký</button>
                        </div>
                        <div>Quên mật khẩu</div>
                    </div>
                    @endif
                    <button type="submit" class="border bg-blue-61 w-100 py-3 text-white fs-6 fw-semibold rounded-3">
                        {{$idModal === 'registerModal' ? 'Đăng ký' : 'Đăng nhập'}}
                    </button>
                    @if($idModal === 'registerModal')
                    <div class="text-center ">
                        <div class="my-4 position-relative">
                            <div class="bg-white px-2 w-fit-content mx-auto">Hoặc</div>
                            <div class="position-absolute z-n1 w-100 h-1 border" style="top:12px;z-index:-1;"></div>
                        </div>
                        <div>
                            Bạn đã có tài khoản? 
                            <button class="loginModal text-bule204 fw-semibold cup border-0 bg-white" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">Hãy đăng nhập</button>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endif
