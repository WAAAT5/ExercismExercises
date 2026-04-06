<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_archer_awake || $is_knight_awake || $is_prisoner_awake){
            return true;
        } else {
            return false;
        }
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if ($is_archer_awake==false && $is_prisoner_awake==true){
            return true;
        }
        else{
            return false;
        }
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if ($is_dog_present == true && $is_archer_awake == false) {
            return true;
        }
        elseif ($is_prisoner_awake == true && $is_archer_awake == false && $is_knight_awake == false && $is_dog_present==false){
            return true;
        }
        else{
            return false;
        }
    }
}