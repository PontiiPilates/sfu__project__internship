<?php

<<<<<<< HEAD
// $output = db_output_all("SELECT * FROM `practices`");

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

$category = $_GET['category'];

if ($category) {
  $sql = "SELECT * FROM practices WHERE category_id = '$category' ORDER BY `timestamp` DESC";
} else {
  $sql = "SELECT * FROM practices ORDER BY `timestamp` DESC";
}

$output = db_output_all($sql);

=======
$output = db_output_all("SELECT * FROM `practices`");
// echo '<pre>';
// print_r($output);
// echo '</pre>';

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8


?>

<<<<<<< HEAD
=======

>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
<?php foreach ($output as $k) : ?>

  <?php
  $company_id = $k['company_id'];
  $company_output = db_output_once("SELECT * FROM `companys` WHERE id = '$company_id'");
  ?>

  <div class="app-block">
    <div class="app-content">
      <div class="app-data">
        <h3 class="app-head"><?php print $k['title']; ?></h3>
        <div class="app-features">
<<<<<<< HEAD
          <div class="app-feature">
            <?php print $k['features']; ?>
          </div>
          <!-- <div class="app-feature">Востребованно у студентов</div> -->
        </div>
        <div class="app-desc app-desc-small">
          <?php print short_description($k['description']); ?>
=======
          <div class="app-feature"><?php print $k['features']; ?></div>
          <!-- <div class="app-feature">Востребованно у студентов</div> -->
        </div>
        <div class="app-desc app-desc-small"><?php print $k['description']; ?><span class="app-desc-full-toggle">Читать&nbsp;полностью</span>
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
        </div>
        <div class="app-desc app-desc-full">
          <p class="app-desc-p"><?php print $k['description']; ?></p>
        </div>
      </div>
      <div class="app-company">
        <div class="app-company-logo">
          <img width="50" src="/img/company_logo/<?php print $company_output['logotip']; ?>" alt="<?php print $company_output['name']; ?>"></div>
        <div class="app-company-all"><?php print $company_output['name']; ?></div>
      </div>
    </div>
<<<<<<< HEAD

    <?php require('chunks/block_admin_data_applicant.php'); // Блок с информацией о практике для админа ?>

    <div class="button button-primary respond-practice" id="<?php print $k['id']; ?>" item-title="<?php print $k['title']; ?>">
=======
    <div class="button button-primary respond-practice" id="<?php print $k['id']; ?>">
>>>>>>> ab65ae6473a2cb39871bc09dcc4649980d8535d8
      <img class="button-icon" src="img/add.svg" alt="Добавить">
      <div class="button-content">Откликнуться</div>
    </div>
    <!-- <div class="button button-done">
    <img class="button-icon" src="img/done.svg" alt="Заявка отправлена">
    <div class="button-content">Заявка отправлена</div>
  </div> -->
  </div>

<?php endforeach; ?>