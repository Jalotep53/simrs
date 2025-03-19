<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\AngsuranKoperasi $model */

$this->title = 'Create Angsuran Koperasi';
$this->params['breadcrumbs'][] = ['label' => 'Angsuran Koperasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angsuran-koperasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
