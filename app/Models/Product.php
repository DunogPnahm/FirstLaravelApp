<?php
    namespace App\Models;

    class Product {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'name' => 'Điều hòa LG'
                ],
                [
                    'id' => 2,
                    'name' => 'Quạt máy Kangaroo'
                ]
            ];
        }
        public static function find($id) {
            $prodList = self::all();

            foreach($prodList as $prod) {
                if($prod['id'] == $id) {
                    return $prod;
                }
            }
        }
    }
?>