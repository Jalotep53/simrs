<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BahasaPasien $model */

$this->title = 'Create Bahasa Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Bahasa Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahasa-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
