<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

function encode($string){
    $CI =& get_instance();
    $id = $CI->encryption->encrypt($string);
    $id = str_replace(['+','/'], ['==11==','==12=='], $id);
    return $id;
}

function decode($string){
    $CI =& get_instance();
    $id = str_replace(['==11==','==12=='], ['+','/'], $string);
    $id = $CI->encryption->decrypt($id);
    return $id;
}

function txt($string){
	return addslashes($string);
}

function dF($date, $format){
	return date($format, strtotime($date));
}

function selectall_menu_active($parent=NULL, $child=NULL){
    $CI =& get_instance();
    $CI->db->select('*');
    $CI->db->from('menus_admin');
    if($parent != NULL){
        $CI->db->where('parentMENU', 0);
    }
    if($child != NULL){
        $CI->db->where('parentMENU !=', 0);
    }
    
    $CI->db->where('statusMENU', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_category_active(){
    $CI =& get_instance();
    $CI->db->select('namaCATEGORY, statusCATEGORY');
    $CI->db->from('category_rental');
    $CI->db->where('statusCATEGORY', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_user_active(){
    $CI =& get_instance();
    $CI->db->select('*');
    $CI->db->from('users_admin');
    $CI->db->where('statusADMIN', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_category_trivia_active(){
    $CI =& get_instance();
    $CI->db->select('namaCATTRIVIA, statusCATTRIVIA');
    $CI->db->from('category_trivia');
    $CI->db->where('statusCATTRIVIA', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function selectall_category_sale_active(){
    $CI =& get_instance();
    $CI->db->select('namaCATSALE, statusCATSALE');
    $CI->db->from('category_sale');
    $CI->db->where('statusCATSALE', 1);

    $data = $CI->db->get()->result();
    return $data;
}

function folenc($id){
    $folenc = base64_encode($id);
    return strtolower($folenc);
}


function timeAgo($timestamp){

    $time = time() - $timestamp;

    if ($time < 60)
    return ( $time > 1 ) ? $time . ' detik yang lalu' : 'satu detik';

    elseif ($time < 3600) {
    $tmp = floor($time / 60);
    return ($tmp > 1) ? $tmp . ' menit yang lalu' : ' satu menit yang lalu';
    }

    elseif ($time < 86400) {
    $tmp = floor($time / 3600);
    return ($tmp > 1) ? $tmp . ' jam yang lalu' : ' satu jam yang lalu';
    }

    elseif ($time < 2592000) {
    $tmp = floor($time / 86400);
    return ($tmp > 1) ? $tmp . ' hari lalu' : ' satu hari lalu';
    }

    elseif ($time < 946080000) {
    $tmp = floor($time / 2592000);
    return ($tmp > 1) ? $tmp . ' bulan lalu' : ' satu bulan lalu';
    }

    else {
    $tmp = floor($time / 946080000);
    return ($tmp > 1) ? $tmp . ' years' : ' a year';
    }
}

function replacesymbol($string){
    return str_replace([' ','&',',','.','(',')','!','?'], ['','','','','','','',''], $string);
}

function seo_url($string){
    $change = str_replace([' ','&',',','.','(',')','!','?'], ['-','-','-','-','-','-','-','-'], $string);
    return strtolower($change);
}

function cutting($string=NULL){
    $replace = str_replace('-',' ', $string);
    $cut = substr($replace, 0, 4);
    return $cut;
}
function cetak($str){
    echo htmlentities($str, ENT_QUOTES, 'UTF-8');
}

function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
}

function chart_visitor_labels(){
    $CI =& get_instance();
    $CI->db->select('date_format(dateVISITOR, ("%d %b")) as date');
    $CI->db->from('visitor');
    $CI->db->group_by('dateVISITOR');
    $CI->db->limit(12);
    $data = $CI->db->get()->result();
    return json_encode($data);
}
function chart_visitor_series(){
    $CI =& get_instance();
    $CI->db->select('COUNT(ipVISITOR) as jumlah');
    $CI->db->from('visitor');
    $CI->db->group_by('dateVISITOR');
    $CI->db->limit(12);
    $data = $CI->db->get()->result();
    return json_encode($data);
}

function decoding_data($data=NULL){
    $replacing = array('[',']','"');
    $change_put = str_replace($replacing, "", $data);
    $data_explode = explode(',', $change_put);

    return $data_explode;
}

function select_accessmenu_by_menu($arr=NULL){
    $CI =& get_instance();
    $CI->db->select('menus_admin.accessMENU');
    $CI->db->from('menus_admin');
    //$CI->db->group_by('users_admin.accessMENU');
    if($arr != NULL){
        // foreach ($arr as $value) {
            $CI->db->where('menus_admin.accessMENU', $arr);
        // }
    }
    $data = $CI->db->get()->result();
    return $data;
}

function encodingdata($json=0, $type=0, $diberikanaward_about=0, $tahunaward_about=0){
    
    if($type == 0) {
        $jj = array();
        foreach ($json as $key => $value) {
            $jj[]=array($value, $diberikanaward_about[$key], $tahunaward_about[$key]);
        }
    } else {
        $jj = $json;
    }
    return json_encode($jj);
}

function select_row_about(){
    $CI =& get_instance();
    $CI->db->cache_on();
    $CI->db->select('*');
    $CI->db->from('about');
    $CI->db->where('idABOUT', 1);
    $CI->db->limit(1);
    $CI->db->order_by('idABOUT', 'asc');
    
    $data = $CI->db->get()->row();
    return $data;
}

function select_row_intro_news(){
    $CI =& get_instance();
    $CI->db->cache_on();
    $CI->db->select('*');
    $CI->db->from('intro_news');
    $CI->db->where('idINTRONEWS', 1);
    $CI->db->limit(1);
    $CI->db->order_by('idINTRONEWS', 'asc');
    
    $data = $CI->db->get()->row();
    return $data;
}

function get_thumbnail_from_youtube($link=NULL){
    if($link != NULL){
        // YouTube video url
        $videoURL = $link;
        $urlArr = explode("/",$videoURL);
        $urlArrNum = count($urlArr);
        // Youtube video ID
        $youtubeVideoId = $urlArr[$urlArrNum - 1];
        // Generate youtube thumbnail url
        $youtubeVideoId = str_replace(['watch','?','v='], ['','',''], $youtubeVideoId);
        $thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/hqdefault.jpg';
        // Display thumbnail image
        return $thumbURL;
    } else {
        return 'YOUTUBE VIDEO LINK - REQUIRED';
        exit;
    }

}