<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <title>Add book</title>
</head>
<body class="d-flex flex-column h-100">
    <header> <!-- Fixed navbar --> <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <div class="container-fluid"> 
        <a class="navbar-brand" href="/index.php">Skontrum</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarCollapse"> <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
            <li class="nav-item"> <a class="nav-link"  href="/index.php">Home</a> </li>
             <li class="nav-item"> <a class="nav-link"  href="/catalogue.php">View catalogue</a> </li>
              <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/add.php">Add to catalogue</a> </li>
             </ul> <form class="d-flex" role="search"> <input class="form-control me-2" type="search" placeholder="Search catalogue" aria-label="Search"> <button class="btn btn-outline-success" type="submit">Search</button> </form> </div> </div> </nav> </header>
    <main class="flex-shrink-0 container mt-4">
        <div class="bg-body-tertiary p-5 rounded">
            <h1>Add book to the catalogue.</h1>
            <p>Add the book by getting data from polish National Library API by entering ISBN or filling the form yourself.<br>If a book with the same ISBN already exists then new instance of this title is added.</p>
            <p>
            <div class="form-floating">
                <form action="get_book_data.php">
                    <div class="container">
                        <div class="row">
                            <h4><label for="isbnInput" class="form-label">ISBN</label></h4>
                            <div class="col-sm">
                                
                                <input type="text" class="form-control" name="isbn" id="isbnInput" title="13 or 10 digit format, with hyphen or not" autofocus>
                            </div>
                            <div class="col-sm">
                                <button class="btn btn-primary" type="submit">Get book data from BN</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="container mt-3">
                    <form action="#">
                        <h4>Book details</h4>
                        <label for="title">Book title</label>
                    </form>
                </div>
                
                </div>
            </p>
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-body-tertiary"> <div class="container"> <span class="text-body-secondary">© HiszpanInk 2025, <a target="_blank" href="https://github.com/HiszpanInk/Skontrum">source code</a> is licensed under <a target="_blank" href="https://interoperable-europe.ec.europa.eu/sites/default/files/custom-page/attachment/2020-03/EUPL-1.2%20EN.txt">EUPL 1.2</a></span> </div> </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>