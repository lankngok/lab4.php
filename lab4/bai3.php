<?php
  function _image($link, $width, $height){
    echo "<img src='$link' width='$width' height='$height' alt='$link' />";
  }

  echo _image("https://file.vfo.vn/hinh/2016/08/hinh-anh-dep-ve-rau-cu-qua-13.jpg", "400px", "800px")
?>