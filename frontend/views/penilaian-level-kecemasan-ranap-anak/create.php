<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PenilaianLevelKecemasanRanapAnak $model */

$this->title = 'Create Penilaian Level Kecemasan Ranap Anak';
$this->params['breadcrumbs'][] = ['label' => 'Penilaian Level Kecemasan Ranap Anaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-level-kecemasan-ranap-anak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
