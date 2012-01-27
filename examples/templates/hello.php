<div class=action>
    <h2>Action</h2>
    <p>Hello <?php echo htmlspecialchars($name) ?>!</p>
    <?php echo $this->render('_partial.php') ?>
    <script>
        qu.push(function(){
            jQuery(function($) {
                $("body").append('<p>qu flushed!</p>');
                $("body").append('<p>Now qu.push() is: ' + qu.push + '</p>');
                qu.push(function(){
                    $("body").append('<p>qu.push() after domready works!</p>');
                });
            });
        });
    </script>
</div>

