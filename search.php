<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Journal Search Engine</title>
    <style>
        body {
            background: rgb(16, 62, 123);
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

        h3 {
            font-family: 'times new roman', serif;
            font-weight: bold;
            font-size: 23px;
            color: rgb(0, 34, 87);
            margin-bottom: 10px;
        }

        .left {
            text-align: left;
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

        .card,
        .card2 {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 50vh;
            min-height: 60vh;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
            flex: 1 1 auto;
            padding: 1rem 1rem;
            text-align: center;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 1rem;
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

        .radio-text {
            font-family: 'times new roman', serif;
            font-weight: 500;
            font-size: 18px;
            color: rgb(0, 34, 87);
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 8px 16px;
            text-decoration: none;
            color: #333;
            background-color: #ddd;
            border-radius: 4px;
            margin: 0 4px;
            cursor: pointer;
        }

        .pagination a.active {
            background-color: #333;
            color: white;
        }

        .left {
            text-align: left;
        }
    </style>
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg">
    <form action="search.php" method="get">
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
                                    <h1>Scientific Journal<br>Search Engine</h1>
                                    <div class="item-container">
                                        <input type="text" class="textbox" placeholder="Enter your keyword here" name="keyword" id="keyword" autofocus required>
                                        <h3>Similarity Method</h3>
                                        <input type="radio" name="method" id="canberra" value="canberra" autocomplete="off" checked>
                                        <label class="radio-text" for="canberra">Canberra</label>
                                        <input type="radio" name="method" id="cosine" value="cosine" autocomplete="off">
                                        <label class="radio-text" for="osine">Cosine</label><br><br>
                                        <button class="button" type="submit" name="search" value="submit">Search</button><br><br><br>
                                        <a href="crawl.php">Crawl from Google Scholar</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
            </selection>
    </form>
    <br>
    <div class="justify-content-around">
        <section class="d-flex mt-5 justify-content-center w-100 px-5">
            <div class="card p-3 mb-5 w-100 justify-content-center row" style="border-radius: 1rem;">
                <div class="d-flex card-body justify-content-around w-100">
                    <div class="col-8">
                        <div class="card-body container-sm justify-content-center align-items-center  w-100">
                            <?php
                            // echo "<div class='col-8'>";
                            // echo "<div class='card-body container-sm justify-content-center align-items-center  w-100'>";
                            include_once('simple_html_dom.php');
                            require_once __DIR__ . '/vendor/autoload.php';
                            require_once('./vendor/StopWords-main/StopWords-main/src/StopWords.php');
                            require_once('./vendor/StopWords-main/StopWords-main/src/Cache.php');
                            require_once('./vendor/StopWords-main/StopWords-main/src/IrregularLanguageFileException.php');
                            require_once('./vendor/StopWords-main/StopWords-main/src/LanguageNotFoundException.php');

                            use Phpml\FeatureExtraction\TokenCountVectorizer;
                            use Phpml\Tokenization\WhitespaceTokenizer;
                            use Phpml\FeatureExtraction\TfIdfTransformer;
                            use StopWords\StopWords;

                            $stopwords = new StopWords('en');

                            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                            if (isset($_GET['method'])) {
                                $method = $_GET['method'];
                                $query = $_GET['keyword'];
                                $text = $query;
                                // echo $query;
                                $data = [];
                                $title = [];
                                $bobot = [];

                                $con = new mysqli("localhost", "root", "", "uas_iir");
                                if ($con->connect_errno) {
                                    die("Failed to connect to MySQL:" . $con->connect_error);
                                } else {
                                    $sql = "Select * from contents";
                                    $result = $con->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $stopTitle = $stopwords->clean($row['title']); //hilangin stopword
                                        $cleanTitle = preg_replace('/[^a-zA-Z0-9]/', ' ', $stopTitle); //hilangin special characters
                                        $cleanTitle = strtolower($cleanTitle); //supaya sama semua typingan nya
                                        $data[] = $cleanTitle;
                                        $title[] = $row['title'];
                                    }
                                    $data[] = $query;

                                    $tf = new TokenCountVectorizer(new WhitespaceTokenizer());
                                    $tf->fit($data);
                                    $tf->transform($data);

                                    $tfidf = new TfIdfTransformer($data);
                                    $tfidf->transform($data);
                                    $vocabulary = $tf->getVocabulary();

                                    // print_r($data);

                                    $total = count($data);
                                    if ($method == "canberra") {
                                        for ($i = 0; $i < $total - 1; $i++) {
                                            $canberra  = 0;
                                            $doc = $data[$i];
                                            $query = $data[$total - 1];
                                            for ($j = 0; $j < count($vocabulary); $j++) {
                                                $wkq = $query[$j];
                                                $wkj = $doc[$j];
                                                $numerator = abs($wkq - $wkj);
                                                $denominator = abs($wkq + $wkj);
                                                if ($denominator > 0) {
                                                    $canberra += ($numerator / $denominator);
                                                }
                                            }
                                            $bobot[] = $canberra;
                                        }
                                    } else {
                                        for ($i = 0; $i < $total - 1; $i++) {
                                            $totalnumerator = 0;
                                            $totaldenominatorwkq = 0;
                                            $totaldenominatorwkj = 0;
                                            $cosine  = 0;
                                            $doc = $data[$i];
                                            $query = $data[$total - 1];
                                            for ($j = 0; $j < count($vocabulary); $j++) {
                                                $wkq = $query[$j];
                                                $wkj = $doc[$j];
                                                $totalnumerator += ($wkq * $wkj);
                                                $totaldenominatorwkq += pow($wkq, 2);
                                                $totaldenominatorwkj += pow($wkj, 2);
                                            }
                                            $denominator = sqrt($totaldenominatorwkq * $totaldenominatorwkj);
                                            if ($denominator > 0) {
                                                $cosine = $totalnumerator / $denominator;
                                            }
                                            $bobot[] = $cosine;
                                        }
                                    }
                                    for ($i = 0; $i < $total - 1; $i++) {
                                        $sql = "update contents set similarity=? where title=?";
                                        $result = $con->prepare($sql);
                                        $judul = $title[$i];
                                        $nilai = $bobot[$i];
                                        $result->bind_param("ds", $nilai, $judul);
                                        $result->execute();
                                    }

                                    echo "<br><b>The Search Results</b>";

                                    $i = 0;
                                    $qe_titles = [];
                                    $original_query = $_GET['keyword'];

                                    // Pagination
                                    $resultsPerPage = 5;
                                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $offset = ($currentPage - 1) * $resultsPerPage;

                                    // $sql = "SELECT * FROM contents ORDER BY similarity DESC LIMIT $offset,$resultsPerPage";
                                    // $result = $con->query($sql);

                                    if ($method == "canberra") {
                                        if (isset($_GET['method'])) {
                                            $sql = "Select * from contents order by similarity asc limit $offset,$resultsPerPage";
                                            $result = $con->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<div class="card bg-light shadow mb-5 p-4" style="border-radius: 1rem;">';
                                                echo "<h3 class='mb-3'>" . $row['title'] . "</a></h3>";
                                                echo "<h5 class='mb-3'>Authors: " . $row['authors'] . " times</h5>";
                                                echo "<p>" . $row['abstract'] . "</p>";
                                                echo "<h6>Number of Citation:" . $row['number_citations'] . "</h6>";
                                                echo "<h6>Similarity: " . $row['similarity'] . "</h6>";
                                                echo "</div>";
                                                // if ($i < 3) {
                                                //     $stopTitle = $stopwords->clean($row['title']); //hilangin stopword
                                                //     $cleanTitle = preg_replace('/[^a-zA-Z0-9]/', ' ', $stopTitle); //hilangin special characters
                                                //     $cleanTitle = strtolower($cleanTitle); //supaya sama semua typingan nya
                                                //     $qe_titles[] = $cleanTitle; //simpen title untuk qe
                                                //     $i++;
                                                // }
                                            }
                                        }
                                    } else {
                                        if (isset($_GET['method'])) {

                                            $sql = "Select * from contents order by similarity desc limit $offset,$resultsPerPage";
                                            $result = $con->query($sql);
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<div class="card bg-light shadow mb-5 p-4" style="border-radius: 1rem;">';
                                                echo "<h3 class='mb-3'>" . $row['title'] . "</a></h3>";
                                                echo "<h5 class='mb-3'>Authors: " . $row['authors'] . " times</h5>";
                                                echo "<p>" . $row['abstract'] . "</p>";
                                                echo "<h6>Number of Citation:" . $row['number_citations'] . "</h6>";
                                                echo "<h6>Similarity: " . $row['similarity'] . "</h6>";
                                                echo "</div>";
                                                // if ($i < 3) {
                                                //     $stopTitle = $stopwords->clean($row['title']); //hilangin stopword
                                                //     $cleanTitle = preg_replace('/[^a-zA-Z0-9]/', ' ', $stopTitle); //hilangin special characters
                                                //     $cleanTitle = strtolower($cleanTitle); //supaya sama semua typingan nya
                                                //     $qe_titles[] = $cleanTitle; //simpen title untuk qe
                                                //     $i++;
                                                // }
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card bg-light shadow p-3 mt-3" style="border-radius: 1rem;">
                            <div class="card-body container-sm w-100">
                                <!-- QUERY EXPANSION -->
                                <?php
                                //agar query expansion tidak berubah ketika ganti page
                                if (isset($_GET['method'])) {
                                    // karena kita ngambil 3 judul teratas untuk QE, jdi klo result dri search < 3, ga bisa QE
                                    $method = $_GET['method'];
                                    $i = 0;
                                    if ($method == "canberra") {
                                        $sql = "Select * from contents order by similarity asc";
                                        $result = $con->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            if ($i < 3) {
                                                $stopTitle = $stopwords->clean($row['title']); //hilangin stopword
                                                $cleanTitle = preg_replace('/[^a-zA-Z0-9]/', ' ', $stopTitle); //hilangin special characters
                                                $cleanTitle = strtolower($cleanTitle); //supaya sama semua typingan nya
                                                $qe_titles[] = $cleanTitle; //simpen title untuk qe
                                                $i++;
                                            }
                                        }
                                    } else {
                                        $sql = "Select * from contents order by similarity desc ";
                                        $result = $con->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            if ($i < 3) {
                                                $stopTitle = $stopwords->clean($row['title']); //hilangin stopword
                                                $cleanTitle = preg_replace('/[^a-zA-Z0-9]/', ' ', $stopTitle); //hilangin special characters
                                                $cleanTitle = strtolower($cleanTitle); //supaya sama semua typingan nya
                                                $qe_titles[] = $cleanTitle; //simpen title untuk qe
                                                $i++;
                                            }
                                        }
                                    }
                                    if (isset($_GET['keyword'])) {
                                        $query = $_GET['keyword'];
                                    }
                                    if (count($qe_titles) < 3) die("Not enough result to do Query Expansion.");


                                    // TF-IDF array judul
                                    $tf = new TokenCountVectorizer(new WhitespaceTokenizer());
                                    $tf->fit($qe_titles);
                                    $tf->transform($qe_titles);

                                    $vocabulary = $tf->getVocabulary();
                                    // $tfidf = new TfIdfTransformer($qe_titles);
                                    // $tfidf->transform($qe_titles);


                                    // $threshold = 100;
                                    // $min = 1000;
                                    // $idx = 0;

                                    $qe_words = [];
                                    foreach ($vocabulary as $v) {
                                        if (($query != $v)) {
                                            array_splice($qe_words, 0, 0, $v);
                                        }
                                    }

                                    $qe_words = array_slice($qe_words, 0, 3);
                                    echo "<h2>Related Searches:</h2>";
                                    echo "<ul>";
                                    foreach ($qe_words as $qeword) {
                                        echo "<li>$query <b>$qeword</b></li>";
                                    }
                                    echo "</ul>";


                                    // Pagination Links
                                    $totalPages = ceil(($total-1) / $resultsPerPage);

                                    echo '<div class="pagination">';
                                    for ($i = 1; $i <= $totalPages; $i++) {
                                        echo '<a href="search.php?page=' . $i . '&method=' . $method . '&keyword=' . $text . '">' . $i . '</a>';
                                    }
                                    echo '</div>';
                                    $con->close();
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>