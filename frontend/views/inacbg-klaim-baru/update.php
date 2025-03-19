<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\InacbgKlaimBaru $model */

$this->title = 'Update Inacbg Klaim Baru: ' . $model->no_sep;
$this->params['breadcrumbs'][] = ['label' => 'Inacbg Klaim Barus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_sep, 'url' => ['view', 'no_sep' => $model->no_sep]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inacbg-klaim-baru-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
