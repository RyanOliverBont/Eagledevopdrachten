<?php

/*******************************************************************************************************************/
/**************************** De code hieronder heb je nodig en hoef je niet aan te passen *************************/
?>
<footer class="footer mt-auto py-3 m-5">
    <div class="row">
        <small id="text" class="form-text text-muted"><i><?php echo getDisclaimer() ?></i> </small>
    </div>
    <script>
        // Deze code moet je ook laten staan
        var bitcoinPriceIndex = [
            <?php foreach ($transactions as $transaction) : ?>
                <?php echo $transaction[0] . ","; ?>
            <?php endforeach ?>
        ];
    </script>
    <script src="chart/chart.min.js"></script>
    <script src="chart/chart-line.js"></script>
</footer>
</body>

</html>