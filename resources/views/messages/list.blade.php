<html>
<body>
<table border=1>
        <tr>
                <td>
                <?php echo "userId"; ?>
                </td>
                <td>
                <?php echo "currencyFrom"; ?>
                </td>
                <td>
                <?php echo "currencyTo"; ?>
                </td>
                <td>
                <?php echo "amountSell"; ?>
                </td>
                <td>
                <?php echo "amountBuy"; ?>
                </td>
                <td>
                <?php echo "rate"; ?>
                </td>
                <td>
                <?php echo "timePlaced"; ?>
                </td>
                <td>
                <?php echo "originatingCountry"; ?>
                </td>
        </tr>

    <?php foreach ($allMessages as $message): ?>
	<tr>
       		<td>
 		<?php echo $message->userId; ?>
		</td>
		<td>
                <?php echo $message->currencyFrom; ?>
                </td>
                <td>
                <?php echo $message->currencyTo; ?>
                </td>
                <td>
                <?php echo $message->amountSell; ?>
                </td>
                <td>
                <?php echo $message->amountBuy; ?>
                </td>
                <td>
                <?php echo $message->rate; ?>
                </td>
                <td>
                <?php echo $message->timePlaced; ?>
                </td>
                <td>
                <?php echo $message->originatingCountry; ?>
                </td>
	</tr>
    <?php endforeach; ?>
</div>
</body>
</html>
