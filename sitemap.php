<?php
    header('Content-type: application/xml');
    echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
    echo "<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";
    echo " ";
    echo "<url>";
    echo "<loc>"."https://doctrip.id/trip.php"."</loc>";
    echo "<lastmod>".date('Y-m-d H:i:s')."</lastmod>";
    echo "<priority>1.00</priority>";
    echo "</url>";
    echo "<url>";
    echo "<loc>"."https://doctrip.id/asia.php"."</loc>";
    echo "<lastmod>".date('Y-m-d H:i:s')."</lastmod>";
    echo "<priority>1.00</priority>";
    echo "</url>";
    echo "<url>";
    echo "<loc>"."https://doctrip.id/trans.php"."</loc>";
    echo "<lastmod>".date('Y-m-d H:i:s')."</lastmod>";
    echo "<priority>1.00</priority>";
    echo "</url>";
    echo "<url>";
    echo "<loc>"."https://doctrip.id/about.php"."</loc>";
    echo "<lastmod>".date('Y-m-d H:i:s')."</lastmod>";
    echo "<priority>1.00</priority>";
    echo "</url>";
    echo "</urlset>";
?>