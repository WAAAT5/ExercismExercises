<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return $name[0];
    }

    public function initial(string $name): string
    {

        return strtoupper($this->firstLetter($name)) . "." ;
    }

    public function initials(string $name): string
    {
        $parts = explode(" ", $name);
        $initials = "";
        foreach ($parts as $part) {
            $initials .= strtoupper($part[0]) . ".";
        }
        return $initials;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {

            $a = $this->initials($sweetheart_a);
            $b = $this->initials($sweetheart_b);

return <<<EOT
     ******        ******
   **      **  **      **
 **         ****         **
**            *            **
**                         **
**       $a  +  $b     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
EOT;
    }
}

$hs = new HighSchoolSweetheart();
echo $hs->firstLetter("Alice") . "\n";
echo $hs->initial("Alice") . "\n";
echo $hs->initials("Alice Jones") . "\n";
echo $hs->initials("John Paul Jones") . "\n";
echo $hs->pair("Blake Miller", "Riley Lewis") . "\n";