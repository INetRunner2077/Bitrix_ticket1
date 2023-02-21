<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
//print_r('<pre>'.$arResult['NEWS']. '<pre' );
$Price = [];
foreach ($arResult['NEWS'] as $news) {

    foreach ($news['PRODUCTS'] as $price ) {
        $Price[] = $price['PROPERTY_PRICE_VALUE'];
    }

}
$arResult['maxprice'] = max($Price);
$arResult['minprice'] = min($Price);

$this->__component->SetResultCacheKeys(array('maxprice', 'minprice'));
?>

