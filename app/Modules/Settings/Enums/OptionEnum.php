<?php

namespace App\Modules\Settings\Enums;

enum OptionEnum: string
{
    case LEGAL_ENTITY_TITLE = 'legal_entity_title';
    case UNP = 'unp';
    case LEGAL_ADDRESS = 'legal_address';
    case BANK_INFO_1 = 'bank_info_1';
    case BANK_INFO_2 = 'bank_info_2';
    case EMAIL = 'email';
    case PHONE = 'phone';
    case TELEGRAM = 'telegram';
}
