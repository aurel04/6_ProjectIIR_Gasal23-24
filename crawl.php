<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Journal Search Engine</title>
    <style>
        body {
            background: rgb(16, 62, 123)rgb(16, 62, 123);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0;
        }

        h1 {
            font-family: 'times new roman', serif;
            font-weight: bold;
            font-size: 50px;
            margin-top: 10px;
            color: rgb(16, 62, 123);
        }

        .navbar {
            top: 0;
            width: 100%;
            height: 10%;
        }

        .navbar a {
            float: right;
            display: block;
            margin-right: 5px;
            padding-left: 15px;
            padding-right: 15px;
            border: 2px solid rgb(0, 41, 105);
            border-radius: 30px;
            font-size: 17px;
            font-family: 'poppins', sans-serif;
            font-weight: 500;
            color: rgb(16, 62, 123);
            background-color: rgb(245, 245, 245);
            cursor: pointer;
            transition: 0.15s;
        }

        .navbar a:hover {
            background-color: rgb(16, 62, 123);
            color: rgb(245, 245, 245);
            border: 2px solid rgb(245, 245, 245);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 50vh;
            min-height: 60vh;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.125);
            border-radius:.25rem;
            flex:1 1 auto;
            padding:1rem 1rem;
            text-align: center;
        }

        .card-body {
            flex:1 1 auto;
            padding:1rem 1rem;
        }

        .textbox {
            width: 80%;
            border: 1px solid rgb(0, 41, 105);
            border-radius: 30px;
            color: rgb(209, 209, 209);
            font-size: 17px;
            font-family: 'poppins', sans-serif;
            font-weight: 400;
            padding-left: 10px;
            padding-bottom: 5px;
            padding-top: 5px;
            margin-bottom: 5px;
        }

        .button {
            width: 80%;
            border: 2px solid rgb(16, 62, 123);
            border-radius: 30px;
            font-weight: 500;
            letter-spacing: 1px;
            font-size: 20px;
            font-family: 'poppins', sans-serif;
            background-color: rgb(16, 62, 123);
            color: rgb(245, 245, 245);
            cursor: pointer;
            transition: 0.15s;
            margin-top: 15px;
        }

        .button:hover {
            background-color: transparent;
            color: rgb(16, 62, 123);
        }
    </style>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg">
    <form action="crawl.php" method="POST">
        <nav class="navbar navbar-default fixed-top navbar-light bg-light shadow">
            <div class="container-fluid mx-5">
                <a href="search.php" class="btn">Journal Search</a>
                <a href="crawl.php" class="btn">Google Scholar Crawling</a>
            </div>
        </nav>

        <section class="vh-100">
            <div class="bg container py-5 h-100" style="max-width: 100%">
                <section>
                    <div class="h-100 pt-5 d-flex justify-content-around">
                        <div class="h-25">
                            <div class="card bg-light shadow" style="border-radius: 1rem;">
                                <div class="card-body container-sm justify-content-center align-items-center text-center">
                                    <!-- Setting pencarian -->
                                    <h1>Google Scholar Crawling</h1>
                                    <div class="item-container">
                                        <input type="text" class="textbox" placeholder="Enter your keyword here" name="keyword" id="keyword" autofocus required>
                                        <button class="button" type="submit" name="crawls" value="Crawls">Search</button><br><br><br>
                                        <a href="search.php">Scientific Journal Search Engine</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
    </form>
<br>
    <div class="justify-content-around">
        <section class="d-flex mt-5 justify-content-center w-100 px-5">
            <div class="card p-3 mb-5 w-100 justify-content-center row" style="border-radius: 1rem;">
                <div class="d-flex card-body justify-content-around w-100">
                    <div class="col-8">
                        <div class="card-body container-sm justify-content-center align-items-center  w-100">
                            <?php
                                require_once __DIR__ . '/vendor/autoload.php';

                                if (isset($_POST['crawls'])) {
                                    include_once('simple_html_dom.php');
                                
                                    $con = new mysqli("localhost", "root", "", "uas_iir");
                                    if ($con->connect_errno) {
                                        //bisa ganti echo ini pake die() supaya langsung tidak dijalankan dan langsung keluar atau exit() ini kek break gitu
                                        die("Failed to connect to MySQL:" . $con->connect_error);
                                    } else {
                                        $query = $_POST['keyword'];
                                        $query_replace = str_replace(" ", "+", $query);
                                
                                        $html = file_get_html('https://scholar.google.com/scholar?hl=en&as_sdt=0%2C5&q=' . $query_replace . '&btnG=');
                                        echo '<div class="card bg-light shadow mb-5 p-4" style="border-radius: 1rem;">';
                                        foreach ($html->find('div[class="gs_ri]') as $news) {
                                
                                            $continue = false;
                                            foreach ($news->find('div[class="gs_a"]') as $docAbstractLink) {
                                                $cek = $docAbstractLink->find('a', 0);
                                
                                                if (empty($cek)) {
                                                    $continue = true;
                                                    break;
                                                } else {
                                                    $docLink = $docAbstractLink->find('a', 0)->href;
                                                }
                                            }
                                            if ($continue) {
                                                continue;
                                            }
                                
                                            $docSourceLink = $news->find('a', 0)->href;
                                            $docTitle = $news->find('a', 0)->plaintext;
                                            echo "<h3 class='mb-3'>" . $docTitle . "</h3>";
                                
                                            //Mendapatkan Nama Authors
                                            //pake plaintext agar tidak ada logo" disamping tulisan
                                            // $author = $news->find('div[class="gs_a"]', 0)->plaintext;
                                
                                            // $authorExplode = explode('-', $author);
                                            // echo '<b><u>' . $authorExplode[0] . '</u></b><br>';
                                
                                            $html2 = file_get_html("https://scholar.google.com" . $docLink);
                                            
                                            foreach ($html2->find('tr[class="gsc_a_tr"]') as $doc) {

                                                $title = $doc->find('a', 0)->plaintext;
                                                // if (strtolower(str_replace(":", "", $docTitle)) == strtolower($title)) {
                                                if (strtolower($docTitle) == strtolower($title)) {
                                                    $link = $doc->find('a', 0)->href;
                                                    $link = "https://scholar.google.com" . $link;
                                                    $link = html_entity_decode($link);
                                                    $html3 = file_get_html($link);
                                                    $authors = $html3->find('div[class="gsc_oci_value"]', 0)->plaintext;
                                                    // $abstract = $html3->find('div[class="gsh_csp"]', 0)->plaintext;
                                                    $abstract = $html3->find('div[class="gsh_small"]', 0)->plaintext;
                                                    
                                                    echo "<h5 class='mb-3'>Authors: " . $authors . " times</h5>";
                                                    echo "<p>" . $abstract . "</p>";
                                                    break;
                                                }
                                            }
                                            echo "<br>";
                                            //Mendapatkan Number of Citation
                                            foreach ($news->find('div[class="gs_fl gs_flb]') as $cite) {
                                                $cited = $cite->find('a', 2)->plaintext;
                                                $citedExplode = explode(' ', $cited);
                                                $count = count($citedExplode);
                                                $numCited = 0;
                                                if ($count == 3) {
                                                    $numCited = $citedExplode[2];
                                                }
                                                echo "<h6>Number of Citation:" . $numCited . "</h6>";
                                            }

                                            //Masukin ke database yg abstractnya tidak kosong
                                            if($abstract != ""){
                                                $sql = "insert into contents(title,number_citations,authors,abstract,similarity,link) values(?,?,?,?,?,?)";
                                                $result = $con->prepare($sql);
                                                $bobot =0;
                                                $result->bind_param("sissds", $docTitle, $numCited, $authors, $abstract, $bobot, $docSourceLink);
                                                $result->execute();
                                            }
                                        }
                                    }
                                    // // Pagination
                                    // $resultsPerPage = 5;
                                    // $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                    // $offset = ($currentPage - 1) * $resultsPerPage;

                                    // $totalQuery = "SELECT COUNT(*) as total FROM contents";
                                    // $totalResult = $con->query($totalQuery);
                                    // $totalData = $totalResult->fetch_assoc();
                                    // $total = $totalData['total']-1;

                                    // $totalPages = ceil($total / $resultsPerPage);

                                    // echo '<div class="pagination">';
                                    // for ($i = 1; $i <= $totalPages; $i++) {
                                    //     echo '<a href="?page=' . $i . '">' . $i . '</a>';
                                    // }
                                    // echo '</div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>





