<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?if(!empty($arResult["ITEMS"])):?>
<section class="directions">
  <div class="directions-inner">
    <h2 class="section-title">Направления наших отрядов</h2>
    <div class="directions-grid">
      <?foreach($arResult["ITEMS"] as $arItem):?>
      <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="direction-card">
        <div class="direction-icon">
          <?if(!empty($arItem["DISPLAY_PROPERTIES"]["ICON"]["FILE_VALUE"]["SRC"])):?>
            <img src="<?=$arItem["DISPLAY_PROPERTIES"]["ICON"]["FILE_VALUE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
          <?endif;?>
        </div>
        <div class="direction-title"><?=$arItem["NAME"]?></div>
        <?if(!empty($arItem["PREVIEW_TEXT"])):?>
          <p class="direction-desc"><?=$arItem["PREVIEW_TEXT"]?></p>
        <?endif;?>
      </a>
      <?endforeach;?>
    </div>
  </div>
</section>
<?endif;?>
