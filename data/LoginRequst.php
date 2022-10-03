<?php


class LoginRequest
{
    /* Ketika mau gunakan attribute class utk property kita cukup tambah diatas property */
    /* Menggunakan attribute class */
    #[NotBlank]

    /* Menggunakan attrribute class yang mempunyai constructor */
    #[Length(min: 4, max: 10)]

    public ?string $username;

    #[NotBlank]
    #[Length(min: 6, max: 10)]
    public ?string $password;
}
