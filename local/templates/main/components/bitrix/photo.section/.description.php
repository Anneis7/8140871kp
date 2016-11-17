<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("IBLOCK_SECTION_TEMPLATE_NAME"),
	"DESCRIPTION" => GetMessage("IBLOCK_SECTION_TEMPLATE_DESCRIPTION"),
	"ICON" => "/images/photo_section.gif",
	"CACHE_PATH" => "Y",
	"SORT" => 20,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "photo",
			"NAME" => GetMessage("T_IBLOCK_DESC_PHOTO"),
			"SORT" => 20,
			"CHILD" => array(
				"ID" => "photo_cmpx",
			),
		),
	),
);

?>