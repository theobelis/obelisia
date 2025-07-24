<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'ObelisIA'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Material Dashboard CSS -->
    <link href="https://demos.creative-tim.com/material-dashboard/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link href="<?php echo \ObelisIA\Router\MainRouter::url('assets/css/custom.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo \ObelisIA\Router\MainRouter::url('assets/css/admin-panel.css'); ?>">

</head>
<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">
