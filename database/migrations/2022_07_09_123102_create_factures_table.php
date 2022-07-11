<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* 3. Les factures servant à représenter la facturation d'un service à un client (entreprise ou contact). Les factures doivent comporter une date, un numéro (sous la forme JJMMYYYY-id du client-2 chiffre aléatoires), un montant HT, un taux de TVA, un montant TTC (calculé automatiquement), un titre. */
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('identifiant');
            $table->integer('montantHT');
            $table->integer('tva');
            $table->integer('montantTtc');
            $table->string('titre');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
};
