<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\MasterBerkasDigital $model */

$this->title = 'Create Master Berkas Digital';
$this->params['breadcrumbs'][] = ['label' => 'Master Berkas Digitals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-berkas-digital-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
