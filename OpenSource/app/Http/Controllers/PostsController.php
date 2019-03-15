<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PostsController extends Controller
{
    Schema::create('posts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('email');
        $table->string('title', 100);
        $table->text('description');
        $table->timestamps();
    });
}
