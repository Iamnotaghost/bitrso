<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if(!empty($arResult["ITEMS"])):?>
<section class="partners">
  <div class="partners-inner">
    <h2 class="section-title">С нами работают</h2>
    <div class="partners-grid">
      <?foreach($arResult["ITEMS"] as $arItem):?>
      <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"] ?? "#"?>" class="partner-card" target="_blank">
        <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
          <img class="partner-logo" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
        <?else:?>
          <div class="partner-logo" style="font-family:'Oswald',sans-serif; font-size:24px; font-weight:700;">
            <?=$arItem["NAME"]?>
          </div>
        <?endif;?>
        <div class="partner-name"><?=$arItem["NAME"]?></div>
      </a>
      <?endforeach;?>
    </div>
    <div class="partners-nav">
      <div class="partner-arrow">◀</div>
      <div class="partner-arrow">▶</div>
    </div>
  </div>
</section>
<?endif;?>
