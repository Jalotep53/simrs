<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratBebasTbc $model */

$this->title = 'Create Surat Bebas Tbc';
$this->params['breadcrumbs'][] = ['label' => 'Surat Bebas Tbcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-bebas-tbc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
