<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterTunjanganBulanan $model */

$this->title = 'Create Master Tunjangan Bulanan';
$this->params['breadcrumbs'][] = ['label' => 'Master Tunjangan Bulanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-tunjangan-bulanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
