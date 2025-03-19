<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\RvpKlaimBpjs $model */

$this->title = 'Create Rvp Klaim Bpjs';
$this->params['breadcrumbs'][] = ['label' => 'Rvp Klaim Bpjs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rvp-klaim-bpjs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
