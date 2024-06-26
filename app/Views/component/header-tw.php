<?php

/**
 * Disini tempat header 
 * ---
 * Tempat menaruh link css, font, Khusus tailwind dll.. 
 */
?>

<!doctype html>
<html class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">

  <!-- icon Evergreen -->
  <link rel="icon" type="image/x-icon" href="<?= base_url('./image/favicon.ico') ?>">
  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- flowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

  <!-- local css -->
  <link rel="stylesheet" href="<?= base_url('./css/footer.css') ?>">

  <!-- Sisipkan stylesheet SweetAlert2 -->
  <link rel="stylesheet" href="path/to/sweetalert2.css">
  
  <script>
    tailwind.config = {
      darkMode : 'class',
      theme: {
        extend: {
          colors: {
            color1: '#F6E8EA',
            color2: '#2F2F2F',
            color3: '#C3F3C0',
            color4: '#7EE081',
            color5: '#4AD34F',
            pureBlack: '#141414',
          }
        }
      }
    }
  </script>

  <!-- footer.css | local -->
  <link rel="stylesheet" href="<?= base_url('./css/global.css') ?>">
  <link rel="stylesheet" href="<?= base_url('./css/footer.css') ?>">

  <!-- swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- title -->
  <title>Evergreen Library</title>
</head>

<body class="scrool-smooth">