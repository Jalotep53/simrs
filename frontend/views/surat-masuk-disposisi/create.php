<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratMasukDisposisi $model */

$this->title = 'Create Surat Masuk Disposisi';
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk Disposisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-disposisi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
