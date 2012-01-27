<?php

require_once __DIR__.'/functions.php';

?>

<?php if (!empty($this->js) && is_array($this->js)): ?>
    <?php foreach (array_unique($this->js) as $js): ?>
        <script src="<?php echo getAssetPath($this, $js) ?>"></script>
    <?php endforeach ?>
<?php endif ?>

<script>
for (var i = 0, length = qu.length; i < length; ++i) {
 qu[i]();
}
qu.push = function(func) {func()};
</script>

