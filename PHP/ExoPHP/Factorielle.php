<?php

    function facto($nb)
    {
        if ($nb == 1)
        {
            return 1;
        }
        else
        {
            return facto($nb-1) * $nb;
        }
    }
?>