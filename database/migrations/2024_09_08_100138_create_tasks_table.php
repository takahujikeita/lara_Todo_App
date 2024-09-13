<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');                    // PK
            $table->string('title', 30);                    // タスクの題名, VARCHAR(30)
            $table->string('contents', 140)->nullable();    // タスクの詳細, VARCHAR(140), NULL許可
            $table->text('image_at')->nullable();           // 画像, TEXT, NULL許可
            $table->foreignId('user_id')                    // 外部キーとしてuser_idを定義
            ->constrained('users');                         // 'users'テーブルのidを参照する外部キー
            $table->timestamps();                           // created_at と updated_at を自動生成
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
