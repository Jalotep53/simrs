<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\ProsedurPasien $model */

$this->title = 'Create Prosedur Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Prosedur Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prosedur-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
