<?
AddEventHandler("main", "OnBeforeUserRegister", Array("RegisterHandler", "OnBeforeUserRegisterHandler"));

class RegisterHandler
{
	public static function OnBeforeUserRegisterHandler(&$arFields)
	{
        if($arFields["UF_TYPE_USER"] == 18) {
            $arFields["GROUP_ID"][0] = 6;
        }
        elseif($arFields["UF_TYPE_USER"] == 17) {
            $arFields["GROUP_ID"][0] = 7;
        }
	}
}
?>