<?php

namespace App\CustomType;

use App\CustomType\Abstract\EnumType;

class VacinStatusType extends EnumType
{
    const TYPE_PENDING  = "pending";
    const TYPE_EXPIRED  = "expired";
    const TYPE_PAID  = "paid";

    protected string $name = 'ticket_status_type';

    protected array $values = [self::TYPE_PENDING, self::TYPE_EXPIRED,self::TYPE_PAID];


    public static function getTypeName($typeShortName)
    {
        return self::LabelNames()[$typeShortName] ?? "Unknown type ($typeShortName)";
    }

    public static function getAvailableTypes()
    {
        return [
            self::TYPE_PENDING,
            self::TYPE_EXPIRED,
            self::TYPE_PAID,
        ];
    }

    public static function LabelNames(): array
    {
        return [
            self::TYPE_PENDING  => 'Pending',
            self::TYPE_EXPIRED => 'Expired',
            self::TYPE_PAID => 'Paid'
        ];
    }
}