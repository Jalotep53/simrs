<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\PemeriksaanObstetriRanap $model */

$this->title = 'Create Pemeriksaan Obstetri Ranap';
$this->params['breadcrumbs'][] = ['label' => 'Pemeriksaan Obstetri Ranaps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemeriksaan-obstetri-ranap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
