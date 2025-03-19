<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PengumumanEpasien $model */

$this->title = 'Create Pengumuman Epasien';
$this->params['breadcrumbs'][] = ['label' => 'Pengumuman Epasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengumuman-epasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
