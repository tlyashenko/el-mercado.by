<?php

use App\Modules\Settings\Enums\OptionEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->longText('content');
            $table->string('slug')->unique();
            $table->string('meta_description')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->boolean('is_published')->default(false);
            $table->json('og_tags')->nullable();
        });

        Schema::create('catalog_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('position')->nullable();
            $table->boolean('is_published')->default(false);
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('option', 64)->unique();
            $table->string('title', 128);
            $table->text('value')->nullable();
        });

        DB::table('settings')->insert([
            ['option' => OptionEnum::LEGAL_ENTITY_TITLE, 'title' => 'Название юридического лица', 'value' => 'Индивидуальный предприниматель Иванов Алексей Владимирович'],
            ['option' => OptionEnum::UNP, 'title' => 'УНП', 'value' => '192978439'],
            ['option' => OptionEnum::LEGAL_ADDRESS, 'title' => 'Юридический адрес', 'value' => 'пр-т Дзержинского, д. 11, оф. 843, 220069, г. Минск'],
            ['option' => OptionEnum::BANK_INFO_1, 'title' => 'Информация о банке', 'value' => 'р/с BY64 BPSB 3013 3382 7101 8933 0000 в ОАО «Сбер Банк», код (BIC) BPSBBY2X'],
            ['option' => OptionEnum::BANK_INFO_2, 'title' => 'Информация о банке 2', 'value' => 'р/с BY89 POIS 3013 0074 6182 0193 3001 в ОАО «Паритетбанк», код (BIC) POISBY2X'],
            ['option' => OptionEnum::EMAIL, 'title' => 'Email', 'value' => 'vanou@verictor.com'],
            ['option' => OptionEnum::PHONE, 'title' => 'Телефон', 'value' => '+375 (29) 699 93 62'],
            ['option' => OptionEnum::TELEGRAM, 'title' => 'Телеграм', 'value' => 'https://t.me/mercado24_bot'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page');
        Schema::dropIfExists('catalog_category');
        Schema::dropIfExists('settings');
    }
};
