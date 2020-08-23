<?php
require('functions/db_functions.php');
?>

<html lang="ru">

<!-- Подключил бутстрап на этой странице, чтобы быстренько накидать основные стили. -->

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<?php require('chunks/head.php'); ?>

<body>
  <?php require('chunks/popup_applicant.php'); ?>
  <?php require('chunks/popup_employer.php'); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-3 col-md-12">
        <?php require('chunks/header.php'); ?>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-3 col-sm-12">
        <ul>
          <li class="mb-3"><a href="?block=add-practice" class="btn btn-primary">Добавить практику</a></li>
          <li class="mb-3"><a href="?block=add-resume" class="btn btn-secondary">Добавить резюме</a></li>
          <li class="mb-3"><a href="?block=add-company" class="btn btn-info">Добавить компанию</a></li>
          <li class="mb-3"><a href="?block=add-category" class="btn btn-info">Добавить категорию</a></li>
        </ul>
        <hr>
        <ul>
          <li class="mb-1"><a href="?block=list-practices" class="btn btn-link">Практики</a></li>
          <li class="mb-1"><a href="?block=list-resume" class="btn btn-link">Резюме</a></li>
          <li class="mb-1"><a href="?block=list-company" class="btn btn-link">Компании</a></li>
          <li class="mb-1"><a href="?block=list-category" class="btn btn-link">Категории</a></li>
        </ul>
        <hr>
        <ul>
          <li class="mb-1"><a href="?block=responds_applicants" class="btn btn-link">Отклики соискателей</a></li>
          <li class="mb-1"><a href="?block=responds_employers" class="btn btn-link">Отклики работодателей</a></li>
        </ul>
      </div>
      <div class="col-lg-9 col-sm-12">
        <div class="content">
          <?php require('chunks/block_alert.php'); ?>


          <?php
          // !Сценарии управления практик.
          // Добавление практики.
          if ($_GET['block'] == 'add-practice') {
            require('chunks/block_add_practice.php');
          }
          // Просмотр списка практик.
          if ($_GET['block'] == 'list-practices') {
            require('chunks/block_output_list_practice.php');
          }
          // Просмотр и редактирование практики.
          if ($_GET['block'] == 'control-practice') {
            require('chunks/block_control_practice.php');
          }

          // !Сценарии управления компаний.
          // Добавление компании.
          if ($_GET['block'] == 'add-company') {
            require('chunks/block_add_company.php');
          }
          // Просмотр списка компаний.
          if ($_GET['block'] == 'list-company') {
            require('chunks/block_output_list_company.php');
          }
          // Просмотр и редактирование компании.
          if ($_GET['block'] == 'control-company') {
            require('chunks/block_control_company.php');
          }


          // !Сценарии управления категориями.
          // Добавление компании.
          if ($_GET['block'] == 'add-category') {
            require('chunks/block_add_category.php');
          }
          // Просмотр списка компаний.
          if ($_GET['block'] == 'list-category') {
            require('chunks/block_output_list_category.php');
          }
          // Просмотр и редактирование компании.
          if ($_GET['block'] == 'control-category') {
            require('chunks/block_control_category.php');
          }

          // !Сценарии управления резюме.
          // Добавление компании.
          if ($_GET['block'] == 'add-resume') {
            require('chunks/block_add_resume.php');
          }
          // Просмотр списка компаний.
          if ($_GET['block'] == 'list-resume') {
            require('chunks/block_output_list_resume.php');
          }
          // Просмотр и редактирование компании.
          if ($_GET['block'] == 'control-resume') {
            require('chunks/block_control_resume.php');
          }





          // !Сценарии откликов.
          // Просмотр откликов соискателей.
          if ($_GET['block'] == 'responds_applicants') {
            require('chunks/block_output_list_respond_applicant.php');
          }
          if ($_GET['block'] == 'responds_employers') {
            require('chunks/block_output_list_respond_employer.php');
          }

          // // Просмотр соискателя.
          // if ($_GET['block'] == 'resume') {
          //   require('chunks/block_view_only_applicant.php');
          // }

          // Просмотр резюме.
          if ($_GET['block'] == 'resume') {
            require('chunks/block_view_only_resume.php');
          }

          // Просмотр работодателя.
          if ($_GET['block'] == 'employer') {
            require('chunks/block_view_only_employer.php');
          }

          // Просмотр практики.
          if ($_GET['block'] == 'practice') {
            require('chunks/block_view_only_practice.php');
          }



          // Просмотр откликов работодателей.
          // if ($_GET['block'] == 'output_list_respond_applicant') {
          //   require('chunks/block_output_list_respond_applicant.php');
          // }


          // block_applicant_view.php

          ?>



          <?php
          // require('chunks/block_add_resume.php');
          ?>
          <?php // require('chunks/block_add_company.php');
          ?>


          <?php // require('chunks/block_output_list_resume.php');
          ?>
          <?php // require('chunks/block_output_list_company.php');
          ?>


          <?php // require('chunks/block_output_list_respond_employer.php');
          ?>

        </div>
      </div>
    </div>
  </div>
  <?php require('chunks/links_scripts.php'); ?>
</body>

</html>