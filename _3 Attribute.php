<?php

/*
    Attribute fitur baru php 8

    Attribute adalah menambahkan meta data terhadap kode program yg kita buat
*/

/*
    Membuat Validation Framework Reflection
*/


// #[Attribute]        /* class attribute */

/*
    Attribute Target, kita bisa batasi membuat attribute di target tertentu, kita bsa tambahkan informasinya ketika kita membuat class attribute

    #[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_FUNCTION)]

*/

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_FUNCTION)]
class NotBlank
{
}


class LoginRequest
{

    /*
        Attribute bisa digunakan diberbagai tempat, seperti : class, function, method, property, class constant dan parameter
        utk buat attribute, kita cukup gunakan tanda #[NameAttribute] di target yg kita tentukan
    */

    /* 
        Property ini ada meta data tambahan nih informasi tambahan nih berupa attribute value classnya  adalah NotBlank 
    */

    #[NotBlank]
    public ?string $username;

    #[NotBlank]
    public ?string $password;
}


function validate(object $object): void
{
    $class = new ReflectionClass($object); // buat reflectionclass
    $properties = $class->getProperties(); // ambil semua propertiesnya dari class yang didapat
    // $properties ini hasilnya array didapat dari getProperties, jadi kita looping arraynya

    foreach ($properties as $property) {
        validateNotBlank($property, $object); // validasi tiap propertinya
        // validasi not blank dari tiap propertiesnya dan kita juga kirim object yg punya properties
    }
}

/* Di function ini kita ambil propertynya dan juga object nya */
function validateNotBlank(ReflectionProperty $property, object $object): void
{
    /* fitur baru php 8 getAtrribute, Ambil semua attribute nya dari class NotBlank::class */
    $attributes = $property->getAttributes(NotBlank::class); // attribute apa yang akan diambil
    // kita ambil dan dapetin semua attribute not blanknya

    /* Jika $attributesnya lebih dari 0, berarti ada data nya, dia akan masuk ke kondisi ini */
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) { // property harus diinitialized, dibuat propertnya
            throw new Exception("Property {$property->name} not set!");
        } else if (is_null($property->getValue($object))) { // property gk boleh null
            throw new Exception("Property {$property->name} is null!");
        } else if (trim($property->getValue($object)) == "") { // property gk boleh empty/kosong
            throw new Exception("Property {$property->name} is empty!");
        }
    }
}

$request = new LoginRequest;
$request->username = "aris";
$request->password = "";

try {
    validate($request);
} catch (Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}
