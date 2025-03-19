<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\UtdPengambilanMedis $model */

$this->title = 'Create Utd Pengambilan Medis';
$this->params['breadcrumbs'][] = ['label' => 'Utd Pengambilan Medis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utd-pengambilan-medis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
