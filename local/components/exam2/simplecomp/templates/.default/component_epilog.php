<?php
if((isset($arResult['maxprice'])) && (isset($arResult['minprice'] ))) {

    $infoTemplates = '<div style="color:red; margin: 34px 15px 35px 15px">#TEXT#</div>';
    $sText = GetMessage('MIN_PRICE').$arResult['minprice'].'</br> '.GetMessage('MAX_PRICE').$arResult['maxprice'];
    $FinalText = str_replace('#TEXT#', $sText, $infoTemplates );
    $APPLICATION->AddViewContent('prices', $FinalText);
}
