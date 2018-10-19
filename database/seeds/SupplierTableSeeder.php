<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new \App\Supplier(['name' =>'Ajay Kumar','phoneNumber' =>'0212345679','email' =>'ajay@hotmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Drego Alejaro','phoneNumber' =>'0243453263','email' =>'dalejoarroyave@gmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Carl Flay','phoneNumber' =>'0211212123','email' =>'msg_me@gmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Andres Villacreces','phoneNumber' =>'0276353535','email' =>'andres@hotmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Camila Rod','phoneNumber' =>'02536374954','email' =>'camilarod@gmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Carmen Maluenda','phoneNumber' =>'0267834657','email' =>'carmenmaluenda@gmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Cory Robert','phoneNumber' =>'0275853565','email' =>'willkerk@gmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Daniel Puentes','phoneNumber' =>'0220664614','email' =>'401060774@qq.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Diana Nino','phoneNumber' =>'0210451297','email' =>'jdymrm@sina.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Erika Abril','phoneNumber' =>'0210515510','email' =>'maldi_123@hotmail.com']);
        $supplier -> save();
        $supplier = new \App\Supplier(['name' =>'Douglas Baquero','phoneNumber' =>'02108536902','email' =>'dm.np@hotmail.com']);
        $supplier -> save();
    }
}
