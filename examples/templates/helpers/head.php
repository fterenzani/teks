<?php

require_once __DIR__.'/functions.php';

?>
<meta charset=utf-8>

<title><?php echo !empty($this->title) ? $this->title : 'Teks PHP demo layout' ?></title>

<?php if (!empty($this->description)): ?>
    <meta name="description" content="<?php echo $this->description ?>">
<?php endif ?>

<?php if (!empty($this->canonical)): ?>
    <link rel="canonical" href="<?php echo $this->canonical ?>">
<?php endif ?>

<script>var qu = []</script>

<?php if (!empty($this->css) && is_array($this->css)): ?>
    <?php foreach (array_unique($this->css) as $css): ?>
        <?php 
        $media = null; 
        if (is_array($css)) {
            list($css, $media) = each($css);
        }
        ?>
        <link rel=stylesheet href="<?php echo getAssetPath($this, $css) ?>"<?php 
                if (isset($media)) 
                    echo " media=\"$media\"" ?>>
    <?php endforeach ?>
<?php endif ?>