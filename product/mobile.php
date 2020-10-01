<?php
    $curl = curl_init();
        $where = urlencode('{
            "Brand": {
                "$exists": true
            }
        }');
    curl_setopt($curl, CURLOPT_URL, 'https://parseapi.back4app.com/classes/Dataset_Cell_Phones_Model_Brand?limit=10&order=Brand&keys=Brand,Model&where=' . $where);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'X-Parse-Application-Id: MEqvn3N742oOXsF33z6BFeezRkW8zXXh4nIwOQUT', // This is the fake app's application id
        'X-Parse-Master-Key: uZ1r1iHnOQr5K4WggIibVczBZSPpWfYbSRpD6INw' // This is the fake app's readonly master key
    ));
    $data = json_decode(curl_exec($curl)); // Here you have the data that you need
    print_r(json_encode($data, JSON_PRETTY_PRINT));
    curl_close($curl);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
</html>