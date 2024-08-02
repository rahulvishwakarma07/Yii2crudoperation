<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $product */

$this->title = 'Add Product';
?>
<div class="product-create">
    <div class="container">
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6">
                <div class="product-form mt-3 rounded p-4" style="box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <h1 class="bg-primary p-3 rounded mb-3 text-white fw-bold"><?= Html::encode($this->title) ?></h1>
                    
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($product, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($product, 'description')->textarea(['rows' => 6]) ?>
                    <?= $form->field($product, 'category')->textInput() ?>
                    
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Back', Yii::$app->request->referrer, ['class' => 'ms-5 btn btn-dark']) ?>
                    </div>
                    
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <!-- Image Section -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="text-center mb-3">
                    <?= Html::img(Url::to('@web/images/How-to-Add-a-Product-Image-on-Shopify-1024x512.png'), ['alt' => 'Product Image', 'class' => 'img-fluid rounded shadow-sm']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
