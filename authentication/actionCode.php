<?php 
session_start();
include_once "../dbconfig/dbconfig.php";
require_once "../includes/function.php";
if(isset($_POST['portalname'])){
    $portal_name = $_POST['portalname'];
    $portal_code = randomString(8);
    $portal_limiter = $_POST['numlimiter'];
if(isset($_SESSION['auth_user'])){
    $userid = $_SESSION['auth_user']['id'];
    mysqli_query($con,"INSERT INTO `portals`( `portal_name`, `portal_limit`, `portal_code`,`userid`) VALUES ('$portal_name','$portal_limiter','$portal_code','$userid')");
    header('location:../index.php');
}
else{
    echo "Session not set";
}

}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $uploadDir = "uploads/"; 
    $filename = $_FILES["file"]["name"];
    $filepath = $uploadDir . $filename;
    $filesize = $_FILES["file"]["size"];

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
        // Read the contents of the uploaded file
        $fileContents = file_get_contents($filepath);
        
        // Perform Huffman encoding on the file contents
        $encodedData = encodeWithHuffman($fileContents);
 
        // Store the encoded data in the database
        $sql = "INSERT INTO file_upload (fullname, filename, filepath, filesize, encoded_data) VALUES ('$fullname', '$filename', '$filepath', $filesize, '$filepath')";
        $con->query($sql);
        $con->close();

        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $encodedData);
        fclose($myfile);
        echo "File uploaded and compressed successfully!";
    } else {
        echo "Error uploading file.";
    }
}

// Huffman encoding function
function encodeWithHuffman($data) {
 
    // Count the frequency of each character in the data
    $frequency = array_count_values(str_split($data));

    // Build the Huffman tree
    $tree = buildHuffmanTree($frequency);

    // Generate the Huffman codes for each character
    $codes = generateHuffmanCodes($tree);


    // Encode the data using the Huffman codes
    $encodedData = '';
    foreach (str_split($data) as $char) {
        $encodedData .= $codes[$char];
    }

    // Convert the encoded binary string to bytes
    $byteCount = ceil(strlen($encodedData) / 8);
    $encodedBytes = '';
    for ($i = 0; $i < $byteCount; $i++) {
        $byte = substr($encodedData, $i * 8, 8);
        $encodedBytes .= chr(bindec($byte));
    }

    // Create a string representation of the Huffman tree
    $treeString = makeTreeString($tree);

    // Combine the tree string, padding length, and encoded bytes
    $finalString = strlen($treeString) . '#' . (8 - (strlen($encodedData) % 8)) % 8 . '#' . $treeString . $encodedBytes;
    return $finalString;
}

// Huffman decoding function
function decodeWithHuffman($data) {
    // Extract the tree string length, padding length, tree string, and encoded bytes from the input
    list($treeStringLength, $paddingLength, $treeString, $encodedBytes) = explode('#', $data, 4);

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

// Build the Huffman tree from character frequencies
function buildHuffmanTree($frequency) {
    $heap = new SplPriorityQueue();
    foreach ($frequency as $char => $count) {
        $heap->insert([$count, $char], -$count);
    }
    while ($heap->count() > 1) {
        $node1 = $heap->extract();
        $node2 = $heap->extract();
        $parentCount = $node1[0] + $node2[0];
        $heap->insert([$parentCount, [$node1, $node2]], -$parentCount);
    }
    return $heap->top();
}

// Generate Huffman codes for each character in the tree
function generateHuffmanCodes($tree) {
    $codes = [];
    generateCodes($tree, '', $codes);
    return $codes;
}

function generateCodes($node, $code, &$codes) {
    if (is_string($node[1])) {
        $codes[$node[1]] = $code;
    } else {
        generateCodes($node[1][0], $code . '0', $codes);
        generateCodes($node[1][1], $code . '1', $codes);
    }
}

// Create a string representation of the Huffman tree
function makeTreeString($node) {
    if (is_string($node[1])) {
        return "'" . $node[1];
    }
    return '0' . makeTreeString($node[1][0]) . '1' . makeTreeString($node[1][1]);
}

// Build the Huffman tree from a string representation
function makeTreeFromString($treeString, $length) {
    $index = 0;
    return makeNodeFromString($treeString, $index, $length);
}

function makeNodeFromString($treeString, &$index, $length) {
    $node = [];
    if ($treeString[$index] === "'") {
        $index++;
        $node[] = $treeString[$index];
        $index++;
        return $node;
    }
    $index++;
    $node[] = makeNodeFromString($treeString, $index, $length);
    $index++;
    $node[] = makeNodeFromString($treeString, $index, $length);
    return $node;
}

// if(isset($_POST['submit'])){
//     $p_id = $_GET['userid'];
//     $updateportalname = $_POST['updateportalname'];
//     $portal_limiter = $_POST['numlimiter'];
    

// $q = " update portals SET p_id=$userid, portal_name='$updateportalname',
// portal_limit='$portal_limiter' WHERE p_id=$userid ";

// $query = mysqli_query($con, $q);


// }


?>
