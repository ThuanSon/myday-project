<!DOCTYPE html>
<html>

<head>
    <title>Simple Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        td {
            height: 200px;
            width: 200px;
        }

        a {
            margin: 20px;
        }

        .bg-primary {
            background-color: #9575CD !important;
        }
        .col-md-3{
            background-color: #9575CD;
        }
    </style>
</head>

<body>
    <!-- hearder -->
    <header class="container-fluid bg-primary p-2">
        <div class="row">
            <!-- Left Section -->
            <div class="col-md-3 col-lg-2 d-md-block sidebar">
                <!-- Icon -->
                <div >
                    <button class="btn"><i class="bi bi-list"></i></button>
                    <!-- Logo -->
                    <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 100px;">
                </div>
                <!-- Banner -->
                <div class="banner">
                    <label>Discover amazing content here!</label>
                </div>
            </div>
            <!-- Right Section -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-end align-items-center">

                    <div>
                        <button class="btn"><i class="bi bi-search"></i></button>
                    </div>
                    <div>
                        <button class="btn"><i class="bi bi-bell"></i></button>
                    </div>
                    <!-- User Avatar -->
                    <div class="text-end">
                        <button class="btn"><i class="bi bi-person-circle"></i></button>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <!-- Aside (Menu) -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Ngày của tôi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Điều tôi biết ơn
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Tháng của tôi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Một tháng nhìn lại
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Your content goes here -->
                <h2 class="text-center mt-4">November 2023</h2>
                <table class="table table-bordered">

                    <thead>

                        <tr class="table-primary">
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td>
                            </td>
                            <td></td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>

                        </tr>
                        <tr>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>


                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                        </tr>

                        <tr>

                            <td>27</td>


                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td></td>
                            <td></td>


                            <td></td>
                        </tr>

                    </tbody>

                </table>

            </main>
        </div>
    </div>
    <footer class="bg-dark text-light">
        <div class="container-fluid">
            <div class="row">
                <!-- First Column (Logo and Banner) -->
                <div class="col-md-3">
                    <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 100px;">
                    <div class="mt-3">
                        <h4>Banner</h4>
                        <p>Discover amazing content here!</p>
                    </div>
                </div>
                <!-- Second Column (Menu) -->
                <div class="col-md-3">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Ngày của tôi</a></li>
                        <li><a href="#">Điều tôi biết ơn</a></li>
                    </ul>
                </div>
                <!-- Third Column (Menu) -->
                <div class="col-md-3">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Tháng của tôi</a></li>
                        <li><a href="#">Một tháng nhìn lại</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
                <!-- Fourth Column (Contact) -->
                <div class="col-md-3">
                    <h4>Contact</h4>
                    <p>Email: contact@example.com</p>
                    <p>Phone: +1-123-456-7890</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>