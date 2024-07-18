<?php
// require_once __DIR__ . "/admin/autoload/autoload.php";

?>

<?php

function get_lichsu_muahang($ma_khachhang) 
{
    $conn = mysqli_connect("localhost","root","","luanvan");
    mysqli_set_charset($conn,"utf8");
    
  $query = "SELECT masp, COUNT(*) AS luotmua  FROM chitietdonhang  WHERE code_donhang 
  IN (SELECT code_donhang FROM donhang JOIN users  WHERE donhang.makhachhang = users.id = ' . $ma_khachhang . ') GROUP BY masp";
  $result = mysqli_query($conn, $query);
  $lichsu_muahang = array();
  while ($row = mysqli_fetch_assoc($result)) 
  {
    $lichsu_muahang[$row['masp']] = $row['luotmua'];
  }
  mysqli_free_result($result);
  mysqli_close($conn);
  return $lichsu_muahang;
}

function cosine_similarity($vector_1, $vector_2) 
{
    $dot_sanpham = 0;
    foreach ($vector_1 as $key => $value) 
    { 
      if (array_key_exists($key, $vector_2)) 
      {
        $dot_sanpham += $value * $vector_2[$key];
      }
    }
    $giatri_1 = sqrt(array_sum(array_map(function($value) { return $value * $value; }, $vector_1)));
    $giatri_2 = sqrt(array_sum(array_map(function($value) { return $value * $value; }, $vector_2)));
    if ($giatri_1 * $giatri_2 == 0) 
    {
      return 0;
    } else 
    {
      return $dot_sanpham / ($giatri_1 * $giatri_2);
    }
  }

function goi_y_sanpham($ma_khachhang, $ma_sanpham) {
  $lichsu_user = get_lichsu_muahang($ma_khachhang);
  $lichsu_sanpham = get_lichsu_muahang($ma_sanpham);
  $similarity = cosine_similarity($lichsu_user, $lichsu_sanpham);
  $conn = mysqli_connect("localhost","root","","luanvan");
mysqli_set_charset($conn,"utf8");

$query = 'SELECT masp, COUNT(*) AS luotmua FROM chitietdonhang 
WHERE code_donhang IN 
(SELECT code_donhang FROM donhang WHERE makhachhang = ' . $ma_khachhang . ') 
AND masp <> ' . $ma_sanpham . ' GROUP BY masp ORDER BY luotmua DESC LIMIT 4';

$result = mysqli_query($conn, $query);
$sanpham_similar = array();
while ($row = mysqli_fetch_assoc($result)) {
  $query_sanpham = "SELECT * FROM sanpham WHERE id = '".$row['masp']."' " ;
  $result_sanpham = mysqli_query($conn, $query_sanpham);
  if ($san_pham = mysqli_fetch_assoc($result_sanpham)) {
    $san_pham['cosine_similarity'] = $similarity; // Thêm giá trị cosine similarity vào mỗi sản phẩm
    $sanpham_similar[] = $san_pham;
  }
}
usort($sanpham_similar, function($x, $y) {
    return $y['cosine_similarity'] <=> $x['cosine_similarity'];
  });

  return $sanpham_similar;
}