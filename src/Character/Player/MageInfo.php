<?php

namespace Rpg\Ptpdeux\Character\Player;

use Rpg\Ptpdeux\Character\CharacterAtt;

class MageInfo extends CharacterAtt
{
    public function __construct()
    {
        parent::__construct("Mage", 1, 1, 40, 6, 1.2, 4, 1.6, 3, 0.3, 3, 0.6, 4, 1.5);
    }

    // TODO: warum gibst du hier nicht die bereits gesetzten Stats aus? (siehe Constructor)
    public function show($name,$exp,$lvl,$hp,$ap,$af): string
    {
        return ($name.$exp.$lvl.$hp.$ap.$af);
    }

    /**
     * HINWEIS: Hier haben wir eine besondere Form der String-Formatierung, hatten wir noch nicht.
     * Mehr dazu unter <a href="https://www.php.net/manual/de/language.types.string.php">diesem Link</a> (Heredoc-Syntax)
     * @return string Statuswerte
     */
    public function showStats(): string
    {
        return
            <<<STATS
            Name: $this->name
            Exp: $this->exp
            Lvl: $this->lvl
            HP: $this->hp
            AP: $this->ap
            AF: $this->af
            
            STATS
            ;
    }
}