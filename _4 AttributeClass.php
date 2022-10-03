<?php

require_once "data/LoginRequst.php";

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
// Jadi ketika kita definisikan class attribute yang jadi attribute itu NamaClass nya
class NotBlank // buat attribute, Nama attributenya NotBlank
{
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}


/* Membuat Validation Framework Reflection */

/* Membaca attribute yang didalam class object dgn reflection */
function validate($object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties(); // returnya array

    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, $object): void
{
    /* FUnction baru di reflection getAttributes(namaAttribute) ambil ttribute NotBlank */
    /* getAttribute returnya array() / [] */
    $attributes = $property->getAttributes(NotBlank::class); // Attribute apa yang akan diambil
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name not set!");
        } else if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name is null!");
        } else if (trim($property->getValue($object)) == "") {
            throw new Exception("Property $property->name is empty!");
        }
    }
}

function validateLength(ReflectionProperty $property, $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null || trim($property->getValue($object)) == "") {
        return; // cancel validation, karena sudah divalidasi validateNotblank
    }

    // Udah pasti dapet propertynya
    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) {

        /*
            membuat instance dari class Attribute Length
            Otomatis akan dibikinkan deklarasi dari attribute length itu digunakan dimana kita akan ambil semua deklarasinya yaitu
            
            #[Length(min: 4, max: 10)]
        */
        /* ambil min, max yang kita definisikan di attribute Length */
        $length = $attribute->newInstance();

        /* menyimpan panjang dari yang kita inputin */
        $valueLength = strlen($value);

        /* jika yang kita inputin lebih kecil dari jumlah Length min */
        if ($valueLength < $length->min) {
            throw new Exception("Property $property->name min $length->min");
        } else if ($valueLength > $length->max) {
            throw new Exception("Property $property->name max $length->max");
        }
    }
}

$login = new LoginRequest;
$login->username = "aris";
$login->password = "123456789101112";


try {
    validate($login);
} catch (Exception $exception) {
    echo "Error : {$exception->getMessage()} \n";
}
