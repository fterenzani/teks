<?php foreach ($this->css as $css): ?>
    <?php if (is_array($css)): list($css, $media) = each($css) ?>                
        <link rel=stylesheet" href="<?php echo $css ?>" media="<?php echo $media ?>">
    <?php else: ?>                
        <link rel=stylesheet" href="<?php echo $css ?>">
    <?php endif ?>
<?php endforeach ?>