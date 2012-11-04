<?php
switch (addslashes($frame)){
        case "gioi_thieu"   : include("modules/about_us.php");break;
        case "dich_vu"      :  
            if(!$frame2){                
                include("modules/services/services.php");break;            
            }else{              
                switch (addslashes($frame2)){
                    case "thiet_ke_web" : 
                        if(!$frame3){                
                            include("modules/services/web_design/web_design.php");break;    
                        }else{   
                            switch (addslashes($frame3)){
                                case "web_batdongsan"           : include("modules/services/web_design/web_batdongsan.php");break;
                                case "web_nhahang_khachsan"     : include("modules/services/web_design/web_nhahang_khachsan.php");break;
                                case "web_dichvu_dulich"        : include("modules/services/web_design/web_dichvu_dulich.php");break;
                                case "web_tochuc_doanhnghiep"   : include("modules/services/web_design/web_tochuc_doanhnghiep.php");break;
                                case "web_thuongmai"            : include("modules/services/web_design/web_thuongmai.php");break;
                                case "web_thuongmai"            : include("modules/services/web_design/web_thuongmai.php");break;
                                case "web_giaoduc"              : include("modules/services/web_design/web_giaoduc.php");break;
                                case "web_tintuc"               : include("modules/services/web_design/web_tintuc.php");break;                                
                            }
                        }break;
                    case "thiet_ke_quang_cao" :
                        if(!$frame3){                
                            include("modules/services/adv_design/adv_design.php");break;   
                        }else{   
                            switch (addslashes($frame3)){
                                case "quang_cao" : include("modules/services/adv_design/quang_cao.php");break;
                                case "in_an"     : include("modules/services/adv_design/in_an.php");break;
                            }
                        }break;
                    case "seo_sem" :
                        if(!$frame3){                
                            include("modules/services/seo_sem/seo_sem.php");break;   
                        }else{   
                            switch (addslashes($frame3)){
                                case "tu_van" : include("modules/services/seo_sem/tu_van.php");break;
                                case "dv_seo" : include("modules/services/seo_sem/dv_seo.php");break;
                                case "dv_sem" : include("modules/services/seo_sem/dv_sem.php");break;
                            }
                        }break;
                    case "giai_phap_phan_mem"       :
                        if(!$frame3){                
                            include("modules/services/sw_solution/sw_solution.php");break;   
                        }else{   
                            switch (addslashes($frame3)){
                                case "web_dich_vu"      : include("modules/services/sw_solution/web_dich_vu.php");break;
                                case "web_ung_dung"     : include("modules/services/sw_solution/web_ung_dung.php");break;
                                case "dien_toan_dam_may": include("modules/services/sw_solution/dien_toan_dam_may.php");break;
                            }
                        }break;
                    case "xay_dung_thuong_hieu"     :
                        if(!$frame3){                
                            include("modules/services/brand_build/brand_build.php");break;   
                        }else{   
                            switch (addslashes($frame3)){
                                case "nhan_dang_thuong_hieu": include("modules/services/brand_build/nhan_dang_thuong_hieu.php");break;
                                case "marketing_online"     : include("modules/services/brand_build/marketing_online.php");break;
                            }
                        }break;
                    case "domain_hosting_server"    : 
                        if(!$frame3){                
                            include("modules/services/domain_hosting_server/domain_hosting_server.php");break;
                        }else{   
                            switch (addslashes($frame3)){
                                case "domain"   : include("modules/services/domain_hosting_server/domain.php");break;
                                case "server"   : include("modules/services/domain_hosting_server/server.php");break;
                                case "hosting"  : include("modules/services/domain_hosting_server/hosting.php");break;
                            }
                        }break;
                }                
            }break;
        case "tin_tuc"      :  
            if(!$frame2){                
                include("modules/news/news.php");break;            
            }else{                
                if(!$frame3){                
                    include("modules/news/khuyen_mai/khuyen_mai.php");break;
                }else{   
                    switch (addslashes($frame3)){
                        case "khuyen_mai_web"   : include("modules/news/khuyen_mai/khuyen_mai_web.php");break;
                        case "khuyen_mai_seo"   : include("modules/news/khuyen_mai/khuyen_mai_seo.php");break;
                    }
                }break;
            }break;        
        case "tai_sao_ban_nen_chon_chung_toi"     : include("modules/why_choose_us.php");break;
        case "bao_hanh"     : include("modules/warranty.php");break;
	case "lien_he"      : include("modules/contact.php");break;
	case "home"         : include("modules/home/home.php");break;
	default             : include("modules/home/home.php");break;



}

?>