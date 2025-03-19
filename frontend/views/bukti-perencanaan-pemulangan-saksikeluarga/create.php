<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\BuktiPerencanaanPemulanganSaksikeluarga $model */

$this->title = 'Create Bukti Perencanaan Pemulangan Saksikeluarga';
$this->params['breadcrumbs'][] = ['label' => 'Bukti Perencanaan Pemulangan Saksikeluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bukti-perencanaan-pemulangan-saksikeluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
