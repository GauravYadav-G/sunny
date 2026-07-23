<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LED Aluminium Profiles | Precision & Style by Sunny Light</title>
<meta name="description" content="High-quality LED aluminium profiles for flexible, recessed, and surface applications — combining design precision and functional lighting performance.">
<meta name="keywords" content="LED aluminium profiles, LED linear profiles, recessed profile, surface profile, flexible LED profile, LED channel, architectural lighting profiles">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/CSS/main.css">
    <link rel="stylesheet" href="assets/CSS/outdoor-lights-productpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="shortcut icon" href="assets\img\logoH__1_-removebg-preview.png" type="image/x-icon">

    <style>
        .product-card {
            border-radius: 12px;
            background: #fff;
            padding: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            display: flex;
            flex-direction: row;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .product-card img {
            border-radius: 8px;
        }

        .product-details table {
            font-size: 14px;
        }

        .dimension-image {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .dimension-image img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .profile-btn {
            background-color: #2457AA !important;
            color: #fff !important;
        }

        @media (max-width: 768px) {
            /* ===== MOBILE VIEW ===== */
    @media (max-width: 768px) {
        .product-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* both images stacked on top */
        .product-images {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            gap: 10px;
        }

        .product-images img {
            width: 100%;
            max-width: 350px;
            height: auto;
            object-fit: contain;
            border-radius: 10px;
        }

        /* table in middle below both images */
        .product-details {
            width: 95%;
            background: #fff;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            margin-top: 10px;
        }

        .product-details table {
            width: 100%;
            font-size: 13px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        .product-details table th,
        .product-details table td {
            padding: 6px 8px;
            text-align: left;
        }

        .product-details table th {
            width: 45%;
            font-weight: 600;
            color: #333;
        }

        .product-details table td {
            color: #555;
        }

        .product-details table tr {
            border-bottom: 1px solid #eee;
        }

        .product-details table tr:last-child {
            border-bottom: none;
        }
    }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- Production Category Section -->
    <section class="productpage-category mt-4">
        <div class="page-width main-productcategory">
            <!-- Sidebar -->
            <div class="mysidebar">
                <div class="mysidebar-section">
                    <div class="mysidebar-header">
                        <h4>Profile Lights</h4>
                        <button class="dropdown-toggle" id="mobileDropdownBtn">
        <i class="fa fa-chevron-down" ></i>
      </button>
                    </div>
                    <div class="mysidebar-content" id="mobileDropdownContent">
                        <ul class="mysidebar-list">
                            <li><a href="#Led-Aluminium-Profiles" class="filter-link" data-category="step-light">Led
                                    Aluminium Profiles</a></li>
                            <li><a href="#Sl-Profiles" class="filter-link" data-category="step-light">SL Profiles</a>
                            <li><a href="#Ip67-Flexible-Neon-Profiles" class="filter-link" data-category="step-light">Ip67 Flexible Neon Profiles</a>
                            <li><a href="#Ip67-Flexible-Neon-Profile-Accessories" class="filter-link" data-category="step-light">IP67 Flexible Neon Profile Accessories</a>
                            <li><a href="#C-Series-Recessed-Flexible-Neon-Profile-Without-Thread" class="filter-link" data-category="step-light">C Series Recessed Flexible Neon Profile Without Thread</a>
                            <li><a href="#D-Series-Led-Flexible-Neon-Profile" class="filter-link" data-category="step-light">D Series LED Flexible Neon Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="products-grid">
                <div class="products-container">
                    <!-- Product Group -->
                    <div class="product-group" id="Led-Aluminium-Profiles">
                        <h3 class="product-group-title">Led Aluminium Profiles</h3>

                        <div class="row">
                            <!-- Product Cards Start -->
                            <!-- Column 1 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-1.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL869</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx9x9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>5.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/p-2.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn  mt-2 request-btn profile-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 2 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-3.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL870</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx9x9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>5.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-2.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 3 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-4.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-3.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 4 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-5.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624-839</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x12.9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-4.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 5 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-6.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-6.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 6 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-7.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL624A-839A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx10x12.9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-7.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 7 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/pp-7.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL508</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.4 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/ppi-7.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 8 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-8.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL508-102C</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.4 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-8.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 9 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-9.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL509</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.4x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-9.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 10 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-10.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL509-103</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x6.85 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-10.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 11 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-11.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x9.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>21.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-11.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 12 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-12.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617-801A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.3x9.7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>20.7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-12.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 13 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-13.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x9.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>21.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-13.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 14 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-14.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL617-802A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x9.7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>21.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-14.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 15 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-15.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL630</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx12.3x8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>15.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-15.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 16 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-16.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL630-885</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx12.3x8.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>15.3 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-16.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 17 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-17.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SLV111</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx11x11 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-17.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 18 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-18.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code"> SL1616</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx16x16 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-18.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 19 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-19.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL525</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx13.3x6.9 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-19.jpg" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>

                                    </div>

                                </div>

                            </div>

                            <!-- Column 20 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-20.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL502</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx15x7 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-20.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 21 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-21.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL507ZX</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.4x12.1 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-21.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 22 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-21.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL505</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.4x12.1 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>13 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-21.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 23 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-23.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL605</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17.5x12.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>24.5 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-23.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 24 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-24.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL613</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx19x14.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>19 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-24.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 25 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-25.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL613B</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx17x14.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Extra</th>
                                                    <td>24 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-25.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>


                            <!-- Column 26 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-27.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL712</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx23.5x27.6mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>19.57 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P(Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Extra</th>
                                                    <td>36 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-27.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 27 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-26.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL712A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx24x24 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>22.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-26.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 28 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-28.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL717</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>50 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>30 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-28.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 29 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-29.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL809</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx35x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>





                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-29.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 30 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-30.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL808</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx33.6x34.8mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P(Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>




                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-31.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 31 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-31.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL706</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx49x32 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>45 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>




                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-31.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 32 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-32.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SLA62</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx35x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-32.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 33 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-33.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL810</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx46.58x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-33.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Column 34 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-36.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL820</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx76x76 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-36.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 35 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-34.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL710</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx35.6x66.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>32.4 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-34.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 36 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-35.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL707A</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx49.18x75 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>29 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-35.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>



                            <!-- Column 37 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-37.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL811a</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx75.2x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>50 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-37.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 38 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-38.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL9032</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx75x32 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>75 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-38.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 39 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-39.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL818</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx100x55 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>80 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-39.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 40 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-40.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL9099</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx102x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>81 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-40.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 41 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-40.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">

                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL6262-560</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx62x62 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>60 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-40.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 42 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-41.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL777</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx102x35 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-41.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 43 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-42.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL211</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx105x40 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>33.2 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-42.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 44 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-43.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL2126GB</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx21.6x25.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-43.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 45 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-44.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL3020</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx30x20 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12.5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-44.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 46 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-46.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL802</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx53.2x26.6 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>12 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-46.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Column 47 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/p-47.png" alt="Product Image"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL2109B</td>
                                                </tr>
                                                <tr>
                                                    <th>Size</th>
                                                    <td>Lx20.8x8.8 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>PCB</th>
                                                    <td>5 mm</td>
                                                </tr>
                                                <tr>
                                                    <th>M.R.P (Rs./Meter)</th>
                                                    <td>On Request</td>
                                                </tr>
                                                <tr>
                                                    <th>Height</th>
                                                    <td>23.8 mm</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/pi-47.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Cards End -->
                        </div> <!-- End Row -->




                    </div> <!-- End Product Group -->

                    <!-- Product Group -->
                    <div class="product-group" id="Sl-Profiles">
                        <h3 class="product-group-title">SL Profiles</h3>

                        <div class="row">

                            <!-- SL 1212 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p1.png" alt="SL 1212" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1212</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p1-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1515 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p2.png" alt="SL 1515" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1515</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p2-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1515T -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p3.png" alt="SL 1515T"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1515T</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p3-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 510 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p4.png" alt="SL 510" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 510</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p4-1.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 618 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p5.png" alt="SL 618" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 618</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p6.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 124 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p7.png" alt="SL 124" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 124</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p8.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1206 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p9.png" alt="SL 1206" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1206</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p10.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 1919 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p11.png" alt="SL 1919" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 1919</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p12.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 124T -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p13.png" alt="SL 124T" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 124T</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p14.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 2020 -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p15.png" alt="SL 2020" class="img-fluid"
                                            style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 2020</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p16.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 2020T -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p17.png" alt="SL 2020T"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 2020T</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p18.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                            <!-- SL 2109B -->
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="product-image">
                                        <img src="assets/img/profile-light/sl-p19.png" alt="SL 2109B"
                                            class="img-fluid" style="max-width:180px;">
                                    </div>
                                    <div class="product-details flex-grow-1">
                                        <table class="table table-sm table-bordered mb-3">
                                            <tbody>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td class="product-code">SL 2109B</td>
                                                </tr>
                                                <tr>
                                                    <th>Body Color</th>
                                                    <td>Silver Anotise</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dimension-image">
                                            <img src="assets/img/profile-light/sl-p20.png" alt="Dimension Drawing"
                                                class="img-fluid">
                                        </div>
                                        <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal"
                                            data-bs-target="#queryModal">Request Query</button>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End Row -->
                    </div>
                     <!-- End Product Group -->

              <!-- Product Group -->       
<div class="product-group" id="Ip67-Flexible-Neon-Profiles">
  <h3 class="product-group-title">Ip67 Flexible Neon Profiles</h3>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-21.png" alt="SL 1010N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-22.png" alt="SL 1212N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-23.png" alt="SL 1616N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-24.png" alt="SL 2020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 2020N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-25.png" alt="SL 2520N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 2520N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-26.png" alt="SL 3020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 3020N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-27.png" alt="SL 5025N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 5025N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-28.png" alt="SL 1616 (3 Side) N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) N</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
</div><!-- End Product Group -->
              
                     <!-- Product Group --> 
                      <div class="product-group" id="Ip67-Flexible-Neon-Profile-Accessories">
  <h3 class="product-group-title">IP67 Flexible Neon Profile Accessories</h3>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-29.png" alt="SL 1010 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010 Back Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-30.png" alt="SL 1010 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010 Side Clamp Wire Part</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-31.png" alt="SL 1010 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1010 Side Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-29.png" alt="SL 1212 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212 Back Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-30.png" alt="SL 1212 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212 Side Clamp Wire Part</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-31.png" alt="SL 1212 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1212 Side Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-29.png" alt="SL 1616 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 Back Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-30.png" alt="SL 1616 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 Side Clamp Wire Part</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 9 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/sl-31.png" alt="SL 1616 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL 1616 Side Clamp</td></tr>
              <tr><th>Body Color</th><td>White</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 1: SL 1616 (3 Side) -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-29.png" alt="SL 1616 (3 Side) " class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 2: SL 1616 (3 Side) Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-30.png" alt="SL 1616 (3 Side) Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 3: SL 1616 (3 Side) Back Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-31.png" alt="SL 1616 (3 Side) Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 1616 (3 Side) Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 4: SL 2520 Back Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-32.png" alt="SL 2520 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 2520 Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 5: SL 2520 Side Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-30.png" alt="SL 2520 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 2520 Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 6: SL 2520 Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-31.png" alt="SL 2520 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 2520 Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 7: SL 3020 Back Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-33.png" alt="SL 3020 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 3020 Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 8: SL 3020 Side Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-34.png" alt="SL 3020 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 3020 Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 9: SL 3020 Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-35.png" alt="SL 3020 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 3020 Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 10: SL 5025 Back Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-36.png" alt="SL 5025 Back Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 5025 Back Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 11: SL 5025 Side Clamp Wire Part -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-37.png" alt="SL 5025 Side Clamp Wire Part" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 5025 Side Clamp Wire Part</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>

<!-- Product 12: SL 5025 Side Clamp -->
<div class="col-md-6">
    <div class="product-card">
        <div class="product-image">
            <img src="assets/img/profile-light/sl-38.png" alt="SL 5025 Side Clamp" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
            <table class="table table-sm table-bordered mb-3">
                <tbody>
                    <tr><th>Product Code</th><td class="product-code">SL 5025 Side Clamp</td></tr>
                    <tr><th>Body Color</th><td>White</td></tr>
                </tbody>
            </table>
            <button class="btn mt-2 request-btn profile-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
    </div>
</div>


    
  </div> <!-- End Row -->
</div>

<!-- Product Group C seriese-->
<div class="product-group" id="C-Series-Recessed-Flexible-Neon-Profile-Without-Thread">
  <h3 class="product-group-title">C Series Recessed Flexible Neon Profile Without Thread</h3>

  <div class="row">
    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs1.png" alt="SL-N1010C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N1010C</td></tr>
              <tr><th>Size</th><td>10×10MM</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs2.png" alt="SL-N1510C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N1510C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs3.png" alt="SL-N1616C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N1616C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs4.png" alt="SL-N2010C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N2010C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs5.png" alt="SL-N2020C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N2020C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs6.png" alt="SL-N3020C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N3020C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/cs7.png" alt="SL-N4015C" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-N4015C</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
</div>

<!-- Product Group -->
<div class="product-group" id="D-Series-Led-Flexible-Neon-Profile">
  <h3 class="product-group-title">D Series LED Flexible Neon Profile</h3>

  <div class="row">

    <!-- Product 1 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds1.png" alt="SL-D1010N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1010N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds2.png" alt="SL-D1212N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1212N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds3.png" alt="SL-D1510N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1510N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds4.png" alt="SL-D1616N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D1616N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds5.png" alt="SL-D2010N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D2010N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds6.png" alt="SL-D2020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D2020N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds7.png" alt="SL-D2520N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D2520N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds8.png" alt="SL-D3020N" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D3020N</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 9 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds9.png" alt="SL-D16-360" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D16-360</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

    <!-- Product 10 -->
    <div class="col-md-6">
      <div class="product-card">
        <div class="product-image">
          <img src="assets/img/profile-light/ds10.png" alt="SL-D26-360" class="img-fluid" style="max-width:180px;">
        </div>
        <div class="product-details flex-grow-1">
          <table class="table table-sm table-bordered mb-3">
            <tbody>
              <tr><th>Product Code</th><td class="product-code">SL-D26-360</td></tr>
            </tbody>
          </table>
          <button class="btn profile-btn mt-2 request-btn" data-bs-toggle="modal" data-bs-target="#queryModal">Request Query</button>
        </div>
      </div>
    </div>

  </div> <!-- End Row -->
</div>


                </div>
            </div>
        </div>
    </section>


     <!-- Modal Form -->
    <div class="modal fade" id="queryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request Query</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="queryForm" action="profilelgt-prdt-form.php" method="POST">
                        <div class="mb-3">
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control" id="productCode" name="productCode" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="customerName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="customerName" name="customerName" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="customerEmail" name="customerEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="customerMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="customerMessage" rows="3" name="customerMessage"
                            required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Auto Product Code JS -->
    <script>
        const queryModal = document.getElementById('queryModal');
        queryModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // jis button se modal open hua
            const productCard = button.closest('.product-card'); // parent card find
            const productCode = productCard.querySelector('.product-code').innerText.trim();
            const modalInput = queryModal.querySelector('#productCode');
            modalInput.value = productCode; // modal me auto-fill
        });
    </script>

  <!-- Mobile view script -->
 <!-- ===== JS ===== -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("mobileDropdownBtn");
    const content = document.getElementById("mobileDropdownContent");

    btn.addEventListener("click", () => {
      content.classList.toggle("active");
      btn.querySelector("i").classList.toggle("fa-chevron-down");
      btn.querySelector("i").classList.toggle("fa-chevron-up");
    });
  });
</script>

 <?php
    if (!empty($_SESSION['query_success'])) {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Your query has been submitted!",
                text: "We will get back to you shortly.",
                confirmButtonText: "OK"
            });
        </script>';
        unset($_SESSION['query_success']); // remove flag
    }
    ?>

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <script src="assets/JS/index.js"></script>
</body>

</html>