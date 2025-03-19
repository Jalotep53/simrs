<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgDataTerkirimInternal $model */

$this->title = 'Create Inacbg Data Terkirim Internal';
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Data Terkirim Internals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inacbg-data-terkirim-internal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
