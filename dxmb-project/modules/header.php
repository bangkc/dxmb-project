<!-- Header -->
<div id="header" class="clearfix">
    <div class="wrapper box-shadow">
        <div id="topmenu">
            <ul class="menu">
                <li><a href="#">mua bán</a></li>
                <li><a href="#">Mua bán nhà đất</a></li>
                <li><a href="#">Dự án</a></li>
                <li><a href="#">Chung cư</a></li>
                <li><a href="#">Căn hộ</a></li>
                <li><a href="#">Biệt thự</a></li>
                <li><a href="#">Giá rẻ</a></li>
                <li><a href="#">Bất động sản</a></li>
                <li><a href="#">Khu đô thị</a></li>
            </ul>
            <div class="keyword-search-holder">
                <input type="text" id="keyword-search-text" name="keyword-search-text" value="Search..." onfocus="this.value=''" onblur="this.value='Search...'"/>
                <input type="button" id="keyword-search-act" name="keyword-search-act" value="" />
            </div>
        </div>
        <div id="logo">
            <a href="./"><img src="images/logo-dxmb.png" alt="Đất xanh miền bắc"></a>
        </div>
        <div id="banner">
            <a href="./"><img src="data/banner.jpg" alt="Đất xanh miền bắc"></a>
        </div>
        <!-- Main Nav -->
        <div id="nav-wrapper">
            <ul>
                <li class="home-btn">
                    <a href="#" class="active"></a>
                </li>
                <li class="iceMenuLiLevel_1 parent">
                    <a href="#" class="iceMenuTitle mainMenuParentBtn mainParentBtn">
                        <span class="icemega_title">Dự án BĐS</span>
                        <span class="icemega_desc">Hot!</span>
                    </a>

                </li>
                <li class="iceMenuLiLevel_1 parent">
                    <a href="#" class="iceMenuTitle mainMenuParentBtn mainParentBtn">
                        <span class="icemega_title">Sàn BĐS</span>
                        <span class="icemega_desc">Hot!</span>
                    </a>

                </li>
                <li class="iceMenuLiLevel_1">
                    <a href="#" class=" iceMenuTitle">
                        <span class="icemega_title icemega_nosubtitle">Thương mại</span>
                    </a>

                </li>
                <li class="iceMenuLiLevel_1">
                    <a href="#" class=" iceMenuTitle">
                        <span class="icemega_title icemega_nosubtitle">Cẩm nang BĐS</span>
                    </a>

                </li>
                <li class="iceMenuLiLevel_1">
                    <a href="#" class=" iceMenuTitle">
                        <span class="icemega_title icemega_nosubtitle">Rao vặt</span>
                        <span class="icemega_desc">Free!</span>
                    </a>
                </li>
                <li class="iceMenuLiLevel_1">
                    <a href="#" class=" iceMenuTitle">
                        <span class="icemega_title icemega_nosubtitle">Tin tức</span>
                    </a>

                </li>
                <li class="iceMenuLiLevel_1">
                    <a href="#" class=" iceMenuTitle">
                        <span class="icemega_title icemega_nosubtitle">Hỏi đáp</span>
                    </a>

                </li>
            </ul>
        </div>
        <!-- Main Nav -->
        <!-- Search -->
        <div id="search-holder">
            <div class="col-1">
                <form action="./" method="post" name="ip_searchmod">
                    <div class="sale-type-holder">
                        <input type="radio" id="sale-type-1" name="sale-type" checked="checked" /> <label onclick="document.getElementById('sale-type-1').click();">Bán</label>
                        <span>&nbsp;&nbsp;&nbsp;</span>
                        <input type="radio" id="sale-type-2" name="sale-type" /> <label onclick="document.getElementById('sale-type-2').click();">Cho thuê</label>
                    </div>
                    <div>
                        <select id="cat" name="cat" class="inputbox">
                            <option value="" selected="selected">Loại BĐS</option>
                            <option value="7">Nhà mặt tiền</option>
                            <option value="6">Nhà liền kề</option>
                            <option value="5">Nhà trong ngõ</option>
                            <option value="4">Nhà biệt thự</option>
                            <option value="3">Đất sản xuất</option>
                            <option value="2">Đất thổ cư</option>
                            <option value="1">Đất dự án quy hoạch</option>
                        </select>
                    </div>
                    <div>
                        <select id="stype" name="stype" class="inputbox">
                            <option value="" selected="selected">Dự án</option>
                            <option value="2">Dự án 01</option>
                            <option value="4">Dự án 02</option>
                            <option value="1">Dự án 03</option>
                            <option value="5">Dự án 04</option>
                        </select>
                    </div>
                    <div>
                        <input id="search-act" name="search-act" class="button" value="Tìm kiếm" type="button" />
                    </div>
                    <div>
                        <select id="city" name="city" class="inputbox">
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
                    <div>
                        <select id="city" name="city" class="inputbox">
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
                    <div>
                        <select id="stype" name="stype" class="inputbox">
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
                    <div>
                        <select id="city" name="city" class="inputbox">
                            <option value="" selected="selected">Diện tích</option>
                            <option value="Boston">60m2</option>
                            <option value="Dana Point">70m2</option>
                            <option value="Huntington Beach">80m2</option>
                            <option value="Laguna Beach">90m2</option>
                            <option value="Laguna Niguel">100m2</option>
                            <option value="Miami">110m2</option>
                            <option value="Newport Beach">120m2</option>
                        </select>
                    </div>
                </form>                
            </div>
            <div class="col-2">
                <img src="images/hotline.png" alt="Hotline Contact" />
            </div>
        </div>
    </div>
</div>
