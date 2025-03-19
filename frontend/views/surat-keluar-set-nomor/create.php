<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\SuratKeluarSetNomor $model */

$this->title = 'Create Surat Keluar Set Nomor';
$this->params['breadcrumbs'][] = ['label' => 'Surat Keluar Set Nomors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keluar-set-nomor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
