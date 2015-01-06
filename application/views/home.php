<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Tree Trail</title>

  <script src="<?= base_url("static/libs/webcomponentsjs/webcomponents.min.js"); ?>"></script>
  <link rel="import" href="<?= base_url("static/components/tree-map.html"); ?>">
  <link rel="import" href="<?= base_url("static/components/side-bar.html"); ?>">

  <link rel="stylesheet" href="<?= base_url('static/libs/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('static/libs/bootstrap/dist/css/bootstrap-theme.min.css'); ?>">

  <style>
    html, body {
      position:relative;
      width : 100%;
      height: 100%;
    }
  </style>

</head>
<body>

  <tree-map latitude="100" longitude="200"></tree-map>
  <!-- <side-bar></side-bar> -->

  <script src="<?= base_url('static/libs/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('static/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
