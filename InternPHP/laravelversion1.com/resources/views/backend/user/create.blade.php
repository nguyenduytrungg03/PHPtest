@include('backend.dashboard.component.breadcrumd', ['title' => $config['seo']['create']['title']])

<form action="" method="">
    <div class="wraper wraper-content animated fadeInRight">
       <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">
                        Thông tin chung
                        <div class="panel-description">
                            <p>---- Nhập thông tin chung của người sử dụng -----</p>
                            <p>---- Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là những trường bắt buộc nhập ----</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-7">
                <div class="ibox">
                <div class="ibox-content">  
                    <div class="row mb15">
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Email
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input
                                 type="text"
                                 name="email"
                                 value=""
                                 class="form-control"
                                 planceholder=""
                                 autocomplete="off"
                                 >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Họ tên
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input
                                 type="text"
                                 name="email"
                                 value=""
                                 class="form-control"
                                 planceholder=""
                                 autocomplete="off"
                                 >
                            </div>
                        </div>
                    </div>
                    <div class="row mb15">
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Nhóm thành viên
                                    <span class="text-danger">(*)</span>
                                </label>
                                <select name="user_catalogue_id" id="" class="form-control">
                                    <option value="0">[Chọn nhóm thành viên]</option>
                                    <option value="1">Quản Trị Viên</option>
                                    <option value="2">Cộng tác viên</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Ngày sinh</label>
                                <input
                                 type="text"
                                 name="birthday"
                                 value=""
                                 class="form-control"
                                 planceholder=""
                                 autocomplete="off"
                                 >
                            </div>
                        </div>
                    </div>
                    <div class="row mb15">
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Mật khẩu
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input
                                 type="password"
                                 name="password"
                                 value=""
                                 class="form-control"
                                 planceholder=""
                                 autocomplete="off"
                                 >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Nhập lại password
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input
                                 type="password"
                                 name="re_password"
                                 value=""
                                 class="form-control"
                                 planceholder=""
                                 autocomplete="off"
                                 >
                            </div>
                        </div>
                    </div>
                    <div class="row mb15">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <label for="" class="control-label text-left">Ảnh đại diện</label>
                                <input
                                 type="text"
                                 name="image"
                                 value=""
                                 class="form-control"
                                 planceholder=""
                                 autocomplete="off"
                                 >
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                

            </div>
       </div>
       <hr>
       <div class="row">
        <div class="col-lg-5">
            <div class="panel-head">
                <div class="panel-title">
                    Thông tin liên hệ
                    <div class="panel-description">Nhập thông tin liên hệ của người sử dụng </div>
                </div>
            </div>

        </div>
        <div class="col-lg-7">
            <div class="ibox">
            <div class="ibox-content">
                <div class="row mb15">
                    <div class="col-lg-6">
                        <div class="form-row">
                            <label for="" class="control-label text-left">Thành phố</label>
                            <select name="province_id" class="form-control
                             setupSelect2 province" >
                                <option value="0">[Chọn thành phố]</option>
                                @if(isset($provinces))
                                    @foreach($provinces as $province)
                                        <option value="{{ $province->code }}">
                                            {{ $province->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-row">
                            <label for="" class="control-label text-left">Quận/Huyện</label>
                            <select name="district_id" class="form-control setupSelect2">
                                <option value="0">[Chọn Quận/Huyện]</option>
                            @if(isset($districts))
                                @foreach($districts as $district)
                                    <option value="{{ $district->code }}">{{
                                     $district->name }}</option>
                                @endforeach
                            @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb15">
                    <div class="col-lg-6">
                        <div class="form-row">
                            <label for="" class="control-label text-left">Phường/Xã</label>
                            <select name="ward_id" class="form-control setupSelect2">
                                <option value="0">[Chọn Phường/Xã]</option>
                            @if(isset($wards))
                                @foreach($wards as $ward)
                                    <option value="{{ $ward->code }}">
                                        {{ $ward->name }}
                                    </option>
                                @endforeach
                            @endif    
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-row">
                            <label for="" class="control-label text-left">Địa chỉ</label>
                            <input
                             type="text"
                             name="birthday"
                             value=""
                             class="form-control"
                             planceholder=""
                             autocomplete="off"
                             >
                        </div>
                    </div>
                </div>
                <div class="row mb15">
                    <div class="col-lg-6">
                        <div class="form-row">
                            <label for="" class="control-label text-left">Số điện thoại
                                <span class="text-danger">(*)</span>
                            </label>
                            <input
                             type="text"
                             name="phone_number"
                             value=""
                             class="form-control"
                             planceholder=""
                             autocomplete="off"
                             >
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-row">
                            <label for="" class="control-label text-left">Ghi chú
                                <span class="text-danger">(*)</span>
                            </label>
                            <input
                             type="password"
                             name="re_password"
                             value=""
                             class="form-control"
                             planceholder=""
                             autocomplete="off"
                             >
                        </div>
                    </div>
                </div>

            </div>
            </div>
            

        </div>
        </div>
       </div>
       <div class="text-right">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
       </div>

</form> 