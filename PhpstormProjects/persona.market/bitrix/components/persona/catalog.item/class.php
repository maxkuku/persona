<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class CatalogItemComponent extends CBitrixComponent
{
	public function onPrepareComponentParams($params)
	{
		if (!empty($params['RESULT']))
		{
			$this->arResult = $params['RESULT'];
			unset($params['RESULT']);
		}

		if (!empty($params['PARAMS']))
		{
			$params += $params['PARAMS'];
			unset($params['PARAMS']);
		}
		
		return $params;
	}

	public function executeComponent()
	{
		$this->includeComponentTemplate();
	}


	/**
	 * Chooze feedbacks' rating and count for this product.
	 *
	 *
	 */


	public function choozeFeedback($id)
	{
		$filter = array("IBLOCK_ID" => "5", "=PROPERTY_FOR_WHAT" => $id);
		$items_sel =  (new CIBlockElement())->GetList([], $filter, 0, 0, ['ID', 'IBLOCK_ID', 'DETAIL_TEXT', 'PROPERTY_YOUR_RATING']);
		$arResult['ITEMS_SELECTED'] = $items_sel->SelectedRowsCount();
		$feed = 0;
		$items = 0;
		$feeds = array();
		if(!$arResult['ITEMS_SELECTED'])
			$feed[0] = "0 отзывов по товару";
		else
			while($item = $items_sel->Fetch()) {
				$items++;
				$feed += $item['PROPERTY_YOUR_RATING_VALUE'];
			}

		$rate = round($feed/$items);

		$feeds = array($rate,$items);

		return $feeds;
	}
}