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
        Schema::table('bilhetes', function(Blueprint $table){
           /* $table -> dropForeign('bilhetes_destino_id_foreign');
            $table -> dropColumn('destino_id');*/
            $table-> dropConstrainedForeignId('destino_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
