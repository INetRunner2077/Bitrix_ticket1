<?
AddEventHandler("main", "OnBeforeEventAdd", array("MyClass", "Mail"));

class MyClass
{
    public static function Mail(&$event, &$lid, &$arFields)
{
   if($event == 'FEEDBACK_FORM') {
       global $USER;
       if ($USER->isAuthorized()) {
        $arFields['AUTHOR'] = GetMessage('MAIL_YES', array(
            '#ID#' => $USER->GetID(),
            '#LOGIN#' => $USER->GetLogin(),
            "#NAME#" => $USER->GetFullName(),
            '#NAME_FORM#' => $arFields['AUTHOR'],
            ));
       } else {
           $arFields['AUTHOR'] = GetMessage('MAIL_NO', array(
               '#NAME_FORM#' => $arFields['AUTHOR'],
           ));
       }
CEventLog::Add(array(
"SEVERITY" => "SECURITY",
"AUDIT_TYPE_ID" =>  GetMessage('MAIL_LOG'),
"MODULE_ID" => "main",
"ITEM_ID" => $event,
"DESCRIPTION" => GetMessage('MAIL_LOG').'-'.$arFields['AUTHOR'],
  ));

   }

}

}

?>