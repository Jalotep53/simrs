<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PiutangPasien $model */

$this->title = 'Create Piutang Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Piutang Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="piutang-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
