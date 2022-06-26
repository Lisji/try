<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned()->index(); //文章分類
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title', 40); //標題
            $table->string('content_small', 80)->nullable(); //部分內容
            $table->text('content'); //內容
            $table->integer('sort')->default(0); //排序
            $table->string('status', 30)->default('pending'); //狀態
            $table->string('pic', 255); //圖片
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });
        Schema::drop('posts');
    }
}