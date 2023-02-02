<?php
function setActive($routeName)
{
    return request()->routeIs($routeName) ? "active" : "";
}
function CharacterDefiner($action,$id)
    {
        $character=$action=='next'?$id+1:$id-1;
        $character<=0?$character=1:$character;
        return $character;
    }
?>
