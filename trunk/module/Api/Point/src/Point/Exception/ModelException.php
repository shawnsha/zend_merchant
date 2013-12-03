<?php

namespace Point\Exception;

use HiiirErrorHandler\Exception\AbstractUserException;

class ModelException extends AbstractUserException
{

    protected function retrieveCodeArray()
    {
        return array(
            "ACCOUNT-001" => "缺少欲設定帳號或是格式不正確", 
            "ACCOUNT-002" => "缺少欲顯示名稱", 
            "ACCOUNT-003" => "缺少欲設定密碼", 
            "ACCOUNT-004" => "缺少帳號等級", 
            "ACCOUNT-005" => "缺少啟用狀態", 
            "ACCOUNT-006" => "缺少公司品牌", 
            "ACCOUNT-007" => "缺少連絡電話", 
            "ACCOUNT-008" => "缺少電子郵件信箱", 
            "ACCOUNT-009" => "缺少通訊地址", 
            "ACCOUNT-010" => "欲設定帳號不可以重複", 
            "ACCOUNT-011" => "欲設定密碼和確認密碼不相符", 
            "ACCOUNT-012" => "欲設定密碼長度小於8字元", 
            "ACCOUNT-013" => "帳號ID不存在", 
            "ACCOUNT-014" => "不可以刪除自己的帳號", 
            "ACCOUNT-015" => "尚未有可加入的帳號資料，請先新增!"
        );
    }
}
?>