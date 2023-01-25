<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // $table->biginteger('destinataire_id')->unsigned();
            $table->string('civilite');
            $table->string('prenom', 30);
            $table->string('nom', 30);
            $table->string('email', 150);
            $table->date('dnaissance', 10)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->string('adresse', 150)->nullable();
            $table->string('cp', 10)->nullable();
            $table->string('ville', 50)->nullable();
            $table->string('pays')->nullable();
            $table->string('societe', 150)->nullable();
            $table->string('destinataire');
            $table->string('message', 500)->nullable();
            $table->boolean('newsletter')->default(false);
            $table->string('adresseip')->nullable();
            $table->timestamps();

            // $table->foreign('destinataire_id')->references('id')->on('destinataires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
