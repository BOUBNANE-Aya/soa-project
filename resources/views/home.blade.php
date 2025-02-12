<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: rgb(218, 167, 175);
        }

        .navbar h1 {
            color: white;
            margin: 0;
            padding: 10px;
        }

        .card {
            text-align: center;
            padding: 10px;
        }

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .filter-container {
            margin: 15px 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1 class="navbar-brand m-0">MY SOA STORE</h1>
            <a href="/admin" class="btn btn-light">Admin ?</a>
        </div>
    </nav>

     <!-- Filter Dropdown -->
     <div class="container filter-container">
        <span class="badge bg-info text-dark">Filter Dogs</span>
        <span class="badge bg-info text-dark">Filter Cats</span>
    </div>

    <!-- Product List -->
    <div class="container mt-4">
        <div class="row g-3">

            <div class="row">
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/golden.jpg') }}" class="card-img-top" alt="Golden Puppy">
                        <div class="card-body text-center">
                            <h5 class="card-title">Golden Puppy</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$79.99</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="cat">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/cat1.jpg') }}" class="card-img-top" alt="Cat">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cat</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$39.99</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/german.jpg') }}" class="card-img-top" alt="German Shepherd">
                        <div class="card-body text-center">
                            <h5 class="card-title">German Shepherd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$99.99</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/black H.jpg') }}" class="card-img-top" alt="Black Husky">
                        <div class="card-body text-center">
                            <h5 class="card-title">Black Husky</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$230</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/white H.webp') }}" class="card-img-top" alt="White Husky">
                        <div class="card-body text-center">
                            <h5 class="card-title">White Husky</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$230</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/rott.avif') }}" class="card-img-top" alt="Rottweiler Puppy">
                        <div class="card-body text-center">
                            <h5 class="card-title">Rottweiler Puppy</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$139.89</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="cat">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/cat 2.png') }}" class="card-img-top" alt="Cat">
                        <div class="card-body text-center">
                            <h5 class="card-title">Cat</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$29.99</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/black G.png') }}" class="card-img-top" alt="Black German Shepherd">
                        <div class="card-body text-center">
                            <h5 class="card-title">Black German Shepherd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$319</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/white G.webp') }}" class="card-img-top" alt="White German Shepherd">
                        <div class="card-body text-center">
                            <h5 class="card-title">White German Shepherd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$329</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 product-card" data-category="dog">
                    <div class="card product-card p-2">
                        <img src="{{ asset('Products/imgs/husky.jpg') }}" class="card-img-top" alt="Husky">
                        <div class="card-body text-center">
                            <h5 class="card-title">Husky</h5>
                            <div class="d-flex justify-content-between">
                                <p class="fw-bold">$79.99</p>
                                <button class="btn btn-primary btn-sm">Purchase Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
