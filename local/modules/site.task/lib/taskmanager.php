<?php
/**
 * Created by PhpStorm.
 * User: Annie
 * Date: 26.11.2016
 * Time: 22:56
 */
?>

<?php
namespace SITE\TASK;

use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;

Loc::loadMessages(__FILE__);

class TaskManager
{
    const IBLOCK_CODE_TASK = 'task';
    const IBLOCK_CODE_GROUPS = 'groups';

    public static function GetTask(
        $arOrder = array('SORT' => 'ASC'),
        $arFilter = array(),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = array('ID', 'NAME')
    )
    {
        $elements = array();
        //Получаем ID инфоблока Task по его символьному коду
        $rsIblock = \CIBlock::GetList(
            array(),
            array('CODE' => self::IBLOCK_CODE_TASK, 'SITE_ID' =>
                SITE_ID)
        );
        $arIblock = $rsIblock->GetNext();
        $arFilter['IBLOCK_ID'] = $arIblock['ID'];
        $rsElements = \CIBlockElement::GetList(
            $arOrder, //массив полей сортировки элементов и её направления
            $arFilter, //массив полей фильтра элементов и их значений
            $arGroupBy, //массив полей для группировки элементов
            $arNavStartParams, //параметры для постраничной навигации и ограничения количества выводимых элементов
            $arSelectFields //массив возвращаемых полей элементов
        );
        while ($arElements = $rsElements->Fetch()) {
            //Получение информации о файле с регламентом расчета показателя: ссылка на файл на сервере, название файла и т.д.
            foreach ($arElements['PROPERTY_REGULATIONS_VALUE'] as $key
            => $idFileRegulation) {
                $arElements['PROPERTY_REGULATIONS_VALUE'][$key] =
                    \CFile::GetFileArray($idFileRegulation);
            }
            $elements[] = $arElements;
        }
        return $elements;
    }

    public static function GetTaskEmployee($idEmployee)
    {
        if (!$idEmployee) {
            return array();
        }
        //Получаем список всех подразделений сотрудника
        $arGroupsUser = UserTable::getList(array(
            'select' => array(
                'UF_GROUP'
            ),
            'filter' => array(
                'ID' => $idEmployee
            )
        ))->fetch();
        //Получаем список всех Task данных подразделений
        return self::GetTask(
            array('NAME' => 'asc'),
            array('PROPERTY_GROUP.ID' => $arGroupsUser),
            false,
            false,
            array('ID', 'NAME', 'PROPERTY_INDICATOR_TYPE',
                'PROPERTY_WEIGHT', 'PROPERTY_REGULATIONS')
        );
    }

    public static function SetTaskEmployee($idEmployee, $period,
                                           $arTaskValues)
    {
        if (!$idEmployee || !is_array($arTaskValues) ||
            !count($arTaskValues)
        ) {
            return array();
        }
        global $USER;
        //Получаем объект подключения к БД
        $db = Application::getConnection();
        //Начинаем транзакцию
        $db->startTransaction();

        foreach ($arTaskValues as $TASK => $TaskValue) {
            $arValue = array(
                'UF_VALUE' => $TaskValue,
                'UF_TASK' => $TASK,
                'UF_EMPLOYEE' => $idEmployee,
                'UF_CREATED_BY' => $USER->GetID(),
                'UF_CREATED' => new
                \Bitrix\Main\Type\DateTime(date('d.m.Y') . ' 00:00:00'),
                'UF_PERIOD' => new
                \Bitrix\Main\Type\DateTime($period . ' 00:00:00')
            );
            $result = TaskEmployeeTable::add($arValue);
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }
        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        }
    }
    public static function GetTaskEmployeeValue($idTASK, $idEmployee, $period)
    {
        return TaskEmployeeTable:: getList(array(
            "select" => array("ID", "UF_VALUE"),
            "filter" => array(
                "UF_EMPLOYEE" => $idEmployee,
                "UF_TASK" => $idTASK,
                "UF_PERIOD" => \Bitrix\Main\Type\DateTime::createFromUserTime($period),
            )
        ))->fetch();
    }
}