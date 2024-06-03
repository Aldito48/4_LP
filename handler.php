<?php
    require "./config.php";

    $id = @$_GET['id'];

    $queryProfile = "SELECT * FROM tbl_profile WHERE id = 1 LIMIT 1";
    $queryMitra = "SELECT * FROM tbl_mitra";
    $querySpecialTrip = "SELECT * FROM tbl_trip WHERE type = 'SPECIAL' LIMIT 3";
    $queryPromoTrip = "SELECT * FROM tbl_trip WHERE type = 'PROMO' LIMIT 3";
    $queryOpenTrip = "SELECT * FROM tbl_trip WHERE type = 'OPEN'";
    $querySosmed = "SELECT * FROM tbl_sosmed";
    $queryGalery = "SELECT * FROM tbl_galery LIMIT 5";

    if ($id !== null && !empty($id) && $id !== 0) {
      $queryDetailTrip = "SELECT * FROM tbl_trip WHERE id = $id LIMIT 1";
      $querySchedule = "SELECT * FROM tbl_schedule WHERE id_trip = $id LIMIT 1";
      $resultDetailTrip = mysqli_query($con, $queryDetailTrip) or die (mysqli_error($con));
      $resultSchedule = mysqli_query($con, $querySchedule) or die (mysqli_error($con));
      $dataDetailTrip = mysqli_fetch_array($resultDetailTrip);
      $dataSchedule = mysqli_fetch_array($resultSchedule);
    }

    $resultProfile = mysqli_query($con, $queryProfile) or die (mysqli_error($con));
    $resultMitra = mysqli_query($con, $queryMitra) or die (mysqli_error($con));
    $resultSpecialTrip = mysqli_query($con, $querySpecialTrip) or die (mysqli_error($con));
    $resultPromoTrip = mysqli_query($con, $queryPromoTrip) or die (mysqli_error($con));
    $resultOpenTrip = mysqli_query($con, $queryOpenTrip) or die (mysqli_error($con));
    $resultSosmed = mysqli_query($con, $querySosmed) or die (mysqli_error($con));
    $resultGalery = mysqli_query($con, $queryGalery) or die (mysqli_error($con));

    $dataProfile = mysqli_fetch_array($resultProfile);
    while ($dataSosmed = mysqli_fetch_array($resultSosmed)) {
        if ($dataSosmed['id'] == 1) {
            $tiktok = $dataSosmed['account'];
            $name1 = $dataSosmed['name'];
        } else if ($dataSosmed['id'] == 2) {
            $instagram = $dataSosmed['account'];
            $name2 = $dataSosmed['name'];
        } else if ($dataSosmed['id'] == 3) {
            $wa = $dataSosmed['account'];
            $name3 = $dataSosmed['name'];
        } else if ($dataSosmed['id'] == 4) {
            $wa_private = $dataSosmed['account'];
            $name4 = $dataSosmed['name'];
        }
    }

    function waFormat($a) {
      $b = str_replace('08', '628', $a);
      $b = str_replace(' ', '', $b);
  
      return $b;
    }

    function telpFormat($c) {
      $d = str_replace('08', '628', $c);
      $d = substr($d, 0, 2) . ' ' . substr($d, 2, 4) . ' ' . substr($d, 6, 4) . ' ' . substr($d, 10);
  
      return $d;
    }

    function numberFormat($e) {
      $f = preg_replace('/(\d{4})(?=\d)/', '$1 ', $e);
  
      return $f;
    }

    function footerFormat($g) {
      $h = strpos($g, '.');
      if ($h !== false) {
        $g = substr($g, 0, $h + 1);
      }
  
      return $g;
    }
?>