<?php
  require "./config.php";

  if (isset($_GET['id'])) {
    $id = @$_GET['id'];

    if ($id != null && !empty($id) && is_numeric($id) && $id > 0) {
      $queryDetailTrip = "SELECT * FROM tbl_trip WHERE id = $id AND is_active = 'Iya' LIMIT 1";
      $querySchedule = "SELECT * FROM tbl_schedule WHERE id_trip = $id LIMIT 1";
      $queryItinerary = "SELECT * FROM tbl_itinerary WHERE id_trip = $id";
      $querySlider = "SELECT * FROM tbl_slider WHERE id_trip = $id ORDER BY sort ASC";

      $resultDetailTrip = mysqli_query($con, $queryDetailTrip) or die (mysqli_error($con));
      $resultSchedule = mysqli_query($con, $querySchedule) or die (mysqli_error($con));
      $resultItinerary = mysqli_query($con, $queryItinerary) or die (mysqli_error($con));
      $resultSlider = mysqli_query($con, $querySlider) or die (mysqli_error($con));

      $dataDetailTrip = mysqli_fetch_array($resultDetailTrip);
      $dataSchedule = mysqli_fetch_array($resultSchedule);
    } else {
      echo "<script>window.location='home.php';</script>";
    }
  }

  $queryProfile = "SELECT * FROM tbl_profile WHERE id = 1 LIMIT 1";
  $querySpecialTrip = "SELECT * FROM tbl_trip WHERE is_active = 'Iya' ORDER BY sort ASC LIMIT 3";
  $queryAllTrip = "SELECT * FROM tbl_trip WHERE is_asia = 'Tidak' AND is_active = 'Iya' ORDER BY sort ASC";
  $queryAsiaTrip = "SELECT * FROM tbl_trip WHERE is_asia = 'Iya' AND is_active = 'Iya' ORDER BY sort ASC";
  $queryMitra = "SELECT * FROM tbl_mitra";
  $querySosmed = "SELECT * FROM tbl_sosmed";
  $queryGalery = "SELECT * FROM tbl_galery";
  $queryReview = "SELECT * FROM tbl_review";

  $resultProfile = mysqli_query($con, $queryProfile) or die (mysqli_error($con));
  $resultMitra = mysqli_query($con, $queryMitra) or die (mysqli_error($con));
  $resultSpecialTrip = mysqli_query($con, $querySpecialTrip) or die (mysqli_error($con));
  $resultSosmed = mysqli_query($con, $querySosmed) or die (mysqli_error($con));
  $resultGalery = mysqli_query($con, $queryGalery) or die (mysqli_error($con));
  $resultAllTrip = mysqli_query($con, $queryAllTrip) or die (mysqli_error($con));
  $resultAsiaTrip = mysqli_query($con, $queryAsiaTrip) or die (mysqli_error($con));
  $resultReview = mysqli_query($con, $queryReview) or die (mysqli_error($con));

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
    } else if ($dataSosmed['id'] == 5) {
      $instagram_asia = $dataSosmed['account'];
      $name5 = $dataSosmed['name'];
    } else if ($dataSosmed['id'] == 6) {
      $instagram_trans = $dataSosmed['account'];
      $name6 = $dataSosmed['name'];
    }
  }

  function waFormat($a) {
    $b = str_replace('08', '628', $a);
    $b = str_replace(' ', '', $b);

    return $b;
  }

  function telpFormat($a) {
    $b = str_replace('08', '628', $a);
    $b = substr($b, 0, 2) . ' ' . substr($b, 2, 4) . ' ' . substr($b, 6, 4) . ' ' . substr($b, 10);

    return $b;
  }

  function numberFormat($a) {
    $b = preg_replace('/(\d{4})(?=\d)/', '$1 ', $a);

    return $b;
  }

  function footerFormat($a) {
    $b = strpos($a, '.');
    if ($b != false) {
      $a = substr($a, 0, $b + 1);
    }

    return $a;
  }

  function dateFormat($a) {
    $b = new DateTime($a);
    $c = $b->format('d M Y');

    return $c;
  }

  function priceFormat($a) {
    $b = number_format($a, 0, ',', '.');

    return $b;
  }
?>
