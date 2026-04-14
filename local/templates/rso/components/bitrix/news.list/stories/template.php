<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if(!empty($arResult["ITEMS"])):?>
<section class="stories">
  <div class="stories-inner">
    <h2 class="section-title">Вдохновляющие истории наших бойцов</h2>

    <div class="stories-slider" id="storiesSlider">
      <?foreach($arResult["ITEMS"] as $i => $arItem):?>
      <div class="story-card" data-slide="<?=$i?>" style="<?=($i > 0) ? 'display:none;' : ''?>">
        <?if(!empty($arItem["PREVIEW_PICTURE"]["SRC"])):?>
          <img class="story-photo" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
        <?endif;?>
        <div class="story-content">
          <div class="story-name"><?=$arItem["NAME"]?></div>
          <div class="story-hearts">❤️❤️❤️❤️❤️</div>
          <?if(!empty($arItem["PROPERTIES"]["ROLE"]["VALUE"])):?>
            <div class="story-role"><?=$arItem["PROPERTIES"]["ROLE"]["VALUE"]?></div>
          <?endif;?>
          <div class="story-text"><?=$arItem["PREVIEW_TEXT"]?></div>
        </div>
      </div>
      <?endforeach;?>
    </div>

    <div class="story-nav">
      <div class="story-arrow" onclick="changeStory(-1)">◀</div>
      <div class="story-dots">
        <?foreach($arResult["ITEMS"] as $i => $arItem):?>
          <div class="story-dot<?=($i === 0) ? ' active' : ''?>" onclick="goToStory(<?=$i?>)"></div>
        <?endforeach;?>
      </div>
      <div class="story-arrow" onclick="changeStory(1)">▶</div>
    </div>
  </div>
</section>

<script>
let currentStory = 0;
const totalStories = <?=count($arResult["ITEMS"])?>;

function goToStory(n) {
  document.querySelectorAll('.story-card').forEach(el => el.style.display = 'none');
  document.querySelectorAll('.story-dot').forEach(el => el.classList.remove('active'));
  currentStory = n;
  document.querySelector('.story-card[data-slide="' + n + '"]').style.display = 'flex';
  document.querySelectorAll('.story-dot')[n].classList.add('active');
}

function changeStory(dir) {
  let next = (currentStory + dir + totalStories) % totalStories;
  goToStory(next);
}
</script>
<?endif;?>
