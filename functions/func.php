<?php
function download_file($file_url){
    $url = $file_url;
    
    // Initialize the cURL session
    $ch = curl_init($url);
    
    // Initialize directory name where file will be saved
    $dir = 'downloads/';
    
    // Use basename() function to return the base name of the file
    $file_name = time().basename($url);
    
    // Save file into file location
    $save_file_loc = $dir . $file_name;
    
    // Open file
    $fp = fopen($save_file_loc, 'wb');
    
    // It sets an option for a cURL transfer
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    
    // Perform a cURL session
    curl_exec($ch);
    
    // Closes a cURL session and frees all resources
    curl_close($ch);
    
    // Close file
    fclose($fp);
    
    // Read the downloaded file
    $compressedData = file_get_contents($save_file_loc);
    
    // Perform decompression
    $decodedData = decodeWithHuffman($compressedData);
    
    // Define the path for the decoded file
    $decoded_file_path = $dir .time().'decoded.txt';
    
    // Open a new file to write the decoded data
    $decoded_file = fopen($decoded_file_path, 'w');
    
    // Write the decoded data to the file
    fwrite($decoded_file, $decodedData);
    
    // Close the file
    fclose($decoded_file);
    
    return $decoded_file_path;
}


function decodeWithHuffman($data) {
    // Extract the tree string length, padding length, tree string, and encoded bytes from the input
    $explodedData = explode('#', $data);

    // Check if the explodedData array has enough elements
    if (count($explodedData) < 4) {
    // Handle the error appropriately (e.g., throw an exception or return an error message)
        return 'Invalid data format';
    }

    // Assign the array elements to variables with fallback values
    $treeStringLength = $explodedData[0] ?? '';
    $paddingLength = $explodedData[1] ?? '';
    $treeString = $explodedData[2] ?? '';
    $encodedBytes = $explodedData[3] ?? '';

    // Convert the tree string length and padding length to integers
    $treeStringLength = intval($treeStringLength);
    $paddingLength = intval($paddingLength);

    // Extract the encoded data from the encoded bytes
    $encodedData = '';
    for ($i = 0; $i < strlen($encodedBytes); $i++) {
        $byte = ord($encodedBytes[$i]);
        $encodedData .= str_pad(decbin($byte), 8, '0', STR_PAD_LEFT);
    }
    $encodedData = substr($encodedData, 0, strlen($encodedData) - $paddingLength);

    // Build the Huffman tree from the tree string
    $tree = makeTreeFromString($treeString, $treeStringLength);

    // Decode the encoded data using the Huffman tree
    $decodedData = '';
    $node = $tree;
    for ($i = 0; $i < strlen($encodedData); $i++) {
        $bit = $encodedData[$i];
        if ($bit === '0') {
            $node = $node[0];
        } else {
            $node = $node[1];
        }
        if (is_string($node)) {
            $decodedData .= $node;
            $node = $tree;
        }
    }

    return $decodedData;
}

function makeTreeString($node) {
    if (is_string($node[0])) {
        return "'" . $node[0];
    }
    return '0' . makeTreeString($node[0]) . '1' . makeTreeString($node[1]);
}

function makeTreeFromString($treeString, &$index, $length) {
    $node = [];
    if ($index >= $length) {
        return $node;
    }
    if ($treeString[$index] === "'") {
        $index++;
        $node[] = $treeString[$index];
        $index++;
        return $node;
    }
    $index++;
    $node[] = makeTreeFromString($treeString, $index, $length);
    $index++;
    $node[] = makeTreeFromString($treeString, $index, $length);
    return $node;
}
