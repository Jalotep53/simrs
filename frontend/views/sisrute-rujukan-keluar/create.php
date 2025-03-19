<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SisruteRujukanKeluar $model */

$this->title = 'Create Sisrute Rujukan Keluar';
$this->params['breadcrumbs'][] = ['label' => 'Sisrute Rujukan Keluars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sisrute-rujukan-keluar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
