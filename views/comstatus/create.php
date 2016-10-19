<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comstatus */

$this->title = 'สร้างสถานะคอมพิวเตอร์';
$this->params['breadcrumbs'][] = ['label' => 'Comstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
