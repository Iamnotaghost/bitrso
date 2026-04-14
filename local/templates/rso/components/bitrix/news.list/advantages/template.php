<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if(!empty($arResult["ITEMS"])):?>
<section class="advantages">
  <div class="advantages-grid">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="advantage-card">
      <div class="advantage-icon">
        <?if(!empty($arItem["DISPLAY_PROPERTIES"]["ICON"]["FILE_VALUE"]["SRC"])):?>
		  <img src="<?=$arItem["DISPLAY_PROPERTIES"]["ICON"]["FILE_VALUE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
        <?endif;?>
      </div>
      <div>
        <div class="advantage-title"><?=$arItem["NAME"]?></div>
        <?if(!empty($arItem["PREVIEW_TEXT"])):?>
          <p class="advantage-desc"><?=$arItem["PREVIEW_TEXT"]?></p>
        <?endif;?>
      </div>
    </div>
    <?endforeach;?>
  </div>
  <div class="advantages-actions">
    <a href="/join/" class="btn-yellow">Хочу вступить</a>
    <a href="/about/" class="link-underline">Узнать подробнее</a>
  </div>
</section>
<?endif;?>
