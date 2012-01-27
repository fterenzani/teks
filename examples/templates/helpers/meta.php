<meta charset=utf-8>

<title><?php echo !empty($this->metaTitle) ? $this->metaTitle : 'Teks PHP demo layout' ?></title>

<?php if (!empty($this->metaDescription)): ?>
    <meta name="description" content="<?php echo $this->metaDescription ?>">
<?php endif ?>

<?php if (!empty($this->canonical)): ?>
    <link rel="canonical" href="<?php echo $this->canonical ?>">
<?php endif ?>

<script>var qu = []</script>