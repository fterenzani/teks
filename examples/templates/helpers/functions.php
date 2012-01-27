<?php

function getAssetPath(\Teks\Template $t, $asset) {
    if (strpos($asset, 'http') === 0) {
        return $asset;
    }
    return $t->base . '/' . $asset;
}