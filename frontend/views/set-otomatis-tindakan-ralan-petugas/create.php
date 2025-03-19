<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SetOtomatisTindakanRalanPetugas $model */

$this->title = 'Create Set Otomatis Tindakan Ralan Petugas';
$this->params['breadcrumbs'][] = ['label' => 'Set Otomatis Tindakan Ralan Petugas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="set-otomatis-tindakan-ralan-petugas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
