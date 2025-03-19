<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SkpDetailPenilaian $model */

$this->title = 'Create Skp Detail Penilaian';
$this->params['breadcrumbs'][] = ['label' => 'Skp Detail Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skp-detail-penilaian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
