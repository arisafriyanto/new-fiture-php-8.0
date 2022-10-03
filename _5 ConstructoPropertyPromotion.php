<?php

/*
    Kita membuat property sekaligus mengisi property tsb menggunakan constructor
    Sekarang kita bisa otomatis langsung membuat property dgn via constructor

    Fitur ini adalah mempromosikan parameter atau argument constuctor langsung otomatis menjadi sebuah property
*/

/* Constructor & Property biasa */

class Product
{
    // buat property
    public string $id;
    public string $name;
    public int $price;

    public function __construct(string $id, string $name, int $price)
    {
        // set manual
        // definisikan property yang ada diclass kita masukkan ke constructor berulang-ulang
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

/* Constructor Property Promition */

class Products
{
    // mempromosikan parameter langsung bisa jadi property yg ada diclass, tanpa buat property dlu
    public function __construct(
        public string $id,          // dng cara kasih visibility nya langsung di parameter
        public string $name,        // maka akan dipromosikan jadi property
        public int $price = 1000
    ) {
    }
}

// WAAWWW gillee
$products = new Products(id: "1", name: "aris");
var_dump($products);

echo $products->name . PHP_EOL;
