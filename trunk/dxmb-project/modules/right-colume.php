<!-- Right Column -->
<div id="right-column">
    <div class="col-module has-subtitle">
        <div class="col-module-suffix-">
            <div class="col-module-header" style="padding-left:5px">
                <style type="text/css">
                    h3.mod-title{background:url(images/iconcategory.png) no-repeat 0 0;text-indent:30px;}
                    h3.search{background:url(images/iconsearch.png) no-repeat 0 5px;text-indent:30px;}
                    h3.login{background:url(images/iconlogin.png) no-repeat 0 0;text-indent:30px;}
                    h3.chart{background:url(images/iconchart.png) no-repeat 0 0;text-indent:30px;}
                </style>
                <h3 class="mod-title search">
                    Tìm dự án<span>thuộc tính bất động sản</span>
                </h3>

            </div>
            <div class="col-module-content clearfix">
                <div class="ip_qsmod_holder">
                    <form action="./" method="post" name="ip_searchmod">
                        <div class="ip_qsmod">
                            <select id="cat" name="cat" class="inputbox" style="width: 160px;">
                                <option value="" selected="selected">Loại BĐS</option>
                                <option value="7">- Nhà mặt tiền</option>
                                <option value="6">- Nhà liền kề</option>
                                <option value="5">- Nhà trong ngõ</option>
                                <option value="4">- Nhà biệt thự</option>
                                <option value="3">- Đất sản xuất</option>
                                <option value="2">- Đất thổ cư</option>
                                <option value="1">- Đất dự án quy hoạch</option>
                            </select>
                        </div>
                        <div class="ip_qsmod">
                            <select id="stype" name="stype" class="inputbox" style="width: 160px;">
                                <option value="" selected="selected">Khoảng giá</option>
                                <option value="2">Thương lượng</option>
                                <option value="4">Dưới 5 triệu</option>
                                <option value="1">5 triệu - 20 triệu</option>
                                <option value="5">20 triệu - 100 triệu</option>
                                <option value="5">100 triệu - 500 triệu</option>
                                <option value="5">500 triệu - 1 tỷ</option>
                                <option value="5">1 tỷ - 2 tỷ</option>
                            </select>
                        </div>
                        <div class="ip_qsmod">
                            <select id="city" name="city" class="inputbox" style="width: 160px;">
                                <option value="" selected="selected">Tỉnh/Thành</option>
                                <option value="Boston">Hà nội</option>
                                <option value="Dana Point">Hồ Chí Minh</option>
                                <option value="Huntington Beach">Đà nẵng</option>
                                <option value="Laguna Beach">Nghệ An</option>
                                <option value="Laguna Niguel">Huế</option>
                                <option value="Miami">Vũ tàu</option>
                                <option value="Newport Beach">Nha trang</option>
                            </select>
                        </div>
                        <div class="ip_qsmod">
                            <select id="city" name="city" class="inputbox" style="width: 160px;">
                                <option value="" selected="selected">Quận/Huyện</option>
                                <option value="Boston">Ba Đình</option>
                                <option value="Dana Point">Hoàn Kiếm</option>
                                <option value="Huntington Beach">Đống Đa</option>
                                <option value="Laguna Beach">Hai Bà Trưng</option>
                                <option value="Laguna Niguel">Hoàng Mai</option>
                                <option value="Miami">Hà Đông</option>
                                <option value="Newport Beach">Long Biên</option>
                            </select>
                        </div>
                        <input onclick="return checkSearchMod()" class="button" value="Tìm kiếm"
                               type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-module ">
        <div class="col-module-suffix-style1">
            <div class="col-module-header">
                <h3 class="mod-title">Danh mục BĐS</h3>
            </div>
            <style type="text/css">
                #cat-left {
                    display:block;
                    list-style:none;
                    margin:0;
                    padding:0
                }
                #cat-left li {
                    background:url("images/iconhome.png") no-repeat scroll 0 5px transparent;
                    text-indent:25px;
                }
                #cat-left li.villa {
                    background:url("images/iconvilla.png") no-repeat;
                }
                #nhu-cau {
                    display:block;
                    list-style:none;
                    margin:0;
                    padding:0
                }
                #nhu-cau li {
                    list-style:none;
                    text-indent:25px;
                }
                #nhu-cau li.bye {
                    background:url("images/iconbye.png") no-repeat scroll 0 5px transparent;
                }
                #nhu-cau li.sale {
                    background:url("images/iconsale.png") no-repeat scroll 0 5px transparent;
                }
                #nhu-cau li.rent {
                    background:url("images/iconrent.png") no-repeat scroll 0 5px transparent;
                }
                #nhu-cau li.rented {
                    background:url("images/iconrented.png") no-repeat scroll 0 5px transparent;
                }
                .col-module {
                    box-shadow:3px 3px 10px #CCCCCC;
                }
            </style>
            <div class="col-module-content clearfix">
                <ul id="cat-left">
                    <li>
                        <a title="Nhà mặt tiền" href="danh-muc.html">Nhà mặt tiền</a>
                    </li>
                    <li>
                        <a title="Nhà trong hẻm" href="danh-muc.html">Nhà trong hẻm</a>

                    </li>
                    <li>
                        <a title="Villa - Biệt thự" href="danh-muc.html">Villa - Biệt thự</a>

                    </li>
                    <li>
                        <a title="Căn hộ cao cấp" href="danh-muc.html">Căn hộ cao cấp</a>

                    </li>
                    <li>
                        <a title="Căn hộ chung cư" href="danh-muc.html">Căn hộ chung cư</a>

                    </li>
                    <li>
                        <a title="Văn phòng cho thuê" href="danh-muc.html">Văn phòng cho thuê</a>

                    </li>
                    <li>
                        <a title="Đất dự án - quy hoạch" href="danh-muc.html">Đất dự án - quy hoạch</a>

                    </li>
                    <li>
                        <a title="Đất ở - Thổ cư" href="danh-muc.html">Đất ở - Thổ cư</a>

                    </li>
                    <li>
                        <a title="Khu công nghiệp" href="danh-muc.html">Khu công nghiệp</a>

                    </li>
                    <li>
                        <a title="Cửa hàng" href="danh-muc.html">Cửa hàng</a>

                    </li>
                    <li>
                        <a title="Nhà kho - Xưởng" href="danh-muc.html">Nhà kho - Xưởng</a>

                    </li>
                    <li>
                        <a title="Vật liệu xây dựng" href="danh-muc.html">Vật liệu xây dựng</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-module ">
        <div class="col-module-suffix-style1">
            <div class="col-module-header">
                <h3 class="mod-title">Nhu cầu BĐS</h3>
            </div>
            <div class="col-module-content clearfix">
                <ul id="nhu-cau">
                    <li class="bye">
                        <a title="Nhà mặt tiền" href="danh-muc.html">Cần mua</a>

                    </li>
                    <li class="sale">
                        <a title="Nhà mặt tiền" href="danh-muc.html">Cần bán</a>

                    </li>
                    <li class="rent">
                        <a title="Nhà mặt tiền" href="danh-muc.html">Cần thuê</a>

                    </li>
                    <li class="rented">
                        <a title="Nhà mặt tiền" href="danh-muc.html">Cho thuê</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-module ">
        <div class="col-module-suffix-">
            <div class="col-module-header">
                <h3 class="mod-title login">Đăng Nhập</h3>
            </div>
            <div class="col-module-content clearfix">
                <div style="position: relative;" class="ip_featuredmod_holder">
                    <form method="post" action="./">
                        <p>
                            <label class="" for="username" id="username-lbl">Tên đăng nhập</label>
                            <input type="text" size="23" class="validate-username"
                                   value="" id="username" name="username">
                            <label class="" for="password" id="password-lbl">Mật khẩu</label>
                            <input type="password" size="23" class="validate-password"
                                   value="" id="password" name="password">
                        </p>
                        <button class="button" type="submit">Đăng nhập</button>
                        <a href="dang-ky.html">Đăng ký</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-module">
        <div class="col-module-suffix-style1">
            <div class="col-module-header">

                <h3 class="mod-title">Dự án mới</h3>

            </div>
            <div class="rc22 rc22-entVip center_align">
                <div>
                    <a href="#">
                        <img width="175" height="119" src="http://batdongsan6688.com/images/product/01-11-2012/thumbs/product_Chung-Cu-Golden-Place-Khong-Gian-Sang-Tao_t147.jpg" alt="Khu đô thị dịch vụ sân bay - Blue Topaz" class="thumb_156x100">
                    </a>

                </div>
                <div class="prj_vip">
                    <a title="Khu đô thị dịch vụ sân bay - Blue Topaz" href="#">

                        Khu đô thị dịch vụ sân bay - Blue Topaz
                    </a>

                </div>
                <div class="line_separate"></div>
                <div>
                    <a href="#">                                        
                        <img width="175" height="119" src="http://batdongsan6688.com/images/product/16-09-2012/thumbs/product_Ban_Can_Ho_Chung_Cu_Cao_Cap_KeangNam_Gia_Chi_Voi_2100_USD_t135.jpg" alt="Khu đô thị Vĩnh Điềm Trung" class="thumb_156x100">

                    </a>

                </div>
                <div class="prj_vip">
                    <a title="Khu đô thị Vĩnh Điềm Trung" href="#">

                        Khu đô thị Vĩnh Điềm Trung
                    </a>

                </div>
                <div class="line_separate"></div>
                <div>
                    <a href="#">                                        
                        <img width="175" height="119" src="http://batdongsan6688.com/images/product/28-08-2012/thumbs/product_Ban_nha_phan_lo_Nga_Tu_So__12_3_Ty_t108.jpg" alt="Ha Do Park View" class="thumb_156x100">

                    </a>

                </div>
                <div class="prj_vip">
                    <a title="Ha Do Park View" href="#">

                        Ha Do Park View
                    </a>

                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .line_separate{border-top:1px dashed #D9D9D9;margin:10px 0;}
        .prj_vip a{line-height:15px;}
        #left-news{margin:0;padding:0;}
        #left-news li{list-style:circle;margin-left:15px;}
    </style>
    <div class="col-module">
        <div class="col-module-suffix-style1">
            <div class="col-module-header">
                <h3 class="mod-title">Tin tức BĐS</h3>
            </div>
            <div class="rc22 rc22-entVip center_align">
                <ul id="left-news">
                    <li> <a href="news-detail.html">Trong vòng 1 tháng có thể giải quyết hàng tồn kho</a></li>
                    <li> <a href="news-detail.html">Chung cư 10 triệu đồng/m2: Hãy để thị trường lên tiếng</a></li>
                    <li> <a href="news-detail.html">Cứu BĐS khác nào cứu "nhà giàu"?</a></li>
                    <li> <a href="news-detail.html">Tin tức dự án BĐS nổi bật tuần từ 22/10 đến 27/10</a></li>
                    <li> <a href="news-detail.html">Tổng kết thị trường BĐS tháng 10: "Cơn sốt" giảm giá</a></li>
                    <li> <a href="news-detail.html">Doanh nghiệp và ngân hàng "trần tình" về giá BĐS</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-module ">
        <div class="col-module-suffix-style2">
            <div class="col-module-header">

                <h3 class="mod-title chart">Thống kê</h3>

            </div>
            <div class="col-module-content clearfix">
                <p>Hiện có 2 người đang xem</p>
                <p>Tổng cộng: 45.000</p>
            </div>
        </div>
    </div>
</div>
<!-- Right Column -->
