<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Cumpio Activity</title>
</head>

<body>

    <section class="h-100 bg-dark styleBG">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="./images/bg.png" alt="Sample photo" class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;" />
                            </div>

                            <div class="col-xl-6">
                                <form action="process.php" method="post">
                                    <div class="card-body p-md-5 text-black formTextStyle">
                                        <h3 class="mb-5 text-uppercase formTitleStyle">Registration Form</h3>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="firstName" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="middleName" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Middle name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" name="lastName" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="email" id="form3Example97" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="userName" id="form3Example8" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="userPassword" id="form3Example8" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Password</label>
                                        </div>

                                        <div class="col-md-2 mb-4">
                                            <select class="form-control select formTextStyle" name="roles" data-style="btn-primary">
                                                <option value="0">Role</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="submit" name="userSignup" class="btn btn-warning btn-lg ms-2 buttonTextStyle">
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>