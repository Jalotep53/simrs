<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterMenolakAnjuranMedis $model */

$this->title = 'Create Master Menolak Anjuran Medis';
$this->params['breadcrumbs'][] = ['label' => 'Master Menolak Anjuran Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-menolak-anjuran-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
