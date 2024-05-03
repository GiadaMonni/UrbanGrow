<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class PubblicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function up()
{
    Schema::create('profili', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->unique(); // Chiave esterna per l'utente
        // Altri campi per i dettagli del profilo
        $table->timestamps();
    });

    Schema::table('profili', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

}
