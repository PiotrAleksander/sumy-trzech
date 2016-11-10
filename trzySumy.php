<!DOCTYPE html>
<html>
	<body>

		<form method="post" action="">
			<input type="text" name="tablica[]">
            <input type="text" name="X">
			<input type="submit">
		</form>

<?php
#dane wejściowe znajdują się w przedziale int32_t
function sumaTrzech($tablica, $X) {
	
	$min = INF;
	$len = count($tablica);
	sort($tablica);
    if ($len < 3) {
        print "Za mało danych w tablicy";
        return;
    }
	for ($i = 0; $i <= $len; $i++) {
		$j = $i + 1;
		$k = $len - 1;
		while ($j < $k) {
			$suma = $tablica[$i] + $tablica[$j] + $tablica[$k];
			$odl = abs($X - $suma);
			if ($odl == 0) {
				print $suma;
				return;
			}
		
			if ($odl < $min) {
				$min = $odl;
				$wynik = $suma;
			}
		
			if ($suma <= $X) {
				$j++;
			} else {
				$k--;
			}
		}
	}
	print $wynik;
	return;
}
$tablica = $_POST['tablica'];
$X = $_POST['X'];
sumaTrzech($tablica, $X);

?>
</body>
</html>


