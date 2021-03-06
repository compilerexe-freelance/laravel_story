<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterWriter extends Model
{
    protected $table = 'register_writer';
    protected $fillable = [
        'member_id',
        'full_name',
        'id_card',
        'address',
        'tel',
        'bank_name',
        'bank_sub_branch',
        'bank_account_number',
        'bank_account_name',
        'book_bank_file',
        'id_card_file',
        'status_confirm',
        'status_reject'
    ];
}
