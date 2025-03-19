<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetUrutNoRkmMedis $model */

$this->title = 'Create Set Urut No Rkm Medis';
$this->params['breadcrumbs'][] = ['label' => 'Set Urut No Rkm Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-urut-no-rkm-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
