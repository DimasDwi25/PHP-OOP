<?php 

//final class = class tidak dapat diwariskan / diturunkan
class SocialMedia
{

}

final class Facebook extends SocialMedia
{
    final public function (string $name, string $password): bool
    {
        return true;
    }
}

//error
class FakeFacebook extends Facebook
{
    //error
    final public function (string $name, string $password): bool
    {
        return false;
    }
}

?>