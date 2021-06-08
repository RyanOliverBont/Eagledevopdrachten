<?php

/*******************************************************************************************************************/
/******************************************* OPDRACHT 1 doe je hieronder *******************************************/
include "bitcoindata.php";
/* 
 * Opdracht 1: voeg hier het bestand allcoins.php in. 
 * Verder hoef je geen code te schrijven op deze pagina.
 */

calculateBitcoinAmount();

/*******************************************************************************************************************/
/**************************** De code hieronder heb je nodig en hoef je niet aan te passen *************************/
?>

<?php include 'header.php'; ?>
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <h4>Koop Crypto munten</h4>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <div class="form-group">
                <label for="">Huidige Bitcoin Prijs</label>
                <span>&euro; </span><input type="text" name="bitcoin_current_price" value="<?php echo getBitcoinPrice() ?>" class="form-control">
                <small id="text" class="form-text text-muted">Laatste update: <?php echo getTime() ?> </small>
            </div>
            <a href="?euro=100" class="btn btn-info p-3 m-1">&euro;100</a>
            <a href="?euro=200" class="btn btn-info p-3 m-1">&euro;200</a>
            <a href="?euro=300" class="btn btn-info p-3 m-1">&euro;300</a>
            <?php if (isset($buttons) && is_array($buttons)) : ?>
                <?php foreach ($buttons as $button) : ?>
                    <a href="?euro=<?php echo $button ?>" class="btn btn-info p-3 m-1">&euro;<?php echo $button ?></a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col">
            <table class="table">
                <h5>Bitcoin Transacties</h5>
                <caption>Deze tabel toond de eerder gemaakte transacties</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Prijs 1 Bitcoin (&euro;)</th>
                        <th>Koopbedrag (&euro;)</th>
                        <th>Aantal Bitcoin</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Deze tabel wordt dynamisch geladen met de $transactions array -->
                    <?php if (isset($transactions) && is_array($transactions)) : ?>
                        <?php $total_bitcoin_amount = 0; ?>
                        <?php foreach ($transactions as $key => $transaction) : ?>
                            <?php $total_bitcoin_amount += $transaction[2]; ?>
                            <tr>
                                <td><?php echo $key  ?></td>
                                <td><?php echo $transaction[0]; ?></td>
                                <td><?php echo $transaction[1]; ?></td>
                                <td><?php echo number_format($transaction[2], 4) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
                <tr>
                    <td colspan="4">Totaal gekochte bitcoins: <?php echo $total_bitcoin_amount ?></td>
                </tr>
            </table>
        </div>
        <div class="col">
            <div class="card m-b-30">
                <div class="card-header bg-white">
                    <h5 class="card-title text-black">Bitcoin grafiek</h5>
                    <h6 class="card-subtitle">Hieronder staat de door jouw gemaakte data</h6>
                </div>
                <div class="card-body">
                    <canvas id="xp-chartjs-basic-line" class="xp-chartjs-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>